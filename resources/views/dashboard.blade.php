<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @hasrole('admin')
                    <h1>Total Number Of Users: </h1>
                    @if(App\Models\User::all())
                        {{App\Models\User::count()}}
                    @endif
                    <h1>Total Number Of Document Request: </h1>
                    @if(App\Models\User::all())
                        {{App\Models\DocumentRequest::count()}}
                    @endif
                    @endhasrole
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
