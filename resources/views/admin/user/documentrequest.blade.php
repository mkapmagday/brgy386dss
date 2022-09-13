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
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">USER_ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT_ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">LAST NAME </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">FIRST NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider" >DOCUMENT STATUS</th>
                            <th colspan="4" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider" style="text-align:center ;">ACTIONS
                        </tr>

                        @foreach (App\Models\DocumentRequest::all() as $docres)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docres->user_id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docres->document_id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docres->lname}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docres->fname}}</td>
                            @foreach(App\Models\DocumentList::all() as $document)
                            @if($docres->document_id == $document->id)
                            <td class="px-6 py-4 whitespace-nowrap">{{$document->document_name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docres->status}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('documentrequest.edit',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Edit</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('documentrequest.destroy',$docres->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('pdf.show',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Show</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('pdf.generatePDF',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Download</a>
                            </td>
                            @endif
                            @endforeach
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>