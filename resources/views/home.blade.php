@extends('layouts.app')

@section('page-title', 'Italaravel')
    
@section('content')
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Data di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero di carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
              </thead>
            <tbody>
                @forelse ($trains as $train)
              <tr>
                <th scope="row">{{$train->azienda}} <span class="badge bg-danger">AV</span> </th>
                <td>{{$train->stazione_di_partenza}}</td>
                <td>{{$train->stazione_di_arrivo}}</td>
                <td>{{$train->data_di_partenza}}</td>
                <td>{{$train->data_di_arrivo}}</td>
                <td>{{$train->orario_di_partenza}}</td>
                <td>{{$train->orario_di_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->in_orario}}</td>
                <td>{{$train->cancellato}}</td>
              </tr>
                @empty
                <div class="alert alert-danger" role="alert">
                    Nessun treno disponibile
                </div>
                @endforelse
            </tbody>
          </table>
        
            
            
        
    </div>
@endsection