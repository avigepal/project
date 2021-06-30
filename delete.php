<?php

$id=base64_decode(urldecode($_GET['id']));

$con= new mysqli('localhost','root','','project');//connection created

$query= "delete from products
    where id=$id";
//record updated

if($con->query($query)){
    header('location:datalist.php');       
    ?>
    <script>
        alert('Data deleted')
    </script>
    <?php
}else{
    ?>
    <script> 
        alert('Data not deleted')
    </script>
<?php
}

$con->close();//connection closed
?>