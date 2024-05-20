<!-- =============== Navigation ================ -->
<div class="">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="school-outline"></ion-icon>
                    </span>
                    <span class="title">{{ $user->nama }}</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.user') }}" id="dashboardLink">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Landing</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.user.events') }}">
                    <span class="icon">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                    <span class="title">Registered Events</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.user.partnerships') }}">
                    <span class="icon">
                        <ion-icon name="diamond-outline"></ion-icon>
                    </span>
                    <span class="title">Partnerships</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.user.forums') }}">
                    <span class="icon">
                        <ion-icon name="chatbox-outline"></ion-icon>
                    </span>
                    <span class="title">Forums</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.user.profile', $user) }}">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>


            <div class="user">
                <img src="{{ asset('import/assets/imgs/customer01.jpg') }}" alt="">
            </div>
        </div>

