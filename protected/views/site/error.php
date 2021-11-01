<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<script>alert('Error <?php echo $code; ?> | <?php echo CHtml::encode($message); ?>')</script>
<script>
setTimeout(function () {
   window.location.href= '?r=site/index';
},1000); 
</script>
<!--
<div class="error">
<?php echo CHtml::encode($message); ?>
</div>
-->