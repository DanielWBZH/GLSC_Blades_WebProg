<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class = "min-vh-100 d-flex flex-column bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="https://www.youtube.com/watch?v=OItoPcSXvJw">Da Web</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/lehome">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/add">Add</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/setting">Edit</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            @yield('content')
          </div>

          <div>
            <br>
            <br>
          </div>

          <footer class = "mt-auto d-flex flex-column justify-content-center align-items-center bg-info p-3 mt-5">
            <div class = "d-flex flex-row justify-content-evenly w-50 my-1">

            </div>
            <div class = "mt-1 d-flex align-items-center justify-content-center text-white">
                &copy;A Very Low Budget Lazy Web&copy;
            </div>
        </footer>
    </body>
</html>
