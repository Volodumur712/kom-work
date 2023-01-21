<header class="header">
    <div class="header-top">
        <div id=logo-header>
			<img src="">
		</div>
        <div class="menu">
			<ul class="menu-main">
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> <?php endif; ?> ><a href="/?p=home.php">Home</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'projects'): ?> <?php endif; ?> ><a href="/?p=projects.php">Projects</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'scills'): ?> <?php endif; ?> ><a href="/?p=scills.php">Scills</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'testimonial'): ?> <?php endif; ?> ><a href="/?p=testimonial.php">Testimonial</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'about'): ?> <?php endif; ?> ><a href="/?p=about.php">About</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'contact'): ?> <?php endif; ?> ><a href="/?p=contact.php">Contact</a></li>
				<li><a href="">Login</a></li>
			</ul>
		</div>
    </div>
</header>