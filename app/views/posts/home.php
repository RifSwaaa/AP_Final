<!-- ADD A POST -->
<div>
        <a href="?form" type="button" class="btn btn-primary"
          >Add a Post</a
        >
      </div>
      <!-- ADD A POST END -->
<!-- Blog Post Start -->
<div class="col-md-12 blog-post row">
                    <?php foreach($posts as $post): ?>
                    <div class="post-title">
                      <a href="single.html"
                        ><h1>
                          <?php echo $post ['title']; ?>
                        </h1></a
                      >
                    </div>
                    <div class="post-info">
                      <span><?php echo $post ['created_at']; ?></span> | <span>Life style</span>
                    </div>
                    <p>
                    <?php echo \Core\Helpers\truncate($post ['text']); ?>...
                    </p>
                    <a
                      href="posts/<?php echo $post["id"];?>/<?php echo Core\Helpers\slugify($post['title']); ?>"
                      class="
                        button button-style button-anim
                        fa fa-long-arrow-right"
                      ><span>Read More</span></a
                    >
                    <?php endforeach; ?>
</div>
                  <!-- Blog Post End -->