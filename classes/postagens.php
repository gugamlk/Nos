<?php 
    function main($conn){

        $script = "SELECT * FROM postagens WHERE 1";

        $realizando = mysqli_query($conn, $script); 

        if($realizando){
            result
            print_r($realizando); 
            return $realizando;

        }else{
            echo"erro"; 
        }
    }
?>