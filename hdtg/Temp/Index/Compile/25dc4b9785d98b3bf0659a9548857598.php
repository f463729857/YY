<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?>	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="http://localhost/hdtg/Public/css/reset.css" type="text/css" rel="stylesheet" >
<link href="http://localhost/hdtg/Public/css/common.css" type="text/css" rel="stylesheet" >
<script type='text/javascript' src='http://localhost/hdtg/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src="http://localhost/hdtg/Public/js/common.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $webInfo['title'];?></title>

</head>
<body>
	<!-- 顶部开始 -->
	<div id="top">
		<div class='position'>
			<div class='left'>
				后盾网，人人做后盾!
			</div>
			<div class='right'>
				<a href="javascript:addFavorite2();">收藏</a>
			</div>
		</div>
	</div>
	<!-- 顶部结束 -->
	<!-- 头部开始 -->
	<div id="header">
		<div class='position'>
			<div class='logo'>
				<a style="line-height:60px;" href="http://localhost/hdtg">后盾团购</a>
				<a style="font-size:16px;" href="http://localhost/hdtg">www.houdunwang.com</a>
			</div>
			<div class='search'>
				<div class='item'>
					<a href="">小时代</a>
					<a href="">KTV</a>
					<a href="">电影</a>
					<a href="">全聚德</a>
				</div>
				<div class='search-bar'>
					<input class='s-text' type="text" name="keywords" value="请输入商品名称，地址等">
					<input class='s-submit' type="submit" value='搜索'>
				</div>
			</div>
			<div class='commitment'>
				
			</div>
		</div>
	</div>
	<!-- 头部结束 -->
	<!-- 导航开始-->
	<div id="nav">
		<div class='position'>
			<!-- 分类相关 -->
			<div class='category'>
				<a class='active' href="http://localhost/hdtg">首页</a>
				<?php if(is_array($nav)):?><?php  foreach($nav as $v){ ?>
					<a  href="<?php echo U('Index/Index/index');?>/cid/<?php echo $v['cid'];?>"><?php echo $v['cname'];?></a>
				<?php }?><?php endif;?>
			</div>
			<!-- 用户相关 -->
			<div id="user-relevance" class='user-relevance'>
				
				<!--登录注册-->
					<div class='user-nav login-reg'>
						<a class='title' href="">注册</a>
					</div>
					<div class='user-nav login-reg'>	
						<a class='title' href="">登录</a>
					</div>
				<!--我的团购 -->	
					<div class='user-nav my-hdtg '>
						<a class='title' href="">我的团购</a>
						<ul class="menu">
							<li><a href="">我的订单</a></li>	
							<li><a href="">我的评价</a></li>
							<li><a href="">我的收藏</a></li>
							<li><a href="">我的成长</a></li>
							<li><a href="">账户余额</a></li>
							<li><a href="">账户充值</a></li>
							<li><a href="">账户设置</a></li>
						</ul>
					</div>
				<!-- 最近浏览 -->	
					<div  class='user-nav recent-view '>
						<a class='title' href="">最近浏览</a>
						<ul class="menu">
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<p class='clear'><a href="">清空最近浏览记录</a></p>
						</ul>
					</div>
					<div  class='user-nav my-cart '>
						<a class='title' href=""><i>&nbsp;</i>购物车</a>
						<ul class="menu">
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><a href="">删除</a></span>
								</div>					
							</li>
							<p class='clear'><a href="">查看我的购物车</a></p>
						</ul>
					</div>
			</div>
		</div>
	</div> 
	<!-- 导航结束 -->
	
<!-- 载入公共头部文件结束 -->
	<link href="http://localhost/hdtg/hdtg/App/Index/Tpl/Public/css/detail.css" type="text/css" rel="stylesheet" >
	<div id="map" class='position'>
		<a href="北京团购">北京团购</a><span>»</span><a href="电影团购">电影团购</a><span>»</span><a href="网票网">网票网</a>
	</div>
	<div id="content" class='position' style="height:3000px;">
		<div class='content-left'>
			<div class="goods-intro">
				<div class='goods-title'>
					<h1>【北京等】COSTA COFFEE</h1>
					<h3>仅售25元！价值36元的COSTA COFFEE手调类饮品1杯（中杯），北京、天津、石家庄、大连、沈阳、哈尔滨、青岛所有门店通用，给你一个爱上COSTA的理由。</h3>
				</div>
				<div class='deal-intro'>
					<div class='buy-intro'>
						<div class='price'>
							<div class='discount-price'>
								<span>¥</span>25
							</div>
							<div class='cost-price'>
								<span class='discount'>3.6折</span>
								门店价<b>¥36</b>
							</div>
						</div>
						<div class='deal-buy-cart'>
							<a href="" class='buy'></a>
							<a href="" class='cart'></a>
						</div>
						<div class='purchased'>
							<p class='people'>
								<span>479</span>人已团购
							</p>
							<p class='time'>
								剩余<span>3</span>天以上
							</p>
						</div>
						<ul class='refund-intro'>
							<li>
								<span class='ico'></span>
								<span class='text'>假一陪十</span>
							</li>
							<li>
								<span class='ico'></span>
								<span class='text'>假一陪十</span>
							</li>
						</ul>
					</div>
					<div class='image-intro'>
						<img src="http://p1.meituan.net/deal/__10119572__2038276.jpg"/>
					</div>
				</div>
				<div class='collect'>
					<a class='collect-link' href=''><i></i>收藏本单</a>
					
					<div class='share'>
						
					</div>
					
				</div>
			</div>
			<div class='detail'>
				<ul class='plot-points'>
					<li class='active'><a href="#shop-site">商家位置</a></li>
					<li><a href="#details">本单详情</a></li>
					<li><a href="#comment">消费评价</a></li>
				</ul>
				<div id="shop-site" class='shop-site'>
					<p class='site-title'>商家位置</p>
					<div class='box'>
						<div class='map'>
							
						</div>
						<div class='info'>
							<h3>戈拿旺巴西烤肉 （海淀店）</h3>
							<dl>
								<dt>地址:</dt>
								<dd>西城区广安门内大街6号枫桦豪景西配楼（菜市口路口）</dd>
							</dl>
							<dl>
								<dt>地铁:</dt>
								<dd>距菜市口站约275米</dd>
							</dl>
							<dl>
								<dt>电话:</dt>
								<dd>010-82133026/82113020</dd>
							</dl>
						</div>
					</div>
				</div>
				<div id="details"  class='details'>
					<img src="http://localhost/hdtg/Public/images/goods.png">
				</div>
				<div id="comment" class='comment'>
					<div class='comment-list-title'>
						<span>全部评价</span>
						<a class='order-time' href="">按时间<i></i></a>
					</div>
					<div class='comment-list'>
						<div class='list-con'>
							<div class='con-top'>
								<span class='username'>sdas</span>
								<span class='time'>评价于:<em>2013-08-04</em></span>
							</div>
							<p>
								说是香草拿铁不是很苦，结果根本不是想象中的味道！像速溶冲调！还要另加五元？有此一说吗？银座店环境一般！
							</p>
						</div>
						
					</div>
					<div class='comment-page'>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
					</div>
				</div>
			</div>
		
		</div>
		<div class='content-right'>
			<div class='recommend'>
				<h3 class='recommend-title'>
					看过本团购的用户还看了
				</h3>
				<div class='recommend-goods'>
					<a class='goods-image' href="">
						<img alt="图像加载失败.." src="http://p0.meituan.net/200.121/deal/__5738304__3391447.jpg">
					</a>
					<h4>
						<a href="">【五道口】上岛咖啡：双人下午茶套餐，美味齐分享</a>
					</h4>
					<p>
						<strong>¥39.8</strong>
						<span class='cost-price'>门店价<del>144</del></span>
						<span class='num'>
							<span>173</span>
							 人已团购
						</span>
					</p>
				</div>
			</div>
		</div>
		
		
		
	</div>		















<!-- 载入公共头部文件开始 --> 
	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?>
	<div id="footer">
		<p>本demo不用于任何商业目的，仅供学习与交流</p>
	</div>
	</body>
</html>
<!-- 载入公共头部文件结束 -->