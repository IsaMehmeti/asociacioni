
	
	@extends('layouts.app')

@section('page_name', __('Regjistro nje kolegjium'))

@section('content')
    <div class="row">
	<div class="col">
		<section class="card">
			<header class="card-header">
				

				<h2 class="card-title">{{__('Regjistro nje kolegjium')}}</h2>
			</header>
			<div class="card-body">
				<form class="form-horizontal form-bordered" method="get">
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Name of collegium in Albanian')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Name of collegium in English')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">{{__('Name of collegium in Serbian')}}</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
						</div>
					</div>

					<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">{{__('Description of collegium in Albanian')}} </label>
							<div class="col-sm-9">
								<textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">{{__('Description of collegium in English')}} </label>
							<div class="col-sm-9">
								<textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">{{__('Description of collegium in Serbian')}} </label>
							<div class="col-sm-9">
								<textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">{{__('Image of collegium')}} </label>
							<div class="col-sm-9">
								<button class="btn btn-secondary">Upload image</button>
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


