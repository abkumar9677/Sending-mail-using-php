### To know about...
##### First of all the following things that we have to know about the keys listed below.
1. SMTP
2. SSL

#### SMTP
[Link to SMTP](https://rb.gy/u4wlt1)

##### SSL
[Link to SSL](https://rb.gy/opkkks)

### Which smtp port?

##### Which SMTP port should you use?
##### What about today? How are these standard ports different? Have any deprecated over time?

Below are the answer for these question and some details about the ports.

##### Port '25':
SMTP port 25 continues to be used primarily for SMTP relaying. SMTP relaying is the transmission of email from email server to email server.

In most cases, modern SMTP email clients (Microsoft Outlook, Mail, Thunderbird, etc.) shouldn't use this port. It is traditionally blocked by residential ISPs and Cloud Hosting Providers, to curb the amount of spam that is relayed from compromised computers or servers. Unless you're specifically managing a mail server, you should have no traffic traversing this port on your computer or server. 

##### Port '465':
IANA has reassigned a new service to this port, and it should no longer be used for SMTP communications.

However, because it was once recognized by IANA as valid, there may be legacy systems that are only capable of using this connection method. Typically, you will use this port only if your application demands it. A quick Google search, and you'll find many consumer Inbox Service Providers' (ISPs) articles that suggest port 465 as the recommended setup. However, we do not recommend it, as it is not RFC compliant.

##### Port '587':
This is the default mail submission port. When an email client or outgoing server is submitting an email to be routed by a proper mail server, it should always use SMTP port 587 as the default port.

This port, coupled with TLS encryption, will ensure that email is submitted securely and following the guidelines set out by the IETF.

All Mailgun customers should consider using port 587 as their default SMTP port unless you're explicitly blocked by your upstream network or hosting provider.


## The process................................................................
To send mail from localhost XAMPP using Gmail, configure XAMPP after installing it. Follow the below steps for the same.

Steps to Send Mail From Localhost XAMPP Using Gmail:

'''Open XAMPP Installation Directory.'''


Go to C:\xampp\php and open the 'php.ini' file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = YourGmailId@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


Now, go to C:\xampp\sendmail and open the 'sendmail.ini' file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values
smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=YourGmailId@gmail.com
auth_password=Your-Gmail-Password
force_sender=YourGmailId@gmail.com(optional)

### NOw, everything has been done execute your program and do not forget to '''restart xampp server after the modification'''
'''
**Note**: If you are getting a warning message then Please configure “Less secure apps” settings as shown below. Sometimes without turning on the 'less secure apps' is the main reason the user didn't receive the mail.
'''
=> Turning on 'less secure apps' settings as mailbox user

Go to your (Google Account).
On the left navigation panel, click Security.
On the bottom of the page, in the Less secure app access panel, click Turn on access.
If you don't see this setting, your administrator might have turned off less secure app account access (check the instruction above).
Click the Save button.