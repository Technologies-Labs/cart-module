@extends('cartmodule::layouts.master')

@section('content')
    <h1>Hello World</h1>
	<img src="dd">
    <p>
        This view is loaded from module: {!! config('cartmodule.name') !!}
    </p>
    <livewire:cart/>
@endsection
