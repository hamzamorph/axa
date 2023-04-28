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
  
      <form action="/update/{{$vehicules->id}}" method="post" enctype="multipart/form-data">
      @csrf

                   <div class="col-md-12" style="margin-top:0.5cm">
                   <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">Edit Véhicule</h3>
                </div>
                
                       
            <div class="row"> 
            <div class="col-md-6">
                   
                    <div class="form-group">
                      <label> choisez la nouvelle Marque de vehicule</label>
                      <select class="form-control" name="id_marque" id="marque">
                        <option value="">marque</option>
                       
                        @foreach ($marques as $marques)
                            <option value="{{$marques->id_marque}}">
                                {{$marques->marque}}
                            </option>
                            @endforeach
                        
                      </select>

                    </div>
                  </div>
                  <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>le module s'adapter avec la marque choisez </label>
                      <select class="form-control" name="id_module" id="module">
                      <option value="">module</option>
                     
                    
                        
                      </select>

                    </div>
                  </div>
                  </div>
                  <div class="row"> 
                  <div class="col-md-6">
                  
                    <div class="form-group">
                      <label>Type mine</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputTypemine" placeholder="Typemine" name="type_mine" value="{{$vehicules->type_mine}}" required>

                    </div>
                  </div>

                  <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>Poids en charge</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputpidsencharge" name="poids_en_charge" placeholder="poids en charge" value="{{$vehicules->poids_en_charge}}" required>

                    </div>
                  </div>
                  </div>

                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Puissance fiscale</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="puissance_fiscale" placeholder="puissance fiscale"value="{{$vehicules->puissance_fiscale}}" required>

                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label>immatriculation</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="immatriculation" placeholder="immatriculation" value="{{$vehicules->immatriculation}}" required>

                    </div>
                  </div>
                  </div>
                
                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>nombre de place</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="nombre_de_place" placeholder="nombre_de_place" value="{{$vehicules->nombre_de_place}}" required>

                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>mise_en_circulation</label>
                      <input type="date" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="mise_en_circulation" placeholder="mise_en_circulation" value="{{$vehicules->mise_en_circulation}}"required>

                    </div>
                  </div>
                  </div>
                  


                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>cylindre</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="cylindre" placeholder="cylindre" value="{{$vehicules->cylindre}}" required>

                   
                  </div></div>
                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label>Combution</label>
                      <select class="form-control" name="combution">
                      <option>{{$vehicules->combution}}</option>
                        <option>Diesel</option>
                        <option>Essence</option>
                        
                      </select>

                    </div>
                  </div>

                  </div>


              <div class="col-md-6">
                  
                  <div class="form-group">
                  
                    <input type="text" data-toggle="validator"  class="form-control"
                      id="exampleInputTypemine" placeholder="Typemine" name="id_souscripteur" value="{{$vehicules->id_souscripteur}}" required>

                  </div>
                </div>
             

               
                </div></div>
               


                
                <div class="card-footer " style="margin-left:2cm" >
                    <button type="submit" class="btn btn-primary " >edit</button> 
                 </div>
        </form>
        
         </section>
         <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#marque').on('change', function () {
                var id_marque = this.value;
                $("#module").html('');
                $.ajax({
                    url: "{{url('api/fetch-modules')}}",
                    type: "POST",
                    data: {
                      id_marque: id_marque,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.modules, function (key, value) {
                            $("#module").append('<option value="' + value
                                .id_module + '">' + value.module + '</option>');
                        });
                       
                    }
                });
            });
          });
          </script>
@endsection