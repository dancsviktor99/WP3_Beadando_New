<?php
class Dish extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Dish_model', 'dish');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function index(){

        $dishes = $this->dish->get_list();
        
        $data['dishes'] = $dishes;
        
        $this->load->view('layout/header');
        $this->load->view('dish/list', $data);
        $this->load->view('layout/footer');
    }
}
?>

