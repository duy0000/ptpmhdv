<li class="nav-item active">
    <a class="nav-link" href="<?= URL ?>index.php/home">TRANG CHỦ <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <?php 
                            
                            foreach($data["category"] as $value){
                               echo "<li><a href='".URL."/index.php/home/category/".$value["id"]."/1'>".$value["category_name"]."</a></li>";
                            }
                        ?>
</li>