@extends('dashboard.admin.layouts.layout')

@section('content')
    <h1 class="">Profile</h1>

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif
    
    <form action="{{ route('dashboard.admin.profile.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Gender</label>
            <select name="jenis_kelamin" class="form-control text-dark" id="jenis_kelamin">
                <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="universitas">Universitas</label>
            <input type="text" name="universitas" value="{{ $user->universitas }}" class="form-control" id="universitas"
                required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" value="{{ $user->jurusan }}" class="form-control" id="jurusan" required>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SaveProfile">
            Save Changes
        </button>

        <!-- Modal -->
        <div class="modal fade" id="SaveProfile" tabindex="-1" aria-labelledby="SaveProfileLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="SaveProfileLabel">Update Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to update your profile?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
