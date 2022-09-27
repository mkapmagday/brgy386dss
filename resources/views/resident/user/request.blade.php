<x-app-layout>
    <x-slot name="header">
        @foreach($document as $document)
        @endforeach
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <form method="POST" action="{{ route('documentrequest.store')}}">
                    <select required name="document_list" id="document_list" class="form-control">
                        @foreach (App\Models\DocumentList::all() as $document)
                        <option value={{$document->id}}>{{$document->document_name}}</option>
                        @endforeach
                    </select>
                    @csrf
                    <div style="padding-top: 0px;">
                        <tr>
                            <td>
                                <x-label for="lname" :value="__('Last Name')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="lname" type="text" name="lname" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="fname" :value="__('First Name')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="fname" type="text" name="fname" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="mname" :value="__('Middle Name')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="mname" type="text" name="mname" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <x-label for="pnum" :value="__('Phone Number')" />
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <x-input id="pnum" type="text" name="pnum" />
                            </td>
                        </tr>
                        <div id="bdate">
                            <tr>
                                <td>
                                    <x-label for="bdate" :value="__('Date of Birth')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="bdate" type="date" name="bdate" />
                                </td>
                            </tr>
                        </div>
                        <div id="years">
                            <tr>
                                <td>
                                    <x-label for="years" :value="__('Years')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="years" type="text" name="years" />
                                </td>
                            </tr>
                        </div>
                        <div id="months">
                            <tr>
                                <td>
                                    <x-label for="months" :value="__('Months')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="months" type="months" name="months" />
                                </td>
                            </tr>
                        </div>
                        <div id="municipality">
                            <tr>
                                <td>
                                    <x-label for="municipality" :value="__('Municipality')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="municipality" type="text" name="municipality" />
                                </td>
                            </tr>
                        </div>
                        <div id="age">
                            <tr>
                                <td>
                                    <x-label for="age" :value="__('age')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="age" type="text" name="age" />
                                </td>
                            </tr>
                        </div>
                        <div id="representative">
                            <tr>
                                <td>
                                    <x-label for="representative" :value="__('Representative')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="representative" type="text" name="representative" />
                                </td>
                            </tr>
                        </div>
                        <div id="address">
                            <tr>
                                <td>
                                    <x-label for="address" :value="__('Address')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="address" type="text" name="address" />
                                </td>
                            </tr>
                        </div>
                        <div id="purpose">
                            <tr>
                                <td>
                                    <x-label for="purpose" :value="__('Purpose')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="purpose" type="text" name="purpose" />
                                </td>
                            </tr>
                        </div>
                        <div id="reason">
                            <tr>
                                <td>
                                    <x-label for="reason" :value="__('Reason')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="reason" type="text" name="reason" />
                                </td>
                            </tr>
                        </div>
                        <div id="relationship">
                            <tr>
                                <td>
                                    <x-label for="relation" :value="__('Relation')" />
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <x-input id="relation" type="text" name="relation" />
                                </td>
                            </tr>
                        </div>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><button onclick="return confirm('Do you want to submit request? ')" type="submit" style="float: right;">Create</button></td>
                        </tr>
                    </div>
                </form>

    </x-slot>
</x-app-layout>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
    $(function() {
        //Get the selected value
        console.log($("#document_list").val());
        if ($("#document_list").val() == 1) {
            $('#bdate').show();
            $('#address').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();
            $('#representative').hide();
            $('#purpose').hide();
            $('#reason').hide();
            $('#relationship').hide();
        }
    });

    $("#document_list").change(function() {
        if ($(this).val() == "") {}
        console.log($(this).val());
        if ($(this).val() == 1) {
            $('#bdate').show();
            $('#address').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();
            $('#representative').hide();
            $('#purpose').hide();
            $('#reason').hide();
            $('#relationship').hide();

        } else {

        }

        if ($(this).val() == 2) {
            $('#bdate').show();
            $('#relationship').show();
            $('#representative').show();
            $('#reason').show();

            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();
            $('#vdate').hide();
            $('#age').hide();

            $('#purpose').hide();
            $('#address').hide();




        } else {

        }

        if ($(this).val() == 3) {
            $('#address').show();
            $('#years').hide();
            $('#months').hide();
            $('#municipality').hide();

            $('#purpose').show();

            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();
            $('#age').hide();

        } else {

        }

        if ($(this).val() == 4) {
            $('#address').show();
            $('#age').hide();
            $('#municipality').show();


            $('#years').show();
            $('#months').show();

            $('#purpose').hide();

            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();


        } else {

        }

        if ($(this).val() == 5) {
            $('#purpose').hide();

            $('#age').show();
            $('#address').show();
            $('#municipality').show();

            $('#years').hide();
            $('#months').hide();


            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();


        } else {

        }

        if ($(this).val() == 6) {
            $('#purpose').show();

            $('#age').hide();
            $('#address').hide();
            $('#municipality').hide();

            $('#years').hide();
            $('#months').hide();


            $('#bdate').hide();
            $('#relationship').hide();
            $('#representative').hide();
            $('#reason').hide();

            $('#vdate').hide();
        } else {


        }
    });
</script>