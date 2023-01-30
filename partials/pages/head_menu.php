<header class="header">
    <div class="header-top">
        <div id=logo-header>
			<img src="">
		</div>
        <div class="menu">
			<ul class="menu-main">
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> <?php endif; ?> ><a href="/?p=home.php">Home</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'projects'): ?> <?php endif; ?> ><a href="/?p=projects.php">Projects</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'scils'): ?> <?php endif; ?> ><a href="/?p=scils.php">Scills</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'testimonial'): ?> <?php endif; ?> ><a href="/?p=testimonial.php">Testimonial</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'about'): ?> <?php endif; ?> ><a href="/?p=about.php">About</a></li>
				<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'contact'): ?> <?php endif; ?> ><a href="/?p=contact.php">Contact</a></li>
				<li><a href="/login.php/">Login</a></li>
				<li><a href="/register.php/">Register</a></li>
				
				<?php  // якщо є сесія показуємо вихід
                    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
					<li><a href="/logout.php/">Logout</a></li>
					<?php } ?>
			</ul>
		</div>
    </div>
</header>