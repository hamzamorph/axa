<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img src="img/logo/ima.png">
        </div>
        <div class="sidebar-brand-text mx-3 " style="color:white">Gestion Clientèle</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href={{'/'}}>
          <i class="fas fa-home"></i>
          <span>Acceuil</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      FONCTIONNALITÉS
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-address-card"></i>
          <span>Ajouter Assurant</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Etapes</h6>
            <a class="collapse-item" href={{'/add'}}>Ajoutez Souscripteur</a>
            <a class="collapse-item" href={{'/conducteur'}}>Ajoutez Conducteur</a>
            <a class="collapse-item" href={{'/addvehicule'}}>Ajoutez v</a>

            
          </div>
        </div>
        <li class="nav-item active">
        <a class="nav-link" href={{'/'}}>
          <i class="fas fa-home"></i>
          <span>Editer vehicule</span></a>
      </li>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>