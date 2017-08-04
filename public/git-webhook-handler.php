<?php
/**
 * Created by PhpStorm.
 * User: yuxiangwang
 * Date: 17/8/3
 * Time: 上午9:13
 */
$path = "/usr/share/nginx/html/article/";
$requestBody = file_get_contents("php://input");
if (empty($requestBody)) {
    die('send failssss');
}
$content = json_decode($requestBody, true);
//若是主分支且提交数大于0
file_put_contents("git-webhook.txt", $content['ref'].'<>'.$content['total_commits_count'], FILE_APPEND);//追加写入
if ($content['ref']=='refs/heads/master') {
    file_put_contents("git-webhook.txt", "你妹到这了haha", FILE_APPEND);//追加写入
    $res = shell_exec("cd {$path} && git reset --hard origin/master && git clean -f && git pull 2>&1 && git checkout master");//以www用户运行
    $res_log = '-------------------------'.PHP_EOL;
    $res_log .= $content['user_name'] . ' 在' . date('Y-m-d H:i:s') . '向' . $content['repository']['name'] . '项目的' . $content['ref'] . '分支push了' . $content['total_commits_count'] . '个commit：' . PHP_EOL;
    $res_log .= $res.PHP_EOL;
    file_put_contents("git-webhook.txt", $res_log, FILE_APPEND);
    
}