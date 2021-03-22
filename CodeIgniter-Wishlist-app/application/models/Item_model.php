<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

//Get all items on list 
public function getItems()
{
    $this->db->select("*");
    $this->db->from('list');
    $result = $this->db->get();
    return $result->result();
}

//Add Item to list
public function insertItem($data){
    $insert =$this->db->insert('list',$data);
    return $insert;
}

//Get Item when id matches 
function getItem($Item_id){
    $query = $this->db->query('SELECT * FROM list WHERE `Item_id` =' . $Item_id);
    return $query->row();
}


//Update item to list
function updateItem($Item_id){
        $data = array(
            'Item_name' => $this->input->post('Item_name'),
            'Item_price' => $this->input->post('Item_price'),
            'Item_link'=>$this->input->post('Item_link'),
            'Item_priority'=>$this->input->post('Item_priority'),
            'Item_description'=>$this->input->post('Item_description'),
        );
 $this->db->where('Item_id',$Item_id);
 $this->db->update('list',$data);
}

//Delete item from list where id matches
function deleteItem($Item_id){
   $this->db->where('Item_id',$Item_id);
   $this->db->delete('list');
    }

}