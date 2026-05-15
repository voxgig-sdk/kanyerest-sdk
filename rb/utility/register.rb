# Kanyerest SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

KanyerestUtility.registrar = ->(u) {
  u.clean = KanyerestUtilities::Clean
  u.done = KanyerestUtilities::Done
  u.make_error = KanyerestUtilities::MakeError
  u.feature_add = KanyerestUtilities::FeatureAdd
  u.feature_hook = KanyerestUtilities::FeatureHook
  u.feature_init = KanyerestUtilities::FeatureInit
  u.fetcher = KanyerestUtilities::Fetcher
  u.make_fetch_def = KanyerestUtilities::MakeFetchDef
  u.make_context = KanyerestUtilities::MakeContext
  u.make_options = KanyerestUtilities::MakeOptions
  u.make_request = KanyerestUtilities::MakeRequest
  u.make_response = KanyerestUtilities::MakeResponse
  u.make_result = KanyerestUtilities::MakeResult
  u.make_point = KanyerestUtilities::MakePoint
  u.make_spec = KanyerestUtilities::MakeSpec
  u.make_url = KanyerestUtilities::MakeUrl
  u.param = KanyerestUtilities::Param
  u.prepare_auth = KanyerestUtilities::PrepareAuth
  u.prepare_body = KanyerestUtilities::PrepareBody
  u.prepare_headers = KanyerestUtilities::PrepareHeaders
  u.prepare_method = KanyerestUtilities::PrepareMethod
  u.prepare_params = KanyerestUtilities::PrepareParams
  u.prepare_path = KanyerestUtilities::PreparePath
  u.prepare_query = KanyerestUtilities::PrepareQuery
  u.result_basic = KanyerestUtilities::ResultBasic
  u.result_body = KanyerestUtilities::ResultBody
  u.result_headers = KanyerestUtilities::ResultHeaders
  u.transform_request = KanyerestUtilities::TransformRequest
  u.transform_response = KanyerestUtilities::TransformResponse
}
