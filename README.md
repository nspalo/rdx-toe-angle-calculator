# rdx-toe-angle-calculator
Reve D RDX - Toe Angle Calculator
> A simple program written in PHP to compute the rear toe angle for RDX

### Pre-requisite (MUST HAVE)
- Composer (see: https://getcomposer.org/download/)
- PHP 8.3 and above (see: https://www.php.net/downloads.php)

### How to set up:
- Install composer and PHP (Non-Devs might need to watch YT Tuts)
- Open cmd / terminal then run composer install

### How to use:
- Open cmd / terminal then run the program
    - `$ php rdx-toe.php <susBlockRF> <bushingRF> <susBlockRR> <bushingRR>`

### Sample usage
```
$ php rdx-toe.php 8 Eo 9 Eo
```
### Sample output:
```
Reve D RDX
----------------------------
 Rear Toe Angle Calculator
----------------------------
 RF Suspension Block
 - Block #: 8
 - Bushing: E Out
 - Length: 67.6
----------------------------
 RR Suspension Block
 - Block #: 9
 - Bushing: E Out
 - Length: 71.2
----------------------------
 Difference: 3.6
 Toe Angle: 2.4
```