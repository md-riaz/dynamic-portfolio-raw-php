<?php
//  include header file
include '../dashboard_includes/session_check.php';
include '../dashboard_includes/header.php';
include '../dashboard_includes/sidebar.php';
include '../dashboard_includes/topNav.php';

?>
<head>
    <title>Fact Area</title>
</head>

<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        <div class="row">
            <div class="col-lg-10">

                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-primary">Fact Area Info</h4>
                    <div class="card-body">
                        <!-- if session found echo that with alert -->
                        <?php if (isset($_SESSION["success"])) : ?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congrats! </strong> <?= $_SESSION["success"] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif;
                        unset($_SESSION["success"]) ?>
                        <!-- if session found echo that with alert -->
                        <?php if (isset($_SESSION["err"])) : ?>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oh No! </strong> <?= $_SESSION["err"] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif;
                        unset($_SESSION["err"]) ?>

                        <form action="add-fact-post.php" method="POST">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Icon class name</label>
                                <input type="text" class="form-control" name="icon">
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Number Of Projects</label>
                                <input type="text" class="form-control" name="project_num">
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Project Topic</label>
                                <input type="text" class="form-control" name="topic">
                            </div>
                            <div class="form-group bmd-form-group">
                                <label for="status">Status</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="status" id="status" value="1">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Fact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>









<?php
include '../dashboard_includes/footer.php';
?>