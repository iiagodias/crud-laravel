<html>
<head>
</head>
<body>
    <form action="{{ route('modelos.store') }}" method="POST">
        @csrf
        <input type="text" name="modelo" /><br><br>
        <select name="status">
          <option value="ativo">Ativo</option>
          <option value="inativo">Inativo</option>
        </select>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>