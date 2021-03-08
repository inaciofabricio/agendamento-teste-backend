<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agendamento_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all_pessoa($filtro=NULL)
    {
        if($filtro != NULL)
        {
            $query = 
                "SELECT 
                    p.telefone,
                    p.nome
                FROM agendamento_pessoa ap
                INNER JOIN pessoa p ON p.id = ap.id_pessoa
                WHERE
                    ap.id_agendamento = {$filtro->id_agendamento}
                ORDER BY p.nome";

            $result = $this->db->query($query);

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