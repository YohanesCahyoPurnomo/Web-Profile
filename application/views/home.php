<!-- <div class="mycontainer"> -->
    <!-- <div id="header">  -->
    <a href="auth_login">FB</a>
      <div class="col-md-12 backtrasparan" style="color:black;">
        <!-- <div class="col-sm-5"> -->
        <div id="navleft">
            <img id="imghome" src="<?php echo base_url('asset/image/me_profile.png'); ?>" alt="Verly">  
        </div>
            <h2><b>Yohanes Cahyo Purnomo</b></h2>
            <p><b style="font-size:19px;">Web Developer</b><br>Teknik Informatika<br>Universitas Kristen Duta Wacana</p>
          <!-- </div> -->
      </div>
      <div class="col-md-8 backtrasparan" style="margin-top:15px;">
            <LABEL>Background</LABEL>
            <h4>Summary</h4>
            <p>Graduate of Informatics Technology in Duta Wacana Christian University. 
              Interested in Web Programming and GUI programming. Excellent expertise 
              in PHP, HTML, CSS, JQuery JavaScript and VB.NET. Adaptable and communicative 
              professional with excellent ability to work in individual or teams. 
            </p>
      </div>
      <div class="col-md-3 backtrasparan" style="margin:15px 0px 0px 10px;;">
          <h1>Test</h1>
      </div>
    <!-- </div> -->

<?php echo form_open_multipart('login/check_database'); ?>
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
          <div class="modal-body">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary">
            
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>