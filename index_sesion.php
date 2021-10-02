<?php

include("header.php");
include("slider_login.php");
?>
<div style="text-align: center;" >
<img src="img/bienvenidos.jpg" style="
    margin-top: 40px;
    width: 80%;
">
<div>
<h1>
<a class="btn btn-success" href="pdfs/programa_detallado_02.pdf"  target="_blank" style="font-size: 20px;
">PROGRAMA DETALLADO <br> (Abrir y descargar)</a>
</h1>
    </div>
    
    <div>
<div>
<h3 style="">Programa Diario</h3>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#lunes" aria-controls="home" role="tab" data-toggle="tab">Lunes</a></li>
    <li role="presentation"><a href="#martes" aria-controls="profile" role="tab" data-toggle="tab">Martes</a></li>
    <li role="presentation"><a href="#miercoles" aria-controls="messages" role="tab" data-toggle="tab">Miércoles</a></li>
  <li role="presentation"><a href="#jueves" aria-controls="messages" role="tab" data-toggle="tab">Jueves</a></li>
  <li role="presentation"><a href="#jueves" aria-controls="messages" role="tab" data-toggle="tab">viernes</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="lunes">
      <img src="img/tab_lunes.PNG">
    </div>
    <div role="tabpanel" class="tab-pane" id="martes">
            <img src="img/tab_martes.PNG">
      </div>
    <div role="tabpanel" class="tab-pane" id="miercoles">
              <img src="img/tab_miercoles.PNG">
    </div>
    <div role="tabpanel" class="tab-pane" id="jueves">
              <img src="img/tab_jueves.PNG">
    
      </div>
    <div role="tabpanel" class="tab-pane" id="viernes">
              <img src="img/tab_viernes.PNG">
    
    </div>
  </div>

</div>
<?php

//Poner abajito algo que diga registrarte y abra el modal 
//include("ponentes.php");
//include("calendario_eventos.php");

//include("galeria_home.php");
include("footer.php");

?>

