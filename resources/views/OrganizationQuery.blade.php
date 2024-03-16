<table style="width:100%;font-family:sans-serif;">
    <tbody>
        <tr>
            <td
                style=" background-image: url('https://oas36ty-production.sgp1.digitaloceanspaces.com/mailtemplatefile/imgpsh_fullsize_anim.jpeg');
            object-fit: cover;;padding:2rem 0;">
                <table
                    style="width:570px;min-height:300px;margin:0 auto;background-color: rgba(237, 242, 247, 0.6);padding:1rem 2rem;border-radius:1rem;backdrop-filter: blur(4px);">
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
                            <p style="font-weight: bold">
                                Dear {{ $name ?? '' }},
                            </p>
                            <p>This code is valid for a single use and should be entered within the next 5 minutes to
                                complete
                                the authentication process. If you did not attempt to log in or request this OTP, please
                                contact
                                our support team immediately at +91 8448454185
                            </p>


                            <p>
                                Your Code is : {{ $code ?? '' }}
                            </p>
                            <p>For your security, please refrain from sharing this OTP with anyone, including our
                                support
                                team. We will never ask you for your OTP.
                            </p>

                            <p>Thank you for your cooperation in maintaining the security of your account.
                            </p>
                            <p style="font-weight: bold">Best regards,
                            </p>
                            <p style="font-weight: bold;margin-block: 0;">oas36ty
                            </p>
                            <p style="font-weight: bold;margin-block: 0;"><a href="mailto:info@oas36ty.com">
                                    info@oas36ty.com </a>
                            </p>
                            {{-- <a href="https://oas36ty.com/"><p style="font-weight: bold;margin-block: 0;">https://oas36ty.com/</p></a> --}}
                            <a href="tel:8448454185">
                                <p style="font-weight: bold;margin-block: 0;">+91 8448454185</p>
                            </a>
                        </td>
                    </tr>
                </table>
                <p style="text-align: center;color:#6c757d">© 2023 Office36ty. All rights reserved.</p>
            </td>
        </tr>
    </tbody>
</table>
