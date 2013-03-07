<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>jQuery和CSS3实现Android Dock效果</title>
    <meta name="description" content="Tutorial : Creating Android Dock Using jQuery & CSS3">    
    <?php echo CHtml::cssFile('/css/demo.css'); ?>
</head>
<body>
<!--    <div id="container">
        <div id="adsense2" style="width:730px;margin:10px auto">
            <script type="text/javascript">
                google_ad_client = "ca-pub-0107013120141921";
                /* demo页面横幅广告 */
                google_ad_slot = "4192399144";
                google_ad_width = 728;
                google_ad_height = 90;
                //
            </script>
            <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </div>
        <div id="adsense" style="width:730px;margin:10px auto">
            <script type="text/javascript">/*demo页面横幅*/ var cpro_id = 'u956777';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
        </div>
        <div style="width:700px;margin:10px auto 20px auto;padding:0 0 0 380px;overflow:hidden">
            <iframe src="http://demo.itivy.com/include/follow.html" frameborder="0" scrolling="auto"  marginwidth="0" marginheight="0" allowtransparency="true" width="645px" height="35px"></iframe>
            Baidu Button BEGIN 
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare" style="margin:10px 0 0 -4px">
                <a class="bds_tsina"></a>
                <a class="bds_tqq"></a>
                <a class="bds_renren"></a>
                <a class="bds_qzone"></a>
                <a class="bds_douban"></a>
                <a class="bds_xg"></a>
                <span class="bds_more">更多</span>
                <a class="shareCount"></a>
            </div>
            <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours
                ();
            </script>
            Baidu Button END 
        </div>

        <div style="display: none">
            <script language="javascript" type="text/javascript" src="http://js.users.51.la/4473358.js"></script>
            <script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fadd0db9dee36c7a9b64141788e26de72' type='text/javascript'%3E%3C/script%3E"));

            </script>
            
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-21395429-1']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
        </div>
        <span id="information" style="display:none">Your browser doesn't support CSS3 3D Transform</span>

    </div>  -->
    <div id="dock-wrapper">
        <div class="dock">
            <div class="dock-front">
                <img src="/images/arrow-up.png" alt="Arrow Up" id="arrow-up" />
            </div>
            <div class="dock-top">
                <img src="/images/arrow-down.png" alt="Arrow Down" id="arrow-down" />
            </div>
        </div>
        <div class="item">
            <img src="images/launcher-pro.png" width="60" />
            <img src="images/2do.png" width="60" />
            <img src="images/antivirus.png" width="60" />
            <img src="images/drive.png" width="60" />
            <img src="images/plex.png" width="60" />
            <img src="images/maps.png" width="60" />
        </div>
    </div>

    <img src="images/arrow.png" alt="arrow" id="arrow" />

    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
    <script src="/js/demo.js"></script>
    <script src="/js/dock.js"></script>
    <script> if(!Modernizr.csstransforms3d) document.getElementById('information').style.display = 'block'; </script>
    <!-- GA -->
<!--    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-2260508-2");
            pageTracker._trackPageview();
        } catch(err) {}</script>-->
    <!-- GA -->
</body>
</html>