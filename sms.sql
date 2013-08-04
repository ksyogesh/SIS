<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin </title>
    <link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?server=1&amp;token=8b6f6b556763042cae22ef6cebe163bd&amp;js_frame=right&amp;nocache=3988383895" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="./themes/pmahomme/jquery/jquery-ui-1.8.custom.css" />
    <meta name="robots" content="noindex,nofollow" />
<script src="./js/cross_framing_protection.js?ts=1329568005" type="text/javascript"></script>
<script src="./js/jquery/jquery-1.4.4.js?ts=1329568005" type="text/javascript"></script>
<script src="./js/update-location.js?ts=1329568005" type="text/javascript"></script>
<script src="./js/functions.js?ts=1329568005" type="text/javascript"></script>
<script src="./js/jquery/jquery.qtip-1.0.0.min.js?ts=1329568005" type="text/javascript"></script>
<script src="./js/messages.php?lang=en&amp;db=sms&amp;token=8b6f6b556763042cae22ef6cebe163bd" type="text/javascript"></script>
<script type="text/javascript">
// <![CDATA[
// Updates the title of the frameset if possible (ns4 does not allow this)
if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
    && typeof(parent.document.title) == 'string') {
    parent.document.title = 'phpMyAdmin ';
}

// ]]>
</script>
<script type="text/javascript">
//<![CDATA[
// show login form in top frame
if (top != self) {
    window.top.location.href=location;
}
//]]>
</script>
</head>

<body class="loginform">

    
<div class="container">
<a href="./url.php?url=http%3A%2F%2Fwww.phpmyadmin.net%2F&amp;token=8b6f6b556763042cae22ef6cebe163bd" target="_blank" class="logo"><img src="./themes/pmahomme/img/logo_right.png" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0" /></a>
<h1>
    Welcome to <bdo dir="ltr" xml:lang="en">phpMyAdmin </bdo></h1>
    
<form method="post" action="index.php" target="_parent">
    <input type="hidden" name="db" value="sms" /><input type="hidden" name="table" value="" /><input type="hidden" name="token" value="8b6f6b556763042cae22ef6cebe163bd" /><fieldset><legend xml:lang="en" dir="ltr">Language</legend>
    <select name="lang" onchange="this.form.submit();" xml:lang="en" dir="ltr">
            <option value="ar">&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; - Arabic</option>
        <option value="be">&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1072;&#1103; - Belarusian</option>
        <option value="be@latin">Bie&#0322;aruskaja - Belarusian latin</option>
        <option value="bg">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; - Bulgarian</option>
        <option value="bn">বাংলা - Bangla</option>
        <option value="ca">Catal&agrave; - Catalan</option>
        <option value="cs">&#268;esky - Czech</option>
        <option value="da">Dansk - Danish</option>
        <option value="de">Deutsch - German</option>
        <option value="el">&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940; - Greek</option>
        <option value="en" selected="selected">English</option>
        <option value="en_GB">English (United Kingdom)</option>
        <option value="es">Espa&ntilde;ol - Spanish</option>
        <option value="et">Eesti - Estonian</option>
        <option value="fi">Suomi - Finnish</option>
        <option value="fr">Fran&ccedil;ais - French</option>
        <option value="gl">Galego - Galician</option>
        <option value="hi">&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; - Hindi</option>
        <option value="hr">Hrvatski - Croatian</option>
        <option value="hu">Magyar - Hungarian</option>
        <option value="id">Bahasa Indonesia - Indonesian</option>
        <option value="it">Italiano - Italian</option>
        <option value="ja">&#26085;&#26412;&#35486; - Japanese</option>
        <option value="ka">&#4325;&#4304;&#4320;&#4311;&#4323;&#4314;&#4312; - Georgian</option>
        <option value="lt">Lietuvi&#371; - Lithuanian</option>
        <option value="mn">&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; - Mongolian</option>
        <option value="nb">Norsk - Norwegian</option>
        <option value="nl">Nederlands - Dutch</option>
        <option value="pl">Polski - Polish</option>
        <option value="pt_BR">Portugu&ecirc;s - Brazilian portuguese</option>
        <option value="ro">Rom&acirc;n&#259; - Romanian</option>
        <option value="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; - Russian</option>
        <option value="si">&#3523;&#3538;&#3458;&#3524;&#3517; - Sinhala</option>
        <option value="sk">Sloven&#269;ina - Slovak</option>
        <option value="sl">Sloven&scaron;&#269;ina - Slovenian</option>
        <option value="sr">&#1057;&#1088;&#1087;&#1089;&#1082;&#1080; - Serbian</option>
        <option value="sr@latin">Srpski - Serbian latin</option>
        <option value="sv">Svenska - Swedish</option>
        <option value="tr">T&uuml;rk&ccedil;e - Turkish</option>
        <option value="uk">&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; - Ukrainian</option>
        <option value="uz">&#1038;&#1079;&#1073;&#1077;&#1082;&#1095;&#1072; - Uzbek-cyrillic</option>
        <option value="uz@latin">O&lsquo;zbekcha - Uzbek-latin</option>
        <option value="zh_CN">&#20013;&#25991; - Chinese simplified</option>
        <option value="zh_TW">&#20013;&#25991; - Chinese traditional</option>

    </select>
    </fieldset>
    <noscript>
    <fieldset class="tblFooters">
        <input type="submit" value="Go" />
    </fieldset>
    </noscript>
</form>
    <br />
<!-- Login form -->
<form method="post" action="index.php" name="login_form" target="_top" class="login">
    <fieldset>
    <legend>
Log in<a href="./Documentation.html" target="documentation" title="phpMyAdmin documentation"><img class="icon" src="./themes/pmahomme/img/b_help.png" width="11" height="11" alt="phpMyAdmin documentation" /></a></legend>

        <div class="item">
            <label for="input_username">Username:</label>
            <input type="text" name="pma_username" id="input_username" value="root" size="24" class="textfield"/>
        </div>
        <div class="item">
            <label for="input_password">Password:</label>
            <input type="password" name="pma_password" id="input_password" value="" size="24" class="textfield" />
        </div>
        <input type="hidden" name="server" value="1" />    </fieldset>
    <fieldset class="tblFooters">
        <input value="Go" type="submit" id="input_go" />
    <input type="hidden" name="db" value="sms" /><input type="hidden" name="token" value="8b6f6b556763042cae22ef6cebe163bd" />    </fieldset>
</form>

    </div>
    </body>
</html>
    