@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thay đổi email đăng nhập</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <form action="{{ route('email.change.sendOtp') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="new_email">Email mới</label>
            <input type="email" name="new_email" id="new_email" class="form-control" required>
            @error('new_email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Gửi OTP</button>
    </form>
</div>
@endsection
