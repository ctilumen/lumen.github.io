<?php require_once("/conexao/conexao.php"); ?>
<?php
        //iserção de dados
        if (isset($_POST["nomecompleto"])){
            $nome = $_POST["nomecompleto"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $ddd = $_POST["ddd"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estados"];
            $cep = $_POST["cep"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            $inserir = "INSERT INTO clientes ";
            $inserir .= "(nomecompleto,endereco,numero,ddd,cidade,estadoID,cep,email,telefone,usuario,senha) ";
            $inserir .= "VALUES ";
            $inserir .="('$nome','$endereco','$numero', '$ddd', '$cidade',$estado,'$cep','$email','$telefone','$usuario','$senha')";

            $operacao_inserir = mysqli_query($conecta,$inserir);
            if(!$operacao_inserir){
                 die("Falha ao inserir");   
            }
        }     

?>
<?php
    // Fechar conexao
    mysqli_close($conecta);
?>