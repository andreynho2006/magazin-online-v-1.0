<table border='1' style='width:100%;height:100%;'>
    <tr style='height:10px;'>
        <td>
        <?php
        include 'menu.php';
        ?>
        </td>
    </tr>
    <tr>
        <td valign='top'>
            <?php 
            //echo $action; 
            include 'action-'.$action.'.php';
            ?>
        </td>
    </tr>
    <tr style='height:10px;'>
        <td>&copy;magazin online v 1.0</td>
    </tr>
</table>