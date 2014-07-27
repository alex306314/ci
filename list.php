<?php include "head.php"; ?>
<link type="text/css" rel="stylesheet" href="./css/channel.css">
<div id="header">
<?php include "toptitle.php"; ?>
</div>

<div class="main">
  <div class="max_width">
    <ul class="channel_menu">
      <li>
        <?php for($i=0;$i<5;$i++){ ?>
        <a href="http://www.ebrun.com/b2c/">B2C</a>|
        <a href="http://www.ebrun.com/b2b/">B2B</a>|
        <a href="http://www.ebrun.com/c2c/">C2C</a>
        <?php } ?>
      </li>
    </ul>
    <div class="clear"></div>
    <div style="height: auto; margin: 15px 0 0 0;" class="ebrun_action" id="ebj_0">
      <a href="" target="_blank" rel="nofollow">
        <img width="960" height="90" border="0" alt="" src="./images/sample_top.jpg">
      </a>
    </div>

    <div class="channltitle">
      <dl>
        <dt class="litidt">
          <a href="http://www.ebrun.com/retail/" class="list_title">品牌聚焦</a>
        </dt>
        <dd>
          <a title="首页" href="http://www.ebrun.com/retail/" class="currenta currentfirst">首页</a>
          <a title="商超" href="http://www.ebrun.com/retail/supermarket/">商超</a>
          <a title="百货" href="http://www.ebrun.com/retail/gm/">百货</a>
          <a title="国际零售商" href="http://www.ebrun.com/retail/intl/">国际零售商</a>
          <a target="_blank" title="零售数据" href="http://www.ebrun.com/data/retail/">零售数据</a>
          <a title="其他" href="http://www.ebrun.com/retail/more/">其他</a>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <div class="list_marquee">
      <div class="w" id="list_marqueew">
        <ul id="list_marquee">
          <?php for($i=0; $i<12;$i++){ ?>
          <li>
            <a class="cw" href="#">
              <img src="./images/sample_01.jpg">
              <span class="bgs"></span>
              <span class="txt">可只是传说</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="clear" style="height:15px;"></div>
      <ul id="list_marqueet">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div class="clear"></div>
    </div>

    <div class="clear hr"></div>

    <div class="warp_left">


      <dl class="channeldl channelcurrent">
        <h2>今日头条</h2>
        <h3><a target="_blank" title="步步高拟投10亿于川自建500亩物流中心" href="http://www.ebrun.com/20140722/105151.shtml">步步高拟投10亿于川自建500亩物流中心</a></h3>
        <dd>
          <a target="_blank" title="步步高15.8亿购南城百货" href="http://www.ebrun.com/20140512/98777.shtml">步步高15.8亿购南城百货</a>
          <font>|</font>
          <a target="_blank" title="拟设立支付公司" href="http://www.ebrun.com/20140513/98914.shtml">拟设立支付公司</a>
          <font>|</font>
          <a target="_blank" title="年中庆销售近7.8亿 同增六成" href="http://www.ebrun.com/20140702/103202.shtml">年中庆销售近7.8亿 同增六成</a>
        </dd>
      </dl>

      <div class="ad">
        <a>
          <img src="./images/sample_717.jpg" width="640" height="90">
        </a>
      </div>

      <?php for($i=0;$i<4;$i++){ ?>
      <dl class="channeldl">
        <h3><a target="_blank" href="">电商插足便利店 或实现社区O2O商业生态圈</a></h3>
        <div class="h3b">
          <span class="date">2014-07-10</span>
          <span class="icon"></span>
          <span class="tip">有趣的事</span>
        </div>
        <dt>
          <a target="_blank" href="">
            <img width="150" src="http://imgs.ebrun.com/resources/2014_07/2014_07_22/20140722_1406016534257.jpg">
          </a>
        </dt>
        <dd class="shortdd">对于社区来说，O2O模式解决了社区商业“最后一公里”的问题，实现了线上商业和线下服务的互补，把消费送到居民家门口。</dd>
        <div class="dlb">
          <span class="tipk icon"></span>
          <span class="txt">无节操的一些事</span>
        </div>
      </dl>
      <?php } ?>

      <p class="pub_page01">
        <span>1</span>
        <a href="more.php?page=2">2</a>
        <a href="more.php?page=3">3</a>
        <a href="more.php?page=4">4</a>
        <a href="more.php?page=5">5</a>
        <a class="ebdet_sl">&nbsp;</a>
        <a href="more.php?page=188">188</a>
        <a rel="nofollow" class="ebdet_next" href="more.php?page=2">&nbsp;</a>
      </p>

    </div><!--left-->

    <div class="channel_rig">
      <?php include "list_side.php"; ?>
    </div><!--channel_rig-->


  </div><!--max_width-->
</div><!--main-->



<?php include "foot.php"; ?>