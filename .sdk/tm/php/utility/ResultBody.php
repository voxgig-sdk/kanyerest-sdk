<?php
declare(strict_types=1);

// Kanyerest SDK utility: result_body

class KanyerestResultBody
{
    public static function call(KanyerestContext $ctx): ?KanyerestResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
