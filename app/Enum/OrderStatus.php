<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

final class OrderStatus extends Enum
{
    const PROCESSING =   'PROCESSING';
    const WAIT_PAYMENT =   'WAITING FOR PAYMENT';
    const COMPLETED = 'COMPLETED';
    const CANCELED = 'CANCELED';
    const DELETED = 'DELETED';
}
