<?php 
	include(DIR_HTML.'/overall/header.php');
	include(DIR_HTML.'/overall/topnav.php');
?>
	
	<jumbotron class="jumbotron jumbotron-fm jb hidden-xs hidden-sm" >
		<div class="container ">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-1"></li>
					<li class="" data-slide-to="1" data-target="#carousel-1"></li>
					<li class="" data-slide-to="2" data-target="#carousel-1"></li>
				</ol>
				<div class="carousel-inner center-block" role="listbox">
					<div class="item active">
						<img class="img-responsive" alt="Responsive image" src="views/img/portfolio/port04.jpg">
						<div class="carousel-caption hidden-xs hidden-sm">
						
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" alt="Responsive image" src="views/img/portfolio/port05.jpg">
						<div class="carousel-caption hidden-xs hidden-sm">
						</div>
					</div>
					<div class="item">
						<img class="img-responsive" alt="Responsive image" src="views/img/portfolio/port06.jpg">
						<div class="carousel-caption hidden-xs hidden-sm">
							
						</div>
					</div>
				</div>
				<!-- Controles -->
				<a href="#carousel-1" class="left carousel-control carousel-s" role="button" data-slide=prev>
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#carousel-1" class="right carousel-control carousel-s" role="button" data-slide=next>
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
	</jumbotron>
	<div class="divi hidden-sm hidden-xs"></div>
	<div class="container-fluid">
		<div class="col-md-5">
			<ol class="breadcrumb">
				<li class="active"> <span class="fa fa-home"></span> Inicio</li>
			</ol>
		</div>
	</div>
	      <!--main content start-->
      <section  class="container">
              <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>TOP PRODUCT</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 122</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="views/img/product.png" width="120">
	                      		</div>
	                      			<br>
	                      			<a class="btn btn-small btn-theme05">Ver +</a>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>TOP PRODUCT</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 122</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="views/img/product.jpg" width="190">
	                      		</div>
	                      			<br>
	                      			<a class="btn btn-small btn-theme05">Ver +</a>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	

                      	
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>TOP USER</h5>
								</div>
								<p><img src="views/img/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b>Zac Snider</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">MEMBER SINCE</p>
										<p>2012</p>
									</div>
									<div class="col-md-6">
										<p class="small mt">TOTAL SPEND</p>
										<p>$ 47,60</p>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
               </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#68dff0"
											},
											{
												value : 40,
												color : "#444c57"
											}
										];
										
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
						</div><!-- /col-md-4 -->
						
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br/>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					
       <!--</div>-->
       </section>

         <!-- **********************************************************************************************************************************************************
      Galeria
      *********************************************************************************************************************************************************** -->

       <section class="container">
          	<hr>
				<div class="row mt">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="views/img/portfolio/port04.jpg"><img class="img-responsive" src="views/img/portfolio/port04.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="views/img/portfolio/port05.jpg"><img class="img-responsive" src="views/img/portfolio/port05.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="views/img/portfolio/port06.jpg"><img class="img-responsive" src="views/img/portfolio/port06.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
				</div><!-- /row -->
	</section>

<?php
	include(DIR_HTML.'/overall/footer.php');
?>