<?php
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2017/2/15
 * Time: 下午4:05
 */
error_reporting(1);

$target = dirname(__DIR__); // 生产环境web目录

$token = '您在coding填写的hook令牌';
$wwwUser = 'word';
$wwwGroup = 'web';

$json = json_decode(file_get_contents('php://input'), true);
if (empty($json['token']) || $json['token'] !== $token) {
    exit('error request');
}
$repo = $json['repository']['name'];
$dir = __DIR__ . '/repos/' . $repo;
$cmds = array(
    "cd $dir && git pull",
    "rm -rf $target/* && cp -r $dir/* $target/",
    "chown -R {$wwwUser}:{$wwwGroup} $target/",
);
foreach ($cmds as $cmd) {
    shell_exec($cmd);
}
