@extends('landing.layouts.main')

@section('container') <!--Mengisi bagian container, pembeda dari halaman lain letakkan disini-->
        <!-- about section starts -->
<section class="about" id="about">
    <h1 class="heading">  <span> ? </span></h1>

        <div class="row">

            <div class="image">
                <img src="{{asset('img/CampusPulse.png')}}" alt="" height="800px">
            </div>

            <div class="content">
                <h3>About Us</h3>
                <p> Platform interaktif untuk mahasiswa, menyediakan fitur Event dan
                    Komunitas. Fitur Event mempermudah akses informasi tentang lomba,
                    beasiswa, volunteer, dan magang dengan kategorisasi yang jelas.
                    Notifikasi aktif memastikan penerimaan informasi penting. Fitur Komunitas memungkinkan interaksi dan
                    pertukaran informasi antar mahasiswa,
                    memperluas jaringan sosial dan meningkatkan keterampilan interpersonal. Antarmuka intuitif dan
                    desain responsif menjadikan pengalaman pengguna nyaman dan efisien,
                    menjelajahi fitur dengan mudah. CampusPulse sebagai ekosistem digital yang memfasilitasi pertumbuhan
                    akademis, pengembangan pribadi, dan konektivitas antar mahasiswa.
                    Dengan semangat inovatifnya, CampusPulse bertujuan memberikan nilai tambah signifikan pada
                    pengalaman perkuliahan dan membantu mahasiswa mencapai potensi maksimal.</p>

                <div class="feature-list">
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

        <!-- review section starts -->

        <section class="review" id="review">

            <h1 class="heading"> WHY <span> US?</span></h1>

            <div class="swiper review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p> Up-to-Date Event Information </p>
                    </div>

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p> Easy to Access </p>
                    </div>

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p>Supports Academic Life </p>
                    </div>

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p>Networking Opportunities </p>
                    </div>

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p>Comprehensive Resource </p>
                    </div>

                    <div class="swiper-slide box">
                        <div class="user">
                            <div class="info">
                            </div>
                        </div>
                        <p>Community Engagement </p>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

        <section id="faq" class="faq-section">
        <h1 class="heading">Frequently <span>Asked Questions</span></h1>

        <div class="tab">
            <input type="radio" name="acc" id="acc1" checked>
            <label for="acc1">
                <h2>01</h2>
                <h3>How does the Event Feature facilitate to access the information?</h3> <!-- Perbaiki penutup tag h3 -->
            </label>
            <div class="content">
                <p>The Event Feature provides clear categorization, allowing users to easily find information they need about competitions, scholarships, volunteering, and internships without manual searching.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                <h2>02</h2>
                <h3>What benefits does the notification feature offer?</h3> <!-- Perbaiki penutup tag h3 -->
            </label>
            <div class="content">
                <p>Active notifications ensure that users receive timely notifications for important information such as crucial events, application deadlines, or other significant changes.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                <h2>03</h2>
                <h3>How does the Community Feature expand social networks?</h3> <!-- Perbaiki penutup tag h3 -->
            </label>
            <div class="content">
                <p>The Community Feature enables interaction and information exchange among students, allowing them to connect with fellow students, share experiences, and enhance their interpersonal skills through collaboration and discussion.</p>
            </div>
        </div>

        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                <h2>04</h2>
                <h3>How does CampusPulse help students reach their full potential?</h3> <!-- Perbaiki penutup tag h3 -->
            </label>
            <div class="content">
                <p>CampusPulse serves as a digital ecosystem facilitating academic growth, personal development, and student connectivity. By providing necessary resources and support, CampusPulse aims to provide significant added value to the college experience and help students achieve their maximum potential.</p>
            </div>
        </div>
    </section>
@endsection
