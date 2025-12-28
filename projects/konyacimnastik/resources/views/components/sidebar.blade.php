@php
    use App\Support\Permissions;

    $route = request()->route() ? request()->route()->getName() : '';

    function isActive($patterns) {
        foreach ((array)$patterns as $p) {
            if (request()->routeIs($p)) return true;
        }
        return false;
    }
@endphp

<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>

    <div>
        <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
            <img src="{{ asset('admin-assets/assets/images/logo.png') }}" class="light-logo">
            <img src="{{ asset('admin-assets/assets/images/logo-light.png') }}" class="dark-logo">
            <img src="{{ asset('admin-assets/assets/images/logo-icon.png') }}" class="logo-icon">
        </a>
    </div>

    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">

            {{-- DASHBOARD --}}
            <li class="{{ isActive('admin.dashboard') ? 'mm-active' : '' }}">
                <a class="{{ isActive('admin.dashboard') ? 'active' : '' }}"
                   href="{{ route('admin.dashboard') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- AI APPLICATION --}}
            @can('permission', Permissions::AI)
                @php $ai = isActive([
                'admin.codeGenerator*',
                'admin.textGenerator*',
                'admin.imageGenerator*',
                'admin.videoGenerator*',
                'admin.voiceGenerator*'
            ]) @endphp
                <li class="dropdown {{ $ai ? 'mm-active' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="ri-robot-2-line text-xl me-14 d-flex w-auto"></i>
                        <span>Ai Application</span>
                    </a>
                    <ul class="sidebar-submenu" style="{{ $ai ? 'display:block;' : '' }}">
                        <li><a class="{{ isActive('admin.textGenerator') ? 'active' : '' }}" href="{{ route('admin.textGenerator') }}"><i class="ri-circle-fill circle-icon text-primary-600"></i> Text Generator</a></li>
                        <li><a class="{{ isActive('admin.codeGenerator') ? 'active' : '' }}" href="{{ route('admin.codeGenerator') }}"><i class="ri-circle-fill circle-icon text-warning-main"></i> Code Generator</a></li>
                        <li><a class="{{ isActive('admin.codeGeneratorNew') ? 'active' : '' }}" href="{{ route('admin.codeGeneratorNew') }}"><i class="ri-circle-fill circle-icon text-warning-main"></i> Code Generator New</a></li>
                        <li><a class="{{ isActive('admin.imageGenerator') ? 'active' : '' }}" href="{{ route('admin.imageGenerator') }}"><i class="ri-circle-fill circle-icon text-info-main"></i> Image Generator</a></li>
                        <li><a class="{{ isActive('admin.videoGenerator') ? 'active' : '' }}" href="{{ route('admin.videoGenerator') }}"><i class="ri-circle-fill circle-icon text-success-main"></i> Video Generator</a></li>
                        <li><a class="{{ isActive('admin.voiceGenerator') ? 'active' : '' }}" href="{{ route('admin.voiceGenerator') }}"><i class="ri-circle-fill circle-icon text-danger-main"></i> Voice Generator</a></li>
                    </ul>
                </li>
            @endcan

            {{-- COMPONENTS --}}
            @php
                $components = isActive([
                    'admin.alert',
                    'admin.avatar',
                    'admin.badges',
                    'admin.button',
                    'admin.card',
                    'admin.carousel',
                    'admin.colors',
                    'admin.dropdown',
                    'admin.imageUpload',
                    'admin.list',
                    'admin.pagination',
                    'admin.progress',
                    'admin.radio',
                    'admin.starRating',
                    'admin.switch',
                    'admin.tabs',
                    'admin.tags',
                    'admin.tooltip',
                    'admin.typography',
                    'admin.videos',
                ]);
            @endphp
            @can('permission', Permissions::COMPONENTS)
                <li class="dropdown {{ $components ? 'mm-active' : '' }}">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                        <span>Components</span>
                    </a>

                    <ul class="sidebar-submenu" style="{{ $components ? 'display:block;' : '' }}">
                        <li><a class="{{ isActive('admin.alert') ? 'active' : '' }}" href="{{ route('admin.alert') }}">Alert</a></li>
                        <li><a class="{{ isActive('admin.avatar') ? 'active' : '' }}" href="{{ route('admin.avatar') }}">Avatar</a></li>
                        <li><a class="{{ isActive('admin.badges') ? 'active' : '' }}" href="{{ route('admin.badges') }}">Badges</a></li>
                        <li><a class="{{ isActive('admin.button') ? 'active' : '' }}" href="{{ route('admin.button') }}">Button</a></li>
                        <li><a class="{{ isActive('admin.card') ? 'active' : '' }}" href="{{ route('admin.card') }}">Card</a></li>
                        <li><a class="{{ isActive('admin.carousel') ? 'active' : '' }}" href="{{ route('admin.carousel') }}">Carousel</a></li>
                        <li><a class="{{ isActive('admin.colors') ? 'active' : '' }}" href="{{ route('admin.colors') }}">Colors</a></li>
                        <li><a class="{{ isActive('admin.dropdown') ? 'active' : '' }}" href="{{ route('admin.dropdown') }}">Dropdown</a></li>
                        <li><a class="{{ isActive('admin.imageUpload') ? 'active' : '' }}" href="{{ route('admin.imageUpload') }}">Image Upload</a></li>
                        <li><a class="{{ isActive('admin.list') ? 'active' : '' }}" href="{{ route('admin.list') }}">List</a></li>
                        <li><a class="{{ isActive('admin.pagination') ? 'active' : '' }}" href="{{ route('admin.pagination') }}">Pagination</a></li>
                        <li><a class="{{ isActive('admin.progress') ? 'active' : '' }}" href="{{ route('admin.progress') }}">Progress</a></li>
                        <li><a class="{{ isActive('admin.radio') ? 'active' : '' }}" href="{{ route('admin.radio') }}">Radio</a></li>
                        <li><a class="{{ isActive('admin.starRating') ? 'active' : '' }}" href="{{ route('admin.starRating') }}">Star Rating</a></li>
                        <li><a class="{{ isActive('admin.switch') ? 'active' : '' }}" href="{{ route('admin.switch') }}">Switch</a></li>
                        <li><a class="{{ isActive('admin.tabs') ? 'active' : '' }}" href="{{ route('admin.tabs') }}">Tabs</a></li>
                        <li><a class="{{ isActive('admin.tags') ? 'active' : '' }}" href="{{ route('admin.tags') }}">Tags</a></li>
                        <li><a class="{{ isActive('admin.tooltip') ? 'active' : '' }}" href="{{ route('admin.tooltip') }}">Tooltip</a></li>
                        <li><a class="{{ isActive('admin.typography') ? 'active' : '' }}" href="{{ route('admin.typography') }}">Typography</a></li>
                        <li><a class="{{ isActive('admin.videos') ? 'active' : '' }}" href="{{ route('admin.videos') }}">Videos</a></li>
                    </ul>
                </li>
            @endcan

            {{-- FORMS --}}
            @can('permission', Permissions::FORMS)
                @php $forms = isActive('admin.form*') @endphp
                <li class="dropdown {{ $forms ? 'mm-active' : '' }}">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                        <span>Forms</span>
                    </a>
                    <ul class="sidebar-submenu" style="{{ $forms ? 'display:block;' : '' }}">
                        <li><a class="{{ isActive('admin.form') ? 'active' : '' }}" href="{{ route('admin.form') }}">Form</a></li>
                        <li><a class="{{ isActive('admin.formLayout') ? 'active' : '' }}" href="{{ route('admin.formLayout') }}">Form Layout</a></li>
                        <li><a class="{{ isActive('admin.formValidation') ? 'active' : '' }}" href="{{ route('admin.formValidation') }}">Form Validation</a></li>
                        <li><a class="{{ isActive('admin.wizard') ? 'active' : '' }}" href="{{ route('admin.wizard') }}">Wizard</a></li>
                    </ul>
                </li>
            @endcan

            {{-- USERS --}}
            @can('permission', Permissions::USERS)
                @php $users = isActive('admin.users*') @endphp
                <li class="dropdown {{ $users ? 'mm-active' : '' }}">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Users</span>
                    </a>
                    <ul class="sidebar-submenu" style="{{ $users ? 'display:block;' : '' }}">
                        <li><a class="{{ isActive('admin.usersList') ? 'active' : '' }}" href="{{ route('admin.usersList') }}">Users List</a></li>
                        <li><a class="{{ isActive('admin.usersGrid') ? 'active' : '' }}" href="{{ route('admin.usersGrid') }}">Users Grid</a></li>
                        <li><a class="{{ isActive('admin.viewProfile') ? 'active' : '' }}" href="{{ route('admin.viewProfile') }}">View Profile</a></li>
                        <li><a class="{{ isActive('admin.addUser') ? 'active' : '' }}" href="{{ route('admin.addUser') }}">Add User</a></li>
                    </ul>
                </li>
            @endcan

            {{-- SETTINGS --}}
            @can('permission', Permissions::SETTINGS)
                @php $settings = isActive('admin.company','admin.currencies','admin.language','admin.notification*','admin.theme','admin.paymentGateway') @endphp
                <li class="dropdown {{ $settings ? 'mm-active' : '' }}">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                        <span>Settings</span>
                    </a>
                    <ul class="sidebar-submenu" style="{{ $settings ? 'display:block;' : '' }}">
                        <li><a class="{{ isActive('admin.company') ? 'active' : '' }}" href="{{ route('admin.company') }}">Company</a></li>
                        <li><a class="{{ isActive('admin.currencies') ? 'active' : '' }}" href="{{ route('admin.currencies') }}">Currencies</a></li>
                        <li><a class="{{ isActive('admin.language') ? 'active' : '' }}" href="{{ route('admin.language') }}">Language</a></li>
                        <li><a class="{{ isActive('admin.notification') ? 'active' : '' }}" href="{{ route('admin.notification') }}">Notification</a></li>
                        <li><a class="{{ isActive('admin.notificationAlert') ? 'active' : '' }}" href="{{ route('admin.notificationAlert') }}">Notification Alert</a></li>
                        <li><a class="{{ isActive('admin.paymentGateway') ? 'active' : '' }}" href="{{ route('admin.paymentGateway') }}">Payment Gateway</a></li>
                        <li><a class="{{ isActive('admin.theme') ? 'active' : '' }}" href="{{ route('admin.theme') }}">Theme</a></li>
                    </ul>
                </li>
            @endcan

        </ul>
    </div>
</aside>
