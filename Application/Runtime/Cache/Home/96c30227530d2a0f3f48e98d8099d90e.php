<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>招聘大厅</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zpdt1-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<style>
			.s-f1-r ul li a .img {
				margin-top: 15px;
				margin-right: 10px;
				float: right;
			}
			.select-yfb {
				width: 70px;
				/*height: 100px;*/
				height: 0px;
				background-color: white;
				position: absolute;
				/*background-color: #008B8B;*/
				border-left: solid 1px #E6E6E6;
				border-right: solid 1px #E6E6E6;
				border-bottom: solid 1px #E6E6E6;
				/*right: 200px;*/
				top: 34px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-yfb ul {
				width: 70px;
				height: 150px;
				/*background-color: #008B8B;*/
				overflow: hidden;
			}
			
			.select-yfb ul li {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			.select-yfb ul li a{
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			.select-xx {
				width: 70px;
				/*height: 100px;*/
				height: 0px;
				background-color: white;
				position: absolute;
				/*background-color: #008B8B;*/
				border-left: solid 1px #E6E6E6;
				border-right: solid 1px #E6E6E6;
				border-bottom: solid 1px #E6E6E6;
				/*right: 200px;*/
				top: 34px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-xx ul {
				width: 70px;
				height: 150px;
				/*background-color: #008B8B;*/
				overflow: hidden;
			}
			
			.select-xx ul li {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			.select-xx ul li a{
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
		</style>
	</head>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<body>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="index.html">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<literal>
                     				<?php if($_SESSION['username'] == '' ): ?><li style="width:100px; ">
											<a id="login-alert" href="#">请注册\登录</a>
										</li>
									<?php else: ?>
										<li style="width: 100px;">
											<a href="#">
												<img src="/matouPCS/Public/Home/img/tx.png" />
												<p >用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
											</a>
											<div class="str"></div>
										</li><?php endif; ?>
								<literal>
								<li id="select-xx" style="width: 45px;">
									<a href="#">消息</a>
									<div class="str"></div>
									<div class="select-xx">
										<ul>
											<li><a href="">需求消息</a></li>
											<li><a href="">部队消息</a></li>
											<li><a href="">商铺消息</a></li>
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
											<li><a href="">悬赏</a></li>
											<li><a href="">应赏</a></li>
											<li><a href="">招聘</a></li>
											<li><a href="">应聘</a></li>
											<li><a href="">求购</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
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
						<div class="s-f2-l">
							<div class="f2-l-1">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/logo.png" />
								</a>
							</div>
							<div class="f2-l-2">招聘大厅</div>
							<a href="?s=/Home/Zpdt">
								<div class="f2-l-3">应聘区</div>
							</a>
						</div>
						<div class="s-f2-r">
							<div class="demo">
								<form action="http://www.jsfoot.com/e/search/index.php" method="post" name="searchform" id="searchform" class="searchinfo">
									<ul>
										<li><input type="text" id="tt" value="" class="text" style="text-align: left;" autocomplete="off" /></li>
										<li><input type="submit" value="搜索" class="button" /></li>
										<li><input type="submit" value="商家认证部队" class="button2" /></li>

									</ul>
								</form>
							</div>
						</div>
					</div>
					<div class="h-c-3f">
						<img src="/matouPCS/Public/Home/img/banner1.png" />
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-l">
					<div class="s-c-1f">
						<a href="#">所有分类</a>>
						<a href="#">找到相关<?php echo $xiang; ?>条相关结果</a>
					</div>
					<div class="s-c-2f">
						<div id="filter">
							<dl>
								<dt>职位</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>经理/店长</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>营业员</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>数码师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>视频剪辑师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄影师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄像师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>化妆师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>策划师</a>
									</div>
								</dd>
								
								<dd>
									<div>
										<a>其他</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>性别</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>女</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>男</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>年龄</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>18-25岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>25-30岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>30-35岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>35岁以上</a>
									</div>
								</dd>
							</dl>
                            
                            <dl>
								<dt>工作经验</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>1-2年</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>2-5年</a>
									</div>
								</dd>
							
								<dd>
									<div>
										<a>5年以上</a>
									</div>
								</dd>
							</dl>
                            
							<dl>
								<dt>薪资/月</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>3000元以下</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>3000元-5000元</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>5000元-8000元</a>
									</div>
								</dd>
								
								<dd>
									<div>
										<a>8000元以上</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>招聘方</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
                                <dd>
									<div>
										<a>婚庆公司</a>
									</div>
								</dd>
                                <dd>
									<div>
										<a>工作室</a>
									</div>
								</dd>
                                <dd>
									<div>
										<a>影楼</a>
									</div>
								</dd>
                                <dd>
									<div>
										<a>表演团</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>活动地点</dt>
								<dd>
									<div>
										<input id="city" type="text" placeholder="点击选择地点" />
									</div>
								</dd>
							</dl>
							<div class="px">
								<p>排序：</p>
								<div class="hot">
									热门
								</div>
								<div class="new">
									最新
								</div>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						var url_ajax = "?s=/Home/Box/zpdt";//这个路径是真正显示列表的
			           $(function() {
			                $("#ajax_lists").delegate(".pager a", "click", function() {
			                    var page = $(this).attr("data-page");
			                    getPage(page);
			                })
			                getPage(1);
			            })
			            function getPage(page) {
			                 $("#ajax_lists").html("<h1>请稍等。。。</h1>");
			                 $.get(url_ajax, {p: page}, function(data) {
			                    $('#ajax_lists').html(data);
			                })
			            }
            		</script>
					<div class="s-c-3f" id="ajax_lists">
						
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-r-1f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjzp.png" /></a>
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-2f">
						<ul>
							<?php if(is_array($datan)): foreach($datan as $key=>$dataa): ?><li>
									<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($dataa["rid"]); ?>">
										<div class="yh-admin">
											<img src="/matouPCS/Public/Home/hye/<?php echo ($dataa["imagename"]); ?>" />
										</div>
										<p style="display:block; overflow: hidden; margin-top: -5px; margin-left: 10px; float:left; width: 180px; height: 20px; font-size:14px;">
											部队名称
										</p>
										<p style="display:block; float: left; overflow: hidden; line-height: 30px; margin-left: 10px; float:left; width: 68px; height: 30px; font-size:14px;">
											经理/店长
										</p>
										<p style="display:block; float: left; overflow: hidden; margin-left: 25px; float:left; width: 30px; height: 30px; line-height: 30px; font-size:14px;">
											<?php echo ($dataa["sex"]); ?>
										</p>
										<p style="display:block; overflow: hidden;  float:right; width: 50px; height: 30px; line-height: 30px; font-size:14px;">
											<?php echo ($dataa["age"]); ?>岁
										</p>
										<p style="display:block; overflow: hidden; margin-left: 10px; float:left; width: 50px; height: 20px; font-size:14px;">
											薪资：
										</p>
										<p style="color: #FF5C5D; overflow: hidden; font-size: 14px; display: block; width: 130px; height: 20px; float: left;"><?php echo ($dataa["price"]); ?>元/月</p>
										<p style="font-size: 14px; color: #999999; width: 265px; height: 44px; line-height: 24px; overflow: hidden;">
											具体要求 : &nbsp;<?php echo ($dataa["content"]); ?>
										</p>
										<p style="font-size: 14px; display: block; width: 80px; float: left; color: #CCCCCC; margin-top: 10px;">报名数</p>
										<p style="font-size: 14px;display: block; width: 100px; float: right; color: #CCCCCC; margin-top: 10px;"><?php echo ($dataa["address"]); ?></p>
									</a>
								</li><?php endforeach; endif; ?>
							
							<li class="clearfloat" style="border: 0; height: 0px; width: 0px; background: rgba(255,255,255,0.0); "></li>
						</ul>
					</div>
					<div class="s-r-3f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjbd.png" /></a>
							<!--<a href="#"><img src="img/tjcz.png" /></a>-->
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-4f">
						<ul>
							<?php if(is_array($listnn)): foreach($listnn as $key=>$listnns): ?><li>
								<?php if($_SESSION['id'] == $listnns['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($listnns["id"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listnns["id"]); ?>">
									<?php } ?>
									<div class="tj">
										<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
										<div class="tj_01">
											<p class="tj_01_01" style="100px"><?php echo ($listnns["forcename"]); ?></p>
											<p class="tj_01_02" style="100px">部队类型：<b style="color:#666666; font-weight:500"><?php echo ($listnns["type"]); ?></b></p>
											<p class="tj_01_02" style="100px">粉丝数量：<b style="color:#666666; font-weight:500">110</b></p>
											<p class="tj_01_02" style="100px">
												所在地点：<b style="color:#666666; font-weight:500"><?php echo ($listnns["address"]); ?></b>
											</p>

											<p style="font-size: 12px; color:#666666; margin-left:-120px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
												<?php echo ($listnns["content"]); ?>
											</p>
										</div>

									</div>
								</a>
							</li><?php endforeach; endif; ?>
							<!--<li class="clearfloat"></li>-->
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfloat"></div>
		</section>
		<footer>
			<div class="f-main-c">
				<div class="f-c-1f">
					<ul>
						<li>
							<h4>喜事码头客服热线</h4></li>
						<li>
							<p>工作时间：每天9：00-23：00</p>
						</li>
						<li>
							<p>188-8888-888</p>
						</li>
					</ul>
					<ul>
						<li>
							<h4>关注喜事码头官方微信公众号</h4></li>
						<li>
							<img style="margin-left: 45px;" src="/matouPCS/Public/Home/img/erweima_bottom.png" />
						</li>

					</ul>
					<ul>
						<li>
							<h4>关于我们</h4></li>
						<li>
							<a href="#">
								<p>关于喜事码头</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>码头部队</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>码头商城</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>合伙人招募</p>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<h4>联系我们</h4></li>
						<li>
							<a href="#">
								<p>官方邮箱：xishimatou@163.com</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>通讯地址：河南省郑州市863软件园</p>
							</a>
						</li>
					</ul>
				</div>
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
	<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
	<script src="/matouPCS/Public/Home/js/city-data.js"></script>
	<script src="/matouPCS/Public/Home/js/hzw-city-picker.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script type="text/javascript">
		$(function() {

			$("#tt").bigAutocomplete({
				width: 440,
				data: [{
					title: "中国好声音",
					result: {
						ff: "qq"
					}
				}, {
					title: "中国移动网上营业厅"
				}, {
					title: "中国银行"
				}, {
					title: "中国移动"
				}, {
					title: "中国好声音第三期"
				}, {
					title: "中国好声音 第一期"
				}, {
					title: "中国电信网上营业厅"
				}, {
					title: "中国工商银行"
				}, {
					title: "中国好声音第二期"
				}, {
					title: "中国地图"
				}],

			});

		})

		//			地址选择
		var cityPicker = new HzwCityPicker({
			data: data,
			target: 'city',
			valType: 'k-v',
			hideCityInput: {
				name: 'city',
				id: 'city'
			},
			hideProvinceInput: {
				name: 'province',
				id: 'province'
			}

		});
		cityPicker.init();

		$(function() {
			//日期
			$('#date').date_input();
			//选中filter下的所有a标签，为其添加hover方法，该方法有两个参数，分别是鼠标移上和移开所执行的函数。
			$("#filter a").hover(
				function() {
					$(this).addClass("seling");
				},
				function() {
					$(this).removeClass("seling");
				}
			);

			//选中filter下所有的dt标签，并且为dt标签后面的第一个dd标签下的a标签添加样式seled。(感叹jquery的强大)
			$("#filter dt+dd a").attr("class", "seled");
			/*注意：这儿应该是设置(attr)样式，而不是添加样式(addClass)，
			                                                     不然后面通过$("#filter a[class='seled']")访问不到class样式为seled的a标签。*/

			//为filter下的所有a标签添加单击事件
			$("#filter a").click(function() {
				$(this).parents("dl").children("dd").each(function() {
					//下面三种方式效果相同（第三种写法的内部就是调用了find()函数，所以，第二、三种方法是等价的。）
					//$(this).children("div").children("a").removeClass("seled");
					//$(this).find("a").removeClass("seled");
					$('a', this).removeClass("seled");
				});

				$(this).attr("class", "seled");

				//				alert(RetSelecteds()); //返回选中结果
			});
			//返回选中结果
		});

		function RetSelecteds() {
			var result = "";
			$("#filter a[class='seled']").each(function() {
				result += $(this).html() + "\n";
			});
			return result;
		}
		//		$('#date').click(function(){
		//				alert(RetSelecteds()+$('#date').val()+$('#city').val());
		//			})
		$('.px .hot').click(function() {
			$('.px .hot').css('background-color', '#ff5c5d');
			$('.px .new').css('background-color', '#999999');
		})
		$('.px .new').click(function() {
			$('.px .new').css('background-color', '#ff5c5d');
			$('.px .hot').css('background-color', '#999999');
		})
		//		下拉菜单
		$('#select-yfb').hover(function() {
			$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(180deg)');
			$('.select-yfb').stop().animate({
				height:'150px'
			}, 300);
		},function(){
				$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(0deg)');
			$('.select-yfb').stop().animate({
				height:'0px'
			}, 300);
		});
		$('#select-xx').hover(function() {
			$('.select-xx').stop().animate({
				height:'75px'
			}, 300);
		},function(){
			$('.select-xx').stop().animate({
				height:'0px'
			}, 300);
		});
	</script>

</html>