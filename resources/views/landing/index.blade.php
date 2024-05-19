@extends('landing.layouts.main')

@section('container')
    <!-- home section starts -->

    <section class="home" id="home" style="background-image: url('{{ asset('img/bgbiru.jpg') }}');">

        <div class="content">
            <h3> Your Education, <br/> Your Pulse, <br/>Your Success! </marquee>
            </h3>
            <p> <marquee> Seize limitless chances! Find scholarships, internships &  <br />
                competitions through our website – boost your growth, resume, and future success. </marquee></p>
            <a href="#review" class="btn"> Explore Us!</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- feature section starts -->

    <section class="feature" id="feature">

        <h1 class="heading"><span>Exclusive</span> Events</h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-medal"></i>
                <h2>Competitions</h2>
                <p>Get ready for the thrill! - Immerse yourself in the Champion's Corner</p>
                <a href="/competitions" class="btn"> See More</a>
            </div>

            <div class="box">
                <i class="fas fa-landmark"></i>
                <h2>Scholarships</h2>
                <p>Your future awaits – explore, apply, and thrive!</p>
                <a href="/scholarships" class="btn"> See More</a>
            </div>

            <div class="box">
                <i class="fas fa-lightbulb"></i>
                <h2>Internships</h2>
                <p>Don't miss out – your future internship awaits!</p>
                <a href="/internships" class="btn"> See More</a>
            </div>

        </div>

    </section>

    <!-- feature section ends -->

    <!-- review section starts -->

    <section class="review" id="review">

        <h1 class="heading">Our <span> Benefits</span></h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p> All-in-one source for upcoming competitions, scholarship, and internship </p>
                </div>

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p>Facilitates networking and collaboration among students</p>
                </div>

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p>Enhancing academic experiences and personal growth</p>
                </div>

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p> Connect, share ideas, and engage in discussions with like-minded peers</p>
                </div>

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p>Easier-than-ever way to create an <br/> impressive CV</p>
                </div>

                <div class="swiper-slide box">
                    <div class="user">
                        <div class="info">
                        </div>
                    </div>
                    <p>Unlock a world of possibilities for skill development and career advancement</p>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- Promotions section starts -->

    <section class="Promotions" id="Promotions">

        <h1 class="heading"><span>Embarking the journey </span> <br/> with CampusPulse</h1>

        <div class="box-container">

            <div class="box">
                <h2>Upload Events</h2>
                <p>Effortlessly track ticket sales and participant data.
                    Average registration is 112 people per event! <br/>
                    Want your event to be bustling?</p>
                <a href="/login"
                class="btn"> Upload Your Event Now!</a>
            </div>

            <div class="box">
                <h2>Brand & General Partnership</h2>
                <p>Indonesia's largest youth platform.
                    Starting from organizing events, introducing products, improving brand equity,
                    CampusPulse can help everything!</p>
                <a href="./login"
                class="btn"> We're Here!</a>
            </div>

        </div>

    </section>

    <!-- Promotions section ends -->


    <!-- blogs section starts -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span>Hear </span> From Them</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/nadine.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nadine Abigail</h3>
                    <h1>Universitas Indonesia</h1>
                    <p>Saya merasa sangat terbantu dengan adanya website ini yang dapat menunjang dunia perkuliahan saya terutama dalam perihal non-akademik</p>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i> 2nd Feb, 2024 </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/william.jpg" alt="">
                </div>
                <div class="content">
                    <h3>William Harardi</h3>
                    <h1>Universitas Diponegoro</h1>
                    <p>Saya merasakan manfaat yang sesungguhnya dengan menggunakan website ini sangat membantu saya dalam mencari informasi terkait magang</p>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i> 15th May, 2024 </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/hara.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Eunike Alfrita</h3>
                    <h1>Institut Teknologi Bandung</h1>
                    <p>Website ini sangat bermanfaat bagi Mahasiswa yang sulit mencari informasi terkait lomba dan magang dalam 1 platform yang sama</p>
                    <div class="icons">
                        <a href="#"><i class="fas fa-calendar"></i> 1st June, 2024 </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->
@endsection
