var links = new Array(15)

    links[0]="http://roymurdock.com/blogs/2013/0924iphone5s.php";
    links[1]="http://roymurdock.com/blogs/2013/1005iphonedeath.php";
    links[2]="http://roymurdock.com/blogs/2013/1104snapchat.php";
    links[3]="http://roymurdock.com/blogs/2014/0413bitcoinvclassic.php";
    links[4]="http://roymurdock.com/blogs/2014/0417moneyismemory.php"
    links[5]="http://roymurdock.com/blogs/2014/0715lse.php"
    links[6]="http://roymurdock.com/blogs/2015/0705grexit.php";
    links[7]="http://roymurdock.com/blogs/2015/0726applewatch.php";
    links[8]="http://roymurdock.com/blogs/2015/0728hedgefunds.php";
    links[9]="http://roymurdock.com/blogs/2016/0115socrates.php";
    links[10]="http://roymurdock.com/blogs/2016/0731krugmanreview.php";
    links[11]="http://roymurdock.com/photodump/2015-07-london/2015-07-london.php";
    links[12]="http://roymurdock.com/photodump/2015-12-acadia/2015-12-acadia.php";
    links[13]="http://roymurdock.com/photodump/2014-06-jordan/2014-06-jordan.php";
    links[14]="http://roymurdock.com/photodump/2018-08-georgia/2018-08-georgia.php";
    links[15]="http://roymurdock.com/photodump/2018-10-joshuatree/2018-10-joshuatree.php";

function go() { 
var randomnumber = Math.round(Math.random()*15)
location = links[randomnumber] 
}

