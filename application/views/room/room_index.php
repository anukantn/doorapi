<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Customer Accounts <a href="<?= base_url() ?>index.php/room/roomAssign/add"><button class="btn btn-primary">+</button></a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Acces Key</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Room Number</th>
                        <th>Acces Key</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($roomkey as $v) { ?>
                        <tr>
                            <td><?= $v["room_number"] ?></td>
                            <td><?= $v["access_key"] ?></td>
                            <td><?= $v["startdate"] ?></td>
                            <td><?= $v["enddate"] ?></td>

                            <td>
                                <form method="POST" action="" style="display:inline;"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= $v["room_number"] ?>"><input type="submit" class="btn btn-danger" value="Delete"></form> <a href="<?= base_url() ?>index.php/room/roomAssign/edit/<?= $v["room_number"] ?>"><button class="btn btn-warning">Edit</button></a>&nbsp;<a href="<?= base_url() ?>index.php/room/roomAssign/view/<?= $v["room_number"] ?>"><button class="btn btn-success">View</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>