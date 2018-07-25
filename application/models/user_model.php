<?php
    class User_model extends CI_Model {
         function register($data)
         {
            $query = "INSERT INTO Users (first, last, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())";
            $values = array($data['first'], $data['last'], $data['email'], $data['password']);
            $this->db->query($query, $values);
            $user_info = array(
                'first' => $data['first'],
                'last' => $data['last'],
                'email' => $data['email']
            );
            return $user_info;
         }
         function get_user_by_email($email)
         {
            $query = "SELECT * FROM users WHERE email = ?";
            $values = array($email);
            return $this->db->query($query, $values)->row_array();
         }
    }
?>