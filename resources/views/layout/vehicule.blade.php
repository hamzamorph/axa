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
  
      <form action="/dataInsert2" method="post" enctype="multipart/form-data">
      @csrf

                   <div class="col-md-12" style="margin-top:0.5cm">
                   <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">Véhicule</h3>
                </div>
                
                <div class="card-body form-horizontal">
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <input type="hidden" value="{{$id}}"
                      id="exampleInputTypemine" name="id_souscripteur" >
                     
                  </div>
                </div>

                       
            <div class="row"> 
            <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>Marque</label>
                      <select class="form-control" name="id_marque" id="marque">
                        <option value="">marque</option>
                        @foreach ($marques as $marque)
                            <option value="{{$marque->id_marque}}">
                                {{$marque->marque}}
                            </option>
                            @endforeach
                        
                      </select>
                      @error('id_marque')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>
                  <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>Module</label>
                      <select class="form-control" name="id_module" id="module">
                      <option value="">module</option>
                        
                    
                        
                      </select>
                      @error('id_module')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>
                  </div>
                  <div class="row"> 
                  <div class="col-md-6">
                  
                    <div class="form-group">
                      <label>Type mine</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputTypemine" placeholder="Typemine" name="type_mine"  value="{{old('type_mine')}}">
                        @error('type_mine')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>

                  <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>Poids en charge</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputpidsencharge" name="poids_en_charge" placeholder="poids en charge"  value="{{old('poids_en_charge')}}">
                        @error('poids_en_charge')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>
                  </div>

                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Puissance fiscale</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="puissance_fiscale" placeholder="puissance fiscale" value="{{old('puissance_fiscale')}}">
                        @error('puissance_fiscale')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label>immatriculation</label>
                      <input type="text" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="immatriculation" placeholder="puissance fiscale" value="{{old('immatriculation')}}" >
                        @error('immatriculation')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>
                  </div>
                
                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>nombre de place</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="nombre_de_place" placeholder="puissance fiscale" value="{{old('nombre_de_place')}}">
                        @error('nombre_de_place')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>mise_en_circulation</label>
                      <input type="date" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="mise_en_circulation" placeholder="puissance fiscale" value="{{old('mise_en_circulation')}}" >
                        @error('mise_en_circulation')
                        {{$message}}
                        @enderror
                    
                    </div>
                  </div>
                  </div>
                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>cylindre</label>
                      <input type="number" data-toggle="validator"  class="form-control"
                        id="exampleInputpuissancefiscale" name="cylindre" placeholder="puissance fiscale" value="{{old('cylindre')}}">
                        @error('cylindre')
                        {{$message}}
                        @enderror
                    
                  </div></div>
                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label>Combution</label>
                      <select class="form-control" name="combution">
                        <option value="Diesel" {{ old('combution') == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                        <option value="Essence" {{ old('combution') == 'Essence' ? 'selected' : '' }}>Essence</option>
                        
                      </select>

                    </div>
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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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