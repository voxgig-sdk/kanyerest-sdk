<?php
declare(strict_types=1);

// Kanyerest SDK utility: feature_hook

class KanyerestFeatureHook
{
    public static function call(KanyerestContext $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
