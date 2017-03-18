<?php
    /**
     *
     */
    class componentForm
    {
      private $db;
      function __construct($connect)
      {
        $this->db = $connect;
      }


    public function listBank()
    {
      try {
        $query = "SELECT * FROM MSBANK";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
      public function listProduk()
      {
        try{
          $query = "SELECT * FROM MSPRODUK";
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          return $stmt->fetchAll();
        }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
        }
      }

    }
    

 ?>
