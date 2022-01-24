<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Instituto Clínico Chediak | Profissionais, Estrutura e Tecnologia</title>

    <meta name="keywords" content="Instituto Chediak, Chediak, Clínica em MG, clinica unai">
    <meta name="description" content="Um dos maiores institutos clínicos da região de Unaí, atendimento clínico, cirurgias e exames. Qualidade e segurança no atendimento.">
		
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
	
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/sass/style.css">
	<link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
	
</head>
<body>
	<!------------------------------------------------
	loading overlay - start
	------------------------------------------------>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
		<!------------------------------------------------
		navigation - start
		------------------------------------------------>
			<?php include 'includes/menu.php'; ?>
		<!------------------------------------------------
		navigation - end
		------------------------------------------------>
		<main class="main">
			<!------------------------------------------------
			hero slider - start
			------------------------------------------------>
			<div class="intro-slider intro-slider-1 owl-carousel owl-theme owl-nav-inside owl-light slide-animate mb-0" data-toggle="owl" data-owl-options='{
					"dots": false,
					"nav": false, 
					"responsive": {
						"1200": {
							"nav": true
						}
					}
				}'>
				<!-- 
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-2 class.
				-->
				<div class="banner intro-slide bg-section" style="background-image: url('assets/images/banner/banner-1.jpg');">
					<div class="container-fluid p-0 m-0">
						<div class="row justify-content-end">
							<div class="banner-content">
								<h1 class="banner-title">
									Estrutura de qualidade e tecnologia
								</h1>
								<p class="banner-info">
										Conforto para os pacientes com o melhor da tecnologia na área da saúde.</p>
								<div class="banner-actions">
									<a href="quem-somos.php" class="btn">
										<span>Conheça a Chediak</span>
									</a>
									<a href="contato.php" class="btn btn-secondary-color">
										<span>Entre em contato</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- 
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-2 class.
				-->
				<div class="banner intro-slide bg-section" style="background-image: url('assets/images/banner/estrutura.jpg');">
					<div class="container-fluid p-0 m-0">
						<div class="row justify-content-end">
							<div class="banner-content">
								<h1 class="banner-title">
									Conheça nossos profissionais
								</h1>
								<p class="banner-info">
									São mais de 12 especialistas preparados para te ajudar.</p>
								<div class="banner-actions">
									<a href="quem-somos.php" class="btn btn-secondary-color">
										<span>Conheça a equipe</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!------------------------------------------------
			hero slider - end
			------------------------------------------------>
			<!------------------------------------------------
			schedule section - start
			------------------------------------------------>
			<div class="bg-primary-color schedule-section">
				<div class="container">
					<div class="row position-relative">
						<img src="assets/images/demos/demo-1/puzzle/puzzle-1.png" class="puzzle pr-0 pl-0" alt="Puzzle" width="160" height="217">
						<div class="col-lg-5 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="widget">
								<h4 class="widget-title"><i class="far fa-clock"></i>Horário de funcionamento</h4>
								<p class="widget-desc">
									Rua Gerson R. Gondin - nº 380, Centro - Unaí/ MG
								</p>
								<div class="widget-hours">
									<span>Segunda — Sexta</span>
									<span class="time">08:00 — 18:00</span>
								</div>
								<div class="widget-hours">
									<span>Sábado — Domingo</span>
									<span class="time">Fechado</span></div>
							</div>
						</div>
						<div class="col-lg-5 offset-lg-1 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="widget">
								<h4 class="widget-title"><i class="far fa-heart-rate"></i>Exames e Cirurgias</h4>
								<p class="widget-desc">
									São mais de 15 exames e 6 cirurgias disponíveis.
								</p>
								<a href="#nossas-especialidades" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
									<span>Conhecer</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!------------------------------------------------
			schedule section - end
			------------------------------------------------>
			<!------------------------------------------------
			disease section - start
			------------------------------------------------>
			<div class="container disease-section" id="nossas-especialidades">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-12 col-md-8 col-sm-8 col-10">
						<h2 class="ls-n-20 text-center section-heading">Nossas especialidades</h2>
					</div>
				</div>
				<div class="blog-slider row d-flex justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<img src="assets/images/other/clinico.png" width="50px" alt="">
								</figure>
								<h4 class="card-title">Especialidades Clínicas</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Angiologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Cardiologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Clínica Médica</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Endocrinologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Neurologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Neurofisiologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Ortopedia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Endocrinologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Otorrinolaringologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Pneumologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Psiquiatria</a></li>
								</ul>
								<div class="btn-link">
									<a href="medicos.php">Conheça os profissionais</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<img src="assets/images/other/cirurgia.png" width="50px" alt="">
								</figure>
								<h4 class="card-title">Especialidades Cirúrgicas</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Cirurgia Plástica</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Microcirurgia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Cirurgia Vascular</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Microcirurgia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Traumatologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Microcirurgia</a></li>
								</ul>
								<div class="btn-link">
									<a href="medicos.php">Conheça os profissionais</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<img src="assets/images/other/multidisciplinar.png" width="50px" alt="">
								</figure>
								<h4 class="card-title">Multidisciplinar</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Fonoaudiologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Nutricionista</a></li>
								</ul>
								<div class="btn-link">
									<a href="medicos.php">Conheça os profissionais</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- EXAMES -->
				<div class="row d-flex justify-content-center">
					<div class="col-lg-12 col-md-8 col-sm-8 col-10">
						<h2 class="ls-n-20 text-center section-heading">Nossos exames</h2>
					</div>
				</div>
				<div class="blog-slider row d-flex justify-content-center">
					<div class="col-lg-5 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<img src="assets/images/other/exame.png" width="50px" alt="">
								</figure>
								<h4 class="card-title">Exames</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Fonoaudiologia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Audiometria tonal/vocal</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Imitânciometria</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Teste da orelhinha</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Teste da linguinha</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Terapias de voz, fala e disfagia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Vectoeletronistagmografia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Videoestroboscopia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Videolaringoscopia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link">Diagnóstico por imagem</a></li>
								</ul>
								<div class="btn-link">
									<a href="contato.php">Solicitar agendamento</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 col-sm-8 col-10">
						<div class="card">
							<div class="card-heading">
								<figure>
									<img src="assets/images/other/exame.png" width="50px" alt="">
								</figure>
								<h4 class="card-title">Exames</h4>
							</div>
							<div class="card-content">
								<ul class="card-menu ls-20">
									
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Ultrasom em geral (laudos emitidos na hora)</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Videonasofaringolaringoscopia</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Eletrocardiograma (ECG)</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Holter 24 horas</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> MAPA 24 horas</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Espirometria</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Eletroencefalograma (EEG)</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Polissonografia basal</a></li>
									<li class="menu-item"><i class="far fa-caret-right"></i><a href="#0!" class="item-link"> Polissonografia com titulação de CPAP</a></li>
								</ul>
								<div class="btn-link">
									<a href="contato.php">Solicitar agendamento</a><i class="far fa-caret-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- FIM EXAMES -->

			</div>
			<!------------------------------------------------
			disease section - end
			------------------------------------------------>
			<!------------------------------------------------
			types section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-3 class.
			-->
			<div class="type-section type-section-margin-bottom bg-section bg-section-3">
				<div class="container-wrapper">
					<div class="container position-relative">
						<div class="row">
							<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
								<div class="banner-content">
									<div class="banner-content-wrapper">
										<div class="banner-heading">
											<h2 class="banner-title">
												Atendimento de qualidade para todos.
											</h2>
											<p class="banner-info">Atendimento de qualidade desde a recepção até a consulta.</p>
										</div>
									</div>
									<div class="icon-boxes">
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-user-circle"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Adultos</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-baby-carriage"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Crianças</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-users"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Família</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="banner-actions">
										<a href="contato.php" class="btn btn-secondary-color btn-md">
											<span>Entre em contato</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-rating">
							<p class="card-info ls-0">
								Mais de 40 mil pacientes atendidos.
							</p>
							<div class="btn-link">
								<a href="quem-somos.php">Quem somos</a><i class="far fa-caret-right"></i>
							</div>
						</div>	
					</div>
				</div>
            </div>


			<!------------------------------------------------
			cta section - start
			------------------------------------------------>
			<!-- 
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-5 class.
			-->
			<div class="banner banner-simple cta-section cta-section-1 bg-section bg-section-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<div class="banner-heading">
									<h2 class="banner-title">Sua saúde é importante para nós</h2>
								</div>
								<div class="banner-actions">
									<a href="contato.php" class="btn btn-secondary-color">
									<span>Entre em contato</span>
								</a>
									<a href="#nossas-especialidades" class="btn">
									<span>Nossas especialidades</span>
								</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!------------------------------------------------
			cta section - end
			------------------------------------------------>
		</main>

		<?php include 'includes/footer.php'; ?>