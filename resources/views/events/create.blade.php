@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu evento</h1>
  <form action="/events" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-2 mb-3">
      <label for="image">Imagem do Evento</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">Evento</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Data do evento</label>
      <input type="date" name="date" id="date" class="form-control" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Cidade</label>
      <input type="text" name="city" id="city" class="form-control" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição</label>
      <textarea name="description" id="description" class="form-control" placeholder="O vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food"> Open Food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection