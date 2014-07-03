<div class="l-page l-mercury-twocol">
	<header class="l-header-wrap wrapper" role="banner">

			
			<?php if (!empty($page['nav'])): ?>
			<div class="l-container">
			<nav class="l-nav clearfix" role="navigation">
				
					<?php print render($page['nav']); ?>
				
			</nav>
			</div><!-- end .l-container -->	
			<?php endif; ?>	



			<div class="l-banner clearfix">
				<div class="l-container l-container-fullwidth">	
				
					<?php print render($page['banner']) ?>
					
				</div><!-- end .l-container -->	
			</div><!-- end .l-banner -->


			<?php if ($logo): ?>
			<div class="l-container">
			
			<div class="l-branding clearfix">
					
		        
		          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
		       
				
			</div>					
 			</div><!-- end .l-container -->	
 			<?php endif; ?>
	

	</header> <!-- end .l-header-wrap -->

	<div class="l-main-wrap wrapper">
		<div class="l-container">

			<!-- Wrap content-first & -second to allow content-header to span both. -->
			<div class="l-content-wrap">

				<!-- Content Header -->
				<?php if (!empty($page['content_header']) || !empty($tabs)): ?>
				<div class="l-content-header">
					<?php print render($page['content_header']); ?>
				
					<!-- Print tabs, messages, action links etc. in content_header as it spans two columns. -->
					<?php print render($tabs); ?>
					<?php //print $breadcrumb; ?>
					<?php print $messages; ?>
					<?php print render($page['help']); ?>

					<!-- Action Links -->
					<?php if ($action_links): ?>
				    <ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>
					

				</div><!-- end .l-content-header -->
				<?php endif; ?>

				<?php if (!empty($page['content'])): ?>
					<!-- Content -->
					<div class="l-content <?php if (empty($page['content_second'])) : ?> l-span-2col <?php endif; ?>clearfix">			
						<!-- L-TITLEBOX ============== -->
						<!-- If content in titlebox render it, otherwise render page title -->
						<?php if (!empty($page['titlebox'])): ?>
						<?php print render($page['titlebox']); ?>
						<?php elseif ($title): ?>
							<h1 class="page-title default-page-title">
								<?php print $title; ?>
							</h1>
						<?php endif; ?>

						<?php print render($page['content']); ?>			
					</div><!-- end .l-content -->
				<?php endif; ?>

				<!-- Content Footer -->
				<?php if (!empty($page['content_footer'])): ?>
				<div class="l-content-footer">
					<?php print render($page['content_footer']); ?>
				</div><!-- end .l-content-footer -->
				<?php endif; ?>

			</div> <!-- end .l-content-wrap --> 
			
			<!-- Render sidebar outside of content wrap. -->
			<?php if (!empty($page['sidebar_first'])): ?>
			<div class="l-sidebar-first">
			
				<?php print render($page['sidebar_first']); ?>
			
			</div><!-- end .l-sidebar-first -->
			<?php endif; ?>
		
		</div><!-- end .l-container -->
	</div><!-- end .l-main-wrap -->
	
</div>

<footer class="l-footer-wrap wrapper" role="contentinfo">
		<div class="l-container">		
			<div class="l-footer">
				<div class="l-footer-first clearfix">
						<?php if (!empty($page['footer_first'])): ?>
						<?php print render($page['footer_first']); ?>
						<?php endif; ?>
				</div><!-- end .l-footer-first -->
				<div class="l-footer-second clearfix">
						<?php if (!empty($page['footer_second'])): ?>
						<?php print render($page['footer_second']); ?>
						<?php endif; ?>
				</div><!-- end .l-footer-second -->
			</div><!-- end .l-footer -->
		</div><!-- end .l-container -->
</footer><!-- end .l-footer-wrap -->

<footer class="l-footer-strapline-wrap wrapper" role="contentinfo">
		<div class="l-container">		
			<div class="l-footer-strapline clearfix">
						<?php if (!empty($page['footer_strapline'])): ?>
						<?php print render($page['footer_strapline']); ?>
						<?php endif; ?>
			</div><!-- end .l-footer-strapline -->
		</div><!-- end .l-container -->
</footer><!-- end .l-footer-strapline-wrap -->

</div><!-- end .l-page -->