<?php
	$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
	if($page_name=='index.php'){$namepage="Home";}
	elseif ($page_name=='about.php') {$namepage="About";}
	elseif ($page_name=='services.php') {$namepage="Services";}
	elseif ($page_name=='reviews.php') {$namepage="Reviews";}
	elseif ($page_name=='projects.php') {$namepage="Projects";}
	elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
	elseif ($page_name=='404.php') {$namepage="Not Found";}
	elseif ($page_name=='contact.php') {$namepage="Contact Us";}
	//Info
	$Company="Bluestone Painting Inc";
	$Domain='';//No dejar pleca al final del dominio
	$Address='732 South 3rd Street #5, San Jose, CA 95112';

	$PhoneName="Telefono";
	$Phone=' (408) 591-4006';
	// $Phone2='(401)-263-3437';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail=' eusielgr@gmail.com';
    $MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="Free Estimates";
	$Payment="Cash, Check";
	$Experience="26 Years Of Experience";
	$Schedule="Mon to Sat: 7:00am - 8:00pm";
	$Cover="50 Miles";

	
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12690.739693591626!2d-121.8798755!3d37.3262904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcda25f3d06a7%3A0x2f0ce368a0e2ebac!2sBluestone%20Paint%20Inc!5e0!3m2!1ses-419!2sni!4v1712945868351!5m2!1ses-419!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$Map_url="https://maps.app.goo.gl/K6rVmMV3b7LM7vot8";
	$Bussines="";

    $urls = array(
        " https://www.facebook.com/bluestonepaintinginsanjoseca",
        " https://maps.app.goo.gl/GA9zZQJtnTnMWzFBA",
        " https://www.yelp.com/biz/bluestone-painting-san-jose-2",
        " https://www.bing.com/maps?ss=ypid.YN873x314978618586254120&mkt=en-US&cp=37.340001%7E-121.890049&lvl=13.0",
        " https://www.instagram.com/bluestone_painting_inc/",
        " https://www.manta.com/c/m1rpgrd/bluestone-painting-inc",
        " https://ezlocal.com/ca/san-jose/painter/0916628454",
        " https://www.merchantcircle.com/bluestone-painting-inc-san-jose-ca",
    );
    
	//Phrases
	$Description="";	
 	$Phrase = array(
 	    "What we do for your home",
		"About taking care of your home",
		"",
	);
	



	//Home  etc.
	$Home = array(		 
		"",
		"",	
	);


	// Titulos de la pagina about y services 
	$About_tittle = array(
		"About taking care of your home",
		"We're Experience",
		"Awards Winning & Professional Team Member",
		"Expert Team and Professional work",
		"Painting Profesional Services",
		"What we do for your home",
		"",
	);
	

	$About = array(
		"Welcome to Bluestone Painting Inc, your trusted provider of professional painting services. We specialize in providing high-quality painting solutions to transform your spaces and give them a fresh and renewed look.",
		"Our interior painting service is the perfect option to give life and personality to your interior spaces. Whether you want to change the color of your walls, create a unique design, or simply refresh the look of a room, our paint experts will take care of applying the paint accurately and evenly.",
		"We are committed to providing you with exceptional results on every painting project. From small touch-ups to complete painting projects, you can trust our team of professional painters to achieve a flawless finish and transform your spaces.",
		"Our vision is to become the leading benchmark in the paint industry, recognized for our superior quality, exceptional customer service and professionalism.",
		"Our mission is to provide exceptional quality painting services, transforming spaces and creating aesthetically pleasing environments for our clients.",
		"We are committed to offering the highest quality painting services, using top quality products.",
	);

	$gallery_parraf = array(
		"Give your home or business a new look with our exterior painting service. Our team of painters uses high quality products and professional techniques to protect and beautify the facade of your property.",
	);


	//Services
	$SN[1]="Interior Painting";
	$SD[1]="Transform the interior of your home with our professional interior painting services. Whether you're looking to refresh a single room or give your entire home a makeover, our skilled painters will deliver flawless results with attention to detail and quality craftsmanship.";
	
	$SN[2]="Exterior Painting";
	$SD[2]="Enhance your home's curb appeal and protect it from the elements with our exterior painting services. From siding and trim to fences and decks, our experienced team will apply high-quality paint that withstands weathering and enhances the beauty of your property.";
	
	$SN[3]="Pressure Washing";
	$SD[3]="Restore the beauty of your outdoor surfaces with our pressure washing services. We'll remove dirt, grime, mold, and mildew from your siding, sidewalks, driveways, and more, leaving them clean and rejuvenated.";
	
	$SN[4]="Cabinets Painting";
	$SD[4]="Upgrade your kitchen or bathroom with our custom cabinet services. Whether you're looking for new cabinet installation, refinishing, or hardware replacement, our skilled craftsmen will create beautiful and functional cabinetry tailored to your needs and style preferences.";
	
	$SN[5]="Staining Fences";
	$SD[5]="Transform your outdoor space into a stunning oasis with our professional landscaping services. From design and installation to maintenance and seasonal clean-up, our team will enhance the beauty and functionality of your landscape, creating a space you'll love to spend time in.";

	$SN[6]="Drywall";
	$SD[6]="Achieve smooth, flawless walls with our expert drywall services. From installation and repair to texturing and finishing, our skilled drywallers will ensure that your walls are structurally sound and aesthetically pleasing, ready for paint or wallpaper.";
 

	$Desc  = array(
		"",
		"Commercial",
		"Residential",
		"Maintenance",

	);
	// texto de service 2 
	$service = array(
		"",
		"We cover all kinds of programs and events",
		"We provide all kinds of maintenance to your house.",
		"We keep your house beautiful and bright",
		"We cover all types of residential",
	);




	$Detail = array(		 
		"Before applying the paint, it is crucial to properly prepare the surfaces to obtain a flawless finish. Our team takes care of sanding, repairing cracks, removing stains and doing any other necessary prep work to ensure that the paint adheres optimally and provides a long-lasting result.",

	"",


	);


	//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};
