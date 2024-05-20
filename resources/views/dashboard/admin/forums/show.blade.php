@extends('dashboard.admin.layouts.layout')

@section('content')
    <!-- ======================= Cards ================== -->
    <h1 class="">Forums</h1>


    <div class="px-5 mt-4">
        @include('dashboard.admin.forums.forum-card')
        <hr>
        @forelse($forum->comments as $comment)
            @include('dashboard.admin.forums.comment-box')
        @empty
            <p class="text-center my-4">No Comments Found.</p>
        @endforelse
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
