<?php
error_reporting(0);
    require 'config.php';

    if ($_GET['elogio'] == 'Voltar'){
        header('Location: info.php?i=elogios');
    }else if ($_GET['sugestao'] == 'Voltar'){
        header('Location: info.php?i=sugestoes');
    }else if ($_GET['reclamacao'] == 'Voltar'){
        header('Location: info.php?i=reclamacoes');
    }else if ($_GET['denuncia'] == 'Voltar'){
        header('Location: info.php?i=denuncias');
    }

?>