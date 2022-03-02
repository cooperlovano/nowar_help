<footer id="colophon" class="site-footer clearfix">
    <div id="footer-sidebar-wrap" class="clearfix">
        <div id="footer-sidebar-one" class="widget-area" role="complementary">
            <aside id="nav_menu-2" class="widget widget_nav_menu">
                <h3 class="widget-title"><?php echo t('about') ?></h3>
                <div class="menu-footer-menu-1-container">
                    <ul class="menu">
                    <?php foreach($site->footermenu()->toPages() as $item): ?>
                    <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </aside>
        </div><!-- .widget-area -->
        <div id="footer-sidebar-two" class="widget-area" role="complementary">
            <?= $site->footertext()->toBlocks() ?>
        </div>
	</div><!-- end .footerwidget-wrap -->


    <div id="site-info">
        <ul class="credit"<li class="copyright"></li></ul>
    </div><!-- end #site-info -->

	</footer><!-- end #colophon -->
	</div><!-- end #main-wrap -->
</div><!-- end #container -->


</body>
</html>