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

  <!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> <?php echo ($name); ?> - 靠谱投</title>
  <link rel="stylesheet" href="/crowdfunding/Public/css/base-a3766ee23b.css">
  <link rel="stylesheet" href="/crowdfunding/Public/bower/magnific/magnific-popup.css">
  <link rel="stylesheet" href="/crowdfunding/Public/bower/video-js/video-js.min.css">
  <link rel="stylesheet" href="/crowdfunding/Public/css/project-detail-e182626ffb.css">

</head>
<div class="container">
    <div class="project-info">
      
      <div class="financing-info clearfix">
        <div class="project-image">
          <img src="">
          <div class="hidden phone-show mobile-actions clearfix">
            <a class="star-btn fl" data-stared="False" href="javascript:void(0);" data-url="/project/50850055/collection/"><span class="icon-star"></span><span class="star-info">关注 </span><span class="star-number">107</span></a>
            <span class="page-views fl" title="浏览数"><span class="icon-eyes"></span><span>8050次 浏览</span></span>
            <a class="fr" href="/help/investor" target="_blank"><span class="icon-doubt"></span></a>
            <a class="share-btn fr hidden" href="javascript:void(0);"><span class="icon-share"></span></a>
          </div>
        </div>
        <div class="financing-area">
          
          <div class="short-intro">
            <h2 class="p-name">很久以前</h2>
            <p class="p-brief"><span class="p-location"><span class="icon-location"></span>上海市, 长宁区</span>只是家串店</p>
          </div>
          
            <div class="progress">
              <div class="progress-bar" style="width:55.00%;"></div>
            </div>
            <ul class="f-detail clearfix">
              <li class="f-stock">
                <strong class="number">55%</strong>
                <span class="label">融资进度</span>
              </li>
              <li class="f-money">
                <strong class="number">3,300,000</strong>
                <span class="label">项目总额</span>
              </li>
              <li class="f-complete-money">
                <strong class="number">1,815,000</strong>
                <span class="label">已融资</span>
              </li>
              
              <li class="f-day">
                <strong class="number"><span>18</span><small>天</small></strong>
                <span class="label">剩余时间</span>
              </li>
              
            </ul>
            <div class="f-actions clearfix">
              
              <a class="pledge-btn btn btn-primary" href="/project/50850055/pledge">现在认购</a>
              
          
              <div class="other-btns">
                <a class="star-btn" data-stared="False" href="javascript:void(0);" data-url="/project/50850055/collection/"><span class="icon-star"></span><span class="star-info">关注</span><span class="star-number">107</span></a>
                <a href="/help/investor" target="_blank"><span class="icon-doubt"></span>投资须知</a>

                <a class="share-btn" href="javascript:void(0);"><span class="icon-share"></span>分享</a>
                <span class="page-views" title="浏览数"><span class="icon-eyes"></span>8050次 浏览</span>
              </div>
            </div>

        </div>
      </div>
    </div>

    <div class="sub-nav-wrap">
      <div class="sub-nav-inner">
        <div class="sub-nav">
          <div class="tabs-nav">
            <div class="tabs-tab">
              <a class="active" href="#description">项目介绍</a>
            </div>
            <div class="tabs-tab">
              <a href="#past-data">过往经营数据</a>
            </div>
            <div class="tabs-tab">
              <a href="#funding-plan">融资方案</a>
            </div>
            <div class="tabs-tab">
              <a href="#shareholder-right">股东特权及选拔标准</a>
            </div>
            <div class="tabs-tab">
              <a href="#risk">投资风险</a>
            </div>
            <span class="tabs-active-bar"></span>
          </div>
          
            
            <a class="pledge-btn btn btn-primary" href="/project/50850055/pledge">现在认购</a>
            
          
        </div>
      </div>
    </div>
    
    <div class="project-detail-wrap">
      <section class="tab-section description" id="description">
        
        <div class="card video-card">
          <video id="project-video" class="video-js vjs-default-skin"
            controls preload="none" poster="http://resource.kaoputou.com/Fm5aOJ7kkY8FcOiTGpo9P1hir87o"
            data-setup='{}'>
            <source src="http://7xll0v.media1.z0.glb.clouddn.com/henjiuyiqian-1280-v2.mp4" type='video/mp4' />
           <p class="vjs-no-js">请开启javascript功能</p>
          </video>
        </div>
        
        <div class="card">
          <h3>项目介绍</h3>
          <div class="card-content intro-images">
            <p><img src="http://resource.kaoputou.com/FjpIVf53snxQCkGHOi8vdf_temcG" /><br></p>
            <h4>很久以前 | 只是家串店</h4>
            <p>很久以前，水里有许多鱼，天空有许多鸟，地上有许多动物，树上有许多果实，那时候还没有火，生鱼生肉吃起来味道并不好，严重的弄不好还要闹肚子生病。</p>
            <p>突然有一天，雷电引起森林自然火灾，烧死了许多动物，果实也烧没了，人们只好捡起来烧焦的动物和果实来吃，发现味道吃起来比生的香多了，而且吃完肚子很舒服，这就是人类第一次吃到的美味烧烤。<br></p>

            <h4>很久以前 | 公司成立</h4>
            <p>2008年4月28日在北京顺义开了第一家只有10张桌，面积不足100平米的小店，总投资6万元；<br>
            经过6年的努力，我们将一个6万元的烤串店变成了市值6个亿的公司，整整翻了1万倍，成为全国烧烤的第一名；<br>
            公司定位只是家串店，做烧烤行业的第一名！与全体狠人、前串儿、合作商、投资人共同打造全球第一品牌烧烤。<br></p>

            <h4>很久以前 | 公司愿景</h4>
            <p><embed src="http://static.video.qq.com/TPout.swf?vid=p01685vjn6d&auto=0" allowFullScreen="true" quality="high" width="622" height="518" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><br><br></p>

            <h4>很久以前 | 菜品展示</h4>
            <p><img src="http://resource.kaoputou.com/Fp6h6qgwXBx9bnLPruiJ13xxifwZ" /><br></p>
            <p><img src="http://resource.kaoputou.com/Fo7hqVp2kAfP9hb6kP6NrGzwjKAk?imageMogr2/thumbnail/!622x335r/gravity/center/crop/622x335/" /><br></p>


            <h4>很久以前 | 环境展示</h4>
            <p>
            <img src="http://resource.kaoputou.com/FmaOSqE6FkSbTO9Qdjdm12g0ZpX_" />
            <img src="http://resource.kaoputou.com/FrhKxxUtaKPrd1nJv7urRBpRdxqE" />
            <img src="http://resource.kaoputou.com/FnIbrSsnSSSqSRRCNyAbG0BjQjxP" />
            <img src="http://resource.kaoputou.com/Fp8Ytt_Xco2Q-4NIeeQN8Kcq6uXt" />
            <img src="http://resource.kaoputou.com/FveKRKls0ZPUE6LSaXvcM8I8v1LU" />
            <img src="http://resource.kaoputou.com/Fsh4SIoKW-8qT2aAZYV460kdC3lt" />
            <img src="http://resource.kaoputou.com/Fumhe_Jr3jqvehDXIH1iXBq2qkXI" />
            <img src="http://resource.kaoputou.com/Fl_p1sESRsTjJX_rYHKZQpdvje7f" />
            <br></p>

            <h4>很久以前 | 核心成员</h4>
            <p>董事长：宋吉</p>
            <p>总裁：谭浩<br>
            <p>副总裁：郝建生</p>
            <p>中心负责人：<br>
            财政中心-曹春梅、人资中心-张鹏、市场中心-孙霏、产品中心-宋庆、供应链中心-杜鹏、形象中心-王亮、营销管理中心-李鸿鹏</p>
            <p>运营：<br>
            北京区中区总监-刘允路、中原区总监-赵立国、上海区总监-吴春雨<br>
            北京一区总监-赵磊、二区总监王国瑞、三区总监-韦松、四区总监：李艳阳、五区总监-侯千祥<br></p>
            <p><img src="http://resource.kaoputou.com/FlPoX4JlaqVVvfUXQneAASeX6Ekq" /><br></p>

            <h4>很久以前 | 员工故事</h4>

            <p><embed src="http://static.video.qq.com/TPout.swf?vid=x0168t8trkj&auto=0" allowFullScreen="true" quality="high" width="622" height="518" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><br><br></p>

            <h4>很久以前 | 创始人</h4>
            <p>我是宋吉，我是一个卖烤串的。但是我想把烤串卖到全世界，因为烧烤是人类第一次吃到的熟的食物，并且烧烤是没有国界的食物。<br>
            很多人问我一个串店为什么要叫很久以前，我觉得这个名字是上天赐给我的，当年去工商注册名字的时候，突然奇想脑子里冒出了很久以前这几个字，我就觉得我这辈子和这几个字就再也分不开了。我有我的梦想，我的梦想是开10000家很久以前。我觉得这件事已经够我付出我的一生去拼搏和努力了。我和我的团队把公司的logo纹在了身上，这就是一群人一辈子都不要去改变的决定了。<br>
            我是宋吉，我还在路上。</p>
          </div>
        </div>
        <div class="person-card card" id="person">
          <h3>项目方</h3>
          <div class="card-content person-info-wrap">
            <div class="person-info">
              <img class="person-avatar" src="http://avatar.kaoputou.com/FvVOrGIYFyOeLJJud01Lik3-d2G2?imageMogr2/thumbnail/!120x120r/gravity/center/crop/120x120/" alt="宋吉" title="宋吉">
              <p class="person-intro">
                <span class="person-name">宋吉</span>
                <span class="person-position">北京很久以前餐饮管理有限公司|董事长</span>
              </p>
            </div>
            <p>好多人问我，为什么从事烧烤这个行业？我会告诉他两个字——「天意」。我觉得我天生就是来干这件事情的，我会用我的一生来经营烧烤事业，直至生命结束。很久以前是我的第一次创业，也是我的最后一次创业。</p>
          </div>
        </div>
      </section>

      <section class="tab-section past-data" id="past-data">
        <div class="card">
          <h3>已有门店及部分经营数据</h3>
          <div class="card-content">
            
              <div class="unlock-info">
                <span class="icon-lock"></span>
                <p>请先认证成为投资人，然后才能查看经营数据</p>
                <a class="btn btn-primary" href="/user#/setting/approve">认证投资人</a>
              </div>
            
          </div>
        </div>
      </section>

      <section class="tab-section funding-plan" id="funding-plan">
        <div class="card">
          <h3>开店计划</h3>
          <div class="card-content">
            <div class="shop-plan">
              <table>
                <tbody>
                  <tr>
                    <td>预期融资开店数量：</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>开店时间预备周期：</td>
                    <td>70天</td>
                  </tr>
                  <tr>
                    <td>预期店面地址：</td>
                    <td>上海</td>
                  </tr>
                  <tr>
                    <td>签约年限：</td>
                    <td>5-8年</td>
                  </tr>
                  <tr>
                    <td>预期开业时间：</td>
                    <td>2015年12月</td>
                  </tr>
                  <tr>
                    <td>预备装修迭代周期：</td>
                    <td>5-8年</td>
                  </tr>
                  <tr>
                    <td>预期第一次分红时间：</td>
                    <td>2016年1月</td>
                  </tr>
                  <tr>
                    <td>关键性风险：</td>
                    <td>碳烤面临办证难的政策风险</td>
                  </tr>
                  <tr>
                    <td>第一年预计盈利：</td>
                    <td>总投资额40-55%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>融资需求</h3>
          <div class="card-content">
            <div class="funding-requirement">
              <table class="base-info">
                <tr>
                  <td>开店项目总额 <span><strong>330</strong>万元</span></td>
                  <td>每份投资金额<span><strong>2.7</strong>万元</span>，分红占比<span>0.62%</span></td>
                </tr>
              </table>
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>投资金额（万元）</th>
                    <th>出资比例</th>
                    <th>分红比例</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>项目方</td>
                    <td>122.1</td>
                    <td>37%</td>
                    <td>52%</td>
                  </tr>
                  <tr>
                    <td>投资人</td>
                    <td>207.9</td>
                    <td>63%</td>
                    <td>48%</td>
                  </tr>
                  <tr>
                    <td>合计</td>
                    <td>330</td>
                    <td>100%</td>
                    <td>100%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>品牌总部对门店费用分摊方式说明</h3>
          <div class="card-content">
            <ul>
              <li>总部配送结构及费用： 由“上海金文食品有限公司”统一仓储与物流配送，费用为物料成本的4.5%。</li>
              <li>总部管理费用：无</li>
              <li>广告费用：计提营业额的1%-2%</li>
              <li>总部执法队：700元/月</li>
              <li>人员形象费用：计提营业额的0.2%</li>
              <li>每月财务费用：2800—3000元</li>
              <li>活动、培训费用：计提营业额的1.5%</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="tab-section shareholder-right" id="shareholder-right">
        <div class="card">
          <h3>股东特权</h3>
          <div class="card-content">
            <img src="http://resource.kaoputou.com/FrMNhrFmss-04oG1rRvEx1rpFx7g" style="max-width:100%;" />
          </div>
        </div>
        <div class="card">
          <h3>股东选拔标准</h3>
          <div class="card-content">
           <ul>
              <li>城市期望：上海</li>
              <li>年龄期望：18-40岁</li>
              <li>身份期望：</li>
              <ol>
                  <li>1、有传播力，微信朋友数量达到777人</li>
                  <li>2、颜值高/身材好（需经很久以前总部面试）</li>
              </ol>
                  <li>对很久以前的意愿和态度：</li>
                         
              <ol>
                <li>1、我爱很久以前的理由是？</li>
                <li>2、我如果成为很久以前的投资人，我会做什么？</li>
                <li>3、如果投资的门店持续亏损至倒闭，我会怎么办？</li>
              </ol>
            </ul>
          </div>
        </div>
      </section>

      <section class="tab-section risk" id="risk">
        <div class="card risk-notice">
          <h4>风险提示</h4>
          <p>您好，为维护您的利益，请您认购前仔细阅读此条款，确认并知晓众筹股权（不保本金、不承诺投资回报）投资风险，并且能够完全理解投资初创公司可能会带来的风险，认购后您将不能更改投资人姓名，也不能代他人认购和转让他人，只能以您在靠谱投平台上身份认证时提交的身份证号码为准进行投资合同文本签署和工商注册登记办理。</p>
          <p>若认购后申请退出，需与项目方协商达成一致意见，并承担相应违约责任，靠谱投对此不承担责任。</p>
        </div>
        <div class="card">
          <h3>尽调报告</h3>
          <div class="card-content">
            <div class="report-info">
               <h4>【 很久以前尽调报告 】</h4>
               <div class="report-content-wrap">
                 <div class="report-content">
                   <ol>
                     <li><span>1</span>法务方面：<br>
              北京很久以前餐饮管理有限公司（下称“很久以前”）成立于2012年，是依法存续的法人主体，现共有直营店40家，主要分于北京、山东、河南、上海等省份及城市。<br>
              很久以前目前使用的商标已经注册，注册商标有两个，分为文字商标和图形商标，注册商标归很久以前所有，商标权属清晰。</li>
                     <li><span>2</span>财务方面：<br>
              很久以前已经建立了较为完善的财务管理体系，直营店的财务由总部统一核算，通过对直营店抽样测算，投资回报周期为3-5年。</li>
                     <li><span>3</span>业务方面：<br>
              运营流程清晰、制度完善、职责精准、工作标准详尽，已经建立起完善的运营管理体系；所有产品及酱料均已经实现标准化生产与配送，甚至部分产品已经实现外包制作与配送，门店已经基本去厨房化，仅需全力做好营销促销与服务接待即可，业务流程简单明了。</li>
                   </ol>
                 </div>
               </div>


              <h4>【 很久以前风险分析 】</h4>
               <div class="report-content-wrap">
                 <div class="report-content">
                   <ol>
                     <li>很久以前由餐饮经验丰富的管理团队运营，专注烧烤，用最现代的方式传承最原始的饮食方式，定位清晰；主要面向80、90年轻消费群体，目标客户群体精准；菜单结构及定价经过策划及计算，符合餐厅品牌定位及档次级别、符合餐厅运营需求；公司激励政策设置合理，能有效激发员工的工作激情；公司品牌知名度及美誉度均较好，为大众熟知并认可。</li>
                   </ol>
                 </div>
               </div>

              <h4>【 很久以前风控点评 】</h4>
               <div class="report-content-wrap">
                 <div class="report-content">
                   <ol>
                     <li>项目优势：<br>定位精准，团队执行力强，管理运营完善。</li>
               <li>风险点：<br>该项目装修风格新颖，前期投入大，回报周期比同行业长，但该品牌运营能力较强，盈利预期较好。</li>
                   </ol>
                 </div>
               </div>

               <p>北京靠谱筹信息技术有限公司  2015.08.29</p>
              </div>
          </div>
        </div>
      </section>
    </div>

  </div>


<input type="hidden" id="is_logined" value=True>
<input type="hidden" id="is_approved" value=False>
<input type="hidden" id="videojs_swfurl" value="http://static.kaoputou.com/bower/video-js/video-js.swf">


<script src="/crowdfunding/Public/js/base-build-025b44bcea.js"></script>
<script src="/crowdfunding/Public/bower/magnific/jquery.magnific-popup.min.js"></script>
<script src="/crowdfunding/Public/bower/video-js/video.js"></script>
<script src="/crowdfunding/Public/js/jquery.qrcode.min.js"></script>
<script src="/crowdfunding/Public/js/project-detail-build-5613566ec6.js"></script>




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