<x-app-layout>
    <x-slot name=header>
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <a href ="{{ route('user.index') }}"> <img height="20px" width="20px" src="https://img.icons8.com/color/48/000000/add--v1.png" /> Create User:</a>

                <div class="popup">
                    <div class="cnt223">
                        <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>

                        <p>Username: {{$user->name}}</p>
                        <p>{{$user->email}}</p>

                        @if ($user->roles)
                        @foreach ($user->roles as $user_role)
                        <form class="px-4 py-2 bg-red-500  rounded-md" method="POST" action="{{ route('user.removeRole', [$user->id, $user_role->id]) }}" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('delete')
                            <h1> <button type="submit" class="btn btn-danger">{{ $user_role->name }}</button></h1>

                        </form>
                        @endforeach
                        @endif



                        <form method="POST" action="{{ route('user.assignRole', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select id="role" name="role" autocomplete="role-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($role as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" style="margin-left:450px" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>

                            </div>
                            @error('role')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>
                </div>
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

                        @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                            <td class="px-6 py-4 text-sm">
                                <form action="{{ route('user.show',$user->id) }}">
                                    <button class="btn btn-primary" type="submit">Roles</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <form action="{{ route('user.edit',$user->id) }}">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                </form>
                            </td>   
                            </form>
                        </tr>
                        @endforeach
                        {{ $users->links() }}

                    </tbody>
                </table>
            </div>
        </div>

    </x-slot>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .delete {}

    .close {
        float: right;
        width: 20px;
        height: 20px;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        filter: alpha(opacity=70);
        -moz-opacity: 0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        z-index: 100;
        display: none;
    }

    .popup {
        padding-top: 10px;
        width: 100%;
        display: none;
        position: absolute;
        z-index: 101;
    }

    .cnt223 {
        min-width: 600px;
        width: 600px;
        min-height: 150px;
        margin: 100px auto;
        background: #f3f3f3;
        position: relative;
        z-index: 103;
        padding: 15px 35px;
        border-radius: 5px;
        box-shadow: 0 2px 5px #000;
    }

    .cnt223 p {
        clear: both;
        color: #555555;
        /* text-align: justify; */
        font-size: 20px;
        font-family: sans-serif;
    }

    .cnt223 p a {
        color: #d91900;
        font-weight: bold;
    }

    .cnt223 .x {
        float: right;
        height: 35px;
        left: 22px;
        position: relative;
        top: -25px;
        width: 34px;
    }

    .cnt223 .x:hover {
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
    $(function() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>