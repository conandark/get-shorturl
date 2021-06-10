<?php $this->extend('layouts/main');?>

<?php $this->section('content');?>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"> </script>
<h1>Generate Short URL</h1>
<div class="row mb-5">
    <div class="col-12  mb-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Input URL</label>
                <input type="text" class="form-control" id="txtURL">
            </div>
            <button type="submit" class="btn btn-primary" onclick="submitGenerate();return false">Submit</button>
        </form>
    </div>
    <div class="col-12">
        <div id="qr"></div>
    </div>
</div>



<script>
    var qrcode = null;

    function postSuccess(value) {
        var data = JSON.parse(value);

        if (!qrcode) {
            qrcode = new QRCode("qr");
        }

        $("#txtURL").val('')
        qrcode.makeCode( '<?=base_url()?>/' +  data.short_url);
    }

    function failedSuccess(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    }

    function submitGenerate() {

        var url = $("#txtURL").val();

        $.ajax({
            type: "POST",
            url: '<?=base_url("Home/generateShortURL")?>',
            data: {
                full_url: $("#txtURL").val()
            },
            success: postSuccess,
            error: failedSuccess
        });
    }
</script>

<?php $this->endSection();?>