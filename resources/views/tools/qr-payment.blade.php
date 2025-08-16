@extends('layouts.app')
@section('title', 'Tạo mã QR chuyển khoản VietQR')
@section('content')
<div class="max-w-6xl mx-auto px-6 py-4">
    <div class="bg-white/80 backdrop-blur-md p-8 rounded-lg shadow-lg border border-white/20">
        <h1 class="text-2xl font-bold mb-6 text-center">Tạo mã QR chuyển khoản VietQR</h1>
        <div x-data="qrForm()" class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- CỘT TRÁI: Form nhập thông tin --}}
            <form @submit.prevent="submitForm" class="space-y-6" autocomplete="off">
                <div x-data="bankSelect()" class="relative">
                    <label class="block mb-1 font-medium">Ngân hàng</label>
                    <template x-if="selected">
                        <div class="flex items-center gap-3 border rounded px-3 py-2 bg-gray-50 min-h-[50px]">
                            <img :src="selected.logo || 'https://api.vietqr.io/img/logo-bank-default.png'"
                                class="w-7 h-7 object-contain rounded border bg-white">
                            <div>
                                <div class="font-bold text-indigo-700" x-text="selected.shortName || selected.code"></div>
                                <div class="text-xs text-gray-700" x-text="selected.name"></div>
                            </div>
                            <button type="button" @click="reset()" class="ml-auto text-gray-400 hover:text-red-500"
                                title="Chọn lại">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                            <input type="hidden" name="bank_id" :value="selected.code" x-ref="bankCode">
                        </div>
                    </template>
                    <template x-if="!selected">
                        <div>
                            <input type="text" id="bank_input" name="bank_search" x-model="query" @focus="open = true"
                                @input="filter" @keydown.down.prevent="move(1)" @keydown.up.prevent="move(-1)"
                                @keydown.enter.prevent="choose(selectedIndex)"
                                @blur="setTimeout(() => open = false, 100)" placeholder="Nhập tên hoặc mã ngân hàng…"
                                autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                                class="w-full px-4 py-2 border rounded" required>
                            <ul x-show="open && filtered.length > 0"
                                class="absolute left-0 right-0 bg-white border rounded shadow mt-1 z-50"
                                style="min-width:320px;max-height:256px;overflow:auto;">
                                <template x-for="(bank, idx) in filtered" :key="bank.code">
                                    <li :class="{'bg-indigo-100': idx === selectedIndex}"
                                        @mousedown.prevent="choose(idx)" @mouseenter="selectedIndex = idx"
                                        class="px-4 py-2 cursor-pointer flex items-start gap-3 border-b last:border-b-0"
                                        style="min-height:56px">
                                        <img :src="bank.logo || 'https://api.vietqr.io/img/logo-bank-default.png'"
                                            class="w-8 h-8 object-contain rounded border bg-white flex-shrink-0 mt-1"
                                            loading="lazy">
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center gap-2">
                                                <span class="font-bold text-indigo-700" x-text="bank.code"></span>
                                                <span class="font-semibold truncate"
                                                    x-text="bank.shortName || bank.name"></span>
                                            </div>
                                            <div class="text-xs text-gray-500 truncate" x-text="bank.name"></div>
                                        </div>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </template>
                </div>
                <div>
                    <label for="account_no" class="block mb-1 font-medium">Số tài khoản</label>
                    <input type="text" name="account_no" id="account_no" required autocomplete="off" autocorrect="off"
                        autocapitalize="off" spellcheck="false" class="w-full px-4 py-2 border rounded"
                        x-model="account_no">
                </div>
                <div>
                    <label for="amount" class="block mb-1 font-medium">Số tiền (VND, không bắt buộc)</label>
                    <input type="number" name="amount" id="amount" min="0" autocomplete="off" autocorrect="off"
                        autocapitalize="off" spellcheck="false" class="w-full px-4 py-2 border rounded"
                        x-model="amount">
                </div>
                <div>
                    <label for="addInfo" class="block mb-1 font-medium">Nội dung chuyển khoản (không bắt buộc)</label>
                    <input type="text" name="addInfo" id="addInfo" autocomplete="off" autocorrect="off"
                        autocapitalize="off" spellcheck="false" class="w-full px-4 py-2 border rounded"
                        x-model="addInfo">
                </div>
                <div>
                    <label for="accountName" class="block mb-1 font-medium">Tên chủ tài khoản (không bắt buộc)</label>
                    <input type="text" name="accountName" id="accountName" autocomplete="off" autocorrect="off"
                        autocapitalize="off" spellcheck="false" class="w-full px-4 py-2 border rounded"
                        x-model="accountName">
                </div>
                <button type="submit"
                    class="w-full px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                    Tạo mã QR
                </button>
            </form>

            {{-- CỘT PHẢI: QR + loader + link --}}
            <div class="flex flex-col items-center justify-center min-h-[350px] relative">
                <!-- Loader chỉ hiện khi loading -->
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
                <template x-if="qr_url">
                    <div class="w-full flex flex-col items-center">
                        <img :src="qr_url" alt="QR chuyển khoản" class="mx-auto max-w-xs rounded shadow">
                        <!-- <div class="mt-2 text-xs text-gray-500 break-all text-center">
                            Link ảnh QR: <a :href="qr_url" target="_blank" class="underline text-indigo-600"
                                x-text="qr_url"></a>
                        </div> -->
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function bankSelect() {
        return {
            banks: @json($banks),
            query: '',
            filtered: [],
            open: false,
            selectedIndex: 0,
            selected: null,
            filter() {
                const q = this.query.trim().toLowerCase();
                this.filtered = this.banks.filter(b =>
                    (b.code && b.code.toLowerCase().includes(q)) ||
                    (b.shortName && b.shortName.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").includes(q)) ||
                    (b.name && b.name.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").includes(q))
                );
                this.open = this.filtered.length > 0;
                this.selectedIndex = 0;
            },
            move(step) {
                if (!this.open) return;
                this.selectedIndex = (this.selectedIndex + step + this.filtered.length) % this.filtered.length;
            },
            choose(idx) {
                if (!this.filtered.length) return;
                this.selected = this.filtered[idx];
                this.query = '';
                this.open = false;
            },
            reset() {
                this.selected = null;
                this.query = '';
                this.filtered = [];
                this.open = false;
            }
        }
    }

    function qrForm() {
        return {
            account_no: '',
            amount: '',
            addInfo: '',
            accountName: '',
            qr_url: '',
            loading: false,
            getSelectedBankCode() {
                const bankDiv = this.$el.querySelector('[x-data^="bankSelect"]');
                if (!bankDiv) return '';
                const bankInput = bankDiv.querySelector('input[name="bank_id"]');
                return bankInput ? bankInput.value : '';
            },
            submitForm() {
                this.loading = true;
                this.qr_url = '';
                let bankCode = this.getSelectedBankCode();
                if (!bankCode) {
                    alert('Vui lòng chọn ngân hàng!');
                    this.loading = false;
                    return;
                }
                fetch("{{ route('qr-payment.create') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        bank_id: bankCode,
                        account_no: this.account_no,
                        amount: this.amount,
                        addInfo: this.addInfo,
                        accountName: this.accountName,
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        this.qr_url = data.url;
                    })
                    .catch(() => {
                        alert('Có lỗi xảy ra, vui lòng thử lại!');
                    })
                    .finally(() => {
                        this.loading = false;
                    });
            }
        }
    }
</script>
@endsection
