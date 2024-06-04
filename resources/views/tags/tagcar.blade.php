@extends('layouts.master')
@section('title')
    Tager une voiture
@endsection
@section('content')
<form action="{{ route('tagscars.store') }}" class="mb-5" method="POST">
  @csrf
  <div class="mb-3">
     <label for="InputCar" class="form-label">Voiture</label>
     <select name="car_id" class="form-control" >
        <option value="."></option>
        @foreach ($cars as $car )
          <option value="{{ $car->id }}">{{ $car->immat }}</option>
        @endforeach
     </select>
   </div>
  <div class="mb-3">
     <label for="InputTag" class="form-label">Tags</label>
     <select multiple name="tag_id[]" id="tag_id" class="form-control">
        @foreach ($tags as $tag )
          <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
        @endforeach
     </select>
   </div>

    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
  </form>
@endsection