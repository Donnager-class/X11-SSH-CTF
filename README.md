# X-CTF 

## myCTF  
 ![](/images/ctf_6_1.png) 
## What does this CTF entail? 
This Dockerfile is a CTF that is based on an x11 service in addition to an apache2 and mysql service. The CTF mentioned is a "capture the flag" scenario that focusses on a variety of vulnerabilities to obtain the "flag". The first vulnerability is a service misconfiguration and other vulnerabilities may differ.  
 
The goal is to obtain the "flag"(you will know it when you see it.). It is recommended to start from the misconfiguration, but there is more than one method to obtain the flag.
 
--- 
## The scenario:
 You connect to a company's local network while visiting. Upon talking to one of the staff members, they briefly mentioned that access controlled is disabled. Their Desktop environment for their employees to work on has been configured lazily. Exploit their staff's working environment to gain full control of their service. 
 (Amos, Burton is the name of the person you were talking to.)

---
## CTF setup guide 
Firstly, clone the repository to your terminal: 
```
git clone https://gitlab.com/thephoenix2022/projecta1.git 
```

Go to the repository: 
```
cd projecta1/ 
```  
Set the service misconfiguration before running your container:  
```
xhost + 
```
Build your Dockerfile:  
```
docker-compose build
``` 
```
docker-compose up
``` 
If the x11 script did not run it can be fixed by doing the following in the x11 directory. Note that it may take a while to build: 
```
docker build -t x11box . 
```  
```
docker run -d --name x11box-active -v /data/projects:/projects -p 6000:22 x11box 
```
---
## Connect to your CTF   
 
Use the following to connect locally: 
```
ssh -X <username>@localhost -p 6000   
```

If you want to connect remotely use:  
```
ssh -X <username>@<ip> -p 6000 
``` 
 ---
## Your starting point
  
 The following example is in the secure shell of your localhost:
![](/images/ctf_4_1.png)
NOTE: Your graphical environment may look different from the example, but all necessary tools will be available in the secure shell. If you do not have this graphical output you can simply enter the command for the application in your secure shell.  
 e.g. "xterm" will bring the up your terminal.  

 Here is an example of a remote connection:
![](/images/ctf_5_1.png)
Context: In this remote example "startxfce4" was not used, instead "xclock" was ran to provide an example, if your graphical environment did not output correctly. This proves that all applications can still be used inside the secure shell without "startxfce4".