
<div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="?" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="<?php echo $post['title']; ?>">
                      <h1>
                      <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo $post['created_at']; ?></span> | <span>Life style</span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                    <?php echo $post['text']; ?>
                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                    <?php echo $post['quote']; ?>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="posts/<?php echo $post["id"];?>/<?php echo Core\Helpers\slugify($post ['title']); ?>/edit/form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="posts/<?php echo $post["id"];?>/<?php echo Core\Helpers\slugify($post ['title']); ?>/delete.html"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                <!-- Endpage Box (Popup When Scroll Down) Start -->
    <div id="scroll-down-popup" class="endpage-box">
      <h4>Read Also</h4>
      <a href="#"
        >How to make your company website based on bootstrap framework...</a
      >
    </div>
    <!-- Endpage Box (Popup When Scroll Down) End -->
              </div>
            </div>