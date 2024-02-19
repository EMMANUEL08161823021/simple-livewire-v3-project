<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{currentTheme: localStorage.getItem('currentTheme') }"
    x-init="$watch('currentTheme', value => localStorage.setItem('currentTheme', value))"
    x-bind:class="currentTheme"
    id="main-html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('scripts')

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="dark:bg-gray-900 min-h-screen bg-gray-100">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="dark:bg-gray-800 bg-white shadow">
                    <div class="max-w-7xl sm:px-6 lg:px-8 px-4 py-6 mx-auto">
                        {{ $header }}
                    </div>




                    <!-- Dark theme toggle -->
                    <x-button
                        class="dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 p-0 ml-4 text-gray-500"
                        x-on:click="currentTheme = currentTheme == 'dark' ? 'light' : 'dark' "
                        x-bind:icon="true ? 'sun' : 'moon'"
                        wire:ignore
                        flat
                        rounded
                        style="padding: 0px"
                    >
                        <x-icon name="sun" class="w-5 h-5"  x-show="currentTheme == 'dark'"/>
                        <x-icon name="moon" class="w-5 h-5"  x-show="currentTheme == 'light'"/>
                    </x-button>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
