<?php defined('SYSTEM_IN') or exit('Access Denied');?><?php  include page('header');?>
<style>

.emotions{position:absolute;top:30px;left:20px;border:1px solid #AAA;padding:5px;background-color:#FFF;z-index:9999999;display:none}
.emotions table td{padding:1px;}
.emotions table td div{background: url("https://res.mail.qq.com/zh_CN//images/mo/DEFAULT2/default.gif") no-repeat 0 0 scroll transparent;width:24px;height:24px;cursor:pointer; border:1px solid #dfe6f6;}
.emotions table div:hover{border:1px solid blue;}
.emotions .emotionsGif{   position:absolute;top:-1px;left:430px;border:1px solid #AAA;padding:20px;background-color:#FFF;text-align:center;width:24px;height:24px}
.iconEmotion{font-size:14px;}

	</style>
<script type="text/javascript" src="<?php echo RESOURCE_ROOT;?>addons/common/js/emotions.js?x=10"></script> 
<h3 class="header smaller lighter blue">文本回复管理</h3>
<form method="post" class="form-horizontal" enctype="multipart/form-data" onsubmit="return formcheck(this)"  >
	<input type="hidden" name="id" value="<?php  echo $rule['id'];?>">
		<input type="hidden" name="ruletype" value="1">
			<div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 规则标题：</label>

										<div class="col-sm-9">
										    <input type="text" id="rule-title" class="col-xs-10 col-sm-4" placeholder="" name="title" value="<?php  echo $rule['title'];?>"  id="rule-title"/> &nbsp;<a class="iconEmotion" inputid="rule-title" href="javascript:;"  ><i class="icon-github-alt"></i> 表情</a>
				</div>
			</div>
			

			<div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 触发类型：</label>

										<div class="col-sm-9">
										   			
										   			<input type="radio" name="ruletypekeywords" value="0" onchange="keywordstypeAction(this.value,0)" <?php if($rule['keywords']==default_key){ }else{ if($rule['keywords']==subscribe_key){ }else{echo 'checked';}} ?>>自定义关键字<input type="radio" name="ruletypekeywords" value="1" onchange="keywordstypeAction(this.value,0)" <?php if($rule['keywords']==default_key){ echo 'checked';}else{ if($rule['keywords']==subscribe_key){ }else{}} ?>>默认回复<input type="radio" name="ruletypekeywords" value="2" onchange="keywordstypeAction(this.value,0)" <?php if($rule['keywords']==default_key){ }else{ if($rule['keywords']==subscribe_key){ echo 'checked'; }else{}} ?>>关注自动回复
										   			
				</div> 
			</div>
			
						<script>
					
						
					function keywordstypeAction(rule_type_keywords,init)
					{
						if(rule_type_keywords==0)
						{
									document.getElementById('rule-keywords').style.display="block";
									if(init!=1)
									{
									document.getElementById('rule-keywords').value="";
									}
						}
						if(rule_type_keywords==1)
						{
									document.getElementById('rule-keywords').value="<?php  echo default_key;?>";
									document.getElementById('rule-keywords').style.display="none";
						}
						if(rule_type_keywords==2)
						{
									document.getElementById('rule-keywords').value="<?php  echo subscribe_key;?>";
									document.getElementById('rule-keywords').style.display="none";
						}
								
						
							
					}
						</script>

			<div class="form-group" id="rule-keywords" >
										<label class="col-sm-2 control-label no-padding-left" > 触发关键字：</label>

										<div class="col-sm-9">
										   			<input type="text" class="span2" placeholder=""  name="keywords" value="<?php  echo $rule['keywords'];?>" />
										   			
											   			
				</div> 
			</div>
			
			
			
					<div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 描述：</label>

										<div class="col-sm-9">
											<textarea name="description" cols="60" rows="8" id="rule-description" ><?php  echo $rule['description'];?></textarea>
											<div class="help-block">	用户进行微信交谈时，对话内容完全等于上述关键字才会执行这条规则。&nbsp;<a class="iconEmotion" inputid="rule-description" href="javascript:;"  ><i class="icon-github-alt"></i> 表情</a></div>
				</div>
			</div>
	
	
			
					<div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > </label>

										<div class="col-sm-9">
										  
					<button type="submit" class="btn btn-primary " name="submit" value="提交">提交</button>
				</div>
			</div>
			<script>

		function formcheck()
	{

				if(document.getElementById('rule-title').value=='')
				{
					alert("标题不能为空");	
					return false;
				}
				
					if(document.getElementById('rule-keywords').value=='')
				{
					alert("触发关键字不能为空");	
					return false;
				}
	
			
			return true;	
		
	}
	keywordstypeAction(<?php if($rule['keywords']==default_key){ echo 1;}else{ if($rule['keywords']==subscribe_key){ echo 2;}else{echo 0;}} ?>,1);
</script>
<div class="emotions" style="display:none;"></div>
</form>

<?php  include page('footer');?>
