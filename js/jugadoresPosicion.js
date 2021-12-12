$(function () {
  obtenerPosicion();
  $("#posicion-form").submit(function (e) {
    const jugador = {
      nombre: $("#nombre").val(),
      bates: "",
      defensas: "",
    };
    $.post("add-posicion.php", jugador, function (res) {
      console.log(res);
      obtenerPosicion();
      $("#posicion-form").trigger("reset");
    });

    e.preventDefault();
  });

  function obtenerPosicion() {
    $.ajax({
      url: "posicion-list.php",
      type: "GET",
      success: function (res) {
        let template = "";
        let bateadores = JSON.parse(res);
        bateadores.forEach((d) => {
          template += `
                    <tr numeroUniforme = ${d.numeroUniforme} bates=${d.bates} defensas = ${d.defensas}>
                        <td>${d.numeroUniforme}</td>
                        <td>${d.nombreJugador}</td>
                        <td>${d.bates}</td>
                        <td>${d.defensas}</td>
                        <td>
                            <button class="btn btn-danger quitarBates">quitar bates</button>
                            <button class="btn btn-success aumentarBates">añadir bates</button>
                        </td>
                        <td>
                            <button class="btn btn-danger quitarDefensas">quitar defensas</button>
                            <button class="btn btn-success aumentarDefensas">añadir defenas</button>
                        </td>
                    </tr>
                  `;
        });
        $("#posicion").html(template);
      },
    });
  }

  $(document).on("click", ".quitarBates", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
      defensas: defensas,
    };

    $.post("quitar-bates.php", jugador, function (res) {
      obtenerPosicion();
      console.log(res);
    });
  });

  $(document).on("click", ".aumentarBates", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
      defensas: defensas,
    };

    $.post("aumentar-bates.php", jugador, function (res) {
      obtenerPosicion();
      console.log(res);
    });
  });

  $(document).on("click", ".quitarDefensas", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
      defensas: defensas,
    };

    $.post("quitar-defensas.php", jugador, function (res) {
      obtenerPosicion();
      console.log(res);
    });
  });

  $(document).on("click", ".aumentarDefensas", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
      defensas: defensas,
    };

    $.post("aumentar-defensas.php", jugador, function (res) {
      obtenerPosicion();
      console.log(res);
    });
  });
});
