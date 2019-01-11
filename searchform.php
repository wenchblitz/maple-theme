<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="searchbox" size="15" />&nbsp;
   	<input type="submit" id="searchsubmit" name="searchsubmit" value="Submit" />

</div>
</form>
