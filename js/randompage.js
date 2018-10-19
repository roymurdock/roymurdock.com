var links = new Array(15)

    links[0]="http://roymurdock.com/blogs/2013/0924iphone5s.html";
    links[1]="http://roymurdock.com/blogs/2013/1005iphonedeath.html";
    links[2]="http://roymurdock.com/blogs/2013/1104snapchat.html";
    links[3]="http://roymurdock.com/blogs/2014/0413bitcoinvclassic.html";
    links[4]="http://roymurdock.com/blogs/2014/0417moneyismemory.html"
    links[5]="http://roymurdock.com/blogs/2014/0715lse.html"
    links[6]="http://roymurdock.com/blogs/2015/0705grexit.html";
    links[7]="http://roymurdock.com/blogs/2015/0726applewatch.html";
    links[8]="http://roymurdock.com/blogs/2015/0728hedgefunds.html";
    links[9]="http://roymurdock.com/blogs/2016/0115socrates.html";
    links[10]="http://roymurdock.com/blogs/2016/0731krugmanreview.html";
    links[11]="http://roymurdock.com/photodump/2015-07-london/2015-07-london.html";
    links[12]="http://roymurdock.com/photodump/2015-12-acadia/2015-12-acadia.html";
    links[13]="http://roymurdock.com/photodump/2014-06-jordan/2014-06-jordan.html";
    links[14]="http://roymurdock.com/photodump/2018-08-georgia/2018-08-georgia.html";
    links[15]="http://roymurdock.com/photodump/2018-10-joshuatree/2018-10-joshuatree.html";

function go() { 
var randomnumber = Math.round(Math.random()*15)
location = links[randomnumber] 
}

