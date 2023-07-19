
<?php
    include "connect.php";
    $sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]'  ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result)

?>
<link href="styles.css"  rel="stylesheet" />
<div class="container" >
<form action="product_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
    ชื่อสินค้า<input type="text" name="name" class="input" value="<?php echo $row[name]; ?>"/>
    ราคา<input type="text" name="price" class="input" value="<?php echo $row[price]; ?>"/>
    จำนวนในคลัง<input type="text" name="stock" class="input" value="<?php echo $row[stock]; ?>"/>
    รายละเอียด<textarea name="description" class="input" ><?php echo $row[description]; ?></textarea> 
  
  <input type="submit" value="update"class="button"/>
</form>
</div>