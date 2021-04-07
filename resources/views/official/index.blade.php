@extends('layouts.app')

@section('page_name', __('Official index'))

@section('content')

    @foreach($officials as $official)
        <h1>{{$official->translate('en')->name}}</h1>
    @endforeach
@endsection
