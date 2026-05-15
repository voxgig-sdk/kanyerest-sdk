package voxgigkanyerestsdk

import (
	"github.com/voxgig-sdk/kanyerest-sdk/core"
	"github.com/voxgig-sdk/kanyerest-sdk/entity"
	"github.com/voxgig-sdk/kanyerest-sdk/feature"
	_ "github.com/voxgig-sdk/kanyerest-sdk/utility"
)

// Type aliases preserve external API.
type KanyerestSDK = core.KanyerestSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type KanyerestEntity = core.KanyerestEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type KanyerestError = core.KanyerestError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewGetRandomQuoteEntityFunc = func(client *core.KanyerestSDK, entopts map[string]any) core.KanyerestEntity {
		return entity.NewGetRandomQuoteEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewKanyerestSDK = core.NewKanyerestSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
