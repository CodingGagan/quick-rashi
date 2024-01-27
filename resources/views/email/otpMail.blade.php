<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Quick Rashi Verification</title>
    <meta name="description" content="Quick Rashi Verification.">
    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }

        .button.green {
            background-color: #45b664;
            color: #fff;
            margin-top: 24px;
            border-color: #45b664;
        }

        .button {
            border-radius: 6px;
            padding: 0 20px;
            line-height: 44px;
            height: 46px;
            font-weight: 500;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            color: #222;
            background: #ffff;
            border: 1px solid #c4c4c4;
            position: relative;
            display: inline-block;
            font-family: 'Poppins', sans-serif;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #0000;" leftmargin="0">
    <!-- 100% body table -->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <a href="" title="logo" target="_blank">
                                <img src="https://drive.google.com/file/d/1bhJAhNwqhisi0O4QXJCvvZnIlSaF0_e2/view?usp=share_link" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                            Hey, {{ $name }}
                                        </h1>
                                        <hr
                                            style="background-color: #cacaca4a;
    height: 8px;
    border: 0px solid #cacaca;">
                                        <p style="font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;">
                                            Thank you for choosing Quick Rashi. Use the following OTP to complete your Sign
                                            Up procedures. OTP is valid for 2 minutes</p>

                                        <p
                                            style="color:#455056; font-size:18px;line-height:20px; margin:0; font-weight: 500;">
                                            </strong><strong
                                                style="color: #74b869;
    padding: 10px 30px;
    border: 2px dotted #cacaca;
    margin-top: 9px;
                                   display: inline-block;"><span
                                                    style="font-size: 13px; margin: 24px 0 4px 0; font-weight:normal; color:rgba(0,0,0,.64);">OTP:</span>
                                                {{ $otp }}</strong>
                                        </p>


                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p
                                style="font-size:12px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                &copy; Copyright {{ date('Y') }} <a
                                    style="text-decoration: unset;
                                    color: #74b869;"
                                    href="{{ URL::to('/') }}">
                                    Quick Rashi</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
