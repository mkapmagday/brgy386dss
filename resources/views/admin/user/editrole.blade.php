<x-app-layout>
<head>
</head>
<!-- Latest compiled and minified CSS -->
    <x-slot name="header">
    @isset($message)
    <div class="alert alert-success">
    <strong>{{$message}}</strong>
    </div>
    @endif
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <form method="POST" action="{{ route('role.update',  $role->id) }}">
            @csrf
            @method('put')
            <!-- Name -->
            <div style="padding-top: 0px;">
                <table>
                    <tr>
                        <td><x-label for="name" :value="__('Role')" /></td>
                        <td>&nbsp;</td>
                        <td><x-input id="name" type="text" name="name" :value="$role->name" required autofocus /></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><button onclick="return confirm('Do you want to Update? ')" type="submit" style="float: right;">Update</button></td>
                    </tr>

                </table>
                

            </div>
        </form>
                
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        
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
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$role->id}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$role->name}}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <a href="{{ route('role.edit',$role->id) }}" class="m-2 p-2 bg-blue-400 rounded">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('role.destroy',$role->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <button onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                    </form>
                                    </td>
                                </form>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
             
        
    </x-slot>

    
</x-app-layout>

