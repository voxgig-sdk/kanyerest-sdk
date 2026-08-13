# Kanyerest SDK utility: make_context

from kanyerest_sdk.core.context import KanyerestContext


def make_context_util(ctxmap, basectx):
    return KanyerestContext(ctxmap, basectx)
