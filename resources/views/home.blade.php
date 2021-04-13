@extends('layouts.app')

@section('page_name', __('Dashboard'))

@section('custom_header')

@endsection

@section('content')
    <style type="text/css">
        .butoni {
            padding: 0;
            border: none;
            background: none;
            outline: none;
            border-color: white;
            font-size: 100%;
        }

        selector:focus {
            outline: none;
        }

    </style>
    <div class="row">

        @forelse($collegiums as $collegium)
            <div class="col-md-4">
                <section class="card card-featured-left card-featured-primary mb-4">
                    <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">
                        <div class="card-body">
                            <div class="widget-summary widget-summary-xlg">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div>
                                        <i class=""><img src="{{asset($collegium->image)}}" width="100" style="padding: 10px;"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div>
                                        <h3 class="title" style="float: left;  margin-left: 3px;">{{$collegium->title}}</h3><br>
                                        <hr style="opacity: 0%;">
                                        <div style="float: left;">
                                            @if($collegium->description != null)
                                                <span>{{$collegium->description}}</span>
                                            @else
                                                <span disabled>{{__('messages.No description for this collegium')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </section>
            </div>
        @empty
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <strong>{{__('messages.Sorry, No Record to show')}}. {{__('messages.Want to add')}} <a href="{{route('collegium.create')}}">{{__('messages.some?')}}</a></strong>
                </div>
            </div>
        @endforelse
    </div>
@endsection

@section('custom_footer')

@endsection
