# Kanyerest SDK utility: make_context

from projectname_sdk.core.context import KanyerestContext


def make_context_util(ctxmap, basectx):
    return KanyerestContext(ctxmap, basectx)
