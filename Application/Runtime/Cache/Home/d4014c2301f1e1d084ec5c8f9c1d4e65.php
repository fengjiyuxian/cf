<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
  <meta name="renderer" content="webkit">
  <meta name="keywords" content="靠谱投, 股权投资, 股权融资, 股权融资平台, 店铺融资, 融资平台, 餐饮投资、餐饮融资、餐饮股权众筹, 餐饮店铺融资, 投资管家, 融资管家, 餐厅管家">
  <meta name="description" content="靠谱投专注同城精益餐饮管家式股权投融资服务。靠谱投为非专业餐饮的投资人找到靠谱、盈利的投资项目，为靠谱的项目找到能够帮助餐厅成长的股东！对于融资方，靠谱投不仅仅为靠谱的项目低成本、高效率实现融资目标，还提供各种融资中与融资后的综合服务，充分挖掘股东投后消费、传播、资源等价值。对于投资人，靠谱投代表投资人监督项目方进行财务监管、保护股东投后权益。">
  <title> 餐饮众筹</title>
  <link rel="stylesheet" href="/crowdfunding/Public/css/base-a3766ee23b.css">
  <link rel="stylesheet" href="/crowdfunding/Public/css/index-87a54b128a.css"> 

  <script type="text/javascript" src="/crowdfunding/Public/js/jquery.js"></script>
  <script type="text/javascript" src="/crowdfunding/Public/js/jquery.min.js"></script>  
  <script type="text/javascript" src="/crowdfunding/Public/js/bootstrap.min.js"></script>
  
</head>


<body>
  
  <header id="header">
    <div class="container clearfix">
      <a href="/" class="logo fl">餐饮众筹</a>
      <div class="mobile-nav fl hidden phone-show">
        <a class="mobile-nav-btn" data-offcanvas="overlay" href="#header-offcanvas">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <div class="offcanvas" id="header-offcanvas">
          <div class="offcanvas-bar">
            <div class="offcanvas-content">
              
                <div class="mobile-auth clearfix">
                  <a class="fl" href="/login?next=/" >登录</a>
                  <a class="fl" href="/signup?next=/">注册</a>
                </div>
              
                <ul class="mobile-nav-list">
                  <li><a class="active index" href="<?php echo U('/home/index/index');?>">首页</a></li>
                  <li><a  href="<?php echo U('/home/index/investlists');?>">投我喜欢</a></li>
                  <li><a  href="/help/guide">新手指南</a></li>
                  
                </ul>
            </div>
          </div>
        </div>       
      </div>
      <nav class="nav-wrap clearfix phone-hidden">
        <ul class="link-nav">
          <li><a class="active index" href="<?php echo U('/home/index/index');?>">首页</a></li>
          <li><a  href="<?php echo U('/home/index/investlists');?>">投我喜欢</a></li>
          <li><a  href="/applyfunding">餐饮融资</a></li>
          <li><a  href="/help/guide">新手指南</a></li>
        </ul>

        <div class="search-wrap fl phone-hidden">
          <form action="/search" method="get">
            <input type="text" name="word" class="search-input" id="search_word" value="" placeholder="搜索项目名称" />
            <span class="icon-search"></span>
            <input class="search-btn" type="submit" value="搜索"></input>
          </form>
        </div>
        
          <ul class="action-nav">
            <li><a href="/login?next=/" >登录</a></li>
            <li><a class="btn-join" href="/signup?next=/">注册</a></li>

          </ul>
      </nav> 
    </div>
  </header>

  <!doctype html>


<link rel="stylesheet" href="/crowdfunding/Public/css/list-1a559822c1.css">
<link rel="stylesheet" href="/crowdfunding/Public/css/investlists.css">
<script type="text/javascript" src="/crowdfunding/Public/js/list-build-f4f3ea3a3e.js"></script>
<div class="container">
		<div class="section">
		    <div class="filter-wrap">
		      <div class="filter-area clearfix">
		        <span class="filter-type fl">按状态</span>
		        <ul class="filter-item-list fl">
		          <li><a href="" class="active">全部</a></li>
		          <li><a href="" >正在预热</a></li>
		          <li><a href="" >正在融资</a></li>
		        </ul>
		      </div>
		      <div class="filter-area clearfix">
		        <span class="filter-type fl">按性质</span>
		        <ul class="filter-item-list fl">
		          <li><a href="" class="active">全部</a></li>
		          
		          <li><a href="" >新店众筹</a></li>
		          <li><a href="" >品牌众筹</a></li>
		          <li><a href="javascript:void(0);" class="disabled tooltipped tooltipped-n" aria-label="即将开通，敬请期待">老店众筹</a></li>
		        </ul>
		      </div>
		      <div class="filter-area clearfix">
		        <p class="filter-type fl">按地区<a class="more-btn hidden phone-show" href="javascript:void(0)"><span class="text">更多</span><span class="icon icon-down"></span></a></p>
		        <ul class="filter-item-list narrow part fl">
		          <li><a href="/invest?type=all&location=all&level=all&state=all" class="active">全国</a></li>
		  




		          <li class="more-btn phone-hidden" ><a href="javascript:void(0)"><span class="text">更多</span><span class="icon icon-down"></span></a></li>
		        </ul>
		      </div>
		    </div>

		    <ul class="projects">
		        

		          <li class="card on-going ">
		            <a class="card-head" href="/project/50850055">
		              <img src="/crowdfunding/Public/picture/0.jpg">
		              
		                <span class="p-state state-pledge">正在融资</span>
		              
		            </a>

		            <div class="card-body" >
		              <h3><a href="#" title="很久以前">很久以前</a></h3>
		              <p class="p-locate"><span class="icon-location"></span>上海市, 长宁区</p>
		              <p>只是家串店</p>

		              <div class="progress-wrap" style="text-align:center">
		                <div class="progress progress-sm">
		                  <div class="progress-bar" ></div>
		                </div>
		                <span class="progress-number"  ><span class="number">53%</span></span>
		              </div>

		              <div class="clearfix p-money">
		                <p class="fl">项目总额 <span>330.00万</span></p>
		                <p class="fr">已融资 <span>176.10万</span></p>
		              </div>
		            </div>
		          </li>
		       

		          <li class="card warm-up ">
		            <a class="card-head" href="/project/24857879">
		              <img src="/crowdfunding/Public/picture/1.jpg">
		              <span class="p-state state-pre-pledge">正在预热</span>
		            </a>

		            <div class="card-body" >
		              <h3><a href="/project/24857879" title="九锅一堂">九锅一堂</a></h3>
		              <p class="p-locate"><span class="icon-location"></span>重庆市, 南岸区</p>
		              <p>石锅川菜开创者</p>

		              <p class="time-count" data-start-time="2015-11-30T16:00:00">
		                <span class="time-notice">倒计时:</span>
		                <span class="time">--天 --小时 --分 --秒</span>
		              </p>

		              <div class="clearfix p-money">
		                <p class="fl">项目总额 <span>180万</span></p>
		                <p class="fr">预约金额 <span>130万</span></p>
		              </div>
		            </div>
		          </li>     
		    </ul>
		</div>
</div>

  

  <footer id="footer">
  <div class="footer-info phone-hidden">
    <div class="inner clearfix">

      <div class="help-links fl">
        <h4>帮助中心</h4>
        <ul class="fl">
          <li><a href="/help/investor">投资人指南</a></li>
          <li><a href="/help/raiser">项目方指南</a></li>
          <li><a href="/help/glossary">名词解释</a></li>
        </ul>
      </div>

      <div class="help-links fl">
        <h4>快速开始</h4>
        <ul class="fl">
          <li><a href="/help/guide">新手指南</a></li>
          <li><a href="/invest">投我喜欢</a></li>
          <li><a href="/raise">发起众筹</a></li>
        </ul>
      </div>

      <div class="qrcodes fl">
        <div class="qrcode fl">
          <img width="120" width="120" src="http://static.kaoputou.com/image/qrcode_for_gzh_1010.png" alt="公众号二维码">
          <span>靠谱投微信公众号</span>
        </div>
        <div class="qrcode fl">
          <img width="120" width="120" src="http://static.kaoputou.com/image/qrcode_for_app_1010.png" alt="应用下载二维码">
          <span>靠谱投移动客户端</span>
        </div>
        
      </div>

      <div class="airline-wrap fr">
        <h4>服务电话</h4>
        <p class="airline">4000-400-177</p>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="inner clearfix">
      <ul class="about-links fl">
        <li class="fl"><a href="/about">关于靠谱投</a></li>
        <li class="fl"><a href="/terms/user">用户服务协议</a></li>
        <li class="fl"><a href="/about#join-us">加入我们</a></li>
        <li class="fl"><a href="/help/guide">帮助中心</a></li>
        
      </ul>
      <p class="icp-info fr"> &copy;2015 <a href="/">靠谱投</a>  京ICP备15039009号</p>
    </div>
  </div>
</footer>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37265556-2', 'auto');
  ga('send', 'pageview');

</script>
  
  <script src="/crowdfunding/Public/bower/ResponsiveSlides/responsiveslides.min.js"></script>
  <script src="/crowdfunding/Public/bower/jquery.bxslider/jquery.bxslider.min.js"></script>
  <script src="/crowdfunding/Public/bower/magnific/jquery.magnific-popup.min.js"></script>
  <script src="/crowdfunding/Public/bower/video-js/video.js"></script>
  <script src="/crowdfunding/Public/js/index-build-d8cb8ec64d.js"></script>

</body>
</html>