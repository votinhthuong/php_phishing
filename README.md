# php_phishing
I combine FILE and FTP Function techniques of PHP programming to make a simple sample of phishing in web application.
Let me introduce a little about code function in this project. First, I use a sample Facebook template and edit something in form where it allow victim insert information to login in Facebook. But of course, this is a fake login site, so it just care about 2 function I written in it. When they press Enter or Login button, it call to function writing all information to a text file. 
Finally, it send the text file to my FTP server. So, ta-da! Gotta your login Facebook's account!

The bad job in this code - like my friend said to me - is that if something wrong and make my FTP function corrupted, in process when sending text file contain information I captured before, it will do... nothing! Ha-hah...

Best idea for that bad thing is - also my friend suggested - check for that FTP function. In the case when everything going well, it auto get that information and send to REAL Facebook login, aim to make victim think that they don't make anything mistake (But they did!). And in case corrupt happend in the transmission, it redirect to my FAKE Facebook login site, and alert victim type account again (Of course they correct it in the first time).

Vo T. Thuong
votinhthuong9@gmail.com
