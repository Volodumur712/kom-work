
<?php
// тут буде вибирати картинки з бази проектів і показувати користувачам

// $sql = "SELECT * FROM posts";
// if($result = $conn->query($sql)): // вибірка з масиву
// 	foreach($result as $row):  
// 		$categorySQL = "SELECT * FROM categorys WHERE id=" . $row['category_id'];
// 		$categoryResult = $conn->query($categorySQL);
// 		$category = $categoryResult->fetch_assoc();

?>

<section class="projects">
	<div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
		<div class="col-lg-6">
			<h1 class="display-5 mb-0">My Projects</h1>
		</div>
		<div class="col-lg-6 text-lg-end">
			<ul class="list-inline mx-n3 mb-0" >
				<li class="mx-4 active"><a href="/partials/pages/add-project.php"><h3>ADD Projects</h3></a></li>
				<li class="mx-3"><a href="/partials/pages/add-foto.php"><h3>ADD foto</h3></a></li>
				<li class="mx-3"><a href="/partials/pages/show-foto.php"><h3>show foto</h3></a></li>
			</ul>
		</div>
	</div>

			<div class="row g-4 portfolio-container wow" data-wow-delay="0.1s" style="position: relative; height: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-lg-4 col-md-6 portfolio-item first" style="position: absolute; left: 10px; top: 10px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/rulet.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="/assets/image/rulet.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second" style="position: absolute; left: 379px; top: 0px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/pazl.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first" style="position: absolute; left: 759px; top: 0px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/war.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second" style="position: absolute; left: 10px; top: 379px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/lem-hed.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first" style="position: absolute; left: 379px; top: 379px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/first-php.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="/assets/image/first-php.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second" style="position: absolute; left: 759px; top: 379px;">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/image/two-php.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="/assets/image/two-php.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

</section>