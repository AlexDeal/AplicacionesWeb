<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Menu:</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse2">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Login
                    </a>
                    <ul class="dropdown-menu login">
                        <li>
                            <div class="row">
                                <div class="col-12">
                                    <form>                 
                                    <div>
                                        <label for="tlogin" class="label-login">Login via ?</label>
                                        <div class="btn-group">
                                        <a class="btn btn-primary btn-sm disabled" data-bs-toggle="tlogin">Usuario</a>
                                        </a>							                    	
                                        </div>                     
                                    </div>                  
                                    <br>
                                    <div>
                                        <img id="logo_img" class="img_logo" src="img/avatar.png" > 
                                    </div>
                                    <div class="form-group">                       
                                        <div style="margin-bottom: 25px" class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user fa-2x"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>                                                  
                                    </div>
                                    <div class="form-group">
                                        <div style="margin-bottom: 25px" class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock fa-2x"></i></span>                          
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="help-block"><a href="">Olvido su Contraseña ?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                        </div>                       
                                    </div>                    
                                    </form>
                                </div>              
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>