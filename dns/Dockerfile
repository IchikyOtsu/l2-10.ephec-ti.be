FROM internetsystemsconsortium/bind9:9.18
COPY bind/config/named.conf /etc/bind/named.conf
COPY bind/zones/ /etc/bind/zones/
RUN chown -R bind:bind /etc/bind/
CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]

