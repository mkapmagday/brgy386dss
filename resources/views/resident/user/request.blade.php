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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><button onclick="return confirm('Do you want to submit request? ')" type="submit" style="float: right;">Create</button></td>
                </tr>
            </table>
        </div>
    </form>
    </x-slot>
</x-app-layout>
      
