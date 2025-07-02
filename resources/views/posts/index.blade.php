@extends('application')  {{-- Use the new layout --}}

@section('title', 'Tutorials - MinhTrietEras') {{-- Set the title --}}

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-[#79b5bb]/15 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

        <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 mb-8 text-center border border-white/20">
            <h1 class="text-4xl font-bold mb-2 text-gray-900">Tutorials</h1>                    <!-- <p class="text-lg text-gray-700">Chọn một bài học bên dưới để bắt đầu cuộc hành trình kiến thức của bạn!</p> -->
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