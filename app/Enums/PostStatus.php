<?php

namespace App\Enums;

use App\Enums\Traits\BootstrapBadge;
use BenSampo\Enum\Enum;

final class PostStatus extends Enum
{
    use BootstrapBadge;

    const Draft     = 0;
    const Published = 1;
    const Archived  = 2;

    public static $colors = [
        0 => 'warning',
        1 => 'success',
        2 => 'danger',
    ];

    public static $labels = [
        0 => 'Draft',
        1 => 'Published',
        2 => 'Archived',
    ];
}
