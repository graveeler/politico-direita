<?php $this->layout('_template', ['title' => $title]) ?>

<?php $this->start('css'); ?>
<!-- Conteudo css -->

<?php $this->end(); ?>

<?= $this->insert('sections/hero1'); ?>

<?= $this->insert('sections/services'); ?>

<?= $this->insert('sections/counter-video'); ?>

<?= $this->insert('sections/blog'); ?>

<?= ""//$this->insert('sections/testimonial'); ?>

<?= $this->insert('sections/work-proccess'); ?>

<?= $this->insert('sections/why-choose-us'); ?>

<?= $this->insert('sections/client-brands2'); ?>

<?php $this->start('js'); ?>

<?php $this->end(); ?>