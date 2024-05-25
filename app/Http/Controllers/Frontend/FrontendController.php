<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CampaingProduct;
use App\Models\GroupProduct;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\MultiImg;
use App\Models\Page;
use App\Models\Carm;
use App\Models\OrderDetail;
use App\Models\Vendor;
use App\Models\Coupon;
use App\Models\ServiceBefore;
use App\Models\Shipping;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Image;
//use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Utility\CategoryUtility;
use Carbon\Carbon;

class FrontendController extends Controller
{
    /*=================== Start Index Methoed ===================*/
    public function index(Request $request)
    {


        //Product All Status Active
        // $products = Product::where('status',1)->orderBy('id','DESC')->get();

        $products = Product::where('status',1)->where('is_featured',1)->orderBy('id','DESC')->get();

        // Search Start
        $sort_search =null;
        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('name_en', 'like', '%'.$sort_search.'%');
            // dd($products);
        }else{
            $products = Product::where('status',1)->where('is_featured',1)->orderBy('id','DESC')->get();
        }
        // $products = $products->paginate(15);
        // Search Start

        // Header Category Start
        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->where('parent_id', 0)->limit(11)->get();
        $subcategories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(11)->get();
        // Header Category End

        // Category Featured all
        $featured_category = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->limit(15)->get();

        //Slider
        $sliders = Slider::where('status',1)->where('type', 1)->orderBy('id','DESC')->limit(10)->get();
        $middleSliders = Slider::where('status',1)->where('type', 2)->orderBy('id','DESC')->limit(10)->get();
        // Product Top Selling
        $product_top_sellings = Product::where('status',1)->orderBy('id','ASC')->limit(9)->get();
        //Product Trending
        $product_trendings = Product::where('status',1)->orderBy('id','DESC')->limit(12)->get();
        //Product Recently Added
        $product_recently_adds = Product::where('status',1)->latest()->skip(2)->limit(9)->get();

        //featured_products
        $product_featured = Product::where('status',1)->where('is_featured', 1)->latest()->limit(9)->get();

        $product_top_rates = Product::where('status',1)->orderBy('regular_price')->limit(9)->get();
        // Home Banner
        $home_banners = Banner::where('status',1)->orderBy('id','DESC')->get();
        $middle_banners1 = Banner::where('status',1)->where('position',2)->orderBy('id','DESC')->limit(2)->get();
        $middle_banners2 = Banner::where('status',1)->where('position',3)->orderBy('id','DESC')->limit(2)->get();

        // Daily Best Sells
        //dd(date('Y-m-d'));
        $todays_sale  = OrderDetail::where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        //$todays_sale  = DB::table('order_details')->select('*')->where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        $todays_sale = $todays_sale->unique('product_id');
        //dd($todays_sale);

        // today_best_sales
        // $today_best_sales  = Product::where('status',1)->where('is_deals',1)->latest()->get();
        // dd($today_best_sales);

        //Home2 featured category
        $home2_featured_categories = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->get();
        // Hot deals product
        $hot_deals = Product::where('status',1)->where('is_deals',1)->latest()->take(9)->get();

        $campaign_products = CampaingProduct::all();

//        $home_view = 'FrontEnd.home.index';
        $home_view = 'FrontEnd.home.index2';

        // $campaign = \App\Models\Campaing::where('status', 1)->where('is_featured', 1)->first();
        // $start_diff=date_diff(date_create($campaign->flash_start), date_create(date('d-m-Y H:i:s')));
        // $end_diff=date_diff(date_create(date('d-m-Y H:i:s')), date_create($campaign->flash_end));
        // dd($end_diff);
        // if($campaign && $start_diff->invert == 0 && $end_diff->invert == 0){
        //     dd($campaign);
        // }
        //dd($hot_deals);

        //dd($featured_category);

        $brands = Brand::where('status',1)->get();

        return view($home_view, compact('brands','categories', 'subcategories', 'sliders', 'middleSliders', 'product_featured', 'featured_category','products','product_top_sellings','product_trendings','product_recently_adds','product_top_rates','home_banners', 'middle_banners1', 'middle_banners2','sort_search','todays_sale','home2_featured_categories','hot_deals'));
    } // end method

    // public function shopgrid(){
    //     $products = Product::where('status',1)->orderBy('id','DESC')->get();

    //     return view('FrontEnd.shopgrid.index', compact('products'));
    // }

    public function index2(Request $request)
    {

        //Product All Status Active
        $products = Product::where('status',1)->orderBy('id','DESC')->get();

        // Search Start
        $sort_search =null;
        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('name_en', 'like', '%'.$sort_search.'%');
            // dd($products);
        }else{
            $products = Product::where('status',1)->orderBy('id','DESC')->get();
        }
        // $products = $products->paginate(15);
        // Search Start

        // Header Category Start
        $categories = Category::orderBy('name_en','DESC')->where('status','=',1)->limit(5)->get();
        // Header Category End

        // Category Featured all
        $featured_category = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->limit(15)->get();

        //Slider
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(10)->get();
        // Product Top Selling
        $product_top_sellings = Product::where('status',1)->orderBy('id','ASC')->limit(2)->get();
        //Product Trending
        $product_trendings = Product::where('status',1)->orderBy('id','ASC')->skip(2)->limit(2)->get();
        //Product Recently Added
        $product_recently_adds = Product::where('status',1)->latest()->skip(2)->limit(2)->get();

        $product_top_rates = Product::where('status',1)->orderBy('regular_price')->limit(2)->get();
        // Home Banner
        $home_banners = Banner::where('status',1)->where('position',1)->orderBy('id','DESC')->get();

        // Daily Best Sells
        //dd(date('Y-m-d'));
        $todays_sale  = OrderDetail::where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        // dd($todays_sale);

        //Home2 featured category
        $home2_featured_categories = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->get();
        // Hot deals product
        $hot_deals = Product::where('status',1)->where('is_deals',1)->latest()->take(4)->get();

        return view('frontend.home2', compact('categories','sliders','featured_category','products','product_top_sellings','product_trendings','product_recently_adds','product_top_rates','home_banners','sort_search','todays_sale','home2_featured_categories','hot_deals'));
    } // end method

    /* ========== Start ProductDetails Method ======== */
    public function getCarsByBrandfrontend($brand_id){

        $cars = Carm::where('brand_id', $brand_id)->get();
             return response()->json($cars);
    }

    public function loadMoreProducts(Request $request)
    {
        $count = $request->input('count', 12); // Number of products to load (default is 12)
        $offset = $request->input('offset', 0); // Offset for pagination

        $products = Product::where('status', 1)
            ->orderBy('id', 'desc')
            ->skip($offset)
            ->limit($count)
            ->get();

        $nextOffset = $offset + $count;

        return response()->json(['products' => $products, 'nextOffset' => $nextOffset]);
    }
    public function findacar(){


        $cars = Banner::orderBy('id','desc');

       if(isset($_GET['manufacture']) && $_GET['manufacture']>0){
         $cars = $cars->where('manufacturer', $_GET['manufacture']);
       }
       if(isset($_GET['model']) && $_GET['model']>0){
         $cars = $cars->where('model', $_GET['model']);
       }
       if(isset($_GET['year']) && $_GET['year']>0){
         $cars = $cars->where('year_of_manufacturer', $_GET['year']);
       }
       if(isset($_GET['fuel_type']) && $_GET['fuel_type']>0){
         $cars = $cars->where('fuel_type', $_GET['fuel_type']);
       }

       if(isset($_GET['search']) && $_GET['search']>0){
         $cars = $cars->where('title_en', 'LIKE', "%{$_GET['search']}%");
       }

    $data['cars'] = $cars->paginate(9);

    $data['brands'] = brand::orderBy('id','desc')->get();
    return view('FrontEnd.find-a-car.index',$data);
    }
    public function productDetails($slug){

        $product = Product::where('slug', $slug)->first();
        if($product){
            if($product->id){
                $multiImg = MultiImg::where('product_id',$product->id)->limit(3)->get();
            }

            /* ================= Product Color Eng ================== */
            $color_en = $product->product_color_en;
            $product_color_en = explode(',', $color_en);

            /* ================= Product Size Eng =================== */
            $size_en = $product->product_size_en;
            $product_size_en = explode(',', $size_en);

            /* ================= Realted Product =============== */
            $cat_id = $product->category_id;
            $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$product->id)->orderBy('id','DESC')->get();

            $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
            $new_products = Product::orderBy('name_en')->where('status','=',1)->limit(3)->latest()->get();
            $shipping_charge = Shipping::where('type',1)->first();

            if($product->product_type == 2){

                $group_products = GroupProduct::where('product_id', $product->id)->get();
//                return $group_products;
            }
            else{
                $group_products = [];
            }

            return view('FrontEnd.product.product_details', compact('group_products', 'shipping_charge', 'product','multiImg','categories','new_products','product_color_en','product_size_en','relatedProduct'));
        }

        return view('FrontEnd.product.productNotFound');
    }

    /* ========== Start CatWiseProduct Method ======== */
    public function CatWiseProduct(Request $request,$slug){

        $category = Category::where('slug', $slug)->first();
        // dd($category);

        // Top filter Start
        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }
        // Top filter End

        $min_price = $request->get('filter_price_start');
        $max_price = $request->get('filter_price_end');

        $conditions = ['status' => 1];

        if($request->brand_id != null && $request->brand_id>0){
            $conditions = array_merge($conditions, ['brand_id' => $request->brand_id]);
        }

        $products = Product::where($conditions);

        if($min_price != null && $max_price != null){
            $products->where('regular_price', '>=', $min_price)->where('regular_price', '<=', $max_price);
        }

        $category_ids = CategoryUtility::children_ids($category->id);
        $category_ids[] = $category->id;
        $products->whereIn('category_id', $category_ids);

        $nw_cats = Banner::where('category',$category->slug)->get();

        $products = $products->orderBy('created_at', 'desc')->paginate(12);

        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->get();
        // dd($products);
        $subcategories = Category::orderBy('name_en','ASC')->where('status',1)->where('parent_id',$category->id)->get();

        return view('FrontEnd.product.category_view',compact('nw_cats','products','categories','category','sort_by','brand_id','subcategories'));
    } // end method
    /* ========== End CatWiseProduct Method ======== */

     /* ========== Start CatWiseProduct Method ======== */
    public function VendorWiseProduct(Request $request,$slug){

        $vendor = Vendor::where('slug', $slug)->first();
        // dd($category);

        $products = Product::where('status', 1)->where('vendor_id',$vendor->id)->orderBy('id','DESC')->paginate(20);
        // Price Filter
        if ($request->get('filter_price_start')!== Null && $request->get('filter_price_end')!== Null ){
            $filter_price_start = $request->get('filter_price_start');
            $filter_price_end = $request->get('filter_price_end');

            if ($filter_price_start>0 && $filter_price_end>0) {
                $products = Product::where('status','=',1)->where('vendor_id',$vendor->id)->whereBetween('regular_price',[$filter_price_start,$filter_price_end])->paginate(20);
                // dd($products);
            }

        }

        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->get();
        // dd($products);

        return view('frontEnd.product.vendor_view',compact('products','categories','vendor'));
    } // end method
    /* ========== End CatWiseProduct Method ======== */

    /* ========== Start TagWiseProduct Method ======== */
    // public function TagWiseProduct($id,$slug){

    //     $products = Product::where('status','=',1)->where('tag_id',$id)->orderBy('id','DESC')->paginate(5);
    //     $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
    //     $tags = Tag::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
    //     $tag = Tag::find($id);
    //     $new_products = Product::orderBy('name_en')->where('status','=',1)->limit(3)->latest()->get();

    //     return view('frontend.product.tag_view',compact('products','categories','tags','tag','new_products'));
    // } // end method
    /* ========== End TagWiseProduct Method ======== */


    /* ================= Start ProductViewAjax Method ================= */
    public function ProductViewAjax($id){

        $product = Product::with('category','brand')->findOrFail($id);
        //dd($product);
        $attribute_values = json_decode($product->attribute_values);

        $attributes = new Collection;
        foreach($attribute_values as $key => $attribute_value){
            $attr = Attribute::select('id','name')->where('id',$attribute_value->attribute_id)->first();
            // $attribute->name = $attr->name;
            // $attribute->id = $attr->id;
            $attr->values = $attribute_value->values;
            $attributes->add($attr);
        }


        return response()->json(array(
            'product' => $product,
            'attributes' => $attributes,
        ));
    }
    /* ================= END PRODUCT VIEW WITH MODAL METHOD =================== */




    /* ================= Start Product Search =================== */
    public function ProductSearch(Request $request){
        //$request->validate(["search" => "required"]);
        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }

        $item = $request->search;
        $category_id = $request->searchCategory;
        // echo "$item";

        // Header Category Start //
        $categories = Category::orderBy('name_en','DESC')->where('status', 1)->get();
        if($category_id == 0){
            $products = Product::where('name_en','LIKE',"%$item%")->where('status'
            , 1)->latest()->get();
        }else{
            $products = Product::where('name_en','LIKE',"%$item%")->where('category_id', $category_id)->where('status'
            , 1)->latest()->get();
        }

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();

        return view('FrontEnd.product.search',compact('products','categories','attributes','sort_by','brand_id'));

    } // end method

    /* ================= End Product Search =================== */

    /* ================= Start Advance Product Search =================== */
    public function advanceProduct(Request $request){

        // return $request;

        $request->validate(["search" => "required"]);

        $item = $request->search;
        $category_id = $request->category;
        // echo "$item";

        // Header Category Start //
        $categories = Category::orderBy('name_en','DESC')->where('status', 1)->get();

        if($category_id == 0){
            $products = Product::where('name_en','LIKE',"%$item%")->where('status'
            , 1)->latest()->get();
        }else{
            $products = Product::where('name_en','LIKE',"%$item%")->where('category_id', $category_id)->where('status'
            , 1)->latest()->get();
        }

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();

        return view('FrontEnd.product.advance_search',compact('products','categories','attributes'));

    } // end method

    /* ================= End Advance Product Search =================== */

    /* ================= Start Hot Deals Page Show =================== */
    public function hotDeals(Request $request){

        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }
        // Hot deals product
        $products = Product::where('status',1)->where('is_deals',1)->paginate(5);

        // Category Filter Start
        if ($request->get('filtercategory')){

            $checked = $_GET['filtercategory'];
            // filter With name start
            $category_filter = Category::whereIn('name_en', $checked)->get();
            $catId = [];
            foreach($category_filter as $cat_list){
                array_push($catId, $cat_list->id);
            }
            // filter With name end

            $products = Product::whereIn('category_id', $catId)->where('status', 1)->where('is_deals',1)->latest()->paginate(10);
            // dd($products);
        }
        // Category Filter End

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();
        // End Shop Product //
        return view('FrontEnd.deals.hot_deals',compact('attributes','products','sort_by','brand_id'));

    } // end method

    public function applycoupon(Request $request)
    {
    $coupon = Coupon::where('coupon_code', $request->apply_coupon)
        ->where('status', 1)
        ->where('total_use_limit', '>', 0) // Ensure total_use_limit is greater than 0
        ->first();

        if ($coupon) {
            // Check if the coupon has expired
            $now = Carbon::now();
            $expirationDate = Carbon::parse($coupon->expire_date);

            if ($expirationDate->greaterThanOrEqualTo($now)) {
                if ($coupon->discount <= $request->cart_value) {
                    // Calculate discount based on coupon type
                    $discountAmount = ($coupon->discount_type == 0) ? ($coupon->discount / 100) * $request->cart_value : $coupon->discount;
                    // ... your existing code for applying the coupon
                    // Fetch shipping charge based on the selected shipping_id
                    $shippingCharge = $this->getShippingCharge($request->shipping_id);
                    // Return both coupon discount and shipping charge as JSON response
                    Session::put('couponCode', $coupon->coupon_code);
                    Session::put('discountType', $coupon->discount_type);
                    Session::put('amount',  $discountAmount);
                    Session::put('couponId', $coupon->id);
                    return response()->json(['success' => 'Coupon Applied Successfully', 'discount' => $discountAmount, 'shipping_charge' => $shippingCharge]);
                } else {
                    return back()->with('message', 'Not Enough Cart Amount To Get Offer. Please Update Cart Amount.');
                }
            } else {
                return response()->json(['error' => 'Coupon Date Is Expired']);
            }
        }
    // Handle other cases if necessary
    return back()->with('message', 'Invalid coupon code');
}

// Add a helper method to fetch the shipping charge based on shipping_id
protected function getShippingCharge($shipping_id)
{
    // Find the shipping record based on the provided shipping_id
    $shipping = Shipping::find($shipping_id);

    // Check if the shipping record exists
    if ($shipping) {
        // Return the shipping charge from the database
        return $shipping->shipping_charge;
    }

    // If the shipping record is not found, return a default value or handle it as needed
    return 0;
}

    public function PageContact()
    {
        return view('FrontEnd.contact.index');
    }
    public function PageTerms()
    {   $page = Page::first();
        return view('FrontEnd.terms_conditions.index',compact('page'));
    }
    public function PagePolicy()
    {   $page = Page::first();
        return view('FrontEnd.privacy_policy.index',compact('page'));
    }

    public function PageHelp()
    {    $page = Page::first();
        return view('FrontEnd.help.index', compact('page'));
    }

    public function PageFaq()
    {
        $page = Page::first();
        return view('FrontEnd.FAQ.index', compact('page'));
    }
    public function pageAbout(){
        $page = Page::first();
        return view('FrontEnd.about_us.index', compact('page'));
     }
     public function servicebeforesale(){

        $data['brands'] = brand::orderBy('id','desc')->get();

        return view('FrontEnd.service.service-before-sale',$data);
     }
     public function ourcustomers(){
        $customers = DB::table('our_customers')->orderBy('id','desc')->get();
        return view('FrontEnd.our-customers.index',compact('customers'));

     }
     public function loanhelp(){
        return view('FrontEnd.car-load.loan-help');
    }

     public function loancal(){
       $data['cars'] = DB::table('banners')->get();
        return view('FrontEnd.car-load.loan-cal',$data);
    }
    public function getCarPrice($id)
    {
        // $car = Car::find($id);
        $car = DB::table('banners')->where('id',$id)->first();

        if ($car) {
            return response()->json(['price' => $car->price]);
        } else {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }
     public function accessories(){
        $data['products'] = Product::orderBy('name_en')->where('status','=',1)->latest()->get();
        return view('FrontEnd.accessories.index',$data);
     }

    public function loginCheck()
    {
        if(Auth::user() && Auth::user()->role == 3){
            return redirect()->route('checkout');
        }
        else{
            return redirect()->route('login');
        }

    }
    public function orderTracking()
    {
        return view('FrontEnd.page.order_tracking');
    }

    public function orderTrack(Request $request)
    {
        $this->validate($request,[
            'invoice_no' => 'required',
            'phone' => 'required',
        ]);
        $order = Order::where('invoice_no', $request->invoice_no)->where('phone', $request->phone)->first();
        if(!$order){
            $notification = array(
                'message' => 'Required Data Not Found.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        // dd($order);
        return view('frontend.page.track',compact('order'));
    }

    public function cardetails($id){
        $data['cars'] = Banner::find($id);
        return view('FrontEnd.car-details.index',$data);
    }

    public function becomeaseller(Request $request)
    {
        // return $request;
        $this->validate($request,[
            'shop_name'     => 'required',
            'phone'         => ['required','regex:/(\+){0,1}(88){0,1}01(3|4|5|6|7|8|9)(\d){8}/','min:11','max:15'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address'       => 'required',
            'shop_profile'  => 'required',
            'shop_cover'    => 'required',
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if($request->hasfile('shop_profile')){
            $image = $request->file('shop_profile');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/vendor/'.$name_gen);
            $shop_profile = 'upload/vendor/'.$name_gen;
        }else{
            $shop_profile = '';
        }

        if($request->hasfile('shop_cover')){
            $image = $request->file('shop_cover');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/vendor/'.$name_gen);
            $shop_cover = 'upload/vendor/'.$name_gen;
        }else{
            $shop_cover = '';
        }

        if($request->hasfile('nid')){
            $image = $request->file('nid');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/vendor/'.$name_gen);
            $nid = 'upload/vendor/'.$name_gen;
        }else{
            $nid = '';
        }

        if($request->hasfile('trade_license')){
            $image = $request->file('trade_license');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/vendor/'.$name_gen);
            $trade_license = 'upload/vendor/'.$name_gen;
        }else{
            $trade_license = '';
        }

        if ($request->slug != null) {
            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        }else {
            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->shop_name)).'-'.Str::random(5);
        }

        $role = 2;
        $temp = 0;
        $user = Auth::guard('admin')->user();
        if($temp != null){
            $temp = Auth::guard('admin')->user()->id;
        }


        $user = User::create([
            'name' => $request->shop_owner_name,
            'username' => $slug,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'profile_image' => $shop_profile,
            'password' => Hash::make($request->password),
            'created_by' => $temp,
            'role' => $role,
        ]);

        $user->role = 2;
        $user->status = 0;
        $user->save();

       $vendor = Vendor::create([
            'shop_owner_name' => $request->shop_owner_name,
            'shop_name' => $request->shop_name,
            'slug' => $slug,
            'user_id'=> $user->id,
            'address' => $request->address,
            'commission' => $request->commission,
            'comission_type' => $request->comission_type,
            'description' => $request->description,
            'shop_profile' => $shop_profile,
            'shop_cover' => $shop_cover,
            'nid' => $nid,
            'trade_license' => $trade_license,
            'created_by' => $temp,
        ]);

        $vendor->status = 0;
        $vendor->is_request = 1;
        $vendor->save();

        Session::flash('success','Request Successfully');
        return back();
    }

    public function pagesstore(){
    //    $page = new Page();
    //    $page->faq = $request->faq;
    //    $page->faq_bn = $request->faq_bn;
    //    $page->about = $request->about;
    //    $page->about_bn = $request->about_bn;
    //    $page->privacy = $request->privacy;
    //    $page->privacy_bn = $request->privacy_bn;
    //    $page->terms = $request->terms;
    //    $page->terms_bn = $request->terms_bn;
    //    $page->help = $request->help;
    //    $page->help_bn = $request->help_bn;
    //    $page->save();
    //    return back();
    }



    public function customerpreorderreq(Request $request){
        // dd($request);
        ServiceBefore::create([
            'preorder_manufacturer'=> $request->preorder_manufacturer,
            'preorder_year'=> $request->preorder_year,
            'preorder_color'=> $request->preorder_color,
            'preorder_delivary_date'=> $request->preorder_delivary_date,
            'preorder_model'=> $request->preorder_model,
            'preorder_grade'=> $request->preorder_grade,
            'preorder_mileage'=> $request->preorder_mileage,
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
            'position'=> 1,
        ]);

        Session::flash('success','Form Submitted Successfully');
        return back();
    }
    public function customercarexchange(Request $request){
        // dd($request);
        ServiceBefore::create([
            'your_car_manufacturer'=> $request->your_car_manufacture,
            'your_car_year'=> $request->your_car_year,
            'your_car_preferred_color'=> $request->your_car_preferred_color,
            'your_car_preferred_delivery_date'=> $request->your_car_preferred_delivery_date,
            'your_car_model'=> $request->your_car_model,
            'your_car_preferred_grade'=> $request->your_car_preferred_grade,
            'your_car_preferred_mileage'=> $request->your_car_preferred_mileage,
            'your_description'=> $request->your_description,
            'preferred_manufacturer'=> $request->preferred_manufacturercode,
            'preferred_year'=> $request->preferred_year,
            'preferred_color'=> $request->preferred_color,
            'preferred_delivary_date'=> $request->preferred_delivary_date,
            'preferred_model'=> $request->preferred_model,
            'preferred_grade'=> $request->preferred_grade,
            'preferred_mileage'=> $request->preferred_mileage,
            'preferred_description'=> $request->preferred_description,
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
            'position'=> 2,
        ]);

        Session::flash('success','Form Submitted Successfully');
        return back();
    }



}
