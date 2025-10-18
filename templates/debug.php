<?php $this->layout('_template',['title' => $title]); ?>

<?php $this->start('css'); ?>
<!-- Conteudo css -->

<?php $this->end(); ?>

<h1>debug</h1>



<?php $this->start('js'); ?>

<script src="<?= url('templates/js/qrcode.js'); ?>"></script>

<?php $this->end(); ?>