<!DOCTYPE html>
<html><head>
	<title>支付订单</title>
        <meta charset="utf-8">
        <link href="http://iweilian.cn/baijia/themes/default/__RESOURCE__/plus/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="format-detection" content="telephone=no">
         <link rel="stylesheet" type="text/css" href="http://iweilian.cn/baijia/themes/default/__RESOURCE__/plus/css/style_normal.css">
         
	<script type="text/javascript" src="http://iweilian.cn/baijia/themes/default/__RESOURCE__/script/jquery-1.7.2.min.js"></script>
     <body>

<style type="text/css">
    body {margin:0px; background:#efefef; font-family:'微软雅黑'; -moz-appearance:none;}
.order_main {height:auto; border-bottom:1px solid #f0f0f0; border-top:1px solid #f0f0f0; background:#fff;margin-top:10px;}
.order_main .line {height:44px; margin:0 5px; border-bottom:1px solid #f0f0f0; line-height:44px;}
.order_main .line .label { float:left;width:80px;}
.order_main .line .info { float:right; width:100%; margin-left:-85px;text-align: right;overflow:hidden;height:44px;}
.order_main .line .info .inner { color:#666;margin-left:85px;}
.order_main .tip { color:#666; line-height:20px;padding:5px;font-size:13px; }
 
  .order_main .line .nav {height:22px; width:40px; background:#ccc; margin:10px 0px; float:right; border-radius:40px;}
.order_main .line .on {background:#4ad966;}
.order_main .line .nav nav {height:20px; width:20px; background:#fff; margin:1px; border-radius:20px;}
.order_main .line .nav .on {margin-left:19px;}

.order_sub1 {height:44px; margin:14px 5px; background:#31cd00; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}
.order_sub2 {height:44px; margin:14px 5px; background:#f49c06; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}
.order_sub3 {height:44px; margin:14px 5px;background:#e2cb04; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}
.order_sub4 {height:44px; margin:14px 5px; background:#18c0f7; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}

.order_main1 {height:30px;padding:10px;border-bottom:1px solid #f0f0f0; border-top:1px solid #f0f0f0; background:#fff;text-align:center;margin-top:10px; }
.order_sub5 {height:30px; width:35%;padding:5px 10px 5px 10px; border:1px solid #ccc; border-radius:4px; text-align:center; font-size:16px; line-height:30px; color:#333; }
.order_sub6 {height:44px; margin:14px 5px; background:#07c4d0; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}

.order_subc {height:44px; margin:14px 5px; background:#31cd00; border-radius:4px; text-align:center; font-size:16px; line-height:44px; color:#fff;}
</style>

<div id="container"><input name="topage" value="0" type="hidden">
       <div class="page_topbar" style="background: #008cd7;">
        <a href="javascript:;" class="back" onclick="history.back()"><i class="fa fa-angle-left" style="color:#fff;"></i></a>
        <div class="title" style="color:#fff;">支付订单</div>
    </div>
    <div class="order_main">  
        <div class="line"><div class="label">订单编号</div><div class="info"><div class="inner"><?php  echo $order['ordersn']; ?></div></div></div>
        <div class="line"><div class="label">支付金额</div><div class="info"><div class="inner"><div style="color:#ff6600">￥<span id="orderprice" price="<?php  echo $order['price']; ?>"><?php  echo $order['price']; ?></span>元</div></div></div></div>
    </div>
        
    
    
    
     	 	<?php  $ischecked=true;  $index=1; if(is_array($payments)) { foreach($payments as $d) { ?>
  				         <?php  if(empty($item['isverify'])||(!empty($item['isverify'])&&$d['online']==1)) { ?>
        
        <div class="button order_sub<?php  echo $index++; ?>" onclick="location.href='<?php  echo mobile_url('pay', array('orderid' => $order['id'],'paymentcode'=>$d['code']))?>';"><?php echo $d['name']?></div>
          
    
    
    
   </div>
           <?php  } ?>    
                        <?php  } } ?>
 	
    	
<?php include themePage('footer');?>
<?php include themePage('weixinshare');?>
<?php  include page('footer');?>	