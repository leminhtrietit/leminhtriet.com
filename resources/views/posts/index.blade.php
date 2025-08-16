@extends('layouts.app') 

@section('title', 'Tutorials - MinhTrietEras')
@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-[#79b5bb]/15 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 mb-8 text-center border border-white/20">
            <h1 class="text-4xl font-bold mb-2 text-gray-900">Tutorials</h1>                    <!-- <p class="text-lg text-gray-700">Chọn một bài học bên dưới để bắt đầu cuộc hành trình kiến thức của bạn!</p> -->
        </div>
<div class="mb-12 bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-8 rounded-2xl shadow-lg flex flex-col md:flex-row items-center justify-between">
    <div class="md:w-2/3">
        <h2 class="text-3xl font-bold mb-2">Khám phá Giáo trình Ứng dụng AI</h2>
        <p class="opacity-90">Một khóa học đầy đủ để bạn làm chủ các công cụ AI, tối ưu hóa công việc và nâng cao hiệu suất.</p>
    </div>
    <div class="mt-6 md:mt-0">
        <a href="{{ route('course.index') }}" class="bg-white text-indigo-600 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
            Xem giáo trình →
        </a>
    </div>
</div>
    <!-- Layout Lưới cho các thẻ bài học -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Bạn có thể sao chép khối div ở trên để thêm các bài học khác -->
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', $post->slug) }}" class="group relative block rounded-2xl transition-all duration-300 hover:-translate-y-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-100">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-2xl blur opacity-0 group-hover:opacity-75 transition duration-500"></div>
                    <div class="relative bg-white/60 backdrop-blur-md rounded-2xl shadow-lg border border-white/30 overflow-hidden h-full flex flex-col">
                        <div class="aspect-square w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->title }}</h3>
                        </div>
                    </div>
                </a>
            @endforeach               
        </div>
    </div>
</div>
@endsection