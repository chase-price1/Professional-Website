<?php
require __DIR__ . "/src/php/discord.php"; //!Includes Link
require __DIR__ . "/config.php"; //!Includes Link

function is_animated($image)
{
	$ext = substr($image, 0, 2);
	if ($ext == "a_")
	{
		return ".gif";
	}
	else
	{
		return ".png";
	}
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A Mess Server Features">
    <meta name="author" content="Coolbob">
    <meta http-equiv="X-US-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="src/scss/main.css">

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!--$Beginning of outreaching-->
    <!--#Outreaching to Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <title>A Mess</title>

	<style>
		.navbar {
			background-color: <?=change_navbar()?>;
			opacity: 1 !important;
		}
	</style>
</head>
<header>
        <nav class="navigation navbar navbar-expand-lg">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand">
					<?php
						// Our output here
						if(isset($_SESSION['user'])) {
							// User is logged in
							$avatar_url = "https://cdn.discordapp.com/avatars/".$_SESSION['user_id']."/".$_SESSION['user_avatar'].is_animated($_SESSION['user_avatar']);
					?>
							<img class="rounded-circle" src="<?=$avatar_url?>" alt="<?=$_SESSION['username']?>" title="<?=$_SESSION['username']?>" width="70" height="70" />
					<?php
						} else { ?>
							<img src="src/img/servericon.gif" alt="A Mess" width="70" height="70">
					<?php } ?>
					
                </a>
            </div>
        </nav>
</header>

<body>
    <main class="p-0 base">
	<?php
	// Our output here
	if(isset($_SESSION['user'])) {
		// User is logged in
		//if(isset($_SESSION['user_banner'])) $banner_url = "https://cdn.discordapp.com/banners/".$_SESSION['user_id']."/".$_SESSION['user_banner'].is_animated($_SESSION['user_banner']);	
		?>
		<div class=welcome><p><?php print_r($_SESSION['user'])?></p></div>
        <div class='text-center'><a href="src/php/logout.php"><button id="conWithDiscord" type="button" class="btn btn-outline-mess-orange btn-lg">Log Out</button></a></div> <!--//!Includes Link-->
		<div class="d-grid gap-2 d-md-flex justify-content-center p-5">
			<a href="../../../portfolio.html" class="portlink btn btn-dark btn-lg" target="_self">Go back to Portfolio</a>
		</div>
	<?php
	} else {
		// User is not logged in
		?>
        <div class="welcome container-fluid">
            <h1><span>Welcome!</span></h1>
            <h2><span>Login using your Discord account below</span></h2>
            <p><span>(If logging in with your account isn't working, reach out to Coolbob on the Discord server)</span>
            </p>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-center">
			<!--Real Link--> <a href="https://discord.com/oauth2/authorize?client_id=1220835037214150716&response_type=code&redirect_uri=https%3A%2F%2Fchasedprice.com%2Famessbeta%2Fsrc%2Fphp%2Flogin.php&scope=identify+guilds+email"><button id="conWithDiscord" type="button" class="btn btn-outline-mess-orange btn-lg">Continue with Discord</button></a>
		</div>
		<div class="d-grid gap-2 d-md-flex justify-content-center p-5">
			<a href="../portfolio.html" class="portlink btn btn-dark btn-lg" target="_self">Go back to Portfolio</a>
		</div>
		<?php
	}
	?>
	</main>
</body>