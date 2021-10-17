<?php
function notice($notice){
	switch ($notice){
		case 'df_reg_200':
			return ['subject'=>'Registration Successful ', 'message'=>'Congraturalation, You have successfuly registered, Go home','button'=>' Go Home', 'link'=>'/home'];
			break;
		case 'df_reg_209':
			return ['subject'=>'Registration Unsuccesful', 'message'=>'Registration was unsuccesful, Try Again ', 'button'=>'Try Again', 'link'=>'/register'];
			break;
		case 'df_ref_201':
			return ['subject'=>'Username Already Exist', 'message'=>'You have successfuly registered, Go home','button'=>'Home', 'link'=>'/home'];
			break;
		default:
			return ['subject'=>'Oppsie', 'message'=>'seems you\'re trying to be a genius','button'=>'Go Home', 'link'=>'/home'];
		
	}
}