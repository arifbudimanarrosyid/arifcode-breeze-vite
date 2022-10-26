<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
            {{ __('Post Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-slate-700 sm:rounded-lg">
                <div
                    class="p-6 bg-white border-b border-gray-200 dark:bg-slate-700 dark:text-white dark:border-slate-600">
                    Welcome to the Dashboard Posts page!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
