<?php
		$connection = new mysqli("db", "root", "password", "db_blog");
		$data = $connection->query("SELECT * FROM posts");
    $row = mysqli_fetch_all($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
		<!-- navbar -->
		<div class="navbar">
			<div class="logo_div">
				<a href="index.php"><h1>LifeBlog</h1></a>
			</div>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>

        <p>Bienvenue, vous êtes connecté</p>
    <p>Vous pouvez créer un nouvel article en remplissant le formulaire ci-dessous</p>
    

<div class="post_div">
    <form action="article.php" method="get" >
        <h2>Post your article</h2>
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content"  placeholder="Your Article"> 
        <button class="btn" type="submit" name="post_btn">Post your article</button>
    </form>
</div>

<table class="minimalistBlack">
    <thead><tr>

        <th>Title</th>
        <th>Content</th>
        
    </thead>
    <tbody>
      <?php foreach ($row as $value){  ?>
      <tr>

      <td><?= $value[0] ?></td>
      <td><?= $value[1] ?></td>

     </tr>
     <?php }; ?>
    
      
    </tbody>
     </table>
</body>
</html>