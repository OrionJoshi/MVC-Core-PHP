<?php

    class UsersContr extends Users {

        public function createUser($firstname, $lastname, $dob) {

            $this->setUser($firstname, $lastname, $dob);

        }

        public function userUpdate($id, $firstname, $lastname, $dob) {

            $this->updateUser($id, $firstname, $lastname, $dob);

        }

        public function userDelete($id) {
            $this->deleteUser($id);
        }

    }

?>