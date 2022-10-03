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
                <table>
                    @foreach (App\Models\DocumentRequest::all() as $docres)
                        <tr>
                        @if(Auth::id() == $docres->user_id)
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->user_id}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->document_id}}</td>
                          @foreach(App\Models\DocumentList::all() as $document)
                            @if($docres->document_id == $document->id)
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$document->document_name}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->status}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('pdf.show',$docres->id) }}">
                                    <button type="submit" class="btn btn-success">Show</button>
                                </form>
                            </td>
                            @endif
                          @endforeach
                        @endif
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
