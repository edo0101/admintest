<?php
/* @var $this DefaultController */

?>

<p>




<div class="well" style="max-width: 200px; padding: 8px 0;">
    <?php echo TbHtml::navList(array(
        array('label' => 'Tools'),
        TbHtml::menuDivider(),
        array('label' => 'Home', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Library', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Applications', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Leads'),
        array('label' => 'Profile', 'url' => '#', 'active' => true),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )); ?>
</div>

<?php echo TbHtml::icon(TbHtml::ICON_STAR); ?>


<ul class="nav nav-pills nav-stacked" style="max-width: 200px;">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <?php echo TbHtml::menuDivider(); ?>
    <li><a href="#">Messages</a></li>
</ul>


<?php
$this->widget('yiiwheels.widgets.google.WhVisualizationChart', array(
    'visualization' => 'PieChart',
    'data' => array(
        array('Task', 'Hours per Day'),
        array('S1', 11),
        array('S2', 2),
        array('S3', 2),
        array('S4', 2),
        array('S', 7),
        array('S6', 7),
        array('S7', 7),
        array('S8', 7),
        array('S9', 7),
    ),
    'options' => array(
        'title' => 'Stats',
        'width'=>400,
        'height'=>400
    )
));
?>



<?php
$this->widget('yiiwheels.widgets.sparklines.WhSparklines', array(
    'data' => array(
        10,8,5,7,4,4,1, 10,8,5,7,4,4,1
    ),
    'pluginOptions' => array(
        'type' => 'bar', 'barColor' => 'green', 'barWidth'=>15, 'height'=>75, 'barSpacing'=>13
    )
));
?>
S1&nbsp; S2&nbsp;&nbsp;&nbsp;S3&nbsp;&nbsp;&nbsp;S4&nbsp;&nbsp;&nbsp;S5&nbsp;S6&nbsp;S7



</p>





<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>