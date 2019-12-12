<style>
  <?php require('../app/views/styles/styles.css');?>    
</style>
<script>
  <?php require('../app/views/scripts/script.js');?>    
</script>
<div id="header">
  <h1>GATO</h1>
  <a href="/home"><img src="https://img.icons8.com/cotton/2x/home--v1.png"></a>
</div>
<div id="main">
    <div id="tabla">
      <table>
        <tr>
          <th>ID GATO</th>
          <th>RAZA</th>
          <th>PELAJE</th>
          <th>DESCRIPCION</th>
          <th>ACCIONES</th>
        </tr>

        <?php foreach ($gatos as $gato) { ?>
          <tr>
          <td><?php echo $gato->getIdGato() ?></td>
          <td><?php echo $gato->getRaza() ?></td>
          <td><?php echo $gato->getPelaje() ?></td>
          <td><?php echo $gato->getDescripcion() ?></td>
          <td>            
            <a href="/gato/edit/<?php echo $gato->getIdGato() ?>"><img src="https://icon-library.net/images/edit-icon-image/edit-icon-image-1.jpg"></a>
            <a href="/gato/delete/<?php echo $gato->getIdGato() ?>"><img src="https://image.flaticon.com/icons/svg/1400/1400339.svg"></a>
          </td>
          </tr>
        <?php } ?>
      </table>
      <br>
    </div>
    <a id="btnCreate" href="/gato/create">INSERTAR</a>
</div>