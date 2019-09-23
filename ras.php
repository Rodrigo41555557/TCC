/* 
rascunho
 
        
 //debug:        

        
            try {
              $sql = "UPDATE usuario SET nome_completo = :nome_completo, senha = :senha, telefone = :telefone WHERE `usuario`.`cod_usuario` = ".$_SESSION['id'];
              $stmt = $connect->prepare($sql);                                  
              $stmt->execute(array(
                ':nome_completo' => $nome,
                ':senha' => $senha,
                ':telefone' => $telefone,
                ':apelido' => $_SESSION['apelido']
              ));
                header('Location: sobremim.php?action=alterado');
                ;

            }
            catch(PDOException $e) {
                $errMsg = $e->getMessage();
            }
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'alterado')
        $errMsg = 'Usuário alterado com sucesso!';
    } */
