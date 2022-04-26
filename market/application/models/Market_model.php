<?php
class Market_model extends CI_Model{
    public function addData()
    {
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $name =$_POST['name'];
        $deskripsi =$_POST['deskripsi'];
        $harga =$_POST['harga'];
        $link =$_POST['link'];
        $uploaded = date("Y-m-d H:i:s");
        $alter = $this->db->query("ALTER TABLE `weapon` AUTO_INCREMENT = 1;");
        $insert = $this->db->query("INSERT into weapon (image, name, deskripsi, harga, link, uploaded) VALUES 
                    ('$imgContent', '$name', '$deskripsi', '$harga', '$link', '$uploaded')");
    }

    public function getData()
    {
        return $this->db->get('weapon')->result_array();
    }

    public function editData()
    {
        $this->db->set('harga', $_POST['harga']);
        $this->db->set('link', $_POST['link']);
        $this->db->where('id', $_POST['id']);
        $this->db->update('weapon');
    }

    public function deleteData($id){
        $this->db->delete('weapon',['id'=>$id]);
    }
}