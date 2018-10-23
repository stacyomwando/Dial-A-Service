<br><br>
<h2><?= $title?></h2>

<?php echo validation_errors();?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" 
    name="title" placeholder="Add title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" placeholder="Add body" name="body">
   </textarea>
  </div>

  <div class="form-group">
  	<label>Upload Image</label>
  	<input type= "file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>