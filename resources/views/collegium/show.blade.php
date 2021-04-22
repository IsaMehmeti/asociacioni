@extends('layouts.app')

@section('page_name', $collegium->title)

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('content')
    <section class="card col-md-8 card-dark m-auto {{ $headships->count() == 0 ? 'card-collapsed' : '' }}">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
        </div>

        <h2 class="card-title">{{__('Kryesia -')}} {{$headships->count()}}</h2>

        @if($headships->count() == 0)
        <p class="card-subtitle">{{__('messages.No data available in table')}}</p>
        @endif
    </header>
    <div class="card-body">
        <table class="table table-responsive-md mb-0">
            <thead>
                <tr>
                <th>{{__('messages.Emri')}}</th>
                <th>{{__('messages.Kolegjiumi')}}</th>
                <th>{{__('messages.Qyteti')}}</th>
                <th>{{__('messages.Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                 @forelse($headships as $headship)
                <tr data-item-id="{{$headship->id}}" role="row" class="odd">
                    <td>{{$headship->name}} {{$headship->last_name}}</td>
                    <td>@if(!$headship->collegium)
                           <p style="color:red">Null</p>
                        @else
                            {{$headship->collegium->title}}
                        @endif
                    </td>
                    <td>{{ucfirst($headship->municipality->name)}}</td>
                    <td class="actions">
                        <form id="head-form {{$headship->id}}" class="hidden" method="POST" action="{{route('removeFromHeadship', $headship->id)}}">
                            @csrf
                            @method('Patch')
                            <button type="submit" class="hidden" id="hr{{$headship->id}}"></button>
                        </form>
                        <a data-toggle="tooltip" title="" href="#" data-original-title="{{__('Largo nga Kryesia')}}" onclick="headshipRemove({{$headship->id}})" class="delete on-default"><i  class="fa fa-user-times"></i></a>
                    </td>
                </tr>
                @empty
                    <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">{{__('messages.No data available in table')}}</td></tr>
                    @endforelse
            </tbody>
        </table>
    </div>
</section>
    <section class="card">

        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>

            <h2 class="card-title">{{__('messages.Officials')}} - {{count($collegium->officials)}}</h2>
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
                @forelse($collegium->officials as $official)
                    <tr data-item-id="{{$official->id}}" role="row" class="odd">
                        <td>{{$official->name}} {{$official->last_name}}</td>
                        <td>{{$official->collegium->title}}</td>
                        <td>{{ucfirst($official->municipality->name)}}</td>
                        <td class="actions">
                        <form id="delete-form {{$official->id}}" class="hidden" method="POST" action="{{route('official.destroy', $official->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="hidden" id="{{$official->id}}"></button>
                        </form>
                        <form id="head-form {{$official->id}}" class="hidden" method="POST" action="{{route('addToHeadShip', $official->id)}}">
                            @csrf
                            @method('Patch')
                            <button type="submit" class="hidden" id="h{{$official->id}}"></button>
                        </form>
                        <a data-toggle="tooltip" title="" href="#" data-original-title="{{__('Arkivo Zyrëtarin')}}" onclick="archive({{$official->id}})" class="delete on-default"><i class="fa fa-archive"></i></a>
                        @if(!$official->isOnHeadShip())
                            <a data-toggle="tooltip" title="" href="#" data-original-title="{{__('Shto ne Kryesi')}}" onclick="headship({{$official->id}})" class="delete on-default"><i  class="fa fa-user-plus"></i></a>
                        @endif
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
    <script>

        function archive(id){
            $("#"+id).click();
        }
        function headship(id){
            $("#h"+id).click();
        }
        function headshipRemove(id){
            $("#hr"+id).click();
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
