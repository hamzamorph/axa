@extends ('master')

@section('content')
<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 

</head>
               <div class="col-lg-11 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Vehicules</h6>
                </div>
               
                  <table class="table align-items-center table-flush" id="myTable">
                  
                </div>

                  <thead class="thead-light">
                        
                      <tr>
                     <th>immatriculation</th> 
                    <th>id_souscripteur</th>
                    <th>Type mine</th>
                    <th>combution</th>
                    <th>Edit</th>
                    <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicules ) 
                      <tr>
                     
                        <td>{{$vehicules->immatriculation}}</td>   
                      <td>{{$vehicules->id_souscripteur}}</td>  
                        <td>{{$vehicules->type_mine}}</td> 
                        <td>{{$vehicules->combution}}</td> 
                        <td>
                           <a href= "editer/{{$vehicules->id}}" class="btn btn-success">Edit </a>
                        </td>
                        <td>
                           <form action="{{url('deletevehicule/'.$vehicules->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" >Delete </button>
                           </form>
                        </td>
                        
                        
                           
                        
                        
                    
                      </tr> @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
              </div>
              <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>
 
              <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
            <script>
  $(document).ready(function () {
    $('#myTable').DataTable();
});
  </script>

               
@endsection