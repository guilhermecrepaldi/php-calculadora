<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Calculadora PHP</title>
<style>*{box-sizing:border-box}body{font-family:Arial;max-width:400px;margin:50px auto;padding:20px}
.calc{background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 5px rgba(0,0,0,0.1)}
input,select,button{width:100%;padding:10px;margin:5px 0}
.result{background:#e8f5e9;padding:15px;margin-top:15px;border-radius:4px;text-align:center;font-size:1.2em}
</style></head>
<body><div class="calc"><h2>Calculadora</h2>
<form method="POST">
<input type="number" step="any" name="num1" placeholder="Primeiro número" required>
<select name="op">
<option value="somar">+ Somar</option><option value="subtrair">- Subtrair</option>
<option value="multiplicar">x Multiplicar</option><option value="dividir">/ Dividir</option>
</select>
<input type="number" step="any" name="num2" placeholder="Segundo número" required>
<button type="submit">Calcular</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"):
$n1=(float)$_POST["num1"]; $n2=(float)$_POST["num2"];
switch($_POST["op"]){
case "somar":$r=$n1+$n2;$s="+";break;
case "subtrair":$r=$n1-$n2;$s="-";break;
case "multiplicar":$r=$n1*$n2;$s="x";break;
case "dividir":$r=$n2!=0?$n1/$n2:"Erro: divisão por zero";$s="/";break;
}?>
<div class="result"><?php echo "$n1 $s = <strong>$r</strong>"; ?></div>
<?php endif; ?>
</div></body></html>
