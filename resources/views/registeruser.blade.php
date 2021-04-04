@extends('layouts.app')

@section('page_name', __('Home'))

@section('content')
    <div class="row">
	<div class="col">
		<section class="card">
			<header class="card-header">
				

				<h2 class="card-title">{{__('Regjistro zyrtarin komunal')}}</h2>
			</header>
			<div class="card-body">
				<form class="form-horizontal form-bordered" method="get">
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Name')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Surname')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Email')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Phone')}}</label>
						<div class="col-lg-6">
							<input type="number" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2">{{__('City')}}</label>
						<div class="col-lg-6">
							<select class="form-control mb-3">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2">{{__('Collegium')}}</label>
						<div class="col-lg-6">
							<select class="form-control mb-3">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
							</select>
						</div>
					</div>
							</div>

						</div>
					</div>
<!-- Qet buton qite ne te djath se so pun me lujt ven ky -->
			<footer class="card-footer" >
				<button class="btn btn-info" >{{__('Finish register')}}</button>
			</footer>
				</form>
			</div>
		</section>
	</div>
</div>


@endsection