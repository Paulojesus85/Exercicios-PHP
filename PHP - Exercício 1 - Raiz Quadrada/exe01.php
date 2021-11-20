<!DOCTYPE html>
<html lang="pt-br">
<head><!--Nesta área head nós vamos repetir os mesmos elementos do arquivo HTML.-->
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
  <div> <!--Dentro desta div, nós vamos criar uma área php usando os códigos que marcam o início e o fim das linhas php.-->
      <?php //Abertura da área PHP
        $valor = $_POST ["raiz"]; //Primeiramente criamos uma variável para receber o valor que o usuário vai digitar no arquivo HTML. É necessário usar o mesmo método que foi escolhido no arquivo HTML. No nosso caso, nós escolhemos o método POST. Para indicar o método é preciso usar $_POST ou $_GET (dependendo do método que você escolheu no form do HTML). Depois disso, você precisa indicar qual valor será passado do HTML para o arquivo PHP através do método. Para isso, você precisa abrir [] e dentro indicar o name que você colocou no input que o usuário vai digitar. Sempre terminar a linha com ponto e vírgula.
        echo "A raiz quadrada de ".$valor ." é: ". sqrt($valor); // Após criar a variável com o valor digitado no HTML, nós colocamos um echo para escrever a frase "A raiz quadrada de " e fizemos uma concatenação com a variável que criamos anteriormente. Além disso, usamos a função sqrt($valor) para calcular a raiz quadrada da variável $valor.
      ?><!--Fechamento da área PHP-->
    <br>
    <a href="exe01.html"><br>Voltar<br></a> <!--Para concluir o arquivo, nós usamos a tag <a> para criar um hiperlink na palavra Voltar. Com isso, ao clicar na palavra Voltar, o sistema nós enviará novamente para a página HTML para podermos calcular outra razis quadrada.-->
  </div>
</body>
</html>