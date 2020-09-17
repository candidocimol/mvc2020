<?php
/**
 * UserController - Controller de usuários
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class UserController extends MainController
{

	/**
	 * Carrega a página "/views/user/index.php"
	 * @author Cândido Farias
	 */
    public function index() {
		// Título da página
		echo $this->title = 'User';
	} // index
	
	

    /**
	 * Carrega a página "/views/user/login.php"
	 * @author Cândido Farias
	 */
    public function login() {
		// Título da página
		$this->title = 'Login';
		/** Carrega os arquivos do view **/
		require PATH . '/views/user/login.php';
	} // login


    /**
	 * Encerra a sessão do usuário
	 * @author Cândido Farias
	 */
    public function logout() {
		unset($_SESSION['user']);
		$msg['class']="success";
		$msg['msg']="By";
		$_SESSION['msg'][]=$msg;
		header("Refresh: 5; url =".HOME_URI);
    } // logout

    /**
	 * Autentica o usuario"
	 * @author Cândido Farias
	 */
    public function autenticar() {
		//print_r($_POST);
		
		if(isset($_POST['user'])){
			$userModel=$this->load_model("user");
			$user=$userModel->autenticar($_POST['user']['email'],md5($_POST['user']['password']));
			if($user){
				$_SESSION['user']=$user[0];
				if($user[0]['coordenador']==1){
					//echo $user[0]['pessoa_id'];
					$curso=$userModel->loadCursoCoordenador($user[0]['pessoa_id']);
					if($curso){
						$_SESSION['curso']=$curso[0];
					}
				}
				$msg['class']="success";
				$msg['msg']="Login realizado com sucesso!";
				$_SESSION['msg'][]=$msg;
				
			}
			
		}
		//print_r($_SESSION);
		header("Refresh: 5; url =".HOME_URI);
	
    } // autenticar
	
} // class UserController