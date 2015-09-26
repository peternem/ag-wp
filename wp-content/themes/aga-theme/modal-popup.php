<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <?php if (has_tag("hinges") || has_tag("panels") || has_tag("configs") || has_tag("designer-glass" || has_tag("hardware-clamps-1"))){ ?>?>
  	<div class="modal-dialog modal-sm" style="width: 100%; max-width: 460px;">
 <?php } else { ?>
 	<div class="modal-dialog modal-lg">
 <?php } ?>
    <div class="modal-content"> 
    	<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 id="mySmallModalLabel" class="modal-title"> </h4>
		</div>             
      <div class="modal-body">
  			<img src="" class="img-responsive imagepreview" style="width: 100%;" />
      </div>
    </div>
  </div>
</div>