<?php 
foreach ($arr_product as $product_id => $product) {
?>

<div>
    <div>
        <a href="index.php?action=product&product_id=<?php echo $product_id; ?>">
        <?php echo $product['name'] ?></a>
    </div>
    <div>
        <?php echo $product['description'] ?></a>
    </div>
    <div>
        <?php echo $product['price'] ?> RON</a>
    </div>
</div>
<hr>
<?php 
}

?>