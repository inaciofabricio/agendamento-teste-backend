<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geral_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function new_query()
    {
        return (object) array(
            "database" => NULL,
            "table" => NULL,
            "where" => NULL,
            "where_in" => NULL,
            "data" => NULL,
            "select" => NULL,
            "like" => NULL,
            "order_by" => NULL,
            "group_by" => NULL,
            'obs' => NULL,
            "limit" => NULL
        );
    }

    public function insert($query=NULL)
    {
        if ($query != NULL)
        {
            $this->db->from($query->table);
            $this->db->set($query->data);
            $this->db->insert();
            return $this->db->insert_id();
        }
        else
        {
            return NULL;
        }
    }

    public function update($query=NULL)
    {
        if ($query != NULL)
        {
            $this->db->from($query->table);
            $this->db->set($query->data);
            $this->db->where($query->where);
            $this->db->update();
        }
    }

    public function delete($query=NULL)
    {
        $return = FALSE;

        if ($query != NULL)
        {
            $this->db->from($query->table);
            $this->db->where($query->where);
            $this->db->delete();
            $return = TRUE;
        }

        return $return;
    }

    public function get_one($query = NULL)
    {
        if ($query != NULL)
        {
            if($query->obs != NULL)
            {
                $this->db->query($query->obs);
            }

            if($query->select != NULL)
            {
                $this->db->select($query->select);
            }
            
            $this->db->from($query->table);

            if($query->where != NULL)
            {
                $this->db->where($query->where);
            }

            if($query->like != NULL)
            {
                // before = '%match' / after = 'match%' / both = '%match%'
                $this->db->like($query->like->row, $query->like->text, $query->like->option);
            }

            if($query->group_by != NULL)
            {
                $this->db->group_by($query->group_by);
            }

            if($query->order_by != NULL)
            {
                $this->db->order_by($query->order_by->row, $query->order_by->direction);
            }

            $result = $this->db->get();

            if($result->num_rows() > 0)
            {
                $result = $result->row();
            }
            else
            {
                $result = NULL;
            }

            return $result;
        }
        else
        {
            return NULL;
        }
    }

    public function get_all($query = NULL)
    {
        if ($query != NULL)
        {
            if($query->obs != NULL)
            {
                $this->db->query($query->obs);
            }
            
            if($query->select != NULL)
            {
                $this->db->select($query->select);
            }
            
            $this->db->from($query->table);

            if($query->where != NULL)
            {
                $this->db->where($query->where);
            }

            if($query->where_in != NULL)
            {
                $this->db->where_in($query->where_in->column,$query->where_in->array);
            }

            if($query->like != NULL)
            {
                // before = '%match' / after = 'match%' / both = '%match%'
                $this->db->like($query->like->row, $query->like->text, $query->like->option);
            }

            if($query->group_by != NULL)
            {
                $this->db->group_by($query->group_by);
            }

            if($query->order_by != NULL)
            {
                $this->db->order_by($query->order_by->row, $query->order_by->direction);
            }

            if($query->limit != NULL)
            {
                $this->db->limit($query->limit);
            }

            $result = $this->db->get();

            if($result->num_rows() > 0)
            {
                $result = $result->result();
            }
            else
            {
                $result = array();
            }

            return $result;
        }
        else
        {
            return array();
        }
    }
 }

?>