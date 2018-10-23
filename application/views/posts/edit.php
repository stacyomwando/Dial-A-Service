<h2><?= $title?></h2>

<?php echo validation_errors();?>

<?php echo form_open('posts/update'); ?>

<input type="hidden" name="id" value="<?php echo $post['Firstname']; ?>">
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" 
    name="title" placeholder="Add title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea rows="10" cols="50" class="form-control" placeholder="Add body" name="body" value="" >
    	<?php echo $post['body']; ?>
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form 