<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>हिंगलाज माता </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">	
</head>
<style>
iframe{
    display: inline-block;
    vertical-align: baseline;
    width: 100%;
}
#mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #00000069;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 850px;
  height: 200px; 
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: 850px;
  height: 300px;
  padding: 10px;
  
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 0px;
  width: 250px;
  left: 250px;
}
.close{
    color: #FFF !important;
    text-shadow: 0 1px 0 #fff !important;
	    opacity: 2 !important;
		    float: inherit;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script>
$(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
</script>
<div class="col-md-6">
<div id="boxes">
  <div id="dialog" class="window">
  <a href="#" class="close agree">close</a>
   <img src="images/test.jpg"  style="border-radius: 10px;" title="" alt="" class="aligncenter size-full img-responsive">
 </div>
  <div id="mask"></div>
</div>
</div>
<body class="tg-home tg-homeeleven">
<embed src="song.mp3" width="145" height="60" autostart="true" loop="true" hidden="true"></embed>

	<!--************************************
			Wrapper Start					
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header One Start				
		*************************************-->
		<header id="tg-header" class="tg-header tg-headerveleven tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<strong class="tg-logo"><a href="index.html"><img style="width: 110px;" src="images/logos/logo.png" alt=""></a></strong>
						<nav id="tg-nav" class="tg-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationvone" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="tg-navigationvone" class="collapse navbar-collapse tg-navigation">
								<ul>
								
									<li class="menu-item-has-children">
										<a href="#tg-wrapper">मुख्यपान</a>	 
									</li>
									<li class="menu-item-has-children">
										<a href="#tg-main">नवरूपे</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#details">देवी महात्म्य</a>
									</li>
									
									
									<li class="menu-item-has-children">
										<a href="#contact">संपर्क</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#member">विश्वस्त मंडळ</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#photos">छायाचित्रे</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="tg-searchandlanguages">
							<form class="tg-formtheme tg-formsearch">
								<fieldset>
									<input type="search" class="form-control" name="search" placeholder="Search Your Queries">
									<button class="" type="submit"><img style="width:50px;" src="images/icons/ic.png"/></button>
								</fieldset>
							</form>
							<div class="tg-themedropdown tg-languagesdropdown">
								<a href="javascript:void(0);"><span>OM</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header One End					
		*************************************-->
		<!--************************************
				Home Slider One Start			
		*************************************-->
<iframe src="http://g2.ipcamlive.com/player/player.php?alias=5bf5804dbaa41" width="800px" height="480px" 
frameborder="0" allowfullscreen></iframe>
		<!--************************************
				Home Slider One End				
		*************************************-->
		<!--************************************
				Main Start						
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
		<!--************************************
					Brands Start					
			*************************************-->
			<div class="tg-themeparallax" data-appear-top-offset="600" data-z-index="-1" data-parallax="scroll" data-image-src="images/parallax/bgparallax-04.jpg">
				<div class="tg-brandsparallax tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-brandsslider tg-brands tg-brandsvtwo  owl-carousel">
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/1.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/2.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/3.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/4.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/5.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/6.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/7.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/8.jpg" alt="image description"></a></figure>
									<figure class="item"><a href="javascript:void(0);"><img src="images/11/9.jpg" alt="image description"></a></figure>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Brands End						
			*************************************-->
			<!--************************************
					 We Love Your Success Start		
			************************************* --
			
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-sectionhead text-center">
								<h2><span class="tg-themecolor">We Love </span>Your Success</h2>
								<div class="tg-description">
									<p>Just two good old boys never meaning no harm beats all you have ever saw been in trouble with the law since the day they was born so the most of day into an orbit which freezes his life support systems returns</p>
								</div>
							</div>
						</div>
						<div class="tg-loveyoursuccess">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-loveyoursuccessbox">
									<figure class="tg-loveyoursuccessimg">
										<img src="images/11/1.jpg" alt="image description">
										<figcaption>
											<i class="fa fa-angle-down"></i>
											<div class="tg-loveyoursuccesscontent">
												<div class="tg-loveyoursuccesstitle">
													<h3><i class="icon-responsive-design-symbol"></i><a href="javascript:void(0);">Web Design</a></h3>
												</div>
												<div class="tg-description">
													<p>That this group would somehow form a family that's the way we all became</p>
													<p>The brady bunch! Just two good old boys Wouldn't change if they could the system like a true modern day result.</p>
												</div>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-loveyoursuccessbox">
									<figure class="tg-loveyoursuccessimg">
										<img src="images/11/2.jpg" alt="image description">
										<figcaption>
											<i class="fa fa-angle-down"></i>
											<div class="tg-loveyoursuccesscontent">
												<div class="tg-loveyoursuccesstitle">
													<h3><i class="icon-vector-line"></i><a href="javascript:void(0);">Web Design</a></h3>
												</div>
												<div class="tg-description">
													<p>That this group would somehow form a family that's the way we all became</p>
													<p>The brady bunch! Just two good old boys Wouldn't change if they could the system like a true modern day result.</p>
												</div>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-loveyoursuccessbox">
									<figure class="tg-loveyoursuccessimg">
										<img src="images/11/3.jpg" alt="image description">
										<figcaption>
											<i class="fa fa-angle-down"></i>
											<div class="tg-loveyoursuccesscontent">
												<div class="tg-loveyoursuccesstitle">
													<h3><i class="icon-growth"></i><a href="javascript:void(0);">Marketing</a></h3>
												</div>
												<div class="tg-description">
													<p>That this group would somehow form a family that's the way we all became</p>
													<p>The brady bunch! Just two good old boys Wouldn't change if they could the system like a true modern day result.</p>
												</div>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					 We Love Your Success End		
			*************************************-->
			<!--************************************
					Secret of our Success Start		
			*************************************-->
			<section class="tg-secretofoursuccessbox">
				<div class="tg-secretofoursuccessholder">
					<div class="tg-secretleftbox"><div class="tg-secretleftholder"></div></div>
					<div class="tg-secretofoursuccesscontent">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
									<figure class="tg-secretofoursuccessimg"><a href="javascript:void(0);"><iframe width="420" height="315"
src="https://www.youtube.com/embed/XKx4M9W8oSs?autoplay=1" allow="autoplay">
</iframe></a></figure>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
									<div class="tg-sectionhead">
										<h2><span class="tg-themecolor">श्री हिंगुलांबिका देवी </span></h2>
										<div class="tg-description">
										<p> देवी महात्म्य : श्री हिंगुलांबिका देवी 
सोलापूरच्या पूर्वभागातील गणेश पेठत सुमारे शंभर वर्षांपूर्वी श्री हिंगुलांबिका देवीची मंदिरात प्राणप्रतिष्ठा करण्यात आली होती . 
देवीची मूर्ती काळ्या पाषाणाची , विविध शस्त्रे धारण केलेली आष्टभुजांची असून उग्ररुपाची आहे .
मूर्ती पंढरपूर तीर्थक्षेत्रातून घडवून आणली आहे . पार्वती - आंबिकाचे रूप असल्याने हिंगुला - अंबिका म्हणजेच हिंगुलांबिका आसे नाव आलेले आहे. ही भावसार समाजाची कुलस्वामिनी आहे.
देवीचे मूळस्थान भारताच्या वायव्येला असलेल्या पाकिस्तानमधील  बलुचिस्तान प्रदेशातील हाव नदीच्या पलीकडे चंद्रकूप तीर्थ स्थानानंतर मकरंद पर्वत शिखरावर दुर्गम व कठीण अशा हिंगलाज गुहेत स्वयंभू प्रज्वलीय अग्नी व ज्योतीच्या प्रकाशात आहे.
भारत , पाकिस्तान व इराण या तीन देशांचे समन्वय साधणारे आपल्या संस्कृतीमध्ये असणाऱ्या ५१ मातृपीठ शक्तिपीठांपैकी एक असणारे मरूतीर्थ हिंगलाज भारतातील भाविक लोकांना जाण्यासाठी कठीण आहे . 
पाकिस्तानात हिंगलाज देवीला नानीमां आस म्हणतात .
दक्ष प्रजापतीच्या यज्ञात देवी सतीने क्रोधाने आत्मसमर्पण केलेल्या पृथ्वीतलावर ५१ ठिकाणी प्रमुख शक्तीपीठांची निमिर्ती झाली . 
या शक्तीपीठातील प्रमुख व अग्रगण्य शक्तीपीठ म्हणजेच हिंगलाज आग्नेय तीर्थ शक्तीपीठ आहे . अनेक देव ऋषीमुनी , सिद्धपुरुष देवीभक्तांचे पवित्र पूजनीय व जागृत असे हे शक्तीपीठ आहे .
भावसार समाजाचे भव्य व सुंदर मंदिर सोलापुरातील गणेशपेठेत आहे . जो वास्तुशिल्पाचा आदर्श व उत्कृष्ट नमुना म्हणून महाराष्ट्रत ओळखला जातो . 
पूर्ण बांधकाम हे गर्भगुडी काळ्या पाषाणाचे असून आतील भाग मार्बलने सुशोभित केलेला आहे . शिखराची उंची ६५ फूट असून त्यावर अनेक देवदेवतांचे सुंदर मनोहीरी अशा मूर्ती बसवण्यात आलेल्या आहेत . 
५५ किलो चांदीचे सिंहासन आहे . सध्या मंदिर रंगरंगोटीने पूर्ण केलेली असून मंदिराच्या कळसावर ४ किलो सोन्याचा लेप दिला आहे. भावसार देवी ही आराध्य व कुलदैवत असून भक्तांची पालनकर्ती आहे </p>
										</div>
									</div>
									<ul class="tg-secretofoursuccesslist">
										<li>ओम हिंगुले परम हिंगुले अमृतृरुपीणी | तन:शक्ती मनशिवाय ओम हिंगुले नमः |</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Secret of our Success End		
			*************************************-->
			<!--************************************
					We Believe Our Quality Start	
			*************************************-->
			<section id="details" class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-sectionhead text-center">
								<h2><span class="tg-themecolor">देवी महात्म्य :  नव दुर्गा !!</span> </h2>
								
							</div>
						</div>
						<div class="tg-webelieveourquality">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticalmiddle">
								<div class="tg-webelieveourqualitybox">
									<ul class="tg-webelieveourquality tg-right">
										<li>
											<h3>शैलपुत्री</h3>
											<div class="tg-description">
												<p>पहिले रूप आहे-शैलपुत्री.शैल म्हणजे पाषाण आणि पुत्री म्हणजे कन्या,मुलगी.देवीच्या या रुपाची आराधना केल्याने आपल्यामध्ये पाषाणाप्रमाणे अढळ प्रतिबद्धता येते.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>ब्रह्मचारिणी</h3>
											<div class="tg-description">
												<p>ब्रम्हचर्यामुळे सामर्थ्य प्राप्त होते.ब्रम्हचर्याला एक विशिष्ट अर्थ देखील आहे , “आपले अस्तित्व अनंत आहे याची जाणीव सदोदित ठेवणे,आपण म्हणजे निव्वळ शरीर नाही तर आपण ज्योती स्वरूप आहे” </p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>चन्द्रघंटा</h3>
											<div class="tg-description">
												<p>नवरात्रीच्या तिसऱ्या दिवशी देवीच्या चंद्रघंटा या रुपाची आराधना केली जाते.या रुपामध्ये देवीला चंद्राच्या आकाराच्या घंटांनी युक्त दागिने परिधान करतात.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>कूष्माण्डा</h3>
											<div class="tg-description">
												<p>कुष्मांड म्हणजे कोहळा. कोहळ्यात खूप बिया असतात आणि प्रत्येक बी मध्ये अनंत कोहळे निर्माण करण्याची क्षमता असते.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 tg-verticalmiddle hidden-sm hidden-xs">
								<div class="tg-loveyoursuccessbox">
									<figure class="tg-webelieveourqualityimg">
										<img src="images/11/in.jpg" alt="image description">
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticalmiddle">
								<div class="tg-webelieveourqualitybox">
									<ul class="tg-webelieveourquality tg-left">
										<li>
											<h3>स्कंदमाता</h3>
											<div class="tg-description">
												<p>स्कंदमाता ही कार्तिकेयाची माता आहे.बाल कार्तिकेयासह सिंहावर आरूढ असे तिचे रूप आहे. हे शौर्य आणि करुणेचे द्योतक आहे.सिंह शौर्याचे द्योतक आहे तर देवी साक्षात करुणेची मूर्ती आहे.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>कात्यायनी</h3>
											<div class="tg-description">
												<p>देवीचे मातृत्वाचे वैशिष्ट्य दर्शवणारे हे रूप आहे जिच्यामध्ये संगोपनाचे आणि निगा राखण्याचे गुण आहेत.कुमारिका चांगल्या वर प्राप्तीसाठी हिची आराधना करतात.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>कालरात्रि</h3>
											<div class="tg-description">
												<p>काल म्हणजे वेळ,समय.काळामध्ये या विश्वामधील सारे काही सामावले आहे आणि काल सर्वाचा साक्षी आहे.रात्री म्हणजे गाढ विश्रांती,शारीरिक, मानसिक आणि आत्म्याची गाढ विश्रांती.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
										<li>
											<h3>महागौरी</h3>
											<div class="tg-description">
												<p>गौर म्हणजे गोरा,सफेद.सफेद रंग शुद्धतेचे प्रतिक आहे.शुद्धता निरागसतेमधून येते.महागौरी म्हणजे विद्वत्ता आणि निरागसता यांचा मिलाफ.</p>
											</div>
											<span class="tg-iconbox"><img style="width: 100%;     margin-bottom: 5px;" src="images/icons/ic.png"></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tg-sectionhead text-center">
								<div class="tg-description">
								
								 <h3>सिद्धिदात्री</h3>
									<p>जी सर्व सिद्धी देते ती सिद्धीधात्री.जे हवे आहे,जे गरजेचे आहे त्याची इच्छा उठण्यापूर्वी, मागण्यापूर्वी आणि अपेक्षेपेक्षा,गरजेपेक्षा ज्यादा मिळणे म्हणजे ‘सिद्धी’.साधकाला अध्यात्मिक मार्गावर विविध सिद्धी प्राप्त होत असतात.जर त्यांचा गैरवापर केला किंवा त्यांच्या मागे धावाल तर त्या नाहीशा होतील.</p>
								</div>
							</div>
					</div>
				</div>
			</section>
			<!--************************************
					We Believe Our Quality End		
			*************************************-->
			<!--************************************
					Gallery Portfolio Start			
			*************************************-->
			<section id="photos"class="tg-sectionspace tg-toppaddingzero tg-haslayout">
				<div class="tg-Portfoliovtwo">
					<div class="tg-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
						<div class="tg-sectionspace tg-portfolioparallax tg-haslayout">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
										<div class="tg-sectionhead text-center">
											<h2><span class="tg-themecolor">छायाचित्रे</span> </h2>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-Portfolio tg-Portfoliovthree tg-fullpagegrid">
								<ul id="tg-navfilterbale" class="tg-navfilterbale tg-optionset">
									<li><a class="tg-active" data-filter="*" href="javascript:void(0);">छायाचित्रे</a></li>
									<li><a data-filter=".artsandscience" href="javascript:void(0);">प्रकटदिन</a></li>
									<li><a data-filter=".programming" href="javascript:void(0);">शाकंभरी पौर्णिमा </a></li>
									<!--<li><a data-filter=".automobiles" href="javascript:void(0);">Auto Mobiles</a></li>
									<li><a data-filter=".robotics" href="javascript:void(0);">Robotics</a></li>
									<li><a data-filter=".photography" href="javascript:void(0);">Photography</a></li>-->
								</ul>
								<div id="tg-portfoliofilterable" class="tg-portfoliofilterable tg-Portfoliovfive">
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-01.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-01.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a1.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a1.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a2.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a2.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a3.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a3.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a4.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a4.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a5.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a5.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a6.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a6.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a7.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a7.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a8.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a8.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a9.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a9.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a10.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a10.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-0a11.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0a11.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b1.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b1.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<!--<div class="tg-masonrygrid automobiles">
										<figure>
											<img src="images/11/portfolio/img-03.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-03.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid robotics">
										<figure>
											<img src="images/11/portfolio/img-04.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-04.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid photography">
										<figure>
											<img src="images/11/portfolio/img-05.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-05.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
								<!--	<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-06.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-06.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">प्रकटदिन 2019</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b2.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b2.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<!--<div class="tg-masonrygrid automobiles">
										<figure>
											<img src="images/11/portfolio/img-08.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-08.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid robotics">
										<figure>
											<img src="images/11/portfolio/img-09.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-09.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
									<!--<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-10.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-10.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b3.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b3.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
								<!--	<div class="tg-masonrygrid automobiles">
										<figure>
											<img src="images/11/portfolio/img-12.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-12.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid robotics">
										<figure>
											<img src="images/11/portfolio/img-13.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-13.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid photography">
										<figure>
											<img src="images/11/portfolio/img-14.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-14.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
									<!--<div class="tg-masonrygrid artsandscience">
										<figure>
											<img src="images/11/portfolio/img-15.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-15.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">Master Coloring</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>-->
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b4.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b4.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b6.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b6.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
									<div class="tg-masonrygrid programming">
										<figure>
											<img src="images/11/portfolio/img-0b7.jpg" alt="image description">
											<figcaption>
												<div class="tg-box">
													<ul class="tg-portfolioicons">
														<li><a class="tg-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a></li>
														<li><a class="tg-btnview" href="images/11/portfolio/img-0b7.jpg" data-rel="prettyPhoto[gallery]"><i class="fa fa-eye"></i></a></li>
													</ul>
													<div class="tg-title">
														<h3><a href="javascript:void(0);">शाकंभरी पौर्णिमा २०१९</a></h3>
													</div>
												</div>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Gallery Portfolio End			
			*************************************-->
			<!--************************************
					Call To Action Start			
			*************************************-->
			
			<!--************************************
					Call To Action End			
			*************************************-->
			
			
					<!--************************************
					Team Mantra Start				
			*************************************-->
			<section id="member" class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-sectionhead text-center">
								<h2><span class="tg-themecolor">देवीमंत्रावली</span></h2>
								<div class="tg-description">
									<p></p>
								</div>
							</div>
						</div>
						<div class="tg-teammembers tg-teammembersvsix">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="mantra/1.MP3">मंत्र 1 </a></h3>
												</div>
												<ul class="tg-socialicons">
													
												</ul>
											
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="mantra/2.MP3">मंत्र 2 </a></h3>
												</div>
												<ul class="tg-socialicons">
													
												</ul>
												
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="mantra/3.mp3">मंत्र 3 </a></h3>
												</div>
												<ul class="tg-socialicons">
													
												</ul>
												
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Team Mantra				
			*************************************-->
			
			
			
			<!--************************************
					Team Member Start				
			*************************************-->
			<section id="member" class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-sectionhead text-center">
								<h2><span class="tg-themecolor">विश्वस्त</span>  मंडळ</h2>
								<div class="tg-description">
									<p></p>
								</div>
							</div>
						</div>
						<div class="tg-teammembers tg-teammembersvsix">
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="/mantra/1.mp3">किशोर ति. कटारे </a>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">सुर्यकांत तु महिंद्रकर</a></h3>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">यल्लाप्पा न महिंद्रकर</a></h3>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">दत्तात्रय वि पुकाळे</a></h3>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">नंदकुमार श्री क्षीरसागर </a></h3>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-member">
									<figure>
										<img src="images/11/mem.jpg" alt="image description">
										<figcaption>
											<div class="tg-membercontent">
												<div class="tg-themeposttitle">
													<h3><a href="javascript:void(0);">श्रीकांत सु अंबुरे</a></h3>
												</div>
												<ul class="tg-socialicons">
													<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<span class="tg-experties">विश्वस्त मंडळ</span>
											</div>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Team Member End					
			*************************************-->
			<!--************************************
					Statistic Start				
			*************************************--
			<section class="tg-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-11.jpg">
				<div class="tg-sectionspace tg-parallaxbgblack tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="tg-statistics tg-statisticvtwo">
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="tg-statistic">
										<figure>
											<img src="images/background/img-06.jpg" alt="image description">
											<figcaption>
												<div class="tg-iconpluscoutner">
													<span class="tg-statisticicon"><i class="fa fa-trophy"></i></span>
													<h3 data-from="0" data-to="125" data-speed="8000" data-refresh-interval="50">125</h3>
												</div>
												<h4>Years of Experience</h4>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="tg-statistic">
										<figure>
											<img src="images/background/img-06.jpg" alt="image description">
											<figcaption>
												<div class="tg-iconpluscoutner">
													<span class="tg-statisticicon"><i class="fa fa-steam"></i></span>
													<h3 data-from="0" data-to="6000" data-speed="8000" data-refresh-interval="50">6000</h3>
												</div>
												<h4>Successful Projects</h4>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="tg-statistic">
										<figure>
											<img src="images/background/img-06.jpg" alt="image description">
											<figcaption>
												<div class="tg-iconpluscoutner">
													<span class="tg-statisticicon"><i class="fa fa-diamond"></i></span>
													<h3 data-from="0" data-to="84" data-speed="8000" data-refresh-interval="50">84</h3>
												</div>
												<h4>Precious Awards</h4>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="tg-statistic">
										<figure>
											<img src="images/background/img-06.jpg" alt="image description">
											<figcaption>
												<div class="tg-iconpluscoutner">
													<span class="tg-statisticicon"><i class="fa fa-user"></i></span>
													<h3 data-from="0" data-to="5000" data-speed="8000" data-refresh-interval="50">5000</h3>
												</div>
												<h4>Talented Employees</h4>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistic End					
			*************************************-->
			<!--************************************
					Testimonials Start				
			*************************************--
			<section class="tg-sectionspace tg-haslayout tg-testimonialsvten">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
								<div class="tg-sectionhead text-center">
									<h2><span class="tg-themecolor">Client’s </span>Feedbacks</h2>
									<div class="tg-description">
										<p>Today still wanted by the government they survive as soldiers of fortune moving on up to the east side we finally got a piece of the pie and when the odds are against him and their dangers work to do you bet your life</p>
									</div>
								</div>
							</div>
							<div id="tg-testimonialslider" class="tg-testimonialslider tg-slidernavstyleOne owl-carousel">
								<div class="item tg-testimonial">
									<!-- <figure><img src="" alt="image description"></figure> --
									<div class="tg-testimonialinfo">
										<h3>Megan Andrews,</h3>
										<span>CEO - Arc inc.,</span>
									</div>
									<blockquote><q>You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. That this group would somehow form a family that's the way we all became the Brady Bunch. Doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us. Love exciting and new. Come we expecting you.</q></blockquote>
								</div>
								<div class="item tg-testimonial">
									<div class="tg-testimonialinfo">
										<h3>Megan Andrews,</h3>
										<span>CEO - Arc inc.,</span>
									</div>
									<blockquote><q>You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. That this group would somehow form a family that's the way we all became the Brady Bunch. Doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us. Love exciting and new. Come we expecting you.</q></blockquote>
								</div>
								<div class="item tg-testimonial">
									<div class="tg-testimonialinfo">
										<h3>Megan Andrews,</h3>
										<span>CEO - Arc inc.,</span>
									</div>
									<blockquote><q>You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. That this group would somehow form a family that's the way we all became the Brady Bunch. Doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us. Love exciting and new. Come we expecting you.</q></blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End				
			*************************************-->
			
			<!--************************************
					News and Article Start			
			*************************************--
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
							<div class="tg-sectionhead text-center">
								<h2>Latest <span class="tg-themecolor">News Updates</span></h2>
								<div class="tg-description">
									<p>Today still wanted by the government they survive as soldiers of fortune moving on up to the east side we finally got a piece of the pie and when the odds are against him and their dangers work to do you bet your life</p>
								</div>
							</div>
						</div>
						<div class="tg-blogpost tg-blogpostveleven">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
								<article class="tg-themepost tg-post">
									<figure class="tg-themepostimg">
										<time class="tg-date" datetime="2017-02-02"><span>nov</span>10</time>
										<a href="javascript:void(0);"><img src="images/blogpost/img-23.jpg" alt="image description"></a>
									</figure>
									<div class="tg-themepostcontent">
										<div class="tg-themeposttitle">
											<h3><a href="javascript:void(0);">Flipper lives in a world of wonder flying there under the sea</a></h3>
										</div>
										<ul class="tg-themepostmetadata">
											<li>
												<i class="fa fa-user"></i>
												<em><a href="javascript:void(0);">By Admin</a></em>
											</li>
											<li>
												<i class="fa fa-commenting"></i>
												<em><a href="javascript:void(0);">Comments 16</a></em>
											</li>
											<li>
												<i class="fa fa-heart-o"></i>
												<em><a href="javascript:void(0);">Favorites 20</a></em>
											</li>
										</ul>
										<div class="tg-description">
											<p>These are the voyages of the starship story if you have a problem if no one else can help and if you can find them here</p>
										</div>
									</div>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
								<article class="tg-themepost tg-post">
									<figure class="tg-themepostimg">
										<time class="tg-date" datetime="2017-02-02"><span>nov</span>10</time>
										<a href="javascript:void(0);"><img src="images/blogpost/img-24.jpg" alt="image description"></a>
									</figure>
									<div class="tg-themepostcontent">
										<div class="tg-themeposttitle">
											<h3><a href="javascript:void(0);">Now the world do not move to the beat of just one drum shot</a></h3>
										</div>
										<ul class="tg-themepostmetadata">
											<li>
												<i class="fa fa-user"></i>
												<em><a href="javascript:void(0);">By Admin</a></em>
											</li>
											<li>
												<i class="fa fa-commenting"></i>
												<em><a href="javascript:void(0);">Comments 16</a></em>
											</li>
											<li>
												<i class="fa fa-heart-o"></i>
												<em><a href="javascript:void(0);">Favorites 20</a></em>
											</li>
										</ul>
										<div class="tg-description">
											<p>These are the voyages of the starship story if you have a problem if no one else can help and if you can find them here</p>
										</div>
									</div>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
								<article class="tg-themepost tg-post">
									<figure class="tg-themepostimg">
										<time class="tg-date" datetime="2017-02-02"><span>nov</span>10</time>
										<a href="javascript:void(0);"><img src="images/blogpost/img-25.jpg" alt="image description"></a>
									</figure>
									<div class="tg-themepostcontent">
										<div class="tg-themeposttitle">
											<h3><a href="javascript:void(0);">The ship set ground on the shore of this uncharted desert isle</a></h3>
										</div>
										<ul class="tg-themepostmetadata">
											<li>
												<i class="fa fa-user"></i>
												<em><a href="javascript:void(0);">By Admin</a></em>
											</li>
											<li>
												<i class="fa fa-commenting"></i>
												<em><a href="javascript:void(0);">Comments 16</a></em>
											</li>
											<li>
												<i class="fa fa-heart-o"></i>
												<em><a href="javascript:void(0);">Favorites 20</a></em>
											</li>
										</ul>
										<div class="tg-description">
											<p>These are the voyages of the starship story if you have a problem if no one else can help and if you can find them here</p>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					News and Article End			
			*************************************-->
			<!--************************************
					Stick with Us Start			
			*************************************-->
			<section id="contact" class="tg-stickwithus">
				<div class="tg-stickwithusbox">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
								<div class="tg-stickwithuscontent">
									
									<div class="tg-callbox">
										<div class="tg-callboxholder">
											<span>श्री हिंगुलांबिका देवी देवालय ट्रस्ट , सोलापूर.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Stick with Us End			
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer One Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-footerveleven tg-haslayout">
			<div class="tg-mapandaddress">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.4224379855623!2d75.91059471425577!3d17.677493299027482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da62a3e1070f%3A0xf253cd976eb5011a!2sShri+Hingulambika+Temple!5e0!3m2!1sen!2sin!4v1520772900216" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="tg-addresssliderarea">
					<div id="tg-addressslider" class="tg-addressslider owl-carousel">
						<div class="item">
							<ul class="tg-contactinfo tg-contactinfovtwo">
								<li>
									<span class="tg-contactinfoicon"><i class=""><img src="images/icons/icon-25.png" alt="image description"></i></span>
									<address>Ganesh Peth, Solapur, <span> Maharashtra 413002</span></address>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class=""><img src="images/icons/icon-24.png" alt="image description"></i></span>
									<span><a href="admin@businesspro.com">admin@businesspro.com,</a></span>
									<span><a href="info@businesspro.com">info@businesspro.com</a></span>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="tg-contactinfo tg-contactinfovtwo">
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-envelope-o"></i></span>
									<address>7307 San Pablo Drive<span>South Ozone, NY 11420</span></address>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-envelope-o"></i></span>
									<span><a href="admin@businesspro.com">admin@businesspro.com,</a></span>
									<span><a href="info@businesspro.com">info@businesspro.com</a></span>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="tg-contactinfo tg-contactinfovtwo">
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-envelope-o"></i></span>
									<address>7307 San Pablo Drive<span>South Ozone, NY 11420</span></address>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-envelope-o"></i></span>
									<span><a href="admin@businesspro.com">admin@businesspro.com,</a></span>
									<span><a href="info@businesspro.com">info@businesspro.com</a></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright">© Copyrights <?php echo date("Y")?>. <a style="color: #ffffff;" href="http://katareinfo.com/">Katareinfo </a> All Rights Reserved</span>
							<nav class="tg-footernav">
								<ul>
									<li><a href="javascript:void(0);">Home</a></li>
									<li><a href="javascript:void(0);">About Us</a></li>
									<li><a href="javascript:void(0);">Projects</a></li>
									<li><a href="javascript:void(0);">Help</a></li>
									<li><a href="javascript:void(0);">FAQ</a></li>
									<li><a href="javascript:void(0);">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer One End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.collapse.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/themefunction.js"></script>
</body>
</html>
