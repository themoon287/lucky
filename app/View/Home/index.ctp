<div style="height: 70px;">
<button type="button" onclick="window.location.href='/home/reset';" class="btn  btn-lg btn-reset">Reset</button>
<button type="button" class="btn  btn-lg btn-result" data-toggle="modal" data-target="#myModal" <?php echo (empty($prize1) && empty($prize2) && empty($prize3) && empty($prize4) && empty($prize5) && empty($prize6)) ? "disabled" : "" ;?>>Kết quả</button>
</div>
<!-- <h1 class="tit">Cơ cấu giải thưởng</h1> -->
<div class="list-group">
	<a href="/home/detail/6" class="list-group-item">
	    Giải Đặc Biệt
	  </a>
  <a href="/home/detail/1" class="list-group-item">
    Giải Nhất
  </a>
  <a href="/home/detail/2" class="list-group-item">Giải Nhì</a>
  <a href="/home/detail/3" class="list-group-item">Giải Ba</a>
  <a href="/home/detail/4" class="list-group-item">
	    Giải Tư
	  </a>
	  <a href="/home/detail/5" class="list-group-item">
	    Giải Khuyến Khích
	  </a>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Danh sách trúng thưởng</h4>
      </div>
      <div class="modal-body">
      
      	<h2 class="tit">** Giải Đặc Biệt</h1>
      		
	        <ul class="list-group">
	        	<?php 
	        		foreach ($prize6 as $k => $v) {
	        			echo '<li class="list-group-item list-group-item-warning">'.$v['name']." (".$v['code'].")".'</li>';
	        		}
	        	?>
			</ul>
      	
      	<h2 class="tit">1. Giải Nhất</h1>
      		
	        <ul class="list-group">
	        	<?php 
	        		foreach ($prize1 as $k => $v) {
	        			echo '<li class="list-group-item list-group-item-success">'.$v['name']." (".$v['code'].")".'</li>';
	        		}
	        	?>
			</ul>
		<h2 class="tit">2. Giải Nhì</h1>
	        <ul class="list-group">
	        	<?php 
	        		foreach ($prize2 as $k => $v) {
	        			echo '<li class="list-group-item list-group-item-info">'.$v['name']." (".$v['code'].")".'</li>';
	        		}
	        	?>
			</ul>
		<h2 class="tit">3. Giải Ba</h1>
	        <ul class="list-group">
	        	<?php 
	        		foreach ($prize3 as $k => $v) {
	        			echo '<li class="list-group-item list-group-item-warning">'.$v['name']." (".$v['code'].")".'</li>';
	        		}
	        	?>
			</ul>
		<h2 class="tit">4. Giải Tư</h1>
      		
	        <ul class="list-group">
	        	<?php 
	        		foreach ($prize4 as $k => $v) {
	        			echo '<li class="list-group-item list-group-item-success">'.$v['name']." (".$v['code'].")".'</li>';
	        		}
	        	?>
			</ul>
		<h2 class="tit">5. Giải Khuyến Khích</h1>
      		
	        <ul class="list-group">
	        	<?php 
        		foreach ($prize5 as $k => $v) {
        			echo '<li class="list-group-item list-group-item-info">'.$v['name']." (".$v['code'].")".'</li>';
        		}
        	?>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

