@extends('layouts.app')

@section('page_name', __('Official index'))

@section('content')

    @foreach($officials as $official)
        <p>Emri: {{$official->name}} {{$official->last_name}}, Kolegjiumi: {{$official->collegium->title}}, Qyteti: {{$official->municipality}} </p>
    @endforeach
@endsection
