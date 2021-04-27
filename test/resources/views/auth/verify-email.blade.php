<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="get" action="{{ route('cabinet') }}">
        @csrf

        <!-- Email Address -->
            <div style="margin-left: 25px;margin-bottom: 15px;">We sent you a confirmation code on your email!</div>
            <div>
                <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" placeholder="Code" required autofocus />
            </div>
            <br>
            <x-button class="ml-40">
                Confirm
            </x-button>
        </form>


    </x-auth-card>

</x-guest-layout>
