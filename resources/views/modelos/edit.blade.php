<html>
<head>
</head>
<body>
    <form action="{{ route('modelos.update', ['modelo' => $modelo->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="modelo" value="{{ old('modelo', $modelo->modelo) }}" /><br><br>
        <select name="status">
          <option value="ativo" @if ($modelo->status === 'ativo') selected @endif >Ativo</option>
          <option value="inativo" @if ($modelo->status === 'inativo') selected @endif>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>