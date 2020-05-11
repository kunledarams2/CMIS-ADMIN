
<h4><?=$title?></h4>
<?php foreach($posts as $post):?>
<h4><?php echo $post['title'] ?></h4>

<small class="post_date"> Post created on: <?php echo $post['created_at']?></small>
<br>
<?php echo $post['body']?>
<p> <a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> Read More</a> </p>
<?php endforeach; ?>