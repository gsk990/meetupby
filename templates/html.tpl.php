<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="apple-touch-icon" href="/sites/all/themes/meetupby/apple-touch-icon-precomposed.png"/>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-startup-image" href="/sites/all/themes/meetupby/startup.png">
  
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 <link rel="alternate" type="application/rss+xml" title="Meetup.by RSS" href="http://feeds.feedburner.com/MeetupBy"> 
   
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
