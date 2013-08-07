process.php is a backup and not required here

It is hosted on http://mailbox.comuv.com/process.php

However, google drive only support static hosting and doesnt support php

The solution for cross-domain post request via JavaScript

Reference:
http://stackoverflow.com/questions/298745/how-do-i-send-a-cross-domain-post-request-via-javascript

General Hack:
http://websitez.com/javascript-cross-domain-post-get/

OR
put this in php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type');

Source: http://stackoverflow.com/questions/16831201/how-to-send-a-ajax-post-request-from-client-to-server
