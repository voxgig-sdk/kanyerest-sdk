<?php
declare(strict_types=1);

// Kanyerest SDK exists test

require_once __DIR__ . '/../kanyerest_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = KanyerestSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
