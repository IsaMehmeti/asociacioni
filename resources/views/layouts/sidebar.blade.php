<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">

        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="/">
                            <i class="fas fa-columns"></i>
                            <span>{{__('Ballina')}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/city">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span>{{__('Qytetet')}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/collegiums">
                            <i class="fas fa-tasks" aria-hidden="true"></i>
                            <span>{{__('Kolegjiumet')}}</span>
                        </a>
                    </li>
                    <li>

                        <a class="nav-link" href="/registercollegiums">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                            {{__('Shto Kolegjium')}}
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="/mail">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span>{{__('Dërgo Email')}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('official.create')}}">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                            <span>{{__('Krijo Zyrtarë')}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('official.index')}}">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                            <span>{{__('Official index')}}</span>
                        </a>
                    </li>

                    <!-- <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks" aria-hidden="false"></i>
                            <span>{{__('Collegiums')}}</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="ecommerce-dashboard.html">
                                    Dashboard
                                </a>
                            </li>
                        </ul> -->

                            <!--<li>
                                <a class="nav-link" href="ecommerce-products-list.html">
                                    Products List
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-products-form.html">
                                    Products Form
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-category-list.html">
                                    Categories List
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-category-form.html">
                                    Category Form
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-coupons-list.html">
                                    Coupons List
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-coupons-form.html">
                                    Coupons Form
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-orders-list.html">
                                    Orders List
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-orders-detail.html">
                                    Orders Detail
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-customers-list.html">
                                    Customers List
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-customers-form.html">
                                    Customers Form
                                </a>
                            </li>
                        </ul>
                     </li>-->

                    <!--<li class="nav-parent //nav-expanded nav-active">
                        <a class="nav-link" href="#">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="index.html">
                                    Landing Page
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-default.html">
                                    Default
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Boxed
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-boxed.html">
                                            Static Header
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-boxed-fixed-header.html">
                                            Fixed Header
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Horizontal Menu Header
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-header-menu.html">
                                            Pills
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-header-menu-stripe.html">
                                            Stripe
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-header-menu-top-line.html">
                                            Top Line
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-dark.html">
                                    Dark
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-dark-header.html">
                                    Dark Header
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-two-navigations.html">
                                    Two Navigations
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Tab Navigation
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-tab-navigation-dark.html">
                                            Tab Navigation Dark
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-tab-navigation.html">
                                            Tab Navigation Light
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-tab-navigation-boxed.html">
                                            Tab Navigation Boxed
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-light-sidebar.html">
                                    Light Sidebar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-left-sidebar-collapsed.html">
                                    Left Sidebar Collapsed
                                </a>
                            </li>
                            <li class="nav-active">
                                <a class="nav-link" href="layouts-left-sidebar-scroll.html">
                                    Left Sidebar Scroll
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Left Sidebar Big Icons
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-left-sidebar-big-icons.html">
                                            Left Sidebar Big Icons Dark
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-left-sidebar-big-icons-light.html">
                                            Left Sidebar Big Icons Light
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Left Sidebar Panel
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-left-sidebar-panel.html">
                                            Left Sidebar Panel Dark
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-left-sidebar-panel-light.html">
                                            Left Sidebar Panel Light
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    Left Sidebar Sizes
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="layouts-sidebar-sizes-xs.html">
                                            Left Sidebar XS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-sidebar-sizes-sm.html">
                                            Left Sidebar SM
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="layouts-sidebar-sizes-md.html">
                                            Left Sidebar MD
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="layouts-square-borders.html">
                                    Square Borders
                                </a>
                            </li>
                        </ul>
                     --></li>
                </ul>
            </nav>

            <hr class="separator" />



            <hr class="separator" />


        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>


    </div>

</aside>
<!-- end: sidebar -->
