<?php
	session_start();
	require("Model/include.php");
	$theme = 0;
	$sujet = 0;
	$profil = 0;
	if(isset($_GET['theme'])) $theme = htmlspecialchars($_GET['theme']);
	if(isset($_GET['sujet'])) $sujet = htmlspecialchars($_GET['sujet']);
	if(isset($_GET['profil'])) $profil = htmlspecialchars($_GET['profil']);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Forum IC2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $path['style'].'?v='.filemtime($path['style']); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<?php include($path['header']); ?>
	<div class="general_th1 col-lg-10 px-0">
		<div class="row mx-0">
			<?php
					if($theme) include($path['contenaire_sujet_v']);
					elseif ($sujet){
						include($path['btn_message_v']);
						include($path['form_message_v']);
						include($path['sujet_message_c']);
						include($path['message_c']);
					}
					elseif ($profil) include($path['profil_c']);
					else{
						include($path['theme_c']);
						include($path['right_contenair']);
					}
				?>
		</div>
		<?php include($path['footer']); ?>
	</div>
	<script type="text/javascript" src="<?php echo $path_controller.'js/script_index.js?v='.filemtime($path_controller.'js/script_index.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $path_controller;?>js/change_theme.js?v=<?php echo filemtime($path_controller.'js/change_theme.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $path_controller;?>js/header.js?v=<?php echo filemtime($path_controller.'js/header.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $path_controller;?>js/verif_form.js?v=<?php echo filemtime($path_controller.'js/verif_form.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $path_controller;?>js/sujet.js?v=<?php echo filemtime($path_controller.'js/sujet.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $path_controller;?>js/profil.js?v=<?php echo filemtime($path_controller.'js/profil.js'); ?>"></script>
</body>

</html>
