@extends("layouts.main")
@section("title", 'Painel')
@section("content")

<div class="col-md-10 offset-md-1 dashboard-titlle-container">
    <h1>Eventos:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) >0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">+</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($events as $e)
                <tr>
                    <td scope="row"> {{$loop->index +1}} </td>
                    <td><a href="/events/{{$e->id}}">{{$e->title}}</a></td>
                    <td>{{count($e->users)}}</td>
                    <td>
                        <a href="/events/edit/{{$e->id}}" class="btn btn-info"> <ion-icon name="create-outline"></ion-icon>Editar</a> 
                        <form action="/events/{{$e->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> <ion-icon name="trash-outline"></ion-icon>Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você não possiu um evento! <a href="/events/create">Crie o seu evento</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-titlle-container">
    <h1>Eventos que participo:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsAsParticipant) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">+</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach($eventsAsParticipant as $e)
                    <tr>
                        <td scope="row"> {{$loop->index +1}} </td>
                        <td><a href="/events/{{$e->id}}">{{$e->title}}</a></td>
                        <td>{{count($e->users)}}</td>
                        <td>
                           <form action="/events/leave/{{$e->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                                Sair
                            </button>
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você não esta participando de eventos <a href="/">Ver os eventos</a></p>
    @endif
</div>

@endsection