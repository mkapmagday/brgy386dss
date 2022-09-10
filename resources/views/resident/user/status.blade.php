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
                        <tr>
                        @if(Auth::id() == $docres->user_id)
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->user_id}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->document_id}}</td>
                          @foreach(App\Models\DocumentList::all() as $document)
                            @if($docres->document_id == $document->id)
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$document->document_name}}</td>
                            @endif
                          @endforeach
                        @endif
                        </tr>
                    </table>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
