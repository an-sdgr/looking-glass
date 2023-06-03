FROM quay.io/frrouting/frr:8.5.1


RUN mkdir -p /root/.ssh \
    && chmod 0700 /root/.ssh \
    && apk add openrc openssh \
    && ssh-keygen -A \
    && mkdir -p /run/openrc \
    && touch /run/openrc/softlevel

RUN echo "root:lg" | chpasswd

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config

RUN echo "root:lg" | chpasswd

ENTRYPOINT ["sh", "-c", "rc-status; rc-service sshd start; /usr/lib/frr/docker-start"]

