<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ route('homepage') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ trans('words.title') }}</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('homepage') }}"
                        class="nav-link {{ request()->route()->getName() == 'homepage' ? ' active ' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ trans('words.home') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category.index') }}"
                        class="nav-link {{ request()->is('category*') ? ' active ' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ trans('words.categories') }}</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>