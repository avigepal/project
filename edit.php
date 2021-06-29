<?php
$id=$_GET['id'];
$con=new mysqli('localhost','root','','project');
$rs=$con->query("select * from products where id=$id");
$info=$rs->fetch_assoc();
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

<form action="update.php" method="post">
<input type="hidden" name="id" value="<?=$info['id'];?>">
<div class="container">
<div>
    <a href="datalist.php">View Data Entered</a>
</div>
<table class="table border table-striped" >
    <thead >
    <tr>
        <th colspan="2">PRODUCT DETAIL</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>product name</td>
        <td><input class="form-control" type="text" name="product_name" value="<?=$info['product_name'];?>"></td>
    </tr>
    <tr>
        <td>product description</td>
        <td><textarea class="form-control" name="product_description"><?=$info['product_description'];?></textarea></td>
    </tr>
    <tr>
        <td>product price</td>
        <td><input class="form-control" type="text" name="product_price" value="<?=$info['product_price'];?>"></td>
    </tr>
    <tr>
        <td>product sellingprice</td>
        <td><input class="form-control" type="text" name="product_selling" value="<?=$info['product_sellingprice'];?>"></td>
    </tr>
    <tr>
        <td>product discount</td>
        <td><input class="form-control" type="text" name="product_discount" value="<?=$info['product_discount'];?>"></td>
    </tr>
    <tr>
        <td>product status</td>
        <td><select class="form-control" name="product_status" >
            <option value="active" <?php echo ($info['product_status']=='active')?'selected':'';?>>active</option>
            <option value="blocked"<?php echo ($info['product_status']=='blocked')?'selected':'';?> >blocked</option>
        </select></td>
    </tr>
    <tr>
        <td>product available</td>
        <td><select class="form-control" name="product_available" >
            <option value="yes" <?php echo ($info['product_available']=='yes')?'selected':'';?>>yes</option>
            <option value="no" <?php echo ($info['product_available']=='no')?'selected':'';?>>no</option>
        </select></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2"><button class="btn btn-primary">Update</button></td>
    </tr>
    </tfoot>
</table>
</div>
</form>