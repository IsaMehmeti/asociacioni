@extends('layouts.app')

@section('page_name', __('Kolegjiumet'))

@section('custom_header')

@endsection

@section('content')
<section class="card">
											<div class="card-body text-center">
												<div class="modal-wrapper">
													<div class="modal-icon center">
														<i class="fas fa-life-ring"></i>
													</div>
													<div class="modal-text">
														<h2>Kolegjiumi Nr.1</h2><br><br>
														<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.?</h4>
													</div>
												</div>
											</div>
											<footer class="card-footer">
												<div class="row">
													<div class="col-md-6 center">
															<a href="/collegumspage">Shfaq Me Shume</a>
													</div>
													<div class="col-md-6 center">
														<button type="button" class="btn btn-secondary" data-dismiss="modal" style="align-items: center;">Mbyll</button>
													</div>
												</div>
											</footer>
										</section>


										@endsection

@section('custom_footer')

@endsection