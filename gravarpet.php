<?php	// salvar como gravarPet.php

	// 1 - Receber os dados do formulário
	// Os dados chegam nestes dois locais possíveis:
	// Matriz $_GET[""] ou $_POST[""]
	$nome 				= $_POST["nome"];
	$tipo				= $_POST["tipo"];
	$sexo				= $_POST["sexo"];
	$idade				= $_POST["idade"];
	$peso				= $_POST["peso"];
	$dono				= $_POST["dono"];
	$vacinado			= $_POST["vacinado"];
	$ultimaConsulta		= $_POST["ultimaConsulta"];
	$medico				= $_POST["medico"];
	$obs				= $_POST["obs"];
	
	// Dados do arquivo:
	// Vem na matriz $_FILES[""]
	$ArqNome	= $_FILES["foto"]["name"];
	$ArqTipo	= $_FILES["foto"]["type"];
	$ArqTamanho	= $_FILES["foto"]["size"];
	$ArqNomeTmp	= $_FILES["foto"]["tmp_name"];
	
	// https://codeshare.io/OdLyd7
	
	// 2 - Exibir os dados na tela
	echo "<h2>Dados recebidos</h2>";
	echo "Nome do Pet: <b>$nome</b> <br>";
	echo "Tipo: <b>$tipo</b> <br>";
	echo "Sexo: <b>$sexo</b> <br>";
	echo "Idade:<b>$idade</b> <br>";
	echo "Peso: <b>$peso</b> <br>";
	echo "Dono: <b>$dono</b> <br>";
	echo "vacinado :<b>$vacinado</b> <br>";
	echo "Última Consulta :<b>$ultimaConsulta</b> <br>";
	echo "Médico :<b>$medico</b> <br>";
	echo "Observações: <br> <b>$obs</b> <br>";
					
	// Mostrar os dados da foto
	// Será que a foto veio?
	if ($ArqNome <> "" )
	{
		// arquivo veio - vamos exibir os dados
		echo "<fieldset>";
		echo "<legend>Arquivo da Foto</legend>";
		
		echo "	Nome do arquivo: <b>$ArqNome</b> <br>";
		echo "	Tipo: <b>$ArqTipo</b> <br>";
		echo "	Tamanho: <b>$ArqTamanho</b> bytes <br>";
		echo "	Local temporário: <b>$ArqNomeTmp</b> <br>";
		echo "</fieldset>";
		
		$destino ="imgs\\$ArqNome";
		move_uploaded_file($ArqNomeTmp ,$destino );
	}
	
	
	// 3 - Validação de dados
	// 4 - Conectar no SBGD MYSQL
	// 5 - Abrir o banco PETSHOP
	// 6 - Criar o comando de inserção SQL
	// 7 - Enviar o comando inserção SQL p/MYSQL
	// 8 - Mostrar que o registro foi criado

?>