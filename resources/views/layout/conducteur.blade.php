@extends('master')

@section('content')

<section class="content "> 
  
      <form action="dataInsert1" method="post" enctype="multipart/form-data">
        
      @csrf
            
          <div class="col-md-12" style="margin-top:0.5cm">
            <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">CONDUCTEUR</h3>
                </div>
              
              <div class="card-body form-horizontal">
               
                 
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>LIEN AVEC SOUSCRIPTEUR</label>
                        <select class="form-control" name="lien" id="">
                          <option>LUI-MEME</option>
                          <option>AUTRE</option>
                        
                        </select>
                     
                      </div>
                    </div>
                    
                   
            
                    <div class="col-sm-9">
                      
                      <div class="form-group">
                        <label>CIN</label>
                        <input type="text" name="cin" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="CIN" required>
                    
                      </div>
                    </div>
                   
                    
                
                      
                     <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>NOM</label>
                        <input type="text" name="nom"data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="NOM" required>
                    
                      </div>
                    </div>

                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>PRENOM</label>
                        <input type="text" name="prenom" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="PRENOM" required>
                    
                        </div>
                        </div>
                        <div class="form-group col-md-5  ">
                        <label>SEXE</label>
                        <select class="form-control" id="sexe" name="sexe">
                          <option>HOMME</option>
                          <option>FEMME</option>
                        
                        </select>
                      </div>
                        <div class="col-sm-9">
                      
                      <div class="form-group">
                        <label>ETAT CIVILE</label>
                        <select class="form-control" name="etat">
                          <option>MARIE</option>
                          <option>CELIBATAIRE</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>DATE DE NAISSANCE</label>
                        <input type="date"  name="naissance" class="form-control" id="" required>
                    
                        </div>
                        </div>

                        <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>DATE DU PERMIS</label>
                        <input type="date" name="datepremis" class="form-control" id="" required>
                    
                        </div>
                        </div>


                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>NUMERO DU PERMIS</label>
                        <input type="text" name="numpermis"  data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="NUMERO DU PERMIS" required>
                    
                        </div>
                        </div>

                        <div class="col-md-9">
                      
                      <div class="form-group">
                 <label>CATEGORIE DU PERMIS</label>
                        <input type="text" name="categorie" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="CATEGORIE DU PERMIS" required>
                    
                        </div>
                   </div>
                      
                   </div>

                     
             </div></div>
                <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Ajouter</button>
       

           


                  
                  </div>


                
                
        </form>
         </section>

@endsection