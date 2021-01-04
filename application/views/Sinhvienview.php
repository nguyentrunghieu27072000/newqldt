<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thêm, Sửa, Xóa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="{$url}/asset/duallistbox/jquery.bootstrap-duallistbox.js"></script>
  <link rel="stylesheet" href="{$url}/asset/duallistbox/bootstrap-duallistbox.css"> 
</head>
<body>
<div class="container">
    <form action="" method="post">
      <select multiple="multiple" size="10" name="canbomonhoc[]" id="canbomonhoc">
        {foreach $ds_monhoc as $mh}
            {if isset($mon_cb[$mh.ma_monhoc]) }
                <option value="{$mh.ma_monhoc}" selected="selected">{$mh.ten_monhoc}</option>
            {else}
                <option value="{$mh.ma_monhoc}">{$mh.ten_monhoc}</option>
            {/if}
        {/foreach}
    </select>
    <button type="submit" class="btn btn-info " name="luu" id="luu" value="luu">Lưu</button>
    </form>
</div>

</body>
</html>
<script>
    var demo1 = $('#canbomonhoc').bootstrapDualListbox({
      bootstrap2compatible: false,
      moveonselect: false,
      filterplaceholder: 'Tìm theo tên',
      selectedlistlabel: '<p><strong>Môn học đang giảng dạy</strong></p>',
      infotext: false,
      nonselectedlistlabel: '<p><strong>Danh sách môn học</strong></p>',
      filterTextClear:true,

  });
</script>
