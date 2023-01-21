<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Livewire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <main class="container py-4">
        <h1>Laravel Livewire Select2</h1>
        <hr>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('my-tutorial')->html();
} elseif ($_instance->childHasBeenRendered('qRGJjTo')) {
    $componentId = $_instance->getRenderedChildComponentId('qRGJjTo');
    $componentTag = $_instance->getRenderedChildComponentTagName('qRGJjTo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qRGJjTo');
} else {
    $response = \Livewire\Livewire::mount('my-tutorial');
    $html = $response->html();
    $_instance->logRenderedChild('qRGJjTo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('article-show')->html();
} elseif ($_instance->childHasBeenRendered('HEfJFMn')) {
    $componentId = $_instance->getRenderedChildComponentId('HEfJFMn');
    $componentTag = $_instance->getRenderedChildComponentTagName('HEfJFMn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HEfJFMn');
} else {
    $response = \Livewire\Livewire::mount('article-show');
    $html = $response->html();
    $_instance->logRenderedChild('HEfJFMn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </main>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /home/abdmalik/livewire-select2/resources/views/tutorial.blade.php ENDPATH**/ ?>