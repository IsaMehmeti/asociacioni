@extends('layouts.app')

@section('page_name', __('messages.Compose'))

@section('content')
    <div class="container">
        <div class="row">
            <h3>asd</h3>
        </div>
    </div>
    <section class=" content-with-menu-has-toolbar mailbox mt-lg">
        <div class="content-with-menu-container" data-mailbox data-mailbox-view="compose">
            <form method="POST" action="{{ route('sendmail') }}" class="col-md-12">
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

                        <div class="form-group form-group-invisible">
                            <label for="to" class="control-label-invisible">{{__('Messages.To')}}:</label>
                            <div class="col-md-12 mailbox-compose-field">
                                <input disabled id="to" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="badge badge-primary">
                                <select class="form-control" name="collegium_id">
                                    <option disabled selected> Zgjedhni...</option>
                                    @foreach($collegiums as $collegium)
                                    <option value="{{$collegium->id}}"> {{$collegium->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-invisible">
                            <label for="subject" class="control-label-invisible">{{__('messages.Subject')}}:</label>
                            <div class="col-md-12 mailbox-compose-field">
                                <input required id="subject" type="text" class="form-control form-control-invisible" name="subject">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="compose">
                                <label for="Body" class="control-label-invisible">{{__('messages.Body')}}: </label>
                                <textarea required name="body" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 89px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
            </form>
        </div>
    </section>
@endsection

@section('custom_footer')
    <script>
        $( document ).ready(function() {
        });
    </script>
@endsection
