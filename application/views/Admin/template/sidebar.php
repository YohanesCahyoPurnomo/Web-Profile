<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/image/me_profile.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Cahyo Purnomo</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li>
                <a href="<?php echo base_url(); ?>admin">
                    <i class="fa fa-th"></i> <span>Home</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>  
            <li>
                <a href="#">
                    <i class="fa fa-th"></i> <span>Service</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Admin/portfolio">
                    <i class="fa fa-th"></i> <span>Portfolio</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>            
            <li>
                <a href="<?php echo base_url(); ?>admin/about">
                    <i class="fa fa-th"></i> <span>About</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">