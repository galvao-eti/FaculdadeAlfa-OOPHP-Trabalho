<?php
namespace Alfa\Abstracao;

interface Entidade
{
    public function setNome($nome);
    public function getNome();
    public function create($colunas, $valores);
    public function retrieve($colunas, $clausula);
    public function update($colunas, $valores, $clausula);
    public function delete($clausula);
}
