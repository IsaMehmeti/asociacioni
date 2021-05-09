@extends('layouts.app')

@section('page_name', __('messages.Compose'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h3>asd</h3>
        </div>
    </div>
    <section class=" content-with-menu-has-toolbar mailbox mt-lg">
        <div class="content-with-menu-container" data-mailbox data-mailbox-view="compose">
            <form method="POST" action="{{ route('sendmail') }}" class="col-md-12" enctype="multipart/form-data">
                @csrf
                <div class="inner-toolbar clearfix">
                    <ul>
                        <li>
                            <button type="submit" class="btn btn-dark btn-md pt-2 pb-2 text-3" ><i class="far fa-paper-plane mr-2"></i> {{__('messages.Send')}}</button>
                        </li>
                        <li>
                            <a href="/"><i class="fas fa-times mr-2"></i> {{__('messages.Discard')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="mailbox-compose ">
                    <div class="form-horizontal form-bordered form-bordered">
                        <div class="form-group">
                            <div class="form-group row mr-4">
                            <label class=" col-lg-1 control-label text-lg-right pt-3 ">{{__('Messages.To')}}<span class="required">*</span></label>
                            <div class="col-lg-6 mr-lg-4">
                                @if($collegium_id != null)
                                    <select required name="user_ids[]" class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5">
                                        <optgroup label="{{ Str::limit($selectedCollegium->title, 50 )}}">
                                            @foreach($selectedCollegium->officials as $user)
                                                <option value="{{$user->id}}" selected>{{$user->name.' '.$user->last_name.' - '. $user->email}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                @else
                                    <select required name="user_ids[]" class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5">
                                        @foreach($collegiums as $collegium)
                                        <optgroup label="{{ Str::limit($collegium->title, 43 )}}">
                                            @foreach($collegium->officials as $user)
                                            <option value="{{$user->id}}">{{$user->name.' '.$user->last_name.' - '. $user->email}}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-invisible">
                            <label for="subject" class="control-label-invisible pt-2">{{__('messages.Subject')}}<span class="required">*</span></label>
                            <div class="col-md-12 mailbox-compose-field">
                                <input required id="subject" type="text" class="form-control form-control-invisible" name="subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="compose">
                                <label for="Body" class="control-label-invisible">{{__('messages.Body')}}<span class="required">*</span></label>
                                <textarea required name="body" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 89px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="form-group row ml-3">
                            <label class=" col-lg-1 control-label text-lg-right pt-3 ">{{__('messages.Attach File')}}:</label>
                            <div class="col-lg-6 mr-lg-4">
                                <div class="fileupload fileupload-new"  data-provides="fileupload"><input type="hidden" >
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fas fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span id="clearbtn" class="btn btn-default btn-file">
                                            <span class="fileupload-exists">{{__('messages.Change')}}</span>
                                            <span class="fileupload-new">{{__('messages.Zgjidh')}}</span>
                                            <input id="input" type="file" name="file">
                                        </span>
                                        <a href="#" id="dismiss" class="btn btn-default fileupload-exists" data-dismiss="fileupload">{{__('messages.Remove')}}</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('custom_footer')
    <script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('js/examples/examples.advanced.form.js')}}"></script>
@endsection
