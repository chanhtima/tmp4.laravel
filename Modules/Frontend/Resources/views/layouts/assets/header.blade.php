<header id="header">
    <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light" >
         <a href="{{ url('/') }}"  class="beand mb-0 h1">
            <img src="{{ Module::asset('frontend:img/LOGO WYNN SEGER CORPORATION.png') }}"  class="d-inline-block align-top logo-img" width="250">
         </a>
    <button class="navbar-toggler "type="button" data-bs-toggle="collapse"data-bs-target="#navbarNav"aria-controls="navbarNar"
         aria-expanded="false"
         aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
         <div class="collapse navbar-collapse " id="navbarNav" >
            <ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll mx-auto">
                <li class="nav-item active meun topnav">
                    <a href="{{ url('/') }}"  class="nav-link active "aria-current="page">Home</a>
                </li>
                <li class="nav-item active meun topnav">
                    <a href="{{ url('about') }}"  class="nav-link ">About</a>
                </li>

                <li  class="nav-item active meun topnav">
                  <div class="dropdown">
                    <a class="nav-link" href="{{ url('/products') }}" >
                    Products  </a>
                   <button
                      class="dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                      href="{{ url('/products') }}" 
                    >
            
                    </button>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="{{ url('/productGroups') }}">Category 1</a></li>
                      <li><a class="dropdown-item" href="{{ url('/productGroups') }}">Category 2</a></li>

                      <li><a class="dropdown-item" href="{{ url('/productGroups') }}">Category 3</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item active meun topnav">
                    <a href="{{ url('newsevent') }}"  class="nav-link ">News & Event</a>
                </li>
                </li>
                <li class="nav-item active meun topnav">
                    <a href="{{ url('contactus') }}"  class="nav-link ">Contact us</a>
                </li>
            </ul>

              <div class="outerDivFull" >
                <div class="switchToggle">
                    <input type="checkbox" id="switch">
                    <label for="switch">Toggle</label>
                </div>
            </div>
                
         </div>
        </nav>
    </div>



</header>