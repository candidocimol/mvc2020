<?php

class AlunoController extends MainController{

    public function index(){
        /**Criar objeto do modelo */
        $modelo=$this->load_model("aluno");
        $alunos=$modelo->select();
        /** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
	    require PATH . '/views/aluno/index.php';
		
		require PATH . '/views/includes/footer.php';
    }

    public function add(){
        /** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
	    require PATH . '/views/aluno/form_aluno.php';
		
		require PATH . '/views/includes/footer.php';
    }

    public function salvar(){
        if(isset($_POST['aluno']['enviar'])){
            unset($_POST['aluno']['enviar']);
            /**Criar objeto do modelo */
            $modelo=$this->load_model("aluno");
        
            $array_aluno[]=$_POST['aluno'];
            if($alunos=$modelo->insert($array_aluno)){
                /**Mensagem de sucesso */
            }else{
                /**Mensagem de erro */
            }
        }

        //header("location:".HOME_URI."aluno/");
    }

}