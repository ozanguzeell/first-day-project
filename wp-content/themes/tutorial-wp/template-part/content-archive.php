<div class="container">
<div class="post mb-5">
				    <div class="media">
                    <?php
                    the_post_thumbnail_url();
                    ?>
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php
                    the_post_thumbnail_url();
                    ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h3>
						    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">
                                <?php
                            the_excerpt();
                             ?></div>
						    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>


</div>