@extends("layouts.main")
@section("title", "HC Events")
@section("content")

<div id="search-container" class="col-md-12">
    <h1>Buscar Evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h1>Buscando por: {{$search}}</h1>
    @endif
    @if(count($events) != 0)
    <h2>Próximos Eventos:</h2>
    <p class="subtitle">Veja os eventos que irá ocorrer nos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $e)
        <div class="card col-md-3">
            <img src="/img/events/{{$e->image}}" alt="{{$e->title}}">
            <div class="card-body">
                <p class="card-date">
                    {{date("d/m/Y", strtotime($e->date))}}
                </p>
                <h5 class="card-title">{{$e->title}}</h5>
                <p class="card-participants">{{count($e->users)}} Participantes</p>
                <a href="/events/{{$e->id}}" class="btn btn-primary">Sobre</a>
            </div>
        </div>
        @endforeach
        @else
            <h3>Não há eventos!</h3>
            <a href="/">Ver todos os eventos</a>
        @endif
    </div>
</div>
@endsection