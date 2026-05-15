<?php
declare(strict_types=1);

// Kanyerest SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class KanyerestMakeContext
{
    public static function call(array $ctxmap, ?KanyerestContext $basectx): KanyerestContext
    {
        return new KanyerestContext($ctxmap, $basectx);
    }
}
