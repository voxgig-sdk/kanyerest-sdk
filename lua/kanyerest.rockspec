package = "voxgig-sdk-kanyerest"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/kanyerest-sdk.git"
}
description = {
  summary = "Kanyerest SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["kanyerest_sdk"] = "kanyerest_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
