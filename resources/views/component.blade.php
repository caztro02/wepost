@extends('layout.default')

@section('content')

@component('components.alert', ['foo' => 'bar'])

hello, {{ $name }}

@slot('title')
        Forbidden
    @endslot
     You are not allowed to access this resources!

<strong>Whoops!</strong>Something Went Wrong!

@endcomponent