<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=4&id=" + id;
                }
            }
 </script>
<?php $sql = "SELECT * FROM produtos WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
 <table class="table">
           <tr>
            <td>Nome:</td>
            <td> <input type="text" name="nome" required="" value="<?php echo $row['nome'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" required="" rows="10" cols="22" readonly=""> <?php echo $row['descricao'];?></textarea></td>
        </tr>
        
        <tr>
            <td>Código:</td>
            <td><input type="number" name="codigo" required="" value="<?php echo $row['codigo'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td>Preço de compra:</td>
            <td><input type="number" name="pCompra" required="" value="<?php echo $row['precoC'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td>Preço de venda:</td>
            <td><input type="number" name="pVenda" required="" value="<?php echo $row['precoV'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td> Quantidade</td>
            <td><input type="number" name="quantidade" required="" value="<?php echo $row['quantidade'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td>Unidade de medida:</td>
            <td><input type="text" name="unidade" required="" value="<?php echo $row['unidade'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td>Validade:</td>
            <td><input type="date" name="validade" required="" value="<?php echo $row['validade'];?>" readonly=""></td>
        </tr>
        
        <tr>
            <td> <a href="?op=6&id=<?php echo $row['id'];?>" class="editar">Editar</a></td>
            <td><a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir">Excluir</a></td>
    </tr>
    
</table>


<?php }}$conn->close();?>

