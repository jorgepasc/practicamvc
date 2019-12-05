<style>

    * {
      margin: 2px;
      padding: 5px;
    }

    table {
      border-collapse: collapse;
    }

    table tr, td, th {
      border: 2px solid gray;
      text-align: center;        
    }

    table a {
      text-decoration: none;
    }

    #header
    {
      display: inline-block;
      background-color: darkcyan;
      color: white;
      font-weight: bold;
      width: 99%;
      vertical-align: center;
    }

    table tr:first-child{
      background-color: darkcyan;
      color: white;
    }

    tr td:last-child{
      background-color: white;
    }

    #btnCreate {
      background-color: darkcyan;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      text-decoration: none;
      min-height: 30px;
      padding: 10px;
    }

    #main {
      border: 2px solid gray;
      border-radius: 4px;
      margin: 2px;
      height: 100%;
    }

    #header a {
      float:right;
      color: white;
      vertical-align: center;
      text-align: center;
      text-decoration: none;
      font-weight: bold;
    }

    #header a img {
      max-width: 75px;
      max-height:75px;
    }

    #main a img {
      max-width: 35px;
      max-height: 35px;
    }

    #header h1 {
      font-size: 3em;
      margin: 20px 0px 0px 10px;
      float: left;
      vertical-align: center;
    }

    #tabla {
      float: left;
    }

    #imagen {
      width: 49%;
      float: left;
      padding: 4px;
    } 

    #imagen img {
      max-width: 100px;
      max-height: 100px;
    }
</style>
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
    <div id="imagen">
      <img src="https://thundercat.neocities.org/images/swerve.jpg">          
    </div>
    <a id="btnCreate" href="/gato/create">INSERTAR</a>

</div>