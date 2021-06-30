<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


<form action="insert.php" method="post">
<div class="container">
<div>
    <a href="datalist.php" class="btn btn-dark btn-sm">View Data Entered</a>
</div>
<table class="table border table-success table-striped" align="center" >
    <thead class="thead-dark">
    <tr>
        <th colspan="2" >PRODUCT DETAIL</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>product name</td>
        <td><input class="form-control" type="text" name="product_name"></td>
    </tr>
    <tr>
        <td>product description</td>
        <td><textarea class="form-control" name="product_description" ></textarea></td>
    </tr>
    <tr>
        <td>product price</td>
        <td><input class="form-control" type="text" name="product_price"></td>
    </tr>
    <tr>
        <td>product sellingprice</td>
        <td><input class="form-control" type="text" name="product_selling"></td>
    </tr>
    <tr>
        <td>product discount</td>
        <td><input class="form-control" type="text" name="product_discount"></td>
    </tr>
    <tr>
        <td>product status</td>
        <td><select class="form-control" name="product_status" >
            <option value="active">active</option>
            <option value="blocked">blocked</option>
        </select></td>
    </tr>
    <tr>
        <td>product available</td>
        <td><select class="form-control" name="product_available" >
            <option value="yes">yes</option>
            <option value="yes">no</option>
        </select></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2"><button class="btn btn-dark">submit</button></td>
    </tr>
    </tfoot>
</table>
</div>
</form>