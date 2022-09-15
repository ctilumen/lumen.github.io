<?php
   $servidor = "192.168.30.23";
   $usuario = "root";
   $senha = "";
   $banco = "andes";
   $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

   if (mysqli_connect_errno() ){
       die("conexão falhou" . mysqli_connect_errno());

   }


?>