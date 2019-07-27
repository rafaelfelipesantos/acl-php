<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/vendor/autoload.php';

use App\Models\Root;
use App\Models\Editor;
use App\Models\Category;
use App\Models\ACLCategory;

$rafael = new Root('Rafael');
$felipe = new Editor('Felipe');
$category = new Category('php');

try {
    $ACLCategory = new ACLCategory($rafael);
    // $ACLCategory = new ACLCategory($felipe);
    
    $ACLCategory->store($category);
    $ACLCategory->find($category);
    $ACLCategory->findAll($category);
    $ACLCategory->update($category);
    $ACLCategory->destroy($category);
} catch (\Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
