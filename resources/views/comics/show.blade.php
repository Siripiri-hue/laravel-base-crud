@extends('layouts.standard')

@section('mainContent')

<table>
    <caption>
        <p>Fumetti disponibili</p>
    </caption>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data di uscita</th>
            <th>Categoria</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
    </tbody>
</table>

<a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection