<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página Principal</a>
            <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form action="" method="POST">
        
    </form>
    </body>
    <form action="" method="POST">
            <center>
                <label>Nome: </label><br>
                <input type="text" name="nome" required><br>

                <label>Cargo: </label><br>
                <input type="text" name="cargo" required><br>

                <label>Salário: </label><br>
                <input type="number" name="salario" required><br>

                <label>Descrição: </label><br>
                <input type="text" name="descricao" required><br>

                <br><button class='btn btn-success'>Salvar</button>

</html>
<?php
function conexao(){
  $nomeServidor = "localhost";
  $database = "database";
}
function inserir($nome, $cargo, $salario, $descricao){
  $conexao = conexao();
  $comando = "INSERT INTO funcionarios(nome,cargo,salario,descricao) VALUES ('$nome', '$cargo', $salario, '$descricao')";
  
  if(mysqli_query($conexao, $comando)){
    echo "Registro do Funcionário efetuado com sucesso";
  }else{
    echo "Erro: ".$comando. "<br>".mysqli_error($conexao);
  }
}

   if (isset($_POST['nome'])){
   print_r($_POST);
   inserir($_POST['nome'], $_POST['cargo'], $_POST['salario'], $_POST['descricao']);
   header("Location: funcionarios.php");
   }
  
  ?>