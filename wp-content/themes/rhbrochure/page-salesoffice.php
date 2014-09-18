<?php
/* Template Name: Page - Home (Sales Office) */

get_header( 'salesoffice' );

?>

	<main role="main" class="content">
		<section class="slides-wrapper">
			 <div class="slides-container">
				<div class="slides">
	
				<?php

				$args = array(
					'post_type'		=> 'post',
					'cat'			=> 2,
					'orderby'		=> 'meta_value_num',
					'meta_key'		=> 'rhb_slide_order',
					'order' 		=> 'ASC',
					'posts_per_page'	=> -1
				);

				$the_query = new WP_Query( $args );

				if ($the_query->have_posts()) :
					while ( $the_query->have_posts() ) :
					
						$the_query->the_post();
				?>	
					<div class="slide" data-title="<?php echo get_the_title(); ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'slides', array( 'class' => 'slide-img' ) );
					} else {
						
					}
					?>
					</div> <!-- end .slide -->
				<?php
				endwhile;
				endif;
				?>
	
				</div>
			 </div>

			<a class="btn-slidenav nav-prev" data-dir="prev" href="javascript:void(0);"></a>
			<a class="btn-slidenav nav-next" data-dir="next" href="javascript:void(0);"></a>
		</section>
	</main>

</div>
<!-- /wrapper -->

<div class="modal-container" data-modal="modal-share">
	<div class="modal-share modal-contents">
	    <?php echo do_shortcode( '[contact-form-7 id="150" title="Share Brochure - Sales Office"]' ); ?>
	    <i class="fa fa-times modal-close"></i>
	</div>
</div>

<div class="modal-container" data-modal="modal-print">
	<div class="modal-print modal-contents">
		<div class="modal-content-slides">			
			<?php
			$i = 0;
			
			if ($the_query->have_posts()) :
				while ( $the_query->have_posts() ) :
				
					$the_query->the_post();
			?>
			<div class="mcs-container">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'slides-thmb', array( 'class' => 'mcs-thmb', 'data-postid' => get_the_id() ) );
				}
				?>
				<div class="mcs-title">
					<?php the_title(); ?>
					<!--<input class="modal-print-checkbox" type="checkbox" name="modal-print-img" value="" data-postid="<?php the_ID(); ?>">-->
				</div>
			</div>
			<?php
			$i++;
			endwhile;
			endif;
			?>
			<i class="fa fa-times modal-close"></i>
			<div class="modal-print-btns">
				<a class="btn-modal btn-checkAll" href="javascript:void(0);">Select All</a>
				<a class="btn-modal btn-uncheckAll" href="javascript:void(0);">Deselect All</a>
				<a class="btn-modal btn-print noPages" href="/print-sales-office?i=" target="_blank">Print</a>
			</div>
		</div>	    
	</div>
</div>

<div class="modal-container" data-modal="modal-content">
	<div class="modal-content modal-contents">
		<div class="modal-content-container">
			<div class="modal-content-slides">			
				<i class="fa fa-times modal-close"></i>
				<?php
				$i = 0;
				
				if ($the_query->have_posts()) :
					while ( $the_query->have_posts() ) :
					
						$the_query->the_post();
				?>
				<div class="mcs-container">
					<a class="mcs-link" href="javascript:void(0);" data-index="<?php echo $i; ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'slides-thmb', array( 'class' => 'mcs-thmb' ) );
					}
					?>
					</a>
					<div class="mcs-title">
						<a class="mcs-link" href="javascript:void(0);" data-index="<?php echo $i; ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<?php
				$i++;
				endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
