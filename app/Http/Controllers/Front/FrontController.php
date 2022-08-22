<?php

namespace App\Http\Controllers\Front;

use App\Http\Traits\ResponseTrait;
use App\Model\Admin\Banner;
use App\Model\Admin\CategorySpecial;
use App\Model\Admin\Contact;
use App\Model\Admin\Manufacturer;
use App\Model\Admin\Origin;
use App\Model\Admin\Policy;
use App\Model\Admin\PostCategorySpecial;
use App\Model\Admin\Store;
use App\Model\Admin\Tag;
use App\Model\Admin\Tagable;
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
        return view('site.index');
    }


    public function productList(Request $request) {
        return view('site.product_list');
    }

    public function productDetail(Request $request) {
        return view('site.product_detail');
    }

    public function news(Request $request) {
        return view('site.news');
    }

    public function contact(Request $request) {
        return view('site.contact');
    }
}
