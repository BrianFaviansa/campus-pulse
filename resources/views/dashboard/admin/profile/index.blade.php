@extends('dashboard.admin.layouts.layout')

@section('content')
    <h1 class="">Profile</h1>

    @if (session('success'))
        @include('dashboard.admin.layouts.success-alert')
    @endif

    @if (session('error'))
        @include('dashboard.admin.layouts.error-alert')
    @endif

    <form action="{{ route('dashboard.admin.profile.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" value="{{ $user->nama }}"
                class="form-control @error('nama') is-invalid @enderror" id="nama" required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $user->email }}"
                class="form-control @error('email') is-invalid @enderror" id="email" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Gender</label>
            <select name="jenis_kelamin" class="form-control text-dark" id="jenis_kelamin">
                <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="universitas">University</label>
            <input type="text" name="universitas" value="{{ $user->universitas }}"
                class="form-control @error('universitas') is-invalid @enderror" id="universitas" required>
            @error('universitas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jurusan">Major</label>
            <input type="text" name="jurusan" value="{{ $user->jurusan }}"
                class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" required>
            @error('jurusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="oldPassword">Old Password</label>
            <input type="password" name="oldPassword" class="form-control" id="oldPassword">
        </div>
        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" name="newPassword" class="form-control @error('newPassword') is-invalid @enderror"
                id="newPassword">
            <small>Leave it empty if you don't want to change your password</small>
            @error('newPassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
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
