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
            "name": "quote",
            "req": True,
            "type": "`$STRING`",
            "active": True,
            "index$": 0,
          },
        ],
        "name": "get_random_quote",
        "op": {
          "load": {
            "name": "load",
            "points": [
              {
                "method": "GET",
                "orig": "/",
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "parts": [],
                "args": {},
                "select": {},
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
