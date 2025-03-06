<!doctype html>
<html lang="en">
<head>
    <base href="<?= base_url('/'); ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= get_csrf_meta(); ?>
    <title>PHPFramework :: <?= $title ?? ''; ?></title>
    <link rel="icon" href="<?= base_url('/favicon.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/libs/toastr/toastr.min.css'); ?>">

    <?php if (!empty($styles)): ?>
        <?php foreach ($styles as $style): ?>
            <link rel="stylesheet" href="<?= $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($header_scripts)): ?>
        <?php foreach ($header_scripts as $header_script): ?>
            <script src="<?= $header_script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url('/assets/css/main.css'); ?>">
    <style>
        body {
            background: #0dcaf0;
        }
    </style>
</head>
<body>

<h1>MAIN TEMPLATE</h1>

<?php //get_alerts(); ?>
<?= /** @var string $content */
$content; ?>


<script src="<?= base_url('/assets/js/jquery-3.7.1.min.js'); ?>"></script>
<script src="<?= base_url('/assets/libs/toastr/toastr.min.js'); ?>"></script>

<script>
    $(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-full-width",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        };

        <?php if (!empty($success = session()->getFlash('success'))): ?>
        toastr.success('<?= $success ?>');
        <?php endif; ?>

        <?php if (!empty($error = session()->getFlash('error'))): ?>
        toastr.error('<?= $error ?>');
        <?php endif; ?>
    });
</script>

<script src="<?= base_url('/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<?php if (!empty($footer_scripts)): ?>
    <?php foreach ($footer_scripts as $footer_script): ?>
        <script src="<?= $footer_script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<script src="<?= base_url('/assets/js/main.js'); ?>"></script>

</body>
</html>
