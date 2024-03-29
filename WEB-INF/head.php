<?php
if(session_id() == '') {
    session_start();
}
print "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>".strip_tags($CFG['softName'])."</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">
	<link rel=\"stylesheet\" href=\"dist/css/fakeLoader.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"plugins/font-awesome-4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"plugins/ionicons-2.0.1/css/ionicons.min.css\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker-bs3.css\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"plugins/iCheck/all.css\">
    <!-- Bootstrap Color Picker -->
    <link rel=\"stylesheet\" href=\"plugins/colorpicker/bootstrap-colorpicker.min.css\">
    <!-- Bootstrap time Picker -->
    <link rel=\"stylesheet\" href=\"plugins/timepicker/bootstrap-timepicker.min.css\">
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"plugins/select2/select2.min.css\">	
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"dist/css/NOVASTAR.css\">
    <link rel=\"stylesheet\" href=\"dist/css/skins/_all-skins.min.css\">
    <link rel=\"stylesheet\" href=\"plugins/ion.rangeSlider-2.1.2/css/ion.rangeSlider.css\" />
    <link rel=\"stylesheet\" href=\"plugins/ion.rangeSlider-2.1.2/css/ion.rangeSlider.skinFlat.css\" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
	<link rel=\"icon\" href=\"WEB-INF/favicon.png\" type=\"image/x-icon\">
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\">
	<div class=\"fakeloader\"><div class=\"fl spinner5\"><div class=\"cube1\"></div><div class=\"cube2\"></div></div></div>
    <div class=\"wrapper\">";
?>