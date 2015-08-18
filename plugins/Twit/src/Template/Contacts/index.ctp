<?php echo $this->Form->create('filename', array('enctype' => 'multipart/form-data'));?>
    <fieldset>
    <?php
        echo $this->Form->file('Document.filename');
    ?>
    </fieldset>
    <?= $this->Form->submit('Submit') ?>
    <?= $this->Form->end() ?>