@extends('layouts.standard')

@section('mainContent')

<form action="{{ route('comics.store') }}" method="POST">
    <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="Inserire titolo del fumetto">
    </div>

    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" cols="30" rows="10">Inserire descrizione</textarea>
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" placeholder="Inserire prezzo di vendita">
    </div>

    <div>
        <label for="sale_date">Data uscita</label>
        <input type="text" name="sale_date" placeholder="Inserire data di uscita del fumetto">
    </div>

    <div>
        <label for="type">Seleziona il tipo</label>
        <select name="type">
            <option value="graphic-novel" selected>Graphic Novel</option>
            <option value="comic-book">Comic Book</option>
        </select>
    </div>

    <button>Aggiungi fumetto</button>
</form>

@endsection