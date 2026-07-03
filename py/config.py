# Kanyerest SDK configuration


def make_config():
    return {
        "main": {
            "name": "Kanyerest",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://api.kanye.rest",
            "auth": {
                "prefix": "Bearer",
            },
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "get_random_quote": {},
            },
        },
        "entity": {
      "get_random_quote": {
        "fields": [
          {
            "active": True,
            "name": "quote",
            "req": True,
            "type": "`$STRING`",
            "index$": 0,
          },
        ],
        "name": "get_random_quote",
        "op": {
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "active": True,
                "args": {},
                "method": "GET",
                "orig": "/",
                "parts": [],
                "select": {},
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
