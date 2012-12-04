<div>
	<label for="<?php echo $this->get_field_id('username'); ?>">GitHub username</label>
	<input type="text" placeholder="octocat"
			name="<?php echo $this->get_field_name('username'); ?>"
			id="<?php echo $this->get_field_id('username'); ?>"
			value="<?php echo $username; ?>" />
	<span>https://github.com/<em>{username}</em></span>
</div>
<div>
	<label for="<?php echo $this->get_field_id('width'); ?>">Width</label>
	<input type="number" min="100"
			name="<?php echo $this->get_field_name('width'); ?>"
			id="<?php echo $this->get_field_id('width'); ?>"
			value="<?php echo $width; ?>" />
	<span>The unit is px. More than 100px</span>
</div>
<div>
	<label for="<?php echo $this->get_field_id('height'); ?>">Height</label>
	<input type="number" min="80"
			name="<?php echo $this->get_field_name('height'); ?>"
			id="<?php echo $this->get_field_id('height'); ?>"
			value="<?php echo $height; ?>" />
	<span>The unit is px. More than 80px</span>
</div>
