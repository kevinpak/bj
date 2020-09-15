<?php

class Model
{
	public function get_rows()
	{
  }
  
  /*------------------------------==Functions commande==----------------------------------*/
  public function add_rows(string $table,array $dataAdd)
	{Global $db;
    $query = $db->prepare('INSERT INTO $table(
      id,
      name_client,
      phone_client,
      adresse_client,
      nbr_gueli,
      prix_gueli,
      commande,
      prix_transport,
      somme_commande,
      avance_commande,
      type_commande,
      ville_chargee,
      commantair,
      date_commande,
      date_livraison,
      heure_livraison,
      statut
      )
      VALUES(
      "", 
      :name_client,
      :phone_client,
      :adresse_client,
      :nbr_gueli, 
      :prix_gueli,
      :commande,
      :prix_transport,
      :somme_commande,
      :avance_commande,
      :type_commande,
      :ville_chargee,
      :commantair,
      NOW(),
      :date_livraison,
      :heure_livraison,
      "en cours")
      ')or die('Error query');
  
    

  }


  public function update_rows()
	{
  }
  

  

}

?>