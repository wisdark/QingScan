{include file='public/head' /}
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 tuchu">
                <h1>添加扫描任务</h1>
                <form method="post" action="/index.php?s=host/_add">
                    <div class="mb-3">
                        <label class="form-label">所属应用</label>
                        <select name="app_id" class="form-select">
                            <option value="1">111</option>
                            <option value="2">222</option>
                            <option value="3">333</option>
                            <option value="4">444</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">URL地址</label>
                        <input type="url" name="url" class="form-control" placeholder="URL">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">启用爬虫</label>
                        <select name="is_crawl" class="form-select">
                            <option value="1">启用</option>
                            <option value="0">不启用</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">自定义header</label>
                        <textarea class="form-control" rows="3" placeholder="填写header消息"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">自定义Cookie</label>
                        <textarea class="form-control" rows="3" placeholder="自定义cookie"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">提交</button>
                    <a href="/index.php?s=host/index" class="btn btn-outline-info">返回</a>
                </form>
            </div>
            <div class="col-md-3"></div>
</div>
{include file='public/footer' /}