<x-app-layout>
    <x-slot name=header>
    <h1>Username: {{$user->name}}</h1>
    <h1>User Email: {{$user->email}}</h1>
    @if ($user->roles)
        @foreach ($user->roles as $user_role)
        <form class="px-4 py-2 bg-red-500  rounded-md" method="POST"
                                    action="{{ route('user.removeRole', [$user->id, $user_role->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">{{ $user_role->name }}</button>
        </form>
        @endforeach
    @endif



        <form method="POST" action="{{ route('user.assignRole', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select id="role" name="role" autocomplete="role-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($role as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign
                        </button>
                    </div>
                    </form>
    </x-slot>
</x-app-layout>
      
