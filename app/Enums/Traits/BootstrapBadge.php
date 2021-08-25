<?php


namespace App\Enums\Traits;


trait BootstrapBadge
{
    public function getBadge(): string
    {
        return '<span class="badge bg-gradient-'.$this->getColor().'">'.$this->getText().'</span>';
    }

    public function getColor(): string
    {
        if (!isset(self::$colors)) {
            return 'default';
        }

        return self::$colors[$this->value];
    }

    public function getText()
    {
        if (!isset(self::$labels)) {
            return '';
        }

        return __(self::$labels[$this->value]);
    }
}
