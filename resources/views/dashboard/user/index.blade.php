@extends('dashboard.user.layouts.layout')

@section('content')
    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
                <div>
                    <div class="numbers">{{ $users }}</div>
                    <div class="cardName">Members CampusPulse</div>
                </div>

            <div class="iconBx">
                <ion-icon name="people-sharp"></ion-icon>
            </div>
        </div>

        <div class="card">
                <div>
                    <div class="numbers">{{ $categories }}</div>
                    <div class="cardName">Event Categories</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="grid-sharp"></ion-icon>
                </div>
        </div>

        <div class="card">
            <a href=""></a>
            <div>
                <div class="numbers">{{ $events }}</div>
                <div class="cardName">Registered Events</div>
            </div>

            <div class="iconBx">
                <ion-icon name="calendar-sharp"></ion-icon>
            </div>
        </div>

        <div class="card">
            <a href=""></a>
            <div>
                <div class="numbers">{{ $partnerships }}</div>
                <div class="cardName">Partnerships</div>
            </div>

            <div class="iconBx">
                <ion-icon name="diamond-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
