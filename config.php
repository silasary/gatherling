<?php

# CONFIGURATION FILE FOR GATHERLING 
# CHANGE THE FOLLOWING VARIABLES
#
# AND MAKE THE FILE UNREADABLE BY HTACCESS!
#
# === Database ===
$CONFIG['db_hostname'] = 'localhost';
$CONFIG['db_username'] = 'gatherli_public';
$CONFIG['db_password'] = 'Lk33;=a4IZEh';
$CONFIG['db_database'] = 'gatherli_gatherling';

# === Website ===
# The base url where gatherling is installed.
$CONFIG['base_url'] = "localhost/pdcmagic";
# The name of your site.  This is used in a lot of places.
$CONFIG['site_name'] = "PDCMagic.com";
# The Style of the site.
$CONFIG['style'] = "default";
# A description for the ical calendar which is accessible at calendar.php
$CONFIG['calendar_description'] = "a description for the events calendar";

# === Infobot PARAMETERS ==
# If you have set it up with infobot to contact the site, you can change the passkey here.
# If you haven't set it up with infobot, leave this blank.
$CONFIG['infobot_passkey'] = "";

# THAT'S ALL FOLKS!
