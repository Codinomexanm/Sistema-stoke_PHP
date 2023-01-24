<form method="post" action="#">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td> <input type="text" name="nome" required=""></td>
        </tr>
        
        <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" required="" rows="10" cols="22"></textarea></td>
        </tr>
        
        <tr>
            <td>Código:</td>
            <td><input type="number" name="codigo" required=""></td>
        </tr>
        
        <tr>
            <td>Preço de compra:</td>
            <td><input type="number" name="pCompra" required=""></td>
        </tr>
        
        <tr>
            <td>Preço de venda:</td>
            <td><input type="number" name="pVenda" required=""></td>
        </tr>
        
        <tr>
            <td> Quantidade</td>
            <td><input type="number" name="quantidade" required=""></td>
        </tr>
        
        <tr>
            <td>Unidade de medida:</td>
            <td><input type="text" name="unidade" required=""></td>
        </tr>
        
        <tr>
            <td>Validade:</td>
            <td><input type="date" name="validade" required=""></td>
        </tr>
        <tr>
            <td colspan="2"> <input type="submit" value="Inserir" ></td>
        </tr>
    </table>
</form>

<?php
if(!empty($_POST)){
$nome=$_POST["nome"];
$desc=$_POST["descricao"];
$cod=$_POST["codigo"];
$pc=$_POST["pCompra"];
$pv=$_POST["pVenda"];
$quant=$_POST["quantidade"];
$un=$_POST["unidade"];
$val=$_POST["validade"];

$sql="INSERT INTO produtos VALUES('','$nome','$desc','$cod','$pc','$pv','$quant','$un','$val')";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("Produto cadastrado")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
