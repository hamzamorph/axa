<style>
  #span{
   color:#3D5AFE;
    
   
    font-size 122px;

  }
</style>



<nav class="navbar navbar-expand  topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
             
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    
                    <div class="input-group-append">
                      
                    </div>
                  </div>
                </form>
              </div>
            </li>
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
               <strong> <span class="ml-2 d-none d-lg-inline "id="span" >AXA ASSURANCE</span></strong>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="{{url('/end')}}">
                  <i class='fas fa-sign-out-alt' style='font-size:24px'></i>
                  <strong> Logout</strong>
                </a>
                  
                </a>
              </div>
            </li>
          </ul>
        </nav>