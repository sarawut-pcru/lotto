<?php
require_once '../models/Index_model.php';

$model = new Index_model();
$post = $_REQUEST;
$func = $post['function'];
if ($func == 'index') {
    $json_pay = $model->loaddata();
    echo $json_pay;
}
