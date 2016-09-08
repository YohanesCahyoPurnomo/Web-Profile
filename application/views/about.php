
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Education</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <?php $num = 1; ?>
                        <?php foreach ($data_about as $dataAbout) { ?>
                        <?php if ($num%2  == 0) { ?>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/image/about/'.$dataAbout['image']); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $dataAbout['tahun']; ?></h4>
                                        <h4 class="subheading"><?php echo $dataAbout['judul']; ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $dataAbout['keterangan']; ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php }else{ ?>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/image/about/'.$dataAbout['image']); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $dataAbout['tahun']; ?></h4>
                                        <h4 class="subheading"><?php echo $dataAbout['judul']; ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $dataAbout['keterangan']; ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        <?php $num++; ?>
                      <?php } ?>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>