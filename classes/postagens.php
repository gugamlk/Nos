<?php 

    #Selecionar o ultimo post inserido 
    function ultimo_post($conn){

        $codigo = "SELECT MAX(idPostagem) FROM postagens";

        $realizando = mysqli_query($conn, $codigo);

        $resultado_u = mysqli_fetch_array($realizando);
        
        return $resultado_u;

    }
?>