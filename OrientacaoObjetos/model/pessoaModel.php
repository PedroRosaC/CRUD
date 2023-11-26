<?php
require_once 'conexaoMysql.php';

class pessoaModel
{
    protected $id;
    protected $nome;

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function insertDB()
    {   
        $db = new ConexaoMysql;
        $db->Conectar();

        $sql = 'INSERT INTO pessoa(id, nome) VALUES(0,"'.$this->nome.'")';
        echo $sql;

        $_SESSION['id']=$this->id;
        
        $db->Executar($sql);
        $db->Desconectar();

        return $db->total;
    }

    public function loadById($id)
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM usuario where id =' . $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de raça
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
            }
        }



        //Desconectar do banco
        $db->Desconectar();

        return $resultList;
    }

    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM pessoa';
        $resultList = $db->Consultar($sql);
        $db->Desconectar();

        return $resultList;
    }
    
    public function update()
    {
        
        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        $sql = 'UPDATE usuario SET '
            . 'email="' . $this->nome . '",'
            . 'WHERE id = ' . $this->id;

        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

    public function delete()
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        $sql = 'DELETE FROM usuario WHERE id=' . $this->id;


        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

}
?>