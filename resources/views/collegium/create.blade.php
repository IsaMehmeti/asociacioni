@extends('layouts.app')

@section('page_name', __('Create Collegium'))

@section('content')

    <div class="col-lg-6 m-auto">
        <section class="card form-wizard" id="w1">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                </div>

                <h2 class="card-title">Create Collegium</h2>
            </header>
            <div class="card-body card-body-nopadding">
                <div class="wizard-tabs">
                    <ul class="nav wizard-steps">
                        <li class="nav-item active">
                            <a href="#w1-account" data-toggle="tab" class="nav-link text-center">
                                <span class="badge">1</span>
                                English
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w1-profile" data-toggle="tab" class="nav-link text-center">
                                <span class="badge">2</span>
                                Albanian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w1-confirm" data-toggle="tab" class="nav-link text-center">
                                <span class="badge">3</span>
                                Serbian
                            </a>
                        </li>
                    </ul>
                </div>
                <form id="myForm" class="form-horizontal" method="POST" action="{{route('collegium.store')}}">
                    @csrf
                    <div class="tab-content">
                        <div id="w1-account" class="tab-pane p-3 active">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">Title (EN)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="en_title" id="w1-username" required value="{{ old('en_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">Description (EN)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="en_description" id="w1-username" required="" value="{{ old('en_description') }}">
                                </div>
                            </div>
                        </div>
                        <div id="w1-profile" class="tab-pane p-3">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">Title (SQ)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="sq_title" id="w1-username" required="" value="{{ old('sq_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">Description (SQ)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="sq_description" id="w1-username" required="" value="{{ old('sq_description') }}">
                                </div>
                            </div>
                        </div>
                        <div id="w1-confirm" class="tab-pane p-3" id="last">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">Title (SR)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="sr_title" id="w1-username" required="" value="{{ old('sr_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">Description (SR)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="sr_description" id="w1-username" required="" value="{{ old('sr_description') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                <ul class="pager">
                    <li class="previous disabled">
                        <a><i class="fas fa-angle-left"></i> Previous</a>
                    </li>
                    <li class="finish hidden float-right">
                        <button id="butoni" type="submit" class="btn btn-default">Finish</button>
                    </li>
                    <li class="next">
                        <a id="next">Next <i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>

        </section>

    </div>


@endsection
@section('custom_footer')
    <script>
        $( document ).ready(function() {
            var locale = '{{ config('app.locale') }}';
            var message = "This field is required."
            console.log(locale);
            if (locale == 'sq'){
                 message = "Kjo fushe nuk mund te jete e zbrazet";
            }else if(locale == 'sr'){
                 message = "Ovo polje je obavezno.";
            }
            $.extend($.validator.messages, {
                required: message,
            });
        });
    </script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('js/examples/examples.wizard.js')}}"></script>
@endsection
