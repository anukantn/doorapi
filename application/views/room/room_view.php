<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<style>
    #qrcode {
        width: 160px;
        height: 160px;
        margin-top: 15px;
    }
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Accounts</li>
    <li class="breadcrumb-item"><a href="<?= base_url() ?>account/cusAccount">Account</a></li>
    <li class="breadcrumb-item active">View Account</li>
</ol>



<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Room Number:</label>
    <div class="col-10">
        <?= $roomkey['room_number'] ?>
    </div>
</div>


<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Start date:</label>
    <div class="col-10">
        <?= $roomkey['startdate'] ?>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">End date:</label>
    <div class="col-10">
        <?= $roomkey['enddate'] ?>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Access Key:</label>
    <div class="col-10">
        <?= $roomkey['access_key'] ?>
    </div>
</div>
<div class="form-group row offset-md-4">
    <div id="qrcode"></div>
</div>
<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), " <?= $roomkey['access_key'] ?>");
</script>