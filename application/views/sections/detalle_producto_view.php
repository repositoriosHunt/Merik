<div class="productoInfo">
  <div class="detalleProducto">
    <?php echo $detalle_producto['Producto']; ?>
  </div>

  <div class="folleto">
      <span>
        <?php
          if($detalle_producto['Folleto'] != '')
          {
        ?>                  
          <a href="<?php echo base_url(); ?>folletos/<?php echo $detalle_producto['Folleto'];?>"><img src="<?php echo base_url(); ?>img/folleto.png" width="29" height="29" border="0"></a>               
        <?php
          }
        ?>
      </span>
      <span>
        <?php
          if($detalle_producto['Folleto'] != '')
          {
        ?>                  
          <a href="<?php echo base_url(); ?>folletos/<?php echo $detalle_producto['Folleto'];?>">Folleto</a>
        <?php
          }
        ?>
      </span>
      
  </div>
  <div class="clearfix"></div>

</div>

<table width="100%">
    <td align="center" width="30%" valign="top">
      <div id="galeria" class="">
        <ul id="lightSlider">
          <li data-thumb="<?php echo base_url(); ?>img/_productos/<?php echo $detalle_producto['Imagen'];?>"><img src="<?php echo base_url(); ?>img/_productos/<?php echo $detalle_producto['Imagen'];?>" width="250" ></li>
        <?php 
            if($galeria_producto!=null)
            {
              foreach ($galeria_producto as $key => $value) {
               echo '<li data-thumb="'.base_url().'img/_galeria/'.$value['Imagen'].'"><img src="'.base_url().'img/_galeria/'.$value['Imagen'].'" width="300" border="0"></li>';
              }
            }
            
          ?>  
        </ul>
      </div>
      <div style="font-size: 14px; padding: 5px;">
        <?php
          echo $detalle_producto['Detalle_1'];
        ?>
      </div>
    </td>
    <td align="left" width="70%" valign="top">
      <br>
      <font style="font-size: 50px;"><?php echo $detalle_producto['Titulo']; ?></font>
     
      
      
      <div style="font-size: 14px; padding: 10px;">
        <?php
          echo str_replace("../../_bild/", base_url()."img/", $detalle_producto['Detalle_2']);
        ?>
      </div>
    </td>
  </tr>
</table>

<script src="<?php echo base_url(); ?>js/lightslider.js"></script>

<script language="javascript">
      $(document).ready(function() {
      $('#lightSlider').lightSlider({
          gallery: true,
          enableTouch:true,
          enableDrag:true,
          item: 1
      });
    });
    </script>