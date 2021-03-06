<?php
//  include header file
require_once '../dashboard_includes/session_check.php';
require_once '../dashboard_includes/header.php';
require_once '../dashboard_includes/sidebar.php';
require_once '../dashboard_includes/topNav.php';

//Select all data from messages table
$select_data = "SELECT * FROM `messages` WHERE `status` != 2";
//run that query
$run_query = mysqli_query($db_connect, $select_data);

function status($status)
{
    echo $status == 0 ? "bold" : "normal";
}
?>
<head>
    <title>All Messeges</title>
</head>


<div class="content">
    <div class="container-fluid">
        <!-- your content here -->


        <!-- if session found echo that with alert -->
        <?php if (isset($_SESSION["emsg"])) : ?>

            <div class="alert alert-info  alert-dismissible fade show" role="alert">
                <?= $_SESSION["emsg"] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif;
        unset($_SESSION["emsg"]) ?>
        <!-- if session found echo that with alert -->
        <?php if (isset($_SESSION["smsg"])) : ?>

            <div class="alert alert-info  alert-dismissible fade show" role="alert">
                <?= $_SESSION["smsg"] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif;
        unset($_SESSION["smsg"]) ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Messages Section</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through all rows from database -->
                                <?php $count = 1;
                                foreach ($run_query as $msg) : ?>
                                    <tr style="font-weight: <?php status($msg['status']) ?>">
                                        <!-- echo a colunm -->
                                        <td><?= $count ?></td>
                                        <td><?= $msg['name'] ?></td>
                                        <td><?= $msg['email'] ?></td>
                                        <td><?= substr($msg['message'], 0, 40) . "..." ?></td>
                                        <td>
                                            <!-- pass the value of id with session -->
                                            <a title="View" href="/admin/messages/msg.php?id=<?= $msg['id'] ?>"><span class="text-info"><i class="far fa-address-card"></i></span></a>

                                            <?php if ($_SESSION["role"] == 1) : ?>
                                                <a data-toggle="modal" data-target="#deleteModal" title="Delete" id="dlbtn" onclick="dltfn(<?= $msg['id'] ?>)"><span class="text-danger"><i class="fas fa-trash"></i></span></a>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php $count++;
                                endforeach ?>
                            </tbody>
                        </table>
                        <button onclick="window.print();" type="button" class="btn btn-info"><i class="material-icons"> local_printshop </i> Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DELETE CONFIRMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this message?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" type="button" class="btn btn-danger text-white dlt">Save changes</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<script>
    // select model a tag and set href attr
    function dltfn(id) {
        $(".dlt").attr("href", "/admin/messages/change_status.php?id=" + id);
    }
</script>
<?php
require_once '../dashboard_includes/footer.php';
?>