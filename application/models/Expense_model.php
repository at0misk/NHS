<?php
    class Expense_model extends CI_Model {
         function create($data)
         {
            $query = "INSERT INTO expenses (name, date, amount, category, created_at, updated_at, user_id) VALUES (?,?,?,?, NOW(), NOW(), ?)";
            $values = array($data['name'], $data['date'], $data['amount'], $data['category'], $data['user_id']);
            return $this->db->query($query, $values);
         }
         function get_expenses_by_user($id)
         {
            $query = "SELECT * FROM expenses WHERE user_id = ?";
            $values = array($id);
            return $this->db->query($query, $values)->result_array();
         }
         // get expenses
         function get_expenses_by_category($cat)
         {
            $query = "SELECT * FROM expenses WHERE category like ? AND user_id = ?";
            $values = array($cat, $this->session->id);
            return $this->db->query($query, $values)->result_array();
         }
    }
?>
