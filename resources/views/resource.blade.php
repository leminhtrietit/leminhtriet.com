@extends('application')

@section('title', 'Tài nguyên & Tải về')

@section('content')
    {{-- Thêm CSS cho hiệu ứng mới --}}
    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Animation cho card */
        .card-enter {
            transition: all 0.3s ease-out;
            opacity: 0;
            transform: translateY(20px);
        }

        .card-enter-start {
            opacity: 0;
            transform: translateY(20px);
        }

        .card-enter-end {
            opacity: 1;
            transform: translateY(0);
        }

        /* === CSS CHO HIỆU ỨNG VIỀN GRADIENT CHẠY VÒNG QUANH === */
        @keyframes rotate_border {
            100% {
                transform: rotate(360deg);
            }
        }

        .animated-gradient-border-container {
            position: relative;
            border-radius: 0.8rem;
            /* Bo góc cho container */
            overflow: hidden;
            /* Ẩn phần thừa của gradient */
            padding: 3px;
            /* Độ dày của viền */
            background: transparent;
        }

        .animated-gradient-border-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200%;
            /* Kích thước lớn để khi xoay không bị hụt */
            height: 200%;
            z-index: -1;
            background: conic-gradient(from 0deg,
                    #84fab0,
                    #8fd3f4,
                    #a18cd1,
                    #fad0c4,
                    #fbc2eb,
                    #a6c1ee,
                    #84fab0
                    /* Lặp lại màu đầu để vòng lặp mượt mà */
                );
            transform: translate(-50%, -50%);
            animation: rotate_border 4s linear infinite;
        }

        /* === KẾT THÚC CSS CHO HIỆU ỨNG === */
    </style>

    <div class="max-w-6xl mx-auto px-6 py-4">
        {{-- Khởi tạo Alpine.js component, truyền toàn bộ resource vào --}}
        <div x-data="{ 
            search: '', 
            allResources: {{ $allResources->toJson() }},
            get filteredResources() {
                if (this.search.trim() === '') {
                    return this.allResources;
                }
                return this.allResources.filter(
                    resource => resource.appname.toLowerCase().includes(this.search.toLowerCase())
                );
            }
        }">
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-lg border border-white/20">

                {{-- Header & Search --}}
                <div class="text-center mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Tài nguyên & Tải về</h1>
                    <p class="text-lg text-gray-600 mt-3 max-w-2xl mx-auto">Các công cụ và tài liệu được chọn lọc để tăng
                        tốc hiệu suất công việc của bạn.</p>

                    {{-- === CẬP NHẬT KHUNG TÌM KIẾM === --}}
                    <div class="mt-8 max-w-xl mx-auto">
                        <div class="animated-gradient-border-container">
                            <div class="relative bg-white rounded-lg">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>

                                {{-- THÊM class 'focus:outline-none' VÀO ĐÂY --}}
                                <input x-model.debounce.300ms="search" type="text"
                                    placeholder="Tìm kiếm nhanh theo tên ứng dụng..."
                                    class="w-full pl-12 pr-4 py-3 bg-transparent border-none focus:ring-0 focus:outline-none transition-all duration-300">
                            </div>
                        </div>
                    </div>
                    {{-- === KẾT THÚC CẬP NHẬT KHUNG TÌM KIẾM === --}}

                </div>

                {{-- Danh sách tài nguyên đã phân loại và sắp xếp --}}
                <div class="space-y-12">
                    @forelse($categorizedResources as $category => $resources)
                        <section x-show="filteredResources.some(r => r.category === '{{ addslashes($category) }}')" x-cloak>
                            <div
                                class="flex items-center gap-4 mb-6 p-4 rounded-2xl bg-gradient-to-r from-gray-50 to-gray-100 border border-white/50">
                                <div class="flex-shrink-0 bg-white/60 p-3 rounded-xl shadow-md">
                                    <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-800">{{ $category }}</h2>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <template
                                    x-for="resource in filteredResources.filter(r => r.category === '{{ addslashes($category) }}')"
                                    :key="resource.id">
                                    {{-- Bọc toàn bộ thẻ trong thẻ <a> --}}
                                        <a :href="resource.link_truycap" target="_blank" rel="noopener noreferrer"
                                            class="group block" x-transition:enter="card-enter"
                                            x-transition:enter-start="card-enter-start" x-transition:enter-end="card-enter-end">
                                            <div
                                                class="bg-white/40 backdrop-blur-lg rounded-2xl border border-white/30 p-6 shadow-md hover:shadow-xl hover:border-white/60 hover:-translate-y-1.5 transition-all duration-300 flex flex-col h-full">
                                                <div class="flex items-center mb-4">
                                                    <img :src="resource.logo_url || 'https://img.icons8.com/fluency/48/software-box.png'"
                                                        :alt="resource.appname + ' logo'" class="h-12 w-12 mr-4 flex-shrink-0">
                                                    <div>
                                                        <h3 class="text-xl font-bold text-gray-900" x-text="resource.appname">
                                                        </h3>
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full"
                                                            x-text="resource.version"></span>
                                                    </div>
                                                </div>

                                                {{-- Icon mũi tên thay cho nút bấm --}}
                                                <div class="mt-auto pt-4 text-right">
                                                    <span
                                                        class="inline-block text-indigo-500 group-hover:text-indigo-700 group-hover:translate-x-1 transition-transform duration-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                </template>
                            </div>
                        </section>
                    @empty
                        <p class="text-center text-gray-600 col-span-full py-12">Không có tài nguyên nào để hiển thị.</p>
                    @endforelse

                    {{-- Thông báo khi không tìm thấy kết quả --}}
                    <div x-show="filteredResources.length === 0 && search.trim() !== ''" x-cloak>
                        <p class="text-center text-gray-600 py-12">Không tìm thấy tài nguyên nào phù hợp với "<span
                                x-text="search" class="font-semibold"></span>".</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection