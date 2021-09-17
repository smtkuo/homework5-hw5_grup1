<?php

class Book
{
    public $db;
    public function __construct()
    {
        $this->db = new database\Database();
    }
    //index.php - Kitap listesi ve her kitap için yazar isimleri yer alıyor mu?
    public function  bookList()
    {
        //$this->db->create("book",array("name"=>"sam","summary"=>"faasd","author"=>"asdasd","page_count"=>22,"image_url"=>"asdasd"));
        //  $this->db->setDriver(new database\engine\mysql());
        return $this->db->all("book");
    }
    //kitap silme fonksiyonu
    public function deleteBook(int $id)
    {
        return $this->db->delete("book", $id);
    }

    /*// kitap editleme fonksiyonu
    public function edit_Book(int $id,array $data)
    {
       return  $this->db->update("book",$id,array($data);
       
    }  */

    //kitap güncelleme fonksiyonu 
    public function updateBook(int $id, array $data) // field bir array  içinde book sütünları var
    {

        return  $this->db->update("book", $id, array($data));
    }

    //kitap ekleme fonksiyonu
    public function addBook(array $data)
    {   // field bir array  içinde book sütünları var
        return  $this->db->create("book", array($data));
    }
    
    // kitaba yeni bölüm ekleme fonksiyonu
    public function sectionAdd()
    { // field bir array  içinde sectionun sütünları var
        $this->db->create("section", array("name" => "deneme", "created_at" => "faasd", "update_at" => "deneme"));
        print_r($this->db->all("section"));
    }

    // kitapta bölüm editleme fonksiyonu 
    public function sectionEdit(int $id)
    {

        $this->db->update("section", $id, array("name" => "deneme", "created_at" => "faasd", "update_at" => "deneme"));
        print_r($this->db->all("section"));
    }

    // kitapta ki bölümleri güncelleme fonksiyonu 
    public function sectionUpdate(array $field, $id) // field bir array  içinde book sütünları var
    {
       return  $this->db->update("section", $id, array($field));
   
    }

    //kitaptan bölüm silme fonksiyonu
    public function deleteSection(int $id)
    {
        return $this->db->delete("section", $id);
    }

    //kitaptaki bölümü var ise listele 
    /*public function sectionList()
    {
      $this->db->sectionList();
      print_r($this->db->all("book"));  
    }*/
}
