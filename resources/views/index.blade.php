<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>国欧网</title>
    <meta name="description" content="国欧网">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/font-awesome.min.css">

    <!-- 字体图标ie7兼容性处理 -->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/static/frontpage/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/global.css">
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/index.css">

    <!--- jQuery -->
    <script src="https://www.700du.cn/static/frontpage/js/jquery.min.js"></script>
    <script src="https://www.700du.cn/static/frontpage/js/jquery.flexslider-min.js"></script>
    <script src="https://www.700du.cn/static/frontpage/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="/static/frontpage/js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="http://7xj8z5.com1.z0.glb.clouddn.com/%28zhaoxi.net%29.png">
</head>

<body>
<!-- 首页头部  -->


<!-- jQuery -->
<!-- colorbox -->
<!--è¿åé¡¶é¨ãè°æ¥é®å·-->


<link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/rightSuspension.css">
<script src="https://www.700du.cn/static/cart/js/ajaxcart.js"></script>

<!-- Validation 表单验证插件-->
<script src="https://www.700du.cn/static/frontpage/js/validation/jquery.validate.min.js"></script>
<script src="https://www.700du.cn/static/js/md5.js"></script>
<!--新版返回顶部-->
<div class="online-wrap">
    <div class="online-fixed">
        <div class="online-tool online-tool-1" onclick="openCustomerService()">
        </div>

        <div class="online-tool online-tool-3" onclick="openCustomerService()">

        </div>
        <div class="online-tool online-tool-4">
            <a>&nbsp;</a>
        </div>
    </div>
</div>


<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?298cb67ad22698d5e0328eef0b272a4c";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?80f766aef233b6332e9a7ad56561626d";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    $('.online-tool').each(function () {
        $(this).hover(
                function () {
                    $(this).find('.r_wrap').stop(true, true).show(200)
                },
                function () {
                    $(this).find('.r_wrap').stop(true, true).hide(200)
                });
    });


    //返回顶部
    //返回顶部js
    $(".online-tool-4").click(function () {
        $("html,body").animate({scrollTop: '0px'}, 300);
    });
    function openCustomerService() {
        window.open("http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=776940&configID=43779&jid=1902871801");
    }
</script>


<div id="simpleTop">
</div>
<script>
    $("#simpleTop").load("/getSimpleTop?productUuid=&keyword=&ranNum=" + Math.random());
</script>


<!-- 头部面包屑 -->


<div id="shop_bd">
    <div id="content">
        <div class="layout_auto">
            <div dropobj="0" class="DragContainer" id="DragContainer1" overclass="OverDragContainer" startwidth="919"
                 startheight="167" startleft="315" starttop="111">
                <div compid="shopNavigation" id="1423038106490" class="DragBox" startwidth="899" startheight="34"
                     startleft="325" starttop="148">


                    <div class="main-serch-container">
                        <div class="container">
                            <h1 class="y_logo">
                                <a href="/" title="700du"><img
                                            src="http://7xj8z5.com1.z0.glb.clouddn.com/%28zhaoxi.net%29.png"
                                            style="width:120px; height:78px"></a>

                            </h1>
                            <!--nav start-->
                            <div class="y_mainnav">
                                <ul class="menu clearfix">


                                    <li class="y_active">

                                        <a href="/dfFront/toStorePage/222e7f84cd7049368ce916d866d03c9c?position=1">


                                            首页</a>
                                    </li>


                                    <li>

                                        <a href="/dfFront/toStorePage/101ad41ffd9249f0ac86af2f56a0f141?position=2">


                                            企业保险</a>
                                    </li>


                                    <li>


                                        <a href="https://www.700du.cn/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e0e8d6d276ea41d4a315da656a2f1e93?position=3">

                                            咨询中心</a>
                                    </li>


                                </ul>
                            </div>
                            <!--nav end-->

                        </div><!-- End .container -->
                    </div>

                    <script>
                        $("ul li a").each(function () {
                            $this = $(this);
                            if ($this[0].href == String(window.location)) {
                                $this.parent().addClass("y_active").siblings().removeClass("y_active");
                            }
                        });

                        function search() {
                            var keyword = $('#keyword').val();
                            if (keyword == "") {
                                $('#keyword').focus();
                                return;
                            }
                            window.location.href = "/front/productList/toStoreProductList?keyword="
                                    + encodeURI(encodeURI(keyword));
                        }
                    </script>

                </div>
                <div compid="homePageUpCategory" id="Item1491382203444" class="DragBox" startwidth="899"
                     startheight="34" style="visibility: visible;">


                    <!--导航-->
                    <div class="container">
                        <div id="main-nav" class="y_categorytree">


                            <div class="y_prudaltc">
                                <ul>


                                    <li>
                                        <dl class="y_pctreedl">
                                            <dt>
                                                <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961"
                                                   target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn/dev1/0/000/004/0000004235.fid" class="normal">
										<img src="http://pic.700du.cn/dev1/0/000/004/0000004230.fid" class="cur">
									</span>船舶保险</a>
                                            </dt>
                                            <dd class="line"></dd>
                                        </dl>
                                        <div class="y_twotc">
                                            <div class="y_twolt">

                                                <dl class="first">
                                                    <dt>
                                                        保障类型
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=21d0e169e4b641dc8b436a8544a53482"
                                                           target="_blank">综合意外</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=5691115968eb46aeb6a9837703fbff47"
                                                           target="_blank">交通意外</a>

                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=2deef93eb73a4124acc0d09471f52e90"
                                                           target="_blank">运输意外</a>


                                                    </dd>
                                                </dl>


                                                <dl class="first">
                                                    <dt>
                                                        按特色分
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=208df2528fd94137915378cf4e2b2347"
                                                           target="_blank">不限社保</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=a028d84d5df8493789c3d48d9b9b71d5"
                                                           target="_blank">百万意外</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=aae151601b5e4a2cac899f091c759f71"
                                                           target="_blank">家庭保障</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagUuid=84cea352d4fd49e6a213ff649c1d2167"
                                                           target="_blank">意外健康</a>


                                                    </dd>
                                                </dl>

                                            </div>
                                            <div class="y_twort">

                                                <a href="http://www.700du.cn/front/product/toProduct/34def9c7d83e430c8c70af559e7a25b7 "
                                                   target="_blank"><img
                                                            src="http://pic.700du.cn//dev1/0/000/026/0000026268.fid"></a>

                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <dl class="y_pctreedl">
                                            <dt>
                                                <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9"
                                                   target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019970.fid" class="normal">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019971.fid" class="cur">
									</span>旅游保险</a>
                                            </dt>
                                            <dd class="line"></dd>
                                        </dl>
                                        <div class="y_twotc">
                                            <div class="y_twolt">

                                                <dl class="first">
                                                    <dt>
                                                        出行地区
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=f18d2e794b7f4afe8ad4935da6ff9ee2"
                                                           target="_blank">境内游</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=597b3259321b4e89baa77d877c1efe12"
                                                           target="_blank">境外游</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=3eddc7be649140569b831a782687442c"
                                                           target="_blank">欧洲</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=ebc7b209ce1e41219092dedb71016f41"
                                                           target="_blank">亚洲</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=768626221c874800923511aa4e1ce963"
                                                           target="_blank">申根签证</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=821f09d3960c42eba96878efc961d8d6"
                                                           target="_blank">美国/加拿大</a>


                                                    </dd>
                                                </dl>

                                                <dl class="first">
                                                    <dt>
                                                        保障特色
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=bc0424ca6bd44c4b839cff198103f084"
                                                           target="_blank">留学/商旅</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=75367ead175e4557938a98d27ee9fb8b"
                                                           target="_blank">高风险运动</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=caa1e5d838fb4c5faf0b63e1a85c6cd4"
                                                           target="_blank">航班延误</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=d0d824a948d44d7e91a008ddd272f127"
                                                           target="_blank">急性病身故</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=869bb63c25f647239f46186c8f432073"
                                                           target="_blank">财产损失</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=bc2f6df2b4b449c4ab211c206996bc60"
                                                           target="_blank">自驾车保障</a>


                                                    </dd>
                                                </dl>

                                            </div>
                                            <div class="y_twort">

                                                <a href="http://www.700du.cn/front/product/toProduct/37a25be5b4684a48a04e98c08bbe43e9 "
                                                   target="_blank"><img
                                                            src="http://pic.700du.cn//dev1/0/000/026/0000026266.fid"></a>

                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <dl class="y_pctreedl">
                                            <dt>
                                                <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf"
                                                   target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019972.fid" class="normal">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019973.fid" class="cur">
									</span>体育赛事保险</a>
                                            </dt>
                                            <dd class="line"></dd>
                                        </dl>
                                        <div class="y_twotc">
                                            <div class="y_twolt">

                                                <dl class="first">
                                                    <dt>
                                                        保障类型
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=bd6e2841682a457ba78f3d5cc162f041"
                                                           target="_blank">重大意外</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=b16b526ab9dc49c499c5ca8cc8291285"
                                                           target="_blank">轻症保障</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=a3e2045e2f154c74b7331eb546f5b346"
                                                           target="_blank">住院医疗</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=208df2528fd94137915378cf4e2b2347"
                                                           target="_blank">不限社保</a>


                                                    </dd>
                                                </dl>

                                                <dl class="first">
                                                    <dt>
                                                        保障人群
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=ad5644669c6645bebcf3f796ad016381"
                                                           target="_blank">少儿健康</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=ca10bc57db1d480b953199580913aca3"
                                                           target="_blank">老人健康</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagUuid=0f31280800164ee383e42f12c97331f4"
                                                           target="_blank">中青年健康</a>


                                                    </dd>
                                                </dl>

                                            </div>
                                            <div class="y_twort">

                                                <a href="http://www.700du.cn/front/product/toProduct/755221da22584763bc7d437da43c154a "
                                                   target="_blank"><img
                                                            src="http://pic.700du.cn//dev1/0/000/026/0000026265.fid"></a>

                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <dl class="y_pctreedl">
                                            <dt>
                                                <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a"
                                                   target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019974.fid" class="normal">
										<img src="http://pic.700du.cn//dev1/0/000/019/0000019975.fid" class="cur">
									</span>人寿保险</a>
                                            </dt>
                                            <dd class="line"></dd>
                                        </dl>
                                        <div class="y_twotc">
                                            <div class="y_twolt">

                                                <dl class="first">
                                                    <dt>
                                                        保障类型
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagUuid=3e84e0fd74bd4cbf9694ad1fe73917a0"
                                                           target="_blank">定期寿险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagUuid=a02c7344ea674eb896f350e4e6149976"
                                                           target="_blank">终身寿险</a>


                                                    </dd>
                                                </dl>

                                                <dl class="first">
                                                    <dt>
                                                        保障特色
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagUuid=0accfbfa63be448a93722cb0ab791ad4"
                                                           target="_blank">疾病身故</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagUuid=fc4a326f47fe45fea77b244e1d317ae7"
                                                           target="_blank">意外身故</a>


                                                    </dd>
                                                </dl>

                                            </div>
                                            <div class="y_twort">

                                                <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=i%25E5%25AE%2588%25E6%258A%25A4 "
                                                   target="_blank"><img
                                                            src="http://pic.700du.cn//dev1/0/000/031/0000031740.fid"></a>

                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <dl class="y_pctreedl">
                                            <dt>
                                                <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547"
                                                   target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn//dev1/0/000/023/0000023371.fid" class="normal">
										<img src="http://pic.700du.cn//dev1/0/000/023/0000023372.fid" class="cur">
									</span>保险公司</a>
                                            </dt>
                                            <dd class="line"></dd>
                                        </dl>
                                        <div class="y_twotc">
                                            <div class="y_twolt">

                                                <dl class="first">
                                                    <dt>
                                                        寿险公司
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E5%25B9%25B3%25E5%25AE%2589%25E5%2581%25A5%25E5%25BA%25B7"
                                                           target="_blank">平安健康</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=ebab21ec87e74088b4f79d94c1eec7fc"
                                                           target="_blank">同方全球</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=cadc71d40ba34e1a9f6374db92653b22"
                                                           target="_blank">人保健康</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=728f7273aee342a4b6a7e2e39dca5374"
                                                           target="_blank">人民人寿</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=d89d47c56545464f819571845c8fbb2d"
                                                           target="_blank">新华人寿</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=c046740b8ebb4fb5b1fbad15da591c93"
                                                           target="_blank">长生人寿</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=11a53f51f36e4ab3a170cfc0b15c5046"
                                                           target="_blank">中美大都会</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=b78600ffed224ae9b17898e78e675506"
                                                           target="_blank">太平洋人寿</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=ac1593e05ac141a8b8e501b70f72c4f6"
                                                           target="_blank">太平养老</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E8%2592%25B2%25E5%2585%25AC%25E8%258B%25B1"
                                                           target="_blank">泰康人寿</a>


                                                    </dd>
                                                </dl>

                                                <dl class="first">
                                                    <dt>
                                                        财险公司
                                                    </dt>
                                                    <dd>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E6%25B3%25B0%25E5%25BA%25B7%25E5%259C%25A8%25E7%25BA%25BF"
                                                           target="_blank">泰康在线</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=00709791f0cb4f3883818b45f8c58b15"
                                                           target="_blank">苏黎世财险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=747940d6a6ac4c508f9e4dc8659ff649"
                                                           target="_blank">安心财险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=1cebfd90057848cfadc6ccf77f734da7"
                                                           target="_blank">史带财险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=159939c4abb040f0bdfa7ff76b6db593"
                                                           target="_blank">安联财险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=edbe963a94344143bd44442fae35b6cd"
                                                           target="_blank">美亚财险</a>


                                                        <a href="http://www.700du.cn/front/product/toGroupInsuranceInquirePage?position=2"
                                                           target="_blank">国寿财险</a>


                                                        <a href="http://www.700du.cn/front/product/toGroupInsuranceInquirePage?position=2"
                                                           target="_blank">阳光财险</a>


                                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=fd65b483d40144d88a982d2997f71991"
                                                           target="_blank">安盛天平</a>


                                                    </dd>
                                                </dl>

                                            </div>
                                            <div class="y_twort">

                                                <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E8%258B%258F%25E9%25BB%258E%25E4%25B8%2596 "
                                                   target="_blank"><img
                                                            src="http://pic.700du.cn//dev1/0/000/034/0000034388.fid"></a>

                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>


                        </div>
                    </div>
                    <script type="text/javascript">
                        $(".y_prudaltc li").hover(function () {
                            var bz = $(this).position().top;
                            $(this).children(".y_twotc").css("top", "" + -bz + "px");
                            $(this).children(".y_twotc").show();
                        }, function () {
                            $(this).children(".y_twotc").hide()
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="layout layout_auto" id="OneLine1489125299212">
            <div class="DragContainer" id="DragContainer1489125299212" overclass="OverDragContainer" dropobj="0"
                 startwidth="919" startheight="562" startleft="315" starttop="235">
                <div compid="homePageUpSelectionAd" id="Item1489125305677" class="DragBox" startwidth="899"
                     startheight="34" startleft="325" starttop="245">


                    <!--banner切换-->
                    <div class="y_dqslides">
                        <div class="i_banner">
                            <!--平台首页大banner切换广告模块-->
                            <!--banner切换组件-->

                            <div class="flexslider">
                                <ul class="slides">


                                    <li>
                                        <a href="http://www.700du.cn/front/product/toGroupInsuranceInquirePage?position=2"
                                           target="_blank"><img
                                                    src="http://pic.700du.cn//dev1/0/000/025/0000025765.fid"/></a>
                                    </li>


                                    <li>
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E5%25AE%2589%25E5%25BF%2583"
                                           target="_blank"><img
                                                    src="http://pic.700du.cn//dev1/0/000/025/0000025764.fid"/></a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <!--- 平台首页大banner切换广告模块调用插件的js -->
                        <script>
                            $(function () {
                                $('.y_dqslides .flexslider').flexslider({
                                    animation: "slide",
                                    animationLoop: true,
                                    pauseOnAction: false,
                                    pauseOnHover: true,
                                    slideshowSpeed: 4000
                                });
                            });
                        </script>
                    </div>


                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489125544653">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489125544653" overclass="OverDragContainer"
                     dropobj="0" startwidth="919" startheight="548" startleft="315" starttop="764">
                    <div compid="homePageUpSCategory" id="Item1489125556349" class="DragBox" startwidth="899"
                         startheight="34" startleft="325" starttop="774">


                        <div class="container floor floor-promotion">


                            <div class="fp-l">
                                <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E7%25B2%25BE%25E5%25BF%2583%25E4%25BC%2598%25E9%2580%2589"
                                   target="_blank"><img src="http://pic.700du.cn/dev1/0/000/016/0000016178.fid"></a>
                            </div>

                            <div class="fp-m">
                                <div class="clearfix">
                                    <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=597b3259321b4e89baa77d877c1efe12"
                                       class="fp-img-wrap" target="_blank"><img
                                                src="http://pic.700du.cn/dev1/0/000/003/0000003474.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">境外游</div>
			        <span class="fp-img-sub">
			        	
				        	<b class="fp-line-l"></b>感受世界，有我保护<b class="fp-line-r"></b>
			        	
			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagUuid=f18d2e794b7f4afe8ad4935da6ff9ee2"
                                       class="fp-img-wrap" target="_blank"><img
                                                src="http://pic.700du.cn/dev1/0/000/003/0000003472.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">境内游</div>
			        <span class="fp-img-sub">
			        	
			        		<b class="fp-line-l"></b>中华大地，畅想神州<b class="fp-line-r"></b>
			        	
			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/product/toProduct/2635ceea83cf47dfb65de957cccd7743"
                                       class="fp-img-wrap" target="_blank"><img
                                                src="http://pic.700du.cn//dev1/0/000/050/0000050759.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">星享家庭单</div>
			        <span class="fp-img-sub">
			        	
			        		<b class="fp-line-l"></b>一家人的保障<b class="fp-line-r"></b>
			        	
			        </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix mt15">
                                    <a href="http://www.700du.cn/front/product/toProduct/95918143ebef4bcdb1955087a2b6c6af"
                                       class="fp-img-long" target="_blank"><img
                                                src="http://pic.700du.cn//dev1/0/000/050/0000050758.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">e生保2017</div>
			        <span class="fp-img-sub">
			        	
			        		<b class="fp-line-l"></b>300万保障，可续保至99<b class="fp-line-r"></b>
			        			
			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/product/toProduct/755221da22584763bc7d437da43c154a"
                                       class="fp-img-wrap" target="_blank"><img
                                                src="http://pic.700du.cn//dev1/0/000/051/0000051387.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">安联臻爱</div>
			        <span class="fp-img-sub">
			        	
			        		<b class="fp-line-l"></b>600万医疗保障<b class="fp-line-r"></b>
			        			
			        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="layout grid_s2m0" id="OneLine1489125645401">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer14891256454011" overclass="OverDragContainer"
                     dropobj="0" startwidth="622" startheight="512" startleft="612" starttop="1279">
                    <div compid="homePageUpFloor" id="Item1489125670848" class="DragBox" startwidth="602"
                         startheight="34" startleft="622" starttop="1289">


                        <!--楼层商品分类切换组件-->
                        <div class="y_productmc">
                            <ul class="y_flortabtit">


                                <li class="y_active">


                                    商业船舶险
                                </li>


                                <li>


                                    船舶事故险
                                </li>

                            </ul>


                            <div class="y_piclist y_visible">
                                <ul class="y_itemwrap">


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/42b1cc44e210451e895b9232634e2d5c"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051594.fid">

                                        </a>
                                        <a href="/front/product/toProduct/42b1cc44e210451e895b9232634e2d5c"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/37b7b72107ff4af5a8b2879ae936e32d"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051402.fid">

                                        </a>
                                        <a href="/front/product/toProduct/37b7b72107ff4af5a8b2879ae936e32d"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/ddbfc42bb17245a0b78f9e72cb099d68"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/050/0000050764.fid">

                                        </a>
                                        <a href="/front/product/toProduct/ddbfc42bb17245a0b78f9e72cb099d68"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                </ul>

                            </div>


                            <div class="y_piclist">
                                <ul class="y_itemwrap">


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/02d201a561a34c85b731f99a3e477e0b"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051581.fid">

                                        </a>
                                        <a href="/front/product/toProduct/02d201a561a34c85b731f99a3e477e0b"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/ef4accd59db049b29b93cb4a4b2dc07d"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051415.fid">

                                        </a>
                                        <a href="/front/product/toProduct/ef4accd59db049b29b93cb4a4b2dc07d"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/f8f0a83b8a1644b4b88eb59de26465d4"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051357.fid">

                                        </a>
                                        <a href="/front/product/toProduct/f8f0a83b8a1644b4b88eb59de26465d4"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                </ul>

                            </div>


                        </div>
                        <script>
                            $(function () {
                                //楼层商品tab切换
                                $(".y_flortabtit li").mouseover(function () {
                                    $(this).addClass("y_active").siblings().removeClass().parent(".y_flortabtit").nextAll(".y_piclist").eq($(this).index()).addClass("y_visible").siblings(".y_piclist").removeClass("y_visible");
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="DragContainer col_sidebar" id="DragContainer14891256454012" overclass="OverDragContainer"
                 dropobj="0" startwidth="285" startheight="54" startleft="315" starttop="1279">
                <div compid="homePageUpFloorLeft" id="Item1489544220145" class="DragBox" startwidth="265"
                     startheight="34" startleft="325" starttop="1289">


                    <div class="y_catatit"><h2><strong>船舶险</strong></h2></div><!--楼层标题 end-->
                    <div class="DragBox">
                        <!--楼层左广告组件-->
                        <div class="y_forltpic">
                            <div class="florleft_switchad">
                                <img src="http://pic.700du.cn//dev1/0/000/025/0000025771.fid"/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="layout grid_s2m0" id="OneLine1489125649313">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer14891256493131" overclass="OverDragContainer"
                     dropobj="0" startwidth="622" startheight="97" startleft="612" starttop="1801">
                    <div compid="homePageUpFloor" id="Item1489125674943" class="DragBox" startwidth="602"
                         startheight="34" startleft="622" starttop="1811">


                        <!--楼层商品分类切换组件-->
                        <div class="y_productmc">
                            <ul class="y_flortabtit">


                                <li class="y_active">

                                    体育赛事团体险

                                </li>


                                <li>

                                    赛事个人商业险

                                </li>

                            </ul>


                            <div class="y_piclist y_visible">
                                <ul class="y_itemwrap">


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/2909aea61bf347609e6a9c2f0a6df4a4"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051454.fid">

                                        </a>
                                        <a href="/front/product/toProduct/2909aea61bf347609e6a9c2f0a6df4a4"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/078dadc791254df7864ad4cb13c8f172"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/050/0000050541.fid">

                                            </p>
                                        </a>
                                        <a href="/front/product/toProduct/078dadc791254df7864ad4cb13c8f172"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/34497329dcb5412b94e824305f235c0c"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/050/0000050528.fid">

                                        </a>
                                        <a href="/front/product/toProduct/34497329dcb5412b94e824305f235c0c"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                </ul>

                            </div>


                            <div class="y_piclist">
                                <ul class="y_itemwrap">


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/95918143ebef4bcdb1955087a2b6c6af"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051651.fid">

                                        </a>
                                        <a href="/front/product/toProduct/95918143ebef4bcdb1955087a2b6c6af"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/34dc6e5f2b6b4c699f9dc71b50439c03"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051480.fid">

                                        </a>
                                        <a href="/front/product/toProduct/34dc6e5f2b6b4c699f9dc71b50439c03"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                    <li class="y_item1">
                                        <a href="/front/product/toProduct/755221da22584763bc7d437da43c154a"
                                           target="_blank" class="con">
                                            <img class="pic" src="http://pic.700du.cn//dev1/0/000/051/0000051389.fid">

                                        </a>
                                        <a href="/front/product/toProduct/755221da22584763bc7d437da43c154a"
                                           target="_blank" class="price">

                                        </a>

                                    </li>


                                </ul>

                            </div>


                        </div>
                        <script>
                            $(function () {
                                //楼层商品tab切换
                                $(".y_flortabtit li").mouseover(function () {
                                    $(this).addClass("y_active").siblings().removeClass().parent(".y_flortabtit").nextAll(".y_piclist").eq($(this).index()).addClass("y_visible").siblings(".y_piclist").removeClass("y_visible");
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="DragContainer col_sidebar" id="DragContainer14891256493132" overclass="OverDragContainer"
                 dropobj="0" startwidth="285" startheight="164" startleft="315" starttop="1801">
                <div compid="homePageUpFloorLeft" id="Item1489544254410" class="DragBox" startwidth="265"
                     startheight="34" startleft="325" starttop="1811">


                    <div class="y_catatit"><h2><strong>体育赛事险</strong></h2></div><!--楼层标题 end-->
                    <div class="DragBox">
                        <!--楼层左广告组件-->
                        <div class="y_forltpic">
                            <div class="florleft_switchad">
                                <img src="http://pic.700du.cn//dev1/0/000/025/0000025770.fid"/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489126404997">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489126404997" overclass="OverDragContainer"
                     dropobj="0" startwidth="919" startheight="642" startleft="315" starttop="1975">
                    <div compid="homePageUpPartner" id="Item1489126412452" class="DragBox" startwidth="899"
                         startheight="34" startleft="325" starttop="1985">


                        <link rel="stylesheet" type="text/css" href="/static/frontpage/css/index.css">
                        <div class="y_catatit"><h2><strong>合作伙伴</strong></h2></div>
                        <div class="columns-body" id="multipleColumn">
                            <div class="hd">
                                <ul>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="bd">
                                <div class="company-list clearfix">


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=728f7273aee342a4b6a7e2e39dca5374"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025763.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=c046740b8ebb4fb5b1fbad15da591c93"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025761.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/product/toGroupInsuranceInquirePage?position=2"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025759.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E6%2596%25B0%25E5%258D%258E"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025758.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=ebab21ec87e74088b4f79d94c1eec7fc"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025757.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E6%25B3%25B0%25E5%25BA%25B7%25E5%259C%25A8%25E7%25BA%25BF"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025756.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E8%2592%25B2%25E5%2585%25AC%25E8%258B%25B1"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025755.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=ac1593e05ac141a8b8e501b70f72c4f6"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025754.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=edbe963a94344143bd44442fae35b6cd"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025749.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=1cebfd90057848cfadc6ccf77f734da7"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025751.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E8%258B%258F%25E9%25BB%258E%25E4%25B8%2596"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025752.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=b78600ffed224ae9b17898e78e675506"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025753.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=11a53f51f36e4ab3a170cfc0b15c5046"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025747.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=747940d6a6ac4c508f9e4dc8659ff649"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025746.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=fd65b483d40144d88a982d2997f71991"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025745.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagUuid=159939c4abb040f0bdfa7ff76b6db593"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025744.fid" alt="">
                                        </a>
                                    </li>


                                    <li class="company-item fl">
                                        <a href="http://www.700du.cn/front/product/toGroupInsuranceInquirePage?position=2"
                                           title="" target="_blank">
                                            <img src="http://pic.700du.cn//dev1/0/000/025/0000025743.fid" alt="">
                                        </a>
                                    </li>


                                </div>
                            </div>
                        </div>

                        <script>
                            /* 使用js分组，每6个li放到一个ul里面 */
                            jQuery("#multipleColumn .bd li").each(function (i) {
                                jQuery("#multipleColumn .bd li").slice(i * 8, i * 8 + 8).wrapAll("<ul></ul>");
                            });

                            /* 调用SuperSlide，每次滚动一个ul，相当于每次滚动6个li */
                            jQuery("#multipleColumn").slide({
                                titCell: ".hd ul",
                                mainCell: ".bd .company-list",
                                autoPage: true,
                                effect: "leftLoop",
                                autoPlay: true
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489126407204">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489126407204" overclass="OverDragContainer"
                     dropobj="0" startwidth="919" startheight="450" startleft="315" starttop="2627">
                    <div compid="homePageUpMessage" id="Item1489126425347" class="DragBox" startwidth="899"
                         startheight="34" startleft="325" starttop="2637">


                        <!--资讯-->
                        <div class="layout grid_m0">
                            <div class="y_catatit"><h2><strong>资讯</strong></h2></div>
                            <div class="box-bd">
                                <ul class="news-list clearfix">

                                    <li class="news-item">
                                        <div class="figure figure-img">
                                            <a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/40a7822a423545a19e4e15cdfff8168f?categoryUuid=fe5be8e2f1164554947e80c48c4741f0"
                                               target="_blank"><img
                                                        src="http://pic.700du.cn/dev1/0/000/004/0000004045.fid">
								  <span class="recom">
								  	<img src="/static/img/recommend_ico.png">
								  </span>
                                            </a>
                                        </div>
                                        <h3 class="title">明亚优选寿险发布会 </h3>
                                        <p class="desc">升级优选，引领行业风潮</p>
                                    </li>

                                    <li class="news-item">
                                        <div class="figure figure-img">
                                            <a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/6ec71e10964f4fa58507a1332e991315?categoryUuid=fe5be8e2f1164554947e80c48c4741f0"
                                               target="_blank"><img
                                                        src="http://pic.700du.cn/dev1/0/000/004/0000004061.fid">
								  <span class="recom">
								  	<img src="/static/img/recommend_ico.png">
								  </span>
                                            </a>
                                        </div>
                                        <h3 class="title"> 医保全国联网要来了</h3>
                                        <p class="desc">我国养老保险延迟退休方案将适时推出</p>
                                    </li>

                                    <li class="news-item">
                                        <div class="figure figure-img">
                                            <a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/71b593a6ab6f400589e4ce2500673f15?categoryUuid=fe5be8e2f1164554947e80c48c4741f0"
                                               target="_blank"><img
                                                        src="http://pic.700du.cn/dev1/0/000/004/0000004063.fid">
								  <span class="recom">
								  	<img src="/static/img/recommend_ico.png">
								  </span>
                                            </a>
                                        </div>
                                        <h3 class="title">2016保险理赔数据分析</h3>
                                        <p class="desc">数据显示，理赔难已成往事？</p>
                                    </li>

                                    <li class="news-item">
                                        <div class="figure figure-img">
                                            <a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/fc5e7cfbb8b14092b09e23d0425f256f?categoryUuid=fe5be8e2f1164554947e80c48c4741f0"
                                               target="_blank"><img
                                                        src="http://pic.700du.cn/dev1/0/000/004/0000004044.fid">
								  <span class="recom">
								  	<img src="/static/img/recommend_ico.png">
								  </span>
                                            </a>
                                        </div>
                                        <h3 class="title">第三套生命表</h3>
                                        <p class="desc">第三套生命表2017启用，保费是涨是跌？</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--资讯 end-->

                    </div>
                </div>
            </div>
        </div>
        <div class="layout layout_auto" id="OneLine1489126586325">
            <div class="DragContainer" id="DragContainer1489126586325" overclass="OverDragContainer" dropobj="0"
                 startwidth="919" startheight="198" startleft="315" starttop="3044">
                <div compid="homePageUpAdvantage" id="Item1489126589928" class="DragBox" startwidth="899"
                     startheight="34" startleft="325" starttop="3054">


                    <!--我们的优势-->
                    <div class="our-goodness">
                        <div class="container">
                            <img src="http://pic.700du.cn//dev1/0/000/026/0000026080.fid">
                        </div>
                    </div>
                    <!--我们的优势 end-->


                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1491382186986" oldid="OneLine1491382186986">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1491382186986" overclass="OverDragContainer"
                     dropobj="0" startwidth="919" startheight="97" startleft="315" starttop="3209">
                </div>
            </div>
        </div>
        <div class="layout">
            <div dropobj="0" class="DragContainer drag_footer" id="DragContainer6"
                 overclass="OverDragContainer drag_footer" startwidth="919" startheight="82" startleft="315"
                 starttop="3339">
            </div>
        </div>
    </div>
</div>
<!-- 引入登录弹出框 -->

<!-- 加入收藏弹出框 -->
<div class="modal fade y_suscollect" id="modal-collect-form" tabindex="-1" role="dialog">

</div><!-- End 加入收藏弹出框 -->
<!--平台底部帮助中心-->


<!--平台底部帮助中心组件-->
<div class="layout layout_auto">
    <div class="DragContainer">
        <div class="DragBox">
            <!--底部帮助中心-->

        </div><!--底部帮助中心-->
    </div>
</div><!--平台底部帮助中心组件 end-->

<!--底部-->


<!--底部-->
<div class="footer footer-bottom">
    <div class="container">


        <div class="footer-bottom">
            <div class="container footer-friendlink">
                <div class="f_tit">友情链接：</div>
                <div class="f_link"><p><a href="http://www.circ.gov.cn/web/site0/" target="_blank">中国保监会</a><a
                                href="http://www.iachina.cn" target="_blank">中国保险行业协会</a><a
                                href="http://finance.qq.com/money/insurance.htm" target="_blank">腾讯保险</a><a
                                href="http://finance.sina.com.cn/money/insurance/" target="_blank">新浪保险</a><a
                                href="http://insurance.jrj.com.cn/" target="_blank">金融界保险</a><a
                                href="http://finance.ce.cn/" target="_blank">中国经济网财经</a><a
                                href="http://www.suishenbaodian.com/" target="_blank">随身保典</a><a
                                href="http://finance.ifeng.com/" target="_blank">凤凰财经</a><a
                                href="http://www.china-insurance.com/" target="_blank">中国保险网</a><a
                                href="https://700du.tmall.com" target="_blank">明亚天猫旗舰店</a></p></div>
            </div>
            <div class="site-info">
                <div class="container">
                    <div class="info-text fl"><p>Copyright © 2015 - 2020 700度版权所有 京ICP证150775号<br/><a
                                    href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031698"
                                    target="_blank">京公网安备 11010502031698号</a> | 未经许可不得转载</p></div>
                </div>
            </div>
        </div><!--底部商城资讯 end--><!--%@-->
    </div><!-- End .container -->
    </div><!-- End #footer-bottom -->


    <!--返回顶部、调查问卷-->


    <link rel="stylesheet" href="/static/frontpage/css/rightSuspension.css">
    <script src="/static/cart/js/ajaxcart.js"></script>

    <!-- Validation 表单验证插件-->
    <script src="/static/frontpage/js/validation/jquery.validate.min.js"></script>
    <script src="/static/js/md5.js"></script>
    <!--新版返回顶部-->
    <div class="online-wrap">
        <div class="online-fixed">
            <div class="online-tool online-tool-1" onclick="openCustomerService()">
            </div>

            <div class="online-tool online-tool-3" onclick="openCustomerService()">

            </div>
            <div class="online-tool online-tool-4">
                <a>&nbsp;</a>
            </div>
        </div>
    </div>


    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?298cb67ad22698d5e0328eef0b272a4c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?80f766aef233b6332e9a7ad56561626d";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script type="text/javascript">
        $('.online-tool').each(function () {
            $(this).hover(
                    function () {
                        $(this).find('.r_wrap').stop(true, true).show(200)
                    },
                    function () {
                        $(this).find('.r_wrap').stop(true, true).hide(200)
                    });
        });


        //返回顶部
        //返回顶部js
        $(".online-tool-4").click(function () {
            $("html,body").animate({scrollTop: '0px'}, 300);
        });
        function openCustomerService() {
            window.open("http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=776940&configID=43779&jid=1902871801");
        }
    </script>


    <!-- END -->

    <script src="https://www.700du.cn/static/frontpage/js/bootstrap.js"></script>
    <script src="https://www.700du.cn/static/frontpage/js/aebiz_global-0.1.js"></script>
    <script>
        function collectStore(storeUuid) {
            var loginUrl = "/front/productList/isLogin"
            $.get(loginUrl, {ranNum: Math.random()}, function (data) {
                if ("0" == data) {
                    //弹出登录框
                    $("#modal-login-form").modal();
                } else {
                    var url = "/front/productList/collectStore";
                    $.get(url, {"storeUuid": storeUuid, "ranNum": Math.random()}, function (data) {
                        $("#modal-collect-form").text("");
                        $("#modal-collect-form").append(data);
                        $("#modal-collect-form").modal('show');
                    });
                }
            })
        }
    </script>

    <script>

    </script>
</body>
</html>