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
  
</body>
</html>