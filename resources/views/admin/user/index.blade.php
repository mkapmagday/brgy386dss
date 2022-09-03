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
                        <form method="POST" action="{{ route('user.store') }}">

            @csrf

            <!-- Name -->
            <div style="padding-top: 0px;">
                <table>
                    <tr>
                        <td><x-label for="name" :value="__('Name')" /></td>
                        <td>&nbsp;</td>
                        <td><x-input id="name" type="text" name="name" :value="old('name')" required autofocus /></td>
                    </tr>
                    <tr>
                        <td><x-label for="email" :value="__('Email')" /></td>
                        <td>&nbsp;</td>
                        <td><x-input id="email" type="email" name="email" :value="old('email')" required /></td>
                    </tr>
                    <tr>
                        <td><x-label for="password" :value="__('Password')" /></td>
                        <td>&nbsp;</td>
                        <td><x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" /></td>
                    </tr>
                    <tr>
                        <td><x-label for="password_confirmation" :value="__('Confirm Password')" /></td>
                        <td>&nbsp;</td>
                        <td><x-input id="password_confirmation" 
                                type="password"
                                name="password_confirmation" required /></td>
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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                                <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                            </tr>

                                @foreach (App\Models\User::all() as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <a href="{{ route('user.edit',$user->id) }}" class="m-2 p-2 bg-blue-400 rounded">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <button onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </form>
                                </tr>
                                @endforeach                         
                            </tbody>
                        </table>
                        </div>
                    </div>
             
        
    </x-slot>

    
</x-app-layout>

