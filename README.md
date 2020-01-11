# Playing Card Distributor

### Description

An application that will distribute playing cards evenly to a number of players defined by the app user.

### Configuration & Dependencies

The application is built using [PHP version 7.3.5](https://www.php.net/downloads.php)  and the test is using [PHP Unit version 6.2.4](https://phpunit.de/). 

### Installation Instructions

There is no need to install the application.
Just clone the repository into your local root directory and you can access the application using the browser.

```
$ git clone https://github.com/ahmad-zul/playing-cards
navigate to http://localhost/playing-cards in your browser
```

### Testing Instructions
Testing is done using phpunit version 6.2.4.
Testing covers all the functions located inside CardProcessor.php file. 
The test try to cover all the possible scenario that I can think off.
To run the test, simple issue the command below:

```
$ phpunit CardProcessorTest.php 
```
