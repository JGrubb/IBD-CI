<h2>Add a show</h2>

<?php echo validation_errors() ?>

<?php echo form_open('shows/create') ?>
  <?php echo form_hidden('updated_on', time())?>
  
  <?php echo form_label('Date', 'date')?>
  <?php echo form_input('date')?>
  
  <?php echo form_label('Location', 'location')?>
  <?php echo form_input('location')?>
  
  <?php echo form_label('Description, setlist, etc.', 'description')?>
  <?php echo form_textarea()?>
  
  <?php echo form_submit()?>

<?php echo form_close() ?>