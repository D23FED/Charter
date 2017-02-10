			<section>
				<h2>Position</h2>
				<?php
				$positions = array(
					'relative',
					'absolute',
					'left',
					'right',
					'bottom-justified',
					'top-justified',
					'left-justified',
					'right-justified',
					'vertical-center',
					'vertical-center-abs',
					'horizontal-center',
					'absolute-center',
					'full',
					'vertical-top',
					'vertical-middle',
					'vertical-bottom',
					'vertical-baseline'
				); ?>
				<div class="relative">
					<?php foreach ($positions as &$value) : ?>
						<p class="<?php echo $value;?>"><?php echo $value;?></p>
					<?php endforeach;?>
				</div>



			</section>
