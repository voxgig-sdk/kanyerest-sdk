<?php
declare(strict_types=1);

// Kanyerest SDK utility: feature_add

class KanyerestFeatureAdd
{
    public static function call(KanyerestContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
