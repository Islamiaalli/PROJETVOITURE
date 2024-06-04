@extends('layouts.master')
@section('title')
    Liste des voitures
@endsection
@section('content')
<div class="card text-bg-light">
  <div class="card-header">LISTES DES VOITURES PAR CATEGORIE</div>
  <div class="card-body">
    <table class="table form" id="datatable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Immatriculation</th>
          <th scope="col">Marque</th>
          <th scope="col">Couleur Carrosserire</th>
          <th scope="col">Carburant</th>
          <th scope="col">Nbre de chevaux</th>
          <th scope="col">Type</th>
          <th scope="col">Prix</th>
          <th scope="col">Usage</th>
          <th scope="col">hastags</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($cars as $key=> $car )
              <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $car->immat }}</td>
                  <td>{{ $car->brand }}</td>
                  <td>{{ $car->color_car }}</td>
                  <td>{{ $car->energy }}</td>
                  <td>{{ $car->number }}</td>
                  <td>{{ $car->category->type }}</td>
                  <td>{{ $car->category->price }}</td>
                  <td>{{ $car->category->usage }}</td>
                  <td>
                  @foreach ($car->tagcars as $tagcar )
                  {{$tagcar->Tag->tag_name}}
                  @endforeach
                  </td>
                  <td> 
                    <a href="{{ route('cars.edit',$car) }}" class="text-info"> 
                      <i class="fa fa-edit fa-2x"></i>
                    </a>
                    <a href="{{ route('cars.destroy',$car) }}" class="text-danger"> 
                      <i class="fa fa-trash fa-2x"></i>
                    </a>
                  </td>
              </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection


@push('js')
  <script>
      new DataTable('#datatable')    
  </script>
@endpush