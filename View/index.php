
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
            <td><a href='ver/<?php echo $i; ?>'>Ver</a></td>
        </tr>

     <?php endforeach; ?>
</table>