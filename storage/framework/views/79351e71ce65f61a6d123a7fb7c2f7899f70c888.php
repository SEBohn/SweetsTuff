<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<header>
<style>
    body {
background-color: darkorchid

    }
</style>
</header>

<body >
    <div id="app">
<section class="px-8">
        <header class="conatiner mx-auto">
            <h1> <img src="/images/sweetstitle.png"  alt="titleimage" >
            </h1>
        </header>
</section>

<section class="px-8">
        <main class="container mx-auto">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
</section>
    </div>
</body>
</html>
<?php /**PATH C:\Workspace\sweets\resources\views/layouts/app.blade.php ENDPATH**/ ?>