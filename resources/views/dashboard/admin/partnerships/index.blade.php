@extends('dashboard.admin.layouts.layout')

@section('content')
    <h1 class="">Partnerships</h1>
    @include('dashboard.admin.partnerships.modal-create')

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif

    <div class="recentCustomers mt-1">
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Partnership Link</th>
                    <th>Partnered At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($partnerships as $partnership)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $partnership->nama }}</td>
                        <td><a href="{{ $partnership->link }}">{{ $partnership->link }}</a></td>
                        <td>{{ $partnership->created_at->format('d F Y') }}</td>
                        <td>
                            @include('dashboard.admin.partnerships.modal-edit')
                            @include('dashboard.admin.partnerships.modal-delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There is no partnership</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
