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
        $aluno['id']='';
        $aluno['nome']='';
        $aluno['matricula']='';
        $aluno['data_nascimento']='';

        /** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
	    require PATH . '/views/aluno/form_aluno.php';
		
		require PATH . '/views/includes/footer.php';
    }

    public function salvar(){
        if(isset($_POST['aluno']['enviar'])){
            /**Remove o campo do POST */
            unset($_POST['aluno']['enviar']);
            /**Criar objeto do modelo */
            $modelo=$this->load_model("aluno");
        
            if(!empty($_POST['aluno']['id'])){
                $acao="update";
            }else{
                $acao="insert";
            }
            
            if($alunos=$modelo->{$acao}($_POST['aluno'])){
                /**Mensagem de sucesso */
                $msg['msg']="Aluno salvo com sucesso!";
                $msg['class']="success";
            }else{
                /**Mensagem de erro */
                $msg['msg']="Falha ao salvar o aluno!";
                $msg['class']="danger";
            }
            $_SESSION['msg'][]=$msg;
        }

      //  header("location:".HOME_URI."aluno/");
    }

    public function editar($id){
        $modelo=$this->load_model("aluno");  
        $resultado=$modelo->select($id);
        
        $aluno=$resultado[0];
        require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
	    require PATH . '/views/aluno/form_aluno.php';
		
		require PATH . '/views/includes/footer.php';

    }

}