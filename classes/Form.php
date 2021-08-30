<?php
    class Form{
        public static function alert($tipo,$mensagem){
            if ($tipo == 'erro'){
                echo '<div style="background:#444;"> '.$mensagem.'</div>';
                return false;
            }else if ($tipo == 'sucesso'){
            echo '<div style="background:yellow;"> ' . $mensagem . '</div>';
            return true;
            }
        }
    public static function cadastrar($nome, $email, $senha)
    {
        $sql = Mysql::conectar()->prepare("INSERT INTO  `formulario` VALUES (null,?,?,?)");
        $sql->execute(array($nome, $email, $senha));
    }
    }
?>