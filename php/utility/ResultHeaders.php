<?php
declare(strict_types=1);

// Kanyerest SDK utility: result_headers

class KanyerestResultHeaders
{
    public static function call(KanyerestContext $ctx): ?KanyerestResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
