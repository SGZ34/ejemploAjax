<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../js/jquery.js"></script>
    <title>Ejercicio cuentas bancarias</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <ul class="navbar-nav p-4">
            <form action="" class="form-inline my-2">
                <input type="search" id="search" class="form-control mr-sm-2" placeholder="buscar cuenta bancaria">
                <button class="btn btn-success my-2" type="submit">buscar</button>
            </form>
        </ul>
    </nav>
    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form id="cuentas-form">
                <div class="form-group">
                  <input type="text" id="numeroCuenta" placeholder="numero de cuenta" class="form-control">
                </div>
                <div class="form-group">
                  <input id="nombre" class="form-control" placeholder="nombre del cliente">
                </div>
                <button type="submit" class="btn btn-primary btn-block text-center">
                  crear cuenta
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
          <div class="card my-4" id="cuentas-result">
            <div class="card-body">
              <!-- SEARCH -->
              <ul id="container"></ul>
            </div>
          </div>

          <table class="table table-bordered table-sm table-striped">
            <thead>
              <tr>
                <td>numero de cuenta</td>
                <td>nombre del cliente</td>
                <td>saldo</td>
                <td>Acciones</td>
              </tr>
            </thead>
            <tbody id="cuentas"></tbody>
          </table>
        </div>
      </div>
    </div>

          

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="depositar-form">
            <div class="modal-body">
              <input type="hidden" id="numeroCuentaDeposito">
              <input type="hidden" id="saldo">
              <input type="hidden" id="clienteEditar">
             <input type="text" placeholder="Digite el dinero que quiere depositar" class="form-control" id="deposito">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">guardar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/cuentas.js"></script>
    
    
</body>
</html>