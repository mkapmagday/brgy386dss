<html>

<head>
    <title>Barangay Certificate (Social Person stipend)</title>
</head>

<body>



    <div class=header>
        <h3>REPUBLIC OF THE PHILIPPINES<br>
            CITY OF MANILA <br>
            OFFICE OF THE BARANGAY CHAIRMAN</h3>
        <h3>BARANGAY 386 ZONE 39</h3>
        <h3>DISTRICT III</h3>
    </div>


    <br><br>

    <div class="background">
        <div class="certificate">
            <u> <b>
                    <h1>BARANGAY CERTIFICATION</h1>
                </b> </u>

        </div>
        <div class="to">
            <p>To whom it may concern:</p>
        </div>
        <br>
        <div class="message">

            <p>This is to certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> was born on <u>{{$docres->bdate}}</u> is a bonafide
            resident of Barangay 386, Zone-39, District-3, Manila.</p>

            <br>
         
            <p>This further certify that <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> authorized his/her <u>{{$docres->relation}}</u>
        to claim his/her <u>{{$docres->purpose}}</u> on his/her behalf because he/she <u>{{$docres->reason}}</u>.</p>
            <br>
            <p> This certification is given this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u>.</p>

            <br>
            <

        </div>
       
        <div class="representative">
            <br><br><br>
   
            <h3>{{$docres->representative}}</h3>
            <p>NAME of Representative</p>
            <h3>(Signature)</h3>
            <p style="margin-top: -5px;">(Signature)</p>
        </div>

        <div class="beneficiary">
            <br><br><br>
   
            <h3>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</h3>
            <p>NAME of Beneficiary</p>
            <p style="margin-top: -5px;">(Signature and Thumb mark)</p>
        </div>

        <div class="certifiedby">
            <br><br><br>
            <p>Certified by:</p>
            <br><br>
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
            <h3>{{$user->name}}</h3>
            @endif
            @endforeach
            <h3>Barangy Captain</h3>
            <p style="margin-top: -5px;">Punong Barangay</p>
        </div>
    </div>
    <div class="seal">
        <br><br>
        <p>This is not Valid without a seal.</p>
    </div>

</body>

</html>



<style type="text/css">
    .logo {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -700px;

    }

    .logo2 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 700px;
        margin-top: -125px;

    }

    .header {
        margin-top: -120px;
        text-align: center;
    }

    .certificate {
        text-align: center;
        font-size: 40px;
        text-decoration: double;
    }

    .message {
        text-align: justify;
        text-indent: 70px;
        font-size: 25px;

        padding-left: 185px;
        padding-right: 160px;
    }

    .to {
        margin-left: -520px;
        text-align: center;
        font-size: 25px;
    }

    .certifiedby {
        margin-left: 650px;
        text-align: center;
    }

    .background {
        background-image: url('./image/logo2.JPG');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 50% 100%;
    }

    .seal {
        margin-left: -550px;
        text-align: center;
    }

    /*
Pop Up Form
*/

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
        position: absolute;
        z-index: 103;
        padding: 15px 35px;
        border-radius: 5px;
        box-shadow: 0 2px 5px #000;
        margin-left: 300px;
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


