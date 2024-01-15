<p>
    <a href="<?= URL ?>index.php/admin/addCate"><button type="button" class="btn btn-primary">Danh Sách</button></a>
    <a href="<?= URL ?>index.php/admin/trashCate/1"><button type="button" class="btn btn-primary">Thùng
            Giác(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
    <tr>
        <th>id</th>
        <th>Tên Danh Mục</th>
        <th>Parent</th>
        <th>Thao Tác</th>
    </tr>
    <?php foreach ($data['category'] as $value):?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['category_name'] ?></td>
        <td>
            <?php
					if ($value['parent']==0) {
						echo $value['parent']; 
					}
					else {
						foreach ($data['allCat'] as $p) {
							if ($value['parent'] == $p['id']) {
								echo $p['category_name'];
							}
						}
					}
					
					?>

        </td>

        <td>
            <?php
					if ($value['status']==0) { ?>
            <a class="poiter"
                onclick="actionChange('Xác nhận ẩn','<?=URL ?>index.php/admin/delStatusCate/<?= $value['id']?>')">
                Hiển Thị </a>

            <?php } else { ?>
            <a style="cursor: pointer;width:15px ;"
                onclick="actionChange('Xác nhận hiện','<?=URL ?>index.php/admin/retoreStatusCate/<?= $value['id']?>')">
                Đang Ẩn </a>
            <?php } ?> |
            <a class="poiter" href="<?=URL ?>index.php/admin/editCate/<?= $value['id'] ?>">Sửa</a>
            | <a class="poiter"
                onclick="actionChange('Chuyển vào trash','<?=URL ?>index.php/admin/delTempCate/<?= $value['id']?>')">
                Thêm Vào Thùng Rác <img class="icon" style="width:5px;"
                    src="<?=URL ?>public\backend\images\magnifying-glass-solid.svg" /></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $data['paginator'] ?>