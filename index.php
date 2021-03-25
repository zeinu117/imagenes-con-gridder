

<!DOCTYPE html>
<html>
<head>
	<title>Google imagenes</title>
	
	<?php require_once "dependencias.php"; ?>
	<?php 
	require_once "contenido.php";
	$datos=contenido();
	?>
</head>
<body  class="fondo" style="color: #000000">	
	<div class="container" >
		<h1>Presentacion de imagenes tipo Google</h1>
		<h2>Caballeros del Zodiaco</h2>
		<ul class="gridder">
			<?php 
			for ($i=0; $i < count($datos) ; $i++):
				$d=explode("||", $datos[$i]);

				?>
				<li class="gridder-list" 
				data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
					<img src="<?php echo $d[0] ?>" height="300xp" width="260 xp">
				</li>

				<?php
			endfor;  
			?>
		</ul>

		<?php
			for ($i=0; $i < count($datos); $i++):
				$d=explode("||", $datos[$i]);  
		?>
			<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content" >
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php echo $d[0] ?>" class="img-responsive" />
					</div>
					<div class="col-sm-6">
						<Strong><h1 font-weight: bold><?php echo $d[1]; ?></h1></Strong>
						<strong><p font-weight: bold  class="text-justify"><?php echo $d[2]; ?></p></strong>
					</div>
				</div>
			</div>
		<?php  
			endfor;
		?>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$(".gridder").gridderExpander({
			scroll: true,
			scrollOffset: 60,
                    scrollTo: "listitem", // panel or listitem
                    animationSpeed: 100,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText: "<i class=\"fa fa-times\"></i>",
                    onStart: function () {
                    	console.log("Gridder Inititialized");
                    },
                    onContent: function () {
                    	console.log("Gridder Content Loaded");
                    	$(".carousel").carousel();
                    },
                    onClosed: function () {
                    	console.log("Gridder Closed");
                    }
                });
	});
</script>