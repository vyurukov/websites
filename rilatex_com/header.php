<?php  $page = get_filename($_SERVER['PHP_SELF']); ?>
<!-- start header -->
	<div class="header_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="h_right">
					<!--start menu -->
					<ul class="menu">
                        <li <?php echo($page == 'index.php'? 'class="active"' : ''); ?>><a href="index.php">UNTERNEHMEN</a></li> |
						<li <?php echo($page == 'about.php'? 'class="active"' : ''); ?>><a href="about.php">ÜBER UNS</a></li> |
                        <li <?php echo($page == 'production.php'? 'class="active"' : ''); ?>><a href="production.php">PRODUKTION</a></li> |
						<li <?php echo($page == 'gallery.php'? 'class="active"' : ''); ?>><a href="gallery.php">GALERIE</a></li> |
						<li <?php echo($page == 'contact.php'? 'class="active"' : ''); ?>><a href="contact.php">KONTAKTE</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="top-nav">
					<nav class="clearfix">
						<ul>
							<li <?php echo($page == 'index.php'? 'class="active"' : ''); ?>><a href="index.php">UNTERNEHMEN</a></li>
							<li <?php echo($page == 'about.php'? 'class="active"' : ''); ?>><a href="about.php">ÜBER UNS</a></li>
                            <li <?php echo($page == 'production.php'? 'class="active"' : ''); ?>><a href="production.php">PRODUKTION</a></li>
							<li <?php echo($page == 'gallery.php'? 'class="active"' : ''); ?>><a href="gallery.php">GALERIE</a></li>
							<li <?php echo($page == 'contact.php'? 'class="active"' : ''); ?>><a href="contact.php">KONTAKTE</a></li>
						</ul>
						<a href="#" id="pull">Menu</a>
					</nav>
				</div>
			</div>
		</div>
	</div>