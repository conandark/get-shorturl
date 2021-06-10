<?php $this->extend('layouts/main'); ?>


<?php $this->section('content'); ?>

<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
<h1>His Short</h1>

<div class="row mb-5">
    <div class="col-12">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Short URL</th>
                    <th>Full URL</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) { ?>
                    <tr>
                        <td><?= $row['short_url'] ?></td>
                        <td><?= $row['full_url'] ?></td>
                        <td><?= $row['create_at'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<?php $this->endSection(); ?>