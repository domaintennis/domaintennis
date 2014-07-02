<div class="l-page l-mercury-threecol">
	<header class="l-header-wrap wrapper" role="banner">

			
			<?php if (!empty($page['nav'])): ?>
			<div class="l-container">
			<nav class="l-nav clearfix" role="navigation">
				
					<?php print render($page['nav']); ?>
				
			</nav>
			</div><!-- end .l-container -->	
			<?php endif; ?>	


			<?php if (!empty($page['banner'])): ?> 
			<div class="l-banner clearfix">
				<div class="l-container l-container-fullwidth">	
				
					<?php print render($page['banner']) ?>
					
				</div><!-- end .l-container -->	
			</div><!-- end .l-banner -->
			<?php endif; ?>

			<?php if ($logo): ?>
			<div class="l-container">
			
			<div class="l-branding clearfix">
					
		        
		          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
		       
				
			</div>					
 			</div><!-- end .l-container -->	
 			<?php endif; ?>
	

	</header> <!-- end .l-header-wrap -->


	<?php if (!empty($page['prefix_first']) || !empty($page['prefix_second']) || !empty($page['prefix_third'])): ?>
	<div class="l-prefix-wrap wrapper">
			<div class="l-container">		
				<div class="l-prefix">
					<div class="l-prefix-first clearfix">
							<?php if (!empty($page['prefix_first'])): ?>
							<?php print render($page['prefix_first']); ?>
							<?php endif; ?>
					</div><!-- end .l-prefix-first -->
					<div class="l-prefix-second clearfix">
							<?php if (!empty($page['prefix_second'])): ?>
							<?php print render($page['prefix_second']); ?>
							<?php endif; ?>
					</div><!-- end .l-prefix-second -->
					<div class="l-prefix-third clearfix">
							<?php if (!empty($page['prefix_third'])): ?>
							<?php print render($page['prefix_third']); ?>
							<?php endif; ?>
					</div><!-- end .l-prefix-third -->
				</div><!-- end .l-footer -->
			</div><!-- end .l-container -->
	</div><!-- end .l-footer-wrap -->
	<?php endif; ?>
		
	<div class="l-main-wrap wrapper">
		<div class="l-container">

			<!-- .l-content-wrap wraps the content header & 2 content columns. -->
			<div class="l-content-wrap">

				<!-- Content Header -->
				<?php if (!empty($page['content_header']) || !empty($page['content'])): ?>
				<div class="l-content-header">

					<!-- L-TITLEBOX ============== -->
					<!-- If content in titlebox render it, otherwise render page title -->
					<?php if (!empty($page['titlebox'])): ?>
					<?php print render($page['titlebox']); ?>
					<?php elseif ($title  && !($is_front)): ?>
						<h1 class="page-title default-page-title">
							<?php print $title; ?>
						</h1>
					<?php endif; ?>
						
					<?php print render($page['content_header']); ?>

					<?php print render($page['content']); ?>

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

				<!-- Wrap content-first & -second to allow content-header to span both. -->
				<div class="l-content-inner-wrap">


					<?php if (!empty($page['content_first'])): ?>
						<!-- Content  -->
						<div class="l-content-first <?php if (empty($page['content_second'])) : ?> l-span-2col <?php endif; ?>clearfix">			
							<?php print render($page['content_first']); ?>			
						</div><!-- end .l-content-first -->
					<?php endif; ?>


					<?php if (!empty($page['content_second'])): ?>
						<!-- Content Second -->
						<div class="l-content-second clearfix  <?php if (empty($page['content'])) : ?> l-span-2col <?php endif; ?>">
							<?php print render($page['content_second']); ?>			
						</div><!-- end .l-content-second -->
					<?php endif; ?>

				</div> <!-- end .l-content-inner-wrap --> 

			</div>
			<!-- end .l-content-wrap --> 

			<!-- Render sidebar outside of content wrap. -->
			<div class="l-sidebar-first">
			
				<?php print render($page['sidebar_first']); ?>
			
			</div><!-- end .l-sidebar-first -->

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