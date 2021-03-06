<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>已发布求购</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/yfb-3rxz-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
				list-style-type: none;
			}
			
			a,
			img {
				border: 0;
			}
			
			.demo {
				width: 720px;
				margin: 35px auto;
			}
			
			.demo h2 {
				font-size: 16px;
				color: #3366cc;
				height: 30px;
			}
			
			.demo li {
				float: left;
			}
			
			.text,
			.button {
				background: url(http://su.bdimg.com/static/superpage/img/spis_031ddf34.png) no-repeat;
			}
			
			.text {
				width: 425px;
				height: 22px;
				padding: 4px 7px;
				padding: 6px 7px 2px\9;
				font: 16px arial;
				border: 1px solid #cdcdcd;
				border-color: #9a9a9a #cdcdcd #cdcdcd #9a9a9a;
				vertical-align: top;
				outline: none;
				margin: 0 -1px 0 0;
			}
			
			.button {
				width: 79px;
				height: 32px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
			
			.button2 {
				width: 135px;
				height: 32px;
				margin-left: 30px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
		</style>
	</head>

	<body>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<?php if(empty($_SESSION['username'])){ ?>
								<li style="width: 100px;">
									<a id="login-alert" href="#">请注册\登录</a>
								</li>
								<?php }else{ ?>
								<li style="width: 100px;">
									<a href="#">
										<img src="/matouPCS/Public/Home/img/tx.png" />
										<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
									</a>
									<div class="str"></div>
								</li>
								<?php } ?>
								<li id="select-xx" style="width: 45px;">
									<a href="#">消息</a>
									<div class="str"></div>
									<div class="select-xx">
										<ul>
											<li>
												<a href="">需求消息</a>
											</li>
											<li>
												<a href="">部队消息</a>
											</li>
											<li>
												<a href="">商铺消息</a>
											</li>
										</ul>
									</div>
								</li>
								<li style="width: 58px;">
									<a href="#">收藏夹</a>
									<div class="str"></div>
								</li>
								<li id="select-yfb" style="width: 70px;">
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb">
										<ul>
											<ul>
												<li>
													<a href="">悬赏</a>
												</li>
												<li>
													<a href="">应赏</a>
												</li>
												<li>
													<a href="">招聘</a>
												</li>
												<li>
													<a href="">应聘</a>
												</li>
												<li>
													<a href="">求购</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
											</ul>
										</ul>
									</div>
								</li>
								<li style="width: 68px;">
									<a href="#">部队中心</a>
									<div class="str"></div>
								</li>
								<li style="width: 68px;">
									<a href="#">我的商铺</a>
									<div class="str"></div>
								</li>
								<li style="width: 70px;">
									<a class="action" href="#">发动态</a>
									<div class="strf"></div>
								</li>
								<li class="clearfloat"></li>
							</ul>
						</div>
						<div class="clearfloat"></div>
					</div>
					<div class="h-c-2f">
						<img src="/matouPCS/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-t">
					<p>已发布求购</p>
				</div>
				<div class="s-main-t-qb">
					<div class="s-main-t-qb" id="man-top">
						<p>全部<span class="xll11"></span></p>
					</div>
					<div class="na-top">
						<ul>
							<li>
								<a href="#">全部</a>
							</li>
							<li>
								<a href="#">留言</a>
							</li>
							<li>
								<a href="#">关注</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="wk_01">
					<div class="con">
						<div class="s-main-b">
							<ul>
								<?php if(is_array($fbqg)): foreach($fbqg as $key=>$fbqgs): ?><a href="?s=/Home/Tzsc/xqqg/id/<?php echo ($fbqgs["fid"]); ?>">
										<li>
											<div class="yfb">
												<div class="yfb_01">
													<p class="yfb_01_01">物品名称：<b><?php echo ($fbqgs["name"]); ?></b></p>
													<p class="yfb_01_02">预算：<b>￥<?php echo ($fbqgs["price"]); ?>元</b></p>
													<p class="yfb_01_03">
														<?php
 if($fbqgs['tz_status'] == '1'){ ?>
														<button class="tj_01_03" id="btn_01<?php echo ($fbqgs["fid"]); ?>">未完成</button>
														<?php }else{ ?>
														<button class="tj_01_03" id="btn_01<?php echo ($fbqgs["fid"]); ?>">已完成</button>
														<?php } ?>
													</p>
												</div>
												<div class="xialai">
													<span class="xll1"></span>
													<?php
 if($fbqgs['tz_status'] == '1'){ ?>
														<p class="xs1" onclick="wan(<?php echo ($fbqgs["fid"]); ?>)" id="w<?php echo ($fbqgs["fid"]); ?>" style="font-size: 12px;">完成</p>
														<?php }else{ ?>
														<p class="xs1" onclick="wan(<?php echo ($fbqgs["fid"]); ?>)" id="w<?php echo ($fbqgs["fid"]); ?>" style="font-size: 12px;">删除</p>
														<?php } ?>
												</div>
												<div class="yfb_01" style="margin-top:24px;">
													
													<p class="yfb_sj">发布时间：<?php echo ($fbqgs["date"]); ?></p>
												</div>
											</div>
										</li>
									</a><?php endforeach; endif; ?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>
		</section>
		<br>
		<br>
		<br>
		<footer>
			<div class="f-main-c">
				<div class="f-c-2f">
					<div style="width: 90%; margin: 0 auto;"><br>
						<a href="#">i店大全</a>&nbsp;
						<a href="#">十大家纺排行榜</a>&nbsp;
						<a href="#">鲜花礼品网</a>&nbsp;
						<a href="#">鲜花网</a>&nbsp;
						<a href="#">婚介</a>&nbsp;
						<a href="#">婚礼搜索导航</a>&nbsp;
						<a href="#">杭州婚庆网</a>&nbsp;
						<a href="#">新娘说</a>&nbsp;
						<a href="#">拍表网</a>&nbsp;
						<a href="#">结婚网</a>&nbsp;
						<a href="#">钻戒品牌</a>&nbsp;
						<a href="#">武汉婚车租摄</a>&nbsp;
						<a href="#">婚礼时光</a>&nbsp;
						<a href="#">婚礼电子请帖</a>&nbsp;
						<a href="#">小笑话</a>&nbsp;
						<a href="#">十大家纺排行榜</a>&nbsp;
						<br>
						<br>
						<p>© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<!--<br/>-->
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>

				</div>
			</div>
		</footer>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script type="text/javascript">
		//		下拉菜单
		$('#select-yfb').hover(function() {
			$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(180deg)');
			$('.select-yfb').stop().animate({
				height: '150px'
			}, 300);
		}, function() {
			$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(0deg)');
			$('.select-yfb').stop().animate({
				height: '0px'
			}, 300);
		});
		$('#select-xx').hover(function() {
			$('.select-xx').stop().animate({
				height: '75px'
			}, 300);
		}, function() {
			$('.select-xx').stop().animate({
				height: '0px'
			}, 300);
		});

		// function changes(fid) {
		// 	alert(fid);
		// 	var mark = document.getElementById('btn_01'+fid).innerText;
		// 	if(mark == '已完成') {
		// 		document.getElementById('btn_01'+fid).innerText = "未完成";
		// 	} else {
		// 		document.getElementById('btn_01'+fid).innerText = "已完成";
		// 	}
		// }
	</script>
	<script type="text/javascript">
		$(function() {
			$("#xl").hide(500);
			$("#xx").click(function() {
				$("#xl").toggle(500);
			});
		});
		$(function() {
			$("#xl_01").hide(500);
			$("#xx_01").click(function() {
				$("#xl_01").toggle(500);
			});
		});
		$("#man-top").click(function() {
			$(".na-top").toggle();
		});
		$(document).ready(function() {
			$(".xll1").click(function() {
				$(this).siblings(".xs1").slideToggle(200);
			});
		});
		
		function wan(fid){
			if($('#w'+fid).text() == '完成'){
				$.ajax({
					url:"?s=/Home/User/user_qg_wc/fid/"+fid,
					type:"get",
					success:function(data){
						$('#w'+fid).text("删除");
						$("#btn_01"+fid).text("已完成");
						if($('#w'+fid).text() == "已完成") {
							alert("1");
						} else {
							$('#w'+fid).click(function() {
								$('#w'+fid).parent().parent().parent().remove();
							});
						}
					},error:function(){
						alert('no');
					}
				});
			}else{
				if(window.confirm('确定删除?')){
					$.ajax({
						url:"?s=/Home/User/user_qg_wc_del/fid/"+fid,
						type:"get",
						success:function(data){
							$('#w'+fid).parent().parent().parent().remove();
						},error:function(){
							alert('no');
						}
					});
				}
			}
			
		}
	</script>

</html>