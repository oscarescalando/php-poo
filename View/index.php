
<style>
    th{
        width: 8rem;
        text-align: left;
        border-bottom: 1px solid black;
    }
    td{
        width: 8rem;
    }
</style>

<h1>Listado de Carros</h1>
<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
        <th>Pasajeros</th>
        <th></th>
    </tr>
    <?php 
        $i = 0;
        foreach ($rowset as $row): 
        $i++;
        ?>
        
        <tr>
            <td><?php echo $row->marca ?></td>
            <td><?php echo $row->modelo ?></td>
            <td><?php echo $row->color ?></td>
            <td><?php echo $row->propietario ?></td>
            
            <td><?php echo $row->setPasajeros($i); ?></td>
            <td><a href='ver/<?php echo $i; ?>'>Ver</a></td>
        </tr>

     <?php endforeach; ?>
</table>
<br>
<h1>Listado de Autobus</h1>

<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
        <th>Pasajeros</th>
        <th>Empresa</th>
        <th>Estacionamiento</th>
        <th></th>
    </tr>
    <?php 
        $i = 0;
        foreach ($rowBus as $row): 
        $i++;
        ?>
        
        <tr>
            <td><?php echo $row->marca ?></td>
            <td><?php echo $row->modelo ?></td>
            <td><?php echo $row->color ?></td>
            <td><?php echo $row->propietario ?></td>
            <td><?php echo $row->setPasajeros($i+8); ?></td>
            <td><?php echo $row->empresa ?></td>
            <td><?php echo ($row->puedeAparcar("superficie")) ? 'SI'  :'NO'; ?></td>
            <td></td>
        </tr>

     <?php endforeach; ?>
</table>