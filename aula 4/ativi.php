<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_pedidos";

$conn = new mysqli($servername, $username, $password, $dbname);

if($con -> connect_error){
    die("falha na conexão:" . $con -> connect_error);
}
if(isset($_post['create'])){
    $nome_cliente = $_post['nome_cliente'];
    $produto = $_POST ['produto'];
    $quantidade = $_POST ['quantidade'];
    $data_pedido = $_POST ['data_pedido'];
    $sql = "insert into pedidos(nome_cliente, nome_produto, quantidade, data_pedido) value ('')"


if (isset($_get['delet'])){
    $id = $_get['delet'];
    
    $sql = "delet from pedido where id=$id";
    if($conn)
}

    $result = $conn->("select * from pedidos,")
}

?>

<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>crud</title>
    </head>
    <body>
        <h2>adicionar pedido</h2>
        <form method="post">

            nome do cliente:
            produto:
            quantidade:
            data do pedido:

            <input type=>
        </form>
        <h2>ler pedido</h2>

        <table border="1">
            <tr>

            </tr>
            <?php while($row = $result -> fetch_assoc()) { ?>

            <tr>
                <td><?php echo$row['id'];?></td>
                <td><?php echo$row['nome_cliente'];?></td>
                <td><?php echo$row['nome_produto'];?></td>
                <td><?php echo$row['quantidade'];?></td>
                <td><?php echo$row['data_pedido'];?></td>
            </tr>
            <td>
                <a href="index.php?delete=<?php echo $row['id']?>">excluir</a>
            </td>
                <?php } ?>            
        </table>


</body>
</html>