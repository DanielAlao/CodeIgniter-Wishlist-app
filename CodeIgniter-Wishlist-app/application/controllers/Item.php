<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Item_model');
        $this->load->helper('url');
        $this->load->library('session');
    } 

    //Shows user items on table
	public function index()
	{
		$data['Items'] = $this->Item_model->getItems();
		$this->load->view('dashboard',$data);
	}

    //Add item to wishlist
    public function addItem()
    {
        $data = array(
            'Item_name' => $this->input->post('Item_name'),
            'Item_price' => $this->input->post('Item_price'),
            'Item_link'=>$this->input->post('Item_link'),
            'Item_priority'=>$this->input->post('Item_priority'),
            'Item_description'=>$this->input->post('Item_description'),
        );
      
        $this->Item_model->insertItem($data);
        $this->session->set_flashdata('success_msg','You Have Added To Your List!');  
        redirect('Item');
    }

    //Edit Item on wishlist
   public function editItem($Item_id){
        $data['row'] = $this->Item_model->getItem($Item_id);
        $this->load->view('editmyItem',$data);
}

    //Update Item on wishlist
    public function updateItem($Item_id){
        $this->Item_model->updateItem($Item_id);
        redirect("Item");
}

//Delete Item on wishlist
    public function deleteItem($Item_id){
        $this->Item_model->deleteItem($Item_id);
        redirect("Item");
    }
}

