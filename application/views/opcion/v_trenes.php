<?php
 $this->load->view('layout/menu');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <p>
            <p class="text-center" style="font-size:20px; font-weight:20; margin-bottom: 2px;">Trenes</p>
          </p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <p class="text-right">
            <?php 
              echo "<p class='text-muted text-right'><em>".date("d/m/Y"); echo "T: ".date("h:i:sa");  $user =$this->session->userdata('user'); 
              echo " Bienvenido&nbsp;<a href='" .base_url('index.php/c_general/c_bEditarUsr')."'>".$user."</a></em></p>";
            ?>
          </p>
        </div>
      </div><!--Fin row-->
<div class="row">
  <div class="col-md-12" style="background-color:white;">
  <div id="mainInfo">
    <div class="container-fluid">
      <div class="row">
      </div><!--Fin row-->
      <div class="row">
        <div class="col-md-12">
          <div id="maininfo">
                    <form id="frmoptions" name="frmoptions" method="post" <?php echo "action='".base_url('index.php/c_general/c_fibonacci')."'"; ?>>
                        <table border="0" align="center" style="" width="" class=" table-striped table-condensed table-bordered">   
                            <tr>
                              <th class="text-right info centrame">Velocidad tren V1</th>
                              <td><input type="text" class="form-control calculame input-number" name="v1" id="v1" ></td>
                            </tr>
                            <tr>  
                              <th class="text-right info centrame">Velocidad tren V2</th>
                              <td><input type="text" class="form-control calculame input-number" name="v2" id="v2" ></td>
                            </tr>
                            <tr>  
                              <th class="text-right info centrame">Kilometros</th>
                              <td><input type="text" class="form-control calculame input-number" name="km" id="km"></td>
                           </tr>
                           <tr>
                              <td colspan="2" align="center">
                                <button type="button" id="btnconsultar" class="btn btn-success">Calcular</button>
                              </td>
                            </tr>                                                     
                          </table>                        
                        </form>                     
              <br>
              <div class='alert alert-info' role='alert' style='margin-bottom:5px;'>
                  <p>
                    <strong style='font-size:25px;'>
                    <span class='glyphicon glyphicon-alert'></span>&nbsp;Respuesta:</strong>
                    <br>Tiempo = <span class="tiempo">0</span>
                  </p>
              </div>   
          </div>
          <p class="text-right">
            <a id="asalir" href="<?php echo base_url('index.php/c_login/inicio'); ?>" class="btn btn-warning">
              <span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Salir
            </a>
          </p>
        </div><!--Fin col 12-->
      </div>
    </div>
  </div>  
        </div><!--Fin col md 12-->
      </div> 
        </div><!--Fin col md 12-->
      </div>             
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/html5boilerplate.min.js'); ?>"></script>
<script type="text/javascript">

$( document ).ready(function(){

/*Funcion para el calculo del tiempo de encuentro de los trenes*/
  $("#btnconsultar").click(function(){

    var v1 = parseFloat($("#v1").val());
    var v2 = parseFloat($("#v2").val());
    var km = parseFloat($("#km").val());
    var dis1 = 0;
    var dis2 = 0;
    var tie1 = 0;
    var total = '';

    dis2 = ((v2*km)/(v1+v2));
    dis1 = km - dis2;
    tie1 = ((v1/dis1)*60);

    if(esEntero(tie1) == 2){

      int_part = Math.trunc(tie1); 
      float_part = tie1 - Math.floor(tie1);
      float_part = float_part = Math.abs(float_part);  
      float_part = float_part - Math.floor(float_part);
      float_part = Math.trunc((float_part*60));
      total = int_part+' H '+float_part+' M';

    }else{
      total = tie1+' H';
    } 

    $(".tiempo").empty();
    $(".tiempo").text(total);

  });

/*Funcion para permitir el ingreso de unicamente numeros*/
 $('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
}); 

/*Funcion para consultar si un numero es decimal o entero*/
function esEntero(numero){
    if (numero % 1 == 0) {
        return 1;
    } else {
        return 2;
    }
} 

});

</script>      
