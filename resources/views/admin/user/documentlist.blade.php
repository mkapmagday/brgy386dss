<x-app-layout>
<head>
</head>
<!-- Latest compiled and minified CSS -->
<x-slot name="header">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <form method="POST" action="{{ route('documentlist.store') }}">

        @csrf

        <!-- Name -->
        <div style="padding-top: 0px;">
            <table>
                <tr>
                    <td><x-label for="document_name" :value="__('Name')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="document_name" type="text" name="document_name"/></td>
                </tr>
                
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><button onclick="return confirm('Do you want to Create? ')" type="submit" style="float: right;">Create</button></td>
                </tr>

            </table>
            
   
        </div>
    </form>
                    <br/><br/>


                    <table class="min-w-full divide-y divide-gray-200 " align="center">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Name</th>
                            <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                        </tr>

                            @foreach (App\Models\DocumentList::all() as $document)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$document->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$document->document_name}}</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="{{ route('documentlist.edit',$document->id) }}" class="m-2 p-2 bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('documentlist.destroy',$document->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    <button onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                
                            </form>
                            @endforeach                         
                        </tbody>
                    </table>
                    </div>
                </div>
         
    
</x-slot>

    
</x-app-layout>

