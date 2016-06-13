<?php
namespace Alfa\Abstracao;

interface BaseDeDados
{
    public function setNome($nome);
    public function getNome();
    public function conectar();
    public function desconectar();
}
