<html>

<head>
    <title>Oath of Undertaking</title>
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
                    <h1>OATH OF UNDERTAKING</h1>
                    <p>Republic Act 11261 - First Time Jobseekers Assistance Act</p>
                </b> </u>
        </div>
        <br>
        <div class="message">

            <p>I <u>name </u> , <u>age </u> years of age, a resident of
            <u>address </u> (complete address) for ___________ (years/months)availing the benefits of <b>Republic Act 11261,</b> other wise known as
        the <b>First Time Jeobsekers Act of 2019,</b> do hereby declare agree and undertaking to abide and be bound by the following:</p>
                <p>1. That this is the first time that I will actively look for a job therefor requesting that a barangay Certificate be issued in my
                    favor to avail the benefits of the law.</p>
                <p>2. That I am aware that the benefits and privilages under the said law shall be valid onlu for (one) 1 year from the date that the
                    barangay certificate.
                </p>
                <p>3. That I can avail benefists of the law only once.</p>
                <p>4. That I can understand that the personal information shall be included in the Roster List of the First Time Jobseekers and will not be
                    used to any unlawful purpose.
                </p>
                <p>5. That I will inform the barangay once I get employeed.</p>
                <p>6. That I am not beneficiary of the Job Start Program under RA 10869 and other laws that give similar exemptions for the 
                    documents or transaction exempted under RA 11261.
                </p>
                <p>7. That if issued the requesteed certification, I will not use the same in any fraud neither falsify nor help and/or assist in the 
                    fabrication of the said certification.
                </p>
                <p>8. That this undertaking is made soley fo the purpose of obtaining Barangay Certification conisist with the objective of RA 
                    11261 and not for any other purpose.
                </p>
                <p>9. That I consent to the use of my personal information pursuant to the Data Privacy Act and other applicable laws, rules, and 
                    regulations.
                </p>
            <br>
     
            <br>
            <p> Signed this <u>{{$date->day}} </u>day of <u>{{$month}} {{$date->year}} </u> in the City/Municipality of 
                <u>_______________</u>.</p>

            <br>
 

        </div>
       
        <div class="jobseeker">
            <br><br><br>
            <p>Signed by:</p>
            <br><br>
            <h3>_________________</h3>
            <p>NAME </p>
            <h3>First Time Jobseeker Name</h3>
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


