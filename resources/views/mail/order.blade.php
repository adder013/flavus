<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#eeeeee" style="
        font-family:Helvetica,Arial,sans-serif;
        letter-spacing:normal;
        text-indent:0;
        text-transform:none;
        word-spacing:0;
        background-color:rgb(232,232,232);
        border-collapse:collapse
    ">
    <tr>
        <td style="padding: 20px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="
                width: 600px !important;
                background-color:#fff;
                border:1px solid #cccccc;
                border-radius: 4px;
                margin:auto;
                overflow: hidden;
                ">

                <!-- HEADER -->
                <tr>
                    <td width="50" style="width:50px !important;"></td>
                    <td height="70" align="center" valign="middle">
                        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100% !important;">
                            <tr>
                                <td>
                                    <font style="font-weight: bold; font-size: 20px; margin: 0 12px 0 0;"><b>Заказ № {{ $invoice_number }}</b></font>
                                    <font style="color: #888; margin: 0 0 0 20px;">{{ $time }}</font>
                                </td>
                                <td style="text-align: right;">
                                    <font style="color:#009900;font-weight:bold;">Новый заказ</font>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="50" style="width:50px !important;"></td>
                </tr>

                <!-- STATUS -->
                <tr>
                    <td></td>
                    <td>
                        <table cellspacing="0" border="0" cellpadding="0" width="100%" style="border-collapse:collapse; text-align: center;">
                            <tr>
                                <td><img src="{{ url('mstile-70x70.png') }}" alt="Уралэнерготел"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @if (1 == 2)
                <tr>
                    <td></td>
                    <td>
                        <table cellspacing="0" border="0" cellpadding="0" width="100%" style="border-collapse:collapse">
                            <tr>
                                <td>
                                    <p style="
                                        color:rgb(48,48,48);
                                        font-style:normal;
                                        font-variant:normal;
                                        font-weight:normal;
                                        font-size:14px;
                                        line-height:16px;
                                        font-family:Helvetica,Arial,sans-serif;
                                        margin: 20px 0 0;
                                        text-align:center;
                                        ">Спасибо за заказ! Счет будет отправлен в ближайшее время.</p>
                                    <p align="center" style="margin: 20px 0;">
                                        <a href="http://sergeevpasha.ru" style="
                                        text-decoration:none;
                                        font-style:normal;
                                        font-variant:normal;
                                        font-weight:normal;font-size:17px;line-height:40px;font-family:Helvetica,Arial,sans-serif;color:rgb(48,48,48);display:block;
                                        width:225px;
                                        background: #fcd630;
                                        border-radius: 4px;
                                        " target="_blank">Статус заказа</a>
                                    </p>
                                    <p style="
                                        color:rgb(48,48,48);
                                        font-style:normal;
                                        font-variant:normal;
                                        font-weight:normal;
                                        font-size:14px;
                                        line-height:16px;
                                        font-family:Helvetica,Arial,sans-serif;
                                        margin: 20px 0;
                                        text-align:center;
                                        text-transform: uppercase;
                                        ">
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td></td>
                </tr>
                @endif
                <!-- LIST -->
                <tr>
                    <td bgcolor="#ffffff">
                    </td>
                    <td bgcolor="#ffffff" style="">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                            @foreach ($products as $product)
                                <tr>
                                    <td width="40" style="padding: 8px 4px 8px 0; border: solid `#dddddd`; border-width: 1px 0  0;">
                                        @if(!empty($product->image))
                                        <img src="{{ URL::to($product->image)}}" alt="{{ $product->product_name }}" width="48" height="48" style="vertical-align: middle;">
                                        @else
                                        <img src="{{ url('/img/placeholder.jpg') }}" alt="{{ $product->product_name }}" width="48" height="48" style="vertical-align: middle;">
                                        @endif
                                    </td>
                                    <td style="padding: 8px 0 8px 4px; border: solid `#dddddd`; border-width: 1px 0  0;">
                                        <p style="
                                            font-style:normal;
                                            font-variant:normal;
                                            font-weight:normal;
                                            font-size: 14px;
                                            line-height:16px;
                                            font-family:Helvetica,Arial,sans-serif;
                                            ">
                                            <a style="text-decoration: none !important;" href="{{ URL::to('/catalog')}}">
                                                <font style="text-decoration: none !important; color:black;">{{ $product->product_name }}</font><br>
                                                <font style="color: #aaaaaa; font-size: 0.8em;">{{ $product->sku_code }}</font>
                                            </a>
                                        </p>
                                    </td>
                                    <td style="padding: 8px 4px 8px 4px; white-space: nowrap; text-align: right; border: solid `#dddddd`; border-width: 1px 0  0;">
                                        <font style="color:#aaa;">{{ number_format($product->price , 2, ',', ' ') }} руб.&nbsp;&times;</font>&nbsp;{{ $product->amount }}
                                    </td>
                                    <td style="padding: 8px 0 8px 8px; white-space: nowrap; text-align: right; border: solid `#dddddd`; border-width: 1px 0  0;">
                                        <font style="font-weight: bold;">{{ number_format($product->price*$product->amount , 2, ',', ' ') }}  руб.</font>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                    <td bgcolor="#ffffff"></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding: 20px 0; border-bottom: 1px solid #dddddd">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; text-align: right;">
                            <tr>
                                <td style="padding: 8px 0;">
                                    <h3 style="font-size:18px;margin:0;">Итого</h3>
                                </td>
                                <td style="white-space: nowrap; width: 20%; padding: 8px 0 8px 8px;">
                                    <h3 style="font-size:18px;margin:0;">{{ number_format($total, 2, ',', ' ') }} руб</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td></td>
                </tr>

                <!-- DETAILS -->
                <tr>
                    <td style="border: 0;">
                    </td>
                    <td style="border: 0; padding: 16px 0 40px 0;">
                        @if ($registration_token)
                        <p style="margin: 10px 0 0;">
                            <a href="{{ URL::to('/profile/register?reg_token='.$registration_token)}}">Зарегистрируйтесь, чтобы отслеживать все ваши заказы</a>
                        </p>
                        @else
                            <p style="margin: 10px 0 0;">
                                <a href="{{ URL::to('/profile') }}">Войдите, чтобы посмотреть ваш заказ</a>                                
                            </p>
                        @endif
                        @if ($name)
                        <p style="margin: 10px 0 0;">
                            Имя: {{ $name }}
                        </p>
                        @endif
                        <p style="margin: 10px 0 0;">
                            E-mail: {{ $mail }}
                        </p>
                        <p style="margin: 10px 0 0;">
                            Контактный телефон: {{ $tel }}
                        </p>
                        <p style="margin: 10px 0 0;">
                            {{ $delivery }}
                        </p>
                        @if (!empty($address))
                        <p style="margin: 10px 0 20px 0;">
                            {{ $address }}
                        </p>
                        @endif
                        @if (!empty($city))
                        <p style="margin: 10px 0 20px 0;">
                            {{ $city }}
                        </p>
                        @endif
                    </td>
                    <td style="border: 0;">
                    </td>
                </tr>
            </table>

            <!-- BOTTOM SITE INFORMATION -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                <tr>
                    <td valign="middle" align="center" height="45">
                        <p style="
                            font-style:normal;
                            font-variant:normal;
                            font-weight:normal;
                            font-size:13px;
                            line-height:16px;
                            font-family:Arial,sans-serif,Helvetica;
                            color:rgb(147,154,164);
                            margin: 20px 0 0;
                            ">
                            © 2021 Торговый дом УЭТ (Уралэнерготел) <br>
                            <a href="https://uralenergotel.ru" target="_blank">uralenergotel.ru</a>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
