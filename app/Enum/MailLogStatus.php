<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

final class MailLogStatus extends Enum
{
    const ACTIVE =   "1";
    const INACTIVE =   "2";
    const DELETED =   "3";
}
