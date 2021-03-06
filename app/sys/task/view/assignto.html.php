<?php
/**
 * The assignTo view file of task module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     task
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../common/view/header.modal.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<form method='post' id='assignToForm' action='<?php echo $this->createLink('task', 'assignTo', "taskID=$taskID")?>'>
  <table class='table table-form'>
    <tr>
      <th class='w-60px'><?php echo empty($task->team) ? $lang->task->assignedTo : $lang->task->transmitTo;?></th>
      <td class='w-p45'><?php echo html::select('assignedTo', $users, $task->assignedTo, "class='form-control chosen'");?></td>
      <td></td>
    </tr>
    <?php if(empty($task->team)):?>
    <tr>
      <th><?php echo $lang->task->left;?></th>
      <td><?php echo html::input('left', $task->left, "class='form-control'");?></td>
      <td></td>
    </tr>
    <?php else:?>
    <tr>
      <th><?php echo $lang->task->myConsumption;?></th>
      <td><?php echo html::input('consumed', '', "class='form-control' placeholder='{$lang->task->hour}'");?></td>
      <td></td>
    </tr>
    <?php endif;?>
    <tr>
      <th><?php echo $lang->comment?></th>
      <td colspan='2'><?php echo html::textarea('comment');?></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo html::submitButton();?></td>
      <td></td>
    </tr>
  </table>
</form>
<?php include '../../common/view/footer.modal.html.php';?>
