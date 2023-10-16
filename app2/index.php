<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Ids Osinga - Alfa-college</title>
</head>

<body>
    <!-- als je bootstrap gebruikt, zet dan alles in de container-class -->
    <div class="container">
        <!-- hier volgt de navigatiebalk -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://www.idsosinga.nl" target="_blank">Ids Osinga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://scloppersum.nl" target="_blank">SC Loppersum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Bootstrapbijbel</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Rekenen
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/app1/index.html">Tafel genereer-app</a></li>
                                <li><a class="dropdown-item" href="/app2/index.html">Tafel oefen-app</a></li>
                                <li><a class="dropdown-item" href="/app3/index.html">app 3</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- einde navigatiebalk-->
        <div class="text-center">
            <h1>Tafel oefen-app</h1>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form class="row g-3 mb-2">
                    <div class="col-md-4">
                        <label for="inputTafelvan" class="form-label">Tafel van</label>
                        <input type="number" class="form-control" id="inputTafelvan">
                    </div>
                    <div class="col-md-4">
                        <label for="inputTafeltot" class="form-label">Tafel tot</label>
                        <input type="number" class="form-control" id="inputTafeltot" value="10">
                    </div>
                    <div class="d-grid col-md-4 mt-5">
                        <button type="button" class="btn btn-primary" onclick="showOpdracht()">GO</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div class="card-header">
                        Tafel van ... oefenen
                    </div>
                    <div id="tafel" class="card-body">
                        <div class="input-group mb-3">
                            <input id="inputOpdracht" type="text" class="form-control" placeholder="Som" disabled>
                            <span class="input-group-text">=</span>
                            <input id="inputOplossing" type="text" class="form-control" placeholder="Antwoord">
                          </div>
                          <div class="d-grid">
                            <button class="btn btn-success" onclick="checkOplossing()">Check oplossing</button>
                          </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        made by OSD
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="app2script.js"></script>
</body>

</html>