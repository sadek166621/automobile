@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp
<style>
    .submenu{
        background-color: #4581b6 !important;
    }
    .submenu a:before{
        content: none !important;
    }
    .submenu a{
        padding-right: 0 !important;
    }
</style>
<aside class="navbar-aside" id="offcanvas_aside" style="background-color: #365486">
    <div class="aside-top">
        <a href="{{ route('admin.dashboard') }}" class="brand-wrap" >
            @php
                $logo = get_setting('site_logo');
            @endphp
            @if($logo != null)
                <img src="{{ asset(get_setting('site_logo')->value ?? ' ') }}" alt="{{ env('APP_NAME') }}"  style="height: 30px !important;">
            @else
                <img src="{{ asset('upload/no_image.jpg') }}" alt="{{ env('APP_NAME') }}" style="height: 30px !important; width: 80px !important; min-width: 80px !important;">
            @endif
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="fa fa-arrow-left text-white"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ ($route == 'admin.dashboard')? 'active':'' }}" >
                <a class="menu-link" href="{{ route('admin.dashboard') }}" style="background-color: transparent">
                   <i class="fa-solid fa-house fontawesome_icon_custom"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            @if(Auth::guard('admin')->user()->role == '1')
                <li class="menu-item has-submenu
                {{ ($route == 'cars.index')? 'active':'' }}
                {{ ($route == 'cars.edit')? 'active':'' }}
                {{ ($route == 'cars.create')? 'active':'' }}
            ">
                    <a class="menu-link" href="#">
                        <i class="fa fa-car fontawesome_icon_custom"></i>
                        <span class="text">Cars</span>
                    </a>
                    <div class="submenu">
                        <a class="{{ ($route == 'cars.index') ? 'active':'' }}" href="{{ route('cars.index') }}">Cars List</a>
                        <a class="{{ ($route == 'cars.create') ? 'active':'' }}" href="{{ route('cars.create') }}">Cars Add</a>
                    </div>
                </li>
            @endif

            @if(Auth::guard('admin')->user()->role == '1')
                <li class="menu-item has-submenu
                {{ ($route == 'service-before-sell.preorder')? 'active':'' }}
                {{ ($route == 'service-before-sell.exchange')? 'active':'' }}
            ">
                    <a class="menu-link" href="#">
                        <i class="fa fa-wrench fontawesome_icon_custom"></i>
                        <span class="text">Service Before Sell</span>
                    </a>
                    <div class="submenu">
                        <a class="{{ ($route == 'service-before-sell.preorder') ? 'active':'' }}" href="{{ route('service-before-sell.preorder') }}">Preorder List</a>
                        <a class="{{ ($route == 'service-before-sell.exchange') ? 'active':'' }}" href="{{ route('service-before-sell.exchange') }}">Car Exchange List</a>
                    </div>
                </li>
            @endif

            <li class="menu-item has-submenu
                {{ ($route == 'slider.index')? 'active':'' }}
                {{ ($route == 'slider.edit')? 'active':'' }}
                {{ ($route == 'slider.create')? 'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                        <i class="fa fa-sliders fontawesome_icon_custom"></i>
                        <span class="text">Sliders</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'slider.index') ? 'active':'' }}" href="{{ route('slider.index') }}">Slider List</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'slider.create') ? 'active':'' }}" href="{{ route('slider.create') }}">Slider Add</a>
                    @endif
                </div>
            </li>

            <li class="menu-item has-submenu
                {{ ($route == 'our-customer.index')? 'active':'' }}
                {{ ($route == 'our-customer.edit')? 'active':'' }}
                {{ ($route == 'our-customer.create')? 'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                        <i class="fa fa-sliders fontawesome_icon_custom"></i>
                        <span class="text">Our-Customer</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'our-customer.index') ? 'active':'' }}" href="{{ route('our-customer.index') }}">Our Customer List</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('37', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'our-customer.create') ? 'active':'' }}" href="{{ route('our-customer.create') }}">Our Customer Add</a>
                    @endif
                </div>
            </li>

            <li class="menu-item has-submenu
                {{ ($prefix == 'admin/product') || ($prefix == 'admin/category')|| ($prefix == 'admin/unit') || ($route == 'attribute.index') || ($prefix == 'admin/brand') ? 'active' : '' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('1', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
{{--                        <i class="fa-solid fa-bag-shopping fontawesome_icon_custom"></i>--}}
                        <i class="fa-solid fa-cart-shopping fontawesome_icon_custom"></i>
                        <span class="text">Products</span>
                    </a>
                @endif
                <div class="submenu vendor-submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('1', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'product.add') ? 'active':'' }}" href="{{ route('product.add') }}">Product Add</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('2', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'product.all') ? 'active':'' }}" href="{{ route('product.all') }}">Products</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('5', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($prefix == 'admin/category') ? 'active':'' }}" href="{{ route('category.index') }}">Categories</a>
                    @endif
                     @if(Auth::guard('admin')->user()->role == '1' || in_array('13', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'attribute.index') ? 'active':'' }} d-none" href="{{ route('attribute.index') }}">Attributes</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('53', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'unit.index') ? 'active':'' }} d-none" href="{{ route('unit.index') }}">Unit</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('9', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($prefix == 'admin/brand') ? 'active':'' }}" href="{{ route('brand.all') }}">Brands</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('9', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($prefix == 'admin/carsm') ? 'active':'' }}" href="{{ route('carsm.all') }}">Models</a>
                    @endif
                </div>
            </li>

            @if(Auth::guard('admin')->user()->role == '1')
                @if(get_setting('multi_vendor')->value)
                    <li class="menu-item has-submenu
                        {{ ($route == 'vendor.index')? 'active':'' }}
                        {{ ($route == 'vendor.edit')? 'active':'' }}
                        {{ ($route == 'vendor.create')? 'active':'' }}
                    ">
                        <a class="menu-link " href="#">
                            <i class="icon material-icons md-person_add"></i>
                            <span class="text">Vendors</span>
                        </a>
                        <div class="submenu">
                            <a class="{{ ($route == 'vendor.request') ? 'active':'' }}" href="{{ route('vendor.sell.request') }}">Vendor Request</a>
                            <a class="{{ ($route == 'vendor.index') ? 'active':'' }}" href="{{ route('vendor.index') }}">Vendor List</a>
                            <a class="{{ ($route == 'vendor.create') ? 'active':'' }}" href="{{ route('vendor.create') }}">Vendor Add</a>
                        </div>
                    </li>
                    @if(Auth::guard('admin')->user()->role == '2' || Auth::guard('admin')->user()->role == '1' )
                        <li class="menu-item has-submenu
                            {{ ($route == 'transaction.summary')? 'active':'' }}
                            {{ ($route == 'payment.index')? 'active':'' }}
                            {{ ($route == 'payment.edit')? 'active':'' }}
                            {{ ($route == 'payment.create')? 'active':'' }}
                            {{ ($route == 'withdraw-requests.index')? 'active':'' }}
                            {{ ($route == 'withdraw-requests.create')? 'active':'' }}
                            {{ ($route == 'transaction.index')? 'active':'' }}">
                            <a class="menu-link " href="#">
                                <i class="icon material-icons md-attach_money"></i>
                                <span class="text">Vendor Accounts</span>
                            </a>
                            <div class="submenu">
                                @if(Auth::guard('admin')->user()->role == 1)
                                    <a class="{{ ($route == 'payment.create') ? 'active':'' }}" href="{{ route('transaction.summary') }}">Account Summary</a>
                                @endif
                                <a class="{{ ($route == 'withdraw-requests.index') ? 'active':'' }}" href="{{ route('withdraw-requests.index') }}">Withdrawal Requests</a>
                                @if(Auth::guard('admin')->user()->role == 2)
                                    <a class="{{ ($route == 'withdraw-requests.create') ? 'active':'' }}" href="{{ route('withdraw-requests.create') }}">Add Withdrawal Request</a>
                                    <a class="{{ ($route == 'transaction.index') ? 'active':'' }}" href="{{ route('transaction.index') }}">View Transactions</a>
                                @endif
                                @if(Auth::guard('admin')->user()->role == 1)
                                    <a class="{{ ($route == 'payment.create') ? 'active':'' }}" href="{{ route('payment.create') }}">Payment Add</a>
                                    <a class="{{ ($route == 'payment.index') ? 'active':'' }}" href="{{ route('payment.index') }}">Payment List</a>
                                @endif

                            </div>
                        </li>
                    @endif
                @endif
            @endif

            <li class="menu-item has-submenu d-none
                {{ ($route == 'campaing.index')? 'active':'' }}
                {{ ($route == 'campaing.create')? 'active':'' }}
                {{ ($route == 'campaing.edit')? 'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('41', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                       <i class="fa-solid fa-rectangle-ad fontawesome_icon_custom"></i>
                        <span class="text">Campaigns</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('41', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'campaing.index') ? 'active':'' }}" href="{{ route('campaing.index') }}">Campaign List</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('42', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'campaing.create') ? 'active':'' }}" href="{{ route('campaing.create') }}">Campaign Add</a>
                    @endif
                </div>
            </li>
            @if(Auth::guard('admin')->user()->role == '1')
             <li class="menu-item has-submenu d-none
                {{ ($route == 'coupons.index')? 'active':'' }}
                {{ ($route == 'coupons.create')? 'active':'' }}
                {{ ($route == 'coupons.edit')? 'active':'' }}
            ">
                <a class="menu-link" href="#">
                    <i class="fa-solid fa-ticket fontawesome_icon_custom"></i>
                    <span class="text">Coupons</span>
                </a>
                <div class="submenu">
                    <a class="{{ ($route == 'coupons.index') ? 'active':'' }}" href="{{ route('coupons.index') }}">Coupon List</a>
                    <a class="{{ ($route == 'coupons.create') ? 'active':'' }}" href="{{ route('coupons.create') }}">Coupon Add</a>
                </div>
            </li>
            @endif
            <li class="menu-item has-submenu d-none {{ ($prefix == 'admin/supplier')?'active':'' }}">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('45', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link " href="#">
                        <i class="fas fa-truck fontawesome_icon_custom"></i>
                        <span class="text">Suppliers</span>
                    </a>
                @endif
                <div class="submenu vendor-submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('45', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'supplier.all') ? 'active':'' }}" href="{{ route('supplier.all') }}">Supplier List</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('46', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'supplier.create') ? 'active':'' }}" href="{{ route('supplier.create') }}">Supplier Add</a>
                    @endif
                </div>
            </li>
            <li class="menu-item has-submenu
            {{ ($route == 'all_orders.index')?'active':'' }}
            {{ ($route == 'order.cancellation.requests')?'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('17', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                        <i class="fas fa-list fontawesome_icon_custom"></i>
                        <span class="text">Sales</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('17', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'all_orders.index') ? 'active':'' }}" href="{{ route('all_orders.index') }}" >All Orders</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1')
                            <a class="d-none{{ ($route == 'order.cancellation.requests') ? 'active':'' }}" href="{{ route('order.cancellation.requests') }}" >Orders Cancellation Request</a>
                    @endif
                </div>
            </li>
            <li class="menu-item has-submenu d-none {{ ($route == 'return-request.all')?'active':'' }}">
                @if(Auth::guard('admin')->user()->role == '1')
                    <a class="menu-link" href="#">
                        <i class="fas fa-exchange fontawesome_icon_custom"></i>
                        <span class="text">Return Requests</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1')
                        <a class="{{ ($route == 'return-request.all') ? 'active':'' }}" href="{{ route('return-request.all') }}" >All Requests</a>
                    @endif
                </div>
            </li>
{{--            <li class="menu-item has-submenu {{ ($route == 'sms.templates') || ($route == 'sms.providers')?'active':'' }}">--}}
{{--                @if(Auth::guard('admin')->user()->role == '1' || in_array('34', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                    <a class="menu-link" href="#">--}}
{{--                        <i class="fontawesome_icon_custom fa-solid fa-phone"></i>--}}
{{--                        <span class="text">OTP System</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                <div class="submenu">--}}
{{--                    @if(Auth::guard('admin')->user()->role == '1' || in_array('34', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                        <a class="{{ ($route == 'sms.templates') ? 'active':'' }}" href="{{ route('sms.templates') }}" >SMS Teamplates</a>--}}
{{--                    @endif--}}

{{--                    @if(Auth::guard('admin')->user()->role == '1' || in_array('34', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                        <a class="{{ ($route == 'sms.providers') ? 'active':'' }}" href="{{ route('sms.providers') }}" >SMS Providers</a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="menu-item has-submenu d-none
                {{ ($route == 'staff.index')? 'active':'' }}
                {{ ($route == 'staff.create')? 'active':'' }}
                {{ ($route == 'staff.edit')? 'active':'' }}
                {{ ($route == 'roles.index')? 'active':'' }}
                {{ ($route == 'roles.create')? 'active':'' }}
                {{ ($route == 'roles.edit')? 'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('25', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                       <i class="fas fa-people-group fontawesome_icon_custom"></i>
                        <span class="text">Staff</span>
                    </a>
                @endif
                <div class="submenu">
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('25', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'staff.index') ? 'active':'' }}" href="{{ route('staff.index') }}">All Staff</a>
                    @endif
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('29', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'roles.index') ? 'active':'' }}" href="{{ route('roles.index') }}">Staff Premissions</a>
                    @endif
                </div>
            </li>
            @if(Auth::guard('admin')->user()->role == '1')
            <li class="menu-item has-submenu d-none
                {{ ($route == 'stock_report.index')? 'active':'' }}
            ">
                <a class="menu-link" href="#">
                   <i class="fas fa-file-text fontawesome_icon_custom"></i>
                    <span class="text">Report</span>
                </a>
                <div class="submenu vendor-submenu">
                    <a class="{{ ($route == 'stock_report.index') ? 'active':'' }}" href="{{ route('stock_report.index') }}">Product Stock</a>
                </div>
            </li>
            @endif


{{--            @if(Auth::guard('admin')->user()->role == '1')--}}
{{--           <li class="menu-item has-submenu--}}
{{--                {{ ($route == 'subscribers.index')? 'active':'' }}--}}
{{--            ">--}}
{{--                <a class="menu-link" href="#">--}}
{{--                    <i class="icon material-icons md-pie_chart"></i>--}}
{{--                    <span class="text">Subscribers</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a class="{{ ($route == 'subscribers.index') ? 'active':'' }}" href="{{ route('subscribers.index') }}">Subsribers List</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            @endif--}}

{{--            <li class="menu-item has-submenu--}}
{{--                {{ ($route == 'blog.index')? 'active':'' }}--}}
{{--                {{ ($route == 'blog.edit')? 'active':'' }}--}}
{{--                {{ ($route == 'blog.create')? 'active':'' }}--}}
{{--            ">--}}
{{--                @if(Auth::guard('admin')->user()->role == '1' || in_array('21', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                    <a class="menu-link" href="#">--}}
{{--                        <i class="icon material-icons md-comment"></i>--}}
{{--                        <span class="text">Blog</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                <div class="submenu">--}}
{{--                    @if(Auth::guard('admin')->user()->role == '1' || in_array('21', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                        <a class="{{ ($route == 'blog.index') ? 'active':'' }}" href="{{ route('blog.index') }}">Blog List</a>--}}
{{--                    @endif--}}
{{--                    @if(Auth::guard('admin')->user()->role == '1' || in_array('22', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))--}}
{{--                        <a class="{{ ($route == 'blog.create') ? 'active':'' }}" href="{{ route('blog.create') }}">Blog Add</a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </li>--}}

             <li class="menu-item has-submenu
                {{ ($route == 'page.index')? 'active':'' }}
                {{ ($route == 'page.edit')? 'active':'' }}
                {{ ($route == 'page.create')? 'active':'' }}
            ">
                @if(Auth::guard('admin')->user()->role == '1' || in_array('49', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                    <a class="menu-link" href="#">
                        <i class="icon material-icons md-pages"></i>
                        <span class="text">Pages</span>
                    </a>
                @endif
                <div class="submenu">
                    {{-- @if(Auth::guard('admin')->user()->role == '1' || in_array('49', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'page.index') ? 'active':'' }}" href="{{ route('page.index') }}">Page List</a>
                    @endif --}}
                    @if(Auth::guard('admin')->user()->role == '1' || in_array('50', json_decode(Auth::guard('admin')->user()->staff->role->permissions)))
                        <a class="{{ ($route == 'page.create') ? 'active':'' }}" href="{{ route('page.create') }}">Pages</a>
                    @endif
                </div>
            </li>
            @if(Auth::guard('admin')->user()->role == '1')
                <li class="menu-item has-submenu d-none
                {{ ($route == 'accounts.heads')? 'active':'' }}
                {{ ($route == 'accounts.ledgers')? 'active':'' }}
                {{ ($route == 'accounts.heads.create')? 'active':'' }}
                ">
                    <a class="menu-link" href="#">
                        <i class="fas fa-money-check-dollar fontawesome_icon_custom"></i>
                        <span class="text">Accounts</span>
                    </a>
                    <div class="submenu">
                        <a class="{{ ($route == 'accounts.heads')? 'active':'' }} {{ ($route == 'accounts.heads.create')? 'active':'' }}" href="{{ route('accounts.heads') }}">Account Heads</a>
                        <a class="{{ ($route == 'accounts.ledgers')? 'active':'' }}" href="{{ route('accounts.ledgers') }}">Cashbook</a>
                    </div>
                </li>
            @endif
            @if(Auth::guard('admin')->user()->role == '1')
                <li class="menu-item has-submenu
                {{ ($route == 'customer.index')? 'active':'' }}
                ">
                    <a class="menu-link" href="#">
                        <i class="icon material-icons md-person"></i>
                        <span class="text">Customers</span>
                    </a>

                    <div class="submenu">
                        <a class="{{ ($route == 'customer.index')? 'active':'' }}" href="{{ route('customer.index') }}">Customer list</a>
                    </div>
                </li>
                <li class="menu-item has-submenu
                {{ ($route == 'messages.list')? 'active':'' }}
                ">
                    <a class="menu-link" href="#">
                        <i class="icon material-icons md-message"></i>
                        <span class="text">Messages</span>
                    </a>

                    <div class="submenu">
                        <a class="{{ ($route == 'messages.list')? 'active':'' }}" href="{{ route('messages.list') }}">User Messages</a>
                    </div>
                </li>
            @endif
        </ul>
        <hr />
        @if(Auth::guard('admin')->user()->role == '1')
            <ul class="menu-aside">
                <li class="menu-item has-submenu
                {{ ($route == 'setting.index')? 'active':'' }}
                {{ ($route == 'shipping.index')? 'active':'' }}
                {{ ($route == 'shipping.create')? 'active':'' }}
                {{ ($route == 'shipping.edit')? 'active':'' }}
                ">
                    <a class="menu-link" href="#">
                        <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a class="{{ ($route == 'setting.index') ? 'active':'' }}" href="{{ route('setting.index') }}">Home</a>
                        {{-- {{-- <a class="{{ ($route == 'setting.activation') ? 'active':'' }}" href="{{ route('setting.activation') }}">Activation</a> --}}
                        <a class="{{ ($route == 'shipping.index')||($route == 'shipping.create')||($route == 'shipping.edit') ? 'active':'' }}" href="{{ route('shipping.index') }}">Shipping Methods</a>
                        {{-- <a class="{{ ($route == 'paymentMethod.config') ? 'active':'' }}" href="{{ route('paymentMethod.config') }}">Payment Methods</a> --}}
                    </div>
                </li>
            </ul>
        @endif


        {{-- <br />
        <br /> --}}
        {{-- <div class="sidebar-widgets">
           <div class="copyright text-center m-25">
              <p>
                 <strong class="d-block">Admin Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved
              </p>
           </div>
        </div> --}}
    </nav>
</aside>
