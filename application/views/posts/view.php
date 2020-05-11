
<h2><?php echo $post['title']?></h2>

<small class="post_date"> Post created on: <?php echo $post['created_at']?></small> <br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-default pull-left"  href="posts/edit/<?php echo $post['slug'];?>">Edit</a> 
<?php echo form_open('/posts/delete/'.$post['id'] );?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
