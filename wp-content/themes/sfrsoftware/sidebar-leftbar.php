<div class="one-fourth sidebar left">
  <div id="block-views-Services-block_1" class="block block-views">
		<div class="content">
		<div class="view view-Services view-id-Services view-display-id-block_1 services-list view-dom-id-1">
		<div class="view-content">
			<div class="item-list">
				<?php
				  if($post->post_parent)
				 	 $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  else
				 	 $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  if ($children) { ?>
				  <ul>
				 	 <?php echo $children; ?>
				  </ul>
				  <?php } ?>
			</div>
		</div>
  		</div>   
  		</div>
	</div>
</div>