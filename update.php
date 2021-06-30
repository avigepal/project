<?php

$id=$_POST['id'];

$name=$_POST['product_name'];
$des=$_POST['product_description'];
$price=$_POST['product_price'];
$selling=$_POST['product_selling'];
$discount=$_POST['product_discount'];
$status=$_POST['product_status'];
$avl=$_POST['product_available'];

$con= new mysqli('localhost','root','','project');//connection created

$query= "update products
set product_name='$name',
    product_description='$des',
    product_price='$price',
    product_sellingprice='$selling',
    product_discount='$discount',
    product_status='$status',
    product_available='$avl'
    where id=$id";
//record updated

if($con->query($query)){
    header('location:datalist.php');  
    ?>
    <script>
        alert('Data updated')
    </script>
    <?php
}else{
    ?>
    <script> 
        alert('Data not updated')
    </script>
<?php
}

$con->close();//connection closed
?>