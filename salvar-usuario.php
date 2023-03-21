<?php 
    switch ($_REQUEST["acao"]) {
    	case 'cadastrar':
    	$nome = $_POST['nome'];
    	$email = $_POST['email'];
    	$senha = $_POST['senha'];
    	$data = $_POST['data'];

    	$sql = "INSERT INTO usuarios (nome, 
            email, senha, data) VALUES ('{$nome}', '{$email}', '{$senha}', 
        '{$data}')";

    	$res = $conn->query($sql);
    		break;

    		case 'editar':
    	
    	default:
    		// code...
    		break;

    		case 'excluir':

    		break; 
    }?>  