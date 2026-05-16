<table style="width:100%;margin:0 auto;max-width:768px;padding: 16px;border-color:#dadce0;font-family:Open Sans, Helvetica, Arial;border-style:solid;border-width:thin;border-radius:8px;">
    <tbody>
        <tr>
            <td style="text-align:center;">
                <img src="https://admin-mitrav3.thrubus.co.id/assets/8917e9e1/images/logo.png" style="padding:15px;width: 180px;height: auto;"/>
            </td>
        </tr>

        <tr>
            <td style="font-family:'Open Sans',sans-serif;font-weight:400;line-height:28px;font-size:22px;padding:30px 30px 15px;text-align:center;color:#535353;">
                <strong>Reset Password</strong>
            </td>
        </tr>

        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;color:#535353;">
                <p>Halo <strong>{{ $name }}</strong></p>
                <p> Kami telah menerima permintaan Anda untuk mereset password Anda. Silahkan klik link di bawah ini untuk menyelesaikan reset password</p>
                <p> Link reset password active sampai dengan <strong> {{ $expired }} </strong></p>
            </td>
        </tr>

        <tr>
            <td style="height:15px;"></td>
        </tr>

        <tr>
            <td style="padding:10px;width:300px;display:block;text-decoration:none;border:1px solid #ff6c37;text-align:center;font-weight:bold;font-size:14px;font-family:Open Sans,sans-serif;color:#ffffff;background:#ff6c37;border-radius:5px;line-height:17px;margin:0 auto;"> 
                <a href="{{ $url }}" target="_blank" style="text-decoration:none;color:#fff;font-family:Open Sans,sans-serif;">
                    Reset Password Saya
                </a>
            </td>
        </tr>

        <tr>
            <td style="height:15px;border-bottom:1px solid #dadce0;"></td>
        </tr>

        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;text-align:left;padding:15px;color:#535353;">
                Jika Anda mengalami kesulitan mengklik tombol "Reset Password Saya", salin dan tempel URL di bawah ini ke browser web Anda: {{ $url }}
            </td>
        </tr>

        <tr> 
            <td style="height:15px;"></td> 
        </tr>
    </tbody>
</table>
