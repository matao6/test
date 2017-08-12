<?php
/**
 * 创蓝短信接口
 * 2017-07-20 Angus
 */
/**
 * 创蓝：短信接口(前台使用)
 * @param  String $mobile 手机号
 * @param  String $content 短信内容
 */
function sendClapiHome($mobile='', $msg=''){
    Vendor('ChuanglanSmsHelper.ChuanglanSmsApi');

    $clapi  = new ChuanglanSmsApi();
    $result = $clapi->sendSMS($mobile, $msg);
    $result = $clapi->execResult($result);
    $statusStr = array(
        '0' =>'发送成功',
        '101'=>'无此用户',
        '102'=>'密码错',
        '103'=>'提交过快',
        '104'=>'系统忙',
        '105'=>'敏感短信',
        '106'=>'消息长度错',
        '107'=>'错误的手机号码',
        '108'=>'手机号码个数错',
        '109'=>'无发送额度',
        '110'=>'不在发送时间内',
        '111'=>'超出该账户当月发送额度限制',
        '112'=>'无此产品',
        '113'=>'extno格式错',
        '115'=>'自动审核驳回',
        '116'=>'签名不合法，未带签名',
        '117'=>'IP地址认证错',
        '118'=>'用户没有相应的发送权限',
        '119'=>'用户已过期',
        '120'=>'内容不是白名单',
        '121'=>'必填参数。是否需要状态报告，取值true或false',
        '122'=>'5分钟内相同账号提交相同消息内容过多',
        '123'=>'发送类型错误(账号发送短信接口权限)',
        '124'=>'白模板匹配错误',
        '125'=>'驳回模板匹配错误',
        '128'=>'内容解码失败'
    );
    if(isset($result[1])){
        return true;
    }else{
        return false;
    }
}