<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
 #qrcode {
  width:160px;
  height:160px;
  margin-top:15px;
}
</style>

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>index.php/room/roomAssign">Dashboard</a></li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item">Room</li>
    <li class="breadcrumb-item active">Add Room Assignment</li>
</ol>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.date').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
            todayBtn: "linked"
        })
    });
</script>
<form method="post" accept-charset="utf-8" action="<?= base_url() ?>index.php/room/roomAssign">
    <input type="hidden" name="action" value="add">
    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Room Number:</label>
        <div class="col-10">
            <input class="form-control" type="text" value="" placeholder="" name="room_number">
        </div>
    </div>
 <input class="form-control" hidden type="text" value="0" placeholder="" name="status">
    <div class="form-group row" data-capture=".input-group, .datepicker">
        <label for="example-text-input" class="col-2 col-form-label">Start Date:</label>
        <div class="input-group date col-10">

            <input type="text" class="form-control" placeholder="Select start date" name="startdate" onchange="checkstartdate()" id="startdate" required>
            <div class="input-group-append">
                <i class="fas fa-calendar-week"></i>
            </div>
        </div>
    </div>
    <div class="form-group row" data-capture=".input-group, .datepicker">
        <label for="example-text-input" class="col-2 col-form-label">End date:</label>
        <div class="input-group date col-10">

            <input type="text" class="form-control" placeholder="Select end date" name="enddate" id="enddate" onchange="checkdate()" required>
            <div class="input-group-append">
                <i class="fas fa-calendar-week"></i>
            </div>
        </div>
    </div>
 <script>
        function checkdate() {
            var start = document.getElementById("startdate").value;
            var end = document.getElementById("enddate").value;

            var startdate = Date.parse(start);
            var enddate = Date.parse(end);
            var today = new Date();
            console.log(startdate);
            //var daysBetween = (new Date(enddate).getTime() - new Date(startdate).getTime()) / 86400000
            if (startdate < today) {
                Swal.fire({
                    type: 'warning',
                    title: 'Check Date range!',
                    text: 'Date range selected is invalid!',

                })
            }
            if (startdate > enddate) {

                Swal.fire({
                    type: 'warning',
                    title: 'Check Date range!',
                    text: 'Date range selected is invalid!',

                })
                // alert('test');
                document.getElementById("enddate").value = '';
            }




        }

        function checkstartdate() {
            var start = document.getElementById("startdate").value;
            //var end = document.getElementById("enddate").value;

            var startdate = Date.parse(start);
            //var enddate = Date.parse(end);
            var today = new Date();
            console.log(startdate);
            //var daysBetween = (new Date(enddate).getTime() - new Date(startdate).getTime()) / 86400000
            if (startdate < today) {
                Swal.fire({
                    type: 'warning',
                    title: 'Check Date range!',
                    text: 'Start date selected is invalid!',

                })
                document.getElementById("startdate").value = '';
            }
           
        }
    </script>
    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Access:</label>
        <div class="input-group mb-3 col-10">
            <input class="form-control" type="text" value="" placeholder="" name="access_key" id="access_key">
            <div class="input-group-append">
                <input type="button" onclick="makeid(10)" value="Generate Key">
            </div>

        </div>
        

    </div>
    <div class="form-group row offset-md-4">
        <div class="" id="qrcode"></div>
    </div>
    <div class="form-group row">
        <div class="col-10">
            <input type="submit" class="btn btn-primary">
        </div>
    </div>

</form>

<script>
    function makeid(length) {
        document.getElementById("qrcode").innerHTML = "";

        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        document.getElementById('access_key').value = result;
       
     
        document.getElementById("qrcode").hidden = false;
        new QRCode(document.getElementById("qrcode"), result);
    }
</script>

<script type="text/javascript">

</script>