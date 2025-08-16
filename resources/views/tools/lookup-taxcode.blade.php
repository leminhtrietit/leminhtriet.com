@extends('layouts.app')
@section('title', 'Tra cứu mã số thuế doanh nghiệp')
@section('content')

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20"
         x-data="taxLookup()" x-cloak>
        <h1 class="text-2xl font-bold mb-6">Tra cứu mã số thuế doanh nghiệp</h1>
        <form @submit.prevent="lookup" class="flex gap-2 mb-6">
            <input type="text" x-model="taxId"
                class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500"
                placeholder="Nhập mã số thuế doanh nghiệp..." required>
            <button type="submit"
                    class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                    :disabled="loading || !taxId">
                Tra cứu
            </button>
        </form>

        {{-- VÙNG KẾT QUẢ & LOADER --}}
        <div class="relative min-h-[150px]">
            <!-- Loader phủ vùng kết quả -->
            <div x-show="loading"
                class="flex justify-center items-center bg-white/60 rounded-xl w-full h-full absolute inset-0 z-10">
                    <div class="w-12 text-blue-600">
                        <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="4" cy="12" r="3">
                                <animate begin="0s" attributeName="r" dur="0.75s" values="3;.2;3" repeatCount="indefinite"></animate>
                            </circle>
                            <circle cx="12" cy="12" r="3">
                                <animate begin="0.15s" attributeName="r" dur="0.75s" values="3;.2;3" repeatCount="indefinite"></animate>
                            </circle>
                            <circle cx="20" cy="12" r="3">
                                <animate begin="0.3s" attributeName="r" dur="0.75s" values="3;.2;3" repeatCount="indefinite"></animate>
                            </circle>
                        </svg>
                    </div>
            </div>

            <!-- Kết quả hoặc lỗi (ẩn khi loading) -->
            <div x-show="!loading">
                <template x-if="error">
                    <div class="bg-red-100 border border-red-300 rounded p-4 mb-4 text-red-800" x-text="error"></div>
                </template>
                <template x-if="result && result.found">
                    <div class="bg-white/80 rounded-xl shadow border p-6 mb-4">
                        <h2 class="font-semibold text-lg mb-2">
                            Kết quả tra cứu <span class="font-bold text-green-600">Thành công</span>
                        </h2>
                        <div class="space-y-2">
                            <div><strong>Mã số thuế:</strong> <span x-text="result.id"></span></div>
                            <div><strong>Tên đầy đủ:</strong> <span x-text="result.name"></span></div>
                            <div><strong>Tên quốc tế:</strong> <span x-text="result.internationalName || 'Không có'"></span></div>
                            <div><strong>Tên viết tắt:</strong> <span x-text="result.shortName || 'Không có'"></span></div>
                            <div><strong>Địa chỉ:</strong> <span x-text="result.address"></span></div>
                        </div>
                    </div>
                </template>
                <template x-if="result && !result.found">
                    <div class="bg-yellow-100 border border-yellow-300 rounded p-4 mb-4 text-yellow-800">
                        Không tìm thấy kết quả cho mã số thuế "<span x-text="taxId"></span>"
                    </div>
                </template>
            </div>
        </div>

        <div class="text-gray-500 mt-8 text-sm">
            *Thông tin được lấy tại VietQR™ của NAPAS.
        </div>
    </div>
</div>

<script>
function taxLookup() {
    return {
        taxId: '',
        loading: false,
        error: '',
        result: null,
        lookup() {
            this.error = '';
            this.result = null;
            if(!this.taxId) return;
            this.loading = true;
            fetch("{{ route('lookup.taxcode.api') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": '{{ csrf_token() }}'
                },
                body: JSON.stringify({tax_id: this.taxId})
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    this.result = {found: true, ...data.data};
                } else {
                    this.result = {found: false};
                    if(data.message) this.error = data.message;
                }
            })
            .catch(() => {
                this.error = "Có lỗi kết nối hoặc hệ thống, vui lòng thử lại.";
            })
            .finally(() => {
                this.loading = false;
            });
        }
    }
}
</script>
@endsection
