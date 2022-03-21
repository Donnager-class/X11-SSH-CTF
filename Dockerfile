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
RUN echo 'root:root' | chpasswd
RUN sed -ri 's/^#PermitRootLogin\s+.*/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN sed -ri 's/UsePAM yes/#UsePAM yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#AllowTcpForwarding\s+.*/AllowTcpForwarding yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11Forwarding\s+.*/X11Forwarding yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11UseLocalhost\s+.*/X11UseLocalhost no/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#PermitEmptyPasswords\s+.*/PermitEmptyPasswords yes/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#ListenAddress ::\s+.*/ListenAddress ::/g' /etc/ssh/sshd_config
RUN sed -ri 's/^#X11DisplayOffset\s+.*/X11DisplayOffset 10/g' /etc/ssh/sshd_config

#Adding additional user with no password.
RUN useradd -m user
RUN mkdir -p /home/user/.ssh
RUN passwd -d user

#Exposing SSH port and allowing DISPLAY accross SSH.
EXPOSE 6000
EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

#To run a Desktop GUI and start X.Org Xserver use the following:
#_______________________________________________________________#
#startxfce4

#NOTE: Use "xhost +" before running your container. Use "xhost" inside SSH to verify changes.