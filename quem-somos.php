<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Quem somos | Instituto Clínico Chediak</title>

    <meta name="keywords" content="Instituto Chediak, Chediak, Clínica em MG, clinica unai">
		
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
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light bg-header-image">
                <div class="container">
                    <h2 class="page-title">Conheça o Instituto Chediak</h2>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    about content - start
		    ------------------------------------------------>
            <div class="container about-primary-section">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-1 order-2">                        
                        <div class="banner-content">
                            <h3 class="banner-title">Quem somos</h3>
                            <p>O Instituto Clínico Chediak vai além de uma unidade de atendimento médico, somos um propósito de vida!
Iniciado nos primórdios dos anos de 1960 com a introdução da Família Chediak na medicina, através do mentor Dr. Laerte Chediak -in memorian 1933-2008, que se formou em Goiânia-Go, na Universidade Federal do Estado de Goiás, sendo posteriormente professor adjunto da cadeira de otorrinolaringologia do Hospital das Clínicas de Goiás. 
Lecionou ao Filho, Dr. Laerte Chediak Júnior, formado em 1982 na mesma Universidade, dando continuidade ao legado do Instituto Médico Chediak.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-2 order-1 d-lg-inline-flex justify-content-lg-end">
                        <figure>
                            <img src="assets/images/other/empresa.jpg" class="img-aside rounded-img" alt="Banner-aside" width="470" height="447">
                            <img src="assets/images/demos/demo-1/puzzle/puzzle-1.png" class="puzzle" alt="Puzzle" width="160" height="217">
                        </figure>
                    </div>
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-3">
                    <p>
					Dr. Chediak Júnior, reside em Unaí desde 14/04/1984, instituindo nesta cidade seu local de referência, constituindo família e filhos, tendo sido o primeiro otorrinolaringologista a fixar-se em Unaí.
Inicialmente trabalhou no Hospital Santa Mônica, e depois, em 1987 construiu a Clínica São Judas Tadeu, onde permaneceu de 1987-1990, sendo co-fundador da Clinor, onde atuou até o ano de 2017. 
Seus filhos: Maryana Chediak, Maryna Chediak e Laerte do Nascimento Chediak, seguiram os exemplos do avô e pai, formando-se em medicina.
Em 28 de julho de 2017, o Instituto Clínico Chediak é fundado, trazendo maior conforto, melhor infraestrutura, profissionais capacitados, aparelhos modernos e atendimento de excelência em ambiente acolhedor e familiar.

Hoje nossa unidade é composta por 14 especialidades, além de diversos exames, equipe multidisciplinar com foco no paciente e na excelência em medicina, trazendo a Unaí uma clínica a altura da cidade, com conforto, qualidade e tecnologia, aliados a uma história de uma família que ama a medicina e preza pelo crescimento da nossa querida Unaí.
					</p>   
					<h4>Somos uma família cuidando da sua, Somos Medicina por Excelência!</h4>
                            <h2 class="sign"><img src="assets/images/other/signature.png"></h2>
                        <h5 class="mb-0">Família Chediak</h5>
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
			<div class="banner banner-simple cta-section cta-section-1 bg-section bg-section-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<div class="banner-heading">
									<h2 class="banner-title">Conheça nossos<br> profissionais</h2>
								</div>
								<div class="banner-actions">
									<a href="medicos.php" class="btn btn-secondary-color">
									<span>Conhecer profissionais</span>
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
            <!------------------------------------------------
		    about content - end
		    ------------------------------------------------>
			<!------------------------------------------------
			disease section - start
			------------------------------------------------>
			<?php include 'includes/especialidades.php'; ?>
			<?php include 'includes/exames.php'; ?>
			<!------------------------------------------------
			disease section - end
			------------------------------------------------>
            			
        </main>

		<?php include 'includes/footer.php'; ?>