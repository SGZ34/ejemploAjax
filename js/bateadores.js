$(function () {
  obtenerBateadores();
  $("#bateadores-form").submit(function (e) {
    const jugador = {
      nombre: $("#nombre").val(),
      bates: "",
    };
    $.post("add-bateador.php", jugador, function (res) {
      console.log(res);
      obtenerBateadores();
      $("#bateadores-form").trigger("reset");
    });

    e.preventDefault();
  });

  function obtenerBateadores() {
    $.ajax({
      url: "bateadores-list.php",
      type: "GET",
      success: function (res) {
        let template = "";
        let bateadores = JSON.parse(res);
        bateadores.forEach((d) => {
          template += `
                <tr numeroUniforme = ${d.numeroUniforme} bates=${d.bates}>
                    <td>${d.numeroUniforme}</td>
                    <td>${d.nombreJugador}</td>
                    <td>${d.bates}</td>
                    <td>
                        <button class="btn btn-danger quitarBates">quitar bates</button>
                        <button class="btn btn-success aumentarBates">añadir bates</button>
                    </td>
                </tr>
              `;
        });
        $("#bateadores").html(template);
      },
    });
  }

  $(document).on("click", ".quitarBates", function (e) {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
    };

    $.post("quitar-bates.php", jugador, function (res) {
      obtenerBateadores();
      console.log(res);
    });
  });

  $(document).on("click", ".aumentarBates", function (e) {
    let element = $(this)[0].parentElement.parentElement;

    let numeroUniforme = $(element).attr("numeroUniforme");
    let bates = $(element).attr("bates");

    let jugador = {
      numeroUniforme: numeroUniforme,
      bates: bates,
    };

    $.post("aumentar-bates.php", jugador, function (res) {
      obtenerBateadores();
      console.log(res);
    });
  });
});
