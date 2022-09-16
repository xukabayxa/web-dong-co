<?php

namespace App\Http\Controllers\Front;

use App\Http\Traits\ResponseTrait;
use App\Model\Admin\Banner;
use App\Model\Admin\Block;
use App\Model\Admin\CategorySpecial;
use App\Model\Admin\Contact;
use App\Model\Admin\Manufacturer;
use App\Model\Admin\Origin;
use App\Model\Admin\Partner;
use App\Model\Admin\Policy;
use App\Model\Admin\PostCategorySpecial;
use App\Model\Admin\Project;
use App\Model\Admin\Store;
use App\Model\Admin\Tag;
use App\Model\Admin\Tagable;
use App\Model\Common\User;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Vanthao03596\HCVN\Models\Province;
use Yajra\DataTables\DataTables;
use Validator;
use \stdClass;
use Response;
use App\Http\Controllers\Controller;
use App\Helpers\FileHelper;
use \Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Model\Admin\Category;
use App\Model\Admin\Product;
use App\Model\Admin\Post;
use App\Model\Admin\PostCategory;
use App\Model\Admin\Review;
use App\Model\Admin\Config;
use DB;
use Mail;
use SluggableScopeHelpers;

class FrontController extends Controller
{
    use ResponseTrait;

    public $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // danh mục sản phẩm
        $categories = Category::getAllCategory();

        // tin tức
        $posts = Post::query()->where('status', 1)->latest()->take(4)->get();

        // dự án
        $projects = Project::query()->latest()->take(4)->get();

        // sản phẩm ghim trang chủ
        $products = Product::query()->where('is_pin', true)->take(4)->get();

        $block20 = Block::query()->find(20);

        return view('site.index', compact('categories', 'posts', 'projects', 'products', 'block20'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * trang danh mục sản phẩm (index)
     */
    public function productList(Request $request)
    {
        $categories = Category::getAllCategory();
        $products = Product::query()->where('status', 1)->latest()->paginate(16);

        return view('site.product_list', compact('categories', 'products'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @param $childSlug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * cũng là trang danh mục sản phẩm
     */
    public function productCategory(Request $request, $slug, $childSlug = null)
    {
        $category = Category::findBySlug($slug);
        $category->child_categories = $this->categoryService->getChildCategory($category, 1);
        $categories = Category::getAllCategory();
        $childCategory = null;

        if ($childSlug) {
            $childCategory = Category::findBySlug($childSlug);
            $productCategory = Product::query()->where(['status' => 1, 'cate_id' => $childCategory->id])->latest()->paginate('16');
        } else {
            $productCategory = Product::query()->where(['status' => 1, 'cate_id' => $category->id])->latest()->paginate('16');
        }

        return view('site.product_category', compact('categories', 'category', 'productCategory', 'childSlug', 'childCategory'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * chi tiết sản phẩm
     */
    public function productDetail(Request $request, $slug)
    {
        $categories = Category::getAllCategory();
        $product = Product::findSlug($slug);
        $productsRelated = $product->category->products()->whereNotIn('id', [$product->id])->orderBy('created_at', 'desc')->get();

        return view('site.product_detail', compact('categories', 'product', 'productsRelated'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * danh sách tin tức
     */
    public function posts(Request $request)
    {
//        $posts = Post::query()->where('status', 1)->paginate(12);
//
//        return view('site.news', compact('posts', 'categories'));
    }

    public function getPostCategory(Request $request, $slug = null, $postSlug = null)
    {
        $categories = Category::getAllCategory();

        if (!$postSlug) {
            if ($slug) {
                $category = PostCategory::findBySlug($slug);
                $posts = $category->posts()->paginate(12);
            } else {
                $posts = Post::query()->with(['category'])->where('status', 1)->latest()->paginate(12);
            }
            return view('site.news', compact('categories', 'posts'));
        }  else {
            $post = Post::findBySlug($postSlug);
            $postsRelated = Post::query()->where('cate_id', $post->category->id)
                ->whereNotIn('id', [$post->id])->latest()->limit(5)->get();
            return view('site.news_detail', compact('post', 'postsRelated', 'categories'));
        }

    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * danh sách dự án
     */
    public function projects(Request $request)
    {
        $categories = Category::getAllCategory();
        $projects = Project::query()->paginate(12);

        return view('site.projects', compact('projects', 'categories'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * chi tiết bài viết
     */
    public function post(Request $request, $slug)
    {
        $categories = Category::getAllCategory();
        $post = Post::findBySlug($slug);
        $postsRelated = Post::query()->where('cate_id', $post->category->id)
            ->whereNotIn('id', [$post->id])->latest()->limit(5)->get();

        return view('site.news_detail', compact('post', 'categories', 'postsRelated'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * chi tiết dự án
     */
    public function project(Request $request, $slug)
    {
        $categories = Category::getAllCategory();
        $project = Project::findBySlug($slug);

        return view('site.project_detail', compact('project', 'categories'));
    }

    public function about()
    {
        $config = Config::query()->first();
        $categories = Category::getAllCategory();

        return view('site.about', compact('config', 'categories'));
    }

    public function contact(Request $request)
    {
        $categories = Category::getAllCategory();

        return view('site.contact', compact('categories'));
    }

    public function sendContact(Request $request)
    {
        $rule = [
            'user_name' => 'required',
            'phone_number' => 'required|regex:/^(0)[0-9]{9,11}$/',
            'content' => 'required',
        ];

        $translate =
            [
                'user_name.required' => 'Vui lòng nhập họ tên',
                'phone_number.required' => 'Vui lòng nhập số điện thoại',
                'phone_number.regex' => 'Số điện thoại không hợp lệ',
                'content.required' => 'Vui lòng nhập nội dung liên hệ',
            ];

        $validate = Validator::make(
            $request->all(),
            $rule,
            $translate
        );

        $json = new stdClass();

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            return Response::json($json);
        }

        $contact = new Contact();
        $contact->user_name = $request->user_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->content = $request->content;
        $contact->address = $request->address;

        $contact->save();

        return $this->responseSuccess();
    }


    public function search(Request $request)
    {
        $products = Product::query()->where('status', 1)
            ->where('name', 'like', '%' . $request->keyword . '%')->get();
        $categories = Category::getAllCategory();

        return view('site.search', compact('products', 'categories'));
    }
}
