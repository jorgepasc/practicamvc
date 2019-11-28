<style>
    table {
        border-collapse: collapse;
    }

    table tr, td, th {
        border: 2px solid gray;
        text-align: center;
    }
</style>
<a href="/home">Volver </a>
<h1>GATO</h1>
<hr><hr>

    <table class="table table-striped table-hover">
        <tr>
          <th>Id Gato</th>
          <th>Raza</th>
          <th>Pelaje</th>
          <th>Descripcion</th>
        </tr>

        <?php foreach ($gatos as $gato) { ?>
          <tr>
          <td><?php echo $gato->getIdGato() ?></td>
          <td><?php echo $gato->getRaza() ?></td>
          <td><?php echo $gato->getPelaje() ?></td>
          <td><?php echo $gato->getDescripcion() ?></td>
          <td>            
            <a href="/gato/edit/<?php echo $gato->getIdGato() ?>">Editar </a>
            <a href="/gato/delete/<?php echo $gato->getIdGato() ?>">Borrar</a>
          </td>
          </tr>
        <?php } ?>
      </table>

<a href="/gato/create">Insertar nuevo gato</a>