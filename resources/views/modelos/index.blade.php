@foreach($modelos as $modelo)
   <a href="{{route('modelos.show', ['modelo' => $modelo->id])}}"> {{ $modelo->modelo }} </a>
   <a href="{{route('modelos.edit', ['modelo' => $modelo->id])}}"> <strong>Editar<strong> </a>
   <form action="{{route('modelos.destroy', ['modelo' => $modelo->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Deletar</button>
   </form>
@endforeach