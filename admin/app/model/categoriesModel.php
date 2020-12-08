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

    function categorieInsert($categorie) {
        global $pdo;
        try {
            $query = "INSERT INTO blog_categories
                        (cat_descr)
                        VALUES
                        ('" . addslashes($categorie) . "')";
            //die($query);
            $req = $pdo->query($query);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
function categoryDelete($id) {
    global $pdo;
    try {
        $query = "DELETE 
                    FROM blog_categories 
                    WHERE cat_id = " . $id;
        //die($query);
        $req = $pdo->prepare($query);
        $req ->bindValue(":cat_id", $id, PDO::PARAM_INT);
        $req ->execute();
        return true;
    } catch (Exception $e) {
        return false;
    } 
}