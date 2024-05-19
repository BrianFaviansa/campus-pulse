@extends('dashboard.admin.layouts.layout')

@section('content')
<h1 class="">Members</h1>
<div class="recentCustomers">
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>University</th>
                <th>Major</th>
                <th>Registered At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->jenis_kelamin }}</td>
                <td>{{ $user->universitas }}</td>
                <td>{{ $user->jurusan }}</td>
                <td>{{ $user->created_at->format('d F Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7">There is no member</td>
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

