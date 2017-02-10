			<section>
				<h2>Borders</h2>
				<div>
				<?php
				$borders = array(
					''
				); ?>
					<?php foreach ($borders as &$value) : ?>
						<p class="<?php echo $value;?>"><?php echo $value;?></p>
					<?php endforeach;?>
				</div>
			</section>
