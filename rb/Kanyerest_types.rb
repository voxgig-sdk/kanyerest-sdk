# frozen_string_literal: true

# Typed models for the Kanyerest SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# GetRandomQuote entity data model.
#
# @!attribute [rw] quote
#   @return [String]
GetRandomQuote = Struct.new(
  :quote,
  keyword_init: true
)

# Request payload for GetRandomQuote#load.
#
# @!attribute [rw] quote
#   @return [String, nil]
GetRandomQuoteLoadMatch = Struct.new(
  :quote,
  keyword_init: true
)

