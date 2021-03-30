@extends('layouts.mail')

@section('page_name', __('Compose'))

@section('content')
    <section class="content-with-menu content-with-menu-has-toolbar mailbox">
        <div class="content-with-menu-container" data-mailbox data-mailbox-view="compose">
            <div class="inner-menu-toggle">
                <a href="#" class="inner-menu-expand" data-open="inner-menu">
                    Show Menu <i class="fas fa-chevron-right"></i>
                </a>
            </div>

            <menu id="content-menu" class="inner-menu" role="menu">
                <div class="nano">
                    <div class="nano-content">
                        <div class="inner-menu-toggle-inside">
                            <a href="#" class="inner-menu-collapse">
                                <i class="fas fa-chevron-up d-inline-block d-md-none"></i><i class="fas fa-chevron-left d-none d-md-inline-block"></i> Hide Menu
                            </a>
                            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                                Show Menu <i class="fas fa-chevron-down"></i>
                            </a>
                        </div>

                        <div class="inner-menu-content">
                            <a href="#" class="btn btn-block btn-primary btn-md pt-2 pb-2 text-3">
                                <i class="fas fa-envelope mr-1"></i>
                                Compose
                            </a>
                            <hr class="separator" />
                        </div>
                    </div>
                </div>
            </menu>
            <form method="POST" action="{{ route('sendmail') }}">
                @csrf
            <div class="inner-body">
                @include('layouts.notifications')
                <div class="inner-toolbar clearfix">
                    <ul>
                        <li>
                            <button type="submit" class="btn btn-dark btn-md pt-2 pb-2 text-3" ><i class="far fa-paper-plane mr-2"></i> Send</button>
                        </li>
                        <li>
                            <a href="/"><i class="fas fa-times mr-2"></i> Discard</a>
                        </li>
                    </ul>
                </div>
                <div class="mailbox-compose">
                    <div class="form-horizontal form-bordered form-bordered">

                        <div class="form-group form-group-invisible">
                            <label for="to" class="control-label-invisible">To:</label>
                            <div class="col-md-12 mailbox-compose-field">
                                <input id="to" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="badge badge-primary">
                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-invisible">
                            <label for="subject" class="control-label-invisible">Subject:</label>
                            <div class="col-md-12 mailbox-compose-field">
                                <input id="subject" type="text" class="form-control form-control-invisible" name="subject">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="compose">
                                <label for="Body" class="control-label-invisible">Body: </label>

{{--                                <input id="compose-field" class="compose-control" name="body">--}}
                                <textarea name="body" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 89px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection
