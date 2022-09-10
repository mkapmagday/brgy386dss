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
                    @foreach (App\Models\DocumentRequest::all() as $docres)
                    <table>
                        @if(Auth::id() == $docres->user_id)
                            <tr>{{$docres->user_id}}</tr>
                            <tr>{{$docres->document_id}}</tr>
                          @foreach(App\Models\DocumentList::all() as $document)
                            <tr>{{$document->document_name}}</tr>
                          @endforeach
                        @endif
                    </table>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
