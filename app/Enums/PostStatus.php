<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostStatus extends Enum
{
    const Draft     = 0;
    const Published = 1;
    const Archived  = 2;
}
