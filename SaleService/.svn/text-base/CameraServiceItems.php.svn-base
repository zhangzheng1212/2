<?php
if(preg_match("/micromessenger/i", $_SERVER['HTTP_USER_AGENT'], $matches)||isset($_GET["admin"])&&$_GET["admin"]=="xhdn"){
    ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen_402x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen_403x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)"/>

<title>Ciuten</title>

<link href="styles/style.css"     		rel="stylesheet" type="text/css">
<link href="styles/framework.css" 		rel="stylesheet" type="text/css">
<link href="styles/owl.carousel.css" 	 rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css" 		rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="styles/colorbox.css"		 rel="stylesheet" type="text/css">

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/jquery.swipebox.js"></script>
<script type="text/javascript" src="scripts/colorbox.js"></script>
<script type="text/javascript" src="scripts/snap.js"></script>
<script type="text/javascript" src="scripts/contact.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/framework.js"></script>
<script type="text/javascript" src="scripts/framework.launcher.js"></script>


</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>

<div class="top-deco"></div>

<div class="content">
	<div class="header">
    	<a href="#" class="homepage-logo" >
        	<img src="images/misc/logo.png" alt="img">
        </a>
        <a href="index.php" class="go-home">主页</a>
    </div>
    <div class="decoration"></div>
    
		
	
    <div class="navigation">
	<div class="corner-deco"></div>
    	<div class="navigation-wrapper">
			<div style="padding:15px 10px;">
			<h4>请填写订单!</h4>
			<p>提交成功后，我们将向您的微信发送订单消息，稍后我们的工程师会上门为您服务！</p>
			<div class="container no-bottom">
				<div class="contact-form no-bottom"> 
					<div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
						<div class="big-notification green-notification">
							<h3 class="uppercase">订单已提交</h3>
							<a href="#" class="close-big-notification">关闭</a>
							<p>您的订单已经成功发送，稍后我们的工程上门服务，旭恒电脑感谢您的支持!</p>
						</div>
					</div>
				
					<form action="php/contact.php" method="post" class="contactForm" id="contactForm">
						<fieldset> 
                        <div class="formValidationError" id="contactNameFieldError">
                            <div class="static-notification-red tap-dismiss-notification">
                                <p class="center-text uppercase">请填写姓名以便我们工程师称呼您!</p>
                            </div>
                        </div>  						
							<div class="formValidationError" id="contactEmailFieldError">
								<div class="static-notification-red">
									<p class="center-text uppercase">邮箱必须填写!</p>
								</div>
							</div> 
							<div class="formValidationError" id="contactEmailFieldError2">
								<div class="static-notification-red">
									<p class="center-text uppercase">邮箱格式填写错误!</p>
								</div>
							</div> 
							<div class="formValidationError" id="contactMessageTextareaError">
								<div class="static-notification-red">
									<p class="center-text uppercase">请填写地址以便上门服务!</p>
								</div>
							</div>   
							<div class="formFieldWrap">
								<label class="field-title contactNameField" for="contactNameField">姓名:<span>(必填)</span></label>
								<input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
							</div>
							<div class="formFieldWrap">
								<label class="field-title contactEmailField" for="contactEmailField">邮箱: <span>(必填)</span></label>
								<input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
							</div>
							<div class="formTextareaWrap">
								<label class="field-title contactMessageTextarea" for="contactMessageTextarea">地址: <span>(必填)</span></label>
								<textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
							</div>
							<div style="padding:0px 20px;">
							<div class="formSubmitButtonErrorsWrap">
								<input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
							</div>
							</div>
						</fieldset>
					</form>       

			</div>
			</div>
		</div>
    </div>
	
	
	

</div>


	
	
	
</div>

<div class="content">    
    <div class="container no-bottom">
        <h3>旭恒服务</h3>
        <p>您在此购买服务后，我们将自动联系离您最近的工程师上门竭诚为您服务，当服务满意后，欢迎您对我们的服务进行评价，您的评价将决定于工程师的星级品质，您随时可以在我们的平台查询此工程的历史服务质量！ 
    </div>

    <div class="decoration"></div>


    <div class="container no-bottom">
        <h4>随时联系我们</h4>
    </div>         
    <div class="container no-bottom">                
        <div class="one-half-responsive">
            <div class="sliding-door">
                <div class="sliding-door-top">
                    <a href="#"><em></em>
                     电　话　联　系　我　们 !
                    </a>
                </div>    
                <div class="sliding-door-bottom">
                    <a href="tel:12 345 7890"><em></em>
                        <strong>点 击 自 动 拨 打:</strong> 
                        +1 555 354 7890
                    </a>
                </div>
            </div>
            <div class="sliding-door-clear"></div>
        </div>
        <div class="one-half-responsive last-column">
            <div class="sliding-door">
                <div class="sliding-door-top">
                    <a href="#"><em></em>
                        邮　件　联　系　我　们 !
                    </a>
                </div>    
                <div class="sliding-door-bottom">
                    <a href="mailto:zhouxue666999@qq.com"><em></em>
                        <strong>点 击 自 动 发 送:</strong> 
                        zhouxue666999@qq.com
                    </a>
                </div>
            </div>
            <div class="sliding-door-clear"></div>
        </div>
    </div> 
    
    <div class="decoration"></div>

    <div class="container no-bottom">
        <h4>服务项目</h4>
    </div>             
        <div class="container">
            <a href="#" class="button-big button-turqoise">服务一</a>
            <a href="#" class="button-big button-green">服务二</a>
            <a href="#" class="button-big button-blue">服务三</a>
            <a href="#" class="button-big button-magenta">服务四</a>
            <a href="#" class="button-big button-dark">服务五</a>
            <a href="#" class="button-big button-yellow">服务六</a>
            <a href="#" class="button-big button-red">服务七</a>
            <a href="#" class="button-big button-orange">服务八</a>
            <a href="#" class="button-big button-turqoise">服务久</a>
            <a href="#" class="button-big button-green">服务十</a>
            <a href="#" class="button-big button-blue">服务11</a>
            <a href="#" class="button-big button-magenta">服务12</a>
            <a href="#" class="button-big button-dark">服务13</a>
            <a href="#" class="button-big button-yellow">服务14</a>
            <a href="#" class="button-big button-red">服务15</a>
            <a href="#" class="button-big button-orange">服务16</a>
        </div> 
     
    <div class="decoration"></div>
            
    <div class="footer">
        <p class="copyright">
            Copyright 2015-2020<br>
            All Rights Resived By ZhangZheng
        </p>
    </div> 
    
</div>

<div class="bottom-deco"></div>



</body>
</html>

<?php   
}else {
    echo '<title>抱歉，打开错误</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="stylesheet" type="text/css" href="https://res.wx.qq.com/connect/zh_CN/htmledition/style/wap_err1a9853.css">';
    echo '<div class="page_msg"><div class="inner"><span class="msg_icon_wrp"><i class="icon80_smile"></i></span><div class="msg_content"><h4>请在微信客户端打开链接</h4></div></div></div>';
            
}
?>