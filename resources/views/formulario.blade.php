<form action="{{ route('formulario.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <button type="submit">Guardar</button>
</form>
