<div class="sidebar">
    <?php 
    // print_r($data["category"]);
    ?>
    <h3
        style="background-color: white;border: 1px solid black;width: 250px;height: 30px;display:flex;justify-content:  center;align-items: center;">
        Tìm kiếm theo danh mục</h3>
    <ul>
        <?php 
                            
            foreach($data["category"] as $value){
               echo "<li style='background-color: #9999;border: 1px solid black'><a href='".URL."/index.php/home/category/".$value["id"]."/1'>".$value["category_name"]."</a></li>";
            }
        ?>
    </ul>
</div>