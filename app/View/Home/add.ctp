<?php 
echo $this->Form->create(false);
?>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">STT</label>
    <input type="text" name="num" class="form-control" id="exampleInputPassword1" placeholder="STT">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>