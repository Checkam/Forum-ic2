<div class="col d-flex flex-column mt-3">
	<div class="d-flex justify-content-between">
		<div id="btn_info_profil" class="col-4 text-center py-3 profil_th1">Informations</div>
		<div id="btn_msg_profil" class="col-4 text-center py-3 profil_th1 border-left border-right border-dark">Derniers Messages</div>
		<div id="btn_sujet_profil" class="col-4 text-center py-3 profil_th1">Derniers Sujets</div>
	</div>
	<div class="px-3 py-3 mb-3 sous_profil_th1">
		<div id="info_profil" class="row">
			<div class="col-sm-4 img_profil_1">
				<img class="img-fluid" src="https://medias.pourlascience.fr/api/v1/images/view/5a82b0e38fe56f225465fb67/wide_1300/image.jpg" />
			</div>
			<div class="col-sm-8 d-flex flex-column">
				<div class="d-flex flex-row">
					<div class="img_profil_2">
						<img class="img-fluid" src="https://medias.pourlascience.fr/api/v1/images/view/5a82b0e38fe56f225465fb67/wide_1300/image.jpg" />
					</div>
					<div class="d-flex flex-column">
						<div class="h3">
							<?php 
								echo $auteur['pseudo'];
							?>
						</div>
						<div>
							<?php 
								echo $privilege['privilege'];
							?>
						</div>
					</div>
				</div>
				<div class="info_profil_th1 pl-3 py-2 mt-1">
					<?php 
						if(isset($_SESSION['id_user']) && $id_user == $_SESSION['id_user']){
							echo $auteur['mail'];
						}
					?>
				</div>
				<div class="info_profil_th1 pl-3">
					<div class="mb-2">Statistiques</div>
					<div class="d-flex flex-row">
						<div class="text-center mr-4">
							<div>Nombre de Messages</div>
							<div>
								<?php 
									echo $nombre_msg;
								?>
							</div>
						</div>
						<div class="text-center">
							<div>Nombre de Sujets</div>
							<div>
								<?php 
									echo $nombre_sujet;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="msg_profil" style='display:none'>
			<?php 
				if($msg->rowCount()){
					//$couleur = "color: white";
					while($element = $msg->fetch()){
						include($path['message_v']);
					}
				}else{
					echo "<div class='h1 text-center'>Aucun Message</div>";
				}
			?>
		</div>
		<div id="sujet_profil" style='display:none'>
			<?php 
				if($sujet->rowCount()){
					while($element = $sujet->fetch()){
						$nb_reponse = nb_msg_by_theme_profil($bdd, $element);
						include($path['sujet_v']);
					}
				}else{
					echo "<div class='h1 text-center'>Aucun Sujet</div>";
				}
			?>
		</div>
	</div>
</div>
