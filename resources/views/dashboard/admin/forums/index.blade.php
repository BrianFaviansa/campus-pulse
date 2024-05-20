@extends('dashboard.admin.layouts.layout')

@section('content')
    <!-- ======================= Cards ================== -->
    <h1 class="">Forums</h1>

    @include('dashboard.admin.forums.modal-create')

    <div class="px-5 mt-4">
        @forelse ($forums as $forum)
            @include('dashboard.admin.forums.forum-card')
        @empty
            There are no discussion
        @endforelse
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
