$(function () {
  obtenerCuentas();
  $("#cuentas-result").hide();
  $("#search").keyup(function () {
    if ($("#search").val()) {
      let search = $("#search").val();

      $.ajax({
        url: "search-cuenta.php",
        type: "POST",
        data: { search },
        success: function (res) {
          let cuentas = JSON.parse(res);
          let template = "";

          cuentas.forEach((c) => {
            template += `<ul>
          <li">${c.numeroCuenta}</li>
          <li">${c.Cliente}</li>
          <li">${c.saldo}</li>
          </ul>`;
          });
          $("#container").html(template);
          $("#cuentas-result").show();
        },
      });
    }
  });

  $("#cuentas-form").submit(function (e) {
    const cuenta = {
      numeroCuenta: $("#numeroCuenta").val(),
      nombre: $("#nombre").val(),
      saldo: "",
    };
    $.post("add-cuenta.php", cuenta, function (res) {
      console.log(res);
      obtenerCuentas();
      $("#cuentas-form").trigger("reset");
    });

    e.preventDefault();
  });

  function obtenerCuentas() {
    $.ajax({
      url: "cuentas-list.php",
      type: "GET",
      success: function (res) {
        let template = "";
        let cuentas = JSON.parse(res);
        cuentas.forEach((c) => {
          template += `
                <tr numeroCuenta="${c.numeroCuenta}">
                    <td>${c.numeroCuenta}</td>
                    <td>${c.Cliente}</td>
                    <td>${c.saldo}</td>
                    <td>
                        <button class="btn btn-success depositar" data-bs-toggle="modal" data-bs-target="#exampleModal">depositar</button>
                        <button class="btn btn-danger eliminarCuenta">Delete</button>
                    </td>
                </tr>
              `;
        });
        $("#cuentas").html(template);
      },
    });
  }

  $(document).on("click", ".eliminarCuenta", function () {
    let element = $(this)[0].parentElement.parentElement;
    let numeroCuenta = $(element).attr("numeroCuenta");

    $.post("eliminar-cuenta.php", { numeroCuenta }, function (res) {
      obtenerCuentas();
      console.log(res);
    });
  });

  $(document).on("click", ".depositar", function () {
    let element = $(this)[0].parentElement.parentElement;
    let numeroCuenta = $(element).attr("numeroCuenta");
    $.post("cuenta-single.php", { numeroCuenta }, function (res) {
      let cuenta = JSON.parse(res);

      $("#numeroCuentaDeposito").val(cuenta[0].numeroCuenta);
      $("#clienteEditar").val(cuenta[0].Cliente);
      $("#saldo").val(cuenta[0].saldo);
    });
  });

  $("#depositar-form").submit(function (e) {
    const cuenta = {
      numeroCuenta: $("#numeroCuentaDeposito").val(),
      nombre: $("#clienteEditar").val(),
      saldo: $("#saldo").val(),
      saldoEditar: $("#deposito").val(),
    };

    $.post("editar-cuenta.php", cuenta, function (res) {
      obtenerCuentas();
    });

    e.preventDefault();
  });
});
