# WUbanner

*by Jan Neurocny from eMeteo.sk*

*[https://wubanner.emeteo.sk][1]*

## About

[Wunderground][2] doesn't support secured HTTPS protocol for their Weather Strickers®, so they not works on secured sites. Until Wunderground resolve this error, we've decided to develop a script that will keep Weather Stickers running on HTTPS sites. Our PHP script get Wunderground Weather Sticker® via PHP file_get_contents function and directly show as image.

Developers of this script has no responsibility for the use of this script and site.

## Prerequisites

WUbanner required  PHP 5.4.7 or later. For full HTTPS support your domain or subdomain must have HTTPS certificate. 

## Installation and Use

Simply copy wubanner.php and index.php (index.php is required only for generator frontpage, for image only is not required) to your web server. 

https://example.com/wubanner.php?bannertype=BANNER_TYPE&weatherstationcount=YOUR_STATION_ID

Allowed banner types: 
pws250 / pws250_metric / pws250_both
wxstnsticker / wxstnsticker_metric / wxstnsticker_both
WeatherStationCount

## License

WUbanner is under [MIT License][3].


  [1]: https://wubanner.emeteo.sk
  [2]: https://www.wunderground.com
  [3]: https://github.com/bagocina/wubanner/blob/master/LICENSE