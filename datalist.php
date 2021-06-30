<?php

$connection= new mysqli('localhost','root','','project');//Creating connection with object method with database parameter

$rs=$connection->query("select * from products");//fetching data from table
$connection->close();//connection closed

$data=$rs->fetch_all(MYSQLI_ASSOC);//fetching data from mysqli database in array

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<div class="container">
    <div>
        <a href="form.php" class="btn btn-outline-dark btn-sm">Enter New Record</a>
    </div>
<table class="table border table-info table-striped" >
    <thead>
        <tr>
            <th>S.no</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>product selling price</th>
            <th>product discount</th>
            <th>product status</th>
            <th>product available</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    $sno=1; 
    foreach($data as $info){
    ?>
    <tr>
        <td><?=$sno++;?></td>
        <td><?=ucfirst($info['product_name']);?></td>
        <td><?=$info['product_description'];?></td>
        <td><?=$info['product_price'];?></td>
        <td><?=$info['product_sellingprice'];?></td>
        <td><?=$info['product_discount'];?></td>
        <td><?=ucfirst($info['product_status']);?></td>
        <td><?=$info['product_available'];?></td>
        <td>
            <a href="edit.php?id=<?=urlencode(base64_encode($info['id']));?>" class="btn btn-outline-dark btn-sm">Edit</a>
                &nbsp;|&nbsp;
            <a href="delete.php?id=<?=urlencode(base64_encode($info['id']));?>" class="btn btn-outline-dark btn-sm">Delete</a></td>
    </tr>
    <?php
    }?>

</table>
</div>
