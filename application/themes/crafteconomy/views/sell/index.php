Sell form. Are you selling for yourself or someone else?

<?php echo form_open(); ?>
  <input type="filepicker-dragdrop" name="image" data-fp-apikey="<?php print $this->config->item('filepicker_api_key'); ?>" data-fp-option-services="<?php print $this->config->item('filepicker_option_services'); ?>" />
<?php echo form_close(); ?>