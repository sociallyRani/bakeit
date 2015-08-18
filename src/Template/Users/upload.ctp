<?php echo $this->Form->create('photo', array('enctype' => 'multipart/form-data'));?>
    <fieldset>
    <?php
        echo $this->Form->file('Document.submittedfile');
    ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>