<?php
defined('BASEPATH') or exit('No direct script access allowed');

class logout extends CI_Controller{
	public function index(){
		session_destroy();
		redirect('market/dataMarket', 'refresh');
	}
}