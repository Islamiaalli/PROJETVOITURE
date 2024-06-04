<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">VOITURE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
    </div>
    <link rel="stylesheet" href="{!! asset('/icons/car-sport-outline.svg') !!}">
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Categorie</a></li>
                  <li class="nav-item"><a href="{{ route('cars') }}" class="nav-link">Vehicule</a></li>
                  <li class="nav-item"><a href="{{ route('tags') }}" class="nav-link">#</a></li>
                  <li class="nav-item"><a href="{{ route('tagscars') }}" class="nav-link">#Voiture</a></li>
                  <li class="nav-item" class="text-white"><a href="{{ route('cars.index') }}" class="nav-link"><i class="fa fa-car"></i></a></li>
      </ul>
    </div>
  </nav>