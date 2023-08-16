<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

final class ConfigType extends Enum
{
    const TIEU_DE = "TIEU_DE";
    const API_VNPAY = "API_VNPAY";
    const API_ZALO = "API_ZALO";
    const BANNER_TOP = "BANNER_TOP";
    const FOOTER = "FOOTER";
    const LOGO = "LOGO";
    const MENU = "MENU";
    const SMTP_EMAIL = "SMTP_EMAIL";
}
