




<!doctype html>
<html>
<head>
    <title>国欧网咨询中心</title>
    <meta name="description" content="会员注册">
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/font-awesome.min.css">
    <!-- 字体图标ie7兼容性处理 -->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/static/frontpage/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/global.css">
    <link rel="stylesheet" href="https://www.700du.cn/static/frontpage/css/login.css">

    <!--- jQuery -->
    <script src="https://www.700du.cn/static/frontpage/js/jquery-1.11.1.min.js"></script>
    <!-- Validation 表单验证插件-->
    <script src="https://www.700du.cn/static/frontpage/js/validation/jquery.validate.min.js"></script>
    <script src="https://www.700du.cn/static/frontpage/js/validation/aebiz.validate.expand.js"></script>
    <script src="https://www.700du.cn/static/frontpage/js/validation/aebiz.passwdcheck.js"></script>

</head>

<body class="bg_f5">

<!-- 头部 bar star -->


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


<!-- 头部 header star -->
<div class="login_header clearfix">
    <div class="container">
        <h1 class="y_logo">
            <a href="/" title="700du"><img
                        src="http://7xj8z5.com1.z0.glb.clouddn.com/%28zhaoxi.net%29.png"
                        style="width:120px; height:78px"></a>

        </h1>
        <div class="w_selectarea">
            <div class="w_hoverarea">
            </div>
        </div>
        <div class="w_page-title">
            <h2>欢迎来到国欧网咨询中心！</h2>
        </div>
        <div class="w_attestation fr"></div>
    </div>
</div>
<!-- 头部 header end -->

<!-- 注册 star -->
<div class="w_1200 y_mt25">
    <div class="y_resigetcont">
        <h2 class="y_resigeth2">填写信息</h2>
        <div class="y_resiget_r">





            <img style="max-width:430px;max-height: 430px;" src="http://pic.700du.cn//dev1/0/000/025/0000025768.fid"/>


        </div>
        <div class="y_resiget">

            <form id="mainForm" action="/customerregist/save" method="post" >
                <input type="hidden" name="pwdStrength" >
                <input type="hidden" name="aKey" value="">
                <div class="y_resiget">
                    <div class="form-group">
                        <input type="hidden" id="resigetNameType" name="resigetNameType" value=""/>
                        <input type="hidden" id="token" name="token" value="70983012"/>
                        <label class="control-label" for="resigetName"><span class="y_required">*</span>手机号：</label>
                        <input id="resigetName"  name="resigetName" maxlength="11" type="text" required class="form-control" placeholder="请输入手机号">
                        <input type="hidden" id="checkResigetName" name="checkResigetName" value="false"/>
                        <p><span id="resigetNameError"></span></p>
                    </div>

                    <div class="form-group y_mobelyz">
                        <label class="control-label" for="resigetmobeltxt"><span class="y_required">*</span>短信验证码：</label>
                        <input id="mobileCode" name="mobileCode" maxlength="8" type="text" required class="form-control" id="resigetmobeltxt">
                        <input type="hidden" id="checkMobileCode" name="checkMobileCode" value="false">
                        <a id="sendMobileCode" class="btn btn-default" href="javascript:;">获取短信验证码</a>
                        <p><span id="mobileCodeError"></span></p>
                    </div>

                    <div class="form-group y_yzmgrop">
                        <label class="control-label" for="sususeryzm"><span class="y_required">*</span>验证码：</label>
                        <div class="clearfix">
                            <input id="verificationCode" name="verificationCode" maxlength="4"  type="text" required class="form-control w_60">
                            <input type="hidden" id="checkVerificationCode" name="checkVerificationCode" value="false">
                            <a href="javascript:flushValidateCode();"><img id="validateImg" src="/getCustomerRegCode"></a>
                            <span>看不清？<a class="f_color2" href="javascript:flushValidateCode();">换一张</a></span>
                        </div>
                        <p><span id="verificationCodeError"></span></p>
                    </div>



                    <div class="form-group">
                        <label class="control-label" for="resigetpas"><span class="y_required">*</span>请设置密码：</label>
                        <input id="passWord" name="passWord" type="passWord" required class="form-control" maxlength="20" placeholder="密码为6-20个字符,由英文、数字、字符组成">
                        <input type="hidden" id="checkPassWord" name="checkPassWord" value="false">
                        <p>
                            <label>
                                <span id="pweak" class="bg_1">弱</span>
                                <span id="pmedium" class="bg_2">中</span>
                                <span id="pstrong" class="bg_3">强</span>
                            </label>
                            <span id="passWordError"></span>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="resigetpas2"><span class="y_required">*</span>请确认密码：</label>
                        <input id="repeatPassWord" name="repeatPassWord" type="password" required class="form-control" maxlength="20" placeholder="再次输入密码">
                        <input type="hidden" id="checkRepeatPassWord" name="checkRepeatPassWord" value="false">
                        <p><span id="repeatPassWordError"></span></p>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label" for="invitationCode">邀请码：</label>
                        <input id="invitationCode" name="invitationCode" type="text" class="form-control" maxlength="32" placeholder="邀请码">
                        <input type="hidden" id="checkInvitationCode" name="checkInvitationCode" value="true">
                        <p><span id="invitationCodeError"></span></p>
                    </div> -->
                    <div class="y_resetbtnbx">
                        <p class="y_yhzclab"><input id="agreement" name="agreement" type="checkbox">我已阅读并同意<a class="f_color1" data-toggle="modal" href="#modal-eamil-form">《700度用户注册协议》 </a></p>
                        <a id="saveCustomerRegister" href="javascript:saveCustomerRegister();" class="btn btn-custom btn-lg btn-block disabled">立 即 注 册</a>
                    </div>
                </div>
                <!-- <div class="y_resetbtnbx"><button id="saveMobile" class="btn btn-custom">保存资料</button></div> -->
            </form>
        </div>
    </div>
</div>

<!--尾部  -->
<!-- Javascript -->
<script src="/static/usercenter/js/jquery.min.js"></script>
<script src="/static/usercenter/js/bootstrap.js"></script>










<!--底部-->
<div class="footer footer-bottom">
    <div class="container">






    </div><!-- End .container -->
</div><!-- End #footer-bottom -->








</body>
</html>