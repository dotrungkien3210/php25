<section class="s-content s-content--top-padding">

        <div class="row narrow">
            <div class="col-full s-content__header aos-init aos-animate" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category: Lifestyle</h1>
                <p class="lead">Dolor similique vitae. Exercitationem quidem occaecati iusto. Id non vitae enim quas error dolor maiores ut. Exercitationem earum ut repudiandae optio veritatis animi nulla qui dolores.</p>
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                <?php foreach($posts as $post) { ?>
                <article class="col-block">
                    
                    <div class="item-entry aos-init aos-animate" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo URL_TEMPLATE_CLIENT?>images/thumbs/post/lamp-400.jpg" srcset="<?php echo URL_TEMPLATE_CLIENT?>images/thumbs/post/lamp-400.jpg 1x, <?php echo URL_TEMPLATE_CLIENT?>images/thumbs/post/lamp-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Design</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html"><?php echo $post['title'] ?></a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 15, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                    </article> <!-- end article -->
                <?php }?>
            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn aos-init" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>