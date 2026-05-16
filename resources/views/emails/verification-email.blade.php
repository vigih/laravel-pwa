<table style="width:100%;margin:0 auto;max-width:768px;padding: 16px; border-color:#dadce0;font-family:Open Sans, Helvetica, Arial;border-style:solid;border-width:thin;border-radius:8px;">
    <tbody>
        <tr>
            <td style="text-align:center;">
                <img src="https://admin-mitrav3.thrubus.co.id/assets/8917e9e1/images/logo.png" style="padding:15px; width: 180px;height: auto;"/>
            </td>
        </tr>

        <tr>
            <td style="font-family:'Open Sans',sans-serif;font-weight:400;line-height:28px;font-size:22px;padding:30px 30px 15px;text-align:center;color:#535353;">
                <strong>Verifikasi Email</strong>
            </td>
        </tr>

        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;color:#535353;">
                Halo <strong>{{ $user->name }}</strong>! <br>
                Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.
            </td>
        </tr>

        <tr> 
            <td style="height:15px;"></td> 
        </tr>

        <tr>
            <td style="padding:10px;width:300px;display:block;text-decoration:none;border:1px solid #ff6c37;text-align:center;font-weight:bold;font-size:14px;font-family:Open Sans,sans-serif;color:#ffffff;background:#ff6c37;border-radius:5px;line-height:17px;margin:0 auto;"> 
                <a href="{{ $url }}" target="_blank" style="text-decoration:none;color:#fff;font-family:Open Sans,sans-serif;">
                    Verifikasi Email
                </a>
            </td>
        </tr>


        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;color:#535353;padding-top:32px;">
                Jika Anda belum membuat akun, tidak perlu melakukan tindakan lebih lanjut.
            </td>
        </tr>

        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;color:#535353;margin-top: 32px;">
                Salam,
            </td>
        </tr>
        
        <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;color:#535353;">
                {{ config('app.name') }}
            </td>
        </tr>

        <tr>
            <td style="height:15px;border-bottom:1px solid #dadce0;"></td>
        </tr>

         <tr>
            <td style="font-family:'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;text-align:left;padding:15px;color:#535353;">
                Jika Anda mengalami kesulitan mengklik tombol "Verifikasi Email", salin dan tempel URL di bawah ini ke browser web Anda: {{ $url }}
            </td>
        </tr>

    </tbody>
</table>
