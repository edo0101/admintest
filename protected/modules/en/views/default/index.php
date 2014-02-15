<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>

    <?php
    //echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_SEARCH);
//        echo TbHtml::searchQuery('search');
//        echo TbHtml::submitButton('Submit');
//        echo TbHtml::endForm();
    ?>





    <?php echo TbHtml::button('Danger', array('color' => TbHtml::BUTTON_COLOR_DANGER)); ?>

"ADMIN" This is the view content for <h3>en/default/index</h3> Module "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>












<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>