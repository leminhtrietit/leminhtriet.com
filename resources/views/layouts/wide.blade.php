@extends('application')

@section('layout_class', 'wide-layout')

@section('content')
        {{-- Phần nội dung chính của trang sẽ được chèn vào đây --}}
        @yield('main_content')
@endsection

{{-- Bạn có thể thêm các script hoặc style đặc thù cho layout này tại đây nếu cần --}}
@section('scripts')
    @parent
@endsection