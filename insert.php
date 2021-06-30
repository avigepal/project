<?php

$name=$_POST['product_name'];
$des=$_POST['product_description'];
$price=$_POST['product_price'];
$selling=$_POST['product_selling'];
$discount=$_POST['product_discount'];
$status=$_POST['product_status'];
$avl=$_POST['product_available'];

$con= new mysqli('localhost','root','','project');//connection created

$query= "insert into products
(product_name,product_description,product_price,product_sellingprice,product_discount,product_status,product_available)
values('$name','$des','$price','$selling','$discount','$status','$avl')";//record inserted

if($con->query($query)){
    header('location:form.php')  
    ?>
    <script>
        alert('Data inserted')
    </script>
    <?php
}else{
    ?>
    <script> 
        alert('Data not inserted')
    </script>
<?php
}
$con->close();//connection closed
?>