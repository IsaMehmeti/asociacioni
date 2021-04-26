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
                    <th>{{__('messages.Qyteti')}}</th>
                    <th>{{__('messages.Kolegjiumi')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('messages.Phone Number')}}</th>
                    <th>{{__('messages.Data Arkivimit')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($officials as $official)
                    <tr id="row{{$official->id}}" data-item-id="{{$official->id}}" role="row" class="odd">
                        <td>{{$official->name}} {{$official->last_name}}</td>
                        <td>{{ucfirst($official->municipality->name)}}</td>
                         <td>
                             @if(!$official->collegium)
                               <p style="color:red">Null</p>
                            @else
                                {{$official->collegium->title}}
                            @endif
                        </td>
                        <td>{{$official->email}}</td>
                        <td>{{$official->phone}}</td>
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
    <script>

(function($) {

	'use strict';

	var EditableTable = {

		options: {
			addButton: '#addToTable',
			table: '#datatable-editable',
			dialog: {
				wrapper: '#dialog',
				cancelButton: '#dialogCancel',
				confirmButton: '#dialogConfirm',
			}
		},

		initialize: function() {
			this
				.setVars()
				.build()
				.events();
		},

		setVars: function() {
			this.$table				= $( this.options.table );
			this.$addButton			= $( this.options.addButton );

			// dialog
			this.dialog				= {};
			this.dialog.$wrapper	= $( this.options.dialog.wrapper );
			this.dialog.$cancel		= $( this.options.dialog.cancelButton );
			this.dialog.$confirm	= $( this.options.dialog.confirmButton );

			return this;
		},

		build: function() {
			this.datatable = this.$table.DataTable({
				dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t> Bp ',
				aoColumns: [
					null,
					null,
					null,
					null,
					null,
					{ "bSortable": false }
				]
			});

			window.dt = this.datatable;

			return this;
		},
	};

	$(function() {
		EditableTable.initialize();
	});

}).apply(this, [jQuery]);

        function restore(id) {
            $("#" + id).click();
        }
    </script>
@endsection




