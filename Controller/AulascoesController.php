<?php
namespace Controller;
use \Views\mainview;

    
class AulascoesController
{
	   
	public function index()
	{
		    $token = md5(@$_SESSION['matricula'].$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		    
		    if ($token != @$_SESSION['sessao'])
		    {
		    	\Models\HomeMolde::redirect(INCLUDE_PATH);
		    }
		    
     	    if(@$_SESSION['login_Aluno'] != true)
		    {
               \Models\HomeMolde::redirect(INCLUDE_PATH_MAIN_HOME);
		    }
	

 			if(@$_SESSION['login_Aluno'] == true )
		    {
		 	 	mainView::render('aulas.php',[],'headeraluno.php');
		 	}
		 	
		 	
	}
}
?>