<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agendamento extends CI_Controller {

    function __construct() 
    {
        parent::__construct();

        $this->load->model('geral_model');
        $this->load->model('agendamento_model');
    }

    public function index() 
    {
        $feedback = (object) array(
            "message" => "Sem permissão para acessar está funcionalidade.",
            "success" => false,
            "error" => 401
        );

        header("Access-Control-Allow-Origin: *");    
        header("Access-Control-Allow-Headers: Content-Type");
        header("Content-Type: application/json");
        echo(json_encode($feedback,JSON_UNESCAPED_UNICODE));
    }

    public function get_one() 
    {
        $feedback = (object) array(
            "message" => "Sem permissão para acessar está funcionalidade.",
            "success" => false,
            "error" => 401
        );
        
        $post_data = file_get_contents("php://input");

        if($post_data != NULL)
        {
            $post = json_decode($post_data);

            //REQUISITANDO UMA NOVA QUERY
            $query = $this->geral_model->new_query();
                
            //MONTANDO A QUERY
            $query->table = "agendamento";
            $query->where = array("id" => $post->id);
                
            //RECUPERANDO UM OBJETO
            $agendamento = $this->geral_model->get_one($query);

            if(!is_null($agendamento))
            {
                $agendamento->pessoas = $this->agendamento_model->get_all_pessoa((object) array("id_agendamento" => $agendamento->id));
            }
            
            $feedback = (object) array(
                "data" => $agendamento,
                "message" => "Sucesso ao realizar essa operação!",
                "success" => true
            );
        }

        header("Access-Control-Allow-Origin: *");    
        header("Access-Control-Allow-Headers: Content-Type");
        header("Content-Type: application/json");
        echo(json_encode($feedback,JSON_UNESCAPED_UNICODE));
    }

    public function get_all() 
    {
        $feedback = (object) array(
            "message" => "Sem permissão para acessar está funcionalidade.",
            "success" => false,
            "error" => 401
        );

        //REQUISITANDO UMA NOVA QUERY
        $query = $this->geral_model->new_query();
            
        //MONTANDO A QUERY
        $query->table = "agendamento";
        $query->order_by = (object) array("row" => "hora_minuto","direction" => "ASC");
            
        //RECUPERANDO MULTIPLOS OBJETOS
        $all_agendamento = $this->geral_model->get_all($query);

        foreach ($all_agendamento as $i) 
        {
            $i->hora_minuto = date('H:i', strtotime($i->hora_minuto));
            $i->pessoas = $this->agendamento_model->get_all_pessoa((object) array("id_agendamento" => $i->id));
        }

        $feedback = (object) array(
            "data" => $all_agendamento,
            "message" => "Sucesso ao realizar essa operação!",
            "success" => true
        );

        header("Access-Control-Allow-Origin: *");    
        header("Access-Control-Allow-Headers: Content-Type");
        header("Content-Type: application/json");
        echo(json_encode($feedback,JSON_UNESCAPED_UNICODE));
    }

    public function update() 
    {
        $feedback = (object) array(
            "message" => "Sem permissão para acessar está funcionalidade.",
            "success" => false,
            "error" => 401
        );

        $post_data = file_get_contents("php://input");

        if($post_data != NULL)
        {
            $post = json_decode($post_data);

            if(!is_null($post))
            {
                $agendamento = $post;

                if(is_null($agendamento->id))
                {
                    //REQUISITANDO UMA NOVA QUERY
                    $query = $this->geral_model->new_query();
                                                        
                    //MONTANDO A QUERY
                    $query->table = "agendamento";
                    $query->data = array(
                        "hora_minuto" => date('H:i:s', strtotime($agendamento->hora_minuto)),
                        "mensagem" => $agendamento->mensagem,
                        "ativo" => $agendamento->ativo,
                    );
                        
                    //INSERINDO UM OBJETO
                    $agendamento->id = $this->geral_model->insert($query);
                }
                else
                {
                    //REQUISITANDO UMA NOVA QUERY
                    $query = $this->geral_model->new_query();
                                                        
                    //MONTANDO A QUERY
                    $query->table = "agendamento";
                    $query->data = array(
                        "hora_minuto" => $agendamento->hora_minuto,
                        "mensagem" => $agendamento->mensagem,
                        "ativo" => $agendamento->ativo,
                    );
                    $query->where = array("id" => $agendamento->id);
                        
                    //ATUALIZA UM OBJETO
                    $this->geral_model->update($query);
                }

                foreach ($agendamento->pessoas as $i) 
                {
                    //REQUISITANDO UMA NOVA QUERY
                    $query = $this->geral_model->new_query();
                        
                    //MONTANDO A QUERY
                    $query->table = "pessoa";
                    $query->where = array("telefone" => $i->telefone);
                        
                    //RECUPERANDO UM OBJETO
                    $pessoa = $this->geral_model->get_one($query);

                    if(is_null($pessoa))
                    {
                        //REQUISITANDO UMA NOVA QUERY
                        $query = $this->geral_model->new_query();
                                                            
                        //MONTANDO A QUERY
                        $query->table = "pessoa";
                        $query->data = array(
                            "telefone" => trim($i->telefone),
                            "nome" => trim($i->nome)
                        );
                            
                        //INSERINDO UM OBJETO
                        $id = $this->geral_model->insert($query);

                        $pessoa = (object) array("id" => $id);
                    }

                    //REQUISITANDO UMA NOVA QUERY
                    $query = $this->geral_model->new_query();
                        
                    //MONTANDO A QUERY
                    $query->table = "agendamento_pessoa";
                    $query->where = array("id_agendamento" => $agendamento->id,"id_pessoa" => $pessoa->id);
                        
                    //RECUPERANDO UM OBJETO
                    $agendamento_pessoa = $this->geral_model->get_one($query);

                    if(is_null($agendamento_pessoa))
                    {
                        //REQUISITANDO UMA NOVA QUERY
                        $query = $this->geral_model->new_query();
                                                
                        //MONTANDO A QUERY
                        $query->table = "agendamento_pessoa";
                        $query->data = array("id_agendamento" => $agendamento->id,"id_pessoa" => $pessoa->id);
                            
                        //INSERINDO UM OBJETO
                        $this->geral_model->insert($query);
                    }
                }

                $feedback = (object) array(
                    "data" => $agendamento,
                    "message" => "Sucesso ao realizar essa operação!",
                    "success" => true
                );
            }
        }

        header("Access-Control-Allow-Origin: *");    
        header("Access-Control-Allow-Headers: Content-Type");
        header("Content-Type: application/json");
        echo(json_encode($feedback,JSON_UNESCAPED_UNICODE));
    }

    public function delete_vinculo() 
    {
        $feedback = (object) array(
            "message" => "Sem permissão para acessar está funcionalidade.",
            "success" => false,
            "error" => 401
        );
        
        $post_data = file_get_contents("php://input");

        if($post_data != NULL)
        {
            $post = json_decode($post_data);

            //REQUISITANDO UMA NOVA QUERY
            $query = $this->geral_model->new_query();
                
            //MONTANDO A QUERY
            $query->table = "pessoa";
            $query->where = array("telefone" => $post->telefone);
                
            //RECUPERANDO UM OBJETO
            $pessoa = $this->geral_model->get_one($query);

            if(!is_null($pessoa))
            {
                //REQUISITANDO UMA NOVA QUERY
                $query = $this->geral_model->new_query();
                    
                //MONTANDO A QUERY
                $query->table = "agendamento_pessoa";
                $query->where = array("id_agendamento" => $post->id_agendamento, "id_pessoa" => $pessoa->id);
                    
                //RECUPERANDO UM OBJETO
                $this->geral_model->delete($query);
            }
            
            $feedback = (object) array(
                "message" => "Sucesso ao realizar essa operação!",
                "success" => true
            );
        }

        header("Access-Control-Allow-Origin: *");    
        header("Access-Control-Allow-Headers: Content-Type");
        header("Content-Type: application/json");
        echo(json_encode($feedback,JSON_UNESCAPED_UNICODE));
    }
}