<html>

<head>
    <title>Cetification</title>
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
                    <h1>CERTIFICATION</h1>
                </b> </u>

        </div>
        <div class="to">
            <p>To whom it may concern:</p>
        </div>
        <br>
        <div class="message">

            <p>This is to certify that Mr. / Ms. <u>{{$docres->fname}} {{$docres->mname}} {{$docres->lname}}</u>, born on<u> {{$docres->bdate}} </u> is a bonafide
            resident of Barangay 386, Zone-39, District III, Manila, with postal address at <u>{{$docres->address}}</u>, Quiapo. Manila.</p>

            <br>
            <p>He/She has known to me of good moral character and can be trusted. He/She has never been involved in any unlawful activities and a law abiding citizen
                of this Barangay up to the present.
            </p>
      
            <br>
            <p> This certification is being issued upon the request by the above mentioned for whatever legal purposes it may serve. </p>
                    <p><b>AS PER REQUIREMENT AND/OR TO SUPPORT HIS/HER</b></p>
                    <p>() Requirement for Employment            () School Admission / Requirement</p>
                    <p>() Hospital Purposes                     () Processing Calamity</p>
                    <p>() Medical Purposes                      () Loan Purposes</p>
                    <p>() Bank Transaction                      () ID for Senior Citizen</p>
                    <p>() For Travel Abroad                     () Transfer of Residence</p>
                    <p>() Financial Assistance                  () Relocation Purposes</p>
                    <p>() School or Office ID                   () Proof of Indigency</p>
                    <p>() Business Registration                 () Maynilad Requirement</p>
                    <p>() Proof of Residency                    () <u>Other</u></p>
            <br>
            <p><b>IN WITNESS WHEREOF</b> I have hereunto set my hand and affixed the official seal of this office. Done in the City of Manila, this
            <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u>. </p>
            

        </div>
       
        <div class="secretary">
            <br><br><br>
            <p>Attested by:</p>
            <br><br>
            @foreach($user as $users)
            @if ($users->hasrole('secretary'))
            <h3>{{$users->name}}</h3>
            @endif
            @endforeach
            <p>NAME of Secretary</p>
            <h3>Secretary</h3>
            <p style="margin-top: -5px;">Secretary</p>
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


</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>


