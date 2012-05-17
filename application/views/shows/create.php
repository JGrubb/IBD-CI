<h2>Add a show</h2>

<?php echo validation_errors() ?>

<?php echo form_open('shows/create') ?>
  <p>
    <?php echo form_label('Date', 'date')?><br />
    <?php echo form_input('date')?>
  </p>
  <p>
    <?php echo form_label('Location', 'location')?><br />
    <?php echo form_input('location')?>
  </p>
  <p>
    <?php echo form_label('Description, setlist, etc.', 'description')?><br />
    <?php echo form_textarea('description')?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Submit')?>
  </p>

<?php echo form_close() ?>