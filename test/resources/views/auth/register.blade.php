<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-2">
                <x-label for="login" :value="__('Login')" style="margin-left: 15px;"/>

                <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')"  required autofocus />
            </div>

            <div class="mt-2">
                <x-label for="name" :value="__('Name')" style="margin-left: 15px;"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-2">
                <x-label for="birthday" :value="__('Birthday')" style="margin-left: 15px;"/>

                <x-input id="birthday" class="block mt-1 w-full" type="text" name="birthday" :value="old('birthday')" required autofocus />
            </div>
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" style="margin-left: 15px;"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-2">
                <x-label for="address" :value="__('Address')" style="margin-left: 15px;"/>

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>
            <div class="mt-2">
                <x-label for="city" :value="__('City')" style="margin-left: 15px;"/>

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
            </div>
            <div class="mt-2">
                <x-label for="state" :value="__('State')" style="margin-left: 15px;"/>

                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus />
            </div>
            <div class="mt-2">
                <x-label for="country" :value="__('Country')" style="margin-left: 15px;"/>

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Password')" style="margin-left: 15px;"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" style="margin-left: 15px;"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
