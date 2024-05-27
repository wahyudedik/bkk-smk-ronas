@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
    </div><!-- End Page Title -->

<div class="card">
    <div class="card-header">
        <h4>Edit Profil Anda</h4>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('profile.update') }}" class="mt-3">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
                @error('email')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="mt-2">
                        <p class="text-sm text-gray-800">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to re-send the verification email.') }}</button>
                        </p>
                        @if (session('status') === 'verification-link-sent')
                            <div class="alert alert-success mt-2">{{ __('A new verification link has been sent to your email address.') }}</div>
                        @endif
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                @if (session('status') === 'profile-updated')
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: '{{ __("Saved.") }}',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                @endif
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>{{ __('Update Password') }}</h4>
    </div>
    <div class="card-body">
        <p class="text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
        <form method="post" action="{{ route('password.update') }}" class="mt-3">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required autocomplete="current-password">
                @error('current_password')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('New Password') }}</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" onclick="Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Perubahan akan disimpan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, simpan perubahan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: '{{ __("Saved.") }}',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                })">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>{{ __('Delete Account') }}</h4>
    </div>
    <div class="card-body">
        <p class="text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
        <button class="btn btn-danger" onclick="Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Akun Anda akan dihapus secara permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus akun!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-user-form').submit();
            }
        })">{{ __('Delete Account') }}</button>
        <form id="delete-user-form" action="{{ route('profile.destroy') }}" method="POST" style="display: none;">
            @csrf
            @method('delete')
        </form>
    </div>
</div>

@endsection