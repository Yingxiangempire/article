<!DOCTYPE html>
<html>
<head>
    <title>YingxiangEmpire</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0, user-scalable=1"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="layoutmode" content="standard">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="renderer" content="webkit">
    <!--uc浏览器判断到页面上文字居多时，会自动放大字体优化移动用户体验。添加以下头部可以禁用掉该优化-->
    <meta name="wap-font-scale" content="no">

    <meta content="telephone=no" name="format-detection"/>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">

    <link rel="stylesheet" type="text/css" href="/assets/css/a1.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/a2.css" title="default"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/a3.css" title=""/>
    <link rel="stylesheet" id="mobiStyleTemplateCss" type="text/css" href="/assets/css/a4.css"/>
    <!-- //输出模块样式css -->
    <style id='mobiStyleModule'>
    </style>
    <style id='mobiStyleNav' type='text/css'>
        .open .navItem:nth-child(2) {
            transition-delay: 160ms;
        }

        .open .navItem:nth-child(4) {
            transition-delay: 240ms;
        }

        #navbar_104 .icon-navItemIcon:before {
            content: '';
            content: '';
        }

        #navbar_104 .icon-navItemIcon {
            background-image: none;
        }

        .open .navItem:nth-child(6) {
            transition-delay: 320ms;
        }

        #navbar_105 .icon-navItemIcon:before {
            content: '';
            content: '';
        }

        #navbar_105 .icon-navItemIcon {
            background-image: none;
        }

        .open .navItem:nth-child(8) {
            transition-delay: 400ms;
        }

        .open .navItem:nth-child(10) {
            transition-delay: 480ms;
        }

        .open .navItem:nth-child(12) {
            transition-delay: 560ms;
        }

        .open .navItem:nth-child(14) {
            transition-delay: 640ms;
        }
    </style>
    <style id='mobiCubeStyleModule'>
    </style>
    <style id='mobiSearchStyleModule'>
    </style>


    <!-- 输出底部样式 -->
    <style id='fixedAreaBoxStyle'>
    </style>
    <!-- 系统特殊隐藏栏目隐藏头部、banner -->

</head>
<body faiscoMobi="true" id="g_body" class="g_locale2052 mobiCol3">

<script type="text/javascript">

    //html root的字体计算应该放在最前面，这样计算就不会有误差了/
    //2016.3.23 wjq update 之所以要加个判断返回一个20.5，是因为当用户在谷歌等浏览器直接输入手机端网站网址时，如果用户设置模块自定义样式的高度比较小，由于这时候的clientWidth为1920px，及返回的_htmlFontSize为40，这时候就会使模块太小，展示不完全，因此先取一个较为准确的值去展示。Mobi.resetHtmlFontSize()顺便也加了
    var _htmlFontSize = (function () {
        var clientWidth = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
        //if(clientWidth > 768) clientWidth = 768;
        if (clientWidth > 768 && clientWidth < 1280) {
            clientWidth = 768;
        } else if (clientWidth >= 1280) {
            clientWidth = 512;
        }
        document.documentElement.style.fontSize = clientWidth * 1 / 16 + "px";
        return clientWidth * 1 / 16;
    })();

</script>

<div class="webLeft"></div>
<div id="g_web" class="g_web">
    <!-- this is loading  -->
    <div id="webLoading" class="loading" style='display:none;'>
        <div id="splashscreen" class='splashscreen ui-loader'>
            <span class='ui-icon ui-icon-loading spin'></span>
        </div>
    </div>
    <div id="webTopBox" class="webTopBox  ">
        <div id="webTop" class="webTop">

            <div id='navbar' class='navbar navBaseIcon'>
                <div id='navbarList' class='navbarList'>
                    <div 3 id='itemSep_3' class='itemSep'></div>
                    <div id='navItem_3' class='navItem navItem_3 itemSelected icon-navItem'><a href='/article'
                                                                                               _colid='3' id='navbar_3'><span
                                    class='navItemIcon icon-navItemIcon J_fontIcon'></span><span
                                    class='navItemName'>首页</span></a></div>
                    <div 1 id='itemSep_104' class='itemSep'></div>
                    {{--<div id='navItem_104' class='navItem navItem_104  icon-navItem'><a href='/col.jsp?id=104'--}}
                    {{--_colid='104'--}}
                    {{--id='navbar_104'><span--}}
                    {{--class='navItemIcon icon-navItemIcon J_fontIcon'></span><span class='navItemName'>产品展示</span></a>--}}
                    {{--</div>--}}
                    {{--<div 1 id='itemSep_105' class='itemSep'></div>--}}
                    {{--<div id='navItem_105' class='navItem navItem_105  icon-navItem'><a href='/col.jsp?id=105'--}}
                    {{--_colid='105'--}}
                    {{--id='navbar_105'><span--}}
                    {{--class='navItemIcon icon-navItemIcon J_fontIcon'></span><span class='navItemName'>新闻动态</span></a>--}}
                    {{--</div>--}}
                    {{--<div 9 id='itemSep_9' class='itemSep'></div>--}}
                    {{--<div id='navItem_9' class='navItem navItem_9  icon-navItem'><a href='/mb.jsp' _colid='9'--}}
                    {{--id='navbar_9'><span--}}
                    {{--class='navItemIcon icon-navItemIcon J_fontIcon'></span><span--}}
                    {{--class='navItemName'>留言板</span></a></div>--}}
                    {{--<div 1 id='itemSep_103' class='itemSep'></div>--}}
                    <div id='navItem_103' class='navItem navItem_103  icon-navItem'><a href='/article'
                                                                                       _colid='103'
                                                                                       id='navbar_103'><span
                                    class='navItemIcon icon-navItemIcon J_fontIcon'></span><span class='navItemName'>关于我们</span></a>
                    </div>
                </div>
                <div class='navLeft icon-navLeft'></div>
                <div class='navRight icon-navRight'></div>
            </div>

        </div>
    </div>
    <div id="webHeaderBox" class="webHeaderBox  ">
        <div class='navButton' id='navButton'>
            <div class='navButtonPanel'></div>
            <div class='menuNav'>
                <div class='menuNavTip icon-menuNavTip'></div>
            </div>
        </div>
        <div id='headerWhiteBg' class='headerSiteMaskWhiteBg'></div>
        <div id='headerBg' class='headerSiteMaskBg'></div>
        <div id='webHeader' class='webHeader webHeaderBg '>
            <div id='header' class='header' style='padding:0px;'><span class='pageLogo   '
                                                                       style='display:none;visibility:hidden;'
                                                                       id='pageLogo' sid='0' pw='89' ph='127'><div
                            id='pageLogoImg' class='logoImg '
                            style='background-image:url(http://14022018.s21i-14.faiusr.com/2/ABUIABACGAAg3Z-uyQUojL2arAcwWTh-.jpg);background-size: contain;background-position: center;background-repeat: no-repeat;'></div></span><span
                        class='pageTitle' id='pageTitle'>今日势报</span></div>
        </div>
    </div>
    <div id="webBannerBox" class="webBannerBox  ">
        <div id='webBanner' class='webBanner hiddenDefaultBanner'></div>
    </div>
    <div id="webContainerBox" class="webContainerBox">
        <div id="webModuleContainer" class="webModuleContainer">
            @yield('content')
        </div>
    </div>
    <div id="webFooterBox" class="webFooterBox  ">
        <!--图片详情Div -->
        <div id='webFooter' class='webFooter'>
            <div id='footer' class='footer mallThemeFooter'>
                <div class='bottomdiv'>
                    <div class='bottom'>
                        <div class='backtop' onclick='Mobi.scrollToTop("webContainerBox")'>top<b></b></div>
                    </div>
                </div>
                <div class='technical'>
                    <div class='technicalSupport footerInfo'><font face='Arial'>©</font>2017&nbsp;-&nbsp;版权所有</div>
                    <div class='technicalSupport'><a href='http://mjz.faisco.com/?_ta=2508' target='_blank'
                                                     hidefocus='true'>&nbsp;<span class='faisco-icons-logo'></span>映像帝国网络传媒&nbsp;
                        </a>
                        <a class='rep PcVer' href='http://m.faisco.com/ts.jsp?acct=hx13461937'
                           target='_blank' hidefocus='true'>举报</a></div>
                </div>
            </div>

        </div>
        <style id='mobiStyleService' type='text/css'>
        </style>
        <div id='webCustomerServiceBox' class='webCustomerServiceBox' style='display:none;'>
            <div class='customerServiceDiv' id='customerServiceDiv'></div>
        </div>

        <div id="fullScreenDivCotainer" class='fullScreenDivCotainer'></div>
    </div>

    <div id="fixedAreaBox" class="fixedAreaBox fixedAreaBox1006_2" tplid="1006_2">

    </div>


    <!--设置网站的背景颜色  start-->
    <div class="webBackgroundBox  ">
        <div id="webBodyBackground" class="webBackground "></div>
        <div id='navExistOffPanel' class='navExistOffPanel'></div>
    </div>
    <!--设置网站的背景颜色  end-->

    <!-- ------------------------------------------ -->
</div>
<div class="webRight"></div>


<script type="text/javascript" language="javascript">


    //管理态下的预览页面提前作处理 之前这里的g_viewMode先去掉
    if (!false && window.top !== window.self) {
        var g_className = document.getElementById("g_body").className;
        document.getElementById("g_body").className = g_className + " ";
    }

    //用于iframe显示手机模板的时候 给g_web加上width
    var g_webWidth = 0;
    if (g_webWidth == 0) {
        g_webWidth = window.localStorage ? localStorage.getItem("g_webWidth") : Cookie.read("g_webWidth");
        if (g_webWidth != null) {
            document.getElementById("g_web").style.width = g_webWidth + "px";
        }
    } else {
        document.getElementById("g_web").style.width = g_webWidth + "px";
        if (window.localStorage) {
            localStorage.setItem("g_webWidth", g_webWidth);
        } else {
            Cookie.write("g_webWidth", g_webWidth);
        }
    }

</script>


<script type="text/javascript" charset="utf-8" src="/assets/js/a1.js"></script>
<script type="text/javascript" charset="utf-8" src="/assets/js/a2.js"></script>
<script id="mobiOperationJS" type="text/javascript" src="/assets/js/a3.js"></script>
<script type="text/javascript" src="/assets/js/a4.js"></script>


<script type="text/javascript">
    var _faiAjax = function () {
        //for regexp
        var r = /\?/;
        var _o = {
            type: "get",
            url: "",
            data: "",
            error: function () {
            },
            success: function () {
            }
        };
        var _sendRequest = function (o) {
            var xmlhttp = null;
            //init option code
            o.type = o.type || _o.type;
            o.url = o.url || _o.url;
            o.data = o.data || _o.data;
            o.error = o.error || _o.error;
            o.success = o.success || _o.success;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                return;
            }
            //the instructions param takes the form of an eval statement
            if (o.type != "post") {
                o.url += ( this.r.test(o.url) ? "&" : "?" ) + o.data;
                xmlhttp.open("GET", o.url, true);
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        o.success(xmlhttp.responseText);
                    } else if (o.error) {
                        o.error();
                    }
                }
                xmlhttp.send();
            } else {
                xmlhttp.open("POST", o.url, true);
                //Send the proper header information along with the request
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        o.success(xmlhttp.responseText);
                    } else {
                        o.error();
                    }
                }
                xmlhttp.send(o.data);
            }
        }
        return {
            ajax: function (option) {
                try {
                    //此次调用的错误不让抛出给window。防止函数重入
                    _sendRequest(option);
                } catch (e) {
                    //alert(e);
                }
            }
        };
    }();
    var _jsErrCahche = [];
    window.onerror = function (sMsg, sUrl, sLine) {
        if (typeof Mobi == 'undefined') {
            if ((window.DocumentTouch && document instanceof window.DocumentTouch) || 'ontouchstart' in document.documentElement) {
                alert('您的网页未加载完成，请尝试按“刷新”重新加载。');
            } else {
                alert('您的网页未加载完成，请尝试按“CTRL+功能键F5”重新加载。');
            }

        }
        if (sLine < 1 || typeof sMsg != 'string' || sMsg.length < 1) {
            return;
        }

        var log = "Error:" + sMsg + ";Line:" + sLine + ";Url:" + sUrl + ";UserAgent:" + navigator.userAgent;
        var alertLog = "Error:" + sMsg + "\n" + "Line:" + sLine + "\n" + "Url:" + sUrl + "\n";
        var encodeUrl = function (url) {
            return typeof url === "undefined" ? "" : encodeURIComponent(url);
        };

        var ajax = true;
        var obj = {'m': sMsg, 'u': sUrl, 'l': sLine};
        for (var i = 0; i < _jsErrCahche.length; i++) {
            if (_jsErrCahche[i].m == obj.m && _jsErrCahche[i].u == obj.u && _jsErrCahche[i].l == obj.l) {
                ajax = false;
                break;
            }
        }

        if (ajax) {
            _jsErrCahche.push(obj);
            _faiAjax.ajax({
                type: "post",
                url: "ajax/logJsErr.jsp?cmd=jsErr",
                data: 'msg=' + encodeUrl(log)
            });
        }
        if (false) {
            console.log(alertLog);
        }
    };


    if (typeof Fai == 'undefined') {
        Fai = {};
        //解决页面被嵌套在iframe的场景

        Fai.top = window;

    }


    Fai.top._isFaiHost = true;

    Fai.top._bannerData = {
        "showType": 0,
        "bn": 1,
        "b": [{
            "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
            "t": 1,
            "lt": 0,
            "u": "",
            "ide": "",
            "col": 0,
            "aj": "",
            "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!640x640.jpg",
            "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        }],
        "c": [{
            "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
            "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI.jpg",
            "t": 1,
            "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        }],
        "h": false,
        "st": 6,
        "et": 1
    };  //横幅数据
    Fai.top._resRoot = 'http://mo.faisys.com';
    Fai.top._templateFrameId = 1006;
    Fai.top._templateLayoutId = 2;
    Fai.top._mobiSiteTitleChanged = 0; 	//用于记录网站标题是否有改动
    Fai.top._mobiSiteTitle = {
        "fontType": 0,
        "align": 0,
        "font": {"size": 12, "family": "", "colorType": 0, "color": "#000"},
        "name": "网站模板",
        "bgType": "0",
        "bgFont": {"color": "#000", "alpha": 100},
        "bgImgFileId": "",
        "bgImgStyle": "1",
        "mbt": 0,
        "mbc": {"color": "#000", "alpha": 100},
        "mbi": "",
        "mbit": 1,
        "mths": 0
    };   	//网站标题数据
    Fai.top._onlineServiceJson = {
        "serviceId": {"serviceId": 6},
        "phone": {
            "open": false,
            "type": 1,
            "fName": "电话咨询",
            "phoneInfo": [{"name": "电话咨询", "number": ""}],
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-call1",
                "content": "\\e62c",
                "color": "",
                "iconFileId": ""
            },
            "typeStr": "phone"
        },
        "sms": {
            "open": false,
            "name": "信息咨询",
            "number": "",
            "type": 2,
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-mail1",
                "content": "\\e6a0",
                "color": "",
                "iconFileId": ""
            },
            "typeStr": "sms"
        },
        "map": {
            "open": false,
            "name": "在线地图",
            "city": "",
            "mark": "",
            "d_address": "",
            "type": 3,
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-gps1",
                "content": "\\e67c",
                "color": "",
                "iconFileId": ""
            },
            "typeStr": "map"
        },
        "msg": {
            "open": false,
            "name": "在线留言",
            "type": 4,
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-message1",
                "content": "\\e6b2",
                "color": "",
                "iconFileId": ""
            },
            "typeStr": "msg"
        },
        "qq": {
            "open": false,
            "type": 5,
            "fName": "QQ客服",
            "qqInfo": [{"name": "QQ客服", "number": ""}],
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-qq1",
                "content": "\\e6ca",
                "color": "",
                "iconFileId": ""
            },
            "typeStr": "qq"
        },
        "baiduBridge": {
            "open": false,
            "name": "百度商桥",
            "type": -1,
            "baseSetting": {
                "c": 0,
                "i": 0,
                "id": 0,
                "iconType": 0,
                "colIconType": 0,
                "colIconCusType": 0,
                "classname": "faisco-icons-scBdsq2",
                "content": "\\eada",
                "color": "",
                "iconFileId": "iconFileId"
            },
            "typeStr": "baiduBridge"
        },
        "open": false,
        "order": []
    };//在线客服
    Fai.top._openOnlineService = false;
    Fai.top._manageMode = false;
    Fai.top.sessionMemberId = 0;
    Fai.top.memberName = "";
    Fai.top._colInfo = {
        "aid": 14022018,
        "wid": 0,
        "id": 3,
        "type": 3,
        "flag": 0,
        "moduleList": [308, 302, 301],
        "moduleHidden": [303],
        "createTime": 1497075393000,
        "updateTime": 1479370714000,
        "authMemberLevelId": 0,
        "extId": 0,
        "name": "首页",
        "defaultName": "首页",
        "url": "/index.jsp",
        "valid": true,
        "baseSetting": {
            "c": 0,
            "i": 0,
            "iconType": 0,
            "id": 0,
            "content": "",
            "classname": "",
            "color": "",
            "colIconType": 0,
            "colIconCusType": 0,
            "iconFileId": "",
            "jumpCtrl": {"ide": "", "columnType": 0}
        },
        "columnStyle": {"s": 2},
        "title": {
            "fontType": 0,
            "align": 0,
            "font": {"size": 12, "family": "", "colorType": 0, "color": "#000"},
            "bgType": "0",
            "bgFont": {"color": "#000", "alpha": 100},
            "bgImgFileId": "",
            "bgImgStyle": "1",
            "mbt": 0,
            "mbc": {"color": "#000", "alpha": 100},
            "mbi": "",
            "mbit": 1,
            "mths": 0
        },
        "logo": {
            "i": "",
            "h": true,
            "a": 1,
            "style": 0,
            "marginType": 0,
            "margin": {"top": 0, "bottom": 0, "left": 0, "right": 0}
        },
        "banner": {"showType": 0, "h": false, "bn": 1, "b": [{"i": "1", "t": 0}], "st": 6, "et": 1, "c": []},
        "independent": false,
        "allowed": true,
        "selectable": true,
        "forbid": false,
        "other": {"pgt": 0, "pgb": {"type": 0, "catalogList": [], "s": 4}}
    };
    Fai.top._lcid = 2052;   // 当前的语言版本
    Fai.top._serviceList = [{
        "serviceType": "0",
        "serviceAccount": "10000",
        "showFont": "QQ客服",
        "showType": true,
        "isFontIcon": "true",
        "color": "rgb(238, 82, 102)",
        "fileId": "",
        "classname": "faisco-icons-scQq",
        "filePath": ""
    }]; //商城主题在线客服
    Fai.top._mallService = 1;

    jm(document).ready(function () {


        Mobi.ajaxLoadModuleDom(3, 0, {"_ajaxLoadModuleIDList": [], "topBarOptionInfo": {"mobiMallOpen": false}});


        //判断该栏目是否被删除
        if (jm.isEmptyObject(Fai.top._colInfo)) {
            alert("该栏目已经删除，点击确定后，将返回到首页");
            document.location.href = "/index.jsp"
        }
        //Mobi.viewPageBeforeInit();
        // 绑定退出事件
        jm(window).bind("load", function () {

//当前模块 start

            //Mobi.initSwipe('bannerSwipe',{"showType":0,"bn":1,"b":[{"i":"AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI","t":1,"lt":0,"u":"","ide":"","col":0,"aj":"","p":"http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!640x640.jpg","tp":"http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg","w":640,"h":300}],"c":[{"i":"AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI","p":"http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI.jpg","t":1,"tp":"http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg","w":640,"h":300}],"h":false,"st":6,"et":1});
            if (!Mobi.bannerAnimate.init({
                        "showType": 0,
                        "bn": 1,
                        "b": [{
                            "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                            "t": 1,
                            "lt": 0,
                            "u": "",
                            "ide": "",
                            "col": 0,
                            "aj": "",
                            "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!640x640.jpg",
                            "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                            "w": 640,
                            "h": 300
                        }],
                        "c": [{
                            "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                            "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI.jpg",
                            "t": 1,
                            "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                            "w": 640,
                            "h": 300
                        }],
                        "h": false,
                        "st": 6,
                        "et": 1
                    })) {
                Mobi.initBannerDefaultDom({
                    "showType": 0,
                    "bn": 1,
                    "b": [{
                        "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                        "t": 1,
                        "lt": 0,
                        "u": "",
                        "ide": "",
                        "col": 0,
                        "aj": "",
                        "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!640x640.jpg",
                        "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                        "w": 640,
                        "h": 300
                    }],
                    "c": [{
                        "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                        "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI.jpg",
                        "t": 1,
                        "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                        "w": 640,
                        "h": 300
                    }],
                    "h": false,
                    "st": 6,
                    "et": 1
                });
                Mobi.initSwipe('bannerSwipe', {
                    "showType": 0,
                    "bn": 1,
                    "b": [{
                        "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                        "t": 1,
                        "lt": 0,
                        "u": "",
                        "ide": "",
                        "col": 0,
                        "aj": "",
                        "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!640x640.jpg",
                        "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                        "w": 640,
                        "h": 300
                    }],
                    "c": [{
                        "i": "AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI",
                        "p": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI.jpg",
                        "t": 1,
                        "tp": "http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAg9s61wQUo__fZ2wYwgAU4rAI!100x100.jpg",
                        "w": 640,
                        "h": 300
                    }],
                    "h": false,
                    "st": 6,
                    "et": 1
                });
            }
            ;

            //调整导航栏与g_web的top值
            //部分主题有css3动画，所以会导致计算失误，需要等css3动画执行完之后计算
            Mobi.autoFixGWebTop(2);


            Mobi.initBgmCookie();


            Mobi.initFooterHeight();
        });

        //手机视图初始化函数
        Mobi.initMobiPage({
            "id": 1006,
            "createTime": "2015-03-09",
            "preview": "http://mo.faisys.com/image/template/1006/1006.jpg",
            "previewGif": "http://mo.faisys.com/image/template/1006/1006.gif",
            "color": 0,
            "style": ["http://mo.faisys.com/css/template/1006_1.min.css?v=201612121825", "http://mo.faisys.com/css/template/1006_2.min.css?v=201612121825", "http://mo.faisys.com/css/template/1006_3.min.css?v=201612121825", "http://mo.faisys.com/css/template/1006_4.min.css?v=201612121825", "http://mo.faisys.com/css/template/1006_5.min.css?v=201612121825"],
            "type": 0,
            "moduleStyle": 0,
            "designType": 1,
            "presetIndex": 0,
            "cube": 0,
            "layout": 2,
            "imagePage": 347,
            "backgroundImage": 0,
            "colors": [],
            "colorsName": []
        });

        // 取统计数据
        if (true) {


            Mobi.statisticalMobiVisitors({
                colId: 3,
                pdId: -1,
                ndId: -1,
                sc: 0,
                rf: "http://m.hx13461937.icoc.me/pr.jsp?moduleId=301"
            });
            if (!false) {
                //统计访问时长
                Mobi.mobiStatVisitTime();
            }
        }

        //前端性能数据上报
        Mobi.report();

        Mobi.initShare('footerShareWeixin', 'footerShareWeibo', 'footerShareQQ');
        Mobi.initFooterLanguageEvent();
        Mobi.showQqBg();
        Mobi.showPhonesBg();
        Mobi.unLoadForWechat();
        Mobi.setShowSiteTitleBgFlag('0');
        Mobi.changeSiteTitleBg('null', 'null', 'null', 'null', 'null');
        Mobi.logoSizeCompressByMargin();
        Mobi.titlePositionRefreshByLogo();
        Mobi.addParentDivToTable();
        Mobi.initModulePhotoSwipe('J_richContentPanel308', 'rich');
        Mobi.fixIphoneMargin({moduleId: 302});
        Mobi.hideParamPadding('mProductList301');
        Mobi.removeMarginBottom('mProductList301', 'styleNine');
        Mobi.productCrossedSlideSec('mProductList301', 1, 1, 'paramNowrap');
        Mobi.productCrossedSlideSecSwipe('productSlideList301', 'productSlide301');
        Mobi.loadImgAlone('301');
        Mobi.manageFaiscoAd(2);


        setTimeout("hasOpenFaiscoBaiduBridge()", 1000);//延迟一秒，等待百度商桥加载完成
    });
    //Mobi.preventScroll(document.getElementById("g_body"));//阻止滚轮事件冒泡

    //访客态下，统计微信浏览器的使用情况

    if (Mobi.isWechat()) {
        Mobi.logDog(200055, 1);
    } else {
        Mobi.logDog(200055, 0);
    }


    //接入我们的百度商桥才隐藏默认的图标(暂缓方案)
    function hasOpenFaiscoBaiduBridge() {
        if (Fai.top._mallService == 2) {
            for (var i in Fai.top._serviceList) {
                if (Fai.top._serviceList[i].serviceType == 2) {
                    if (Fai.top._serviceList[i].showType == true) {
                        Fai.top.Mobi.getPreviewWindow().jm("ins#newBridge").hide();
                    } else {
                        Fai.top.Mobi.getPreviewWindow().jm("ins#newBridge").show();
                    }
                } else {
                    Fai.top.Mobi.getPreviewWindow().jm("ins#newBridge").show();
                }
            }
        } else {
            if (Fai.top._onlineServiceJson.baiduBridge.open == true) {
                Fai.top.Mobi.getPreviewWindow().jm("ins#newBridge").hide();
            } else {
                Fai.top.Mobi.getPreviewWindow().jm("ins#newBridge").show();
            }
        }

    }


</script>


</body>
</html>
