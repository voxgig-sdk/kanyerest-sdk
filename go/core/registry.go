package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewGetRandomQuoteEntityFunc func(client *KanyerestSDK, entopts map[string]any) KanyerestEntity

