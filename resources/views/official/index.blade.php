@extends('layouts.app')

@section('page_name', __('messages.Officials'))

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

                <h2 class="card-title">{{__('messages.Officials')}}</h2>
            </header>
            <div class="card-body">

                <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>{{__('messages.Emri')}}</th>
                        <th>{{__('messages.Kolegjiumi')}}</th>
                        <th>{{__('messages.Qyteti')}}</th>
                        <th>{{__('messages.Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($officials as $official)
                        <tr data-item-id="{{$official->id}}" role="row" class="odd">
                            <td>{{$official->name}} {{$official->last_name}}</td>
                            <td>@if(!$official->collegium)
                                   <p style="color:red">Null</p>
                                @else
                                    {{$official->collegium->title}}
                                @endif
                            </td>
                            <td>{{ucfirst($official->municipality->name)}}</td>
                            <td class="actions">
                                <form method="POST" action="{{route('official.destroy', $official->id)}}">
                                    @csrf
                                    @method('delete')
                                <input type="submit" class="btn btn-success" value="{{__('messages.Archive')}}"/>
                                </form>
                                </td>
                        </tr>
                    @empty
                        <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">{{__('messages.No data available in table')}}</td></tr>
                        @endforelse
                    </tbody>
                </table>
                <button onclick="makePdf()" class="btn btn-Primary">{{__('messages.Printo Listen')}}</button>
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



