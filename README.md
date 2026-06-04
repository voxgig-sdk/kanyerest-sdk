# Kanyerest SDK

Fetch a random Kanye West quote with a single GET request

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About kanye.rest

[kanye.rest](https://kanye.rest) is a free, no-auth REST service that returns a random quotation attributed to Kanye West. It is marketed as "Kanye as a Service" and is intended primarily as a fun, lightweight API for demos, tutorials, and toy projects.

What you get from the API:

- A single random quote, returned as JSON with a `quote` string field.
- A single endpoint: `GET /` on `https://api.kanye.rest`.
- CORS is enabled, so the endpoint is callable directly from browser JavaScript.

Operational notes: the service is monitored by the FreePublicAPIs community catalogue, which reports a sub-200 ms average response time and high reliability. No API key or authentication is required, and no published rate-limit policy is documented; please be considerate with traffic volume.

## Try it

**TypeScript**
```bash
npm install kanyerest
```

**Python**
```bash
pip install kanyerest-sdk
```

**PHP**
```bash
composer require voxgig/kanyerest-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/kanyerest-sdk/go
```

**Ruby**
```bash
gem install kanyerest-sdk
```

**Lua**
```bash
luarocks install kanyerest-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { KanyerestSDK } from 'kanyerest'

const client = new KanyerestSDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o kanyerest-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "kanyerest": {
      "command": "/abs/path/to/kanyerest-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **GetRandomQuote** | Returns a single random Kanye West quote as JSON via `GET https://api.kanye.rest/`. | `/` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from kanyerest_sdk import KanyerestSDK

client = KanyerestSDK({})


# Load a specific getrandomquote
getrandomquote, err = client.GetRandomQuote(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'kanyerest_sdk.php';

$client = new KanyerestSDK([]);


// Load a specific getrandomquote
[$getrandomquote, $err] = $client->GetRandomQuote(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/kanyerest-sdk/go"

client := sdk.NewKanyerestSDK(map[string]any{})

```

### Ruby

```ruby
require_relative "Kanyerest_sdk"

client = KanyerestSDK.new({})


# Load a specific getrandomquote
getrandomquote, err = client.GetRandomQuote(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("kanyerest_sdk")

local client = sdk.new({})


-- Load a specific getrandomquote
local getrandomquote, err = client:GetRandomQuote(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = KanyerestSDK.test()
const result = await client.GetRandomQuote().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = KanyerestSDK.test(None, None)
result, err = client.GetRandomQuote(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = KanyerestSDK::test(null, null);
[$result, $err] = $client->GetRandomQuote(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.GetRandomQuote(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = KanyerestSDK.test(nil, nil)
result, err = client.GetRandomQuote(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:GetRandomQuote(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the kanye.rest

- Upstream: [https://kanye.rest](https://kanye.rest)

- The kanye.rest service does not publish an explicit licence for the quotes it returns.
- Quotes are statements attributed to Kanye West; attribution to the original speaker is appropriate where used.
- Treat the data as informally provided and verify usage rights before commercial reuse.

---

Generated from the kanye.rest OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
