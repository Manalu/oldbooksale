<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Mainindex_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_categories()
    {
        $categories = $this->db->get("category");
        $options = [];
      
foreach ($categories->result() as $row) {
    $options[$row->name] = $row->name;
}
return $options;
    }
    public function add_books($data)
    {
        return $this->db->insert('books', $data);
    }
    public function get_all_books()
    {
        //select * from users
        $this->db->order_by('id','desc');
        return $this->db->get('books');
    }
    public function get_5_books()
    {
        $this->db->order_by('id','desc');
        return $this->db->get('books', 5);
    }
    public function process_create_user($userinfo)
    {
        if ($this->db->insert('users', $userinfo)) {
            return true;
        } else {
            return false;
        }
    }

    public function process_update_user($id, $data)
    {
        $this->db->where('id', $id);
        if ($this->db->update('users', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_user_details($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users');
    }
    public function user_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        if ($this->db->delete('users')) {
        return true;
        } else {
        return false;
        }
        }
public function show_single_book($id){
    return $this->db->select('*')->from('users')->join('books', 'books.user_id = users.user_id')->where('id', $id)->get();
}

public function getallcomment ($id)
    {
        
          $this->db->where('comment_book_id', $id);
        return $this->db->get('comments');
        

    }
    public function getcommentsnumwhere ($id)
    {
        
          $this->db->where('comment_book_id', $id);
          $query= $this->db->get('comments');
         return $query->num_rows();

    }

    public function addcomment($data){
        return $this->db->insert('comments', $data);
    }


    public function pag_data($limit,$p){
        $this->db->limit($limit,$p);
        return $this->db->get("books");
    }

    public function add_author($data)
    {
        if ($this->db->insert('comments', $data)) {
            return true;
        } else {
            return false;
        }
    }

}
