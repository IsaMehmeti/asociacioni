@extends('layouts.app')

@section('page_name', __('Decani'))

@section('content')
    <!-- Modal -->

  <style type="text/css">
    .modali {
      border-style: solid;
      border-width: 1px;
      background-color: white;
    }

    .container {  
    display: grid;  
    grid-template-columns: 200px 200px 200px;  
    align-items: center;

}
  </style>

  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    
      <div class="row" style=" padding: 12px;">
      	
  <div class="col-md-6"><h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Deçan</h3></div>
  <div class="col-md-6" style="margin: 15px 0px 0px"><form action="pages-search-results.html" class="search nav-form">
            <div class="input-group">
                <input type="text" class="form-control" name="q" id="q" placeholder="Kerkoni...">
                <span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
							</span>
            </div>
        </form>
</div>
        
        
    
      </div>
      <div class="modal-body">

        <table class="table table-striped" id="tabela">
  <thead>
    <tr>
      <th scope="col">Kolegjiumi</th>
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

<button onclick="makePdf()" class="btn btn-info">Printo Listen</button>

      	
      </div>


      <div class="modal fade" id="Deçan" tabindex="-1" role="dialog" aria-labelledby="#Deçan" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Te dhenat e zyrtarit</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Kolegjiumi: <b>Mbeturina</b><br>
        Emri Mbiemri: <b>Bashkim Ramosaj</b><br>Nr i telefonit: <b>0390/361-100</b>
            <br>Nr i fax: <b>0390/361-785</b><br>Emaili: <b>bashkim.ramosaj@rks-gov.net</b>
      </div>
      <div class="modal-footer center" style="float: right;">
        <button type="button" class="btn btn-info" style="float: left;">Dergo email zyrtarit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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