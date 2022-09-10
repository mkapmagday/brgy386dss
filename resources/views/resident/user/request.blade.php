<x-app-layout>
    <x-slot name="header">
@foreach($document as $document)
@endforeach
<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <form method="POST" action="{{ route('documentrequest.store')}}">
                        @csrf
            <div style="padding-top: 0px;">
            <table>
            <select required name="document_list" id="document_list" class="form-control">
                @foreach (App\Models\DocumentList::all() as $document)
                            <option value="{{$document->id}}">{{$document->document_name}}</option>
                @endforeach
            </select>
            <tr>
                    <td><x-label for="lname" :value="__('Last Name')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="lname" type="text" name="lname"/></td>
            </tr>
            <tr>
                    <td><x-label for="fname" :value="__('First Name')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="fname" type="text" name="fname" /></td>
            </tr>
            <tr>
                    <td><x-label for="mname" :value="__('Middle Initial')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="mname" type="text" name="mname" /></td>
            </tr>
            <tr>
                    <td><x-label for="address" :value="__('Address')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="address" type="text" name="address" /></td>
            </tr>
            <tr>
                    <td><x-label for="purpose" :value="__('Purpose')" /></td>
                    <td>&nbsp;</td>
                    <td><x-input id="purpose" type="text" name="purpose" /></td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><button onclick="return confirm('Do you want to submit request? ')" type="submit" style="float: right;">Create</button></td>
                </tr>
            </table>
        </div>
    </form>
    </x-slot>
</x-app-layout>
      
