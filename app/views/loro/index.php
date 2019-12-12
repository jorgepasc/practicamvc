<style>
  <?php require('../app/views/styles/styles.css');?>    
</style>
<div id="header">
  <h1>LORO</h1>
  <a href="/home"><img src="https://img.icons8.com/cotton/2x/home--v1.png"></a>
</div>
<div id="main">
    <div id="tabla">
      <table>
        <tr>
          <th>ID LORO</th>
          <th>RAZA</th>
          <th>PLUMAJE</th>
          <th>DESCRIPCION</th>
          <th>ACCIONES</th>
        </tr>

        <?php foreach ($loros as $loro) { ?>
          <tr>
          <td><?php echo $loro->getIdLoro() ?></td>
          <td><?php echo $loro->getRaza() ?></td>
          <td><?php echo $loro->getPluma() ?></td>
          <td><?php echo $loro->getDescripcion() ?></td>
          <td>            
            <a href="/loro/edit/<?php echo $loro->getIdLoro() ?>"><img src="https://icon-library.net/images/edit-icon-image/edit-icon-image-1.jpg"></a>
            <a href="/loro/delete/<?php echo $loro->getIdLoro() ?>"><img src="https://image.flaticon.com/icons/svg/1400/1400339.svg"></a>
          </td>
          </tr>
        <?php } ?>
      </table>
      <br>
    </div>
    <a id="btnCreate" href="/loro/create">INSERTAR</a>
</div>