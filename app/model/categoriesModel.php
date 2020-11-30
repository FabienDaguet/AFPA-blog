<?php 

    function allCategories() {
        global $pdo;
        try {
            $query = "SELECT *
                        FROM blog_categories
                        ORDER BY cat_descr ASC";
                                
                                
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $data = $req->fetchAll();
            $req->closeCursor();
            return $data; 
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
            }
    }