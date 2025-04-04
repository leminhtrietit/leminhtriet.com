@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Xác thực thay đổi email</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <form action="{{ route('email.change.verifyOtp') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="otp">Nhập mã OTP</label>
            <input type="text" name="otp" id="otp" class="form-control" required>
            @error('otp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Xác thực</button>
    </form>
</div>
@endsection
