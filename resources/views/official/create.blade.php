@extends('layouts.app')

@section('page_name', __('Create Official'))

@section('content')

<div class="col-lg-6 m-auto">
    <section class="card form-wizard" id="w1">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
            </div>

            <h2 class="card-title">Create Official</h2>
        </header>
        <div class="card-body card-body-nopadding">
            <div class="wizard-tabs">
         
            </div>
            <form id="myForm" class="form-horizontal" method="POST" action="{{route('official.store')}}">
                @csrf
                <div class="tab-content">
                    <div id="w1-account" class="tab-pane p-3 active">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-username">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="w1-username" required="" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">Last name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" id="w1-username" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-password">E-mail</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="w1-username" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-first-name">Municipality </label>
                            <div class="col-sm-8">
                                <select id="company" name="municipality_id" class="form-control valid" required="" aria-invalid="false">
                                    <option value="" disabled selected>Choose a Municipality</option>
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{ucfirst($city->name)}}</option>
                                    @endforeach
                                </select>
                                <label id="company-error" class="error" for="company"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-1" for="w1-last-name">Collegium </label>
                            <div class="col-sm-8">
                                <select id="company" name="collegium_id" class="form-control valid" required="" aria-invalid="false">
                                    <option value="" disabled selected>Choose a Collegium</option>
                                    @foreach($collegiums as $collegium)
                                        <option value="{{$collegium->id}}">{{$collegium->title}}</option>
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
                    <button id="butoni" type="submit" class="btn btn-default">Finish</button>
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
            var email = 'Please enter a valid email address.';
            console.log(locale);
            if (locale == 'sq'){
                message = "Kjo fushe nuk mund te jete e zbrazet";
                email = 'Ju lutem shtypni nje email valide.';

            }else if(locale == 'sr'){
                message = "Ovo polje je obavezno.";
                email = 'Unesite važeću e-adresu.';
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
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <section class="card">--}}
{{--                <header class="card-header">--}}


{{--                    <h2 class="card-title">{{__('Regjistro zyrtarin komunal')}}</h2>--}}
{{--                </header>--}}
{{--                <div class="card-body">--}}
{{--                    <form class="form-horizontal form-bordered" method="POST" action="{{route('official.store')}}">--}}
{{--                        @csrf()--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Name')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="text" name="name" class="form-control" placeholder="placeholder" id="inputPlaceholder">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Surname')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="text" name="surname"  class="form-control" placeholder="placeholder" id="inputPlaceholder">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Email')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="text" name="email"  class="form-control" placeholder="placeholder" id="inputPlaceholder">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Phone')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="number" class="form-control" placeholder="placeholder" id="inputPlaceholder">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <?php--}}
{{--                        $cities_shqip = array('DEÇAN', 'DRAGASH', 'FERIZAJ', 'GJAKOVË', 'GJILAN', 'DRENAS', 'ISTOG', 'KAÇANIK', 'KAMENICË', 'NOVOBËRDË', 'KLINË', 'JUNIK', 'LIPJAN', 'MALISHEVË', 'MITROVICË', 'OBILIQ', 'PEJË', 'PODUJEVË', 'PRISHTINË', 'RAHOVEC', 'PRIZREN', 'SHTËRPCE', 'SKENDERAJ', 'PARTESH', 'RANILLUG', 'KLLOKOT', 'GRAÇANIC'--}}
{{--                        ,'MITROVICA E VERIUT');--}}
{{--                        ?>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2">{{__('City')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <select class="form-control mb-3">--}}
{{--                                    @foreach($cities_shqip as $city)--}}
{{--                                    <option>{{$city}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label class="col-lg-3 control-label text-lg-right pt-2">{{__('Collegium')}}</label>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <select class="form-control mb-3">--}}
{{--                                    <option>Option 1</option>--}}
{{--                                    <option>Option 2</option>--}}
{{--                                    <option>Option 3</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Qet buton qite ne te djath se so pun me lujt ven ky -->--}}
{{--    <footer class="card-footer" >--}}
{{--        <button class="btn btn-info" >{{__('Register')}}</button>--}}
{{--    </footer>--}}
{{--    </form>--}}
