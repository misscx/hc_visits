<?php
defined('EMLOG_ROOT') || exit('access denied!');

function plugin_setting_view() {
    $plugin_storage = Storage::getInstance('hc_visits');
    $visits = $plugin_storage->getValue('visits');
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">访问量统计</h1>
    </div>
    <div class="card shadow mb-4 mt-2">
        <div class="card-body">
            <form method="post" id="tips_form" action="./plugin.php?plugin=hc_visits&action=setting">
                <div class="form">
                    <div class="form-group">
                        <label>访问量</label>
                        <input class="form-control" type="number" style="width: 200px;" name="visits" id="visits" required="" value="<?= $visits ?>">
                    </div>
                    <div><input type="submit" class="btn btn-success btn-sm mx-2" value="提交"></div>
                </div>
            </form>
        </div>
    </div>
    <script>
        setTimeout(hideActived, 3600);

        $("#menu_category_ext").addClass('active');

        $("#tips_form").submit(function (event) {
            event.preventDefault();
            submitForm("#tips_form");
        });
    </script>
<?php }

function plugin_setting() {
    $visits= Input::postIntVar('visits', 0);
    $plugin_storage = Storage::getInstance('hc_visits');
    $plugin_storage->setValue('visits', $visits , 'number');
    Output::ok();
}
