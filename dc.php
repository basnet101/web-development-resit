<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News - Home</title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton News</h1>
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Latest Articles</a></li>
				<li><a href="#">Select Category</a>
					<ul>
						<?php 
						
							$category_list = $pdo_db_connection->prepare('select * from category');
							$category_list->execute();
							$category_list = $category_list->fetchAll();
							// executed data being fetched
							foreach($category_list as $c_row)
							{
								$c_name = $c_row['name'];
								$cat_id = $c_row['id'];
								echo '<li><a href="categories.php?id='.$cat_id.'">'.$c_name.'</a>';
							}	
						?>
					</ul>
				</li>
				<?php 
				
				//displays additional menu options if the user is admin 
				if(isset($_SESSION['login']) == true && $_SESSION['isAdmin'] == 1) { ?>
					<li><a href="adminCategories.php">Categories</a></li>'
					<li><a href="adminArticles.php">Articles</a></li>
				<?php }
				?>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />