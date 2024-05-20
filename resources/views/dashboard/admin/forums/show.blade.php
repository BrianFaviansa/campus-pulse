@extends('dashboard.admin.layouts.layout')

@section('content')
    <!-- ======================= Cards ================== -->
    <h1 class="">Forums</h1>


    <div class="px-5 mt-4">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="card-title mb-0"><a href="">
                                    {{ $forum->judul }}
                                </a></h2>
                            <div>
                                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                    {{ $forum->created_at->diffForHumans() }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('forum.show', $forum) }}"
                            class="{{ Route::is('forum.show') ? 'd-none' : '' }} btn btn-success">Detail</a>
                        @if (Auth::check() && $forum->user->id == Auth::id())
                            @include('dashboard.admin.forums.modal-edit')
                            @include('dashboard.admin.forums.modal-delete')
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="fs-4 text-dark">
                    Created by : {{ $forum->user->nama }}
                </p>
                <p>
                    {{ $forum->pesan }}
                </p>
            </div>
        </div>

        <hr>

        @include('dashboard.admin.forums.comment-box')

    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
