<?php
/**
 * The edit view file of customer module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Gang Liu <liugang@cnezsoft.com>
 * @package     customer
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../../sys/common/view/header.lite.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<div class='xuanxuan-card'>
  <form method='post' id='ajaxForm' class='form-condensed'>
    <div class='panel'>
      <div class='panel-body'>
        <table class='table table-form table-data'>
          <tr>
            <th class='w-70px'><?php echo $lang->customer->name;?></th>
            <td>
              <div class='input-group'>
                <?php echo html::input('name', $customer->name, "class='form-control'");?>
                <div class='input-group-addon'>
                  <label class='checkbox-inline'><input type='checkbox' id='public' name='public' value='1' <?php if($customer->public) echo 'checked';?>> <?php echo $lang->customer->public;?></label>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->intension;?></th>
            <td><?php echo html::textarea('intension', $customer->intension, "class='form-control' rows=2");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->desc;?></th>
            <td><?php echo html::textarea('desc', $customer->desc, "rows='2' class='form-control'");?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class='panel'>
      <div class='panel-heading'><strong><i class="icon-list-info"></i> <?php echo $lang->customer->basicInfo;?></strong></div>
      <div class='panel-body'>
        <table class='table table-info'>
          <tr>
            <th class='w-70px'><?php echo $lang->customer->relation;?></th>
            <td><?php echo html::select('relation', $lang->customer->relationList, $customer->relation, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->source;?></th>
            <td><?php echo html::select('source', $lang->customer->sourceList, $customer->source, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->sourceNote;?></th>
            <td><?php echo html::input('sourceNote', $customer->sourceNote, "class='form-control'");?></td>
          </tr>
         <tr>
           <th><?php echo $lang->customer->depositor;?></th>
           <td><?php echo html::input('depositor', $customer->depositor, "class='form-control'");?></td>
         </tr>
          <tr>
            <th><?php echo $lang->customer->level;?></th>
            <td><?php echo html::select('level', $levelList, $customer->level, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->status;?></th>
            <td><?php echo html::select("status", $lang->customer->statusList, $customer->status, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->size;?></th>
            <td><?php echo html::select('size', $sizeList, $customer->size, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->type;?></th>
            <td><?php echo html::select("type", $lang->customer->typeList, $customer->type, "class='form-control'");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->industry;?></th>
            <td><?php echo html::select('industry', $industryList, $customer->industry, "class='form-control chosen'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->area;?></th>
            <td><?php echo html::select('area', $areaList,  $customer->area, "class='form-control chosen'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->weibo;?></th>
            <td><?php echo html::input('weibo', $customer->weibo ? $customer->weibo : 'http://weibo.com/', "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->weixin;?></th>
            <td><?php echo html::input('weixin', $customer->weixin, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->customer->site;?></th>
            <td><?php echo html::input('site', $customer->site ? $customer->site : 'http://', "class='form-control'");?></td><td></td>
          </tr>
        </table>
      </div>
    </div>
    <?php echo $this->fetch('action', 'history', "objectType=customer&objectID={$customer->id}")?>
    <div class='page-actions'><?php echo html::submitButton() . ' ' . html::backButton();?></div>
  </form>
</div>
<?php include '../../common/view/footer.html.php';?>
