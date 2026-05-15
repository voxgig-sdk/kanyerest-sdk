package core

type KanyerestError struct {
	IsKanyerestError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewKanyerestError(code string, msg string, ctx *Context) *KanyerestError {
	return &KanyerestError{
		IsKanyerestError: true,
		Sdk:              "Kanyerest",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *KanyerestError) Error() string {
	return e.Msg
}
