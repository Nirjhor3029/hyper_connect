<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send OTP</title>
</head>

<body>
    {{-- <h1>Send OTP</h1>
    <p>Your OTP is: {{ $mailData['otp'] }}</p> --}}

    <div style="background-color: #F2F6F8; padding: 30px; width:  600px; margin:  0 auto;">
        <table style=" width: 100%; border: 1px solid; padding: 30px;">
            <tbody>

                <tr bgcolor="#4D4D92">
                    <td height="20px"></td>
                </tr>

                <tr>
                    <td style="text-align: center; padding: 40px 0px;">
                        <a href="https://sms.rpu.solutions" target="_blank">
                            <img src="https://sms.rpu.solutions/assets/images/hyper_connect_logo.png"
                                style="width: 200px; height: auto; object-fit: contain;" alt="Hyper Connect Logo">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="text-align:center; padding: 0px 60px;">
                        <h3> Your one time password (OTP) </h3>
                    </td>
                </tr>

                <tr>
                    <td style="text-align:center;">
                        <p
                            style="
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 10px;
    background: #c7c7c7;
    margin: 0 auto;
    border-radius: 10px;
    text-align: center;
    padding: 10px 0px;
    width: 150px;
">
                            {{ $mailData['otp'] }}
                        </p>
                    </td>
                </tr>

                <tr>
                    <td
                        style="text-align:justify; font-size:16px; line-height: 2; letter-spacing: 0.5px; padding: 40px 60px;">
                        This OTP is valid for 5 mins. Never share this OTP with anyone else.<br> <b>Security Tip</b> -
                        If you did not request this OTP, or if you feel someone else may be trying to access your
                        account, please change your password immediately & Contact us. Do not use your OTP anywhere
                        else.
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
