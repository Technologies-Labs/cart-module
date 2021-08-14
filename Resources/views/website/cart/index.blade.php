@extends('layouts.simple.master')

@section('content')
<livewire:cartmodule::cart.cart/>
@endsection

@section('scripts')
<script  src="{{asset('assets/js/userincr.js')}}"></script>
@endsection
