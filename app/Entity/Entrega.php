<?php

namespace App\Entity;

use App\Db\Database;

class Entrega
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $titulo;

    /**
     * @var string
     */
    public $descricao;

    /**
     * @var datetime
     */
    public $previsao_entrega;

    /**
     * @var datetime
     */
    public $data_entrega;

    /**
     * @var string
     */
    public $status;

    /**
     * @return boolean
     */
    public function incluir()
    {
        //Definir a data

        //inserir no banco
        $db = new Database('tb_entrega');
        $db->insert([
            'titulo' => $this->titulo,
            'descricao'=> $this->descricao,
            'previsao_entrega'=> $this->previsao_entrega,
            'status'=> $this->status
        ]);

        //retornar o id

        //returnar sucesso
    }
}
