@extends('layouts.app')

@section('page_name', __('Collegiums'))

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
    <!-- <h1>Home</h1> -->
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
                                    <hr>
                                    <div style="float: left;">
                                        <span>{{$collegium->description}}</span>
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
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <section class="card card-featured-left card-featured-primary mb-4">--}}
{{--                <button type="button" data-toggle="modal" data-target="#Deçan" class="butoni">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="widget-summary widget-summary-xlg">--}}
{{--                            <div class="widget-summary-col widget-summary-col-icon">--}}
{{--                                <div class="summary-icon bg-primary">--}}
{{--                                    <i class="fas fa-life-ring"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget-summary-col">--}}
{{--                                <div>--}}
{{--                                    <h3 class="title" style="float: left;  margin-left: 3px;">Kolegjiumi Nr.1</h3><br>--}}
{{--                                    <div style="float: left;">--}}
{{--                                        <span style="float: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </section>--}}
{{--        </div>--}}




    <!-- Modal -->
    <div class="modal fade" id="Deçan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <section class="card">
                    <div class="card-body text-center">
                        <div class="modal-wrapper">
                            <div class="modal-icon center">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="modal-text">
                                <h2>Kolegjiumi Nr.1</h2><br><br>
                                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.?</h4>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <div class="row">
                            <div class="col-md-6 center">
                                <a href="/collegiumpage" class="btn btn-info">Shfaq me shume</a>
                            </div>
                            <div class="col-md-6 center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        style="align-items: center;">Mbyll
                                </button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </div>
    <!-- end modal -->
@endsection

@section('custom_footer')

@endsection
