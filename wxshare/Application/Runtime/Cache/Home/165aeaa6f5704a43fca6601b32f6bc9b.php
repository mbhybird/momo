<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection">
    <title>错误提示</title>
    <style type="text/css">
        *{margin: 0;padding: 0;font-family: Helvetica;}
        .title2{color: #526165;font-size: 1.0em;text-align: center;margin-top: 4%;}
        img{width: 18%;margin: 30% 42% 9%;}
        p{font-size: 0.9em;color: #B4C1C7;text-align: center;line-height: 150%}
        .alink{color:#00D8C9;text-decoration:underline; }
    </style>
</head>
<body>
<img src="/wxshare/Public/share/images/error.jpg">
<div class="title2"><p><?php echo ($reason); ?><br></p></div>
</body>
</html>