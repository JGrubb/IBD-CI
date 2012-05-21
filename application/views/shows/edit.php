<h2>Edit <?php print $show['date']?></h2>

<?php echo validation_errors() ?>

<?php echo form_open() ?>
  <p>
    <?php echo form_label('Date', 'date')?><br />
    <?php echo form_input('date', $show['date'])?>
  </p>
  <p>
    <?php echo form_label('Location', 'location')?><br />
    <?php echo form_input('location', $show['location'])?>
  </p>
  <p>
    <?php echo form_label('Description, setlist, etc.', 'description')?><br />
    <?php echo form_textarea('description', $show['description'])?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Submit')?>
  </p>

<?php echo form_close() ?>