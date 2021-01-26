<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Alliance - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">

<!-- -------------- Body Wrap  -------------- -->
<div id="main" class="animated fadeIn">

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- -------------- Content -------------- -->
        <section id="content" class="animated fadeIn">

            <div class="allcp-form theme-warning mw500" style="margin-top: 10%;" id="login">

                <div class="bg-alert text-center mb20 br3 pv15">
                    <h2 style="color:#FFFFFF"><a href="/" style="text-decoration:none; color:#FFFFFF">Human Resource Management System</a></h2>
                </div>
                <div class="panel panel-alert">
                    <div class="panel-heading pn">
                        <div class="panel-title">Reset Password</div>
                    </div>
                    {!! Form::open(['class' => 'form-horizontal']) !!}

                        <div class="panel-body pn pb10 pt25 mtn">
                            <p>Please enter the registered e-mail. Once completed, you will receive an email with
                                with password.</p>

                            <div class="section mn">

                                <div class="smart-widget sm-right smr-80">
                                    <label for="email" class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="gui-input"
                                               placeholder="Your Email Address">
                                        <label for="email" class="field-icon text-alert">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                    </label>

                                    <label for="email" class="button">
                                        <a href="/reset-password" >
                                            <input type="submit" class="button" value="Reset"></a>
                                    </label>
                                </div>
                                <!-- -------------- /Block Widget -------------- -->

                            </div>
                            <!-- -------------- /section -------------- -->
                        </div>
                        <!-- -------------- /Form -------------- -->

                    {!! Form::close() !!}

                </div>

            </div>

        </section>
        <!-- -------------- /Content -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="assets/js/plugins/canvasbg/canvasbg.js"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2.1,
                y: window.innerHeight / 2.2
            },
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
