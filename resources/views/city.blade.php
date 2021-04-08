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
	
	<div class="col-lg-4" style="margin-bottom: 20px;">
	<a href="/decani" style="text-decoration: none; color: black;"><section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title">Deçan</h3>
		</div>
	</section></a>
	</div>
<!-- Modal -->
<div class="modal fade" id="Deçan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Deçan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Bashkim Ramosaj</b><br>Nr i telefonit: <b>0390/361-100</b>
          	<br>Nr i fax: <b>0390/361-785</b><br>Emaili: <b>bashkim.ramosaj@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Dragash" class="butoni">
Dragash</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Dragash" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Dragash</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Shaban Shabani</b><br>Nr i telefonit: <b>029/281-543</b>
          	<br>Nr i fax: <b>029/281-543</b><br>Emaili: <b>shaban.m.shabani@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>






	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Ferizaj" class="butoni">
Ferizaj</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Ferizaj" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Ferizaj</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Agim Aliu</b><br>Nr i telefonit: <b>0290/327-000</b>
          	<br>Nr i fax: <b>0290/327-000</b><br>Emaili: <b>agim.aliu@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>






	
	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Fushë" class="butoni">
Fushë Kosovë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Fushë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Fushë Kosovë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Burim Berisha</b><br>Nr i telefonit: <b>038/536-005</b>
          	<br>Nr i fax: <b>038/536-006</b><br>Emaili: <b>burim.i.berisha@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Gjakovë" class="butoni">Gjakovë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Gjakovë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Gjakovë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Ardian	Gjini</b><br>Nr i telefonit: <b>0390/330-183</b>
          	<br>Nr i fax: <b>0390/327-259</b><br>Emaili: <b>ardian.gjini@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Gjilan" class="butoni">Gjilan</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Gjilan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Gjilan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Lutfi Haziri</b><br>Nr i telefonit: <b>0280/320-781</b>
          	<br>Nr i fax: <b>0280/320-784</b><br>Emaili: <b>lutfi.haziri@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>






	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Gllogoc" class="butoni">Gllogoc</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Gllogoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Gllogoc</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Ramiz Lladrovci</b><br>Nr i telefonit: <b>038/584-353</b>
          	<br>Nr i fax: <b>038/584-353</b><br>Emaili: <b>ramiz.lladrovci@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Istog" class="butoni">Istog</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Istog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Istog</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Haki Rugova</b><br>Nr i telefonit: <b>039/451-219</b>
          	<br>Nr i fax: <b>039/451-223</b><br>Emaili: <b>istogu_komuna@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Kaçanik" class="butoni">Kaçanik</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Kaçanik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Kaçanik</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Besim Ilazi</b><br>Nr i telefonit: <b>0290/380-005</b>
          	<br>Nr i fax: <b>0290/380-005</b><br>Emaili: <b>besim.q.ilazi@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Kamenicë" class="butoni">Kamenicë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Kamenicë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Kamenicë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Qëndron Kastrati</b><br>Nr i telefonit: <b>0280/371-969</b>
          	<br>Nr i fax: <br>Emaili: <b>qendron@hotmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Novobërdë" class="butoni">Novobërdë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Novobërdë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Novobërdë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Svetislav Ivanovic</b><br>Nr i telefonit: <b>038/576-009</b>
          	<br>Nr i fax: <b>038/576-009</b><br>Emaili: <b>svetislav.ivanovic@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Klinë" class="butoni">Klinë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Klinë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Klinë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Zenun Elezaj</b><br>Nr i telefonit: <b>038/576-009</b>
          	<br>Nr i fax: <b>039/471-310</b><br>Emaili: <b>zenun.elezaj@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

	<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Junik" class="butoni">Junik</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Junik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Junik</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Agron Kuçi</b><br>Nr i telefonit: <b>0390/502-646</b>
          	<br>Nr i fax: <b>0390/502-646</b><br>Emaili: <b>agronkuqijunik@gmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Lipjan" class="butoni">Lipjan</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Lipjan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Lipjan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Imri Ahmeti</b><br>Nr i telefonit: <b>038/581-214</b>
          	<br>Nr i fax: <b>038/581-066</b><br>Emaili: <b>Imri.ahmeti@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Malishevë" class="butoni">Malishevë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Malishevë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Malishevë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Ragip Begaj</b><br>Nr i telefonit: <b>029/269-008</b>
          	<br>Nr i fax: <b>038/569-008</b><br>Emaili: <b>ragipi56@hotmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Mitrovicë e Jugu" class="butoni">Mitrovicë e Jugu</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Mitrovicë e Jugu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Mitrovicë e Jugu</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Agim Bahtiri</b><br>Nr i telefonit: <b>028/530-201</b>
          	<br>Nr i fax: <b>028/530-201</b><br>Emaili: <b>agim.bahtiri@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Obiliq" class="butoni">Obiliq</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Obiliq" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Obiliq</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Xhafer Gashi</b><br>Nr i telefonit: <b>038/561-322</b>
          	<br>Nr i fax: <b>038/561-322</b><br>Emaili: <b>Xhaferz.Gashi@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Pejë" class="butoni">Pejë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Pejë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Pejë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Gazmend Muhaxheri</b><br>Nr i telefonit: <b>039/434-603</b>
          	<br>Nr i fax: <b>039/434-603</b><br>Emaili: <b>gazmendmuhaxheri@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Podujevë" class="butoni">Podujevë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Podujevë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Podujevë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Agim Veliu</b><br>Nr i telefonit: <b>038/571-611</b>
          	<br>Nr i fax: <b>038/571-222</b><br>Emaili: <b>agim2veliu@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Prishtinë" class="butoni">Prishtinë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Prishtinë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Prishtinë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Shpend Ahmeti</b><br>Nr i telefonit: <b>038/245-348</b>
          	<br>Nr i fax: <b>038/231-972</b><br>Emaili: <b>shpend.ahmeti@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Rahovec" class="butoni">Rahovec</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Rahovec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Rahovec</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Smajl Latifi</b><br>Nr i telefonit: <b>029/276-943</b>
          	<br>Nr i fax: <b>029/276-943</b><br>Emaili: <b>smajl.latifi@gmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>





<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Prizren" class="butoni">Prizren</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Prizren" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Prizren</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Mytaher Huskuka</b><br>Nr i telefonit: <b>038/200-44702</b>
          	<br>Nr i fax: <b>038/200-44-700</b><br>Emaili: <b>mhuskuka@gmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Shtërpcë" class="butoni">Shtërpcë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Shtërpcë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Shtërpcë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Bratislav Nikoliq</b><br>Nr i telefonit: <b></b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>bratislav.nikolic@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Skënderaj" class="butoni">Skënderaj</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Skënderaj" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Skënderaj</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Bekim Jashari</b><br>Nr i telefonit: <b>028/582-522</b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>bekim.h.jashari@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Suharekë" class="butoni">Suharekë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Suharekë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Suharekë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Bali Muharremaj</b><br>Nr i telefonit: <b>029/271-267</b>
          	<br>Nr i fax: <b>029/271-267</b><br>Emaili: <b>bali.muharremaj@hotmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#HaniiElezit" class="butoni">Hani i Elezit</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="HaniiElezit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Hani i Elezit</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Rufki Suma</b><br>Nr i telefonit: <b></b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>rufki_suma@live.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Kllokot" class="butoni">Kllokot</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Kllokot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Kllokot</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Božidar Dejanović</b><br>Nr i telefonit: <b>0280/385-629</b>
          	<br>Nr i fax: <b>0280/385-633</b><br>Emaili: <b>bozidar.dejanovic@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Vushtrri" class="butoni">Vushtrri</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Vushtrri" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Vushtrri</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Xhafer Tahiri</b><br>Nr i telefonit: <b>028/570-601</b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>xhafer@gmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Viti" class="butoni">Viti</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Viti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Viti</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Sokol Haliti</b><br>Nr i telefonit: <b>0280/381-626</b>
          	<br>Nr i fax: <b>0280/381-626</b><br>Emaili: <b>sokol.z.haliti@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Shtime" class="butoni">Shtime</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Shtime" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Shtime</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Naim Ismajli</b><br>Nr i telefonit: <b>0290/389-009</b>
          	<br>Nr i fax: <b>0290/389-011</b><br>Emaili: <b>naimismajli@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Mamushë" class="butoni">Mamushë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Mamushë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Mamushë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Abdülhadi Krasnič</b><br>Nr i telefonit: <b>029/273-260</b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>abdulhadi.krasnic@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>









<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Graçanicë" class="butoni">Graçanicë</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Graçanicë" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Graçanicë</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Srdjan	Popovič</b><br>Nr i telefonit: <b></b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>lidija2501@hotmail.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Ranillug" class="butoni">Ranillug</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Ranillug" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Ranillug</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Vladica Aritonvič</b><br>Nr i telefonit: <b>0280/76-010</b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>aleksandar.nedeljkovic@rks-gov.net</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<div class="col-lg-4" style="margin-bottom: 20px;">
	<section class="card card-featured-left card-featured-primary ">
		<div class="card-body">
			<h3 class="title"><button type="button"  data-toggle="modal" data-target="#Partesh" class="butoni">Partesh</button></h3>
		</div>
	</section>
	</div>
	<div class="modal fade" id="Partesh" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="align-items: center;">Partesh</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Emri Mbiemri: <b>Dragan Petkovic</b><br>Nr i telefonit: <b></b>
          	<br>Nr i fax: <b></b><br>Emaili: <b>drgnpetkovic@yahoo.com</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>







</div>

</div>


@endsection