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
            <?php echo e(__('My Posts')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
<div class="container px-3 mx-auto grid bg-gray-100">
<style>
	input, textarea, button, select, a { -webkit-tap-highlight-color: rgba(0,0,0,0); }
	button:focus{ outline:0 !important; } }
	
</style>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('posts.view', ['type' => 'me'])->html();
} elseif ($_instance->childHasBeenRendered('TmiB63h')) {
    $componentId = $_instance->getRenderedChildComponentId('TmiB63h');
    $componentTag = $_instance->getRenderedChildComponentTagName('TmiB63h');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TmiB63h');
} else {
    $response = \Livewire\Livewire::mount('posts.view', ['type' => 'me']);
    $html = $response->html();
    $_instance->logRenderedChild('TmiB63h', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
</div>
            
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH F:\social_media\simple-social-media-main\resources\views/post/manage.blade.php ENDPATH**/ ?>