<?php
declare(strict_types=1);

// Kanyerest SDK utility: prepare_body

class KanyerestPrepareBody
{
    public static function call(KanyerestContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
