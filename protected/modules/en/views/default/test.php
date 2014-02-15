<?php
/* @var $this DefaultController */

?>

<p>




<div class="input-append">
    <?php $this->widget(
        'yiiwheels.widgets.daterangepicker.WhDateRangePicker',
        array(
            'name' => 'daterangepickertest',
            'htmlOptions' => array(
                'placeholder' => 'Select date'
            )
        )
    );
    ?>
    <?php echo TbHtml::button('Select', array('color' => TbHtml::BUTTON_COLOR_WARNING)); ?>
    </div>
<br>


</p>





<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>