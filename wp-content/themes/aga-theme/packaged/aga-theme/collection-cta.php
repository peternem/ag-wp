<?php if(get_field('collection_hot_link')) { ?>
<!-- Collection-CTA -->
<section class="container-fluid collection-cta">
	<div id="learnMore" class="aga-row row">
		<div class="col-md-12 text-center">
 			<h2><?php echo the_field('collection_cta_tagline'); ?>?</h2>
			<a class="btn btn-primary btn-lg btn-block" href="<?php echo the_field('collection_hot_link'); ?>"><?php echo the_field('collection_hot_link_label'); ?></a>    		
		</div>
	</div>		
</section>
<?php } ?>