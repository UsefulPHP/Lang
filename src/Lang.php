<?php


namespace Useful;

class Lang
{
    private static $locale;
    private static $langFiles = [];
    private static $lang = [];

    public static function get(string $key): string
    {
        if(empty(self::$lang[static::class])){
            
        }
    }

    public static function getLocale(): string
    {
        if(empty(self::$locale)){
            self::$locale = Locale::getDefault();
        }
        return self::$locale;
    }

    public static function setLocale(string $locale): void
    {
        self::$locale = $locale;
    }

    public static function registerTranslationFile(string $file, ?string $scope = null)
    {

    }

}