@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
  <h1>Busque um evento</h1>
  <form action="/" method="get">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
  </form>
</div>
<div id="events-container" class="col-md-12">
  @if($search)
  <h2>Você pesquisou por: {{ $search }}</h2>
  @else
  <h2>Próximos Eventos</h2>
  <p>Veja os eventos do próximos dias</p>
  @endif
  <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      <div class="card-body">
        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-participantes">{{ count($event->users) }} Participantes</p>
        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
    @endforeach
    @if(count($events) == 0 && $search)
    <div class="col-12">
      <p>Não foi possível encontrar nenhum evento com {{ $search }} <a href="/">Ver todos</a></p>
    </div>
    @elseif(count($events) == 0)
    <div class="col-12">
      <p>Não há eventos no momento</p>
    </div>
    @endif
  </div>
</div>

@endsection