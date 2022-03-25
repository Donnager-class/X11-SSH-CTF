FROM ubuntu:18.04

#Updates and non-interaction prompts.
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
    apt-get install -y openssh-server \
                       x11-apps

#Installing necassary apps and services.
RUN apt-get install x11-xserver-utils -y
RUN apt-get install xterm -y
RUN apt-get install xnest -y
RUN apt --fix-missing update
RUN apt-get install xubuntu-desktop -y

#Changing config files for SSH to allow graphical output.
RUN mkdir -p /var/run/sshd
RUN echo 'root:FlaggyMcFlag' | chpasswd
RUN sed -ri 's/^#PermitRootLogin\s+.*/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN sed -ri 's/UsePAM yes/#UsePAM yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#AllowTcpForwarding\s+.*/AllowTcpForwarding yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11Forwarding\s+.*/X11Forwarding yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11UseLocalhost\s+.*/X11UseLocalhost no/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#PermitEmptyPasswords\s+.*/PermitEmptyPasswords yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#ListenAddress ::\s+.*/ListenAddress ::/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11DisplayOffset\s+.*/X11DisplayOffset 10/g' /etc/ssh/sshd_config

#Adding additional user with no password and adding personal information.
#User1
RUN useradd -m amosburton
RUN mkdir -p /home/amosburton/.ssh
RUN passwd -d amosburton
RUN touch reminder.txt
RUN echo "Reminder: I need to update my password for my work email: timothybaltimore89@gmail.com" >> /home/amosburton/reminder.txt
#User2
RUN useradd -m rocinante
RUN mkdir -p /home/rocinante/.ssh
RUN passwd -d rocinante
RUN touch IOU.txt
RUN echo "IOU: Buy Bobby Draper Coffee." >> /home/rocinante/IOU.txt
#User1
RUN useradd -m belterInaros
RUN mkdir -p /home/belterInaros/.ssh
RUN passwd -d belterInaros
RUN touch next_week.txt
RUN echo "Reminder: alex.kamal@mcrn.com needs faster transport." >> /home/belterInaros/next_week.txt
#User1
RUN useradd -m chrisjenAVA
RUN mkdir -p /home/chrisjenAVA/.ssh
RUN passwd -d chrisjenAVA
RUN touch UN.txt
RUN echo "Reminder: Arange meeting with Marco and Drummer" >> /home/chrisjenAVA/UN.txt
#User1
RUN useradd -m Drummer
RUN mkdir -p /home/Drummer/.ssh
RUN passwd -d Drummer
RUN touch today.txt.txt
RUN echo "Go Outside" >> /home/Drummer/today.txt
#root
RUN touch todo.txt
RUN echo "Reminder: Employee cannot login. Give employee new credentials amosburton:baltimore89" >> /root/todo.txt

#Exposing SSH port and allowing DISPLAY accross SSH.
EXPOSE 6000
EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]
#ENTRYPOINT "/entrypoint.sh"

#To run a Desktop GUI and start X.Org Xserver use the following:
#_______________________________________________________________#
#startxfce4

#NOTE: Use "xhost +" before running your container. Use "xhost" inside SSH to verify changes.