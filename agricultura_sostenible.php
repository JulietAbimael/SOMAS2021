<?php
include("header.php");
?>

<center>
<img src="img/agricultura1.PNG" alt="Emblema" style="">
<img src="img/agricultura2.PNG" alt="Emblema" style="">


<style type="text/css">
    .button {
    background:	#1CAF2A;
    color:#fff;
    display:block;
    font-size: 1.25em;
    margin:40px;
        padding:10px 0px;
    text-align: center;
        width:200px;
        text-decoration: none;
        box-shadow: 0px 3px 0px;
        border-radius: 50px;
    }
    
    .container1{
        position:fixed;
        bottom:20px;
        right: 150px;
        
        
    } 
    
    
  
}

    
</style>

<body>


    <div class="container1">

      
    <a href="pdfs/RegistroManuscrito.pdf" download="Registro" class="button"> Registro manuscrito </a>
    <a href="pdfs/indicacionesPonentes.pdf" download="Ponentes" class="button"> Indicaciones Ponentes</a>
     <a href="pdfs/ejemploExtenso.pdf" download="Seccion extenso" class="button"> Ejemplo extenso</a>
     <a href="pdfs/ResumenEjemplo.pdf" download="Resumen" class="button"> Ejemplo resumen </a>

    
     </div>
  
</body>
   
</center>
<?php
include("footer.php");
?>