<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <h2>Header</h2>
    <hr>
</header>

<h1>Hello</h1>

<?php
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		the_post_thumbnail();
		the_content();
	endwhile;
endif;
?>

<footer>
    <hr>
    <h2>Footer</h2>
</footer>
</body>
</html>