$(document).ready(function(){
  Carga();
});
  function Carga(){
    var tablaDatos = $("#datos");
    var route = "/menus";

    $("#datos").empty();
    $.get(route, function(res){
      $(res).each(function(key, value){
        tablaDatos.append("<tr><td>"+value.menu+"</td>"+
          "<td>"+
            "<button class='btn btn-primary' value="+value.id+" OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'>Editar</button>"+
            "<button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button>"+
          "</td>"+
        "</tr>");
      });
    });
  }

  function Eliminar(btn){
    var route="/menu/"+btn.value+"";
    var token=$("#token").val();

    $.ajax({
      url:route,
      headers: {'X-CSRF-TOKEN': token},
      type:'DELETE',
      dataType: 'json',
      success: function(){
        Carga();
        $("#msj-success").fadeIn();
      }
    });
  }

  function Mostrar(btn){
    var route="/menu/"+btn.value+"/edit";

    $.get(route, function(res){
      $("#menu").val(res.menu);
      $("#id").val(res.id);
      });
    }

    $("#actualizar").click(function(){
      var value=$("#id").val();
      var dato = $("#menu").val();
      var route="/menu/"+value+"";
      var token=$("#token").val();

      $.ajax({
        url:route,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType: 'json',
        data:{menu:dato},
        success: function(){
          Carga();
          $("#myModal").modal('toggle');
          $("#msj-success").fadeIn();
        }
      });
    });
