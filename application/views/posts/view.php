<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img  src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']?>">
<div class="post-body">
	 <?php echo $post['body']?>
</div>

<br>
<hr>
<?php echo form_open('posts/edit/'.$post['slug']);?>
<input type="submit" name="edit" value="Edit" class="btn btn-primary">
</form><br>
<!-- <a class="btn btn-default pull-left" href="posts/edit/<?php //echo $post['slug']; ?>">Edit</a> -->
<?php echo form_open('posts/delete/'.$post['id']);?>
<input type="submit" name="delete" value="Delete" class="btn btn-danger">
</form>
<br>
