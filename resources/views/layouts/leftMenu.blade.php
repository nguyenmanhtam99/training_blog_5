<div class="nav-side-menu">
    <div class="brand">{{ trans('common.brand_logo') }}</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">

            <li>
                <a href="#">
                    <i class="fa fa-user fa-lg"></i>{{ trans('common.profile') }}
                </a>
            </li>

            <li>
                <a href="{{ route('user.entry.index')}}">
                    <i class="fa fa-users fa-lg"></i> {{ trans('entry.entry') }}
                </a>
            </li>
        </ul>
    </div>
</div>
