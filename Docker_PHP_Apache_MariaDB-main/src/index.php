<?php 
 session_start();
 //if already logged in
 if (isset($_SESSION["id"]) && isset($_SESSION["loggedIn"])) {
	 header("Location: blog.php");
	 exit();
 }
?>
<?php require_once('./includes/head_section.php') ?>
	<!-- container - wraps whole page -->
	<div class="container">
	<!-- navbar -->
<?php include('./includes/navbar.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
		</div>
		<!-- // Page content -->
        <div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    One day your life <br> 
		    will flash before your eyes. <br> 
		    Make sure it's worth watching. <br>
			<span>~ Gerard Way</span>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
	<div class="login_div">
		<form action="login.php" method="get" >
			<h2>Login</h2>
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
</div>
		<!-- footer -->
<?php include('./includes/footer.php') ?>

	</div>
	<!-- // container -->
</body>
</html>