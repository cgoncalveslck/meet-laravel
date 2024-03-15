<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    {{ __('iCal') }}
                </h2>

                <form method="POST" action="{{ route('calendar.store') }}">
                    @csrf
                    <div class="p-6">
                        <div>
                            <x-label for="url" value="{{ __('URL') }}" />
                            <x-input id="url" class="block mt-1 w-full" type="text" name="url" required
                                autofocus />
                        </div>
                        <div class="flex items">
                            <x-button class="mt-4">
                                {{ __('Add') }}
                            </x-button>
                        </div>


                    </div>
            </div>
        </div>
</x-app-layout>
