<!doctype html><html>    <head>    		<title>用户登录</title>        <meta charset="utf-8">            <link href="http://iweilian.cn/baijia/themes/default/__RESOURCE__/plus/css/font-awesome.min.css" rel="stylesheet">        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">        <meta name="format-detection" content="telephone=no" />			  <script type="text/javascript" src="http://iweilian.cn/baijia/themes/default/__RESOURCE__/js/jquery-1.11.3.min.js"></script>  			<script language="javascript" src="http://iweilian.cn/baijia/themes/default/__RESOURCE__/plus/js/jquery.gcjs.js"></script>        <link rel="stylesheet" type="text/css" href="http://iweilian.cn/baijia/themes/default/__RESOURCE__/plus/css/style_normal.css"/>        <script type="text/javascript" src="http://iweilian.cn/baijia/themes/default/__RESOURCE__/login/js/register.js?v=20160304014"></script>    </head>    <body><style type="text/css">    body {margin:0px; background:#efefef; font-family:'微软雅黑'; -moz-appearance:none;}    .info_main {height:auto;  background:#fff; margin-top:14px; border-bottom:1px solid #e8e8e8; border-top:1px solid #e8e8e8;}    .info_main .line {margin:0 10px; height:40px; border-bottom:1px solid #e8e8e8; line-height:40px; color:#999;}    .info_main .line .title {height:40px; width:80px; line-height:40px; color:#444; float:left; font-size:16px;}    .info_main .line .info { width:100%;float:right;margin-left:-80px; }    .info_main .line .inner { margin-left:80px; }    .info_main .line .inner input {height:40px; width:100%;display:block; padding:0px; margin:0px; border:0px; float:left; font-size:16px;}    .info_main .line .inner .user_sex {line-height:40px;}    .info_sub {height:44px; margin:14px 5px; background:#31cd00; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}    .select { border:1px solid #ccc;height:25px;}</style>				<form  method="post" >						<input type="hidden"  name="third_login" value="<?php echo $_GP['third_login'];?>" /><div id="container"></div>    <div class="page_topbar" style="background: #008cd7;"  >    <div class="title" style="color: #fff;text-align:center;">用户登录</div></div>    <div class="info_main">       <div class="line"><div class="title">用户名：</div><div class='info'><div class='inner'><input type="tel" placeholder="请输入手机号码"  autocomplete="off" name="mobile"  maxlength="11" id="phone" oninput="checkValidatePhone();" onfocus="focusPhone();"  onblur="blurPhone();"/></div></div></div>        <div class="line"><div class="title">密码：</div><div class='info'><div class='inner'><input type="password" name="password" autocomplete="off" placeholder="设置密码，6-16位数字、字母或符号组成"/></div></div></div>     </div>    <div class="info_sub" onclick="submitRegister('');">立即登录</div>    <div style="text-align:center;">    	<?php if(empty($cfg['bj_color_enable'])){ ?>              <a  style="font-size:16px;color:blue" href="<?php echo create_url('mobile',array('name' => 'shopwap','do' => 'regedit','third_login'=>$_GP['third_login']));?>">免费注册</a> 	 <?php  } ?> <?php  if(!empty($system_settings['regsiter_usesms'])&&!empty($system_settings['sms_change_pwd2'])&&!empty($system_settings['sms_change_pwd2_signname'])) { ?>&nbsp; <a style="font-size:16px;color:blue" href="<?php echo create_url('mobile',array('name' => 'shopwap','do' => 'repwd','third_login'=>$_GP['third_login']));?>">忘记密码</a>   	<?php  }?>  										 <?php  if($_GP['from']=="confirm"&&!empty($system_settings['shop_tempuser_buy'])) { ?>		<a  style="font-size:16px;color:blue"href="<?php echo getloginfrom("&follower=nologinby");?>"><strong>点击直接购买</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	 	<?php  }?>    </div>        <button type="submit" id='submit'  name="submit" value="yes" style="display:none" >x</button>    	</form>    <?php include themePage('footer');?><?php include themePage('weixinshare');?><?php  include page('footer');?>	