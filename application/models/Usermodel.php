<?php 
class Usermodel extends CI_Model{
    public function getuserdata(){
        $q = $this->db->get('todos')->result_array();
        return $q;  

    }
    function create($fromArray){
        $this->db->insert('todos',$fromArray); 
    }
    public function getUser($id){
        $this->db->where('id',$id);
        return $user = $this->db->get('todos')->row_array();//return single row array
    }
    public function updateUser($id, $fromArray){
        $this->db->where('id',$id);
        $this->db->update('todos',$fromArray);

    }
    public function deleteUser($id){
        $this->db->where('id',$id);
        $this->db->delete('todos');
    }
}


?>