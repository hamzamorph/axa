@extends('master')

@section('content')
<head>


  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 
 
 
</head>
<section class="content "> 
  
      <form action="/update1/{{$contrats->id}}" method="post" enctype="multipart/form-data">
      @csrf

                   <div class="col-md-12" style="margin-top:0.5cm">
                   <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">contract</h3>
                </div>
                
                <div class="card-body form-horizontal">
               
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <input type="hidden" value="{{$contrats->id_souscripteur}}"
                      id="exampleInputTypemine" name="id_souscripteur" >

                  </div>
                </div>
 <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>date du debut</label>
                      <input type="date" data-toggle="validator"  class="form-control" value="{{$contrats->date_de_debut}}"
                        id="exampleInputpuissancefiscale" name="date_de_debut" placeholder="date_de_debut" required>

                    </div>
                  </div>
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>date du fin</label>
                      <input type="date" data-toggle="validator"  class="form-control" value="{{$contrats->date_de_fin}}"
                        id="exampleInputpuissancefiscale" name="date_de_fin" placeholder="date_de_fin" required>

                    </div>
                  </div>
                 
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>montant du prime</label>
                      <input type="text" data-toggle="validator"  class="form-control" value="{{$contrats->montant_prime}}"
                        id="exampleInputpuissancefiscale" name="montant_prime" placeholder="montant_prime" required>

                    
                  </div></div>
                
                </div></div>
               


                
                <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >edit</button>
                 </div>
        </form>
         </section>
   <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
@endsection