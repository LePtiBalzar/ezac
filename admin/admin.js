$(document).ready(function(){
	
	//Lien pour supprimer un invit�
	
	$('.lien_suppression_invite').click(function(e){
		e.preventDefault();
		
		if(confirm("Supprimer d�finitivement cette r�servation ?")){
		
			var id_invite_selectionne = $(this).parents('.invite').find('input[name=id_invite]').val();
			$.post("ajax_supprime_invite.php", { id_invite: id_invite_selectionne },
				function(data){
				if(data == '1'){
					invite_supprime = $('#invite_' + id_invite_selectionne);
					zone_affichage_infos = $(invite_supprime).parents('.zone_reservation');
					
					$(invite_supprime).remove();
					
					var nb_places_restantes = parseInt($(zone_affichage_infos).find('.nb_places_restantes').html()) + 1;
					var nb_places_prises = parseInt($(zone_affichage_infos).find('.nb_places_prises').html()) - 1;
					
					$(zone_affichage_infos).find('.nb_places_restantes').html(nb_places_restantes)
					$(zone_affichage_infos).find('.nb_places_prises').html(nb_places_prises)
				}
			});
			
		}
	});
	
	//Lien pour supprimer un h�bergement
	
	$('.lien_suppression_hote').click(function(e){
		e.preventDefault();
		
		if(confirm("Supprimer d�finitivement cet h�bergement, et toutes les r�servations qui y sont rattach�es ?")){
		
			var id_hote_selectionne = $(this).parents('.proposition').find('input[name=id]').val();
			$.post("ajax_supprime_hote.php", { id_hote: id_hote_selectionne },
				function(data){
				if(data == '1'){
					hote_supprime = $('#proposition' + id_hote_selectionne);
					$(hote_supprime).remove();
				}
			});
			
		}
	});
	
});