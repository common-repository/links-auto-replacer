<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
	<?php include plugin_dir_path(__FILE__).'menu.php'; ?>

		<div id="lar_about">
			
			<!-- <img class="plugin_img" src="http://plugins.svn.wordpress.org/links-auto-replacer/assets/banner-1544x500.png"> -->
			
			
			<div id="details">
			<div id="author_details">


		<table class="wp-list-table widefat">
			<thead>
				<tr>
					<th><?php _e('Autor Info','links-auto-replacer'); ?></th>
				</tr>
			</thead>	
			<tr>
				<td>

					<img class="wes" src="<?php echo LAR_URL . 'admin/images/wpruby.jpg' ?>" />
					<ul>
						<li><strong>WPRuby</strong> </li>
						<li><strong>Website:</strong><a target="_blank" href="https://wpruby.com">wpruby.com</a></li>
						<li><strong>Social: 
											<a target="_blank" href="https://www.facebook.com/WPRuby/"><img class="social_img" src="<?php echo LAR_URL.'admin/images/social/facebook-24.png'; ?>"></a>
											<a target="_blank" href="https://twitter.com/wprubyplugins"><img class="social_img" src="<?php echo LAR_URL.'admin/images/social/twitter-24.png'; ?>"></a>
											<a target="_blank" href="https://instagram.com/wpruby_hq"><img class="social_img" src="<?php echo LAR_URL.'admin/images/social/instagram-24.png'; ?>"></a>

						</strong></li>
					</ul>
				</td>
			</tr>
		</table>



					
					
					
					
					
					
				</div>
				<div id="plugin_details">



					<table class="wp-list-table widefat">
						<thead>
							<tr>
								<th><?php _e('Plugin Info','links-auto-replacer'); ?></th>
							</tr>
						</thead>	
						<tr>
							<td>

								<img class="wes" src="http://plugins.svn.wordpress.org/links-auto-replacer/assets/icon-128x128.png" />
								<ul>
									<li><?php echo apply_filters('lar_plugin_name','Links Auto Replacer'); ?><span></span></li>
									<li><strong><?php _e('Version','links-auto-replacer'); ?>:</strong> <?php echo LAR_VERSION; ?></li>
									<li><a href="https://wpruby.com/plugin/affiliate-butler-pro/">Website</a> | <a href="https://wpruby.com/knowledgebase_category/affiliate-butler-pro/">Documentation</a> | <a href="<?php echo admin_url('admin.php?page=lar_main_settings'); ?>">Settings</a></li>
									
								</ul>
							</td>
						</tr>
					</table>
					
					
					
				</div>

				<div class="lar_clear"></div>
				<br/>
				<div id="lar_support">
					
					<table class="wp-list-table widefat">
						<thead>
							<tr>
								<th><?php _e('Help and Support','links-auto-replacer'); ?></th>
							</tr>
						</thead>	
						<tr>
							<td>
								<p>
								If you encountered any problem or if you have a feature in mind that you want me to implement in the next release. Please do not hesitate <a target="_blank" href="https://wpruby.com/submit-ticket/">submitting a support ticket</a>.
								</p>
							</td>
						</tr>
					</table>

				</div>


			</div>


		</div>

</div> 