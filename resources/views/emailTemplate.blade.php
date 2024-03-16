<table style="width:100%;font-family:sans-serif;">
    <tbody>
        <tr>
            <td
                style=" background-image: url('https://oas36ty-production.sgp1.digitaloceanspaces.com/mailtemplatefile/imgpsh_fullsize_anim.jpeg');
            object-fit: cover;;padding:2rem 0;">
                <table
                    style="width:570px;min-height:400px;margin:0 auto;background-color: rgba(237, 242, 247, 0.6);padding:1rem 2rem;border-radius:.4rem;backdrop-filter: blur(4px);">
                    <tr>
                        <td>
                            <a href="https://oas36ty.com/">

                                <img src="https://oas36ty.com/07/logo-1.png" alt=""
                                style="width:175px;margin-left:auto;display:block;">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="font-weight: bold;color: #718096;line-height:1.3;">
                                Hi, {{ $name ?? '' }}
                            </p>
                            </p>
                            <p style="font-weight: bold;margin-block: 0;color: #718096;line-height:1.3;">Email-
                                {{ $email ?? '' }}
                            </p>
                            <p style="font-weight: bold;margin-block: 0;color: #718096;line-height:1.3;">Subject-<span
                                    style="font-weight:normal;"> {{ $message ?? '' }}</span>
                            </p>
                            <p style="font-weight: bold;margin-block: 0;color: #718096;line-height:1.3;">Thank you</p>
                        </td>
                    </tr>
                </table>
                <p style="text-align: center;color:#6c757d">© 2023 Office36ty. All rights reserved.</p>
            </td>
        </tr>
    </tbody>
</table>
