<style>
.syga-block {
  padding-bottom: 5px;
}
.syga-block label {
  font-weight: bold;
}
.syga-block input {
  width: 60px;
}
.syga-block input[type="text"] {
  width: auto;
}
.syga-block span {
  color: #999;
  font-size: 0.9em;
}
</style>
<div class="syga-block">
	<label for="<?php echo $this->get_field_id('username'); ?>">GitHub username</label>
	<input type="text" placeholder="octocat"
			name="<?php echo $this->get_field_name('username'); ?>"
			id="<?php echo $this->get_field_id('username'); ?>"
			value="<?php echo $username; ?>" /><br />
	<span>https://github.com/<em>{username}</em></span>
</div>
<div class="syga-block">
	<label for="<?php echo $this->get_field_id('width'); ?>">Width</label>
	<input type="number" min="100"
			name="<?php echo $this->get_field_name('width'); ?>"
			id="<?php echo $this->get_field_id('width'); ?>"
			value="<?php echo $width; ?>" />px<br />
	<span>More than 100px</span>
</div>
<div class="syga-block">
	<label for="<?php echo $this->get_field_id('height'); ?>">Height</label>
	<input type="number" min="80"
			name="<?php echo $this->get_field_name('height'); ?>"
			id="<?php echo $this->get_field_id('height'); ?>"
			value="<?php echo $height; ?>" />px<br />
	<span>More than 80px</span>
</div>
<div class="syga-block">
	<label for="<?php echo $this->get_field_id('margin_bottom'); ?>">Margin bottom</label>
	<input type="number" min="0"
			name="<?php echo $this->get_field_name('margin_bottom'); ?>"
			id="<?php echo $this->get_field_id('margin_bottom'); ?>"
			value="<?php echo $margin_bottom; ?>" />px
</div>
