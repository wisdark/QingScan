{include file='public/head' /}

<?php
$dengjiArr = ['Low', 'Medium', 'High', 'Critical'];
?>

<?php
$searchArr = [
    'action' => $_SERVER['REQUEST_URI'],
    'method' => 'get',
    'inputs' => [
        ['type' => 'text', 'name' => 'search', 'placeholder' => "搜索的内容"],
        ['type' => 'select', 'name' => 'Folder', 'options' => $dengjiArr, 'frist_option' => '危险等级'],
        ['type' => 'select', 'name' => 'Category', 'options' => $CategoryList, 'frist_option' => '漏洞类别'],
        ['type' => 'select', 'name' => 'Primary_filename', 'options' => $fileList, 'frist_option' => 'url筛选'],
        ['type' => 'select', 'name' => 'check_status', 'options' => $check_status_list, 'frist_option' => '审计状态','frist_option_velue'=>-1],
    ]];
?>
{include file='public/search' /}

<div class="row tuchu">
    <div class="col-md-12 ">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>severity</th>
                <th>URL</th>
                <th>发现时间</th>
                <th>状态</th>
                <th style="width: 200px">操作</th>
            </tr>
            </thead>
            <?php foreach ($list as $value) { ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['vt_name'] ?></td>
                    <td><?php echo $value['affects_url'] ?></td>
                    <td><?php echo $value['create_time'] ?></td>
                    <td><select  class="changCheckStatus form-select" data-id="<?php echo $value['id'] ?>">
                            <option value="0" <?php echo $value['check_status'] == 0 ? 'selected' : ''; ?> >未审核</option>
                            <option value="1" <?php echo $value['check_status'] == 1 ? 'selected' : ''; ?> >有效漏洞</option>
                            <option value="2" <?php echo $value['check_status'] == 2 ? 'selected' : ''; ?> >无效漏洞</option>
                        </select></td>
                    <td>
                        <a href="<?php echo url('code_check/bug_detail',['id'=>$value['id']])?>"
                           class="btn btn-sm btn-outline-primary">查看漏洞</a>

                        <a href="<?php echo url('bug/awvs_del',['id'=>$value['id']])?>" class="btn btn-sm btn-outline-danger">删除</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<input type="hidden" id="to_examine_url" value="<?php echo url('to_examine/awvs')?>">

{include file='public/to_examine' /}
{include file='public/fenye' /}
{include file='public/footer' /}