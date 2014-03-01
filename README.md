# rblcheck

## Overview

rblcheck is a simple PHP function that checks the provided IPv4 address against a set of blacklists. It returns an array containing the blacklists that have you blocked.

## Requirements

* PHP 5.2.0 or greater. (you can remove filter_var if you want to use an older version)
* Google DNS has issues with checking blacklists in this manner. Your server should use another DNS provider. There are plenty of good options. I use OpenDNS.

## License

Code is licensed under MIT Public License.

* If you wish to support my efforts, check out [SkyToaster](https://skytoaster.com/)