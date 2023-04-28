<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">



<section class="vh-100">
  <div class="container py-5 h-100">
  
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="img/logo/Emblème-AXA.jpg"
          class="img-fluid" >
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
  <!-- Email input --><h3 class="mb-5">Sign in</h3>
  <div class="form-outline mb-4">
            <input type="email" id="email"  name='email' class="form-control form-control-lg" placeholder="Email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password"  name='password' class="form-control form-control-lg"  placeholder="Password" />
           
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
           
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

         
                    </form>
                    </div>
    </div>
  </div>
</section>
                
