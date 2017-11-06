<body>
	<header class="">
		<nav class="navbar navbar-inverse navbar-static-top navs " role="navigation">
			<div class="container navsb ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar/Ocultar</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand hidden-sm hidden-lg hidden-md "><span class="nav-text text-center">Sophia</span><span class="small">Style</span></a>
				</div>
				<div class="collapse navbar-collapse row" id="navegacion-fm">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="#" class="menu-s"><span class="span-s"></span><span>Tendencias <span class="icon icon-tags"></span></span></a></li>
						<li><a href="#" class="menu-s"><span class="span-s"></span><span>Masculina <span class="icon icon-mars"></span></span></a></li>
						<li><a href="#" class="menu-s"><span class="span-s"></span><span>Femenina <span class="icon icon-venus"></span></span></a></li>
					</ul>
					<div class="nav navbar-nav navbar-right navd">
					<ul class="nav navbar-nav">
						<li class="hidden-xs"><a href="#" class="btn btn-link menu-s"><span class="span-s"></span><span class="icon icon-facebook iconnav-s"></span></a></li>
						<li class="hidden-xs"><a href="#" class="btn btn-link menu-s"><span class="span-s"></span><span class="icon icon-twitter iconnav-s"></span></a></li>
						<li class="hidden-xs"><a href="#" class="btn btn-link menu-s"><span class="span-s"></span><span class="icon icon-instagram iconnav-s"></span></a></li>
						<li class="dropdown"><a data-toggle="dropdown" href="#" class="btn btn-link menu-s dropdown-toggle"><span class="span-s"></span><span class="icon icon-user iconnav-s"></span></a>

							<!-- inbox dropdown start-->
                        <ul class="dropdown-menu extended inbox position-user">
                            <div class="notify-arrow notify-arrow-green"></div>
                            		<?php 
                            			if (!isset($_SESSION['app_id'])) {
                            				echo 
                            			' <li>
			                                <p class="green">Usuario</p>
			                            </li>
			                            <li>
			                                <a href="#">
			                                    <span class="photo"><img alt="avatar" class="img-circle" src="views/img/user.jpg"></span>
			                                    <h3>Usuario</h3>
			                                    <span class="subject"> Usuario
			                                    <span class="from"></span>
			                                    </span>
			                                    <!--<span class="message">
			                                        Hi mate, how is everything?
			                                    </span>-->
			                                </a>
			                            </li>
			                            <li>
			                            	<div id="_AJAX_LOGIN_">
				                            	
			                            	</div>
                            			<div class="form-panel" onkeypress="runLogin(event)">
		                                	<div class="form-group ">
												<label class="control-label sr-only" for="user_login">Usuario/Email</label>
												<input class="form-control input-form" id="user_login" type="text" placeholder="Usuario/Email">
											</div>

											<div class="form-group">
												<label class="control-label sr-only" for="pass_login">Clave</label>
												<input class="form-control input-form" id="pass_login" type="password" placeholder="Clave">
											</div>
											<div class="form-group">
												<a href="#lostPass" class="btn btn-sophia2" data-toggle="modal" ><span>Olvide mi Clave</span></a>
											</div>
											<div class="form-group">
												<input type="checkbox" name="remenber_login" id="remenber_login"><span>Recordarme</span></a>
											</div>
				                            <div class="form-group">
				                            	<button class=" btn btn-sophia" onclick="goLogin()">Entrar</button>
												<button href="#modalReg" data-toggle="modal" class=" btn btn-default btn-sophia2">Registrarme</button>
											</div>
	                            		</div>';
                            			}else{
                            				echo
                            				'
                            				 <li>
				                                <p class="green">Usuario</p>
				                            </li>
				                            <li>
				                                <a href="?view=perfil&id'.$_SESSION['app_id'].'">
				                                    <span class="photo"><img alt="avatar" class="img-circle" src="views/img/user.jpg"></span>
				                                    <h3>'.strtoupper($users[$_SESSION['app_id']]['user']).'</h3>
				                                    <span class="subject"> Administrador
				                                    <span class="from"></span>
				                                    </span>
				                                    <!--<span class="message">
				                                        Hi mate, how is everything?
				                                    </span>-->
				                                </a>
				                            </li>
				                            <li>
				                            
												<a href="#lostPass" class="btn btn-sophia2" data-toggle="modal" ><span>Ajustes</span></a>
											</li>
											<li>
												<button class=" btn btn-sophia" onclick="closeSession()">Cerrar</button>
											'
                            			;
                            			}
                            		?>
                            		
                            </li>
                          	<li>
                          	</li>
                        </ul>
                    </li>

                    <!-- inbox dropdown end -->
                    <script src="views/app/js/login.js"></script>
                    <script type="text/javascript">
                    	

                    </script>

						<li>

						
							<form class="navbar-form buscar-s" action="" role="search">
								<div class="form-group " >
									<div class="input-group buscar-3" >
										<input class="form-control text-1" type="text" name="buscar" placeholder="Buscar">
										<span class="input-group-btn ">
											<a class="btn btn-default form-control buscar-1 " href="#"> <span class="glyphicon glyphicon-search "></span> </a>
										</span>
									</div>
								</div>
							</form>
						</li>
					</ul>
					</div>
					<div class="cuerpo-logo hidden-xs ">
						<div class="hover-logo ">
							<a href="#" class="logo "><img class="fondo-logo" src="views/img/Sophia.png">	</a>
						</div>
					</div>

					<?php 
						if (!isset($_SESSION)) {
							include('html/public/reg.php'); 
							include('html/public/lostpass.php'); 
						}
						
					?>
				</div>
			</div>
		</nav>
	</header>
	<script type="text/javascript" src="views/app/js/login.js"></script>