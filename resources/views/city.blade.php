@extends('layouts.app')

@section('page_name', __('Qytetet'))

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
selector:focus {outline: none;}
    </style>

<div class="container">
<div class="row">

	@foreach($cities as $city)
  <div class="col-lg-4" style="margin-bottom: 20px;">
	<a href="{{url('/officials/'.$city->name.'')}}" style="text-decoration: none; color: black;">
        <section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title">{{ucfirst($city->name)}}</h3>
		</div>
	</section></a>
	</div>
  @endforeach
</div>

</div>


@endsection
