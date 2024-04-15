<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biz ') }}
        </h2>
    </x-slot>

    <div class="">

        <!-------------------- Create the Business landing page right here ------------------->
        <x-sections.hero />
        <x-sections.menu />
        <x-sections.tags />

    </div>
</x-app-layout>
