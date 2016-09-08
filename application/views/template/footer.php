<div class="container">
    <div class="row">
        <div class="col-md-4">
            <span class="copyright">Copyright &copy; YCProfile 2016</span>
        </div>
        <div class="col-md-4">
            <ul class="list-inline social-buttons">
                <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-inline quicklinks">
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Terms of Use</a>
                </li>
                <li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Admin</a></li>
                <!-- <li><a href="<?php echo base_url('auth_login'); ?>">Admin</a></li> -->
            </ul>
        </div>
    </div>
</div>


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