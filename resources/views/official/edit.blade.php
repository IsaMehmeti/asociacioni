@extends('layouts.app')

@section('page_name', __('messages.Update Official'))

@section('content')

<div class="col-lg-6 m-auto">
    <section class="card form-wizard" id="w1">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
            </div>

            <h2 class="card-title">{{__('messages.Update Official')}}</h2>
        </header>
        <div class="card-body card-body-nopadding">
            <div class="wizard-tabs">

            </div>
            <form id="myForm" class="form-horizontal" method="POST" action="{{route('official.ndrysho', $official->id)}}">
                @csrf
                @method('PATCH')
                <div class="tab-content">
                    <div id="w1-account" class="tab-pane p-3 active">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">{{__('messages.First Name')}}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="w1-username" required="" value="{{ $official->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">{{__('messages.Last Name')}}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" id="w1-username" required="" value="{{ $official->last_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">E-mail</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="w1-username" required autocomplete="email" value="{{ $official->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">{{__('messages.Phone Number')}}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="phone" id="w1-username" required autocomplete="number" value="{{ $official->phone }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-first-name">{{__('messages.Municipality')}}</label>
                            <div class="col-sm-8">
                                <select id="company" name="municipality_id" class="form-control valid" required="" aria-invalid="false">
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}" @if($city->id == $official->municipality->id) selected @endif>{{ucfirst($city->name)}}</option>
                                    @endforeach
                                </select>
                                <label id="company-error" class="error" for="company"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-last-name">{{__('messages.Collegium')}}</label>
                            <div class="col-sm-8">
                                <select id="company" name="collegium_id" class="form-control valid" required="" aria-invalid="false" value="{{$official->collegium->id}}">
                                    @foreach($collegiums as $key => $collegium)
                                       <option value="{{$collegium->id}}" @if($collegium->id == $official->collegium->id) selected @endif>{{$collegium->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>
        <div class="card-footer">
            <ul class="pager">

                <li class="finish float-right">
                    <button id="butoni" type="submit" class="btn btn-default">{{__('messages.Finish')}}</button>
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
            var email = "Please enter a valid email address.";
            if (locale == 'sq'){
                message = "Kjo fushe nuk mund te jete e zbrazet";
                email = "Ju lutem shtypni nje email valide.";

            }else if(locale == 'sr'){
                message = "Ovo polje je obavezno.";
                email = "Unesite va??e??u e-adresu.";
            }
            $.extend($.validator.messages, {
                required: message,
                email: email,
            });
        });
    </script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
<script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/examples/examples.wizard.js')}}"></script>
@endsection
