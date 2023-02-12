<?php
    namespace App\Models;
    use App\Models\BaseModel;
    class ProductModel extends BaseModel{
        public function index()
        {
            $sql="SELECT * FROM tbl_quanlydongvat";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function Create($name){
            $sql="INSERT INTO tbl_quanlydongvat VALUES('','$name','')";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function Delete($id){
            $sql="DELETE FROM tbl_quanlydongvat WHERE id='$id'";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function Update($id,$name){
            $sql="UPDATE tbl_quanlydongvat SET name='$name' WHERE id='$id'";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function ShowNameUpdate($id){
            $sql="SELECT * FROM tbl_quanlydongvat WHERE id='$id'";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }


?>