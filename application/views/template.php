<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yohanes Cahyo Purnomo</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css'); ?>">
    <!-- Custom CSS -->
    <!-- <link href="css/agency.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/agency.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/elegant-icons-style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-responsive.css'); ?>">

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/font-awesome/css/font-awesome.min.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php echo $_menu; ?>

    <!-- Header -->
    <header>
        <?php echo $_header; ?>
    </header>

    <!-- Services Section -->
    <section id="services">
       <?php echo $_services ?>
    </section>

    <!-- Portfolio Grid Section -->
        <?php echo $_portfolio; ?>
    

    <!-- About Section -->
    <section id="about">
       <?php echo $_about; ?>
    </section>

    <!-- Team Section -->
   <!--  <section id="team" class="bg-light-gray">
        <?php echo $_teamSection; ?>
    </section> -->

    <!-- Clients Aside -->
    <aside class="clients">
       <?php echo $_clientSite; ?>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
       <?php echo $_contact; ?>
    </section>

    <footer>
       <?php echo $_footer; ?>
    </footer>

    

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/template/js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/template/js/bootstrap.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/template/js/classie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/js/cbpAnimatedHeader.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/template/js/jqBootstrapValidation.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/js/contact_me.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery-knob/js/jquery.knob.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/template/js/agency.js'); ?>"></script>

     <script>

      //knob
      $(".knob").knob();

  </script>

</body>

</html>
