<?php

$connection = new mysqli('localhost', 'root', '', 'ajax');
$data = $connection->query("SELECT * FROM students");

$i = 1;
while($stu = $data->fetch_object()) :

?>
    <tr>
        <td><?php echo $i; $i++;  ?></td>
        <td><?php echo $stu->name  ?></td>
        <td><?php echo $stu->email  ?></td>
        <td><?php echo $stu->cell  ?></td>
        <td><?php echo $stu->username  ?></td>
        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
        <td>
            <a class="btn btn-sm btn-info" href="#">View</a>
            <a class="btn btn-sm btn-warning" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" href="#">Delete</a>
        </td>
    </tr>
<?php

endwhile;