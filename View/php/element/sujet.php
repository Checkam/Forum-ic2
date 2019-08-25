<a class="col-lg-12 p-3"  href="https://www.forum-ic2.ovh/?sujet=<?echo $element['id_sujet'];?>&page=1">
	<div class="d-flex justify-content-between align-items-center theme_th1 py-3 px-1">
		<div class="row col-12 justify-content-space-arround align-items-center">
			<img src="https://medias.pourlascience.fr/api/v1/images/view/5a82b0e38fe56f225465fb67/wide_1300/image.jpg" class="rond mr-1">
			<div class="col-8">
				<div class="text-truncate">
					<?echo $element['titre_sujet'];?>
				</div>
				<div>
					<?	
						date_texte($element['date_post']);
					?>
				</div>
				<div>
					<?echo "créer par ".$auteur['pseudo'];?>
				</div>
			</div>
			<div class="col-3">
				<div class="text-center" style="font-size:1.2em"><?echo $nb_reponse;?></div>
				<div class="text-center" style="font-size:0.8em">réponses</div>
			</div>
		</div>
		
	</div>
</a>