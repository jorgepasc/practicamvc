<style>
  <?php require('../app/views/styles/styles.css');?>    
</style>
<div id="header">
  <h1>TIBURON</h1>
  <a href="/home"><img src="https://img.icons8.com/cotton/2x/home--v1.png"></a>
</div>
<div id="main">
    <div id="tabla">
      <table>
        <tr>
          <th>ID TIBURON</th>
          <th>RAZA</th>
          <th>ALETA</th>
          <th>DESCRIPCION</th>
          <th>ACCIONES</th>
        </tr>

        <?php foreach ($tiburones as $tiburon) { ?>
          <tr>
          <td><?php echo $tiburon->getIdTiburon() ?></td>
          <td><?php echo $tiburon->getRaza() ?></td>
          <td><?php echo $tiburon->getAleta() ?></td>
          <td><?php echo $tiburon->getDescripcion() ?></td>
          <td>            
            <a href="/tiburon/edit/<?php echo $tiburon->getIdTiburon() ?>"><img src="https://icon-library.net/images/edit-icon-image/edit-icon-image-1.jpg"></a>
            <a href="/tiburon/delete/<?php echo $tiburon->getIdTiburon() ?>"><img src="https://image.flaticon.com/icons/svg/1400/1400339.svg"></a>
          </td>
          </tr>
        <?php } ?>
      </table>
      <br>
    </div>
    <a id="btnCreate" href="/tiburon/create">INSERTAR</a>
</div>