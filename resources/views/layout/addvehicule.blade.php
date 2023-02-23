@extends ('master')

@section('content')

               <div class="col-lg-11 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter vehicule</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush" id="myTable">
                  <div class="input-group" >
                        <div class="form-outline" style="margin-left:1cm ">
                            <input onkeyup="myFunction()" type="search" id="myInput" class="form-control" placeholder="Chercher CIN" />
                        </div>
                    <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    </button>
                </div>

                  <thead class="thead-light">
                        
                      <tr>
                        <th>cin</th> 
                        <th>nom</th>
                        <th>ajouter</th>
                        <th>editer</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data ) <a href="souscripteur/{{$data->id_souscripteur}}/vehicule">
                      <tr> 
                        <td>{{$data->cin}}</td>
                        <td>{{$data->nom}}</td> 
                        <td>
                            <button  class="btn btn-sm btn-primary"
                                     onclick="window.location='souscripteur/{{$data->id_souscripteur}}/vehicule';">ajouter</button>
                        </td>
                        <td>
                            <button  class="btn btn-sm btn-primary"
                                     onclick="window.location='souscripteur/{{$data->id_souscripteur}}/editer';">editer</button>
                        </td>
                        
                        @endforeach
                        
                    
                      </tr>
                    </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>

            <script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

               
@endsection