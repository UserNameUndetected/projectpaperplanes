<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Paper Planes</title>

<!-- Stylesheet
    ================================================== -->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<!-- Navigation Header
	================================================ -->
<div class="header">
	<h1> Paper Planes</h1>
	<div class="nav">
		<ul>
	        <li><a href="#welkom">Homepage</a></li>
	        <li><a href="#foto">Foto's</a></li>
	        <li><a href="#evenementen">Evenementen</a></li>
	        <li><a href="#contact">Contact</a></li>
	    </ul>
	</div>
	<div class="logoPaper">
		<img src="http://localhost/planes/wp-content/uploads/2017/05/logo.png" alt="Logo Paper Planes">
	</div>
</div>

<!-- Pagina inhoud
	================================================== -->
<div class="pagina">

<!-- Pagina 1
	==================================================  -->
	<body>
		<div class="page1">
			<div id="welkom"></div>
		  <a class="welkom" class="smooth"></a>
		    <h2>Welkom op de website van Paper Planes</h2>
			    <div class="page1box">
			    	<?php dynamic_sidebar('text');?>
				</div>
			<div class="fotoHoofdPagina">
				<img src="http://localhost/planes/wp-content/uploads/2017/05/hoofdpaginaVliegtuig1.jpeg" alt="Foto van vliegtuig" style="width:80%;height:auto;">
			</div>
		</div>

<!-- Pagina 2
	================================================== -->	 
		<div id="foto"></div>
		<div class="page2">
		  <a class="foto" class="smooth"></a>
		  <h2>Foto's</h2>
			<div class="slider">
				<div class="slide1"></div>
				<div class="slide2"></div>
				<div class="slide3"></div>
				<div class="slide4"></div>
				<div class="slide5"></div>
				<div class="slide6"></div>
				<div class="slide7"></div>
				<div class="slide8"></div>
				<div class="slide9"></div>
				<div class="slide10"></div>
			</div>
			<div id="agenda"></div>
		</div>

<!-- Pagina 3
	================================================== -->		 
		<div class="page3">
		  <a class="agenda" class="smooth"></a>
		     <h2>Evenementen</h2>
		    <div class="agenda">
		   		<?php get_sidebar('primary');?>
			</div>
			<div id="evenementen"></div>
		</div>
	</div>
<!-- Pagina 4
	================================================== -->	
<?php get_footer(); ?>
<div id="contact"></div>
</body>

<!-- Scroll script
	================================================== -->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
<script>
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
</script>