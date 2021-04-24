@extends('layouts.app')

@section('page_name', __('messages.Archived Officials'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}"/>
@endsection

@section('content')
    <section class="card">

        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>

            <h2 class="card-title">{{__('messages.Archived Officials')}}</h2>
        </header>
        <div class="card-body">

            <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                <thead>
                <tr>
                    <th>{{__('messages.Emri')}}</th>
                    <th>{{__('messages.Kolegjiumi')}}</th>
                    <th>{{__('messages.Qyteti')}}</th>
                    <th>{{__('messages.Data Arkivimit')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($officials as $official)
                    <tr id="row{{$official->id}}" data-item-id="{{$official->id}}" role="row" class="odd">
                        <td>{{$official->name}} {{$official->last_name}}</td>
                        <td>{{$official->collegium->title}}</td>
                        <td>{{ucfirst($official->municipality->name)}}</td>
                        <?php
                        $dt = new DateTime($official->deleted_at);?>
                        <td>
                            {{$dt->format('d-m-Y')}}
                            <form id="head-form {{$official->id}}" class="hidden" method="POST"
                                  action="{{route('official.update', $official->id)}}">
                                @csrf
                                @method('Patch')
                                <button type="submit" class="hidden" id="{{$official->id}}"></button>
                            </form>
                            <a data-toggle="tooltip" title="" href="#" data-original-title="{{__('Riktheje')}}"
                               onclick="restore({{$official->id}})" class="delete on-default"><i
                                    class="fa fa-undo"></i></a>

                        </td>

                    </tr>
                @empty
                    <tr class="odd">
                        <td valign="top" colspan="4"
                            class="dataTables_empty">{{__('messages.No data available in table')}}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </section>

@endsection

@section('custom_footer')
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>
    <script>
        function restore(id) {
            $("#" + id).click();
        }
    </script>
@endsection




