<?php
$baseUrl = UNL_Peoplefinder::getURL();
$version = UNL_Peoplefinder::$staticFileVersion;

$loginService = UNL_Officefinder::getURL();
if (strpos($loginService, '//') === 0) {
    $loginService = 'https:' . $loginService;
}
$loginUrl = 'https://login.unl.edu/cas/login?service=' . urlencode($loginService);
$logoutUrl = 'https://login.unl.edu/cas/logout?url=' . urlencode($loginService);
?>
<meta name="description" content="UNL Directory is the Faculty, Staff and Student online directory for the University. Information obtained from this directory may not be used to provide addresses for mailings to students, faculty or staff. Any solicitation of business, information, contributions or other response from individuals listed in this publication by mail, telephone or other means is forbidden."/>
<meta name="keywords" content="university of nebraska-lincoln student faculty staff directory vcard"/>
<meta name="author" content="University of Nebraska–Lincoln Office of University Communications"/>

<link rel="home" href="<?php echo $baseUrl ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl ?>css/directory.css?v=<?php echo $version ?>"/>
<script>
var PF_URL = "<?php echo $baseUrl ?>",
	ANNOTATE_URL = "<?php echo UNL_Peoplefinder::$annotateUrl ?>";

require(['jquery', 'idm'], function($, idm) {
	$(function() {
		idm.setLoginURL('<?php echo $loginUrl ?>');
		idm.setLogoutURL('<?php echo $logoutUrl ?>');
	});
});

<?php if (isset($_GET['print'])): ?>
require(['jquery'], function() {
	$(window).load(function() {
		window.print();
	});
});
<?php endif; ?>
</script>
<script src="<?php echo $baseUrl ?>scripts/toolbar_peoplefinder.js?v=<?php echo $version ?>"></script>
<script src="<?php echo $baseUrl ?>scripts/peoplefinder.js?v=<?php echo $version ?>"></script>
