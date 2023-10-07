<?php
	include "config.php";
	$select = "SELECT * FROM categories";
	$query = mysqli_query($config, $select);
	//Recent-Post
	$select2 = "SELECT * FROM blog ORDER BY publish_date limit 5";
    $query2 = mysqli_query($config, $select2);
?>	
<div class="col-lg-4">
			<div class="card">
				<div class="card-body d-flex right-section">
					<div id="categories">
						<h6>Categories</h6>
						<ul>
							<?php
								while($cats = mysqli_fetch_assoc($query)) { ?>
							<li>
								<a href="category.php?id= <?php echo $cats['cat_id'] ?>" class="text-success fw-bold">
									<?php echo $cats['cat_name'] ?>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				    <div id="posts">
						<h6>Recent Posts</h6>
						<ul>
							<?php
								while($post = mysqli_fetch_assoc($query2)) { ?>
							<li>
								<a href="single_post.php?id=<?php echo $post['blog_id']?>" class="text-success fw-bold"><?php echo $post['blog_title'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>