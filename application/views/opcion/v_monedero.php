<?php
 $this->load->view('layout/menu');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <p>
            <p class="text-center" style="font-size:20px; font-weight:20; margin-bottom: 2px;">Monedero: <span class="tot_mon">(0)</span> moneda(s) en  total</p>
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
                              <th class="text-right info centrame"><p>Monedas de $50</p></th>
                              <th class="text-right info centrame"><p>Monedas de $100</p></th>
                              <th class="text-right info centrame"><p>Monedas de $200</p></th>
                              <th class="text-right info centrame"><p>Monedas de $500</p></th>
                              <th class="text-right info centrame"><p>Monedas de $1000</p></th>
                           </tr>
                           <tr>
                             <td><input type="text" class="form-control calculame input-number" name="mon_50" id="mon_50" data-val="50" data-ult="0"></td>
                             <td><input type="text" class="form-control calculame input-number" name="mon_100" id="mon_100" data-val="100" data-ult="0"></td>
                             <td><input type="text" class="form-control calculame input-number" name="mon_200" id="mon_200" data-val="200" data-ult="0"></td>
                             <td><input type="text" class="form-control calculame input-number" name="mon_500" id="mon_500" data-val="500" data-ult="0"></td>
                             <td><input type="text" class="form-control calculame input-number" name="mon_1000" id="mon_1000" data-val="1000" data-ult="0"></td>
                           </tr>                                                   
                          </table>                        
                        </form>                     
              <br>
              <div class='alert alert-info' role='alert' style='margin-bottom:5px;'>
                  <p>
                    <strong style='font-size:25px;'>
                    <span class='glyphicon glyphicon-alert'></span>&nbsp;Resultado:</strong>
                    <br>Tiempo ejecucion = <span id="tie_eje">000000.1 seg</span>
                    <br>Valor Total  = <span class="val_tot">0</span>
                    <br>Cantidad Monedas = <span class="tot_mon">0</span>
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

  $(".calculame").change(function(){

    valor = parseFloat($(this).attr("data-ult"));
    if($(this).val() >= valor){

      $(this).attr("data-ult",$(this).val());
      totalmon();
      valormon();
      
  }else{

    alert("Alerta!! No se pueden retirar monenadas ;)");
    $(this).val($(this).attr("data-ult"));

  }

  });

/*Funcion para permitir el ingreso de unicamente numeros*/
 $('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
}); 

});

function  totalmon()
{
  
var misumador=0;

$(".calculame").each(function(){

  if($(this).val() != ''){ 

    misumador += parseFloat($(this).val());
  }
});

$(".tot_mon").empty();
$(".tot_mon").text(misumador);
 
}

function  valormon()
{
  
var cantidad = 0;
var valor = 0;
var total = 0;

$(".calculame").each(function(){

  if($(this).val() != ''){ 
    valor = parseFloat($(this).attr("data-val"));
    cantidad = parseFloat($(this).val());
    total += valor * cantidad;
  }
});

$(".val_tot").empty();
$(".val_tot").text(total);
 
}

</script>      
