function setHome(obj,url){
  try{
    obj.style.behavior='url(#default#homepage)';
    obj.setHomePage(url);
  }
  catch(e){
    if(window.netscape) {
      try {
        netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
      }
      catch (e) {
        alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
      }
      var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
      prefs.setCharPref('browser.startup.homepage',url);
    }
    else{
      alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
    }
  }
}

(function($){
  $(function(){

    $(".top_hover_menu").hover(function(){
      $(this).addClass("active");
    },function(){
      $(this).removeClass("active");
    });

    //banner pics
    if(!!$("#banner_marqueew")[0]){
      new Marquee({
          MSClassID : "banner_marqueew",
          ContentID : "banner_marquee",
          TabID	  : "rubycon_ul",
          TabEvent  : "onclick",
          Direction : 2,
          Step	  : 0.1,
          Width	  : 560,
          Height	  : 260,
          Timer	  : 20,
          DelayTime : 3000,
          WaitTime  : 3000,
          ScrollStep: 560,
          SwitchType: 0,
          AutoStart : 1
        })
    }

    if(!!$("#martab1w")[0]){
      new Marquee({
        MSClassID : "martab1w",
        ContentID : "martab1",
        TabID	  : "martab1_c",
        TabEvent  : "onclick",
        Direction : 2,
        Step	  : 0.1,
        Width	  : 250,
        Height	  : 100,
        Timer	  : 20,
        DelayTime : 5000,
        WaitTime  : 5000,
        ScrollStep: 250,
        SwitchType: 0,
        AutoStart : 1
      })
    }

    if(!!$("#martab2w")[0]){
      new Marquee({
        MSClassID : "martab2w",
        ContentID : "martab2",
        TabID	  : "martab2_c",
        TabEvent  : "onclick",
        Direction : 2,
        Step	  : 0.1,
        Width	  : 250,
        Height	  : 100,
        Timer	  : 20,
        DelayTime : 5000,
        WaitTime  : 5000,
        ScrollStep: 250,
        SwitchType: 0,
        AutoStart : 1
      })
    }

    if(!!$("#martab3w")[0]){
      new Marquee({
        MSClassID : "martab3w",
        ContentID : "martab3",
        TabID	  : "martab3_c",
        TabEvent  : "onclick",
        Direction : 2,
        Step	  : 0.1,
        Width	  : 250,
        Height	  : 100,
        Timer	  : 20,
        DelayTime : 5000,
        WaitTime  : 5000,
        ScrollStep: 250,
        SwitchType: 0,
        AutoStart : 1
      })
    }

    if(!!$("#btnboxw")[0]){
      var btnboxw = new Marquee({
        MSClassID : "btnboxw",
        ContentID : "btnbox",
        Direction : 2,
        Step	  : 0.1,
        Width	  : 280,
        Height	  : 180,
        Timer	  : 20,
        DelayTime : 5000,
        WaitTime  : 1000,
        ScrollStep: 280,
        SwitchType: 0,
        AutoStart : 1
      })
      $("#abtnok .pre").click(function(e){
        btnboxw.Run(3)
        $("#abtnok .num").html(btnboxw.Counter);
      });
      $("#abtnok .nxt").click(function(e){
        btnboxw.Run(2)
        $("#abtnok .num").html(btnboxw.Counter);
      });
    }


  });
})(jQuery);