<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cardapio extends CI_Controller {
    public function index()
	{
        $dados["titulo"] = "cardapio";
		$this->load->view('pagina/cardapio' , $data);
	}
}