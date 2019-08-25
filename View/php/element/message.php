<div class="col-lg-12 p-3">
	<div class="d-flex align-items-center theme_th1">
		<div class="d-flex flex-column align-items-center col-12 p-0">
			<div class="row justify-content-between col-12 p-3">
				<div class="row align-items-center">
					<img src="https://medias.pourlascience.fr/api/v1/images/view/5a82b0e38fe56f225465fb67/wide_1300/image.jpg" class="rond mx-2">
					<span style="<?php echo $couleur;?>" class="mx-2"><?php echo $auteur['pseudo'];?></span>
				</div>
				<div class="row align-items-center mx-2">
					<span><?php  date_texte($element['date_post']);?></span>
				</div>
            </div>
            <div class="col-12 p-0">
				<div class="theme2_th1 p-2 word text-justify">
					<?php  echo str_replace("\n", "<br/>", $element['texte']);?>
				</div>
				<div>
					<?php //echo $sujet['date_post'];?>
				</div>
			</div>

		</div>
		<!--<div style="font-size:0.8em">réponse : 13</div>-->
	</div>
</div>
