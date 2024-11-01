<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


  <div class="app-brand demo ">
    <a href="index" class="app-brand-link">
      <span class="app-brand-logo demo">

        <svg width="25" viewbox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <path
              d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
              id="path-1"></path>
            <path
              d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
              id="path-3"></path>
            <path
              d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
              id="path-4"></path>
            <path
              d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
              id="path-5"></path>
          </defs>
          <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
              <g id="Icon" transform="translate(27.000000, 15.000000)">
                <g id="Mask" transform="translate(0.000000, 8.000000)">
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <use fill="#696cff" xlink:href="#path-1"></use>
                  <g id="Path-3" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-3"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                  </g>
                  <g id="Path-4" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-4"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                  </g>
                </g>
                <g id="Triangle"
                  transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                  <use fill="#696cff" xlink:href="#path-5"></use>
                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                </g>
              </g>
            </g>
          </g>
        </svg>

      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">sneat</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>



  <ul class="menu-inner py-1">
    @forelse(config('layout.adminSidebarMenu') as $menuItem)
    @if(!empty($menuItem['isMenuHeader']) && $menuItem['isMenuHeader'])
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="{{$menuItem['headerText']}}">{{$menuItem['headerText']}}</span>
    </li>
    @elseif(!empty($menuItem['isToggleMenu']) && $menuItem['isToggleMenu'])
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        @if(!empty($menuItem['icon']))
          <i class="menu-icon tf-icons {{$menuItem['icon']}}"></i>
        @endif
        <div class="text-truncate" data-i18n="{{$menuItem['menuItemText']}}">{{$menuItem['menuItemText']}}</div>
      </a>
      @if(!empty($menuItem['submenu']))
      <ul class="menu-sub">
        @foreach($menuItem['submenu'] as $subMenuItem)
          @if(!empty($subMenuItem['isToggleMenu']) && $subMenuItem['isToggleMenu'])
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div class="text-truncate" data-i18n="{{$subMenuItem['menuItemText']}}">{{$subMenuItem['menuItemText']}}</div>
            </a>
            @if(!empty($subMenuItem['submenu']))
              <ul class="menu-sub">
                @foreach($subMenuItem['submenu'] as $ssubMenuItem)
                <li class="menu-item">
                  <a href="{{route($ssubMenuItem['route'])}}" class="menu-link">
                    @if(!empty($ssubMenuItem['icon']))
                    <i class="menu-icon tf-icons {{$ssubMenuItem['icon']}}"></i>
                    @endif
                    <div class="text-truncate" data-i18n="{{$ssubMenuItem['menuItemText']}}">{{$ssubMenuItem['menuItemText']}}</div>
                  </a>
                </li>
                @endforeach
              </ul>
            @endif
          </li>
          @else
            <li class="menu-item">
              <a href="{{route($subMenuItem['route'])}}" class="menu-link">
              @if(!empty($subMenuItem['icon']))
              <i class="menu-icon tf-icons {{$subMenuItem['icon']}}"></i>
              @endif
              <div class="text-truncate" data-i18n="{{$subMenuItem['menuItemText']}}">{{$subMenuItem['menuItemText']}}</div>
            </a>
          </li>
          @endif
        @endforeach
      </ul>
      @endif
    </li>
    @else
    <li class="menu-item">
      <a href="{{route($menuItem['route'])}}" class="menu-link">
        @if(!empty($menuItem['icon']))
          <i class="menu-icon tf-icons {{$menuItem['icon']}}"></i>
        @endif
        <div class="text-truncate" data-i18n="{{$menuItem['menuItemText']}}">{{$menuItem['menuItemText']}}</div>
      </a>
    </li>
    @endif
    @empty
    @endforelse

    <!-- Dashboards -->
    <!-- <li class="menu-item active open">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
        <span class="badge rounded-pill bg-danger ms-auto">5</span>
      </a>
      <ul class="menu-sub">
        <li class="menu-item active">
          <a href="dashboards-analytics" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Analytics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="dashboards-crm" class="menu-link">
            <div class="text-truncate" data-i18n="CRM">CRM</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-logistics-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="Logistics">Logistics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-academy-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="Academy">Academy</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Layouts -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div class="text-truncate" data-i18n="Layouts">Layouts</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="layouts-collapsed-menu" class="menu-link">
            <div class="text-truncate" data-i18n="Collapsed menu">Collapsed menu</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-content-navbar" class="menu-link">
            <div class="text-truncate" data-i18n="Content navbar">Content navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-content-navbar-with-sidebar" class="menu-link">
            <div class="text-truncate" data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../horizontal-menu-template" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Horizontal">Horizontal</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-without-menu" class="menu-link">
            <div class="text-truncate" data-i18n="Without menu">Without menu</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-without-navbar" class="menu-link">
            <div class="text-truncate" data-i18n="Without navbar">Without navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-fluid" class="menu-link">
            <div class="text-truncate" data-i18n="Fluid">Fluid</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-container" class="menu-link">
            <div class="text-truncate" data-i18n="Container">Container</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-blank" class="menu-link">
            <div class="text-truncate" data-i18n="Blank">Blank</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Front Pages -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-store'></i>
        <div class="text-truncate" data-i18n="Front Pages">Front Pages</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="../front-pages/landing-page" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Landing">Landing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/pricing-page" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Pricing">Pricing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/payment-page" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Payment">Payment</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/checkout-page" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Checkout">Checkout</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/help-center-landing" class="menu-link" target="_blank">
            <div class="text-truncate" data-i18n="Help Center">Help Center</div>
          </a>
        </li>
      </ul>
    </li> -->


    <!-- Apps & Pages -->
    <!-- <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
    </li> -->
    <!-- <li class="menu-item">
      <a href="app-email" class="menu-link">
        <i class="menu-icon tf-icons bx bx-envelope"></i>
        <div class="text-truncate" data-i18n="Email">Email</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="app-chat" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chat"></i>
        <div class="text-truncate" data-i18n="Chat">Chat</div>
      </a>
    </li> -->
    <!-- <li class="menu-item">
      <a href="app-calendar" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar"></i>
        <div class="text-truncate" data-i18n="Calendar">Calendar</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="app-ecommerce-dashboard" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div class="text-truncate" data-i18n="Products">Products</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-ecommerce-product-list" class="menu-link">
            <div class="text-truncate" data-i18n="Product List">Product List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-product-add" class="menu-link">
            <div class="text-truncate" data-i18n="Add Product">Add Product</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-category-list" class="menu-link">
            <div class="text-truncate" data-i18n="Category List">Category List</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div class="text-truncate" data-i18n="Order">Order</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-ecommerce-order-list" class="menu-link">
            <div class="text-truncate" data-i18n="Order List">Order List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-order-details" class="menu-link">
            <div class="text-truncate" data-i18n="Order Details">Order Details</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div class="text-truncate" data-i18n="Customer">Customer</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-ecommerce-customer-all" class="menu-link">
            <div class="text-truncate" data-i18n="All Customers">All Customers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Customer Details">Customer Details</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-ecommerce-customer-details-overview" class="menu-link">
                <div class="text-truncate" data-i18n="Overview">Overview</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-customer-details-security" class="menu-link">
                <div class="text-truncate" data-i18n="Security">Security</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-customer-details-billing" class="menu-link">
                <div class="text-truncate" data-i18n="Address & Billing">Address & Billing</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-customer-details-notifications" class="menu-link">
                <div class="text-truncate" data-i18n="Notifications">Notifications</div>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="app-ecommerce-manage-reviews" class="menu-link">
        <div class="text-truncate" data-i18n="Manage Reviews">Manage Reviews</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="app-ecommerce-referral" class="menu-link">
        <div class="text-truncate" data-i18n="Referrals">Referrals</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div class="text-truncate" data-i18n="Settings">Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-ecommerce-settings-detail" class="menu-link">
            <div class="text-truncate" data-i18n="Store Details">Store Details</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-settings-payments" class="menu-link">
            <div class="text-truncate" data-i18n="Payments">Payments</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-settings-checkout" class="menu-link">
            <div class="text-truncate" data-i18n="Checkout">Checkout</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-settings-shipping" class="menu-link">
            <div class="text-truncate" data-i18n="Shipping & Delivery">Shipping & Delivery</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-settings-locations" class="menu-link">
            <div class="text-truncate" data-i18n="Locations">Locations</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-settings-notifications" class="menu-link">
            <div class="text-truncate" data-i18n="Notifications">Notifications</div>
          </a>
        </li>
      </ul>
    </li> -->


    <!-- <li class="menu-item">
      <a href="app-kanban" class="menu-link">
        <i class="menu-icon tf-icons bx bx-grid"></i>
        <div class="text-truncate" data-i18n="Kanban">Kanban</div>
      </a>
    </li> -->


    <!-- e-commerce-app menu start -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-cart-alt'></i>
        <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-ecommerce-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Products">Products</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-ecommerce-product-list" class="menu-link">
                <div class="text-truncate" data-i18n="Product List">Product List</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-product-add" class="menu-link">
                <div class="text-truncate" data-i18n="Add Product">Add Product</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-category-list" class="menu-link">
                <div class="text-truncate" data-i18n="Category List">Category List</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Order">Order</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-ecommerce-order-list" class="menu-link">
                <div class="text-truncate" data-i18n="Order List">Order List</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-order-details" class="menu-link">
                <div class="text-truncate" data-i18n="Order Details">Order Details</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Customer">Customer</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-ecommerce-customer-all" class="menu-link">
                <div class="text-truncate" data-i18n="All Customers">All Customers</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div class="text-truncate" data-i18n="Customer Details">Customer Details</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-ecommerce-customer-details-overview" class="menu-link">
                    <div class="text-truncate" data-i18n="Overview">Overview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-customer-details-security" class="menu-link">
                    <div class="text-truncate" data-i18n="Security">Security</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-customer-details-billing" class="menu-link">
                    <div class="text-truncate" data-i18n="Address & Billing">Address & Billing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-customer-details-notifications" class="menu-link">
                    <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                  </a>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-manage-reviews" class="menu-link">
            <div class="text-truncate" data-i18n="Manage Reviews">Manage Reviews</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-ecommerce-referral" class="menu-link">
            <div class="text-truncate" data-i18n="Referrals">Referrals</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Settings">Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-ecommerce-settings-detail" class="menu-link">
                <div class="text-truncate" data-i18n="Store Details">Store Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-settings-payments" class="menu-link">
                <div class="text-truncate" data-i18n="Payments">Payments</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-settings-checkout" class="menu-link">
                <div class="text-truncate" data-i18n="Checkout">Checkout</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-settings-shipping" class="menu-link">
                <div class="text-truncate" data-i18n="Shipping & Delivery">Shipping & Delivery</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-settings-locations" class="menu-link">
                <div class="text-truncate" data-i18n="Locations">Locations</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-ecommerce-settings-notifications" class="menu-link">
                <div class="text-truncate" data-i18n="Notifications">Notifications</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li> -->
    <!-- e-commerce-app menu end -->



    <!-- Academy menu start -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-book-open'></i>
        <div class="text-truncate" data-i18n="Academy">Academy</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-academy-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-academy-course" class="menu-link">
            <div class="text-truncate" data-i18n="My Course">My Course</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-academy-course-details" class="menu-link">
            <div class="text-truncate" data-i18n="Course Details">Course Details</div>
          </a>
        </li>
      </ul>
    </li> -->


    <!-- Academy menu end -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-car'></i>
        <div class="text-truncate" data-i18n="Logistics">Logistics</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-logistics-dashboard" class="menu-link">
            <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-logistics-fleet" class="menu-link">
            <div class="text-truncate" data-i18n="Fleet">Fleet</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-food-menu'></i>
        <div class="text-truncate" data-i18n="Invoice">Invoice</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-invoice-list" class="menu-link">
            <div class="text-truncate" data-i18n="List">List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-invoice-preview" class="menu-link">
            <div class="text-truncate" data-i18n="Preview">Preview</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-invoice-edit" class="menu-link">
            <div class="text-truncate" data-i18n="Edit">Edit</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-invoice-add" class="menu-link">
            <div class="text-truncate" data-i18n="Add">Add</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div class="text-truncate" data-i18n="Users">Users</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-user-list" class="menu-link">
            <div class="text-truncate" data-i18n="List">List</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="View">View</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="app-user-view-account" class="menu-link">
                <div class="text-truncate" data-i18n="Account">Account</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-user-view-security" class="menu-link">
                <div class="text-truncate" data-i18n="Security">Security</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-user-view-billing" class="menu-link">
                <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-user-view-notifications" class="menu-link">
                <div class="text-truncate" data-i18n="Notifications">Notifications</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-user-view-connections" class="menu-link">
                <div class="text-truncate" data-i18n="Connections">Connections</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-check-shield'></i>
        <div class="text-truncate" data-i18n="Roles & Permissions">Roles & Permissions</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-access-roles" class="menu-link">
            <div class="text-truncate" data-i18n="Roles">Roles</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-access-permission" class="menu-link">
            <div class="text-truncate" data-i18n="Permission">Permission</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div class="text-truncate" data-i18n="Pages">Pages</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="User Profile">User Profile</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="pages-profile-user" class="menu-link">
                <div class="text-truncate" data-i18n="Profile">Profile</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-profile-teams" class="menu-link">
                <div class="text-truncate" data-i18n="Teams">Teams</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-profile-projects" class="menu-link">
                <div class="text-truncate" data-i18n="Projects">Projects</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-profile-connections" class="menu-link">
                <div class="text-truncate" data-i18n="Connections">Connections</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="pages-account-settings-account" class="menu-link">
                <div class="text-truncate" data-i18n="Account">Account</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-account-settings-security" class="menu-link">
                <div class="text-truncate" data-i18n="Security">Security</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-account-settings-billing" class="menu-link">
                <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-account-settings-notifications" class="menu-link">
                <div class="text-truncate" data-i18n="Notifications">Notifications</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-account-settings-connections" class="menu-link">
                <div class="text-truncate" data-i18n="Connections">Connections</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="pages-faq" class="menu-link">
            <div class="text-truncate" data-i18n="FAQ">FAQ</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-pricing" class="menu-link">
            <div class="text-truncate" data-i18n="Pricing">Pricing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Misc">Misc</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="pages-misc-error" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Error">Error</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-misc-under-maintenance" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Under Maintenance">Under Maintenance</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-misc-comingsoon" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Coming Soon">Coming Soon</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pages-misc-not-authorized" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Not Authorized">Not Authorized</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div class="text-truncate" data-i18n="Authentications">Authentications</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Login">Login</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-login-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-login-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Register">Register</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-register-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-register-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-register-multisteps" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Multi-steps">Multi-steps</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Verify Email">Verify Email</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-verify-email-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-verify-email-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Reset Password">Reset Password</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-reset-password-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-reset-password-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Forgot Password">Forgot Password</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-forgot-password-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-forgot-password-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Two Steps">Two Steps</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-two-steps-basic" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-two-steps-cover" class="menu-link" target="_blank">
                <div class="text-truncate" data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
        <div class="text-truncate" data-i18n="Wizard Examples">Wizard Examples</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="wizard-ex-checkout" class="menu-link">
            <div class="text-truncate" data-i18n="Checkout">Checkout</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="wizard-ex-property-listing" class="menu-link">
            <div class="text-truncate" data-i18n="Property Listing">Property Listing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="wizard-ex-create-deal" class="menu-link">
            <div class="text-truncate" data-i18n="Create Deal">Create Deal</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="modal-examples" class="menu-link">
        <i class="menu-icon tf-icons bx bx-window-open"></i>
        <div class="text-truncate" data-i18n="Modal Examples">Modal Examples</div>
      </a>
    </li> -->

    <!-- Components -->
    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Components">Components</span>
    </li> -->
    <!-- Cards -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n="Cards">Cards</div>
        <span class="badge rounded-pill bg-primary ms-auto">6</span>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="cards-basic" class="menu-link">
            <div class="text-truncate" data-i18n="Basic">Basic</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-advance" class="menu-link">
            <div class="text-truncate" data-i18n="Advance">Advance</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-statistics" class="menu-link">
            <div class="text-truncate" data-i18n="Statistics">Statistics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-analytics" class="menu-link">
            <div class="text-truncate" data-i18n="Analytics">Analytics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-gamifications" class="menu-link">
            <div class="text-truncate" data-i18n="Gamifications">Gamifications</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-actions" class="menu-link">
            <div class="text-truncate" data-i18n="Actions">Actions</div>
          </a>
        </li>
      </ul>
    </li> -->
    <!-- User interface -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div class="text-truncate" data-i18n="User interface">User interface</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="ui-accordion" class="menu-link">
            <div class="text-truncate" data-i18n="Accordion">Accordion</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-alerts" class="menu-link">
            <div class="text-truncate" data-i18n="Alerts">Alerts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-badges" class="menu-link">
            <div class="text-truncate" data-i18n="Badges">Badges</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-buttons" class="menu-link">
            <div class="text-truncate" data-i18n="Buttons">Buttons</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-carousel" class="menu-link">
            <div class="text-truncate" data-i18n="Carousel">Carousel</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-collapse" class="menu-link">
            <div class="text-truncate" data-i18n="Collapse">Collapse</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-dropdowns" class="menu-link">
            <div class="text-truncate" data-i18n="Dropdowns">Dropdowns</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-footer" class="menu-link">
            <div class="text-truncate" data-i18n="Footer">Footer</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-list-groups" class="menu-link">
            <div class="text-truncate" data-i18n="List Groups">List groups</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-modals" class="menu-link">
            <div class="text-truncate" data-i18n="Modals">Modals</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-navbar" class="menu-link">
            <div class="text-truncate" data-i18n="Navbar">Navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-offcanvas" class="menu-link">
            <div class="text-truncate" data-i18n="Offcanvas">Offcanvas</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-pagination-breadcrumbs" class="menu-link">
            <div class="text-truncate" data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-progress" class="menu-link">
            <div class="text-truncate" data-i18n="Progress">Progress</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-spinners" class="menu-link">
            <div class="text-truncate" data-i18n="Spinners">Spinners</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tabs-pills" class="menu-link">
            <div class="text-truncate" data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-toasts" class="menu-link">
            <div class="text-truncate" data-i18n="Toasts">Toasts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tooltips-popovers" class="menu-link">
            <div class="text-truncate" data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-typography" class="menu-link">
            <div class="text-truncate" data-i18n="Typography">Typography</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Extended components -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-copy"></i>
        <div class="text-truncate" data-i18n="Extended UI">Extended UI</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="extended-ui-avatar" class="menu-link">
            <div class="text-truncate" data-i18n="Avatar">Avatar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-blockui" class="menu-link">
            <div class="text-truncate" data-i18n="BlockUI">BlockUI</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-drag-and-drop" class="menu-link">
            <div class="text-truncate" data-i18n="Drag & Drop">Drag &amp; Drop</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-media-player" class="menu-link">
            <div class="text-truncate" data-i18n="Media Player">Media Player</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-perfect-scrollbar" class="menu-link">
            <div class="text-truncate" data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-star-ratings" class="menu-link">
            <div class="text-truncate" data-i18n="Star Ratings">Star Ratings</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-sweetalert2" class="menu-link">
            <div class="text-truncate" data-i18n="SweetAlert2">SweetAlert2</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-text-divider" class="menu-link">
            <div class="text-truncate" data-i18n="Text Divider">Text Divider</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div class="text-truncate" data-i18n="Timeline">Timeline</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="extended-ui-timeline-basic" class="menu-link">
                <div class="text-truncate" data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="extended-ui-timeline-fullscreen" class="menu-link">
                <div class="text-truncate" data-i18n="Fullscreen">Fullscreen</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="extended-ui-tour" class="menu-link">
            <div class="text-truncate" data-i18n="Tour">Tour</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-treeview" class="menu-link">
            <div class="text-truncate" data-i18n="Treeview">Treeview</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-misc" class="menu-link">
            <div class="text-truncate" data-i18n="Miscellaneous">Miscellaneous</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Icons -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div class="text-truncate" data-i18n="Icons">Icons</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="icons-boxicons" class="menu-link">
            <div class="text-truncate" data-i18n="Boxicons">Boxicons</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="icons-font-awesome" class="menu-link">
            <div class="text-truncate" data-i18n="Fontawesome">Fontawesome</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Forms & Tables -->
    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp;
        Tables</span></li> -->
    <!-- Forms -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div class="text-truncate" data-i18n="Form Elements">Form Elements</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="forms-basic-inputs" class="menu-link">
            <div class="text-truncate" data-i18n="Basic Inputs">Basic Inputs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-input-groups" class="menu-link">
            <div class="text-truncate" data-i18n="Input groups">Input groups</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-custom-options" class="menu-link">
            <div class="text-truncate" data-i18n="Custom Options">Custom Options</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-editors" class="menu-link">
            <div class="text-truncate" data-i18n="Editors">Editors</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-file-upload" class="menu-link">
            <div class="text-truncate" data-i18n="File Upload">File Upload</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-pickers" class="menu-link">
            <div class="text-truncate" data-i18n="Pickers">Pickers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-selects" class="menu-link">
            <div class="text-truncate" data-i18n="Select & Tags">Select &amp; Tags</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-sliders" class="menu-link">
            <div class="text-truncate" data-i18n="Sliders">Sliders</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-switches" class="menu-link">
            <div class="text-truncate" data-i18n="Switches">Switches</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-extras" class="menu-link">
            <div class="text-truncate" data-i18n="Extras">Extras</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div class="text-truncate" data-i18n="Form Layouts">Form Layouts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="form-layouts-vertical" class="menu-link">
            <div class="text-truncate" data-i18n="Vertical Form">Vertical Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-layouts-horizontal" class="menu-link">
            <div class="text-truncate" data-i18n="Horizontal Form">Horizontal Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-layouts-sticky" class="menu-link">
            <div class="text-truncate" data-i18n="Sticky Actions">Sticky Actions</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-carousel"></i>
        <div class="text-truncate" data-i18n="Form Wizard">Form Wizard</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="form-wizard-numbered" class="menu-link">
            <div class="text-truncate" data-i18n="Numbered">Numbered</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-wizard-icons" class="menu-link">
            <div class="text-truncate" data-i18n="Icons">Icons</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="form-validation" class="menu-link">
        <i class="menu-icon tf-icons bx bx-list-check"></i>
        <div class="text-truncate" data-i18n="Form Validation">Form Validation</div>
      </a>
    </li> -->
    <!-- Tables -->
    <!-- <li class="menu-item">
      <a href="tables-basic" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div class="text-truncate" data-i18n="Tables">Tables</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-grid"></i>
        <div class="text-truncate" data-i18n="Datatables">Datatables</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="tables-datatables-basic" class="menu-link">
            <div class="text-truncate" data-i18n="Basic">Basic</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="tables-datatables-advanced" class="menu-link">
            <div class="text-truncate" data-i18n="Advanced">Advanced</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="tables-datatables-extensions" class="menu-link">
            <div class="text-truncate" data-i18n="Extensions">Extensions</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Charts & Maps -->
    <!-- <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-chart"></i>
        <div class="text-truncate" data-i18n="Charts">Charts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="charts-apex" class="menu-link">
            <div class="text-truncate" data-i18n="Apex Charts">Apex Charts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="charts-chartjs" class="menu-link">
            <div class="text-truncate" data-i18n="ChartJS">ChartJS</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="maps-leaflet" class="menu-link">
        <i class="menu-icon tf-icons bx bx-map-alt"></i>
        <div class="text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</div>
      </a>
    </li> -->

    <!-- Misc -->
    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Misc">Misc</span></li>
    <li class="menu-item">
      <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div class="text-truncate" data-i18n="Support">Support</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
        class="menu-link">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div class="text-truncate" data-i18n="Documentation">Documentation</div>
      </a>
    </li> -->
  </ul>



</aside>