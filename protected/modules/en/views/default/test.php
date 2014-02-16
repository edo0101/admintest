<?php
/* @var $this DefaultController */

?>

<p>




<div class="well" style="max-width: 200px; padding: 8px 0;">
    <?php echo TbHtml::navList(array(
        array('label' => 'Tools', 'icon'=>'icon-glass'),
        array('label' => 'Home', 'url' => '#', image),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Leads'),
        array('label' => 'Profile', 'url' => '#', 'active' => true),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )); ?>
</div>

<?php echo TbHtml::icon(TbHtml::ICON_GLASS); ?>


<ul class="nav nav-pills nav-stacked" style="max-width: 200px;">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Messages</a></li>
</ul>


</p>





<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>