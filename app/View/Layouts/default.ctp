<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html>
<html lang="jp">
<head>
  <?php echo $this->Html->charset(); ?>
  <title>digup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<?php
  echo $this->Html->css('bootstrap.min');
  //echo $this->Html->meta('icon');
  //echo $this->Html->css('cake.generic');
  //echo $this->fetch('meta');
  //echo $this->fetch('css');
  //echo $this->fetch('script');
?>
  <!-- Le styles -->
  <!-- <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  
  <style type="text/css">
body { 
  padding-top: 60px; 
  padding-bottom: 40px;
}
.thumbnail {
  border: 1px solid #DDD;
  padding:5px;
}
.btn {
  -webkit-border-radius:0px;
  border-radius:0px;
}
  </style>
<?php
  echo $this->Html->css('bootstrap-responsive.min');
?>

  <!-- <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
</head>
<body>

<!-- header -->
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo $this->Html->url("/"); ?>">digup</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active">
            <a href="<?php echo $this->Html->url("/"); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo $this->Html->url("/questionary"); ?>">dig</a>
          </li>
        </ul>
        <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Search">
        </form>
        <ul class="nav pull-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">menu</b></a>
            <ul class="dropdown-menu">
              <li><a href="#">アカウント</a></li>
              <li class="divider"></li>
              <li>
                <a href="#loginModal" role="button" data-toggle="modal">digupにログイン</a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<!-- /header -->

<?php echo $this->fetch('content'); ?>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>

<script>

</script>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>


