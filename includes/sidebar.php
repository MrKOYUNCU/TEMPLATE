
<aside id="aside" class="col-md-4">
                    
                    <div class="widget">
						<div class="widget-search">
							<input class="search-input form-control" type="text" placeholder="Search">
							<button class="search-btn" type="button"><i class="fas fa-search"></i></button>
						</div>
					</div>
					<!-- /Search -->
                    
                    
					<!-- Category -->
					<div class="widget">
						<h3 class="mb-3">Categories</h3>
						<div class="widget-category">
						<?php
						
						$k=0;
						$sql_query="SELECT*FROM categories";
						$select_all_categories = mysqli_query($conn,$sql_query);
						while($row = mysqli_fetch_assoc($select_all_categories)){
						$k++;
						}
						echo	"<a href='blog.php'>ALL<span>({$k})</span></a>";
						?>
						
						


						<?php 
						
						$k=0;
						$sql_query="SELECT*FROM categories";
						$select_all_categories = mysqli_query($conn,$sql_query);
						while($row = mysqli_fetch_assoc($select_all_categories)){
							$category_name= $row["category_name"];
							$category_query = "SELECT * FROM posts WHERE post_category = '$category_name'";
							$send_cat_num = mysqli_query($conn,$category_query);
							$cats_num = mysqli_num_rows($send_cat_num);
							
							
							echo "<a href='category.php?selectcat=$category_name'>{$category_name}<span>({$cats_num})</span></a>";
						$k++;
						}
						
						?>
					

							<!-- <a href="#">Web Design<span>(7)</span></a>
							<a href="#">Marketing<span>(142)</span></a>
							<a href="#">Web Development<span>(74)</span></a>
							<a href="#">Branding<span>(60)</span></a>
							<a href="#">Photography<span>(5)</span></a> -->
						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
					<div class="widget">
						<h3 class="mb-3">Latest Posts</h3>

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img class="img-fluid" src="./img/post1.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img src="./img/post2.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->


						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<img src="./img/post3.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

				</aside>