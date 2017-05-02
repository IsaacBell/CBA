<?php


// Settings
@ini_set('max_execution_time', "30"); // 30 seconds
// print ini_get('max_execution_time');
@ini_set('memory_limit', "64M"); // 8MB - Set any from 8M, 16M, 24M, 32M, 40M, 48M, 56M, 64M, 128M
// print ini_get('memory_limit');

// these two below are best to adjust via .htaccess - see documentation

@ini_set('post_max_size', "10M"); // 10MB
@ini_set('upload_max_filesize', "10M"); // 10MB

// Max File Size Allowed - Soft Restriction - Not always fool proof but its better to use
$Max_File_Size="10485760"; // In bytes - 10485760=10MB, 4194304=4MB, 2097152=2MB, 1048576=1MB
// convert bytes in mb
// $mbSize = "$Max_File_Size" / 1048576;
$mbSize = number_format($Max_File_Size / 1048576, 2); // MB
$kbSize = "$Max_File_Size" / 1024; // KB
// size to show - if less than 1 mb show in KBs
if($mbSize < 1 ) { $finalSize = $kbSize . ' KB'; } else { $finalSize = $mbSize . ' MB'; }

$showMaxSizeAllowed = "yes";
// set above to no to hide maxfilesize allowed info

// print ini_get('post_max_size');

// allow multiple upload or single upload
// set this no to allow single upload - use lowercase
// $multipleUpload="no";
$multipleUpload="yes";

// make form remember fields
$rememberFields="yes";
// set above to no to forget form fields data on next page load

// make upload files mendatory
$uploadFileMandatory="yes";
// set above to no to allow form submit without uploading files 


// deny access for ip addresses / spammers
// Edit ip addresses, redirect location or mesage and add more ips to ban below

// print $_SERVER['REMOTE_ADDR'];
$denyIP = array('ip address 1', 'ip address 2', 'ip address 3');
if (in_array ($_SERVER['REMOTE_ADDR'], $denyIP)) {

   // You can display a message for banned IP
   echo "<div class='alert alert-error'><strong>Sorry! Your IP address is banned</strong>!</div>";
   exit();
   
   // You can also redirect the page - uncomment two lines below
   
   // header("location: http://www.websitename.com/banned.html");
   // exit();
}
?>



<?php
// get all variables
function getVar(&$value, $default = null) { return isset($value) ? $value : $default; }
// usage example for above function
// $act = getVar($_REQUEST["act"]);

$ssAct = getVar($_REQUEST["ssAct"]);
$ssIPAddress = getVar($_REQUEST["ssIPAddress"]);
$ssSumMath = getVar($_REQUEST["ssSumMath"]);
$ssMathTest = getVar($_REQUEST["ssMathTest"]);
$mee = "cchamber@culverhouse.ua.edu";
$ssTeamName = getVar($_REQUEST["ssTeamName"]);
$ssTeamCaptainName = getVar($_REQUEST["ssTeamCaptainName"]);
$ssTeamCaptainEmail = getVar($_REQUEST["ssTeamCaptainEmail"]);
$ssSecondMemberName = getVar($_REQUEST["ssSecondMemberName"]);
$ssSecondMemberEmail = getVar($_REQUEST["ssSecondMemberEmail"]);
$ssThirdMemberName = getVar($_REQUEST["ssThirdMemberName"]);
$ssThirdMemberEmail = getVar($_REQUEST["ssThirdMemberEmail"]);
//$ssFourthMemberName = getVar($_REQUEST["ssFourthMemberName"]);
//$ssFourthMemberEmail = getVar($_REQUEST["ssFourthMemberEmail"]);
$ssAdvisorTitle = getVar($_REQUEST["ssAdvisorTitle"]);
$ssAdvisorName = getVar($_REQUEST["ssAdvisorName"]);
$ssAdvisorPhone = getVar($_REQUEST["ssAdvisorPhone"]);
$ssAdvisorEmail = getVar($_REQUEST["ssAdvisorEmail"]);
$ssAdvisorAffiliation = getVar($_REQUEST["ssAdvisorAffiliation"]);
$ssFile = getVar($_REQUEST["ssFile"]);
$ssCopyEmail = getVar($_REQUEST["ssCopyEmail"]);
$optionsRadios = getVar($_REQUEST["optionsRadios"]);
$sentMessage = getVar($_REQUEST["sentMessage"]);
$sentError = getVar($_REQUEST["sentError"]);
$testSeries1 = getVar($_REQUEST["testSeries1"]);
$fileAllow = getVar($_REQUEST["fileAllow"]);
$whichFile = getVar($_REQUEST["whichFile"]);
$fileSizeLimit = getVar($_REQUEST["fileSizeLimit"]);
?>
<!DOCTYPE html>
<html lang="en"> <!-- Change this if your page won't be in English! -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The Culverhouse Leadership Diversity Case Competition involves all academic disciplines are encouraged to participate. A significant number of University of Alabama MBA graduates have undergraduate degrees in liberal arts, engineering or communications." />
<meta name="keywords" content="statistics, data-mining, analytics, business, university of alabama, culverhouse college of commerce, manderson graduate school of business, information systems, management science" />	
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/beaverslider.js"></script>
<script src="js/beaverslider-effects.js"></script>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>The Culverhouse Leadership Diversity Competition</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,700,700italic,800,800italic|Roboto+Slab:300">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style.min.css" rel="stylesheet" />

<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie8.css">
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Custom CSS file -->
	<link href="css/custom.css" rel="stylesheet" />
	
	<style>
		.page-header {
	    	margin-top: 40px !important;
			margin-bottom: 15px;
		}
	</style>	

	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png" />
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192" />
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="manifest" href="img/favicons/manifest.json" />
	<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#990000" />
	<link rel="shortcut icon" href="img/favicons/favicon.ico" />
	<meta name="msapplication-TileColor" content="#990000" />
	<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png" />
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->



</head>
<body>

<?php
// file size limit check
// it will only work when your script file limits are less than that of defined in your server's php.ini or localhost php.ini
// I told you it was not fool proof but its good to use it
if($ssAct!='')
{
// file size check
for($i=0;$i<count($_FILES['ssFile']['size']);$i++)
{
		if($_FILES['ssFile']['size'][$i] > $Max_File_Size) { 
			// File too big
			$fileSizeLimit="Exceeded";
			$whichFile=$_FILES['ssFile']['name'][$i];
			echo "<div class='alert alert-error'><strong>File $whichFile exceeded allowed file size $finalSize</strong>! Please try again!</div>";
			break;
		}
		
		if($_FILES['ssFile']['size'][$i] > $Max_File_Size) { break; }
}

}
// if you dont want to use file size check then remove code above and uncomment line below - or - remove && $fileSizeLimit!='Exceeded' code from below
// if limit exceeds above code won't let the script pass the email or attachment
// $fileSizeLimit="notExceeded";
?>



<?php
// file types check
if($ssAct!='' && $fileSizeLimit!='Exceeded')
{
// view array - for testinfo
// print_r( $_FILES );

		for($i=0;$i<count($_FILES['ssFile']['size']);$i++)
		{
			
			/*
			// this was to compare filetypes but we are not using it now, because of its complications in complexity of filetype names
			// add this one line below if rar is not being accepted in system
			// || strstr($_FILES['ssFile']['type'][$i], 'application/rar')!==false
			// allow psd - add below if you want to allow psd files
			// || strstr($_FILES['ssFile']['type'][$i], 'application/photoshop')!==false			
		
			if(strstr($_FILES['ssFile']['type'][$i], 'image/png')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'image/gif')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'image/jpeg')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'image/pjpeg')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'application/x-rar-compressed')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'application/zip')!==false
				|| strstr($_FILES['ssFile']['type'][$i], 'application/pdf')!==false
			  )
					{
					$fileAllow="true";
					$whichFile="all";
					}
				else
					{
					$whichFile=$_FILES['ssFile']['type'][$i];
					$fileAllow="false";
					// if any disallowed file is trapped - block attachment and sending email - and show alert
					break;
					}			
				*/


				// compare file extensions and allow specific files with allowed extensions to pass
				// comparing extension is more simple
				// add/edit only file extension below - these files are allowed
				$allowedFiles =  array('gif','png' ,'jpg' ,'jpeg' ,'rar' ,'zip' ,'pdf' ,'doc' ,'docx' ,'xls' ,'xlsx' ,'rtf', 'txt');
				$filename = $_FILES['ssFile']['name'][$i];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				// if file extension matches with allowed file extensions, pass it, otherwise trap it
				if(in_array($ext,$allowedFiles) ) 
					{
					$fileAllow="true";
					$whichFile="all";
					}
				else
					{
					$whichFile = $ext;
					$fileAllow="false";
					// if any disallowed file is trapped - block attachment and sending email, break loop and further check - show alert
					break;
					}			
			
		}
}
?>

<?php
if($ssAct!='' && $ssSumMath!=$ssMathTest && $ssAct=='send' && $fileSizeLimit!='Exceeded') {
// Math test code wrong
$testSeries1="false";
}
//////////////////////
if($ssAct!='' && $testSeries1=='false') {
echo "<div class='alert alert-error'><strong>Simple math test verification failed</strong>! Please try again!</div>";
}
//////////////////////
if($ssAct!='' && $fileAllow=='false' && $whichFile!='') {
// disallowed file type was attached	
echo "<div class='alert alert-error'>File Type <strong> $whichFile </strong> is not allowed! Only JPG, GIF, PNG, PDF, RAR, ZIP and document files are allowed. Please try again!</div>";
}
//////////////////////
if($ssAct!='' && $whichFile=='' && $ssAct=='send') 
{
// no files attached	
echo "<div class='alert alert-info'>This is just an info! You did not attach any file!</div>";
}
?>
<?php
// send email
if($ssAct!='' && $ssAct=='send' && $testSeries1!='false' && $fileAllow!='false' && $fileSizeLimit!='Exceeded' || $ssAct!='' && $ssAct=='send' && $testSeries1!='false' && $fileAllow=='false' && $whichFile=='' && $fileSizeLimit!='Exceeded')
{
       // attach files and send html email ////////////////////////////////////////////////////////////////

       // where email should go
	   $to="cchamber@culverhouse.ua.edu";

		// Cc and Bcc emails to send email to
		// uncomment from below and add email addresses if you need it
	   // $ssCcEmail = "";
	   // $ssBccEmail = "";

		// email subject
		$subject="Culverhouse Leadership Diversity Case Competition Application from ".$ssTeamCaptainName;
	   // sender email
       $from = $ssTeamCaptainEmail;
	   $sentDate = date("D, d M Y");

       $body = "<div style='background-color:#9E1B32;padding:10px 0;font-family:Helvetica,Arial,sans-serif;' align='center'>
<div style='width:600px;border:1px solid #DBDBDB;border-radius:6px;background-color:#fff; overflow:hidden;'>
  <div style='background-color:#9E1B32;height:100px;border-radius:6px 6px 0 0;box-shadow:0px 0px 10px 0px #ccc;border-bottom:1px solid #1067A0;'>
    <div style='float:left;' align='left'>
      <div style='color:#fff;font-size:30px;font-weight:bold;padding:24px 0 0 20px;text-shadow:2px 1px 1px #0B456C;'>2016 CLDC Application</em></div>
      <div style='color:#D7ECFB;padding:0 0 0 20px; font-size:14px;text-shadow:1px 1px 1px #0B456C;'>You have got an online application for the 2016 Culverhouse Leadership Diversity Case Competition<em></em></div>
      <div style='clear:both;'></div>
    </div>
    <div style='clear:both;'></div>
  </div>
  <div align='left' style='padding:10px 30px; text-align:justify; color:#666; font-size:13px;line-height:22px;'>
    <div style='border-bottom:1px solid #eee;margin:10px 0;'>
      <p>You have received an application from <br /><strong>$ssTeamCaptainName [ $ssTeamCaptainEmail ]</strong></p>
    </div>
    <p><strong>Message Details:</strong></p>
    <p>Team Details</p>
	<p> 
	  <em>Team Name:</em> $ssTeamName <br />
	  <em>Team Captain:</em> $ssTeamCaptainName<br/>
      <em>Team Captain Email:</em> $ssTeamCaptainEmail<br />
      <em>Team Member 2 Name:</em> $ssSecondMemberName<br />
      <em>Team Member 2 Email:</em> $ssSecondMemberEmail<br />
	  <em>Team Member 3 Name:</em> $ssThirdMemberName<br/>
      <em>Team Member 3 Email:</em> $ssThirdMemberEmail<br/>
	  <em>Team Advisor's Title:</em> $ssAdvisorTitle<br/>
	  <em>Team Advisor Name:</em> $ssAdvisorName<br/>
	  <em>Team Advisor Phone Number:</em> $ssAdvisorPhone<br/>
      <em>Team Advisor Email:</em> $ssAdvisorEmail<br />
	  <em>Team Advisor Affiliation:</em> $ssAdvisorAffiliation<br />
	  <em>Date:</em> $sentDate </p>
	  
    <p> <em>Sender's IP Address:</em> $ssIPAddress / <em>Location</em> <a href='http://ipinfodb.com/ip_locator.php?ip=$ssIPAddress'>here</a>, <a href='http://www.ip-tracker.org/ip-to-location.php?ip=$ssIPAddress'>here</a> and <a href='http://whatismyipaddress.com/ip/$ssIPAddress'>here</a> </p>
  </div>
</div>";

	      // generate a random string to use as boundary marker
	      $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
	      // email headers

		  $headers = "From: $from\r\n" .
		  "Reply-To: $ssTeamCaptainEmail\r\n" .
		  // uncomment below to add Cc and Bcc reciepient support
		  // "Cc: $ssCcEmail\r\n" .
		  // "Bcc: $ssBccEmail\r\n" .
		  "Return-Path: $ssTeamCaptainEmail\r\n" .
	      "MIME-Version: 1.0\r\n" .
	         "Content-Type: multipart/mixed;\r\n" .
	         " boundary=\"{$mime_boundary}\"";

	      // text message to display in email
	      $message=$body;
	      // MIME boundary for email message
	      $message = "This is a multi-part message in MIME format.\n\n" .
	         "--{$mime_boundary}\n" .
	         "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
	         "Content-Transfer-Encoding: 7bit\n\n" .
	      $message . "\n\n";

    // get uploaded files from form in loop
    function reArrayFiles($ssFile)
	{
		$file_ary = array();
		$file_count = count($ssFile['name']);
		$file_keys = array_keys($ssFile);
			for ($i=0; $i<$file_count; $i++)
			{
				foreach ($file_keys as $key)
				  {
					$file_ary[$i][$key] = $ssFile[$key][$i];
				  }
			}
       return $file_ary;
     }
           $file_ary = reArrayFiles($_FILES['ssFile']);
	      // process files
	      foreach($file_ary as $file)
	      {
	         // store file information in variables
	         $tmp_name = $file['tmp_name'];
	         $type = $file['type'];
	         $name = $file['name'];
	         $size = $file['size'];
	         // echo $tmp_name."\n\n";
	         // if file exists
	         if (file_exists($tmp_name))
	         {
	            // check to make sure it is uploaded file - not a system file
	            if(is_uploaded_file($tmp_name))
	            {
	               // open file for a binary read
	               $file = fopen($tmp_name,'rb');
	               // read file content into a variable
	               $data = fread($file,filesize($tmp_name));
	               // close file
	               fclose($file);
	               // encode it and split it into acceptable length lines
	               $data = chunk_split(base64_encode($data));
	            }

	            // insert a boundary to start the attachment
	            // specify the content type, file name, and disposition
				// boundary between each file
	            $message .= "--{$mime_boundary}\n" .
	               "Content-Type: {$type};\n" .
	               " name=\"{$name}\"\n" .
	               "Content-Disposition: attachment;\n" .
	               " filename=\"{$name}\"\n" .
	               "Content-Transfer-Encoding: base64\n\n" .
	            $data . "\n\n";
	         }
	      }
	      // closing mime boundary - end of message
	      $message.="--{$mime_boundary}--\n";
	      // send email
	      if (@mail($to, $subject, $message, $headers))
	      {
			  if($ssCopyEmail=='yes') { @mail($ssTeamCaptainEmail, $subject, $message, $headers); }
          	   $sentMessage="Your email has been sent successfully.";
		  
		  	// clear form
		  	$rememberFields="no";
		  
		  // Thankyou email starts
				$subject2 = "Email sent notification";
				// To send HTML e-mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				// change below to your email address
				$headers .="From: ".$mee." <cchamber@culverhouse.ua.edu>";
				$message2 = "Thank you <b>$ssTeamCaptainName</b>. Your message has been received successfully.<br>Regards<br />";
				@mail($ssTeamCaptainEmail, $subject2, $message2, $headers);		  
		  // Thankyou email ends
		  }
		else
			{
			$sentError="Email was not sent due to some error";
            }

}
?>


  <?php if($ssAct!='' && $sentMessage!='') { ?>
  <div class="alert alert-success"><?php echo "$sentMessage"; ?></div>
  <?php } ?>
  <?php if($ssAct!='' && $sentError!='') { ?>
  <div class="alert alert-error"><?php echo "$sentError"; ?></div>
  <?php } ?>

<!-- IE Warning (Only shows in IE8 or older.)
================================================== -->
<div id="ie-warning" class="alert alert-error">
	<div class="container">
		<div class="row">
			<div class="span12 nobottom">
				<p><strong>Oops! It seems that you are using an outdated version of Internet Explorer!</strong></p>
				<p>This website (and the rest of the internet as well) works best in the latest browsers. Websites look better, do load faster and browsing the web is less unsafe. Please upgrade your Internet Explorer or install an alternative browser.</p>
				<a href="http://browsehappy.com/?locale=en" class="btn btn-danger">Browser selection</a>
			</div>
		</div>
	</div>
</div>



<!-- Hero
================================================== -->

	<header>
		<div class="sticky-header-container">
			<div id="sticky-header" class="header-main header-primary navbar mega-menu affix-top" data-spy="affix" data-offset-top="50">
				<div class="container">
					<div class="navbar-container">
						<div class="navbar-header">
							<a class="navbar-brand ua-logo ua-logo-college-cba" title="The University of Alabama" rel="home" href="/">
							  <img class="ua-square-logo pull-left img-responsive" alt="The University of Alabama" src="img/ua-square-logo.png" height="65" width="65">
							  <span class="sr-only">The University of Alabama</span>
</a>
							<a href="#" class="btn btn-default nav-toggle visible-xs visible-sm">
								<span class="sr-only">Toggle navigation</span>
		                        <i class="fa fa-bars"></i>
		                    </a>
						</div> <!-- .navbar-header -->

						<nav class="navbar-right">
              <ul class="nav navbar-nav main-nav">
  <li class="visible-xs visible-sm">
    <a href="#" class="nav-toggle text-center">
      <i class="fa fa-times"></i>
    </a>
  </li>

  <li class="dropdown mega-menu">
    <a aria-expanded="false" href="#about-the-competition" data-toggle="dropdown" class="dropdown-toggle">
      About The Competition
    </a>
  </li>
  <li class="dropdown mega-menu">
    <a href="#guidelines" data-toggle="dropdown" class="dropdown-toggle">
      Guidelines
    </a>
  </li>
  <li class="dropdown mega-menu-full">
    <a href="/cldc/assets/2016_CLDC_Student_Agenda.pdf" target="_blank">
      2016 CLDC Schedule
    </a>
  </li>
  <li class="dropdown mega-menu">
    <a aria-expanded="false" href="#venue" data-toggle="dropdown" class="dropdown-toggle">
      Venue
    </a>
  </li>
  <li class="dropdown mega-menu">
    <a href="#apply" data-toggle="dropdown" class="dropdown-toggle">
      Apply
    </a>
  </li>
  <li class="dropdown mega-menu-full">
    <a href="#judges" data-toggle="dropdown" class="dropdown-toggle">
      Judges
    </a>
  </li>
  <li class="dropdown mega-menu-full">
    <a href="#sponsors" data-toggle="dropdown" class="dropdown-toggle">
      Sponsors
    </a>
  </li>
  <li class="dropdown mega-menu-full">
    <a href="#speakers" data-toggle="dropdown" class="dropdown-toggle">
      Committee
    </a>
  </li>
  <li class="dropdown mega-menu-full">
    <a href="#faq" data-toggle="dropdown" class="dropdown-toggle">
      FAQ
    </a>
  </li>
<!--
  <li class="dropdown mega-menu-full">
    <a href="mailto:cchamber@culverhouse.ua.edu">
      Contacts
    </a>
  </li> -->
</ul>
						</nav>
					</div> <!-- .navbar-container -->
				</div> <!-- .container -->
			</div>
		</div> <!-- .sticky-header-container -->
	</header>	<!-- END of Header -->

	<!-- Hero Slider -->
    <div id="hero-slider">
		<div class="container">
            <div class="row">
			<iframe width="500" height="281" src="https://www.youtube.com/embed/mxd7SulqFnM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>  
        </div>
	</div>
	<!-- END of Hero Slider -->
	
	<!-- Hero Date -->
	<div id="hero-date">
		<div class="container">
			<div class="row">
				<div class="span12 nobottom">

		<!-- About Quote -->
                <div id="about-quote">
                        <div class="row">
                                <div class="span12" style="text-align:left;">
                                        <blockquote>"At the Culverhouse Diversity Leadership Competition, I had the opportunity to learn more about planning effective strategies and analyzing financial data. My overall experience was very rewarding because not only was I able to network with other students, I was also able to learn more about my peers that I work with everyday. With this being my first case competition, I was extremely nervous about the presentation of the case, but our advisors, the UA staff, and our Manderson Ambassador, Caroline, helped me get through the weekend. I am very grateful for this amazing opportunity, and I will continue this newfound interest in case studying in years to come."<br><br><a href="#apply" class="btn">Apply</a></blockquote>
                                        <b>-Kaitlyn Bone <br />
                                        Team Synergy <br />
                                        Tuskegee University</b>
                                </div>
                        </div>
                </div>
                <!-- END of About Quote -->
                    <h1 class="title">The Culverhouse Leadership <br />Diversity Case Competition<span></span></h1>
					<h2>January 26-28th, 2017 <span>/</span>  The University of Alabama</h2>
					<h2>Application Deadline is December 16, 2016</h2>
					<!-- <div id="countdown"></div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- END of Hero Date -->
<div id="hero">
</div>
<!-- END of Hero
================================================== -->



<!-- About
================================================== -->
<div id="about">
	<div class="container">
	
		<!-- About Info -->
		<div id="about-info">
			<div class="row">
				<div class="span12 nobottom">

		   <!-- <header>
                        <h2 class="title">In the News</h2>
                    </header>
			<h3><a href="http://culverhouse.ua.edu/news/480/20160120/mulitple_schools_to_compete_in_leadership_diversity_competition_at_ua" target="_blank" style="text-decoration: none;">Multiple Schools to Compete in Leadership Diversity Competition at UA</a></h3>
			<br><br><br><br><br><br><br><br><br> -->
			<header>
            	<h2 class="title">Photo Gallery</h2>
            </header>
			<div class="row-fluid">
				<div id="photo-slider"></div>
			</div>
               		 
            <br><br><br><br>


                    <header>
                        <h2 class="title">2016 Winners</h2>
                    </header>
							<div class="row-fluid">
                        		<div class="span6 nobottom">
                                	<div class="speaker">
                                        <h3 class="speaker-name">First Place Team:  </h3>
										<p><b>Hornets Executives, Alabama State University</b></p>
                                       <p style="text-indent: 15px;">Rachel Kazungu (Team Captain)</p>
                               		   <p style="text-indent: 15px;">Richmond Pierce </p>
                               		   <p style="text-indent: 15px;">Menyon Goodou </p>
                               		   <p style="text-indent: 15px;">Gabrielle Delaine </p>
                               		   <p>Advisors </p>
                              		   <p style="text-indent: 15px;">Dr. Edward Brown </p>
                               		   <p style="text-indent: 15px;">Dr. DeShannon McDonald</p><br>
                                      
                                    </div>
                                </div>
                        	</div>
                        	<div class="row-fluid">
                       		<div class="span6 nobottom">
                                	<div class="speaker">
                                        <h3 class="speaker-name">2nd Place Team</h3>
										<p><b>Synergy, Tuskegee University</b></p>
                                        <p style="text-indent: 15px;">Stevens Bonhomme (Team Captain)</p>
                               		   <p style="text-indent: 15px;">Kayla Lattimore </p>
                               		   <p style="text-indent: 15px;">Sacha Bowen </p>
                               		   <p style="text-indent: 15px;">Kaitlyn Bone</p>
                               		   <p>Advisor </p>
                              		   <p style="text-indent: 15px;">Mr. Steven Cephus</p><br>
                                    </div>
                                </div>
                        	</div>
                        	<div class="row-fluid">
                        		<div class="span6 nobottom">
                                	<div class="speaker">
                                        <h3 class="speaker-name">3rd Place Team</h3>
										<p><b>Rhodes Scholars, Rhodes College</b></p>
                                        <p style="text-indent: 15px;">Emily Rizer (Team Captain)</p>
                               		    <p style="text-indent: 15px;">Stephanie Coma </p>
                               		    <p style="text-indent: 15px;">Maggie Butcher </p>
                               		    <p style="text-indent: 15px;">Haley Menz </p>
                               		    <p>Advisor </p>
                              		    <p style="text-indent: 15px;">Dr. Sujan Dan </p><br>
                                        
                                    </div>
                                </div>
                        	</div>
                        	
                    <header>
						<h2 class="title">Individual Awards </h2>
					</header>    	
               		<div class="row-fluid">
                        		<div class="span6 nobottom">
                                	<div class="speaker">
                                        <h3 class="speaker-name">Best Presenters</h3>
										<p style="text-indent: 15px;">Maggie Butcher - Rhodes College </p>
										<p style="text-indent: 15px;">Mosea Miles - Xavier College </p>
										<p style="text-indent: 15px;">Genae McLaurin - Tuskegee University </p>
										<p style="text-indent: 15px;">Kyle King - Alabama A&M University </p>
	                                </div>
	                            </div>
	                </div>
	                <div class="row-fluid">
                        		<div class="span6 nobottom">
                                	<div class="speaker">
                                        <h3 class="speaker-name">Best Q&A</h3>
										<p style="text-indent: 15px;"> Adil Khan - Rhodes College </p>
										<p style="text-indent: 15px;">Evan Reynolds - Xavier </p>
										<p style="text-indent: 15px;">Richmond Pierce - Alabama State University</p>
	                                </div>
	                            </div>
	                            <div class="clearfix"></div>
	                </div>
               		<br><br><br><br><br><br><br><br><br>
               		
               	<div id="about-the-competition">	 
               		<br><br><br><br><br><br><br><br><br><br>
			<div class="container">
                		<div class="row">
                        		<div class="span12 nobottom">
               				<header>
						<h2 class="title">About The Competition </h2>
					</header>
					
					<div class="row-fluid">
						<div class="span12">	
							<p class="lead">Are you interested in learning more about graduate school? <br>Do you enjoy working on an interactive team to solve challenges?<br>
If yes, then start recruiting a team for the Culverhouse Leadership Diversity Case Competition.</p>				<p class="lead">The competition is open to a select number of undergraduate institutions. This is a great opportunity to show off your talent
for creating business solutions. Teams will enhance their academic experience by analyzing a business case and then presenting their recommendations to
corporate executives who serve as a panel of judges. The top three teams receive cash awards.</p>
                            <p class="lead">Students in all academic disciplines are encouraged to participate. A significant number of University of Alabama MBA graduates have undergraduate degrees in liberal arts, engineering or communications.</p>
                            <p class="lead">Faculty and current students will provide participants with a strong framework and supportive learning environment with an emphasis on teamwork.</p><br><br>
							<p><a href="#apply" class="btn">Team Application</a></p>
						
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
			</div>
		</div>
		<!-- END of Info Content -->
		
		<!-- About Quote -->
		<div id="about-quote">
			<div class="row">
				<div class="span12">
					<blockquote>"Our mission at the Culverhouse College of Commerce and the Manderson Graduate School of Business is to create a community of student scholars from all walks  of  life in which all members are respected, nurtured and encouraged to make a positive impact on society."</blockquote>
				</div>
			</div>
		</div>
		<hr>
		<!-- END of About Quote -->
		
	</div>
</div>
<!-- END of About
================================================== -->





<!-- Guidelines
================================================== -->
<div id="guidelines">
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">Guidelines </h2>
				</header>
			</div>
		</div>
		
		<div class="row-fluid">
						<div class="span12">	
						  <ul>
						    <li>The Culverhouse College of Commerce will provide hotel accommodations for two nights, Thursday and Friday. No more than three rooms per team, two for the student team members and one for the team advisor. Meals will be provided during the competition from Thursday night until Saturday at lunch.</li>					      </ul>
						  <p><strong><h3>Team Makeup</h3></strong></p><ul>
                                <li>Teams must consist of three undergraduate students in their junior year of college, a majority of the team must be from underrepresented populations<strong>*</strong> in the business world.</li>
                                <li>One of the three team members must be identified as team captain at registration. </li>
                                <li>All submissions and communications should be conducted by the team captain. </li>
                                <li>Each team must have an advisor who attends the competition but does not help with the team presentation. Advisors must be an employee of the college.</li>
                                <li>Only teams, not individuals, can compete.</li>
                                </ul>
				<p><b><i>*Underrepresented populations:</i></b><br>We define underrepresented populations/diversity in terms of  backgrounds, identities and experiences, as constituted by gender, socioeconomic class, political perspective, age, race, ethnicity, religion, sexual orientation, disabilities, regional origin, nationality, socioeconomic status, and active duty/veterans status.  </p>
						  <p><strong><h3>Application for Travel Stipend Requirements</h3></strong></p>
						  <p>To be considered for a travel stipend (van or plane) we must receive your statement of need one month prior to the competition. Included in that statement are the answers to the following questions:</p>
						  <ul>
						    <li>Why are you seeking travel funds?</li>
						    <li>Does your college or university offer fleet services?</li>
						    <li>What are the significant budget restraints that would prohibit your team from participating in the competition?</li>
						    <li>What is the distance, in miles, between your college campus and The University of Alabama?</li>
						    <li>Teams selected for the travel stipend will receive award amounts based on the team need.</li>
					      </ul><p></p>
						  <p><strong><h3>Event Rules</h3></strong></p>
						  <ul>
							  <li>The competition case will be distributed the evening of Thursday January 26th, 2017. The case will not require teams to have technical knowledge, financial or otherwise, to be successful.</li>
							  <li>Judges will have received the case prior to the presentation therefore teams will not need to explain the case. </li>
							  <li>Teams are expected to define and analyze the issues, and present an execution plan of action.</li>
							  <li>Each team will be assigned a graduate student to assist with technology needs and general information gathering purposes. This Manderson ambassador will help the team use reference sources/materials in the library. </li>
							  <li>Teams must bring their own laptops and have the ability to put their presentations on a flash drive. </li>
							  <li>Teams will be provided flash drives; presentations must run on Windows/PC software. Flash drive, containing the PowerPoint presentation must be turned in before 6:00 a.m. on Saturday, January 30th.</li>
							  <li>Team members may use publicly available information and textbooks for research. </li>
							  <li>No revisions can be made to any portion of the team's physical presentation once submitted. </li>
							  <li>There will be three divisions, teams will draw for their division and presentation order on Thursday night. </li>
							  <li>All members of the team must present a portion of the case to the judges; however, all team members do not need to speak the same amount of time.</li>
							  <li>Business professional attire is required for the presentation.</li>
							  <li>Once a team has been selected if a substitution must be made the team captain should notify conference director Connie Chambers seven days prior to the competition. A selected team may be disqualified if the makeup of the team does not meet the requirements</li>
						  </ul>  
						  <p></p>
						  <p><strong><h3>Competition Structure</h3></strong></p>
						  <p>Teams will be given a case and expected to present a strategy within 36 hours to a panel of business leaders.  Teams will be judged on the quality of the analysis and recommendations as well as the presentation clarity.  All teams will present in the preliminary rounds; the top three teams will face off in a final round.  The finalist teams will receive a cash award and there will be several individual award categories.
</p>
						  <p>This 15 minute (maximum) presentation asks students to analyze a business case and provide an executable plan based on verified research. The presentation should deal directly with the core issues of the business case and should be designed to convince judges that the plan provides an executable solution. Every member of the team must have a significant speaking role in the presentation. Creating a compelling pitch will require a team to combine clear, thoughtful content with a persuasive, smooth presentation style.
</p>
						  <p>Teams must use current research and trends in the presentation with an emphasis on thinking creatively about possible answers to the business case. Students should spend very little time summarizing the business case as judges will have had the opportunity to read the cases in advance. Judges are interested in the unique and meaningful insights the team can bring to the table.
</p>
						  <p>After each team has presented their recommendation judges will conduct a question and answer period.  The team needs to be prepared to defend the recommendation in a respectful and compelling manner. The question and answer period evaluates thought processes and research used in the proposal.
</p>
						  <p>Presentation clarity will be evaluated on the coherence of the presentation, the seamless presentation flow, ability to respond well during the question and answer period and the PowerPoint design style. 
</p>
						  
						  <p><strong><h3>Presentation length requirements</h3></strong></p>
						  <p><strong>Divisional Round</strong></p>
						    <ul>
						      <li>15 minutes – Team presentation*</li>
						      <li>10 minutes – Q&amp;A*</li>
						      <li> 5 minutes – Judges discuss presentation</li>
						      <li> 5 minutes – Team changeover </li>
					        </ul>
						    <p><strong>Final Round</strong></p>
						    <ul>
						      <li>15 minutes – Team presentation*</li>
						      <li>10 minutes – Q&amp;A*</li>
						      <li> 5 minutes – Team changeover</li>
					        </ul>
						    <p><strong><em>*One-minute warnings will be given by the timers.</em></strong></p>
						    <p>Judges will be instructed not to interrupt the formal presentation.</p>
						    <p>Teams will not be permitted to observe other teams’ divisional round presentations. Faculty advisers may sit in their own team’s presentation, if desired. </p>
						    <p>The top performing team from each division will advance to the final round of competition.</p>
					     
						  </p><br><br>
							
		  </div>
		
	</div>
</div>

<!-- END of Guidelines
================================================== -->



<!-- Venue
================================================== -->
<div id="venue">
	<div id="venue-inner">
		<div class="container">
			<div class="row">
				<div class="span12 nobottom">
					<header>
						<h2 class="title">Venue</h2>
						<span><a href="https://www.google.com/maps/place/Hampton+Inn+Tuscaloosa-University/@33.2161729,-87.5247267,17z/data=!4m7!1m4!3m3!1s0x8888a8158941c939:0x3a8ac3aa434f84!2sHampton+Inn+Tuscaloosa-University!3b1!3m1!1s0x0000000000000000:0x003a8ac3aa434f84" title="Hampton Inn Hotel" target="_blank">Hampton Inn Hotel</a> | <a href="https://www.google.com/maps/place/Bidgood+Hall,+The+University+of+Alabama,+Tuscaloosa,+AL+35401/@33.21176,-87.5483776,17z/data=!3m1!4b1!4m2!3m1!1s0x888602980d21ef79:0xcd87a012d2847769" title="Bidgood Hall" target="_blank">Bidgood Hall</a></span>
					</header>
				</div>
			</div>
		</div>
		
		<!-- Venue Map -->
		<div id="venue-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3338.1125295015954!2d-87.54763100000002!3d33.211146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDEyJzQwLjEiTiA4N8KwMzInNTEuNSJX!5e0!3m2!1sen!2sus!4v1413551439256" width="100%" height="450" frameborder="0" style="border:0"></iframe>
		</div>
		<!-- END of Venue Map -->
		
		<!-- Venue Info -->
		<div id="venue-info">
			<div class="container">
            <div class="row">
          <!--  <a href="#location">Location & Accommodation</a> | <a href="#eventlocation">Event Location</a> | <a href="#thingstodo">Things to Do</a> | <a href="#restaurants">Restaurants</a> --></div>
            <div class="row">Reservations at the Hampton Inn will be made by Culverhouse College of Commerce for teams.</div>
            <p>Location & Accommodation</p>
				<div class="row">
				  <div class="span12 nobottom">
<address>
                    	<strong>Hampton Inn Tuscaloosa - University</strong><br>
						600 Harper Lee Drive<br>
						Tuscaloosa, AL<br>
                        205-553-9800<br>
                        </address>
                    <span style="font-weight: normal"><strong>For Your Business Convenience</strong></span>
                    <ul>
					  <li>					    Business Center					  </li>
					  <li>					    Fax ($2.00)					  </li>
					  <li>					    Modem					  </li>
					  <li>					    Photo Copying Service					  </li>
					  <li>					    Printer
					    
				      For Your Family's Comfort and Convenience					  </li>
					  <li>					    Cribs					  </li>
					  <li>					    High chairs
					    
				      For Your Comfort and Convenience					  </li>
					  <li>					    Breakfast Area, Complimentary					  </li>
					  <li>					    Electric Service					  </li>
					  <li>					    Elevators					  </li>
					  <li>					    Gift Shop					  </li>
					  <li>					    Laundry/Valet Service					  </li>
					  <li>					    News Stand					  </li>
					  <li>					    Safety Deposit Box					  </li>
					  <li><span style="font-weight: normal">					    Pool</span><span style="font-style: normal"><br>
					  </span><br>
                   	</li>
					</ul>
                    </div>
                    </div>
                    <div id="eventlocation" class="row">
                    <h3>Event Location</h3>
					<div class="span3 4obottom">
                        <address>
						<strong>Bidgood Hall</strong><br>
						Bidgood Hall<br>
						The University of Alabama<br>
						500 Colonial Drive<br>
						Tuscaloosa, Alabama 35487<br>
					</div>
					<div class="span3 nobottom">
                        <p>Phone: 205-348-4503<br>
						Email: <a href="mailto:cchamber@culverhouse.ua.edu">cchamber@culverhouse.ua.edu</a><br>
						<a href="http://manderson.culverhouse.ua.edu">manderson.culverhouse.ua.edu</a></p>
						<p>&nbsp;</p>
					</div>
				</div>
            <div id="thingstodo" class="row">
       
						<h3>Things to Do</h3>

                <div class="span3 nobottom">
                        <p><strong>On Campus:</strong></p>
                        <p>Alabama Museum of Natural History</p>
                        <p>Paul W. Bryant Museum </p>
                        <p>Sarah Moody Gallery of Art </p>
						<p>&nbsp;</p>
			  </div>
              <div class="span3 nobottom">
                <p><strong>Off Campus:</strong></p>
                        <p>Bama Theater &amp; Art Gallery </p>
                        <p>Historic Downtown Northport </p>
                        <p>Moundville Archeological Park </p>
                        <p>Mercedes Visitors Center </p>
                        <p>River Market- Sat Morning</p>
                        <p>Dinah Washington Cultural Arts Center </p>
						<p>&nbsp;</p>
			  </div>
              <div class="span3 nobottom">
                <p><strong>Outdoor Recreation:</strong></p>
                        <p>Capitol Park </p>
                        <p>Deer Lick Park </p>
                        <p>Lake Lurleen State Park </p>
                        <p>Munny Sokol Park </p>
			  </div>
            </div>
            <div id="restaurants" class="row">
            	<h3>Restaurants</h3>
            	<div class="span3 nobottom">
                        <p><strong>Sit-Down:</strong></p>
                        <p>DePalmas Italian<br>
                        	2300 University Blvd<br>
                            (205) 759-1879</p>
                        <p>Five- 2324 6th Street <br>
                        <a href="tel:%28205%29%20345-6089" value="+12053456089" target="_blank">(205) 345-6089</a></p>
                        <p>Mugshots Bar and Grill<br>
                        511 Greensboro Avenue<br>
                        <a href="tel:%28205%29%20391-0572" value="+12053910572" target="_blank">(205) 391-0572</a></p>
                        <p>Mellow Mushroom<br>
                        2230 University Boulevard<br>
                        <a href="tel:%28205%29%20758-0112" value="+12057580112" target="_blank">(205) 758-0112</a></p>
                        <p>Bento<br>
                        1306 University Blvd<br>
                        <a href="tel:%28205%29%20758-7426" value="+12057587426" target="_blank">(205) 758-7426</a></p>
                        <p>Steamers<br>
                        1301 University Blvd<br>
                        <a href="tel:%28205%29%20750-0203" value="+12057500203" target="_blank">(205) 750-0203</a></p>
						<p>&nbsp;</p>
				</div>
              <div class="span3 nobottom">
                <p><strong>Speedy Options:</strong></p>
                      <p>Jimmy Johns1400<br>
                      University Blvd <br>
                      <a href="tel:%28205%29%20366-3699" value="+12053663699" target="_blank">(205) 366-3699</a></p>
                        <p>Hungry Howies<br>
                        1211 University Blvd<br>
                        <a href="tel:%28205%29%20366-1500" value="+12053661500" target="_blank">(205) 366-1500</a></p>
                        <p>Which Wich<br>
                        2128 University Blvd<br>
                        <a href="tel:%28205%29%20764-1673" value="+12057641673" target="_blank">(205) 764-1673</a></p>
                        <p>Momma G&rsquo;s<br>
                        409 23rd Ave<br>
                        <a href="tel:%28205%29%20345-5501" value="+12053455501" target="_blank">(205) 345-5501</a></p>
                        <p>Newk's<br>
                        205 University Blvd E<br>
                        <a href="tel:%28205%29%20758-2455" value="+12057582455" target="_blank">(205) 758-2455</a></p>
		      </div>
            </div>
		</div>
		<!-- END of Venue Info -->
		
	</div>
</div>
<!-- END of Venue
================================================== -->



<!-- Team Registration
================================================== -->
<div id="apply">
	<br><br><br><br><br><br><br><br><br><br>
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">Team Application <span></span></h2>
			                <h2>Application Deadline </h2>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
				<div class="well">
					<h3>To participate, teams of 3 students must register by December 16, 2016 at 11:59pm CST.</h3>
                  <p>Teams must consist of three undergraduate students in their junior or senior year of college, a majority of the team must be from underrepresented minorities. A team captain must be identified at registration.</p>
					<p>Each team must submit a team name as well as designate a team captain. All submissions and communications should be conducted by the team captain. Registration closes at 11:59pm CST on December 16, 2016</p>
					<h3>Step 1:  Please complete the below form to register </h3>
				  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="index.php" id="commentForm">
    <input type="hidden" name="ssAct" value="send">
    <input type="hidden" name="ssIPAddress" value="<?php print $_SERVER['REMOTE_ADDR']; ?>">
    <legend class="muted">Team Details</legend>
    <div class="control-group">
      <label class="control-label text-info">*Team Name: </label>
      <div class="controls">
        <input type="text" name="ssTeamName" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssTeamName"; } ?>" maxlength="30" class="required" title="Team name?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">*Team Captain's Name: </label>
      <div class="controls">
        <input type="text" name="ssTeamCaptainName" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssTeamCaptainName"; } ?>" maxlength="30" class="required" title="team captain name?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">* Team Captain's Email: </label>
      <div class="controls">
        <input type="email" name="ssTeamCaptainEmail" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssTamCaptainEmail"; } ?>" class="required email" title="valid email address?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">* Team Captain's Phone Number: </label>
      <div class="controls">
        <input type="text" title="Captain phone number? (only digits 0-9)" name="ssTeamCaptainPhone" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssTeamCaptainPhone"; } ?>" class="required digits">
      </div>
    </div>
    <div class="control-group">
     <legend class="muted">Other Team Member's Information</legend>
      <div class="control-group">
      <label class="control-label text-info">Second Team Member's Name: </label>
      <div class="controls">
        <input type="text" name="ssSecondMemberName" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssSecondMemberName"; } ?>" maxlength="30" class="required" title="second team member name?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">Second Team Member's Email: </label>
      <div class="controls">
        <input type="email" name="ssSecondMemberEmail" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssSecondMemberEmail"; } ?>" class="required email" title="valid email address?">
      </div>
    </div>
     <div class="control-group">
      <label class="control-label text-info">Third Team Member's Name: </label>
      <div class="controls">
        <input type="text" name="ssThirdMemberName" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssThirdMemberName"; } ?>" maxlength="30" class="required" title="third team member name?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">Third Team Member's Email: </label>
      <div class="controls">
        <input type="email" name="ssThirdMemberEmail" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssThirdMemberEmail"; } ?>" class="required email" title="valid email address?">
      </div>
    </div>
    <!-- <div class="control-group">
      <label class="control-label text-info">Fourth Team Member's Name: </label>
      <div class="controls">
        <input type="text" name="ssFourthMemberName" value="<?//php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssFourthMemberName"; } ?>" maxlength="30" class="required" title="fourth team member name?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">Fourth Team Member's Email: </label>
      <div class="controls">
        <input type="email" name="ssFourthMemberEmail" value="<?//php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssFourthMemberEmail"; } ?>" class="required email" title="valid email address?">
      </div>
    </div> -->
      <legend class="muted">Advisor Details</legend>
      <div class="control-group">
      <label class="control-label text-info">Advisor's Title: </label>
      <div class="controls">
        <input type="text" name="ssAdvisorTitle" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssAdvisorTitle"; } ?>" maxlength="30" class="required" title="advisor title?">
      </div>
    </div>
      <div class="control-group">
      <label class="control-label text-info">Advisor's Name: </label>
      <div class="controls">
        <input type="text" name="ssAdvisorName" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssAdvisorName"; } ?>" maxlength="30" class="required" title="advisor name?">
      </div>
    </div>
     <div class="control-group">
      <label class="control-label text-info">* Advisor's Phone Number: </label>
      <div class="controls">
        <input type="text" title="Advisor's Phone number? (only digits 0-9)" name="ssTeamAdvisorPhone" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssAdvisorPhone"; } ?>" class="required digits">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">Advisor's Email: </label>
      <div class="controls">
        <input type="email" name="ssAdvisorEmail" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssAdvisorEmail"; } ?>" class="required email" title="valid email address?">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label text-info">Advisor's Affiliation: </label>
      <div class="controls">
        <input type="text" name="ssAdvisorAffiliation" value="<?php if($ssAct!='' && $rememberFields=='yes' && $ssAct=='send') { echo "$ssAdvisorAffiliation"; } ?>" class="required" title="advisor affiliation">
      </div>
    </div>
    <legend class="muted">Resumes: </legend>
    <div class="control-group">
      <label class="control-label text-info">Attach three resumes (Hit Browse, then hold Shift and select the files)
        <?php if($multipleUpload=='yes') { echo " "; } ?>
      </label>
      <div class="controls" style="padding:10px; background-color:#eee; border-radius:4px;">
        <input type="file" id="files" name="ssFile[]" style="height: 30px;" <?php if($multipleUpload=='yes') { echo "multiple='multiple'"; } if($uploadFileMandatory=='yes') { print "required='required'"; print "class='required'"; } ?>>
        
        <div id="selectedFiles" style="padding:10px 0 0 10px;" class="small muted"></div>
        
		<?php if($multipleUpload=='yes') { echo "<br><div class='muted small' style='display:inline-block;'>Multiple Select: <span class='badge'>ON</span></div>"; } ?>
        
        <?php  if($showMaxSizeAllowed=='yes') { echo "<br><div class='muted small' style='display:inline-block;'>Max File Size Allowed: <span class='badge'>$finalSize</span></div>"; } ?>
        
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo "$Max_File_Size"; ?>" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label"></label>
      <div class="controls">
        <label class="checkbox">
          <input type="checkbox" value="yes" name="ssCopyEmail" checked>
          <span class="muted">Email yourself a copy?</span></label>
      </div>
    </div>
    
    <div class="control-group">
	    <b>*STATUS:  All information is required before the packet can be submitted to the committee.</b>
    </div>
    
      </div>
    <legend class="muted">Human Verification</legend>
    <div class="control-group">
      <?php $sum1=rand(1, 9); ?>
      <?php $sum2=rand(1, 9); ?>
      <?php $totalSum=$sum1+$sum2; ?>
      <label class="control-label text-info" style="padding-top:29px;">* Answer</label>
      <div class="controls">
        <div style="padding-bottom:4px;">What is the sum of <span class="label label-important"><?php  echo "$sum1"; ?></span> and <span class="label label-important"><?php echo "$sum2"; ?></span> ?</div>
        <input type="text" name="ssSumMath" value="<?php  if($ssAct=='send' && $rememberFields=='yes') { echo "$ssSumMath"; } ?>" class="required digits">
        <input type="hidden" value="<?php echo "$totalSum"; ?>" name="ssMathTest">
      </div>
    </div>
    <hr />
    <div class="control-group">
      <label class="control-label"></label>
      <div class="controls">
        <button type="submit" class="btn btn-success">Send Email</button>
      </div>
    </div>
  </form>
                    </p>

		<br><br>
		<h3>Technical Issues?</h3>
		<br>Email <a href="mailto:fstewart@culverhouse.ua.edu">Tech Support</a> if there are issues registering your team.
				<!--	<h3><strong>Step 2</strong>: Send <b>$50.00</b> registration fee</h3>

	<b>Checks Payable to</b><br>
	The University of Alabama- Culverhouse Leadership Diversity Competition<br>
	101 Bidgood Hall<br>
	PO Box 870223<br>
	Tuscaloosa, AL 35487<br> -->
			  </div>
			</div>
			
		</div>
		
</div>
<!-- END of Team Registration
================================================== -->

<!-- Judges
================================================== -->
<div id="judges" style="padding-top: 195px">
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">2016 Judges</h2>
				</header>
			</div>
		</div>
		
		<div class="row">
        				<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Monica Davis</h3>
									<img src="img/judge_monica_davis.jpg" alt="" class="about-info-icon">
									<h4>Director of Peer to Peer Programs<br /> E Squared Communications</h4>
									<p>Georgia</p>
									<p><b>Endorsed Skills:</b> Marketing, Pharmaceutical Industry, Strategic Planning, Marketing communications, Marketing Strategy, Account Management, Event Management, Event Planning, Management, Customer Service, Cross-Functional team Leadership</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Marketing; The University of Alabama B.S. in Marketing</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Courtney Fladger</h3>
									<img src="img/judge_courtney_fladger.jpg" alt="" class="about-info-icon">
									<h4>Server Specialist Trainee, Summit Program<br /> IBM</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b> Leadership, Event Planning, Spanish, Project Management, Event Management, Training, Higher Education, Research, Customer Service</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA; The University of Alabama M.S. in Information Technology Project Management, Clemson University M.Ed. in Educational/ Clinical Mental Health Counseling; Furman University B.A. in Spanish Language and Literature</p>
									<p><b>Previous Companies:</b> The University of Alabama, Procter and Gamble, GE Healthcare, New Foundations Children and Family Services, Inc.</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">David Ford</h3>
									<img src="img/judge_david_ford.jpg" alt="" class="about-info-icon">
									<h4>Director of Business Honors Program<br /> The University of Alabama</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b> Leadership, Public Speaking, Entrepreneurship, Higher education, Teaching, Strategic Planning, Leadership Development, Student Development, Data Analysis, Fundraising, Event Planning, Staff Development</p>
									<p><b>Degrees/University:</b> The University of Alabama post MBA in Management; Louisiana State University MBA in Accounting; East Central University B.S. in Marketing</p>
									<p><b>Previous Companies:</b> Cintas Corporation, Alabama Entrepreneurship Institute, AlabamaREAL</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Ben Foster</h3>
									<img src="img/judge_ben_foster.jpg" alt="" class="about-info-icon">
									<h4>Compliance Officer<br /> Vulcan Value Partners</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>Media Relations, Politics, Public Speaking, Event Planning, Political Campaigns, Community Outreach, Fundraising, Strategic Communication, Grassroots Organizing</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Strategic Management, Marketing, Operations Management; The University of Alabama B.S. in Telecommunication & Film, Political Science</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">David Francko</h3>
									<img src="img/judge_david_francko.jpg" alt="" class="about-info-icon">
									<h4>Associate Provost and Dean of the Graduate School<br /> The University of Alabama</h4>
									<p>Alabama</p>
									<p><b>Degrees/University:</b> Michigan State University Ph.D. in Botany; Kent State University, B.S. and M.S. in Biology</p>
									<p><b>Previous Companies:</b> Kellogg Biological Station, Oklahoma State University, Miami University</p>
								</div>
							</div>
						</div>
        				<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Michael Giles, Jr.</h3>
									<img src="img/judge_michaelgiles.jpg" alt="" class="about-info-icon">
									<h4>Marketing Communications<br /> Schneider Electric</h4>
									<p>Tennessee</p>
									<p><b>Endorsed Skills:</b>Brand management, Integrated marketing, Market Research, Cross-Functional Team Leadership, Product Launch, Customer Insight, marketing Strategy</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Marketing; Samford University B.S. in Sports Medicine</p>
									<p><b>Previous Companies:</b> Ronald McDonald House Charities of Nashville, Omicron Delta Kappa National Leadership Honor Society, MG Enterprises, Mars Inc. , P&G</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Joe Gosa</h3>
									<img src="img/judge_joe_gosa.jpg" alt="" class="about-info-icon">
									<h4>Solution Consulting Manager, Financials<br /> Workday</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>ERP, Cross-Functional Team Leadership, Program Management, Project Planning, Competitive Analysis, Budgets, Business Process, Process Improvement</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA/MIS in Healthcare Management; The University of Alabama B.S. in Healthcare Management</p>
									<p><b>Previous Companies:</b> FedEx</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Doug Herndon</h3>
									<img src="img/judge_doug_herndon.jpg" alt="" class="about-info-icon">
									<h4>Chief Financial Officer<br /> Coca-Cola</h4>
									<p>Georgia</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Marketing; Samford University B.S. in Sports Medicine</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Beth Hollahan</h3>
									<img src="img/judge_beth_hollahan.jpg" alt="" class="about-info-icon">
									<h4>Director of Planning and Analysis<br /> Coca-Cola</h4>
									<p>Georgia</p>
									<p><b>Endorsed Skills:</b>Operational Risk, Analysis, Financial Services, Planning</p>
									<p><b>Degrees/University:</b> The University of Alabama </p>
									<p><b>Previous Companies:</b> Union Planters Bank</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Jonathan Hunt</h3>
									<img src="img/judge_jonathan_hunt.jpg" alt="" class="about-info-icon">
									<h4>Regional Sales Representative<br /> LeMaitre Vascular</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>Strategic Planning, Sales Management, Cross-functional Team Leadership, Hospitals, Healthcare, Team Building, Sales, Account Management, Marketing Strategy, Leadership</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA; The University of Alabama B.S. in Civil Engineering</p>
									<p><b>Previous Companies:</b> Alabama Department of Transportation, Eli Lilly and Company</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Linda Kramer</h3>
									<img src="img/judge_lindakramer.jpg" alt="" class="about-info-icon">
									<h4>Senior Vice President, Corporate Social Responsibility<br /> Regions Bank</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>Strategy, Internal Communication, Program Management, Human Resources, Strategic Communications, Change Management</p>
									<p><b>Degrees/University:</b> The University of Alabama</p>
									<p><b>Previous Companies:</b> International Paper, Holiday Corporation, Westinghouse Electric Company</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Caleb Lampert</h3>
									<img src="img/judge_caleb_lampert.jpg" alt="" class="about-info-icon">
									<h4>IT Associate, Payroll & Benefits System<br /> Chick-fil-A</h4>
									<p>Georgia</p>
									<p><b>Endorsed Skills:</b>Leadership, Management, Public Speaking, Communication, Customer Services, Statistics, Research, Time Management</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Analytics; The University of Alabama B.S. in Management, Specialization in Health Care Management</p>
									<p><b>Previous Companies:</b> Northwestern Mutual, UA Men’s Basketball Team</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Harry Long</h3>
									<img src="img/judge_harry_long.jpg" alt="" class="about-info-icon">
									<h4>Managing Member<br /> 81 Shop, LLC</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>Marketing, Advertising, Marketing Strategy, Social Media, Public Relations, Market Planning, Brand Management, Strategic Planning, Corporate Communications</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA in Strategy; The University of Alabama B.S. in Marketing</p>
									<p><b>Previous Companies:</b> Mazda North American Operations, Saks Incorporated, Citadel Broadcasting, XM Satellite Radio, Simmons Media Group, Aloha Hospitality, NGI One, Prestige Properties</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Matthew Mazhuvancheryparambath</h3>
									<img src="img/judge_matthew_mazhuvancheryparambath.jpg" alt="" class="about-info-icon">
									<h4>Director of Sales Operations<br /> FedEx</h4>
									<p>Tennessee</p>
									<p><b>Endorsed Skills:</b>Business Intelligence, Business Analysis, Analytics, Business Planning, CRM, Management, Sales Operations, Leadership, Cross-Functional Team Leadership, Process Development</p>
									<p><b>Degrees/University:</b> The University of Alabama MBA; Cochin University of Science and Technology B. Tech in Electronics and Biomedical Engineering</p>
									<p><b>Previous Companies:</b> GE Healthcare</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Helenka Nolan</h3>
									<img src="img/judge_helenka_nolan.jpg" alt="" class="about-info-icon">
									<h4>Owner<br /> HHN Consulting, LLC</h4>
									<p>Alabama</p>
									<p><b>Endorsed Skills:</b>Research, Higher Education, Sustainability, Teaching, Public Speaking, Nonprofits, Proposal Writing, University Teaching, Fundraising, Project Management</p>
									<p><b>Degrees/University:</b> Georgetown University MBA in Strategy; The University of Alabama MBA in Strategy; Columbia University B.A. in Architecture</p>
									<p><b>Previous Companies:</b> California Coastal Conservancy, Kenetech Windpower, EnergyWorks, The University of Alabama</p>
								</div>
							</div>
						</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box">
									<h3 class="about-info-title">Rashmee Sharif</h3>
									<img src="img/judge_rashmee_sharif.jpg" alt="" class="about-info-icon">
									<h4>Change Manager<br />
									Cigna-HealthSpring</h4>
									<p>Tennessee</p>
									<p><b>Endorsed Skills:</b>Product Management, Research, Leadership, Spanish, Process Improvement, Sales, Teamwork, Customer Service, Nonprofits, Recruiting, Bengali</p>
									<p><b>Degrees/University:</b>The University of Alabama MBA in Global Business Strategy; Univeridad Torcuato di Tella M.A. in Internal Relations; The University of Alabama BBA in Spanish and Management</p>
									<p><b>Previous Companies:</b>Saks Incorporated, The University of Alabama, PepsiCo Frito Lay, The Alabama International Trade Center</p>
								</div>
							</div>
						</div>
					</div>
			</div>
	    </div>
    </div>
</div>
<!-- END of Judges
================================================== -->

<!-- Sponsors
================================================== -->
<div id="sponsors" style="padding-top: 195px">
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">Sponsors</h2>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="span12 halfbottom">
				<h3>Platinum Level</h3>
			</div>
        				<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box2">
									<h3 class="about-info-title"></h3>
									<img src="img/sponsor_fedex.jpg" alt="">
								</div>
							</div>
						</div>
			<div class="span12 halfbottom">
				<h3>Gold Level</h3>
			</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box2">
									<h3 class="about-info-title"></h3>
									<img src="img/sponsor_cocacola.jpg" height="246" width="246" alt="">
								</div>
							</div>
						</div>
			<div class="span12 halfbottom">
				<h3>Silver Level</h3>
			</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box2">
									<h3 class="about-info-title"></h3>
									<img src="img/sponsor_academic_affairs.jpg" alt="">
								</div>
							</div>
						</div>
			<div class="span12 halfbottom">
				<h3>Bronze Level</h3>
			</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box2">
									<h3 class="about-info-title"></h3>
									<img src="img/sponsor_pg.jpg" alt="">
								</div>
							</div>
						</div>
			<div class="span12 halfbottom">
				<h3>Alliance Level</h3>
			</div>
						<div class="span6 halfbottom">
							<div class="well">
								<div class="about-info-box2">
									<h3 class="about-info-title"></h3>
									<img src="img/sponsor_amwins.jpg" alt="">
								</div>
							</div>
						</div>
			
		</div>
    </div>
</div>
<!-- END of Sponsors
================================================== -->

<!-- Committee
================================================== -->
<div id="speakers">
	<div id="speakers-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
				
					<header>
						<h2 class="title">Committee Members </h2>
					</header>
									
					<div class="row-fluid">
						<div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Dr. Brian Gray </h3>
                                <p class="speaker-job">Associate Dean</p>
								<a href="tel:205-348-8912">205-348-8912</a><br>
                                <!--<a href="mailto:bgray@culverhouse.ua.edu">bgray@culverhouse.ua.edu</a>-->
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                  
						<div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
							  <h3 class="speaker-name">Connie Chambers </h3>
                                <p class="speaker-job">Director of Corporate Partnerships</p>
								<a href="tel:205-348-4503">205-348-4503</a><br>
                                <!--<a href="mailto:cchamber@culverhouse.ua.edu">cchamber@culverhouse.ua.edu</a>-->
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
						<div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Gary Ward </h3>
                                <p class="speaker-job">Director of Career Service</p>
								<p><a href="tel:205-348-4502">205-348-4502</a></p>
                                <p><!--<a href="mailto:gsward@culverhouse.ua.edu">gsward@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Lori White </h3>
                                <p class="speaker-job">Director of Student Services and Alumni Relations</p>
								<a href="tel:205-348-4139">tel: 205-348-4139</a><br>
                                <!--<a href="mailto:lwhite@culverhouse.ua.edu">lwhite@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Martha Carroll </h3>
                                <p class="speaker-job">Office Assistant II</p>
								<p><a href="tel:205-348-4077">205-348-4077</a></p>
                                <p><!--<a href="mailto:mcarroll@culverhouse.ua.edu">mcarroll@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Patricia "Tut" Wilson </h3>
                                <p class="speaker-job">Director of Career Recruiting & Admissions</p>
								<p><a href="tel:205-348-9122">205-348-9122</a></p>
                                <p><!--<a href="mailto:pewilson@culverhouse.ua.edu">pewilson@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Jan Jones </h3>
                                <p class="speaker-job">Specialty Masters Coordinator</p>
								<p><a href="tel:205-348-7221">205-348-7221</a></p>
                                <p><!--<a href="mailto:jjones@culverhouse.ua.edu">jjones@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Kristin Pivetz </h3>
                                <p class="speaker-job">Office Assistant I</p>
								<p><a href="tel:205-348-6517">205-348-6517</a></p>
                                <p><!--<a href="mailto:kpivetz@culverhouse.ua.edu">kpivetz@culverhouse.ua.edu</a>--></p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">James Moore </h3>
                                <p class="speaker-job">MBA Student<br>Assistant to the Director of Corporate Partnerships </p>
							
                                <p>Montgomery, Alabama</p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        <div class="row-fluid">
                        <div class="span6 nobottom">
							<div class="speaker">
								<!--<img src="img/dummyspeaker.jpg" alt="" class="speaker-photo">-->
								<h3 class="speaker-name">Carmen McBroom </h3>
                                <p class="speaker-job"></p>
								<p>Undergraduate: Junior Economics Major </p>
                                <p>Montgomery, Alabama </p>
								<div class="clearfix"></div>
							</div>
						</div>
                        </div>
                        
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END of Committee
================================================== -->

<!-- FAQ
================================================== -->
<div id="faq">
	<div class="container">

        	<div class="row">
			<div class="span12 nobottom" style="padding-top: 195px">
                                <header>
                                        <h2 class="title">Frequently Asked Questions </h2>
                                </header>
                        </div>
                </div>
                
                <div class="row-fluid">
			<div class="span12">
			
<strong>1.  How many applications from each school are you accepting? Or should each school select one team to represent their school and then submit that one school application to the Leadership Diversity Competition?</strong><br>
We do not have a limit on the number of teams that can apply from each school. We will be reviewing each application individually and encourage teams to submit their application as soon as possible. We know that there are some schools who will select a team to apply, while others will choose to allow our judging process to be the deciding factor. <br><br><br>

<strong>2.  If my team is invited for the Competition, will reimbursements be provided for travel and accommodation?</strong><br>
We will be providing hotel lodging and food for participants once they arrive to campus.  Teams that need travel funding assistance must complete an application to be considered for a travel stipend.<br><br><br>  

<strong>3.  I do not have a business background.  Can I still apply?  Will I be at a disadvantage in the Competition?</strong><br>
A business background is not required to perform successfully in the Competition.  We are accepting applications from all disciplines – liberal arts, engineering, communications, etc.  Critical thinking and the ability to support an argument are the necessary skills for success in the Competition.  A current MBA or Manderson graduate student will be assigned to each team to act as an ambassador.</strong><br><br><br>  

<strong>4. Are there any limitations to what we can recommend in our case solutions? What are your judges looking for?</strong><br>
We are completely open to any solution to the business case. We are looking for teams that can break down the relevant elements of the case and provide a clear and convincing argument in their proposal.  Judges will be corporate executives with years of business experience. <br><br><br>



			</div>
		</div>
	</div>
</div> 
<!-- FAQ
================================================== -->



<!-- News
================================================== 
<div id="news">
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">News </h2>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
			
				<!-- Twitter Feed
				<a class="twitter-timeline" href="https://twitter.com/MandersonUA"  data-widget-id="338999081970065408">Tweets from Manderson Graduate School of Business</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
				<!-- END of Twitter Feed -->
				
			</div>
		</div>
		
	</div>
</div>
<!-- END of News
================================================== -->



<!-- Custom
==================================================
<div class="custom">
	<div class="container">
	
		<div class="row">
			<div class="span12 nobottom">
				<header>
					<h2 class="title">This is a title <span>and this is a sub line</span></h2>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="span6">
				<h4>Span 6</h4>
				<p><strong>You can use this section for custom content. Use Bootstrap's grid scaffolding to layout your content as you wish.</strong></p>
			</div>
			<div class="span6">
				<h4>Span 6</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="span4">
				<h4>Span 4</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
			<div class="span4">
				<h4>Span 4</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
			<div class="span4">
				<h4>Span 4</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="span3">
				<h4>Span 3</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
			<div class="span3">
				<h4>Span 3</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
			<div class="span3">
				<h4>Span 3</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
			<div class="span3">
				<h4>Span 3</h4>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="span6">
				<h1>h1 Lorem ipsum</h1>
				<h2>h2 Lorem ipsum</h2>
				<h3>h3 Lorem ipsum</h3>
				<h4>h4 Lorem ipsum</h4>
				<h5>h5 Lorem ipsum</h5>
				<h6>h6 Lorem ipsum</h6>
				<hr>
				<p><a href="#">Lorem ipsum</a></p>
				<p>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna. Nam facilisis dui at nunc. Suspendisse potenti. Aliquam elit. Sed accumsan. Phasellus orci. Phasellus ac est vel dolor pharetra pulvinar.</p>
				<p><em>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna. Nam facilisis dui at nunc. Suspendisse potenti. Aliquam elit. Sed accumsan. Phasellus orci. Phasellus ac est vel dolor pharetra pulvinar.</em></p>
				<p><strong>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna. Nam facilisis dui at nunc. Suspendisse potenti. Aliquam elit. Sed accumsan. Phasellus orci. Phasellus ac est vel dolor pharetra pulvinar.</strong></p>
				<p><strong><em>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna. Nam facilisis dui at nunc. Suspendisse potenti. Aliquam elit. Sed accumsan. Phasellus orci. Phasellus ac est vel dolor pharetra pulvinar.</em></strong></p>
				<blockquote>Maecenas consequat faucibus elit. Aenean elit mauris, luctus id, gravida ut, iaculis eu, urna. Morbi eros augue, dapibus eu, accumsan ut, cursus ac, magna. Nam facilisis dui at nunc. Suspendisse potenti. Aliquam elit. Sed accumsan. Phasellus orci. Phasellus ac est vel dolor pharetra pulvinar. <cite>John Doe</cite></blockquote>
				<ul>
					<li>
						Lorem ipsum
						<ul>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ul>
					</li>
					<li>Lorem ipsum</li>
					<li>Lorem ipsum</li>
					<li>Lorem ipsum</li>
				</ul>
				<ol>
					<li>
						Lorem ipsum
						<ol>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ol>
					</li>
					<li>Lorem ipsum</li>
					<li>Lorem ipsum</li>
					<li>Lorem ipsum</li>
				</ol>
			</div>
			<div class="span3">
				<p><a href="#" class="btn btn-large btn-block">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-primary">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-info">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-success">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-warning">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-danger">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-large btn-inverse">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-block">Lorem ipsum</a></p>
				<p><a href="#" class="btn">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-primary">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-info">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-success">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-warning">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-danger">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-inverse">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-block">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-primary">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-info">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-success">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-warning">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-danger">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-small btn-inverse">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-block">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-primary">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-info">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-success">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-warning">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-danger">Lorem ipsum</a></p>
				<p><a href="#" class="btn btn-mini btn-inverse">Lorem ipsum</a></p>
			</div>
			<div class="span3">
				<p><input type="text" placeholder="Text input" class="span3"></p>
				<p><select class="span3">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select></p>
				<p><select multiple="multiple" class="span3">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select></p>
				<p><textarea rows="3" class="span3"></textarea></p>
				<p><button type="submit" class="btn">Submit</button></p>
				<div class="well well-large">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed dui odio, euismod vel, hendrerit nonummy, molestie quis, erat. Sed ac mauris quis tortor ultrices rutrum.
				</div>
				<div class="well">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed dui odio, euismod vel, hendrerit nonummy, molestie quis, erat. Sed ac mauris quis tortor ultrices rutrum.
				</div>
				<div class="well well-small">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed dui odio, euismod vel, hendrerit nonummy, molestie quis, erat. Sed ac mauris quis tortor ultrices rutrum.
				</div>
				<div class="progress">
					<div class="bar" style="width: 60%;"></div>
				</div>
				<div class="progress progress-striped">
					<div class="bar" style="width: 60%;"></div>
				</div>
				<div class="progress progress-striped active">
					<div class="bar" style="width: 60%;"></div>
				</div>
				<div class="progress">
					<div class="bar bar-success" style="width: 35%;"></div>
					<div class="bar bar-warning" style="width: 20%;"></div>
					<div class="bar bar-danger" style="width: 10%;"></div>
				</div>
			</div>	
		</div>
		
	</div>
</div>
<!-- END of Custom
================================================== -->



<!-- Footer
================================================== -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<a href="http://www.ua.edu" target="_blank"><img src="http://culverhouse.ua.edu/img/front_images/top_ua_wordmark2.png" style="height:57px;display:block;margin-left:auto;margin-right:auto;" alt="The University of Alabama" title="The University of Alabama"/></a>
			</div>
		</div>
		<div class="row">
			<div class="span4">
				<h5>Culverhouse College of Commerce</h5>
				<p><a href="http://culverhouse.ua.edu" target="_blank">http://culverhouse.ua.edu</a></p>
			</div>
			<div class="span4">
				<h5>Manderson Graduate School of Business</h5>
				<p><a href="http://manderson.culverhouse.ua.edu" target="_blank">http://manderson.culverhouse.ua.edu</a></p>
			</div>
			<div class="span4">
				<h5>Culverhouse Diversity Leadership conference</h5>
				<p><a href="http://culverhouse.ua.edu/cldc" target="_blank">http://culverhouse.ua.edu/cldc</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- END of Footer
================================================== -->




<!-- JavaScript
================================================== -->
<script src="external/jquery.js"></script>
<script src="script/jquery.videobackground.js"></script>

<!-- <script src="js/jquery-1.9.1.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countdown.js"></script> 
<script src="js/jquery.fitvids.js"></script> 
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/jquery-back-to-top-plugin.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 

<script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<!--<script language="javascript" type="text/javascript" src="js/jquery-min.js"></script>-->
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="js/start.validation.js"></script>
<script language="javascript" type="text/javascript" src="js/custom.js"></script>



<script>
var slider = new BeaverSlider({
    structure: {
        container: {
            id: "photo-slider",
            width: 960,
            height: 558
        },
        controls: {
            previewMode: true,
            align: "center",
            containerClass: "control-container-img",
            elementClass: "control-element-img",
            elementActiveClass: "control-element-active-img"
        }
    },
    content: {
        images: [
            "img/slideshow/1stPlace.jpg",
            "img/slideshow/2ndPlace.jpg",
            "img/slideshow/3rdPlace.jpg",
            "img/slideshow/1.jpg",
            "img/slideshow/2.jpg",
            "img/slideshow/3.jpg",
            "img/slideshow/4.jpg",
            "img/slideshow/5.jpg",
            "img/slideshow/6.jpg",
            "img/slideshow/7.jpg",
            "img/slideshow/8.jpg",
            "img/slideshow/9.jpg",
            "img/slideshow/10.jpg",
            "img/slideshow/11.jpg",
            "img/slideshow/12.jpg",
            "img/slideshow/13.jpg",
            "img/slideshow/14.jpg",
            "img/slideshow/15.jpg",
            "img/slideshow/16.jpg",
            "img/slideshow/17.jpg",
            "img/slideshow/18.jpg",
            "img/slideshow/19.jpg",
            "img/slideshow/20.jpg",
            "img/slideshow/21.jpg",
            "img/slideshow/22.jpg",
            "img/slideshow/23.jpg"
        ]
    },
    animation: {
        waitAllImages: true,
        effects: effectSets["slider: big set 2"],
        initialInterval: 1000,
        interval: 2000
    },
    events: {
        afterSlideStart: function(slider) {
            var scrollTo = (slider.currentImage - 2) * $(".control-element-active-img").width();
            
            $(".control-container-img").animate({ scrollLeft: scrollTo }, 400);
        }
    }
});   
	
	
$(document).ready(function() {
				$('dl').toggle();
				$('h2').bind('click', function(event) {
					event.preventDefault();
					$(this).next('dl').slideToggle(500, function() {
						$('.video-background').videobackground('resize');
					});
				});
				$('#vid-display').prepend('<div class="video-background"></div>');
				$('.video-background').videobackground({
					videoSource: [['video/alston-entrance.ogv', 'video/ogg'],
						['video/alston-entrance.webm', 'video/webm'], 
						['video/alston-entrance.mp4', 'video/mp4']], 
					controlPosition: '#main',
					loop: 'loop',
					poster: 'video/alston-entrance.png',
					loadedCallback: function() {
						$(this).videobackground('mute');
					}
				});
			});


$(document).ready(function() {
	// Countdown
	$('#countdown').countdown({until: new Date(
		2015					/* This is the year */,
		1						/* This is the month (Ignore the "-1" behind it!) */ -1,
		29						/* This is the day */
	),
		layout: 'only <strong><span>{dn}</span> {dl}</strong>, <strong><span>{mn}</span> {ml}</strong> and <strong><span>{hn}</span> {hl}</strong> left'
	});
	// FitVids
    $(".container").fitVids();
	// smoothScroll
	$('a').smoothScroll();
	// Back To Top
	$.toTop();
	// Flexslider
	$('.flexslider').flexslider({
		// You can edit this:
		animation: "slide",		/* String: Select your animation type, "fade" or "slide" */
		slideshow: true,		/* Boolean: Animate slider automatically */
		slideshowSpeed: 7000,	/* Integer: Set the speed of the slideshow cycling, in milliseconds */
		animationSpeed: 600,	/* Integer: Set the speed of animations, in milliseconds */
		touch: false,
		// You shouldn't edit this:
		prevText: "<i class='icon-chevron-left icon-white'></i>",
		nextText: "<i class='icon-chevron-right icon-white'></i>",
		start: function(slider){
		$('body').removeClass('loading');
	}
	});
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43606333-12', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
