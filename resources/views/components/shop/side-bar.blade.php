  <!-- Your Menu Hiddn SideBar -->
  <div class="allfilter-hidden-sbar-left">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="flaticon-close"></span></div>
      <h4 class="title"><a href="{{ route('shop') }}">All Categories</a></h4>
    </div>
    <div class="hsidebar-content">
      <div class="leftside_navbar_content_details">
        <div class="leftside_navbar_menu department_version shop_listing_page_style">
          <ul class="navbar-nav">
            @foreach(app('categories') as $category)
              <li class="nav-item">
                <a class="nav-link collapsed" href="#{{ $category->slug }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="{{ $category->slug }}">
                  {{ $category->name }} <i class="fa fa-plus arrow"></i>
                </a>
                <div class="collapse" id="{{ $category->slug }}">
                  <ul class="nav nav-sm flex-column">
                    @foreach($category->subCategories as $subCategory)
                      <li class="nav-item pl10">
                        <a href="{{ route('shop').'?sub-category='.$subCategory->slug }}" class="nav-link">{{ $subCategory->name }}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </li>
            @endforeach
            <div class="hsidebar-header mt30">
              <h4 class="title">All filters</h4>
            </div>
            <li class="nav-item">
              <a class="nav-link collapsed" href="page-shop-list-v6.html#sidebarFilterByBrand" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFilterByBrand"> Brands <i class="fa fa-plus arrow"></i></a>
              <div class="collapse" id="sidebarFilterByBrand">
                <div class="pl30 pr30 pt20">
                  <div class="blog_search_widget mb15">
                    <div class="input-group">
                      <input type="text" class="form-control mb15" placeholder="Search" aria-label="Recipient's username">
                    </div>
                  </div>
                  <div class="sidebar_widget_checkbox">
                    <div class="ui_kit_checkbox mb15">
                      <label class="custom_checkbox">Apple <span class="float-end">87</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <label class="custom_checkbox" checked="checked">Asus <span class="float-end">92</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <label class="custom_checkbox">Acer <span class="float-end">123</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <label class="custom_checkbox">Dell <span class="float-end">49</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <label class="custom_checkbox">Lenovo <span class="float-end">12</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <a href="page-shop-list-v6.html#" class="shop_btn">Show More</a>
                    </div>
                  </div>
                  <div class="enable_disable_btns d-grid mt25">
                    <a class="btn btn1 btn-thm mb10" href="page-shop-list-v6.html#">View Result</a>
                    <a class="btn btn2" href="page-shop-list-v6.html#">Cancel</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="page-shop-list-v6.html#sidebarPrices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPrices">Price <i class="fa fa-plus arrow"></i></a>
              <div class="collapse" id="sidebarPrices">
                <div class="pl30 pr30 pt35">
                  <div class="sidebar_widget_checkbox mb-4">
                    <div class="zmart_custom_range_slider mt50">
                      <span id="slider-range-value1"></span>
                      <span id="slider-range-value2"></span><br>
                      <div id="slider"></div>
                    </div>
                  </div>
                  <div class="enable_disable_btns d-grid">
                    <a class="btn btn1 btn-thm mb10" href="page-shop-list-v6.html#">View Result</a>
                    <a class="btn btn2" href="page-shop-list-v6.html#">Cancel</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="d-grid px-4 text-center mt20">
            <a class="btn btn-thm btn-rounded btn-default-height mb-3" href="page-shop-list-v6.html#">View Result</a>
            <a class="body-color fz15" href="page-shop-list-v6.html#">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Your Menu Hiddn SideBar -->
