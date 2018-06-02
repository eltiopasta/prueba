<!DOCTYPE html>
<html lang="es">

<!-- ACA INCLUIMOS EL HEAD -->
    <?php include ("includes/head.html"); ?> 
<!---->

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="90">
	    
        <header>
        <!-- ACA INCLUIMOS EL NAV -->
		<?php include ("includes/header.html"); ?> 
		<!---->
        </header>
		
    
		<!--/ HEADER-->
		
		
		<!-- incluimos el carousel-->
			<?php include ("includes/carousel.html"); ?> 
		<!-- / FIN CAROUSEL -->
		<!---->
    <section class="capacitaciones" id="capacitaciones">
      <div class="container-fluid">
        <div class="row text-left">
			  <div class="col-lg-12 col-md-12 text-center">
				<h2>CAPACITACIONES</h2>          
			   
			  </div>
		</div>
		  
		  <div class="row capacitaciones-fondo">
			  <div class="col-md-offset-3 col-md-6">
					<div class="text-center">
						<div class="destacado">
						<p style="color:#5A9BD3;">INSCRIPCIÓN ABIERTA</p>
						<h3>Curso de Acompañante terapéutico</h3>					
						<p>Modalidad: <strong>Presencial</strong></p>						
						
						<form action="curso.php" role="form" method="get">						
							<input type="hidden" name="idCurso" value="2"/>
							<button type="submit" class="btn btn-primary center-block">- MÁS INFO -</button>					
						</form>
						
						
						</div>
					</div>
			   </div>



			  			   
			   <div class="col-md-6">
					<div class="text-center">							
						<h3><strong>Pasantías electivas</strong></h3>					
						<p>Modalidad: <strong>Presencial</strong></p>				
						
						<em>(Disponibles solo para aquellos que participen del curso de Acompañantes Terapéuticos)</em><br>
						<button href="#" type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#pasantia">- MÁS INFO -</button>	
						
						<!-- inicio Modal  -->
						<div class="modal fade" id="pasantia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<p class="modal-title" id="myModalLabel">Pasantías electivas</p>
							  </div>	
							  <div class="modal-body">
								<p>En base a la evaluación del docente, se les brindan a los alumnos prácticas acerca de cómo es el trabajo de un acompañante terapéutico. </p>
								
								<p>En cuanto se finaliza y se aprueba la cursada teórica, se inician las pasantías que tendrán una duración de entre 4 y 5 meses. Se deben cumplimentar mínimo 2 hrs semanales de pasantías. 
								Durante las pasantías los alumnos deberán participar de una reunión semanal de supervisión (día y horario a pautar durante la cursada) y se trabajará con la elaboración de informes semanales a fin de que el alumno vaya incorporando la dinámica de trabajo de un acompañante terapéutico. </p>
								
								<p>En el último mes se realiza el cierre de la pasantía en la última reunión de supervisión. Las pasantías se pautan en base a la disponibilidad horaria del alumno, ya que se ofrecerán distintas Instituciones para que elija (en diferentes zonas de Buenos Aires y con diferentes tipos de pacientes). Si el alumno quiere, puede realizar más horas de prácticas que figurarán en el certificado que se le otorgue al finalizar.</p>
								
								<p class="equipo-nombre">Es requisito fundamental concurrir a las supervisiones semanales, así como presentar los informes correspondientes, para participar de las pasantías.</p> 
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>						
							  </div>
							</div>
						  </div>
						</div>
						<!-- FIN Modal  -->
						
						 					
					</div>
			   </div>		
				
				<div class="col-md-6">
					<div class="text-center">							
						<h3>La Actividad Pericial<br> del <strong>Psicólogo en la Justicia</strong></h3>					
						<p>Modalidad: <strong>Presencial</strong></p>				
						
						 <form action="curso.php" role="form" method="get">						
							<input type="hidden" name="idCurso" value="3"/>
							<button type="submit" class="btn btn-primary center-block">- MÁS INFO -</button>						
						</form>						
					</div>
			   </div>			   
			      
				<div class="col-md-12"><hr></div>
				<div class="col-md-6">
					<div class="text-center">							
						<h3>Curso sobre Introducción a<br> la <strong>Estimulación Temprana</strong></h3>
						
						<p>Modalidad: <strong>Presencial</strong></p>
						
						<form action="curso.php" role="form" method="get">						
							<input type="hidden" name="idCurso" value="4"/>
							<button type="submit" class="btn btn-primary center-block">- MÁS INFO -</button>					
						</form>
					</div>
			   </div>	
				
				<div class="col-md-6">
					<div class="text-center">		
						<h3>Curso sobre Aplicación de la<br> <strong>Técnica Mindfulness en los distintos abordajes clínicos psicoterapeutico</strong></h3>					
						<p>Modalidad: <strong>Presencial</strong></p>						
						
						<form action="curso.php" role="form" method="get">						
							<input type="hidden" name="idCurso" value="5"/>
							<button type="submit" class="btn btn-primary center-block">- MÁS INFO -</button>					
						</form>
					
					</div>
			   </div>
			   
			   <div class="col-md-offset-3 col-md-6">
					<div class="text-center">		
						<h3>Curso breve sobre<br> <strong>Psicofarmacologia Aplicada</strong></h3>					
						<p>Modalidad: <strong>Presencial</strong></p>						
						
						<form action="curso.php" role="form" method="get">						
							<input type="hidden" name="idCurso" value="6"/>
							<button type="submit" class="btn btn-primary center-block">- MÁS INFO -</button>					
						</form>
					
					</div>
			   </div>
				
           </div>          
         
        </div>
      </div>
    </section>
	
	
    <!---->	
    <section id="servicios" class="servicios">
      <div class="container-fluid">
        <div class="row">  				
										
					<div class="row">
						<div class="col-md-12 text-center">
							 <h2>SERVICIOS</h2>  
						</div>
					</div>
						
					<div class="row servicios-fondo">
						<div class="col-md-12 text-center">							 
							 
							<h3>Acompañamientos Terapéuticos Domiciliarios y en Instituciones Educativas</h3>							
							
								<h3><strong>Atención Psicológica</strong> para niños, adultos y adultos mayores</h3>
							 									 
														
								<h3><strong>Asesoramientos</strong> y <strong>capacitación</strong> en Instituciones educativas</h3>
							 
							
								<h3><strong>Tratamientos</strong> de Psicopedagogía</h3>
							 
						
								<h3>Terapia de <strong>pareja</strong> y <strong>familia</strong></h3>
							
							
								<h3>Orientación a <strong>padres</strong></h3>
								
							
								<a href="acomp-terapeutico.php" class="btn btn-primary btn-xl btn-blanco">- MÁS INFO -</a>	
							
							
							
						</div>					
					</div> 
			</div>			 
		 </div>	         
    </section>  
    
    <!---->	
    <!---->
    <section id="quienes" class="quien" >
      <div class="container-fluid">   
		 <div class="row">        
			<div class="col-md-12 text-center"> 
				<h2>QUIENES SOMOS</h2> 
			</div>
		</div>
		 <div class="row quien-fondo">        
			<div class="col-md-12 text-center"> 
				<p>Somos un <strong>equipo</strong> de profesionales dedicados a la <strong>asistencia y formación</strong><br> 
				en <strong>Salud Mental y Discapacidad</strong> con experiencia en el abordaje de <br>
				distintos tipos de problemáticas. Consideramos al paciente como un <br>
				<strong>sujeto con derechos y posibilidades,</strong> que a pesar de las dificultades que<br>
				puede llegar a presentar, debemos valorizarlas y brindarle los apoyos<br>
				necesarios en función de su <strong>inserción e inclusión comunitaria.</strong></p>
				<hr>
				<div class="text-center">
					<a href="nosotros.php"class="btn btn-primary">- MÁS INFO -</a>
				</div>
			</div>					
		</div>
	  </div>
    </section>
    <!---->
    <!---->    
   
	<!---->
    <!---->    
	<!-- SECCION DEL LAS NOTICIAS DE INTERES -->
	<section id="notas" class="notas">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>NOTAS DE INTERÉS</h2>					
					<hr>
				</div>
				
				<div class="col-md-12 text-center">
					<?php
					include ("conexion/conexion.php");
					/////// VARIABLES/////
					$conexion = connectDB();
					$activo = '1';//los registros activos son 1
					$inactivo = '0';//los registros inactivos son 0
					/////// VARIABLES/////
					
					$registros = cargarNoticias($conexion,$activo);
					/*mysql_fetch_array recorre el vector registros para traer la consulta*/
					while($reg=mysqli_fetch_array($registros)){

							
					/*ASIGNAMOS CADA PROPIEDAD A UNA VARIABLE*/
					$idNoticia = $reg['ID'];
					$orden = $reg['Orden'];
					$titulo = $reg['Titulo'];
					$bajada = $reg['Bajada'];
					$contenido = $reg['Contenido'];
					$img = $reg ['Img'];
					$desde = $reg['Desde'];
					$hasta = $reg['Hasta'];
					$estado = $reg['Estado'];

					echo '<div class="col-md-4">
								<div class="tarjeta-noticia text-center">
									 <form action="nota.php" method="get" role="form">
									<button type="submit">
									
									<div class="row">
										<div class="col-md-12 cuadro">
											<h2>'.$titulo.'</h2>
											<hr>
											<p>'.$bajada.'</p>
										</div>
										<!-- <div class="col-md-12">
											<img src="img/noticias/'.$img.'" class="img-responsive">
										</div>-->
									</div>
									<input type="hidden" name="idNoticia" value="'.$idNoticia.'"/>
									</button></form>
								</div>
							</div>';	
						}
					
					disconnectDB($conexion);
					?>
					<hr>
				</div>
				<div class="col-md-12 text-center">
					<a href="noticiasCompletas.php"class="btn btn-primary">- VER MÁS -</a>
				</div>
				
			  </div>
			</div>
		</div>	
	</section>    
	<!---->
    <!---->    
        	  
        
    <!---->
    <!---->
	<!-- ACA INCLUIMOS EL FOOTER -->
    <?php include ("includes/footer.php"); ?> 
    <!---->
  </div>

    <!-- jQuery -->
	 <!-- jQuery -->
	 
	 <!-- activa el efecto cuando esta a  determinados px del id -->

    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


</body>

</html>
