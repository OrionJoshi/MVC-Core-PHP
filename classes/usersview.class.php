<?php
    class UsersView extends Users {

        public function showUser($name) {
            $results = $this->getUsers($name);

            echo "Full Name: " . $results['users_firstname'];
        }
    }
?>