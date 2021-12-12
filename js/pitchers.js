$(function () {
  obtenerPitchers();
  $("#pitchers-form").submit(function (e) {
    const jugador = {
      nombre: $("#nombre").val(),
      lanzamientos: "",
      defensas: "",
    };
    $.post("add-pitcher.php", jugador, function (res) {
      console.log(res);
      obtenerPitchers();
      $("#pitchers-form").trigger("reset");
    });

    e.preventDefault();
  });

  function obtenerPitchers() {
    $.ajax({
      url: "pitchers-list.php",
      type: "GET",
      success: function (res) {
        let template = "";
        let bateadores = JSON.parse(res);
        bateadores.forEach((d) => {
          template += `
                  <tr numeroUniforme = ${d.numeroUniforme} lanzamientos=${d.lanzamientos} defensas = ${d.defensas}>
                      <td>${d.numeroUniforme}</td>
                      <td>${d.nombreJugador}</td>
                      <td>${d.lanzamientos}</td>
                      <td>${d.defensas}</td>
                      <td>
                          <button class="btn btn-danger quitarLanzamientos">quitar lanzamientos</button>
                          <button class="btn btn-success aumentarLanzamientos">añadir lanzamientos</button>
                      </td>
                      <td>
                          <button class="btn btn-danger quitarDefensas">quitar defensas</button>
                          <button class="btn btn-success aumentarDefensas">añadir defenas</button>
                      </td>
                  </tr>
                `;
        });
        $("#pitchers").html(template);
      },
    });
  }

  $(document).on("click", ".quitarLanzamientos", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let lanzamientos = $(element).attr("lanzamientos");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      lanzamientos: lanzamientos,
      defensas: defensas,
    };

    $.post("quitar-lanzamientos.php", jugador, function (res) {
      obtenerPitchers();
      console.log(res);
    });
  });

  $(document).on("click", ".aumentarLanzamientos", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let lanzamientos = $(element).attr("lanzamientos");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      lanzamientos: lanzamientos,
      defensas: defensas,
    };

    $.post("aumentar-lanzamientos.php", jugador, function (res) {
      obtenerPitchers();
      console.log(res);
    });
  });

  $(document).on("click", ".quitarDefensas", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let lanzamientos = $(element).attr("lanzamientos");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      lanzamientos: lanzamientos,
      defensas: defensas,
    };

    $.post("quitar-defensas.php", jugador, function (res) {
      obtenerPitchers();
      console.log(res);
    });
  });

  $(document).on("click", ".aumentarDefensas", function () {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let lanzamientos = $(element).attr("lanzamientos");
    let defensas = $(element).attr("defensas");

    let jugador = {
      numeroUniforme: numeroUniforme,
      lanzamientos: lanzamientos,
      defensas: defensas,
    };

    $.post("aumentar-defensas.php", jugador, function (res) {
      obtenerPitchers();
      console.log(res);
    });
  });
});
