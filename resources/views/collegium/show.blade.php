@extends('layouts.app')

@section('page_name', $collegium->title)

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

            <h2 class="card-title">Officials</h2>
        </header>
        <div class="card-body">

            <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                <thead>
                <tr>
                    <th>{{__('Emri')}}</th>
                    <th>{{__('Kolegjiumi')}}</th>
                    <th>{{__('Qyteti')}}</th>
                    <th>{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($collegium->officials as $official)
                    <tr data-item-id="{{$official->id}}" role="row" class="odd">
                        <td>{{$official->name}} {{$official->last_name}}</td>
                        <td>{{$official->collegium->title}}</td>
                        <td>{{$official->municipality->name}}</td>
                        <td class="actions">
                            Archive: <a href="/official/archive/{{$official->id}}"><i class="fa fa-archive"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr>
                @endforelse
                </tbody>
            </table>
            <button onclick="makePdf()" class="btn btn-Primary">Printo Listen</button>
        </div>

    </section>
@endsection

@section('custom_footer')
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>

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
