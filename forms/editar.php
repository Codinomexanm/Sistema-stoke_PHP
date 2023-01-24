
<?php $sql = "SELECT * FROM produtos WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
<form action="#" method="post">
    <table class="table">
           <tr>
            <td>Nome:</td>
            <td> <input type="text" name="nome" required="" value="<?php echo $row['nome'];?>" ></td>
        </tr>
        
        <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" required="" rows="10" cols="22" > <?php echo $row['descricao'];?></textarea></td>
        </tr>
        
        <tr>
            <td>Código:</td>
            <td><input type="number" name="codigo" required="" value="<?php echo $row['codigo'];?>" ></td>
        </tr>
        
        <tr>
            <td>Preço de compra:</td>
            <td><input type="number" name="pCompra" required="" value="<?php echo $row['precoC'];?>" ></td>
        </tr>
        
        <tr>
            <td>Preço de venda:</td>
            <td><input type="number" name="pVenda" required="" value="<?php echo $row['precoV'];?>" ></td>
        </tr>
        
        <tr>
            <td> Quantidade</td>
            <td><input type="number" name="quantidade" required="" value="<?php echo $row['quantidade'];?>" ></td>
        </tr>
        
        <tr>
            <td>Unidade de medida:</td>
            <td><input type="text" name="unidade" required="" value="<?php echo $row['unidade'];?>" ></td>
        </tr>
        
        <tr>
            <td>Validade:</td>
            <td><input type="date" name="validade" required="" value="<?php echo $row['validade'];?>" ></td>
        </tr>
      
         <tr>
            <td colspan="2"> <input type="submit" value="Alterar" ></td>
        </tr>
    
</table>
</form>

<?php }}

if(!empty($_POST)){
     $id=$_GET['id'];
$nome=$_POST["nome"];
$desc=$_POST["descricao"];
$cod=$_POST["codigo"];
$pc=$_POST["pCompra"];
$pv=$_POST["pVenda"];
$quant=$_POST["quantidade"];
$un=$_POST["unidade"];
$val=$_POST["validade"];

$sql="UPDATE  produtos SET nome='$nome',descricao='$desc',codigo='$cod',precoC='$pc',precoV='$pv',quantidade='$quant',unidade='$un',validade='$val' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("Produto Alterado")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

