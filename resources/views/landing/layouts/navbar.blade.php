    <!-- header section starts -->

    <header class="header">

        <a href="/" class="logo"> <i class="fa-solid fa-graduation-cap"></i> CampusPulse</a>

        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <div class="dropdown">
                <button class="dropbtn">Event</button>
                <div class="dropdown-content">
                    <a href="/competitions">Competitions</a>
                    <a href="/scholarships">Scholarships</a>
                    <a href="/internships">Internships</a>
                </div>
            </div>
            <a href="/community">Community</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu"></div>
            @guest
                <a href="{{ route('login') }}">
                    <div class="fas fa-user" id="login-btn"></div>
                </a>
            @endguest
            @auth
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('dashboard.admin') }}">
                        <div class="fas fa-user" id="login-btn"></div>
                    </a>
                @else
                    <a href="{{ route('dashboard.user') }}">
                        <div class="fas fa-user" id="login-btn"></div>
                    </a>
                @endif
            @endauth

            <a href="">
                <div class="fas fa-bell"></div>
            </a>
        </div>

    </header>


    <!-- header section ends -->
