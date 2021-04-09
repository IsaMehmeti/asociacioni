@extends('layouts.app')

@section('page_name', __('Kolegjiumi Mbeturinave'))

@section('custom_header')

@endsection

@section('content')

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<section class="card">
											<div class="card-body text-center">
												<div class="modal-wrapper">
													<div class="modal-icon center">
														<i class="fas fa-life-ring"></i><br>
													</div>
													<div class="modal-text">
														<h2>Kolegjiumi Mbeturinave</h2><br>
														<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.?</h4>
													</div>
												</div>
											
										

										<table class="table table-striped" id="tabela">
  <thead>
    <tr>
      <th scope="col">Qyteti</th>
      <th scope="col">Zyrtari Komunal</th>
      <th scope="col">Informata</th>
      <th scope="col">Nenshkimet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mbeturina</td>
      <td>Filan Fisteku</td>
      <td><a href="#Deçan" data-toggle="modal" data-target="#Deçan">Me shum info</a></td>
      <td>ehajdini</td>
    </tr>
    <tr>
      <td>Mbeturina</td>
      <td>Filan Fisteku</td>
      <td><a href="#Deçan" data-toggle="modal" data-target="#Deçan">Me shum info</a></td>
      <td>imehmeti</td>
    </tr>
    <tr>
      <td>Mbeturina</td>
      <td>Filan Fisteku</td>
      <td><a href="#Deçan" data-toggle="modal" data-target="#Deçan">Me shum info</a></td>
      <td>pbafit</td>
    </tr>

  </tbody>
</table>

<button onclick="makePdf()" class="btn btn-info" style="float: left;">Printo Listen</button>
</div></section>

<script type="text/javascript">
  function makePdf(){
    var printMe = document.getElementById('tabela');
    var wme = window.open("","","width:700,height:900");
    wme.document.write(printMe.outerHTML);
    wme.document.close();
    wme.focus();
    wme.print();
   setTimeout(() => {  wme.close(); }, 2000);
  }
</script>


										@endsection

@section('custom_footer')

@endsection