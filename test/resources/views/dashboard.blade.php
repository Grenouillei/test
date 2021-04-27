<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cabinet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Login : {{auth()->user()->login}}</p>
                    <p>Name : {{auth()->user()->name}}</p>
                    <p>Birthday : {{auth()->user()->birthday}}</p>
                    <p>Email : {{auth()->user()->email}}</p>
                    <p>Address : {{auth()->user()->address}}</p>
                    <p>City : {{auth()->user()->city}}</p>
                    <p>State : {{auth()->user()->state}}</p>
                    <p>Country : {{auth()->user()->country}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
