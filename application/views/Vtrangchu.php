<div class="container">
  <div class="alert"></div>
  <div class="alert"></div>
  <div style="padding: 0 15%;">
      <table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-center" style="width:5%"><input type="checkbox"></td>
              <th class="text-center" style="width:5%">STT</th>
              <th class="text-center" style="width:15%">Mã sinh viên</th>
              <th class="text-center" style="width:30%">Họ tên sinh viên</th>
              <th class="text-center" style="width:15%">Ngày sinh</th>
              <th class="text-center" style="width:15%">Điểm CC</th>
              <th class="text-center" style="width:15%">Điểm ĐK</th>
            </tr>
          </thead>
          <tbody>
            {foreach $ds_sv as $k => $sv}
              {$cc = $sv['ma_dkm']|cat:'cc'}
              {$dk = $sv['ma_dkm']|cat:'dk'}
              <tr>
                <td class="text-center"><input type="checkbox" name="" value="{$sv['ma_dkm']}"></td>
                <td class="text-center">{$k+1}</td>
                <td>{$sv['ma_sv']}</td>
                <td>{$sv['hoten_sv']}</td>
                <td class="text-center">{$sv['ngaysinh_sv']}</td>
                <td class="text-center"><input class="form-control w-25" type="text" name="diemcc" value="{if isset($ds_diem[$cc])}{$ds_diem[$cc]}{/if}"></td>
                <td class="text-center"><input class="form-control w-25" type="text" name="diemdk" value="{if isset($ds_diem[$dk])}{$ds_diem[$dk]}{/if}"></td>
              </tr>
            {/foreach}
          </tbody>
      </table>
  </div>
</div>  
<style>
  .table > tbody > tr > td {
     vertical-align: middle;
  }   
  .w-25{
    display: inline;
    width: 50%;
  }
</style>

<script>
  $(document).ready(function() {
      $('#thuonghieu').click(function(){
          ShowMessage('error','Cập nhật thất bại');
      })
  }); 
  function ShowMessage(type,msg){
    toastr.options = {
      "closeButton": true,
      // "debug": false,
      // "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      // "preventDuplicates": false,
      // "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr[type](msg)
      
  }
	
</script>