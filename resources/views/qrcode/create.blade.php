@extends('layouts.wide')

@section('title', 'Tạo QR code')

@section('main_content')
    <div class="container mx-auto px-4 py-2 max-w-screen-2xl">
        <div class="bg-white/90 backdrop-blur-md p-4 rounded-xl shadow border border-white/20"><h1
                    class="text-xl font-bold text-gray-900 text-center mb-4">Tạo QR Code Chuyên Nghiệp</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4"> {{-- CỘT 1: Panel chọn chế độ + Tùy chỉnh --}}
                <div class="flex flex-col gap-4"> {{-- Dòng 1: PANEL CHỌN LOẠI NỘI DUNG --}}
                    <div class="p-2 bg-gray-50 rounded-lg border border-gray-200">
                        <div id="content-type-toolbar"
                             class="flex gap-1 overflow-x-auto pb-1 -mx-1 px-1"> @foreach([ ['url','🌐','URL'], ['text','📝','Văn bản'], ['wifi','📶','WiFi'], ['phone','📞','Điện thoại'], ['email','✉️','Email'], ] as [$type,$icon,$label])
                                <button type="button"
                                        class="content-type-btn px-2 py-1 text-xs rounded border border-gray-300 bg-white flex items-center gap-1"
                                        data-type="{{$type}}"><span
                                            class="w-4 h-4 inline-block">{{$icon}}</span><span>{{$label}}</span>
                                </button>
                            @endforeach </div>
                    </div> {{-- Dòng 2: Tùy chỉnh nội dung + màu sắc + shape... --}}
                    <div class="p-3 bg-gray-50 rounded-lg border border-gray-200 space-y-3"> {{-- Trường dữ liệu theo loại nội dung --}}
                        <div id="url-fields" class="content-fields"><label for="url-input"
                                                                           class="block text-gray-700 font-semibold mb-1 text-sm">URL:</label>
                            <input type="url" id="url-input" value="https://leminhtriet.com"
                                   class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400">
                        </div>
                        <div id="text-fields" class="content-fields hidden"><label for="text-input"
                                                                                   class="block text-gray-700 font-semibold mb-1 text-sm">Văn
                                bản:</label> <textarea id="text-input" rows="2"
                                                       class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400">Xin chào, đây là văn bản thử nghiệm!</textarea>
                        </div>
                        <div id="wifi-fields" class="content-fields hidden"><label for="wifi-ssid"
                                                                                   class="block text-gray-700 font-semibold mb-1 text-sm">Tên
                                WiFi (SSID):</label> <input type="text" id="wifi-ssid"
                                                            class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                                            placeholder="Tên mạng của bạn"> <label for="wifi-password"
                                                                                                   class="block text-gray-700 font-semibold mb-1 text-sm mt-1">Mật
                                khẩu:</label> <input type="text" id="wifi-password"
                                                     class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                                     placeholder="Mật khẩu WiFi"> <label for="wifi-encryption"
                                                                                         class="block text-gray-700 font-semibold mb-1 text-sm mt-1">Loại
                                bảo mật:</label> <select id="wifi-encryption"
                                                         class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400">
                                <option value="WPA">WPA/WPA2</option>
                                <option value="WEP">WEP</option>
                                <option value="nopass">Không mật khẩu</option>
                            </select></div>
                        <div id="phone-fields" class="content-fields hidden"><label for="phone-number"
                                                                                    class="block text-gray-700 font-semibold mb-1 text-sm">Số
                                điện thoại:</label> <input type="tel" id="phone-number"
                                                           class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                                           placeholder="0946 426 536"></div>
                        <div id="email-fields" class="content-fields hidden"><label for="email-address"
                                                                                    class="block text-gray-700 font-semibold mb-1 text-sm">Email:</label>
                            <input type="email" id="email-address"
                                   class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                   placeholder="contact@leminhtriet.com"> <label for="email-subject"
                                                                                 class="block text-gray-700 font-semibold mb-1 text-sm mt-1">Tiêu
                                đề:</label> <input type="text" id="email-subject"
                                                   class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                                   placeholder="Tiêu đề email"> <label for="email-body"
                                                                                       class="block text-gray-700 font-semibold mb-1 text-sm mt-1">Nội
                                dung:</label> <textarea id="email-body" rows="2"
                                                        class="w-full p-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-indigo-400"
                                                        placeholder="Nội dung email"></textarea></div>
                        <hr class="border-gray-200 my-2"> {{-- Body Shape + Gradient --}}
                        <div>
                            <div class="flex items-center justify-between mb-1"><label
                                        class="block text-gray-700 font-semibold text-sm">Body Shape</label> <input
                                        type="color" id="dots-color" value="#000000"
                                        class="w-7 h-7 border rounded cursor-pointer"></div>
                            <div id="dots-type-buttons" class="grid grid-cols-6 sm:grid-cols-8 gap-1 mb-1">
                                <!-- Square: Vuông nét mạnh -->
                                <button type="button"
                                        class="dots-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="square" title="Vuông">◼
                                </button> <!-- Dots: Tròn đặc cổ điển -->
                                <button type="button"
                                        class="dots-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="dots" title="Tròn">●
                                </button> <!-- Rounded: Tròn nhẹ hoặc tròn viền -->
                                <button type="button"
                                        class="dots-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="star" title="Ngôi sao">⭐
                                </button>
                                <button type="button"
                                        class="dots-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="heart" title="Trái tim">❤️
                                </button>
                            </div>
                            <label class="flex items-center gap-2 mb-1 text-xs"> <input id="dots-grad-enabled"
                                                                                        type="checkbox" class="h-3 w-3">
                                <span>Dùng gradient</span> </label>
                            <div id="dots-gradient-options" class="gradient-options hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2"><select id="dots-grad-type"
                                                                                           class="p-1 border rounded text-xs">
                                        <option value="linear">Linear</option>
                                        <option value="radial">Radial</option>
                                    </select> <input type="color" id="dots-grad-c1" value="#000000"
                                                     class="w-full h-7 border rounded"> <input type="color"
                                                                                               id="dots-grad-c2"
                                                                                               value="#555555"
                                                                                               class="w-full h-7 border rounded">
                                    <div class="col-span-2"><label class="text-xs text-gray-600">Góc (°)</label> <input
                                                id="dots-grad-rot" type="range" min="0" max="360" value="0"
                                                class="w-full"></div>
                                </div>
                            </div>
                        </div> {{-- Eye Frame + Gradient --}}
                        <div>
                            <div class="flex items-center justify-between mb-1"><label
                                        class="block text-gray-700 font-semibold text-sm">Eye Frame</label> <input
                                        type="color" id="corners-square-color" value="#000000"
                                        class="w-7 h-7 border rounded cursor-pointer"></div>
                            <div id="corners-square-type-buttons" class="grid grid-cols-6 sm:grid-cols-8 gap-1 mb-1">
                                <button type="button"
                                        class="corners-square-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="square">▢
                                </button>
                                <button type="button"
                                        class="corners-square-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="extra-rounded" title="Extra Rounded"><img
                                            src="/assets/images/qr-code/icons8-square-50.png" alt="Extra Rounded"
                                            class="w-8 h-8 object-contain"/></button>
                                <button type="button"
                                        class="corners-square-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="dot">●
                                </button>
                                <button type="button"
                                        class="corners-square-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="rounded">⬒
                                </button>
                            </div>
                            <label class="flex items-center gap-2 mb-1 text-xs"> <input id="cs-grad-enabled"
                                                                                        type="checkbox" class="h-3 w-3">
                                <span>Gradient</span> </label>
                            <div id="cs-gradient-options" class="gradient-options hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2"><select id="cs-grad-type"
                                                                                           class="p-1 border rounded text-xs">
                                        <option value="linear">Linear</option>
                                        <option value="radial">Radial</option>
                                    </select> <input type="color" id="cs-grad-c1" value="#000000"
                                                     class="w-full h-7 border rounded"> <input type="color"
                                                                                               id="cs-grad-c2"
                                                                                               value="#555555"
                                                                                               class="w-full h-7 border rounded">
                                    <div class="col-span-2"><label class="text-xs text-gray-600">Góc (°)</label> <input
                                                id="cs-grad-rot" type="range" min="0" max="360" value="0"
                                                class="w-full"></div>
                                </div>
                            </div>
                        </div> {{-- Eye Ball + Gradient --}}
                        <div>
                            <div class="flex items-center justify-between mb-1"><label
                                        class="block text-gray-700 font-semibold text-sm">Eye Ball</label> <input
                                        type="color" id="corners-dot-color" value="#000000"
                                        class="w-7 h-7 border rounded cursor-pointer"></div>
                            <div id="corners-dot-type-buttons" class="grid grid-cols-6 sm:grid-cols-8 gap-1 mb-1">
                                <button type="button"
                                        class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="square">■
                                </button>
                                <button type="button"
                                        class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="dot">●
                                </button>
                                <button type="button"
                                        class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition"
                                        data-value="rounded">◼︎
                                </button>
                                <!-- <button type="button" class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition" data-value="classy">◆</button> <button type="button" class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition" data-value="classy-rounded">◇</button> <button type="button" class="corners-dot-type-btn btn-chip px-2 py-1 text-lg w-12 h-12 flex items-center justify-center rounded-full shadow border border-gray-300 hover:bg-gray-100 transition" data-value="extra-rounded">▣</button> -->
                            </div>
                            <label class="flex items-center gap-2 mb-1 text-xs"> <input id="cd-grad-enabled"
                                                                                        type="checkbox" class="h-3 w-3">
                                <span>Gradient</span> </label>
                            <div id="cd-gradient-options" class="gradient-options hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2"><select id="cd-grad-type"
                                                                                           class="p-1 border rounded text-xs">
                                        <option value="linear">Linear</option>
                                        <option value="radial">Radial</option>
                                    </select> <input type="color" id="cd-grad-c1" value="#000000"
                                                     class="w-full h-7 border rounded"> <input type="color"
                                                                                               id="cd-grad-c2"
                                                                                               value="#555555"
                                                                                               class="w-full h-7 border rounded">
                                    <div class="col-span-2"><label class="text-xs text-gray-600">Góc (°)</label> <input
                                                id="cd-grad-rot" type="range" min="0" max="360" value="0"
                                                class="w-full"></div>
                                </div>
                            </div>
                        </div> {{-- Nền + Gradient --}}
                        <div>
                            <div class="flex items-center justify-between mb-1"><label
                                        class="block text-gray-700 font-semibold text-sm">Nền</label> <input
                                        type="color" id="background-color" value="#ffffff"
                                        class="w-7 h-7 border rounded cursor-pointer"></div>
                            <label class="flex items-center gap-2 mb-1 text-xs"> <input id="bg-grad-enabled"
                                                                                        type="checkbox" class="h-3 w-3">
                                <span>Gradient</span> </label>
                            <label class="flex items-center gap-1 text-xs ml-3">
                                <input id="bg-transparent-enabled" type="checkbox" class="h-3 w-3">
                                <span>QR không nền</span>
                            </label>
                            <div id="bg-gradient-options" class="gradient-options hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2"><select id="bg-grad-type"
                                                                                           class="p-1 border rounded text-xs">
                                        <option value="linear">Linear</option>
                                        <option value="radial">Radial</option>
                                    </select> <input type="color" id="bg-grad-c1" value="#ffffff"
                                                     class="w-full h-7 border rounded"> <input type="color"
                                                                                               id="bg-grad-c2"
                                                                                               value="#f3f4f6"
                                                                                               class="w-full h-7 border rounded">
                                    <div class="col-span-2"><label class="text-xs text-gray-600">Góc (°)</label> <input
                                                id="bg-grad-rot" type="range" min="0" max="360" value="0"
                                                class="w-full"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> {{-- CỘT 2: Tùy chọn QR + Kết quả + Tải về --}}
                <div class="flex flex-col gap-4 min-h-[320px] max-w-xs w-full mx-auto"> {{-- KHUNG 1: Tùy chọn option --}}
                    <div class="p-3 bg-gray-100 rounded-lg border border-gray-200"><h2
                                class="text-base font-semibold text-gray-800 mb-2">Tùy chọn QR Code</h2>
                        <div class="grid grid-cols-2 gap-2">
                            <div><label class="block text-gray-700 font-semibold mb-1 text-sm">Chiều rộng</label> <input
                                        id="opt-width" type="number" min="120" max="1024" value="200"
                                        class="w-full p-1 border rounded text-sm"></div>
                            <div><label class="block text-gray-700 font-semibold mb-1 text-sm">Chiều cao</label> <input
                                        id="opt-height" type="number" min="120" max="1024" value="200"
                                        class="w-full p-1 border rounded text-sm"></div>
                            <div class="col-span-full">
                                <button type="button" id="adv-toggle"
                                        class="w-full flex items-center justify-between px-2 py-1 bg-gray-200 rounded-md font-semibold text-gray-800 mb-1 hover:bg-gray-300 transition text-xs">
                                    Tuỳ chọn nâng cao <span id="adv-toggle-icon" class="ml-2 transition-transform">&#9660;</span>
                                </button>
                                <div id="advanced-options" class="space-y-1 hidden">
                                    <div><label class="block text-gray-700 font-semibold mb-1 text-xs">Kiểu
                                            render</label> <select id="opt-type"
                                                                   class="w-full p-1 border rounded text-xs">
                                            <option value="svg" selected>SVG</option>
                                            <option value="canvas">Canvas</option>
                                        </select></div>
                                    <div><label class="block text-gray-700 font-semibold mb-1 text-xs">Error
                                            correction</label> <select id="opt-ecl"
                                                                       class="w-full p-1 border rounded text-xs">
                                            <option value="L">L (7%)</option>
                                            <option value="M">M (15%)</option>
                                            <option value="Q" selected>Q (25%)</option>
                                            <option value="H">H (30%)</option>
                                        </select></div>
                                    <div><label class="block text-gray-700 font-semibold mb-1 text-xs">TypeNumber
                                            (0–40)</label> <input id="opt-typeNumber" type="number" min="0" max="40"
                                                                  value="0" class="w-full p-1 border rounded text-xs">
                                    </div>
                                    <div><label class="block text-gray-700 font-semibold mb-1 text-xs">Shape</label>
                                        <select id="opt-shape" class="w-full p-1 border rounded text-xs">
                                            <option value="square" selected>Square</option>
                                            <option value="circle">Circle</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                    </div> {{-- KHUNG 2: Kết quả & tải xuống --}}
                    <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 flex flex-col"><h2
                                class="text-base font-bold text-gray-800 mb-2">Kết quả</h2>
                        <div class="flex items-center justify-center min-h-[160px]">
                            <div id="canvas-container"
                                 class="transition-all duration-300 transform scale-100 hover:scale-105"></div>
                        </div>
                        <div class="mt-3 flex flex-col gap-2">
                            <div><label class="block text-gray-700 font-semibold mb-1 text-sm">Tên file</label> <input
                                        id="download-name" value="leminhtriet-qrcode"
                                        class="w-full p-1 border rounded text-sm"></div>
                            <div class="grid grid-cols-2 gap-2 items-end">
                                <div><label class="block text-gray-700 font-semibold mb-1 text-sm">Định dạng tải</label>
                                    <select id="download-ext" class="w-full p-1 border rounded text-sm">
                                        <option value="png">PNG</option>
                                        <option value="jpeg">JPEG</option>
                                        <option value="webp">WEBP</option>
                                        <option value="svg" selected>SVG</option>
                                    </select></div>
                                <button type="button" id="download-btn"
                                        class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 transition shadow mt-2 sm:mt-0 text-sm">
                                    Tải xuống
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- end grid --}} </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/qr-code-styling.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const $ = (s, c = document) => c.querySelector(s);
        const $$ = (s, c = document) => Array.from(c.querySelectorAll(s));
        const activateGroup = (nodes, node) => { nodes.forEach(n => n.classList.remove('active')); node.classList.add('active'); };

        // Content type
        const typeBtns = $$('.content-type-btn');
        const fields = $$('.content-fields');
        let currentType = 'url';
        const toggleFields = () => {
            fields.forEach(f => f.classList.add('hidden'));
            const t = document.getElementById(`${currentType}-fields`);
            if (t) t.classList.remove('hidden');
        };

        // Inputs
        const urlInput = $('#url-input'), textInput = $('#text-input');
        const wifiSsid = $('#wifi-ssid'), wifiPass = $('#wifi-password'), wifiEnc = $('#wifi-encryption');
        const phone = $('#phone-number');
        const email = $('#email-address'), subject = $('#email-subject'), body = $('#email-body');

        // Options
        const optW = $('#opt-width'), optH = $('#opt-height'), optType = $('#opt-type');
        const optEcl = $('#opt-ecl'), optTypeNumber = $('#opt-typeNumber'), optShape = $('#opt-shape');

        // Style & gradients
        const dotsColor = $('#dots-color');
        const csColor = $('#corners-square-color');
        const cdColor = $('#corners-dot-color');
        const bgColor = $('#background-color');

        const dotsTypeBtns = $$('.dots-type-btn');
        const csTypeBtns = $$('.corners-square-type-btn');
        const cdTypeBtns = $$('.corners-dot-type-btn');

        const grad = {
            build: (enabled, type, c1, c2, rotDeg) => enabled ? {
                type, rotation: (rotDeg || 0) * Math.PI / 180,
                colorStops: [{ offset: 0, color: c1 }, { offset: 1, color: c2 }]
            } : undefined
        };

        const dotsGradEnabled = $('#dots-grad-enabled'), dotsGradType = $('#dots-grad-type'), dotsGradC1 = $('#dots-grad-c1'), dotsGradC2 = $('#dots-grad-c2'), dotsGradRot = $('#dots-grad-rot');
        const csGradEnabled = $('#cs-grad-enabled'), csGradType = $('#cs-grad-type'), csGradC1 = $('#cs-grad-c1'), csGradC2 = $('#cs-grad-c2'), csGradRot = $('#cs-grad-rot');
        const cdGradEnabled = $('#cd-grad-enabled'), cdGradType = $('#cd-grad-type'), cdGradC1 = $('#cd-grad-c1'), cdGradC2 = $('#cd-grad-c2'), cdGradRot = $('#cd-grad-rot');
        const bgGradEnabled = $('#bg-grad-enabled'), bgGradType = $('#bg-grad-type'), bgGradC1 = $('#bg-grad-c1'), bgGradC2 = $('#bg-grad-c2'), bgGradRot = $('#bg-grad-rot');
        // Toggle gradient options visibility for all gradient-enabled groups
        function bindGradientToggle(cbId, groupId) {
            const checkbox = document.getElementById(cbId);
            const group = document.getElementById(groupId);
            if (!checkbox || !group) return;
            const update = () => group.classList.toggle('hidden', !checkbox.checked);
            checkbox.addEventListener('change', update);
            update();
        }
        bindGradientToggle('dots-grad-enabled', 'dots-gradient-options');
        bindGradientToggle('cs-grad-enabled', 'cs-gradient-options');
        bindGradientToggle('cd-grad-enabled', 'cd-gradient-options');
        bindGradientToggle('bg-grad-enabled', 'bg-gradient-options');

        // Container QR & các option tải
        const container = $('#canvas-container');
        const downloadBtn = $('#download-btn'), downloadName = $('#download-name'), downloadExt = $('#download-ext');
        const advBtn = document.getElementById('adv-toggle');
        const advIcon = document.getElementById('adv-toggle-icon');
        const advPanel = document.getElementById('advanced-options');
        if (advBtn && advPanel && advIcon) {
            advBtn.addEventListener('click', () => {
                advPanel.classList.toggle('hidden');
                advIcon.style.transform = advPanel.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        }

        const dataByType = () => {
            switch (currentType) {
                case 'url': return (urlInput?.value?.trim() || 'https://leminhtriet.com');
                case 'text': return (textInput?.value?.trim() || 'Văn bản mẫu.');
                case 'wifi': {
                    const ssid = wifiSsid?.value || '';
                    const pass = wifiPass?.value || '';
                    const enc = wifiEnc?.value || 'WPA';
                    return ssid ? `WIFI:T:${enc};S:${ssid};P:${pass};;` : 'Vui lòng nhập tên WiFi (SSID).';
                }
                case 'phone': return `tel:${(phone?.value?.trim() || '0901234567')}`;
                case 'email': {
                    const em = email?.value || '';
                    const sj = subject?.value || '';
                    const bd = body?.value || '';
                    return em ? `mailto:${em}?subject=${encodeURIComponent(sj)}&body=${encodeURIComponent(bd)}` : 'Vui lòng nhập địa chỉ email.';
                }
                default: return 'https://leminhtriet.com';
            }
        };

        const getActive = (selector, fallback) => (document.querySelector(selector + '.active')?.dataset.value || fallback);

        // Khởi tạo QR code
        let qrCode = new QRCodeStyling({
            width: +optW.value,
            height: +optH.value,
            type: optType.value,
            data: dataByType(),
            margin: 1,
            shape: optShape.value,
            qrOptions: { errorCorrectionLevel: optEcl.value, typeNumber: +optTypeNumber.value },
            dotsOptions: { color: '#000000', type: 'square' },
            backgroundOptions: { color: '#ffffff' },
            cornersSquareOptions: { color: '#000000', type: 'square' },
            cornersDotOptions: { color: '#000000', type: 'square' }
        });
        qrCode.append(container);

        const rebuildIfNeeded = () => {
            const opts = buildOptions();
            container.innerHTML = '';
            qrCode = new QRCodeStyling(opts);
            qrCode.append(container);
        };

        const buildGradient = (enabled, type, c1, c2, rot) => grad.build(enabled, type, c1, c2, +rot);

        const buildOptions = () => ({
            width: +optW.value,
            height: +optH.value,
            type: optType.value,
            margin: 1,
            shape: optShape.value,
            data: dataByType(),
            qrOptions: { errorCorrectionLevel: optEcl.value, typeNumber: +optTypeNumber.value },
            dotsOptions: {
                color: dotsColor.value,
                type: getActive('.dots-type-btn', 'square'),
                gradient: buildGradient(dotsGradEnabled.checked, dotsGradType.value, dotsGradC1.value, dotsGradC2.value, dotsGradRot.value)
            },
            backgroundOptions: {
                color: bgColor.value,
                gradient: buildGradient(bgGradEnabled.checked, bgGradType.value, bgGradC1.value, bgGradC2.value, bgGradRot.value)
            },
            cornersSquareOptions: {
                color: csColor.value,
                type: getActive('.corners-square-type-btn', 'square'),
                gradient: buildGradient(csGradEnabled.checked, csGradType.value, csGradC1.value, csGradC2.value, csGradRot.value)
            },
            cornersDotOptions: {
                color: cdColor.value,
                type: getActive('.corners-dot-type-btn', 'square'),
                gradient: buildGradient(cdGradEnabled.checked, cdGradType.value, cdGradC1.value, cdGradC2.value, cdGradRot.value)
            }
        });

        const update = () => {
            const opts = buildOptions();
            qrCode.update(opts);
        };

        // Bind toolbar
        typeBtns.forEach(b => b.addEventListener('click', () => { activateGroup(typeBtns, b); currentType = b.dataset.type; toggleFields(); update(); }));
        document.querySelector('.content-type-btn[data-type="url"]')?.classList.add('active');
        toggleFields();

        // Bind style groups
        const bindGroup = (list) => list.forEach(btn => btn.addEventListener('click', () => { activateGroup(list, btn); update(); }));
        bindGroup(dotsTypeBtns); bindGroup(csTypeBtns); bindGroup(cdTypeBtns);

        // Bind inputs (nội dung, style, màu, gradient, các input còn lại)
        [
            urlInput, textInput, wifiSsid, wifiPass, wifiEnc, phone, email, subject, body,
            dotsColor, csColor, cdColor, bgColor,
            dotsGradEnabled, dotsGradType, dotsGradC1, dotsGradC2, dotsGradRot,
            csGradEnabled, csGradType, csGradC1, csGradC2, csGradRot,
            cdGradEnabled, cdGradType, cdGradC1, cdGradC2, cdGradRot,
            bgGradEnabled, bgGradType, bgGradC1, bgGradC2, bgGradRot,
            optEcl, optTypeNumber, optShape
        ].filter(Boolean).forEach(el => { el.addEventListener('input', update); el.addEventListener('change', update); });

        // Rebuild when switching renderer or size
        [optType, optW, optH].forEach(el => el.addEventListener('change', rebuildIfNeeded));

        // Download
        downloadBtn.addEventListener('click', () => {
            qrCode.download({ name: (downloadName.value || 'qr'), extension: downloadExt.value });
        });

        // Defaults
        document.querySelector('.dots-type-btn[data-value="square"]')?.classList.add('active');
        document.querySelector('.corners-square-type-btn[data-value="square"]')?.classList.add('active');
        document.querySelector('.corners-dot-type-btn[data-value="square"]')?.classList.add('active');

        // Chip styles
        const style = document.createElement('style');
        style.textContent = `.btn-chip{display:flex;align-items:center;justify-content:center;padding:.6rem;border:1px solid #d1d5db;border-radius:.5rem;background:#fff;color:#374151}
            .btn-chip:hover{background:#e5e7eb}.active{background:#4f46e5;color:#fff;border-color:#4f46e5}`;
        document.head.appendChild(style);

        update();
    });
</script>
@endsection