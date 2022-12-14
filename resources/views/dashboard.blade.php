@extends("layouts.main")
@section("title", 'Painel')
@section("content")

<div class="col-md-10 offset-md-1 dashboard-titlle-container">
    <h1>Eventos:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    if(count($events) >0)
    @else
    <p>Você não possiu um evento! <a href="/events/create">Crie o seu evento</a></p>
    @endif
</div>

@endsection