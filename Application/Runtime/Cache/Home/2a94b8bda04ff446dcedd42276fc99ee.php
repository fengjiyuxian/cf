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

  

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>靠谱投</title>
  
  <link rel="stylesheet" href="/crowdfunding/Public/css/index.css" >
  <link rel="stylesheet" href="/crowdfunding/Public/bower/magnific/magnific-popup.css">
  <link rel="stylesheet" href="/crowdfunding/Public/bower/video-js/video-js.min.css">
</head>
<body>
  <div class="slider-area">
    <ul class="rslides">
      <li>
        <a class="slider-pic" href="javascript:void(0)" style="background-image: url('/crowdfunding/Public/picture/0.jpg')"></a>
      </li>
      <li>
        <a class="slider-pic" href="/about" style="background-image: url('/crowdfunding/Public/picture/1.jpg')">
        </a>
      </li>
      <li>
        <a class="slider-pic" href="" style="background-image: url('/crowdfunding/Public/picture/0.jpg')">
        </a>
      </li>
      <li>
        <a class="slider-pic" href="" style="background-image: url('/crowdfunding/Public/picture/2.jpg')">
        </a>
      </li>
      <li>
        <a class="slider-pic" href="" style="background-image: url('/crowdfunding/Public/picture/1.jpg')">
        </a>
      </li>
      <li>
        <a class="slider-pic" href="" style="background-image: url('/crowdfunding/Public/picture/3.jpeg')">
        </a>
      </li>
    </ul>
  </div>


  <div class="record-info">
      <div class="inner">
        <ul class="clearfix">
          <li class="row"><strong>4</strong>已上线项目</li>
          <li class="completed row"><strong>1,761,000</strong>融资额</li>
          <li class="investors"><strong>2057</strong>投资人</li>
          <li><strong>1</strong>即将上线项目</li>
        </ul>
      </div>
    </div>

  <div class="section">
    <div class="section-header">
      <h2>所有项目</h2>
    </div>
    <ul class="projects">
      
      <?php if(is_array($ongoing_list)): foreach($ongoing_list as $key=>$vo): ?><li class="card">
          <a class="card-head fl" href="#">
            <img src="/crowdfunding/Public<?php echo ($vo["pic"]); ?>">                       
            <span class="p-state state-pledge">正在融资</span>            
          </a>
          <div class="card-body fl">
            <h3><a href="#" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></h3>
            <p class="p-locate"><span class="icon-location"></span><?php echo ($vo["location"]); ?></p>
            <p><?php echo ($vo["des"]); ?></p>
            <!--div class="avatar phone-hidden"><img src="" alt="图片" width="50" height="50"></div-->
            <div class="progress progress-sm">
              <div class="progress-bar" style="width:<?php echo ($vo["per"]); ?>%;"></div>
            </div>
            <ul class="f-detail clearfix">
              <li class="f-stock">
                <strong class="number"><?php echo ($vo["per"]); ?>%</strong>
                <span class="label">融资进度</span>
              </li>
              <li class="f-money">
                <strong class="number"><?php echo ($vo["total"]); ?></strong>
                <span class="label">项目总额（元）</span>
              </li>
              <li class="f-complete-money">
                <strong class="number"><?php echo ($vo["cur"]); ?></strong>
                <span class="label">已融资（元）</span>
              </li>
              <li class="f-day">
                <strong class="number"><span><?php echo ($vo["period"]); ?></span><small>天</small></strong>
                <span class="label">融资周期</span>
              </li>
            </ul>
            
          </div>
        </li><?php endforeach; endif; ?>
      <?php if(is_array($finished_list)): foreach($finished_list as $key=>$vo): ?><li class="card">
          <a class="card-head fl" href="<?php echo U('/home/index/projdetail');?>?id=<?php echo ($vo["id"]); ?>" id="">
            <img src="/crowdfunding/Public<?php echo ($vo["pic"]); ?>">
            
            <span class="p-state state-pre-pledge">完成融资</span>            
          </a>
          <div class="card-body fl">
            <h3><a href="<?php echo U('/home/index/projdetail');?>?id=<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></h3>
            <p class="p-locate"><span class="icon-location"></span><?php echo ($vo["location"]); ?></p>
            <p><?php echo ($vo["des"]); ?></p>
            
            <p class="time-count" data-start-time="<?php echo ($vo["endtime"]); ?>">
              <span class="time-notice">倒计时:</span>
              <span class="time">--天 --小时 --分 --秒</span>
            </p>
            <ul class="f-detail clearfix">
              <li class="f-stock">
                <strong class="number"><?php echo ($vo["ordernum"]); ?></strong>
                <span class="label">众筹人数</span>
              </li>
              <li class="f-money">
                <strong class="number"><?php echo ($vo["total"]); ?></strong>
                <span class="label">项目总额（元）</span>
              </li>
              <li class="f-complete-money">
                <strong class="number"><?php echo ($vo["cur"]); ?></strong>
                <span class="label">完成金额（元）</span>
              </li>
            </ul>            
          </div>
        </li><?php endforeach; endif; ?>
        
      
    </ul>
  </div>
  
  <div class="coming-list-header">
    <h2>即将上线</h2>
  </div>
  <div class="coming-list">
    <div class="inner">
      <div class="coming-slider">
        <div class="slide"><img src="http://static.kaoputou.com/image/img-coming-qingxi.jpg" srcset="http://static.kaoputou.com/image/img-coming-qingxi@2x.jpg 2x"></div>
        <div class="slide"><a href="/raise"><img src="http://static.kaoputou.com/image/img-more-projects.png"></a></div>
        <div class="slide"><a href="/raise"><img src="http://static.kaoputou.com/image/img-more-projects.png"></a></div>
        <div class="slide"><a href="/raise"><img src="http://static.kaoputou.com/image/img-more-projects.png"></a></div>
      </div>
      <a class="coming-slider-controls coming-slider-prev" href="javascript:void(0)"><span class="icon-prev"></span></a>
      <a class="coming-slider-controls coming-slider-next" href="javascript:void(0)"><span class="icon-next"></span></a>
    </div>
  </div>
</body>
</html>


<div class="user-guide">
    <div class="container">
      <article class="invest" role="article">
        <h3>投资靠谱、盈利的餐饮项目</h3>
        <p>靠谱投为投资人提供优质精益的餐饮项目，并为投资人提供专业的投后管理服务。</p>
        <p><a href="/help/investor" class="help-link">如何投资？</a></p>
        
          <p class="action"><a href="/signup" class="btn btn-primary" data-signed-in-href="/invest">注册</a></p>
        
      </article>
      <article class="raise phone-hidden" role="article">
        <h3>有效地融取项目资金</h3>
        <p>靠谱投为餐饮品牌提供融资解决方案，为靠谱餐饮项目低成本、高效率实现融资目标。</p>
        <p><a href="/help/raiser" class="help-link">如何众筹？</a></p>
        <p class="action"><a target="_blank" href="http://kaoputou.mikecrm.com/f.php?t=E0cOwX" class="btn btn-secondary">提交申请</a></p>
      </article>
    </div>
  </div>

  <div id="popup-video" class="popup-default mfp-hide">
    <div class="popup-content">
      <video id="nasdaq-video" class="video-js vjs-default-skin"
        controls preload="none" poster=""
        data-setup='{}'>
        <source src="http://7xll0v.media1.z0.glb.clouddn.com/kpt_bob_interview-1280.mp4" type='video/mp4' />
       <p class="vjs-no-js">请开启javascript功能</p>
      </video>
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