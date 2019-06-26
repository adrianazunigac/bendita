<?php
 $this->load->view('layout/menu');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <p>
            <p class="text-center" style="font-size:20px; font-weight:20; margin-bottom: 2px;">Serie Fibonacci</p>
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
                              <th class="text-right info"><p>Numero Final:</p></th>
                              <td><input type="text" name="num_final" id="num_final" class="form-control"></td>
                           </tr>
                           <tr>
                              <td colspan="4" align="center">
                                <button type="submit" id="btnconsultar" class="btn btn-success">Generar</button>
                              </td>
                            </tr>                                                     
                          </table>                        
                        </form>                     
          <?php
            if($flag == 'resultado'){?>
              <br>
              <div class='alert alert-info' role='alert' style='margin-bottom:5px;'>
                  <p>
                    <strong style='font-size:25px;'>
                    <span class='glyphicon glyphicon-alert'></span>&nbsp;Resultado:</strong>
                    <br>Final_number = <?php echo $final_number;?>
                    <br>Last_number = <?php echo $last_number;?>
                    <br>Full_response = <?php echo $full_response;?>
                  </p>
              </div>
          <?php }?>    
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
