
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { KanyerestSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await KanyerestSDK.test()
    equal(null !== testsdk, true)
  })

})
