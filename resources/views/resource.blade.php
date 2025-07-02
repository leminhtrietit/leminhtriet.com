@extends('application')  {{-- Use the new layout --}}

@section('title', 'Download Resources') {{-- Set the title --}}

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">

    <div class="overflow-x-auto rounded-lg border border-white/30 shadow-md">
                    <table class="w-full text-sm text-left text-gray-800">
                        <thead class="text-xs text-gray-900 uppercase bg-white/40 backdrop-blur-md">
                            <tr>
                                <th scope="col" class="px-6 py-3">App</th>
                                <th scope="col" class="px-6 py-3">Version</th>
                                <th scope="col" class="px-6 py-3"><span class="sr-only">Hành động</span></th>
                            </tr>
                        </thead>
                        <tbody>
                             @forelse($resources as $resource)
                            <tr class="bg-white/20 border-b border-white/20 hover:bg-white/40 transition-colors duration-200">

                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $resource->appname }}</th>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $resource->version }}</span></td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ $resource->link_truycap }}" class="font-medium text-indigo-600 hover:underline">{{ $resource->ten_hanhdong }}</a>
                                </td>

                            </tr>
                             @empty
                                <tr>
                                    <td colspan="6">Không có resource nào.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                </div>
                </div>




@endsection