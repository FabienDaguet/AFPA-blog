<?php 

    function coreCount($table) {
        global $pdo;
        try {
            $query = "SELECT count(*) AS nombre
                        FROM " . $table;
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $data = $req->fetch();
            $req->closeCursor();
            return $data["nombre"]; 
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
            }
    }