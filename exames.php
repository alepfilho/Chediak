<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Nossos Exames | Instituto Clínico Chediak</title>
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
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Exames que o Instituto Clínico Chediak realiza</h2>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    doctor list - start
		    ------------------------------------------------>
			<?php include 'includes/exames.php'; ?>
            <!------------------------------------------------
		    doctor list - end
		    ------------------------------------------------>

        </main>
        <!------------------------------------------------
		footer - start
		------------------------------------------------>

		<?php include 'includes/footer.php'; ?>