<?php

    class Users extends Dbh {

        protected function getUser($name) {
            $sql = "SELECT * FROM users WHERE users_firstname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function setUser($f_name, $l_name, $dbs) {
            $sql = "INSERT INTO users(first_name, last_name, users_dateofbirth) VALUES(?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$f_name, $l_name, $dbs]);
          
        }

        protected function updateUser($id, $f_name, $l_name, $dbs) {
            $sql = "UPDATE `users` SET `first_name` = ?, `last_name` = ?, `users_dateofbirth` = ? WHERE id = '$id'";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$f_name, $l_name, $dbs]);
        }

        protected function deleteUser($id) {
            $sql = "DELETE `users` WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

        }


    }

?>