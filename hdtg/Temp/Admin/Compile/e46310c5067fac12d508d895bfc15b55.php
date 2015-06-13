<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AC37be9efe7459c38f04c34a964155a2"></script>
<title>地址解析</title>
</head>
<body>
<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
// 创建地址解析器实例
var myGeo = new BMap.Geocoder();
// 将地址解析结果显示在地图上,并调整地图视野
myGeo.getPoint("北京市海淀区上地10街", function(point){
	alert(JSON.stringify(point));
}, "北京市");
</script>
