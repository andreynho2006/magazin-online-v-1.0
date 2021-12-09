<?php
if (count($_SESSION['cart']) > 0) {
?>
    <table border="1">
        <thead>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    Quantity
                </td>
                <td>
                    Price/unit
                </td>
                <td>
                    Price/line
                </td>
            </tr>
        </thead>
        <tbody>
            $total = 0.0;
            <?php
            foreach ($_SESSION['cart'] as $product_id => $quatity) {
            ?>
                <tr>
                    <td>
                        <?php echo $arr_product[$product_id]['name']; ?>
                    </td>
                    <td>
                        <?php echo $quantity; ?>
                    </td>
                    <td>
                        <?php echo $arr_product[$product_id]['price'] ?> RON
                    </td>
                    <td>
                        <?php
                        $price_line =  $quantity * $arr_product[$product_id]['price'];
                        echo $price_line;
                        $total += $price_line;
                        ?> RON
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="4">
                    Total: <?php echo $total;  ?>RON
                </td>
            </tr>
        </tbody>
    </table>
<?php
} else {
    echo 'cosul de cumparaturi este gol';
}
