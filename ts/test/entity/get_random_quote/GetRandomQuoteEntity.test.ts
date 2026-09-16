

import Path from 'node:path'
import * as Fs from 'node:fs'

import { test, describe, afterEach } from 'node:test'
import assert from 'node:assert'
import { createLiveTransport } from '../../live-runner'
import { runLiveEntity } from '../../live-entity'


import { KanyerestSDK, BaseFeature, stdutil } from '../../..'

import {
  envOverride,
  liveClientOptions,
  liveDelay,
  loadEnvLocal,
  makeCtrl,
  makeMatch,
  makeReqdata,
  makeStepData,
  makeValid,
  maybeSkipControl,
} from '../../utility'


// AFTER the imports on purpose: TypeScript hoists `import` above any
// statement in the emitted CommonJS, so a loader placed above them would
// run only after every imported module had already been evaluated - and
// anything reading process.env at module scope would miss these values.
loadEnvLocal(__dirname + '/../../../.env.local')


describe('GetRandomQuoteEntity', async () => {

  // Per-test live pacing. Delay is read from sdk-test-control.json's
  // `test.live.delayMs`; only sleeps when KANYEREST_TEST_LIVE=TRUE.
  afterEach(liveDelay('KANYEREST_TEST_LIVE'))

  test('instance', async () => {
    const testsdk = KanyerestSDK.test()
    const ent = testsdk.GetRandomQuote()
    assert(null != ent)
  })


  test('basic', async (t) => {

    const live = 'TRUE' === process.env.KANYEREST_TEST_LIVE
    for (const op of ['load']) {
      if (!live && maybeSkipControl(t, 'entityOp', 'get_random_quote.' + op, live)) return
    }

    
    const setup = basicSetup()
    if (setup.live) {
      return runLiveEntity(setup, {"active":true,"alias":{"field":{}},"fields":[{"active":true,"name":"quote","req":true,"short":"A random Kanye West quote","type":"`$STRING`","index$":0}],"name":"get_random_quote","op":{"load":{"input":"data","name":"load","points":[{"active":true,"args":{},"contract":{"id":"GET /","json":"{\"operationId\":\"getRandomQuote\",\"parameters\":[],\"protocol\":\"http\",\"responses\":{\"200\":{\"content\":{\"application/json\":{\"schema\":{\"properties\":{\"quote\":{\"description\":\"A random Kanye West quote\",\"example\":\"I hate when I'm on a flight and I wake up with a water bottle next to me like oh great now I gotta be responsible for this water bottle\",\"type\":\"string\"}},\"required\":[\"quote\"],\"type\":\"object\"}}},\"description\":\"Successful response with a random Kanye West quote\"}},\"securitySource\":\"unspecified\"}","source":"openapi3","version":1},"kind":"http","method":"GET","orig":"/","segments":[],"select":{},"transform":{"req":"`reqdata`","res":"`body`"},"index$":0}],"key$":"load"}},"relations":{"ancestors":[]},"key$":"get_random_quote","name__orig":"get_random_quote","Name":"GetRandomQuote","name_":"get_random_quote","name-":"get-random-quote","NAME":"GET_RANDOM_QUOTE","index$":0}, {"active":true,"entity":"get_random_quote","key$":"BasicGetRandomQuoteFlow","kind":"basic","name":"BasicGetRandomQuoteFlow","param":{},"step":[{"active":true,"data":{},"input":{"ref":"get_random_quote_ref01","srcdatavar":"get_random_quote_ref01_data","suffix":"_dt0"},"match":{},"op":"load","spec":[],"valid":[{"apply":"TextFieldMark","def":{"mark":"Mark01-get_random_quote_ref01"}}],"index$":0}]}, 'GetRandomQuote')
    }
    const client = setup.client
    const struct = setup.struct

    const isempty = struct.isempty
    const select = struct.select

    let get_random_quote_ref01_data = Object.values(setup.data.existing.get_random_quote)[0] as any

    // LOAD
    const get_random_quote_ref01_ent = client.GetRandomQuote()
    const get_random_quote_ref01_match_dt0: any = {}
    const get_random_quote_ref01_data_dt0 = (await get_random_quote_ref01_ent.load(get_random_quote_ref01_match_dt0)).data()
    assert(null != get_random_quote_ref01_data_dt0)


  })
})



function basicSetup(extra?: any) {
  // TODO: fix test def options
  const options: any = {} // null

  // TODO: needs test utility to resolve path
  const entityDataFile =
    Path.resolve(__dirname, 
      '../../../../.sdk/test/entity/get_random_quote/GetRandomQuoteTestData.json')

  // TODO: file ready util needed?
  const entityDataSource = Fs.readFileSync(entityDataFile).toString('utf8')

  // TODO: need a xlang JSON parse utility in voxgig/struct with better error msgs
  const entityData = JSON.parse(entityDataSource)

  options.entity = entityData.existing

  let client = KanyerestSDK.test(options, extra)
  const struct = client.utility().struct
  const merge = struct.merge
  const transform = struct.transform

  let idmap = transform(
    ['get_random_quote01','get_random_quote02','get_random_quote03'],
    {
      '`$PACK`': ['', {
        '`$KEY`': '`$COPY`',
        '`$VAL`': ['`$FORMAT`', 'upper', '`$COPY`']
      }]
    })

  const env = envOverride({
    'KANYEREST_TEST_GET_RANDOM_QUOTE_ENTID': idmap,
    'KANYEREST_TEST_LIVE': 'FALSE',
    'KANYEREST_TEST_EXPLAIN': 'FALSE',
  })

  idmap = env['KANYEREST_TEST_GET_RANDOM_QUOTE_ENTID']

  const live = 'TRUE' === env.KANYEREST_TEST_LIVE

  const transport = createLiveTransport()
  if (live) {
    const rawIds = process.env['KANYEREST_TEST_GET_RANDOM_QUOTE_ENTID']
    idmap = rawIds && rawIds.trim() ? JSON.parse(rawIds) : {}
    if (!idmap || Array.isArray(idmap) || typeof idmap !== 'object') {
      throw new Error('Live ENTID must be a JSON object')
    }
    client = new KanyerestSDK(merge([
      // FIRST, so the generated fields below win: sdk-test-control.json's
      // test.client.options adds to the live client, it does not redirect it.
      liveClientOptions(),
      {
      },
      // 'extra || {}', not a bare 'extra': struct.merge returns UNDEFINED when the
      // last entry is undefined, and basicSetup is normally called with no
      // argument at all - so a bare 'extra' silently discarded the apikey
      // and server values above and handed the SDK undefined. Harmless
      // while there was nothing in that object; not harmless now.
      extra || {},
      { system: { fetch: transport.fetch } }
    ]))
  }

  const setup = {
    idmap,
    env,
    options,
    client,
    struct,
    data: entityData,
    explain: 'TRUE' === env.KANYEREST_TEST_EXPLAIN,
    live,
    transport,
    now: Date.now(),
  }

  return setup
}
  
