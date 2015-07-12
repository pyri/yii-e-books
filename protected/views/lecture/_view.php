<?php
/* @var $this LectureController */
/* @var $data Lecture */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('selfquestions')); ?>:</b>
	<?php echo CHtml::encode($data->selfquestions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('example')); ?>:</b>
	<?php echo CHtml::encode($data->example); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task')); ?>:</b>
	<?php echo CHtml::encode($data->task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::encode($data->course_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>