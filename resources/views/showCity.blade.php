


@extends('layouts.app')

@section('page_name', ucfirst($city->name))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('content')
        <section class="card">

            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title" style="text-transform: capitalize;">{{$city->name}} - {{count($city->officials)}}</h2>

            </header>
            <div class="card-body">

                 <table class="table table-bordered table-striped mb-0" id="datatable-editable">
            <thead>
            <tr>
                <th>{{__('messages.Emri')}}</th>
                <th>{{__('messages.Kolegjiumi')}}</th>
                <th>{{__('messages.Qyteti')}}</th>
                <th>{{__('messages.Phone Number')}}</th>
                <th>{{__('messages.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($city->officials as $official)
                <tr data-item-id="{{$official->id}}" role="row" class="odd">
                    <td>{{$official->name}} {{$official->last_name}}</td>
                    <td>@if(!$official->collegium)
                           <p style="color:red">Null</p>
                        @else
                            {{$official->collegium->title}}
                        @endif
                    </td>
                    <td>{{ucfirst($official->municipality->name)}} </td>
                    <td>{{$official->phone}}</td>
                    <td class="actions">
                        <form id="delete-form {{$official->id}}" class="hidden" method="POST" action="{{route('official.destroy', $official->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="hidden" id="{{$official->id}}"></button>
                        </form>
                        <a data-toggle="tooltip" title="" href="#" data-original-title="{{__('Arkivo Zyrëtarin')}}" onclick="archive({{$official->id}})" class="delete on-default"><i class="fa fa-archive"></i></a>
                    </td>
                </tr>
            @empty
                <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">{{__('messages.No data available in table')}}</td></tr>
                @endforelse
            </tbody>
        </table>
                <button onclick="makePdf()" class="btn btn-Primary">{{__('messages.Print')}}</button>
            </div>

        </section>
@endsection

@section('custom_footer')
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
{{--    <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>--}}
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
				dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
				aoColumns: [
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
        function archive(id){
            $("#"+id).click();
        }
    </script>
@endsection


<script type="text/javascript">
  function makePdf(){
    var printMe = document.getElementById('datatable-editable');
    var wme = window.open("","","width:700,height:900");
    wme.document.write(printMe.outerHTML);
    wme.document.close();
    wme.focus();
    wme.print();
   setTimeout(() => {  wme.close(); }, 2000);
  }
</script>
