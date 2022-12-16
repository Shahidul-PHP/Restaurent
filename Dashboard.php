<?php
session_start();
require 'login_auth.php';
require 'db.php';

?>

<?php require 'Header_files/Header.php'; ?>

<div class="card">
    <div class="card-header">
        <h1>Wellcome to dashboard <strong><?= $assoc_header['name']?></strong></h1>
    </div>
    <div class="card-body">
        <h5>This is your Admin Dashboard for Restaurant Project</h5>
    </div>
</div>












<?php require 'Header_files/Footer.php'; ?>