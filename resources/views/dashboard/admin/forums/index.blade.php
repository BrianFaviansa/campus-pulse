@extends('dashboard.admin.layouts.layout')

@section('content')
    <!-- ======================= Cards ================== -->
    <h1 class="">Forums</h1>

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif
    
    @include('dashboard.admin.forums.modal-create')

    <div class="px-5 mt-4">
        @forelse ($forums as $forum)
            <div class="my-4">
                @include('dashboard.admin.forums.forum-card')
            </div>
        @empty
            There are no discussion
        @endforelse
    </div>

    <div class="d-flex justify-content-end pr-5">
        {{ $forums->links() }}
    </div>
    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
