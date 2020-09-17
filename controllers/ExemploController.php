<?php
/**
 * Exemplo - Controller de exemplo
 * @author Cândido Farias
 * @package mvc.controller
 * @since 0.1
 */
class ExemploController extends MainController
{
	/**
	 * URL: dominio.com/exemplo/
	 * 
	 * 
	 *  */ 
	public function index() {
		$this->title="Exemplo";
		$tituloPagina="Exemplo";
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		//require PATH . '/views/exemplo/index.php';
		
		require PATH . '/views/includes/footer.php';
	}
	
	/**
	 * Método teste, com o objetivo de demonstrar a interação com Model
	 * URL: dominio.com/exemplo/outra-acao
	 *  */ 
	public function teste() {
		/**Instanciar um objeto da classe ExemploModel */
		$model=$this->load_model("Exemplo");
		
		$dadosExemplo=$model->teste();
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		require_once PATH . '/views/exemplo/index.php';
		require PATH . '/views/includes/footer.php';
	}
	

	public function select($id=null){
		$model=$this->load_model("exemplo");
		
		$dadosExemplo=$model->select($id);
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		require_once PATH . '/views/exemplo/index.php';
		require PATH . '/views/includes/footer.php';
	
	}
	
	public function insert(){
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		$exemplo=$this->load_model("exemplo");
		if($result=$exemplo->insert()){
			echo "Registro Realizado!";
		}else{
			echo "Falha ao realizar o registro";
		}

		require PATH . '/views/includes/footer.php';
	}

	
	public function selecta(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select2();
		print_r($result);
	}

	public function selectb(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select3();
		print_r($result);
	}

}