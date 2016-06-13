<?php
namespace Alfa\Abstracao;

interface SGBD
{
    public function setEndereco($endereco);
    public function setPorta($porta);
    public function setUsuario($usuario);
    public function setSenha($senha);
    public function getEndereco();
    public function getPorta();
    public function getUsuario();
    public function getSenha();
}
