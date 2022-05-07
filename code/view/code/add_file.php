{include file='public/head' /}
<div class="row" style="height: 50px"></div>
<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 tuchu">
                <h1>添加白盒项目</h1>
                <form method="post" action="<?php echo url('code/add_file')?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">项目名称(项目名称和压缩包目录名称必须一致)</label>
                        <input type="text" name="name" class="form-control" placeholder="请输入项目名称" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">项目文件压缩包zip格式(小于100M)</label>
                        <input type="file" class="form-control form-control" name="file" accept=".zip" required/>
                    </div>
                    <div class="row" style="height: 10px"></div>
                    <a href="<?php echo url('code/index')?>" class="btn btn-outline-info">返回</a>
                    <button type="submit" class="btn btn-outline-success">提交</button>
                </form>
            </div>
            <div class="col-md-3"></div>
</div>
<div class="row" style="height: 50px"></div>
{include file='public/footer' /}