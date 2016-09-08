<section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">

                <?php foreach ($data_folio as $data_portfolio) { ?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="<?php echo "#portfolioModal". $data_portfolio['id']; ?>" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/image/portfolio/'.$data_portfolio['image']); ?>" class="img-responsive" alt="">
                            <?php //echo $data_portfolio['image']; ?>
                        </a>
                        <div class="portfolio-caption">
                            <h4><?php echo $data_portfolio['title']; ?></h4>
                            <p class="text-muted"><?php echo $data_portfolio['category']; ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>


<!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal -->
    <?php 
        foreach ($data_folio as $data_portfolio) {  
     ?>
        <div class="portfolio-modal modal fade" id="<?php echo "portfolioModal" . $data_portfolio['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $data_portfolio['title']; ?></h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo base_url('assets/image/portfolio/'.$data_portfolio['image']); ?>" alt="">
                                <p><?php echo $data_portfolio['detail']; ?></p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: <?php echo $data_portfolio['date']; ?></li>
                                    <li>Client: <?php echo $data_portfolio['client']; ?></li>
                                    <li>Category: <?php echo $data_portfolio['category'] ?></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php } ?>
 