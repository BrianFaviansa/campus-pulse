@extends('dashboard.admin.layouts.layout')

@section('content')
    <h1 class="">Category</h1>
    @include('dashboard.admin.categories.modal-create')

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif

    <div class="recentCustomers mt-1">
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->nama }}</td>
                        <td>{{ $category->created_at->format('d F Y') }}</td>
                        <td>
                            {{-- @include('AdminDashboard.category.modal-edit') --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
