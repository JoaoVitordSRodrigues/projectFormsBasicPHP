<?php

require_once("../model/pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome($_POST['txtNome']);
$pessoa->setEnd($_POST['txtEnd']);
echo $pessoa->getNome();
echo '<br>' . $pessoa->getEnd();

?>