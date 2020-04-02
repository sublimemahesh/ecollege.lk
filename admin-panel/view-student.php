<!DOCTYPE html>

<?php
include '../class/include.php';
$id = '';
$id = $_GET['id'];
$STUDENT = new Student($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Student</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconaa.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <style>.demo-form-wrapper {
                padding-bottom: 25px;
                padding-top: 25px;
            }
        </style>

    </head>
    <body class="layout layout-header-fixed">
        <div class="layout-header">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-brand-center" href="dashboard.php">
                        <img class="navbar-brand-logo" src="./../img/logo.png" alt="Elephant">
                    </a>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                        </span>
                        <span class="bars bars-x">
                            <span class="bar-line bar-line-4"></span>
                            <span class="bar-line bar-line-5"></span>
                        </span>
                    </button>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="arrow-up"></span>
                        <span class="ellipsis ellipsis-vertical">
                            <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
                        </span>
                    </button>
                </div>
                <div class="navbar-toggleable">
                    <nav id="navbar" class="navbar-collapse collapse">
                        <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="bars">
                                <span class="bar-line bar-line-1 out"></span>
                                <span class="bar-line bar-line-2 out"></span>
                                <span class="bar-line bar-line-3 out"></span>
                                <span class="bar-line bar-line-4 in"></span>
                                <span class="bar-line bar-line-5 in"></span>
                                <span class="bar-line bar-line-6 in"></span>
                            </span>
                        </button>

                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">View Student - " <?php echo $STUDENT->student_id ?> "</span>
                                <span class="d-ib">
                                    <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                                        <span class="sr-only">Add to shortcut list</span>
                                    </a>
                                </span>
                            </h1>
                            <p class="title-bar-description">
                                <small>You can personalize your dashboard by using <a href="widgets.html">widgets</a>.</small>
                            </p>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-main">
            <?php
            include 'navigation.php';
            ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <!--                    <div class="row">
                                            <div class="col-md-12">
                                                <p><small>In addition to the basic styling that Bootstrap offers for every element of a form, we have expanded this styling with custom <code>selects</code>, <code>checkboxes</code>, <code>radios</code>, <code>switches</code> and a few additional classes.<span class="nowrap">Please see <a href="toggles.html">Toggles page</a></span>.</small></p>
                                            </div>
                                        </div>-->
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 card">
                            <div class="demo-form-wrapper">
                                <form class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Student ID</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->student_id ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Full Name </label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->full_name ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Email</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->email ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">NIC Number</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->nic_number ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Gender</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->gender ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Age</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->age ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->phone_number ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Address</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->address ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Education Level</label>
                                        <div class="col-sm-10">
                                            <?php
                                            if ($STUDENT->education_level == 'o/l') {
                                                ?>
                                                <label class="custom-control custom-control-primary custom-radio">
                                                    <input class="custom-control-input" type="radio" name="education_level" value="o/l" checked="" >
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Educational Level ( O / L )</span>
                                                </label>
                                                <label class="custom-control custom-control-primary custom-radio">
                                                    <input class="custom-control-input" type="radio" name="education_level" value="a/l">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Educational Level ( A / L )</span>
                                                </label>
                                            <?php } else { ?>
                                                <label class="custom-control custom-control-primary custom-radio">
                                                    <input class="custom-control-input" type="radio" name="education_level" value="o/l"  >
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Educational Level ( O / L )</span>
                                                </label>
                                                <label class="custom-control custom-control-primary custom-radio">
                                                    <input class="custom-control-input" type="radio" name="education_level" value="a/l" checked="">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Educational Level ( A / L )</span>
                                                </label>
                                            <?php } ?>                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Profile Image</label>
                                        <div class="col-sm-10">
                                            <?php
                                            if (empty($STUDENT->image_name)) {
                                                ?>
                                                <img src="../img/member.jpg" width="128px"class="img-thumbnail">
                                            <?php } else { ?>
                                                <img src="../upload/student/profile/<?php echo $STUDENT->image_name ?>" class="img-thumbnail">

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">NIC Front</label>
                                        <div class="col-sm-5">
                                            <?php
                                            if (empty($STUDENT->nic_front)) {
                                                ?>
                                                <img src="../img/Nic_Front.jpg"  class="img-thumbnail">
                                            <?php } else { ?>
                                                <div class="gallery  " >
                                                    <a href="../upload/student/nic_card/front/<?php echo $STUDENT->nic_front ?>" class="big">
                                                        <img src="../upload/student/nic_card/front/thumb/<?php echo $STUDENT->nic_front ?>"   title=" " class="img-thumbnail"/>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>

                                        <div class="col-sm-5">
                                            <?php
                                            if (empty($STUDENT->nic_back)) {
                                                ?>
                                                <img src="../img/Nic_Back.jpg"  class="img-thumbnail">
                                            <?php } else { ?>
                                                <div class="gallery  " >

                                                    <a href="../upload/student/nic_card/back/<?php echo $STUDENT->nic_back ?>" class="big">
                                                        <img src="../upload/student/nic_card/back/thumb/<?php echo $STUDENT->nic_back ?>"     class="img-thumbnail"/>
                                                    </a>


                                                </div>
                                                <img src=""  class="img-thumbnail">
                                            <?php } ?>

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                        <div class="col-md-1"></div>
                    </div>

                </div>
            </div>


        </div>

        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/simple-lightbox.min.js" type="text/javascript"></script>


        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
    </body>

</html>