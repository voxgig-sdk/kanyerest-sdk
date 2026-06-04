# Kanyerest SDK configuration

module KanyerestConfig
  def self.make_config
    {
      "main" => {
        "name" => "Kanyerest",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://api.kanye.rest",
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "get_random_quote" => {},
        },
      },
      "entity" => {
        "get_random_quote" => {
          "fields" => [
            {
              "name" => "quote",
              "req" => true,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 0,
            },
          ],
          "name" => "get_random_quote",
          "op" => {
            "load" => {
              "name" => "load",
              "points" => [
                {
                  "method" => "GET",
                  "orig" => "/",
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body`",
                  },
                  "active" => true,
                  "parts" => [],
                  "args" => {},
                  "select" => {},
                  "index$" => 0,
                },
              ],
              "input" => "data",
              "key$" => "load",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    KanyerestFeatures.make_feature(name)
  end
end
