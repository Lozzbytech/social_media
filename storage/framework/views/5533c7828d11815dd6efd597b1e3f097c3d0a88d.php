<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Create Post')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
   
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('posts.create', [])->html();
} elseif ($_instance->childHasBeenRendered('fogr6sz')) {
    $componentId = $_instance->getRenderedChildComponentId('fogr6sz');
    $componentTag = $_instance->getRenderedChildComponentTagName('fogr6sz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fogr6sz');
} else {
    $response = \Livewire\Livewire::mount('posts.create', []);
    $html = $response->html();
    $_instance->logRenderedChild('fogr6sz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH F:\social_media\simple-social-media-main\resources\views/post/create.blade.php ENDPATH**/ ?>