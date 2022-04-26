<?php
class Market extends CI_controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('market_model');
    }

    public function index()
    {
        $data['weapon']=$this->market_model->getData();
        $this->load->view('part/headersell');
        $this->load->view('main_content', $data);
        $this->load->view('part/footer');
    }

    public function addData()
    {
        $this->load->model('market_model');
        $this->market_model->addData();
        redirect('market');
    }
    

    public function dataMarket()
    {
        $data['weapon']=$this->market_model->getData();
        $this->load->view('part/header');
        $this->load->view('dataMarket', $data);
        $this->load->view('part/footer');
    }

    public function editData()
    {
        $this->market_model->editData();
        redirect('market');
    }

    public function deleteData($id){
        $this->market_model->deleteData($id);
        redirect('market');
    }
}       