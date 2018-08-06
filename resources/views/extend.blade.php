@extends('layout.default')

@section('title', 'Extend')

@section('sidebar')
    @parent
        <p>This is appended to the master sidebar.</p>
        
        @section('content')
            <p>This is my body content.</p>
        @endsection

@endsection