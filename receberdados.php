<?php
$nome = $_POST["login"];
$senha = $_POST["Senha"];

if (($nome == "Ana" || $nome == "ana") && $senha == 123456){
    header('Location: ana.html');

} elseif (($nome == "Vinicius" || $nome == "vinicius") && $senha == 12345678) {
    header('Location: vinicius.html');

} elseif (($nome == "Sarah" || $nome == "sarah") && $senha == 123456789) {
    header('Location: sarah.html');

} elseif (($nome == "Nicolas" || $nome == "nicolas") && $senha == 1234567891){
    header('Location: nicolas.html');

} else {
    echo "Nome ou Senha incorretos. Por favor tente de novo";
}
?>