@extends("layouts.main")
@section("title", "Alterar ".$event->title)
@section("content")

<div id="event-create-conntainer" class="col-md-6 offset-md-3">
    <h1>Alterar o evento: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="formFile" class="form-label">Selecione a foto que deseja:</label>
            <input class="form-control" type="file" id="formFile" name="image" >
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" class="form-control" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local onde vai ocorrer"  value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="title">Evento Privado:</label>
            <select name="private" id="private" class="form-control" >
                <option value="0">Não</option>
                <option value="1"{{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento"> {{$event->description}} </textarea >
        </div>
        <div class="form-group">
        <label for="title">Adicione itens que terá no evento:</label>
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
        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>
</div>

@endsection
