<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" style="color: black"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" style="background-color: #FAF0E6; border: none; color: black" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: black"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="background-color: #FAF0E6; border: none; color: black"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" style="color: black"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            style="background-color: #FAF0E6; border: none; color: black"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" style="color: black"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" 
                            style="background-color: #FAF0E6; border: none; color: black"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a  style="color: #BA9755" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Déja un compte ?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Connexion') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
