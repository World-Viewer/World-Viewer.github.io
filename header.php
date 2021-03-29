<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>
	<meta charset="utf-8">
	<title>WorldViewer</title>
	<meta name="description" content="Capstone 2021">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
	body {
		padding-top: 60px;
	}
</style>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand abs" href="#">WorldViewer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home Page</a></li>
			<?php if ($_SESSION['authority'] == 2){ echo '<li class="nav-item"><a class="nav-link" href="blog_post"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Post a Blog Update</a></li>';} ?>

        </ul>
        <ul class="navbar-nav ml-auto">
            <?php // Create a login/logout link:
/*
if ( (isset($_SESSION['user_id'])) && (basename($_SERVER['PHP_SELF']) != 'logout') ) {
	echo '<li class="nav-item"><a class="nav-link" href="view_user?user_id=' . $_SESSION['user_id'] . '"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> View Your Comments</a></li>';
	echo '<li class="nav-item"><a class="nav-link" href="email"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Change E-Mail</a></li>';
	echo '<li class="nav-item"><a class="nav-link" href="password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Change Password</a></li>';
	echo '<li class="nav-item"><a class="nav-link btn btn-outline-danger" href="logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>';
} else {
	echo '<li class="nav-item"><a class="nav-link" href="login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Sign In</a></li> <li class="nav-item"><a class="nav-link" href="register"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Register</a></li>';
}
*/
?>
        </ul>
    </div>

</nav>


</header>
	<main role="main" class="container">
