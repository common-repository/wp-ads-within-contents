<style type="text/css">
a.company{
	text-decoration: none;
	font: 600 16px sens-sarif, arial, verdana;
	color: #ff2f2f;
}
select{
	padding: 3px;
	min-width: 70px;
}
input,
textarea{
	outline: none;
}
.wp-social-box{
	float: left;
	width: 550px;
	background-color: whiteSmoke;
	background-image: -ms-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -moz-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -o-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#F9F9F9),to(whiteSmoke));
	background-image: -webkit-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: linear-gradient(top,#F9F9F9,whiteSmoke);
	border-color: #DFDFDF;
	-moz-box-shadow: inset 0 1px 0 #fff;
	-webkit-box-shadow: inset 0 1px 0 white;
	box-shadow: inset 0 1px 0 white;
	-webkit-border-radius: 3px;
	webkit-border-radius: 3px;
	border-radius: 3px;
	border-width: 1px;
	border-style: solid;
	position: relative;
	margin-bottom: 20px;
	padding: 0;
	border-width: 1px;
	border-style: solid;
	line-height: 1;
	margin-left: 10px;
}
.wp-social-box h3 {
	font-size: 15px;
	font-weight: normal;
	padding: 7px 10px;
	margin: 0;
	line-height: 1;
	font-family: Georgia,"Times New Roman","Bitstream Charter",Times,serif;
	cursor: move;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	color: #464646;
	border-bottom-color: #DFDFDF;
	text-shadow: white 0 1px 0;
	-moz-box-shadow: 0 1px 0 #fff;
	-webkit-box-shadow: 0 1px 0 white;
	box-shadow: 0 1px 0 white;
	background-color: #F1F1F1;
	background-image: -ms-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -moz-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -o-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#F9F9F9),to(#ECECEC));
	background-image: -webkit-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: linear-gradient(top,#F9F9F9,#ECECEC);
	margin-top: 1px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	cursor: move;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}
</style>
<script>
 jQuery(function($){
	
 });
</script>
<div class="wrap" style="margin-top: 30px;margin-left: 10px;max-width:800px !important;">
<div style="width: 570px;float:left;">
<form action="<?php echo $action_url ?>" method="post">
		<input type="hidden" name="submitted" value="1" />
		<?php wp_nonce_field('wp-ads-within-contents-by-sharp-coders'); ?>
	
<div class="wp-social-box">
	<h3>ShortCode Setting</h3>
		<table class="form-table">
			<tbody>
			<tr valign="top">
					<th scope="row" colspan="2" style="width: 100px;text-align:center;">Use ShortCode <strong>[AdsWithin]</strong> to Place Ads within contents</th>
				</tr>
			<tr valign="top">
					<th scope="row" style="width: 100px;">CSS Code</th>
					<td>
						<fieldset>
							<legend class="hidden">CSS Code</legend>
							<label for="shortcode_css"><textarea id="shortcode_css" placeholder="float: left;" name="shortcode_css" style="width: 400px;height: 140px;"><?php echo $settings['shortcode_css']!=""? stripslashes($settings['shortcode_css']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Your Ads Code</th>
					<td>
						<fieldset>
							<legend class="hidden">Your Ads Code</legend>
							<label for="shortcode_code"><textarea id="shortcode_code" name="shortcode_code" placeholder="Your Adsense Code Here" style="width: 400px;height: 140px;"><?php echo $settings['shortcode_code']!=""? stripslashes($settings['shortcode_code']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- End Second Block -->
	
<div class="wp-social-box">
	<h3>Block One Setting</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Enable</th>
					<td>
						<fieldset>
							<legend class="hidden">Enable</legend>
							<label for="feedurl"><input type="checkbox" name="block_one" value="block_one" <?php echo $settings['block_one']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Position</th>
					<td>
						<fieldset>
							<legend class="hidden">Position</legend>
							<label for="block_one_position">
								<select name="block_one_position" id="block_one_position">
									<option value="top" <?php echo $settings['block_one_position']=="top"? 'selected="selected"': '' ; ?>>Top</option>
									<option value="bottom" <?php echo $settings['block_one_position']=="bottom"? 'selected="selected"': '' ; ?>>Bottom</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">CSS Code</th>
					<td>
						<fieldset>
							<legend class="hidden">CSS Code</legend>
							<label for="block_one_css"><textarea id="block_one_css" name="block_one_css" placeholder="float: left;" style="width: 400px;height: 140px;"><?php echo $settings['block_one_css']!=""? stripslashes($settings['block_one_css']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Your Ads Code</th>
					<td>
						<fieldset>
							<legend class="hidden">Your Ads Code</legend>
							<label for="block_one_code"><textarea id="block_one_code" name="block_one_code" placeholder="Your Adsense Code Here"  style="width: 400px;height: 140px;"><?php echo $settings['block_one_code']!=""? stripslashes($settings['block_one_code']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- End Block -->
	
<div class="wp-social-box">
	<h3>Block Two Setting</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Enable</th>
					<td>
						<fieldset>
							<legend class="hidden">Enable</legend>
							<label for="block_two"><input type="checkbox" name="block_two" value="block_two" <?php echo $settings['block_two']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Position</th>
					<td>
						<fieldset>
							<legend class="hidden">Position</legend>
							<label for="block_two_position">
								<select name="block_two_position" id="block_two_position">
									<option value="top" <?php echo $settings['block_two_position']=="top"? 'selected="selected"': '' ; ?>>Top</option>
									<option value="bottom" <?php echo $settings['block_two_position']=="bottom"? 'selected="selected"': '' ; ?>>Bottom</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">CSS Code</th>
					<td>
						<fieldset>
							<legend class="hidden">CSS Code</legend>
							<label for="block_two_css"><textarea id="block_two_css" name="block_two_css" placeholder="background: #cccccc;" style="width: 400px;height: 140px;"><?php echo $settings['block_two_css']!=""? stripslashes($settings['block_two_css']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Your Ads Code</th>
					<td>
						<fieldset>
							<legend class="hidden">Your Ads Code</legend>
							<label for="block_two_code"><textarea id="block_two_code" name="block_two_code" placeholder="Your Adsense Code Here" style="width: 400px;height: 140px;"><?php echo $settings['block_two_code']!=""? stripslashes($settings['block_two_code']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- End Second Block -->

	
	
	<div class="submit" style="float: left; display: block; width: 100%;"><input type="submit" name="Submit" value=" Update " style="min-width: 100px;min-height: 30px;font-size: 14px;" /></div>
		</form>
	<div class="submit" style="float: left; display: block; width: 100%;">
		
		<br /><br />Friend's Blog <a href="http://apnagoogle.com" target="_blank">http://apnagoogle.com</a></p>
	</div>
</div>
<div style="float:right;">
<!-- Start Plugin Information -->
	<div class="wp-social-box" style="width: 200px;">
	<h3>Plugin Information</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
						This Plugin is Developed By <a href="http://sharp-coders.com" target="_blank" class="company">Sharp Coders</a>.<br />
						Visit <a href="http://sharp-coders.com/plugins/wp-plugins/" target="_blank">sharp-coders.com</a> for more plugins.<br />
						<strong>Support: </strong> <a href="http://sharp-coders.com/plugins/wp-plugins/wp-ads-within-contents-wordpress-plugin" target="_blank">Open Support Page</a>
						<br /><br />
						<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fsharpcoders&amp;send=false&amp;layout=standard&amp;width=180&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:35px;" allowTransparency="true"></iframe>
						<br />
						<strong>Twitter: </strong>&nbsp;&nbsp;<a href="http://twitter.com/sharpcoderz" target="_blank">@SharpCoderz</a>
						
						<hr style="max-width: 180px;" />
						<strong>Other Plugins</strong><br />
						<a href="http://sharp-coders.com/plugins/wp-plugins/wp-social-share" target="_blank">WP Social Share</a>
						<br />
						<a href="http://sharp-coders.com/plugins/wp-plugins/wp-subscriber_form" target="_blank">WP Subscriber Form</a>
						<hr style="max-width: 180px;" />
						<strong>Advertise at our Blog</strong><br />
						<a href="http://www.publicityclerks.com/user/details?website=333" target="_blank">Click Here to Advertise at our Blog</a>
						<hr style="max-width: 180px;" />
						<a href="http://www.seoclerks.com/linkin/20014" target="_blank">Apply SEO - SeoClerks</a>
						<br /><br />
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	<!-- End Information -->
</div>
</div>

