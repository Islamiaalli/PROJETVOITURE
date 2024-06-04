@extends('layouts.master')
@section('title')
    Créer Tags
@endsection
@section('content')
@session('success')
  <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        Tag enregistrée avec succès!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
@endsession
<form action="{{ route('tags.store') }}" class="mb-5" method="POST">
  @csrf
    <div class="mb-3">
      <label for="InputName" class="form-label">Tags name</label>
      <input type="string" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name">
      @error('tag_name')
       <span class="alert alert-danger">{{ $message }}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
  </form>
@endsection