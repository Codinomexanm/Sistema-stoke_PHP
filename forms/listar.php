<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=4&id=" + id;
                }
            }
 </script>
 <table class="table">
    <tr>
        <td>Nome do produto</td>
        <td>Código</td>
        <td>Quantidade</td>
        <td>Opções</td>
    </tr>
    <?php $sql = "SELECT * FROM produtos"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['nome'];?></td>
        <td><?php echo $row['codigo'];?></td>
        <td><?php echo $row['quantidade'];?></td>
        <Td>
            <a href="?op=5&id=<?php echo $row['id'];?>" class="visualizar">Visualizar </a> //
        <a href="?op=6&id=<?php echo $row['id'];?>" class="editar">Editar</a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir">Excluir</a>
        </Td>
    </tr>
    <?php }} else { echo "Não há produtos cadastrados"; }$conn->close();?>
</table>

