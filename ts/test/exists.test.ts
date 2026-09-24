
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { KanyerestSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = KanyerestSDK.test()
    equal(testsdk instanceof KanyerestSDK, true,
      'KanyerestSDK.test() must return a client synchronously')
  })

})
