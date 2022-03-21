# X-CTF 

## myCTF  
 ![](/images/ctf_6_1.png) 
## What does this CTF entail? 
This Dockerfile is a CTF that is based on an x11 service in addition to an apache2 and mySQL service. The CTF mentioned is a "capture the flag" scenario that focusses on varies of vulnerabilities to obtain the "flag". The first vulnerbility is a service misconfiguration and other vulnerabilities may differ.  
 
The goal is to obtain the "flag"(you will know it when you see it.). It is recommended to start from the misconfiguration, but there is more than one method to obtain the flag.
 
--- 
## The scenario:
 You are connected to a company's local network while visiting. Upon doing a port scan you found that their XServer has access controlled disabled. Their Desktop environment for their employees to work on has been configured lazily. Exploit their staff's working enviroment to gain full control of their service.

---
## CTF setup guide 
Firstly, clone the repository to your teminal: 
```
git clone https://gitlab.com/thephoenix2022/projecta1.git 
```

Go to the repository: 
```
cd projecta1/ 
``` 

Build your Dockerfile. Note that it may take a while to build: 
```
sudo docker build -t x11box . 
``` 

Run the Dockerfile on port 6000:  
```
sudo docker run -d --name x11box-active -v /data/projects:/projects -p 6000:22 x11box 
```

Lastly, use your service misconfiguration:  
```
xhost + 
```
---
## Connect to your CTF   
 
Use the following to connect locally: 
```
ssh -X user@localhost -p 6000   
```

If you want to connect remotly use:  
```
ssh -X user@<ip> -p 6000 
``` 
 ---
## Your starting point
  
 The following example is inside the secure shell of your localhost:
![](/images/ctf_4_1.png)
NOTE: Your graphical environment may look diffrent from the example, but all nessacary tools will be available inside the secure shell. If you do not have this graphical output you can simply enter the command for the application in your secure shell.  
 e.g. "xterm" will bring the up your terminal.  

 Here is another example of a remote connection:
![](/images/ctf_5_1.png)
Context: In this remote example "startxfce4" was not used, intsead "xclock" was ran to provide an example if your graphical environemt did not output correctly. This proves that all applications can still be used inside the secure shell without "startxfce4".