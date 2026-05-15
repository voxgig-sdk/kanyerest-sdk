<?php
declare(strict_types=1);

// Kanyerest SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class KanyerestFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new KanyerestBaseFeature();
            case "test":
                return new KanyerestTestFeature();
            default:
                return new KanyerestBaseFeature();
        }
    }
}
