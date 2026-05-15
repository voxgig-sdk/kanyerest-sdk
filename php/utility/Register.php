<?php
declare(strict_types=1);

// Kanyerest SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

KanyerestUtility::setRegistrar(function (KanyerestUtility $u): void {
    $u->clean = [KanyerestClean::class, 'call'];
    $u->done = [KanyerestDone::class, 'call'];
    $u->make_error = [KanyerestMakeError::class, 'call'];
    $u->feature_add = [KanyerestFeatureAdd::class, 'call'];
    $u->feature_hook = [KanyerestFeatureHook::class, 'call'];
    $u->feature_init = [KanyerestFeatureInit::class, 'call'];
    $u->fetcher = [KanyerestFetcher::class, 'call'];
    $u->make_fetch_def = [KanyerestMakeFetchDef::class, 'call'];
    $u->make_context = [KanyerestMakeContext::class, 'call'];
    $u->make_options = [KanyerestMakeOptions::class, 'call'];
    $u->make_request = [KanyerestMakeRequest::class, 'call'];
    $u->make_response = [KanyerestMakeResponse::class, 'call'];
    $u->make_result = [KanyerestMakeResult::class, 'call'];
    $u->make_point = [KanyerestMakePoint::class, 'call'];
    $u->make_spec = [KanyerestMakeSpec::class, 'call'];
    $u->make_url = [KanyerestMakeUrl::class, 'call'];
    $u->param = [KanyerestParam::class, 'call'];
    $u->prepare_auth = [KanyerestPrepareAuth::class, 'call'];
    $u->prepare_body = [KanyerestPrepareBody::class, 'call'];
    $u->prepare_headers = [KanyerestPrepareHeaders::class, 'call'];
    $u->prepare_method = [KanyerestPrepareMethod::class, 'call'];
    $u->prepare_params = [KanyerestPrepareParams::class, 'call'];
    $u->prepare_path = [KanyerestPreparePath::class, 'call'];
    $u->prepare_query = [KanyerestPrepareQuery::class, 'call'];
    $u->result_basic = [KanyerestResultBasic::class, 'call'];
    $u->result_body = [KanyerestResultBody::class, 'call'];
    $u->result_headers = [KanyerestResultHeaders::class, 'call'];
    $u->transform_request = [KanyerestTransformRequest::class, 'call'];
    $u->transform_response = [KanyerestTransformResponse::class, 'call'];
});
