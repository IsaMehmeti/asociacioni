@extends('layouts.app')

@section('page_name', __('messages.Dashboard'))

@section('custom_header')

@endsection

@section('content')
    <style type="text/css">
        .butoni {
            padding: 0;
            border: none;
            background: none;
            outline: none;
            border-color: white;
            font-size: 100%;
        }

        selector:focus {
            outline: none;
        }

    </style>
    <div class="row">

        @forelse($collegiums as $collegium)
            <div class="col-md-4">
                <section class="card card-featured-left card-featured-primary mb-4">
                    {{-- <a href="{{route('collegium.show', $collegium->id)}}" style="text-decoration: none; color: black;"> --}}
                    <a href="#" style="text-decoration: none; color: black;">
                        <div onclick="openmodal({{$collegium->id}})" class="card-body">
                            <div class="widget-summary widget-summary-xlg">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div>
                                        <i class=""><img src="{{asset($collegium->image)}}" width="100" style="padding: 10px;"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div>
                                        <h3 id="title{{$collegium->id}}" class="title" style="float: left;  margin-left: 3px;">{{$collegium->title}}</h3><br>
                                        <hr style="opacity: 0%;">
                                        <div class="info">
                                                               <h3 class="amount"> {{count($collegium->officials)}}</h3>
                                                        </div>
                                        <div style="float: left;">
                                            @if($collegium->description != null)
                                                <span id="description{{$collegium->id}}" style="
  display:inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 25ch;">{{$collegium->description}}</span>
                                            @else
                                                <span id="description{{$collegium->id}}" disabled>{{__('messages.No description for this collegium')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        @empty
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <strong>{{__('messages.Sorry, No Record to show')}}. {{__('messages.Want to add')}} <a href="{{route('collegium.create')}}">{{__('messages.some?')}}</a></strong>
                </div>
            </div>
        @endforelse
    </div>


<div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <a id="modal-link" href="#" class="btn btn-primary">{{__('messages.Seemore')}}</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.Close')}}</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_footer')
<script>
    function openmodal(id){
        $("#mymodal").modal('show');
        // console.log();
        var title = $("#title"+id).html();
        var desc = $("#description"+id).html();
        var url = '/collegium/'+id;
        $(".modal-title").html(title);
        $(".modal-body").html(desc);
        $("#modal-link").attr("href", url)

    }
    // $("#collegium").on('click', function(){

    // $("modal.title").
    // });
</script>
@endsection
