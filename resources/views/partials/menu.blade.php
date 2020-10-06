<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>

{{--                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-flag nav-icon">

                        </i>
                        {{ trans('cruds.country.title') }}
                    </a>
                </li>
            --}}
            <li class="nav-item">
               <a href="{{ route("pos.index") }}"
                   class="nav-link {{ request()->is('admin/pos') || request()->is('admin/pos/*') ? 'active' : '' }}">

                <i class="fa-fw fa fa-window-restore nav-icon">

                </i>
                    {{ trans('cruds.pos.title') }}
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-cogs nav-icon">

                    </i>
                    {{ trans('cruds.clients.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-cogs nav-icon">

                    </i>
                    {{ trans('cruds.products.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.invoices.index") }}"
                   class="nav-link {{ request()->is('admin/invoices') || request()->is('admin/invoices/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-cogs nav-icon">

                    </i>
                    {{ trans('cruds.invoice.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.payments.index") }}" class="nav-link {{ request()->is('admin/payments') || request()->is('admin/payments/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-cogs nav-icon">

                    </i>
                    {{ trans('cruds.payments.title') }}
                </a>
            </li>

            <hr>
            <li class="nav-item">
            <a href="{{ route("incomes.index") }}"
               class="nav-link {{ request()->is('admin/income') || request()->is('admin/income/*') ? 'active' : '' }}">
                <i class="fa-fw fa fa-bank nav-icon">

                </i>
                {{ trans('cruds.income.title') }}
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("expense.index") }}"
                   class="nav-link {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-money nav-icon">

                    </i>
                    {{ trans('cruds.expense.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("notes.index") }}"
                   class="nav-link {{ request()->is('admin/notes') || request()->is('admin/notes/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-sticky-note nav-icon">

                    </i>
                    {{ trans('cruds.notes.title') }}
                </a>
            </li>
            <hr>
{{--
            <li class="nav-item {{ Route::currentRouteName() == 'incomes.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('incomes.index') }}">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                {{ trans('cruds.income.title') }}
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'expense.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('expense.index') }}">
                    <i class="fas fa-fw fa-money-bill"></i>
                {{ trans('cruds.expense.title') }}
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'notes.index' ? 'active' : '' }}" title="This is not calculate in Income/Expense">
                <a class="nav-link" href="{{ route('notes.index') }}">
                    <i class="fas fa-fw fa-sticky-note"></i>
                {{ trans('cruds.notes.title') }}
            </li>

                <li class="nav-item">
                    <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.customer.title') }}
                    </a>
                </li>

            @if(!auth()->user()->isAdmin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.billing.index') }}">
                        <i class="fas fa-fw fa-money nav-icon">
                        </i>
                        {{ trans('global.billing.menu') }}
                    </a>
                </li>
            @endif--}}
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
