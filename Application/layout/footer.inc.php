    </div> 
        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4  col-sm-4 col-xs-12">
                        <div class="about">
                            <a href="#" class="logo">
                                <img alt="" src="<?= SITE_URL ?>/public/images/logo_footer.png" />
                            </a>
                            <p><?= $Configuration->CNIL_SITE; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                        <h3>NOS CATEGORIES</h3>
                        <ul class="list-category">
                             <?php
                                foreach ($categories as $categorie) :
                            ?>

                                <li><a href="<?= SITE_URL ?>/public/<?= $categorie->getROUTECATEGORIE(); ?>"><?= $categorie->getLIBELLECATEGORIE(); ?></a></li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                        <h3>RECHERCHE PAR TAGS</h3>

                        <div class="list-tags">

                            <?php
                                $tags = $this->getTags();
                                foreach($tags as $tag) :
                            ?>

                                <a href="#"><?= $tag->getLIBELLETAGS(); ?></a>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <!--All right-->
                <div class="allright">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <p> © 2017 <a href="#"><?= $Configuration->NOM_SITE; ?></a>. All rights reserved.</p>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <ul class="list-social-icon list-social-icon-footer">
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="youtube">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rss">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--scrip file-->
    <script src="<?= SITE_URL ?>/public/js/jquery.min.js"></script>
    <script src="<?= SITE_URL ?>/public/js/bootstrap.js"></script>
    <script src="<?= SITE_URL ?>/public/js/owl.carousel.min.js"></script>
    <script src="<?= SITE_URL ?>/public/js/main.js"></script>
</body>
</html>