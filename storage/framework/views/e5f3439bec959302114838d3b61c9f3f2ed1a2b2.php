<!-- component -->
<div class="container px-3 mx-auto grid bg-gray-100 mb-12">
<style>
	input, textarea, button, select, a { -webkit-tap-highlight-color: rgba(0,0,0,0); }
	button:focus{ outline:0 !important; } }
	
</style>

     <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('posts.view', ['type' => null])->html();
} elseif ($_instance->childHasBeenRendered('1TWv1zf')) {
    $componentId = $_instance->getRenderedChildComponentId('1TWv1zf');
    $componentTag = $_instance->getRenderedChildComponentTagName('1TWv1zf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1TWv1zf');
} else {
    $response = \Livewire\Livewire::mount('posts.view', ['type' => null]);
    $html = $response->html();
    $_instance->logRenderedChild('1TWv1zf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
</div><?php /**PATH F:\social_media\simple-social-media-main\resources\views/vendor/jetstream/components/welcome.blade.php ENDPATH**/ ?>