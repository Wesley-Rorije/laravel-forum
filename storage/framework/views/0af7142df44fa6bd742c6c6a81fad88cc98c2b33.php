<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]); ?>;
    </script>

    <style>
        body { padding-bottom: 100px; }
        .level { display: flex; align-items: center; }
        .flex { flex: 1; }
        .mr-1 { margin-right: 1em; }
        [v-cloak] { display: none; }
    </style>
</head>
<body>
<div id="app">
    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <flash message="<?php echo e(session('flash')); ?>"></flash>
</div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
