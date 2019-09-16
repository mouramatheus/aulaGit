<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Iniciando um repositorio-->

	<?php 
		//git init iniciando repositorio

		/*Para monitor o arquivo no git usa:

		git add "nomeDoArquivo"

		comando para adicionar(monitorar) varios arquivos

		git add -A


		----------------------------------------------------------------------------------------------------
		
		Quando usar o git status e verificar o que foi modificado. Caso queira detalhar devemos usar o comando:
		git diff
		
		---------------------------------------------------------------------------------------------------------
		branch = mesa de trabalho atual

		git log mostra todos os commit's feitos

		---------------------------------------------------
		git branch mostra as mesas de trabalhos que tenho e qual a atual 

		para mudar de uma mesa para outra usa o git checkout "nomeDaMesa" caso exista é feito a mudança, caso não é criado o novo branch


		--------------------------------------------------------------------------------------------------------------------------------------

		colocando o commit em um repositorio publico:

		1-) primeiro devemos validar o computador, para isso vamos criar uma chave ssh com o comando :

		$ ssh-keygen -t rsa -b 4096 -C "your_email@example.com"


		--------------------------------------------------------------------------------------------------------

		Para fazer o commit de tudo mesmo que não estejam trackeados os arquivos 

		git commit -am "descricao do commit"

		----------------------------------------------------------------------------------------------------------------------------------

		para voltar um backup usamos:

		git reset --hard codigo pego no git log referente ao backup

		-------------------------------------------------------------------------------------------------------------------------------------

		zerando a conexao com o repositorio remoto.
		git remote rm origin

		-------------------------------
		conenctando no repositorio:

		git remote add origin https://github.com/mouramatheus/aulaGit

		verifica se conecntou:
		git remote -v

		como puxar do repositorio remoto git hub para repositorio local ?? os dois devem estao em sicronia
		
		enviar para o remoto

		git push origin master

		empurre o arquivo do repositorio remoto da mesa de trabalho atual para o repositorio remoto


		*/
	?>

</body>
</html>