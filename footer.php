<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <?php 
                        $fss =  get_theme_mod('my_repeasgddfgter_setting');
                        foreach ($fss as $fs) {
                            ?>
                             <li><a href="<?php echo esc_html($fs['link_urdasgsagl']) ?>"><i class="<?php echo esc_html($fs['about_item_igcon']) ?>"></i></a></li>
                            <?php
                        }
                        
                        ?>
                       
                       
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright"><?php echo get_theme_mod('text_s44555etting')?></p>
                </div>
            </div>
        </div>
    </footer>
    

    <?php wp_footer()?>
  </body>
</html>