<?php $this->layout('_template', ['title' => $title]); ?>

<?php $this->start('css'); ?>
<!-- Conteudo css -->

<?php $this->end(); ?>

<?= $this->insert('sections/header', ['header' => $header]); ?>

<?= $this->insert('sections/about-us'); ?>

<?= $this->insert('sections/team'); ?>

<?php $this->start('js'); ?>

<?php $this->end(); ?>