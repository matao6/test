<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>权限组编辑</title>
    <link rel="stylesheet" href="/Public/Admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Admin/css/component-min.css">
    <link rel="stylesheet" href="/Public/Admin/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/css/bootstrap-switch.min.css">    
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/groupaddhtml.css">
</head>

<body class="body-wrapper">
    <div class="header clearfix">
        <div class="h-left">
            <div class="logo">
                <a href="#">
                    <img src="/Public/Admin/image/logo.png" alt="侨品汇">
                </a>
            </div>
            <div class="text">
                <div class="title">侨品汇</div>
                <div class="des">海外购物平台</div>
            </div>
        </div>
        <div class="h-right clearfix">
            <ul class="nav-wrapper nav-wrapper-hook clearfix">
                <!-- <li class="right-nav right-nav-hook">
                    <a href="#">test</a>
                </li>    -->
            </ul>
            <div class="user-wrapper">
                <span class="name">test</span>
                <div class="message">
                    <a href="###" class="glyphicon glyphicon-envelope"></a>
                </div>
                <div class="account account-hook">
                    <a href="javascript:;" class="btn btn-primary user">
                        <i class="glyphicon glyphicon-user icon_right"></i>账户
                    </a>
                    <ul class="user-part user-part-hook hide">
                        <li class="exit">
                            <a href="">退出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content clearfix">
        <div class="slidebar slidebar-hook">
            <!-- <dl class="bar-wrapper">
                <dt class="list">
                    <i class="glyphicon glyphicon-home"></i>
                    <span>test</span>
                </dt>
                <dd class="list-child list-child-hook">
                    <a href="#">test-child--lalal</a>
                </dd>
            </dl>   -->
        </div>
        <div class="info">
            <h1 class="content-right-title">编辑权限组</h1>
            <form action="" id="form-hook">
                <div class="formitems">
                    <label for="" class="fi-name">
                        <span class="red">*</span>权限组名称：
                    </label>
                    <div class="form-controls">
                        <input type="text" class="input" name="name" value="<?php echo ($info["name"]); ?>">
                    </div>
                </div>
                <div class="formitems">
                    <label class="fi-name" for="">
                            <span class="red">*</span>状态：
                        </label>
                    <div class="form-controls" style="padding-top: 4px;">
                        <?php if($info["state"] == 1 ): ?><input type="checkbox" name="state" id="state-hook" value="1" checked />
                            <?php else: ?> <input type="checkbox" name="state" id="state-hook" value="0"/><?php endif; ?>
                    </div>
                </div>
                <div class="add_role_box">
                    <div class="add_role_list">
                        <div class="">
                             <input type="checkbox" class="head" id="navi-hook"><label for="navi-hook">以拥有权限</label>
                        </div>
                        <ul>
                            <?php if(is_array($Y)): foreach($Y as $key=>$val): ?><li class="menu_li">
                                    <input type="checkbox" class="" id="<?php echo ($val["id"]); ?>" name="pid"><label for="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></label>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="add_role_list">
                        <div class="">
                             <input type="checkbox" class="head" id="link-hook"><label for="link-hook">未拥有权限</label>
                        </div>
                        <ul>
                            <?php if(is_array($N)): foreach($N as $key=>$val): ?><li class="menu_li">
                                    <input type="checkbox" class="" id="<?php echo ($val["id"]); ?>" name="pid"><label for="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></label>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="formitems">
                    <div class="form-controls">
                        <input type="submit" class="btn btn-primary save-hook" name="" value="保存">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer"></div>

    <script type="text/javascript" src="/Public/Admin/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/messages_zh.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootbox.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/groupaddhtml.js"></script>
</body>

</html>