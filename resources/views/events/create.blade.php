@extends("layouts.main")
@section("title", "Criar")
@section("content")

<div id="event-create-conntainer" class="col-md-6 offset-md-3">
    <h1>Criar evento:</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Selecione uma foto para o evento:</label>
            <input class="form-control" type="file" id="formFile" name="image" required>
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control"required placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" class="form-control"required>
        </div>
        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local onde vai ocorrer" required>
        </div>
        <div class="form-group">
            <label for="title">Evento Privado:</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento"></textarea required>
        </div>
        <div class="form-group">
        
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
        </div>
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco">Palco
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Open bar">Open bar
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Open food">Open food
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes">Brindes
        </div>
        <br>
        <input type="submit" value="Criar" class="btn btn-primary">
    </form>
</div>

@endsection
