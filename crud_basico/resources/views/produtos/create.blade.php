<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="{{ route('registrar_produto') }} " method="post">
     @csrf
     <label for="">nome</label> <br>
     <input type="text" name="nome"> <br>
     <label for="">Custo</label> <br>
     <input type="text" name="custo"> <br>
     <label for="">Preco</label> <br>
     <input type="text" name="preco"> <br>
     <label for="">Quantidade</label> <br>
     <input type="text" name="quantidade"> <br>
     <button>Salvar</button>
   </form>
</body>
</html>