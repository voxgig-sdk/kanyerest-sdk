
import { Context } from './Context'


class KanyerestError extends Error {

  isKanyerestError = true

  sdk = 'Kanyerest'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  KanyerestError
}

