<?php

//Pega as informações inseridas pelos usuarios´p

require_once'Gerente.php';
require_once'GerenteDAO.php';
require_once'DB.php';
class GerenteController
{
    private $g;
    private $gdao;

    public function __construct()
    {
        $this->g = new Gerente();
        $this->gdao = new GerenteDAO();
    }

    //Pegando os valores inseridos no layout de cadastro que foram trasidos pela classe save e inserindo eles nos setrs.
    public function insert($nome, $rg, $cpf, $sexo, $dtnasc, $telefone, $numero_casa, $rua, 
    $bairro, $cidade, $estado, $cep, $login, $senha, $nivel_func, $cargo){

        $this->g->setNome($nome);
        $this->g->setRg($rg);
        $this->g->setCpf($cpf);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($dtnasc);
        $this->g->setTelefone($telefone);
        $this->g->setNumeroCasa($numero_casa);
        $this->g->setRua($rua);
        $this->g->setBairro($bairro);
        $this->g->setCidade($cidade);
        $this->g->setEstado($estado);
        $this->g->setCep($cep);
        $this->g->setLogin($login);
        $this->g->setSenha($senha);
        $this->g->setNivelFunc($nivel_func);
        $this->g->setCargo($cargo);
       
        //passando os valores como objeto para a classe ClienteDÂO
        $this->gdao->insert($this->g);
        
    }

    public function update($id, $nome, $rg, $cpf, $sexo, $dtnasc, $telefone, $numero_casa, $rua, 
    $bairro, $cidade, $estado, $cep, $login, $senha, $nivel_func, $cargo){
       
        $this->g->setId($id);
        $this->g->setNome($nome);
        $this->g->setRg($rg);
        $this->g->setCpf($cpf);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($dtnasc);
        $this->g->setTelefone($telefone);
        $this->g->setNumeroCasa($numero_casa);
        $this->g->setRua($rua);
        $this->g->setBairro($bairro);
        $this->g->setCidade($cidade);
        $this->g->setEstado($estado);
        $this->g->setCep($cep);
        $this->g->setLogin($login);
        $this->g->setSenha($senha);
        $this->g->setSituacao($nivel_func);
        $this->g->setCargo($cargo);
        
        $this->gdao->update($this->g);
           
       
    }

    public function findAll()
    {
        return $this->gdao->findAll();
    }

   
    public function buscarPorNome($nome){
       return $this->gdao->findName($nome);
    }


public function find($id){
    return $this->gdao->find($id);
}

    public function delete($id){
      $this->gdao->delete($id);
    }

   

}


?>