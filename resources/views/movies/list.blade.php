<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}} - Lista Film</title>

  @vite('resources/js/app.js')
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('homepage') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <main>
    <section class="container">
      <h2 class="my-4">MOVIES</h2>

      <div class="row">
        <div class="card-deck">
          @forelse ($movies as $movie)
              <div class="col-md-12">
                  <div class="card mb-4 box-shadow">
                      <div class="card-body">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                          <p class="card-text"><strong>Titolo originale:</strong> {{ $movie->original_title }}</p>
                          <p class="card-text"><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
                          <p class="card-text"><strong>Data di uscita:</strong> {{ $movie->date }}</p>
                          <p class="card-text"><strong>Voto:</strong> {{ $movie->vote }}</p>
                      </div>
                  </div>
              </div>
          @empty
              <div class="col-md-12">
                  <div class="alert alert-info">Non ci sono film disponibili.</div>
              </div>
          @endforelse
        </div>
      </div>
    </section>
  </main>
</body>
</html>