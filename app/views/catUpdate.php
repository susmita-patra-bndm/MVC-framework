<div class="content">
<h3>Update Category</h3> <hr/>
<?php

    if(isset($msg)){
        echo "<span style='color:blue;font-weight:bold'>".$msg."</span>";
    }
?>
    <form action="http://localhost/mvc%20framework/mvc/Category/updateCat" method="post">
        <table>
            <?php
            if(isset($catById)){
                foreach ($catById as $value) {
            ?>
            <input type="hidden" name="id" value="<?php echo $value['id'] ?>"/>
            <tr>
                <td>Category Name</td>
                <td><input type="text" name="name" required="1" 
                value="<?php echo $value['name'] ?>"/></td>
            </tr>
            <tr>
                <td>Category Title</td>
                <td><input type="text" name="title" required="1" 
                value="<?php echo $value['title'] ?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update" /></td>
            </tr>
            <?php } } ?>
        </table>
    </form>

</div>