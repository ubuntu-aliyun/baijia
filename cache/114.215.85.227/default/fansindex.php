<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
           <link href="http://114.215.85.227/baijia/themes/default/__RESOURCE__/plus/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
        <link rel="stylesheet" type="text/css" href="http://114.215.85.227/baijia/themes/default/__RESOURCE__/plus/css/style.css?x=1467851791">
    </head>
    <body>

<title>个人中心</title>
<style type="text/css">
    body {margin:0px; background:#eee; -moz-appearance:none;}
    a {text-decoration:none;}
    .header {height: auto; width:100%; padding:0px; background: url(<?php  if(empty($settings['fansindex_bg'])){?>http://114.215.85.227/baijia/themes/default/__RESOURCE__/plus/images/bg11.jpg<?php }else{ ?><?php echo ATTACHMENT_WEBROOT;?><?php  echo $settings['fansindex_bg'];?><?php } ?>) 0 0 no-repeat;background-size: 100% 100%;}
    .header .user {height:127px; padding:10px;}
    .header .user .user-head {height:48px; width:48px; background:#fff; border-radius:50%; MARGIN: 0 AUTO;border:2px solid #fff;}
    .header .user .user-head img {height:48px; width:48px; border-radius:24px;}
    .header .user .user-info {width:auto;TEXT-ALIGN: CENTER;PADDING-TOP: 10PX; color:#874127;}
    .header .user .user-info .user-name {height:24px; width:auto; font-size:16px; line-height:24px;}
    .header .user .user-info .user-other {height:24px; width:auto; font-size:12px;}
    .header .user-gold {height:35px; width:94%; padding:5px 3%; border-bottom:1px solid #ddd; background:#fff; font-size:16px; line-height:35px;}
    .header .user-gold .title {height:35px; width:auto; float:left; color:#666;}
    .header .user-gold .num {height:35px; width:auto; float:left; color:#f90;}
    
    .header .user-gold .draw {width:80px; height:30px; background:#6c9; float:right;}
    .header .user .set {height: 26px;width: 26px;float: right;top: 10px;RIGHT: 10PX;POSITION: absolute;}

    .header .user-op { height:35px; width:94%; padding:5px 3%; border-bottom:1px solid #ddd; background:#fff; font-size:16px; line-height:35px; }
    .take {height:30px; width:auto; padding:0 10px; line-height:30px; font-size:16px; float:right; background:#ff6600; border-radius:5px; margin-top:5px; color:#fff;}
    .take1 {height:30px; width:auto; padding:0 10px; line-height:30px; font-size:16px; float:right; background:#00cc00; border-radius:5px; margin-top:5px; color:#fff;}
    
    .order {height:135px; width:100%; background:#fff; margin-top:20px; border-bottom:1px solid #ddd;}
    .order_all {height:100px; width:100%; padding:16px 0px; color:#666;}
    .order_pub {height:18px; float:left; border-left:1px solid #eee; padding-top:5px; text-align:center; color:#666; position:relative;}
    .order_pub span {height:16px; width:16px; background:#f30; border-radius:8px; position:absolute; top:0; right:25%; font-size:12px; color:#fff; line-height:16px;}
    .order_1 {width:24%;}
    .order_2 {width:25%;}
    .order_3 {width:25%;}
    .order_4 {width:25%;}

    .list1 {height:44px; width:94%; background:#fff; padding:0px 3%; margin-top:20px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; line-height:44px; color:#666;}
    .list1 i {font-size:20px; margin-right:10px;}
    .allorder {float:right; color:#aaa; margin-right:45px; text-decoration:none;}


    .cart {height:auto; width:100%; background:#fff; margin-top:20px; border-bottom:1px solid #ddd;}
    .address {height:38px; width:100%; background:#fff; margin-top:20px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; line-height:38px;}

    .copyright {height:40px; width:100%; text-align:center; line-height:40px; font-size:12px; color:#999; margin-top:10px;}

</style>
<div id="container"></div>
    <div class="header">
        <div class="user">
            <div class="user-head"><?php  if(empty($avatar)){?><img 
                                                                src="http://114.215.85.227/baijia/themes/default/__RESOURCE__/recouse/images/tx.png"/><?php  }else{ ?><img src="<?php echo $avatar;?>" /><?php  } ?></div>
            <div class="user-info">
                <div class="user-name"><?php  if($is_login){?><?php  echo empty($member['nickname'])?$member['mobile']:$member['nickname'];?><?php  }else{?>游客<?php  } ?>	</div>
                <div class="user-other" >[<?php  if($is_login){?>  <?php   $member_rank_model=member_rank_model($member['experience']);if(empty($member_rank_model)){ echo '无';}else{echo $member_rank_model['rank_name'];}?> <?php }else{?> 非会员 <?php }?>]                 </div>
                  <?php if(!empty($parent_member['openid'])){  ?><div class="user-other" >[你是由【
    <?php echo empty($parent_member['nickname'])?hidtel($parent_member['mobile']):$parent_member['nickname']  ?>】推荐]</div><?php } ?>
        
            </div>
        </div>

</div>
	  <?php  if($is_login){?>
 <div class="cart" style="margin-top: 0px;">
     <a href="javascript:;"><div style="margin-top: 0px;" class="list1" style=" border-bottom:0px;border-top:0px;">余额: <span style='color:#f90'><?php  $gold=$member['gold'];$gold=sprintf("%.2f",$gold); echo $gold; ?></span> 
             <div class="take" style="margin-left:10px" onclick="location.href='<?php  echo mobile_url('rechargegold')?>'">充值</div><div class="take1" onclick="location.href='<?php  echo mobile_url('outchargegold')?>'">提现</div>
   
                 
         </div></a>
    <a href="javascript:;" ><div style="margin-top: 0px;" class="list1" style=" border-bottom:0px;border-top:0px;">积分: <span style='color:#f90'><?php  $credit=$member['credit'];echo $credit; ?></span>    </div></a>
   
</div>  
	  <?php  } ?>
<div class="order">
    <a href="<?php  echo mobile_url('myorder',array('status'=>99))?>">
        <div class="list1" style="margin-top:0px;">
            <i class="fa fa-reorder" style="float:left; line-height:44px;"></i>
            <span style="float:left;">我的订单</span>
            <i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i>
            <div class="allorder">查看我的全部订单</div>
        </div>
    </a>
    <div class="order_all">
        <a href="<?php  echo mobile_url('myorder',array('status'=>0,'tstatus'=>1))?>"><div class="order_pub order_1" style="border:0px;"><i class="fa fa-credit-card" style="font-size:30px"></i><br>待付款<?php  if(!empty($total1)){ ?><span><?php  echo $total1; ?></span><?php  } ?></div></a>
        <a href="<?php  echo mobile_url('myorder',array('status'=>1))?>"><div class="order_pub order_2"><i class="fa fa-suitcase" style="font-size:30px"></i><br>待发货<?php  if(!empty($total2)){ ?><span><?php  echo $total2; ?></span><?php  } ?></div></a>
        <a href="<?php  echo mobile_url('myorder',array('status'=>2))?>"><div class="order_pub order_3"><i class="fa fa-truck" style="font-size:30px"></i><br>待收货<?php  if(!empty($total3)){ ?><span><?php  echo $total3; ?></span><?php  } ?></div></a>
        <a href="<?php  echo mobile_url('myorder',array('status'=>-5))?>"><div class="order_pub order_4"><i class="fa fa-money" style="font-size:30px"></i><br>退换货<?php  if(!empty($total4)){ ?><span><?php  echo $total4; ?></span><?php  } ?></div></a>
    </div>
</div>

	 
	      
	      
	      <?php  if($is_login){?>
<?php   if(count($fansindex_menu_list)>0) { if(is_array($fansindex_menu_list)) { ?>
<div class="cart">       <?php foreach($fansindex_menu_list as $item) { ?>
		        <a href="<?php  echo $item['url'] ?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa  fa-list" style="color:#f10;"></i><?php  echo $item['tname'] ?><i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
<?php  }?>
</div>
<?php }  }?>
<?php  }?>


<?php  if($is_login){?>
<div class="cart">
	     <?php  if(!empty($settings['bj_tbk_protimes'])&&$_CMS['addons_bj_tbk']&&$bj_tbk_member_relect['isagent']==1){?>
		        <a href="<?php  echo create_url('mobile',array('name' => 'bj_tbk','do' => 'bj_tbkcenter'));?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-home" style="color:#f10;"></i>分销中心<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
	     <?php  } ?>
  <a href="<?php  echo mobile_url('address',array('from'=>'fansindex'))?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-gift" style="color:#99C;"></i>收货地址管理 <i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
   
			 <a href="<?php  echo mobile_url('member')?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-user" style="color:#A6E1EC;"></i>我的资料<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
	     <a href="<?php  echo mobile_url('mycart')?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-shopping-cart" style="color:#f90;"></i>我的购物车<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
	   
	   <a href="<?php  echo mobile_url('member_pwd')?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-key" style="color:#f10;"></i>修改密码<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
	  
	  
			  
</div>

<?php  } ?>

 <?php  if(empty($is_login)){?>
 <div class="cart">
		        <a href="<?php  echo mobile_url('login')?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-sign-in" style="color:#f10;"></i>用户登录<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>	
	  		    <?php if(empty($cfg['bj_color_enable'])){ ?>
	    <a href="<?php  echo mobile_url('regedit')?>"><div class="list1" style="margin:0px; border-bottom:0px;"><i class="fa fa-user" style="color:#A6E1EC;"></i>用户注册<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>
<?php  } ?>
</div>
<?php  } ?>

    
            <?php  if($is_login){?>
                <?php  if(!empty($member['mobile'])&&!empty($member['pwd'])&&$nologout==false){?>
<a href="<?php  echo mobile_url('logout')?>"><div class="list1"><i class="fa fa-sign-out" style="color:#cc6;"></i>安全退出<i class="fa fa-angle-right" style="color:#999; font-size:26px; float:right; line-height:44px;"></i></div></a>
 <?php  } ?>
<?php  } ?>

<?php include themePage('footer');?>
<?php include themePage('weixinshare');?>
<?php  include page('footer');?>	
