@extends('layouts.master')
@section('title')
    Créer voiture
@endsection
@section('content')
@session('success')
  <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        Voiture enregistrée avec succès!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
@endsession
<form action="{{ route('cars.store') }}" class="mb-5" method="POST">
  @csrf
   <div class="mb-3">
     <label for="InputEnergy" class="form-label">Catégorie</label>
     <select name="category_id" class="form-control">
        <option value="."></option>
        @foreach ($categories as $category )
          <option value="{{ $category->id }}">{{ $category->type }}</option>
        @endforeach
     </select>
   </div>
    <div class="mb-3">
      <label for="InputImmat" class="form-label">Numéro d'immatriculation</label>
      <input type="string" class="form-control @error('immat') is-invalid @enderror" name="immat">
      @error('immat')
       <span class="alert alert-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="InputBrand" class="form-label">Marque</label>
      <input type="string" class="form-control @error('brand') is-invalid @enderror" name="brand">
      @error('brand')
       <span class="alert alert-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
        <label for="InputColor" class="form-label">Couleur carosserie</label>
        <input type="string" class="form-control @error('color_car') is-invalid @enderror" name="color_car">
        @error('color_car')
         <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="InputEnergy" class="form-label">Carburant</label>
        <select name="energy" class="form-control @error('energy') is-invalid @enderror">
            <option value="."></option>
            <option value="Essence">Essence</option>
            <option value="Gas-oil">Gas-oil</option>
            <option value="Electricite">Electricité</option>
          </select>
          @error('energy')
           <span class="alert alert-danger">{{ $message }}</span>
          @enderror
    </div>
    <div class="mb-3">
        <label for="InputNumber" class="form-label">Nombre de chevaux</label>
        <input type="int" class="form-control @error('number') is-invalid @enderror" name="number">
        @error('number')
         <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
     <label for="InputTag" class="form-label">Tags</label>
     <select multiple name="tag_id[]" id="tag_id" class="form-control">
        @foreach ($tagcars as $tagcar)
          <option value="{{ $tagcar->tag_id}}">{{ $tagcar->tag->tag_name }}</option>
        @endforeach
     </select>
   </div>
    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
  </form>
@endsection