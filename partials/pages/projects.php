
<?php
// тут буде вибирати картинки з бази проектів і показувати користувачам

// $sql = "SELECT * FROM posts";
// if($result = $conn->query($sql)): // вибірка з масиву
// 	foreach($result as $row):  
// 		$categorySQL = "SELECT * FROM categorys WHERE id=" . $row['category_id'];
// 		$categoryResult = $conn->query($categorySQL);
// 		$category = $categoryResult->fetch_assoc();

/* 
1, зробити посилання на лайк (окрема сторінка, на неї з допом аякс)
2, зробити перевірку чи є запис в бд з даним постом і корист
якщо є то видаляти лайк
інакше додавати запис і додавати що запис створено
*/
?>
<section class="projects">
    <div class="row">
        <div class="col-md-4">
            <h1>My Projects</h1>
        </div>
        <div class="col-md-4">
            <a href="/partials/pages/add-project.php"><h3>ADD Projects</h3>
        </div>
    </div>
<div class="col-md-4">
    <div class="blog-entry ftco-animate">
		<a href="#" class="img img-2" style="background-image: url(<?php //echo $row['preview']; ?>);"></a>
		<div class="text text-2 pt-2 mt-3">
			<span class="category mb-3 d-block"><a href="#"><?php //echo $category['title']; ?></a></span>
	        <h3 class="mb-4"><a href="#"><?php //echo $row['title']; ?></a></h3>
	        <p class="mb-4"><?php //echo $row['description']; ?></p>
	        <div class="author mb-4 d-flex align-items-center">
	            <a href="https://www.google.com/search?q=Virtual+person" target="_blank" class="img" style="background-image: url(assets/images/person_2.jpg);"></a>
	            	<div class="ml-3 info">
	            		<span>Written by</span>
	            		<h3><a href="https://www.google.com/search?q=Virtual+person" target="_blank">Virtual person</a>, <span><script>document.write(new Date().getDate());</script>,<script>document.write(new Date().getMonth());</script>,<script>document.write(new Date().getFullYear());</script></span></h3>
	            	</div>
	        </div>
	        <div class="meta-wrap align-items-center">
	            <div class="half order-md-last">
		            <p class="meta">

							<?php 
							//$likessql = 'SELECT count(*) as total FROM user_post_likes WHERE post_id=' . $row['id'];
							//$resultLike = $conn->query($likessql);

							//$resultUserLike = null;

							// if(isset($_COOKIE['user'])) { // це якщо користувач уже лайкав
							// 	$likeUserSql = 'SELECT count(*) as total FROM user_post_likes WHERE post_id=' . $row['id'] AND 'user_id=' . $_COOKIE['user'];
							// 	$resultUserLike = $conn->query($likessql);
							// }
							?>

		              		<span class="likeBtn
							<?php
							// if(isset ($resultUserLike) && $resultUserLike->fetch_assoc()['total'] > 0) {
							// 	echo "liked";
							// }
							?>
							" data-id="<?php echo $row['id']; ?>"><i class="icon-heart"></i><p><?php
		              		// echo $resultLike->fetch_assoc()['total'] ?></p></span>
		            </p>
	            </div>
	              	<div class="half">
		              	<p><a href="#" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
	              	</div>
	        </div>
	    </div>
	</div>
</div>

<?php
	//endforeach;
//endif;
?>

        <div class="col-md-4">
            <a href="/partials/pages/edit-project.php"><h5>Edit Projects</h5>
        </div>

<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
						<div class="col-md-4">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(assets/images/1.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 01</h3>
									<span>Technology</span>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(assets/images/image_2.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 02</h3>
									<span>Nature</span>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(assets/images/image_11.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 11</h3>
									<span>Fashion</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(assets/images/image_12.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 12</h3>
									<span>Photography</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

</section>