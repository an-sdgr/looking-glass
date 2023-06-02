FROM quay.io/frrouting/frr:8.5.1


RUN mkdir -p /root/.ssh \
    && chmod 0700 /root/.ssh \
    && apk add openrc openssh \
    && ssh-keygen -A \
    && echo -e "PasswordAuthentication yes" >> /etc/ssh/sshd_config \
    && mkdir -p /run/openrc \
    && touch /run/openrc/softlevel

RUN echo "root:pass" | chpasswd

RUN rc-update add sshd default

ENTRYPOINT ["/sbin/tini", "--"]

CMD ["/usr/lib/frr/docker-start"]

