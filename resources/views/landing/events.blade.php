@extends('landing.layouts.main')

@section('container')
    <section class="products" style="margin-top: 100px" id="products">
        <div class="box-container">

            @forelse ($events as $event)
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('storage/event_posters/'. $event->poster) }}" class="img img-fluid" style="" alt="">
                    </div>
                    <div class="content">
                        <h3>{{ $event->nama }}</h3>
                        <div class="price">{{ $event->tanggal->format('d F Y') }}</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <span>Offline</span>
                        </div>
                        <a href="#" class="btn"> <i class="far fa-heart"></i></a>
                    </div>
                </div>
            @empty
                There are no registered events at the moment.
            @endforelse


        </div>
    </section>
@endsection
