<x-filament::layouts.base>
    <x-filament::card>
        <form method="POST" action="{{ route('admin.change-password.update') }}">
            @csrf
            <x-filament::input
                name="new_password"
                type="password"
                label="Mật khẩu mới"
                required
                class="mb-4"
            />
            <x-filament::input
                name="new_password_confirmation"
                type="password"
                label="Xác nhận mật khẩu"
                required
                class="mb-4"
            />
            <x-filament::button type="submit">
                Đổi mật khẩu
            </x-filament::button>
        </form>
    </x-filament::card>
</x-filament::layouts.base>
