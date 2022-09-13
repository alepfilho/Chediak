<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Instituto Clínico Chediak | Medicina por Excelência</title>

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
				<div class="banner intro-slide bg-section">
					<div class="container-fluid p-0 m-0">
						<div class="row">
							<div class="col-md-6">
								<img class="img-banner" src="assets/images/banner/banner-2.jpg">
							</div>
							<div class="col-md-6 pl-5 pr-5 d-flex align-items-center justify-content-start">
								<div class="custom-margin">
									<h1 class="banner-title">
										Medicina por Excelência
									</h1>
									<p>Conforto para os pacientes com o melhor da tecnologia na área da saúde.</p>
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
				<div class="banner intro-slide bg-section">
					<div class="container-fluid p-0 m-0">
						<div class="row">
							<div class="col-md-6">
								<img class="img-banner" src="assets/images/banner/estrutura.jpg">
							</div>
							<div class="col-md-6 pl-5 pr-5 d-flex align-items-center justify-content-start">
								<div class="custom-margin">
									<h1 class="banner-title">
										Conheça nossa equipe
									</h1>
									<p>O Instituto Clínico Chediak possui uma equipe altamente qualificada e pronta para te atender.</p>
									<a href="medicos.php" class="btn btn-secondary-color">
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
									<span class="time">Fechado</span>
								</div>
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
<?php include 'includes/especialidades.php'; ?>
			<!-- NOSSOS MÉDICOS	 -->
			<div class="banner-big bg-image image-box-slider" style="background-color: #DAE5EB">
				<div class="container position-relative">
					<div class="row">
						<div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<h2 class="banner-title">
									Médicos Especialistas
								</h2>
								<p class="banner-info">
									Com mais de 12 médicos especialistas realizando cirurgias e exames com precisão.
								</p>
								<div id="slide-medicos" class="owl-carousel owl-theme owl-nav-inside owl-imageover-6 owl-light mb-3" data-toggle="owl" data-owl-options='{
                                    "margin": 30,
                                    "dots": false,
                                    "nav": false,
                                    "loop": false,
                                    "responsive": {
                                        "576": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 2
                                        },
                                        "992": {
                                            "items": 3
                                        },
                                        "1200": {
                                            "items": 4,
                                            "nav": true
                                        }
                                    }
                                }'>
								
								<div class="icon-box covid-symptom text-center">
										<figure>
											<img src="assets/images/medicos/dr-laerte-nascimento-chediak.jpg" class="img-fluid">
										</figure>
										<div class="icon-box-content">
											<h5 class="box-title">Dr. Laerte do Nascimento Chediak</h5>
										</div>
									</div>
									<div class="icon-box covid-symptom text-center">
										<figure>
											<img src="assets/images/medicos/dra-maryna-chediak.jpg" class="img-fluid">
										</figure>
										<div class="icon-box-content">
											<h5 class="box-title">Dra. Maryna Chediak</h5>
										</div>
									</div>
									<div class="icon-box covid-symptom text-center">
										<figure>
											<img src="assets/images/medicos/dr-laerte-chediak.jpg" class="img-fluid">
										</figure>
										<div class="icon-box-content">
											<h5 class="box-title">Dr. Laerte Chediak Junior</h5>
										</div>
									</div>
									<div class="icon-box covid-symptom text-center">
										<figure>
											<img src="assets/images/medicos/dra-maryana-chediak.jpg" class="img-fluid">
										</figure>
										<div class="icon-box-content">
											<h5 class="box-title">Dra. Maryana Chediak</h5>
										</div>
									</div>

								</div>
								<div class="banner-actions text-center">
									<a href="medicos.php" class="btn btn-primary-color">
										<span>Conhecer toda a Equipe</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- FIM NOSSOS MÉDICOS -->


<?php include 'includes/exames.php'; ?>
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