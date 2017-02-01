<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php if ($page['page_top']): ?><div id="highlighted"><?php print render($page['page_top']); ?></div><?php endif; ?>	
 <div class="navbar" id="index">
            <div class="navbar-inner">
                <div class="container">
                    <a href="<?php print $front_page; ?>" class="brand">									
                        <?php if ($logo): ?>
              <img src="<?php print $logo ?>"/>
            <?php endif; ?>		
<!-- This is website logo -->			
			
<?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>			
			
                        <!-- This is name and slogan -->
                    </a>
<div class="secondary_user">    
<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu)); ?>    
</div>                   
 <!-- Main navigation -->  
<div class="navigacija">    					  
<?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>		 
</div><!-- End main navigation -->					
            </div>
          </div>
        </div>

<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>					
	 
	 <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>
	  
<!--SREDINA glavni content -->
 <div class="section primary-section">
            <div class="container">
                <div class="title">
                    <h1><?php print $title ?></h1>
					
                </div>

				
				
				
	<?php if ($page['progress_bars']) : ?>
  <div class="row-fluid">
                    <div class="span6"> 
                       <?php print render($page['progress_bars']); ?> 
					   
                    </div>
                
                    <div class="span5">
                        <h4>
					<p style="color:#fff!important;"><?php print render($page['content']);?></p>
					</h4>
                    </div>
                </div>


		
				   <?php elseif ($page['about_block_1'] || $page['about_block_2'] || $page['about_block_3']): ?> 
					 <div class="container">
					<h4><?php print render($page['content']);  ?></h4>
					</div>
					<div class="row-fluid team">
					
					<?php if ($page['about_block_1']): ?>
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
	<!-- ZA PROMENU SLIKE NA PRVOM BOKSU-->					
						<?php 
						$fid = theme_get_setting('about_block_1');						
						if ($fid){							
							$image_url1 = file_create_url(file_load($fid)->uri); 
						}else{
							$image_url1=($base_path.'/'.drupal_get_path('theme', 'webcube')) . "/images/4.jpg";
						}
							?>
		<!-- KRAJ PROMENE SLIKE NA PRVOM BOKSU-->						
                            <img src="<?php echo $image_url1; ?>" alt="Website Development" style="height:250px;">
                            
							<p><h3 style="color:#fff";><?php print render($page['about_block_1']['title']); ?></h3></p><p>&nbsp;</p>

                            <div class="mask">
                                <h2><?php print render($page['about_block_1']['title']); ?></h2>
                                <p><strong><?php print render($page['about_block_1']); ?></strong></p>
                            </div>
                        </div>
                    </div>
					<?php endif; ?>		
				
					<?php if ($page['about_block_2']): ?>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
	
	
	<!-- ZA PROMENU SLIKE NA DRUGOM BOKSU-->					
						<?php 
						$fid = theme_get_setting('about_block_2');						
						if ($fid){							
							$image_url2 = file_create_url(file_load($fid)->uri); 
						}else{
							$image_url2=($base_path.'/'.drupal_get_path('theme', 'webcube')) . "/images/2.jpg";
						}
							?>
		<!-- KRAJ PROMENE SLIKE NA DRUGOM BOKSU-->		
	
							
                             <img src="<?php echo $image_url2; ?>" alt="Website Design" style="height:250px;">
                            
							<p><h3 style="color:#fff";><?php print render($page['about_block_2']['title']); ?></h3></p><p>&nbsp;</p>

                            <div class="mask">
                                <h2><?php print render($page['about_block_2']['title']); ?></h2>
                                <p><strong><?php print render($page['about_block_2']); ?></strong></p>
                            </div>
                        </div>
                    </div>
					<?php endif; ?>
				
					<?php if ($page['about_block_3']): ?>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">

			<!-- ZA PROMENU SLIKE NA PRVOM BOKSU-->					
						<?php 
						$fid = theme_get_setting('about_block_3');						
						if ($fid){							
							$image_url3 = file_create_url(file_load($fid)->uri); 
						}else{
							$image_url3=($base_path.'/'.drupal_get_path('theme', 'webcube')) . "/images/3.jpg";
						}
							?>
		<!-- KRAJ PROMENE SLIKE NA PRVOM BOKSU-->					
						
						
                            <img src="<?php echo $image_url3;  ?>" alt="Database expert" style="height:250px;">
                            
							<p><h3 style="color:#fff";><?php print render($page['about_block_3']['title']); ?></h3></p><p>&nbsp;</p>

                            <div class="mask">
                                <h2><?php print render($page['about_block_3']['title']); ?></h2>
                                <p><strong><?php print render($page['about_block_3']); ?></strong></p>
                            </div>
                        </div>
                    </div>
					<?php endif; ?>				
				
				</div>
			





	
				
		<?php else: ?>		

	<?php print render($page['content']);?>		
		<?php endif; ?>	
<p>&nbsp;</p>
</div>
</div>

<!--KRAJ SREDINA glavni content -->	  

<!--footer -->
	<div class="footer">
	<?php if (!empty($page['footer'])): ?>  
    <?php print render($page['footer']); ?>
<?php endif; ?>
</div>
<?php if ($page['page_bottom']): ?><div id="highlighted"><?php print render($page['page_bottom']); ?></div><?php endif; ?>	