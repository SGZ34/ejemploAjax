<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../../js/jquery.js"></script>
    <title>Ejercicio cuentas bancarias</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="../pitchers/pitchers.php">pitchers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bateadores.php">bateadores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../jugadoresPosicion/jugadoresPosicion.php">Jugadores de posición</a>
  </li>
  
</ul>
    </nav>
    
    <div class="container p-4">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form id="bateadores-form">
              
                <div class="form-group">
                  <input id="nombre" class="form-control" placeholder="nombre del jugador">
                </div>
                <button type="submit" class="btn btn-primary btn-block text-center">
                guardar jugador
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
          <table class="table table-bordered table-sm table-striped">
            <thead>
              <tr>
                <td>numero de uniforme</td>
                <td>nombre del jugador</td>
                <td>bates</td>
                <td>Acciones</td>
              </tr>
            </thead>
            <tbody id="bateadores"></tbody>
          </table>
        </div>
      </div>
    </div>
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../js/bateadores.js"></script>
    
    
</body>
</html>