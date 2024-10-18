<?php
class ProductModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllProducts() {
        $sqlCravattes = "SELECT * FROM Cravattes";
        $resultCravattes = $this->db->query($sqlCravattes);
        $cravattes = $resultCravattes->fetchAll(PDO::FETCH_ASSOC);

        $sqlChemises = "SELECT * FROM Chemises";
        $resultChemises = $this->db->query($sqlChemises);
        $chemises = $resultChemises->fetchAll(PDO::FETCH_ASSOC);

        $allProducts = array_merge($cravattes, $chemises);

        return $allProducts;
    }
    public function getAllCravattes() {
        $sql = "SELECT * FROM Cravattes";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllChemises() {
        $sql = "SELECT * FROM Chemises";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
