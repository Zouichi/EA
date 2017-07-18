<?php

if(isset($_POST['nb_enfant']) && $_POST['nb_enfant']!='') $nb_enfant=$_POST['nb_enfant'];

if(isset($_POST['nb_cred']) && $_POST['nb_cred']!='') $nb_cred=$_POST['nb_cred'];

$enfants=array();
/*$enfant=array(
	'Nom'=>'',
	'Naissance'=>'',
	'Prénom'=>''
);*/

$credits=array();

/*
	Tous mes tests rendent obligatoire la présence des champs
*/

function verification($type,$champ) // function de verification de champ
{
	switch ($type)
	{
		case "texte":
		{
			$regex="/^[a-zA-Z-]+$/";
			if(preg_match($regex,$champ)) return true;
			break;
		}
		
		case "nombre":
		{
			if(is_numeric($champ))return true;
			break;
		}
		
		case "date":
		{
			$regex="/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
			if(preg_match($regex,$champ)) return true;
			break;
		}

		case "mail":
		{
			$regex="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]+$/";
			if(preg_match($regex,$champ)) return true;
			break;
		}

		case "tel":
		{
			$regex="/^(0[1-5]|\+33\ [1-7])[0-9]{8}$/";	
			if(preg_match($regex,$champ)) return true;
			break;
		}

		default:
		{
			echo 'type inconnu';
		}
	}
	
}

function verif_enfant($nb_enfant) // function de verification des enfants
{
	$error=0;
	$error_mess='';
	for($i=0;$i<=$nb_enfant-1;$i++)
	{
		$nom_e='';
		$prenom_e='';
		$date_naissance_e='';
		
		if($i==0)
		{
			if(verification("texte",$_POST['nom_e'])) 
			{
				$nom_e=$_POST['nom_e'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ nom de l'enfant<br>";
			}

			if(verification("texte",$_POST['prenom_e'])) 
			{
				$prenom_e=$_POST['prenom_e'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ prenom de l'enfant<br>";
			}

			if(verification("date",$_POST['date_naissance_e'])) 
			{
				$date_naissance_e=$_POST['date_naissance_e'];
			}
			else
			{	
				$error=1;
				$error_mess.="Erreur sur le champ date de naissance de l'enfant<br>";
			}

			if($error==1)
			{
				echo $error_mess;
				exit();
			}
			else
			{
				$enfant=array(
				"nom"=>$nom_e,
				"prenom"=>$prenom_e,
				"naissance"=>$date_naissance_e
				);

				$enfants[0]=$enfant;
			}
			
		}
		else
		{
			if(verification("texte",$_POST['nom_e'.$i]))
			{
				$nom_e=$_POST['nom_e'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ nom de l'enfant ".$i."<br>";
			}

			if(verification("texte",$_POST['prenom_e'.$i])) 
			{
				$prenom_e=$_POST['prenom_e'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ prenom de l'enfant ".$i."<br>";
			}
			if(verification("date",$_POST['date_naissance_e'.$i])) 
			{
				$date_naissance_e=$_POST['date_naissance_e'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ date de naissance de l'enfant ".$i."<br>";
			}


			if($error==1)
			{
				echo $error_mess;
				exit();
			}
			else
			{
				$enfant=array(
				"nom"=>$nom_e,
				"prenom"=>$prenom_e,
				"naissance"=>$date_naissance_e
				);

				$enfants[$i]=$enfant;
			}
		}
		
	}

	return $enfants;
}

function verif_credit($nb_cred) // function de verification des crédits
{
	$error=0;
	$error_mess='';
	for($i=0;$i<=$nb_cred-1;$i++)
	{
		$nature_emprunt='';
		$montant_mens=0;
		$date_fin_remb='';
		$tx_cred=0;
		$capital_rest=0;
		$capital_emp=0;
		
		if($i==0)
		{
			if(verification("texte",$_POST['nature_emprunt'])) 
			{
				$nature_emprunt=$_POST['nature_emprunt'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ nature de l'emprunt<br>";
			}

			if(verification("nombre",$_POST['montant_mens'])) 
			{
				$montant_mens=$_POST['montant_mens'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ montant de la mensualité de l'emprunt<br>";
			}

			if(verification("date",$_POST['date_fin_remb'])) 
			{
				$date_fin_remb=$_POST['date_fin_remb'];
			}
			else
			{	
				$error=1;
				$error_mess.="Erreur sur le champ date de fin de remboursement de l'emprunt<br>";
			}

			if(verification("nombre",$_POST['tx_cred'])) 
			{
				$tx_cred=$_POST['tx_cred'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ taux de crédit de l'emprunt<br>";
			}

			if(verification("nombre",$_POST['capital_rest'])) 
			{
				$capital_rest=$_POST['capital_rest'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ taux de crédit de l'emprunt<br>";
			}

			if(verification("nombre",$_POST['capital_emp'])) 
			{
				$capital_emp=$_POST['capital_emp'];
			}
			else
			{
				$error=1;
				$error_mess.="Erreur sur le champ taux de crédit de l'emprunt<br>";
			}

			if($error==1)
			{
				echo $error_mess;
				exit();
			}
			else
			{
				$credit=array(
				"nature"=>$nature_emprunt,
				"mensualite"=>$montant_mens,
				"fin_remboursement"=>$date_fin_remb,
				"taux"=>$tx_cred,
				"Restant_du"=>$capital_rest,
				"emprunte"=>$capital_emp
				);

				$credits[0]=$credit;
			}
			
		}
		else
		{
			if(verification("texte",$_POST['nature_emprunt_'.$i])) 
			{
				$nature_emprunt=$_POST['nature_emprunt_'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="erreur sur le champ nature de l'emprunt ".$i."<br>";
			}

			if(verification("nombre",$_POST['montant_mens'.$i])) 
			{
				$montant_mens=$_POST['montant_mens'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="erreur sur le champ montant de la mensualité de l'emprunt ".$i."<br>";
			}

			if(verification("date",$_POST['date_fin_remb'.$i])) 
			{
				$date_fin_remb=$_POST['date_fin_remb'.$i];
			}
			else
			{	
				$error=1;
				$error_mess.="erreur sur le champ date de fin de remboursement de l'emprunt ".$i."<br>";
			}

			if(verification("nombre",$_POST['tx_cred'.$i])) 
			{
				$tx_cred=$_POST['tx_cred'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="erreur sur le champ taux de crédit de l'emprunt ".$i."<br>";
			}

			if(verification("nombre",$_POST['capital_rest'.$i])) 
			{
				$capital_rest=$_POST['capital_rest'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="erreur sur le champ taux de crédit de l'emprunt ".$i."<br>";
			}

			if(verification("nombre",$_POST['capital_emp'.$i])) 
			{
				$capital_emp=$_POST['capital_emp'.$i];
			}
			else
			{
				$error=1;
				$error_mess.="erreur sur le champ taux de crédit de l'emprunt ".$i."<br>";
			}

			if($error==1)
			{
				echo $error_mess;
				exit();
			}
			else
			{
				$credit=array(
				"nature"=>$nature_emprunt,
				"mensualite"=>$montant_mens,
				"fin_remboursement"=>$date_fin_remb,
				"taux"=>$tx_cred,
				"Restant_du"=>$capital_rest,
				"emprunte"=>$capital_emp
				);

				$credits[$i]=$credit;
			}
		}
		
	}

	return $credits;
}

function verif_civil() // function de verification des champs de l'état civil
{
	$error=0;
	$error_mess='';
	

	if(isset($_POST['situation_nationalite'])) // on vérifie en premier la nationalité
	{
		$nation=$_POST['situation_nationalite'];

		if($nation!='autres') // si le client est fr ou lux il y a un interet à remplir le formulaire
		{
			if(verification("texte",$_POST['nom']))
			{
				$nom=$_POST['nom'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur le nom <br>';
			}

			if(verification("texte",$_POST['prenom']))
			{
				$prenom=$_POST['prenom'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur le prénom <br>';
			}

			if(verification('nombre',$_POST['age']))
			{
				$age=$_POST['age'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur l\'age <br>';
			}

			if(verification('date',$_POST['date_naissance']))
			{
				$date_de_naissance=$_POST['date_naissance'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur la date de naissance <br>';
			}

			if(isset($_POST['adresse']) && $_POST['adresse']!='')
			{
				$adresse=$_POST['adresse'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur l\'adresse <br>';
			}

			if(isset($_POST['cp'])) // Le CP luxembourgeois peut contenir des lettres
			{
				$cp=$_POST['cp'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur le code postal <br>';
			}

			if(verification('texte',$_POST['ville']))
			{
				$ville=$_POST['ville'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur la ville <br>';
			}

			if(verification('mail',$_POST['mail']))
			{
				$mail=$_POST['mail'];
			}
			else
			{
				$error=1;
				$error_mess.='Erreur sur le mail <br>';
			}

			if(verification('tel',$_POST['tel_fixe']))
			{
				$tel=$_POST['tel_fixe'];
				echo $tel;
			}
		}
		else
		{
			// si le client est autres aucun interet d'enregistrer les infos
			$error=2;
			$error_mess='Le client n\'est pas dans la cible ';
		}
		
	}
	else
	{
		$error=1;
		$error_mess='Erreur sur le choix de la nationalite <br>';
	}	
		

	// analyse des erreurs et du message d'erreur à afficher et des informations que l'on renvoie
	if ($error==1) 
	{
		echo $error_mess;
		exit();
	}
	elseif ($error==2) 
	{
		echo $error_mess;
		exit();
	}
	else 
	{
		$situation_civil=array(
			'nom'=>$nom,
			'prenom'=>$prenom,
			'age'=>$age,
			'naissance'=>$date_de_naissance,
			'nationalite'=>$nation,
			'adresse'=>$adresse,
			'CP'=>$cp,
			'ville'=>$ville,
			'mail'=>$mail
		);
		return $situation_civil;
	}
	
}

?>