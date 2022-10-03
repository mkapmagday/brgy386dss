<x-app-layout>
    <x-slot name="header">
        <form method="POST" action="{{ route('documentrequest.store')}}">
            <div class="p-6 bg-white border-b border-gray-200">

                <select required name="document_list" id="document_list" class="form-control">
                    @foreach (App\Models\DocumentList::all() as $document)
                    <option value={{$document->id}}>{{$document->document_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class='popup'>
                <div class='cnt223'>
                    @foreach($document as $document)
                    @endforeach
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>


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
                                        <select id="country_code">
                                            <option value="">Select Country</option>
                                            <option value="ph">&#127477;&#127469;</option>
                                        </select>
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
                                    <td><button onclick="return confirm('Do you want to submit request? ')" type="submit" style="float: right;"><img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/58/000000/external-submit-basic-ui-elements-2.3-sbts2018-flat-sbts2018.png" />SUBMIT</button></td>
                                </tr>
                            </div>
                        </div>
                    </div>
        </form>



        </div>
        </div>
    </x-slot>
    <div class="p-6 bg-white border-b border-gray-200">
        <div id="forms">
            <div class="Certification">
                <h1>Certification</h1>
            </div>
            <div class="Authorization">
                <h1>Authorization</h1>

            </div>
            <div class="Indigency">
                <h1>Indigency</h1>

            </div>
            <div class="Jobseeker">
                <h1>Jobseeker</h1>

            </div>
            <div class="Oath">
                <h1>Oath</h1>

            </div>
            <div class="Oneness">
                <h1>Oneness</h1>

            </div>
        </div>
    </div>
</x-app-layout>
<style>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
    function openForm() {

    }


    $("#country_code").change(function() {
        if ($(this).val() == "ph") {
            document.getElementById("pnum").value = "63";
            console.log(document.getElementById("pnum").value)
        }
    });
    $(function() {
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

        //Get the selected value
        console.log($("#document_list").val());
        $('.Certification').show();
        $('.Authorization').hide();
        $('.Indigency').hide();
        $('.Jobseeker').hide();
        $('.Oath').hide();
        $('.Oneness').hide();

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
        if ($(this).val() == "") {}
        console.log($(this).val());
        if ($(this).val() == 1) {
            $('.Certification').show();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();

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

            $('.Certification').hide();
            $('.Authorization').show();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').show();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').show();
            $('.Oath').hide();
            $('.Oneness').hide();
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
            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').show();
            $('.Oneness').hide();

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
            $('.Certification').hide();
            $('.Authorization').hide();
            $('.Indigency').hide();
            $('.Jobseeker').hide();
            $('.Oath').hide();
            $('.Oneness').show();

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