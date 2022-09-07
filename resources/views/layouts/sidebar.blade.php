<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-section sidebar-user my-1">
        <div class="sidebar-section-body">
            <div class="media">
                <a href="#" class="mr-3">
                    <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" class="rounded-circle" alt="">
                </a>

                <div class="media-body">
                    <div class="font-weight-semibold">{{ auth()->user()->name }}</div>
                    <div class="font-size-sm line-height-sm opacity-50">
                        {{ auth()->user()->email }}
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-section">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu {{ request()->is('primary-classification') || request()->is('secondary-classification') || request()->is('tertiary-classification') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Master</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Master">
                    <li class="nav-item"><a href="{{ route('primary-classification.index') }}" class="nav-link {{ request()->is('primary-classification') ? 'active' : '' }}">Klasifikasi Primer</a></li>
                </ul>
                <ul class="nav nav-group-sub" data-submenu-title="Master">
                    <li class="nav-item"><a href="{{ route('secondary-classification.index') }}" class="nav-link {{ request()->is('secondary-classification') ? 'active' : '' }}">Klasifikasi Sekunder</a></li>
                </ul>
                <ul class="nav nav-group-sub" data-submenu-title="Master">
                    <li class="nav-item"><a href="{{ route('tertiary-classification.index') }}" class="nav-link {{ request()->is('tertiary-classification') ? 'active' : '' }}">Klasifikasi Tersier</a></li>
                </ul>
            </li>
            <!-- /main -->

            <!-- Page kits -->
            {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="General pages">
                    <li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
                    <li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
                    <li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
                    <li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Blog</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
                            <li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
                            <li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
                            <li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
                            <li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Timelines</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
                            <li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
                            <li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Gallery</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
                            <li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
                            <li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
                            <li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Service pages">
                    <li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Invoicing</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
                            <li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
                            <li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Authentication</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
                            <li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
                            <li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
                            <li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
                            <li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
                            <li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
                            <li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
                            <li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
                            <li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
                            <li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
                            <li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
                            <li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Error pages</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
                            <li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
                            <li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
                            <li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
                            <li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
                            <li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="User pages">
                    <li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
                    <li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
                    <li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
                    <li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
                    <li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Application pages">
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Task manager</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
                            <li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
                            <li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Inbox</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
                            <li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
                            <li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
                            <li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
                            <li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Search</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
                            <li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
                            <li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
                            <li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Job search</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
                            <li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
                            <li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
                            <li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Learning</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
                            <li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
                            <li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">Ecommerce set</a>
                        <ul class="nav nav-group-sub">
                            <li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
                            <li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
                            <li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
                            <li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
                            <li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                    <li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
                    <li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
                    <li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    <li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                </ul>
            </li> --}}
            <!-- /page kits -->

        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->