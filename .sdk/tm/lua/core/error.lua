-- Kanyerest SDK error

local KanyerestError = {}
KanyerestError.__index = KanyerestError


function KanyerestError.new(code, msg, ctx)
  local self = setmetatable({}, KanyerestError)
  self.is_sdk_error = true
  self.sdk = "Kanyerest"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function KanyerestError:error()
  return self.msg
end


function KanyerestError:__tostring()
  return self.msg
end


return KanyerestError
