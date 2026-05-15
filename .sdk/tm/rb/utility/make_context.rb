# Kanyerest SDK utility: make_context
require_relative '../core/context'
module KanyerestUtilities
  MakeContext = ->(ctxmap, basectx) {
    KanyerestContext.new(ctxmap, basectx)
  }
end
