<html>

<head>
    <title>Barangay Certification (First Time Jobseeker)</title>
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
                    <p>( FIRST TIME JOB SEEKER ASSISTANCE ACT-RA 11261 )</p>
                </b> </u>

        </div>
     
        <br>
        <div class="message">

            <p>This is to certify that Mr./Ms. <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u> a resident of <u>{{$docres->address}}</u> for <u>{{$docres->years}}</u>
            years and <u>{{$docres->months}}</u> months, is a qualified availee of <b>R.A. 11261 or the First Time Job Seeker Act of 2019.</b>
            resident of Barangay 386, Zone-39, District-3, Manila.</p>

            <br>
            <p>I further certify that the holder/bearer was informed his/her rights, including the duties and responsibilities according to 
                RA 11261 through the <b>Oath of Undertaking</b> he/she has signed and executed in the presence of Barangay Official/s.
            </p>
        <br>
        <br>
            <p>Signed this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u> in the City/Municipality of <u>{{$docres->municipality}}</u>.</p>

            <p>This certification is valid only until <u>_____________________</u> One (1) year from the issuance.</p>
            <br>
         
            <br>
            <

        </div>
       
        <div class="secretary">
            <br><br><br>
   
            <h3>_________________</h3>
            <p>Punong Barnagay / Authorized Barangay Official and Position</p>
            <h3>(Signature)</h3>
            <p>_____________________</p>
            <p>Date</p>
        </div>

 
        <div class="certifiedby">
            <br><br><br>
            <p>Witnessed by:</p>
            <br><br>
            @foreach($user as $user)
            @if ($user->hasrole('chairman'))
            <h3>{{$user->name}}</h3>
            @endif
            @endforeach
            <p>Punong Barnagay / Authorized Barangay Official and Position</p>
            <p>_____________________</p>
            <p>Date</p>
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

  
</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


