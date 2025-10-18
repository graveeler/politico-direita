<?php $this->layout('_template', ['title' => $title, 'header' => $header]); ?>

<?php $this->start('css'); ?>

<?php $this->end(); ?>

<?= $this->insert('sections/header', ['header' => $header]); ?>

<?= $this->insert('sections/services'); ?>

<?php $this->start('js'); ?>

<?php $this->end(); ?>  