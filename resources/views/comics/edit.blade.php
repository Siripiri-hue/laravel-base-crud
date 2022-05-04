@extends('layouts.standard')

@section('mainContent')

<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="{{ $comic->title }}">
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" cols="30" rows="10">{{ $comic->description }}</textarea>
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" placeholder="{{ $comic->series }}">
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" placeholder="{{ $comic->price }}">
    </div>

    <div>
        <label for="sale_date">Data uscita</label>
        <input type="text" name="sale_date" placeholder="{{ $comic->sale_date }}">
    </div>

    <div>
        <label for="type">Seleziona il tipo</label>
        <select name="type">
            <option value="graphic-novel" {{ ($comic->type == 'graphic-novel') ? 'selected' : ''}}>Graphic Novel</option>
            <option value="comic-book" {{ ($comic->type == 'comic-book') ? 'selected' : ''}}>Comic Book</option>
        </select>
    </div>

    <button>Aggiungi fumetto</button>
</form>

@endsection