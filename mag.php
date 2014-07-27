<?php include "head.php"; ?>
  <link type="text/css" rel="stylesheet" href="./css/channel.css">
  <div id="header">
    <?php include "toptitle.php"; ?>
  </div>

  <div class="main book">
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
            <a href="http://www.ebrun.com/retail/" class="list_title">电子杂志</a>
          </dt>
        </dl>
      </div>
      <div class="clear"></div>


      <div class="banner">
        <h1 class="heading">互联网产品经理必读书单</h1>
        <div class="a1">
          <h2 class="dy">导语</h2>
          <p>产品经理更应该是通才，在市 场 、设计、项目、管理、用户、统计、心理、技术等多方面均要有所涉猎，作为一名互联网产品经理必须要保存持续学习的，而多看相关书籍并不断总结实践则成为学习提升的一个重要途径，下面这些书应该是想要成为一名产品经理或已是产品经理需要提高的都值得一读!!!</p>
        </div>
        <div class="a2"></div>
      </div>

      <div class="con_list">

        <?php for($i=0; $i<10;$i++){ ?>
        <div class="span2">
          <a href="#">
            <img title="失控-全人类的最终命运和结局" alt="失控-全人类的最终命运和结局"
                 src="http://www.yixieshi.com/uploads/140530/1-140530163P32S.jpg">
          </a>
          <div class="caption">
            <h3>失控-全人类的最终命运和结局</h3>
            <p>张小龙的书单--微信产品经理人手一本</p>
          </div>
        </div>
        <?php } ?>


      </div>


    </div><!--max_width-->
  </div><!--main-->



<?php include "foot.php"; ?>