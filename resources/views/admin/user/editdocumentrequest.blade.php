<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{ route('documentrequest.update', $docres->id)}}">
                @csrf
                @method('get')
                <div style="padding-top: 0px;">
                    <table>
                        <tr>
                            <td>
                                <x-label for="lname" :value="__('Last Name')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="lname" type="text" name="lname" :value="$docres->lname" required autofocus />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="fname" :value="__('First Name')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="fname" type="text" name="fname" :value="$docres->fname" required autofocus />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="mname" :value="__('Middle Initial')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="mname" type="text" name="mname" :value="$docres->mname" required autofocus />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="address" :value="__('Address')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="address" type="text" name="address" :value="$docres->address" required autofocus />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="purpose" :value="__('Purpose')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="purpose" type="text" name="purpose" :value="$docres->purpose" required autofocus />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="status" :value="__('Status')" />
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                            <select required name="status" id="status" class="form-control">
                            @foreach(\App\Enums\DocumentRequestStatus::cases() as $status)
                                <option value="{{ $status->value }}">{{ $status->name }}</option>
                            @endforeach
                            </select>
                            </td>
                       
                        </tr>
                        

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><button onclick="return confirm('Do you want to update the request? ')" type="submit" style="float: right;">Update</button></td>
                        </tr>

                    </table>
                </div>
            </form>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <tr>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">USER_ID</th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT_ID</th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">LAST NAME </th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">FIRST NAME</th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT NAME</th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT STATUS</th>
                            <th scope="row" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider" style="column-span: 3;">Actions
                        </tr>
                    @foreach (App\Models\DocumentRequest::all() as $docres)
                        <tr>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->user_id}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->document_id}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->lname}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->fname}}</td>


                            @foreach(App\Models\DocumentList::all() as $document)
                            @if($docres->document_id == $document->id)
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$document->document_name}}</td>
                            <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">{{$docres->status}}</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="{{ route('documentrequest.edit',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Edit</a>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <form action="{{ route('documentrequest.destroy',$docres->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('pdf.generatePDF',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Show</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('pdf.generatePDF',$docres->id) }}" class="m-2 p-2 bg-blue-400 rounded">Download</a>
                            </td>
                            @endif
                            @endforeach
                    @endforeach
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>