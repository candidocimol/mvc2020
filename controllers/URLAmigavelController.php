<?php
/**
 * home - Controller de exemplo
 *
 * @package mvc
 * @since 0.1
 */
class UrlAmigavelController extends MainController
{

	/**
	 * Carrega a página "/views/home/index.php"
	 * 
	 */
    public function index() {
		// Título da página
		$this->title = 'URL Amigável';
		
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
	
		require PATH .'/views/includes/header.php';
       	
        require PATH .'/views/includes/menu.php';
			
        require PATH .'/views/urlAmigavel/index.php';
			
        require PATH .'/views/includes/footer.php';
		
    } // index
	
} // class UrlAmigavelController