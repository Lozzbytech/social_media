<div>

<?php $__env->startSection('styles'); ?>
<link rel='stylesheet' href='https://cdn.plyr.io/3.4.6/plyr.css'>

<style>
	.plyr {
  border-radius: 0.5rem;
  margin-bottom: 15px;
}
</style>
<?php $__env->stopSection(); ?>

<?php if(session()->has('success')): ?>
<div class="bg-green-100 border my-3 border-green-400 text-green-700 dark:bg-green-700 dark:border-green-600 dark:text-green-100 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline text-center"><?php echo e(session()->get('success')); ?></span>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="bg-red-100 border my-3 border-red-400 text-red-700 dark:bg-red-700 dark:border-red-600 dark:text-red-100 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline text-center"><?php echo e(session()->get('error')); ?></span>
</div>
<?php endif; ?>
	<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

      <?php echo $__env->make('elements.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="flex flex-col mx-2 my-12 md:mx-32 lg:my-28 lg:mx-60">
            <div class="bg-white shadow-md rounded-3xl p-4">
                <div class="flex-none">
                    <div class=" h-full w-full mb-3">
                        <img src="<?php echo e(asset('images/no-posts.png')); ?>"
                            alt="Just a flower" class="w-full object-scale-down md:object-cover lg:object-cover  rounded-2xl">
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">

                            <h2 class="flex-auto text-lg text-center font-medium"><?php echo e(__('No Posts found..!!!')); ?></h2>
                        </div>
                        <p class="mt-3"></p>

                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="py-4 mb-2">
	        <?php echo e($posts->links()); ?>

        </div>


        <?php echo $__env->make('elements.comments-post-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('elements.delete-post-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__env->startSection('scripts'); ?>
         <script src='https://cdn.plyr.io/3.4.6/plyr.js'></script>
		 <script>
			document.addEventListener('DOMContentLoaded', () => {
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  const player = Plyr.setup('video', { captions: {active: true}, tooltips: {controls: true, seek: true} });

  // Expose
  window.player = player;

  for (var i in player) {
     player[i].on('play', function (instance) {
       var source = instance.detail.plyr.source;
       for (var x in player) {
         if (player[x].source != source) {
          player[x].pause();
         }
       }
     });
    }

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('.js-play', 'click', () => {
    player.play();
  });

  // Pause
  on('.js-pause', 'click', () => {
    player.pause();
  });

  // Stop
  on('.js-stop', 'click', () => {
    player.stop();
  });

  // Rewind
  on('.js-rewind', 'click', () => {
    player.rewind();
  });

  // Forward
  on('.js-forward', 'click', () => {
    player.forward();
  });
});
		 </script>
		<?php $__env->stopSection(); ?>

</div>
<?php /**PATH F:\social_media\simple-social-media-main\resources\views/livewire/posts/view.blade.php ENDPATH**/ ?>