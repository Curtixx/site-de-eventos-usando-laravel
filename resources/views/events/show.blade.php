@extends("layouts.main")
@section("title", $event->title)
@section("content")

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <div class="col-md-12" id="descripttion-container">
                    <h3>Sobre:</h3>
                    <p class="event-description">{{$event->description}}</p>
                </div>
                <hr>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{count($event->users)}} Participando</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{$eventOwner['name']}}</p>
                <br>
                @if(!$hasUserJoined)
                    <form action="/events/join/{{$event->id}}" method="POST">
                        @csrf
                        <a href="/events/join/{{ $event->id }}" class="btn btn-primary" id="event-submit"onclick="event.preventDefault();this.closest('form').submit();">
                        Confirmar Presença
                        </a>
                        
                    </form>
                @else
                    <div class="alert alert-info" role="alert">
                        Você já esta participando desse evento
                    </div>
                    <a href="/dashboard"> Ver</a>
                @endif
                <hr>
                <br>
                <h3>O evento possui:</h3>
                <ul id="items-list">
                    @foreach($event->items as $i)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{$i}}</span></li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </div>
</div>

@endsection