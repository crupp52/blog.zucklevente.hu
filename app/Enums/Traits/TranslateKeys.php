<?php


namespace App\Enums\Traits;


trait TranslateKeys
{
    public static function getTranslatedKeys(): array
    {
        $enums = [];

        foreach (self::$labels as $key => $value) {
            $enums[$key] = __($value);
        }

        return $enums;
    }

    public function getTranslatedKey(): string
    {
        return __(self::$labels[$this->value]);
    }
}
