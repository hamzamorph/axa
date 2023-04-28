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
  
      <form action="/dataInsert1" method="post" enctype="multipart/form-data">
        
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
                        <input type="text" name="cin" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="CIN" value="{{old('cin')}}">
                        @error('cin')
                        {{$message}}
                        @enderror
                      </div>
                    </div>
                   
                    
                
                      
                     <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>NOM</label>
                        <input type="text" name="nom"data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="NOM" value="{{old('nom')}}">
                        @error('nom')
                        {{$message}}
                        @enderror
                      </div>
                    </div>
                    </div>
                    <div class="row"> 
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>PRENOM</label>
                        <input type="text" name="prenom" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="PRENOM" value="{{old('prenom')}}" >
                        @error('prenom')
                        {{$message}}
                        @enderror
                        </div>
                        </div>


                        <div class="form-group col-md-6  ">
                        <label>SEXE</label>
                        <select class="form-control" id="sexe" name="sexe">
                        <option value="homme" {{ old('sexe') == 'homme' ? 'selected' : '' }}>homme</option>
                        <option value="femme" {{ old('sexe') == 'femme' ? 'selected' : '' }}>femme</option>
                        
                        </select>
                      </div>

                      </div>
                      <div class="row"> 

                        <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label>ETAT CIVILE</label>
                        <select class="form-control" name="etat_civil">
                          <option value="MARIE" {{ old('etat_civil') == 'MARIE' ? 'selected' : '' }}>MARIE</option>
                          <option value="CELIBATAIRE" {{ old('etat_civil') == 'CELIBATAIRE' ? 'selected' : '' }}>CELIBATAIRE</option>
                          
                        </select>
                      </div>
                    </div>



                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>DATE DE NAISSANCE</label>
                        <input type="date"  name="date_de_naissance" class="form-control" id="" value="{{old('date_de_naissance')}}">
                        @error('date_de_naissance')
                        {{$message}}
                        @enderror
                        </div>
                        </div>
                        </div>
                        <div class="row"> 
                        <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>DATE DU PERMIS</label>
                        <input type="date" name="date_de_permis" class="form-control" id="" value="{{old('date_de_permis')}}">
                        @error('date_de_permis')
                        {{$message}}
                        @enderror
                        </div>
                        </div>


                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>NUMERO DU PERMIS</label>
                        <input type="text" name="num_permis"  data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="NUMERO DU PERMIS" value="{{old('num_permis')}}" >
                        @error('num_permis')
                        {{$message}}
                        @enderror
                        </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                      
                      <div class="form-group">
                 <label>CATEGORIE DU PERMIS</label>
                        <input type="text" name="categorie_permis" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="CATEGORIE DU PERMIS"  value="{{old('categorie_permis')}}">
                        @error('categorie_permis')
                        {{$message}}
                        @enderror
                        </div>
                   </div>
                      
                   </div>

                   <div class="col-md-6">
                  
                  <div class="form-group">
                    <input type="hidden" value="{{$id}}"
                      id="exampleInputTypemine" name="id_souscripteur" >

                  </div>
                </div>
                     
             </div></div>
                <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Ajouter</button>
       

           


                  
                  </div>


                
                
        </form>
         </section>
         <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>
         <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
@endsection