<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$webTitle?> | Bootstraps</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon"  type="image/ico" href="http://www.mjcs.my/images/favicon.ico">

  <!-- Bootstraps 4-alpha -->
  <link href="/assets/bootstraps/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  
  <!-- Webby Custom CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">
  <!-- Webby Custom Javascripts -->
  <script src="/assets/js/custom.js"></script>

  <?php if($form==""){ ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-84294377-1', 'auto');
    ga('send', 'pageview');
  </script>
  <?php } ?>

</head>