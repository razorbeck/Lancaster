<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('cruds.userManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/product-categories*') ? 'menu-open' : '' }} {{ request()->is('admin/product-tags*') ? 'menu-open' : '' }} {{ request()->is('admin/products*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fa-fw fas fa-shopping-cart">

                            </i>
                            <p>
                                <span>{{ trans('cruds.productManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is('admin/product-categories') || request()->is('admin/product-categories/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.productCategory.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is('admin/product-tags') || request()->is('admin/product-tags/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-folder">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.productTag.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-shopping-cart">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.product.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('contact_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/contact-companies*') ? 'menu-open' : '' }} {{ request()->is('admin/contact-contacts*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fa-fw fas fa-phone-square">

                            </i>
                            <p>
                                <span>{{ trans('cruds.contactManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('contact_company_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-companies.index") }}" class="nav-link {{ request()->is('admin/contact-companies') || request()->is('admin/contact-companies/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-building">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contactCompany.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_contact_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-contacts.index") }}" class="nav-link {{ request()->is('admin/contact-contacts') || request()->is('admin/contact-contacts/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user-plus">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.contactContact.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_custom_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.product-customs.index") }}" class="nav-link {{ request()->is('admin/product-customs') || request()->is('admin/product-customs/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-cogs">

                            </i>
                            <p>
                                <span>{{ trans('cruds.productCustom.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>