@extends('master')

@section('content')
<head>
<link href="public/img/logo/ima.png" rel="icon">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 
 
</head>
<section class="content "> 
  
      <form action="/update2/{{$conducteurs->id}}" method="post" enctype="multipart/form-data">
        
      @csrf
            
          <div class="col-md-12" style="margin-top:0.5cm">
            <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">CONDUCTEUR</h3>
                </div>
              
              <div class="card-body form-horizontal">
               
                 
              <div class="row"> 
            
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label>CIN</label>
                        <input type="text" name="cin" data-toggle="validator" data-minlength="6" class="form-control" id="" value="{{$conducteurs->cin}}" placeholder="CIN" required>
                    
                      </div>
                    </div>
                   
                    
                
                      
                     <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>NOM</label>
                        <input type="text" name="nom"data-toggle="validator" data-minlength="6" class="form-control" id="" value="{{$conducteurs->nom}}" placeholder="NOM" required>
                    
                      </div>
                    </div>
                    </div>
                    <div class="row"> 
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>PRENOM</label>
                        <input type="text" name="prenom" data-toggle="validator" data-minlength="6" class="form-control" id="" value="{{$conducteurs->prenom}}" placeholder="PRENOM" required>
                    
                        </div>
                        </div>
                        <div class="form-group col-md-6  ">
                        <label>SEXE</label>
                        <select class="form-control" id="sexe" name="sexe">
                        <option>{{$conducteurs->sexe}}</option>
                          <option>HOMME</option>
                          <option>FEMME</option>
                        
                        </select>
                      </div>
                      </div>
                      <div class="row"> 
                        <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label>ETAT CIVILE</label>
                        <select class="form-control" name="etat_civil">
                        <option>{{$conducteurs->etat_civil}}</option>
                          <option>MARIE</option>
                          <option>CELIBATAIRE</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>DATE DE NAISSANCE</label>
                        <input type="date"  name="date_de_naissance" class="form-control" id="" value="{{$conducteurs->date_de_naissance}}" required>
                    
                        </div>
                        </div>

                        </div>
                        <div class="row"> 

                        <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>DATE DU PERMIS</label>
                        <input type="date" name="date_de_permis" class="form-control" id="" value="{{$conducteurs->date_de_permis}}" required>
                    
                        </div>
                        </div>




                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>NUMERO DU PERMIS</label>
                        <input type="text" name="num_permis"  data-toggle="validator" data-minlength="6" class="form-control" id="" value="{{$conducteurs->num_permis}}" placeholder="NUMERO DU PERMIS" required>
                    
                        </div>
                        </div>

                        </div> 

                        <div class="col-md-6">
                      
                      <div class="form-group">
                 <label>CATEGORIE DU PERMIS</label>
                        <input type="text" name="categorie_permis" data-toggle="validator" data-minlength="6" class="form-control" id="" value="{{$conducteurs->categorie_permis}}" placeholder="CATEGORIE DU PERMIS" required>
                    
                        </div>
                   </div>
                      
                   </div>

                   <div class="col-md-6">
                  
                  <div class="form-group">
                    <input type="hidden" value="{{$conducteurs->id_souscripteur}}"
                      id="exampleInputTypemine" name="id_souscripteur" >

                  </div>
                </div>
                     
             </div></div>
                <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Editer</button>
       

           


                  
                  </div>


                
                
        </form>
         </section>
         <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>
         <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
@endsection