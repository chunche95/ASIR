#!/bin/bash

# @Title: Firewall panic.
# @Description: Firewall Blocking all communications.
#  Uso: ./firewallPanic.sh IP 
#  Ejemplo:
#   192.168.1.99 IP Sysadmin
#   ./firewallPanic 192.168.1.99
#
# @Author: Pauchino09


ssh_src=
ssh_sport="0:65535"
ssh_dport="0:65535"

CAT_CMD="/bin/cat"
IPTABLES_CMD="/sbin/iptables"
GREP_CMD="/bin/grep"
CUT_CMD="/usr/bin/cut"
MODPROBE_CMD="/sbin/modprobe"
LOGGER_CMD="/usr/bin/logger"

# Solo root puede ejecutar el script.
if [ ! "${UID}" = 0 ]
then
	echo ""
    echo ""
    echo ""
    echo >&2 "Only user root can run firewallPanic."
	echo ""
    echo ""
    exit 1
fi

if [ ! -z "${SSH_CLIENT}" ]; then
	set -- ${SSH_CLIENT}
	ssh_src="${1}"
	ssh_sport="${2}"
	ssh_dport="${3}"
elif [ ! -z "${1}" ]; then
	ssh_src="${1}"
fi
		
${LOGGER_CMD} info "Starting PANIC mode (SSH SOURCE_IP=${ssh_src} SOURCE_PORTS=${ssh_sport} DESTINATION_PORTS=${ssh_dport})"
    echo ""
    echo ""
    echo ""
    echo >&2 "firewallPanic.sh: Blocking all communications:"
    echo ""
    echo ""
    echo ""
${MODPROBE_CMD} ip_tables
tables=`${CAT_CMD} /proc/net/ip_tables_names`
for t in ${tables}
do
	${IPTABLES_CMD} -t "${t}" -F
	${IPTABLES_CMD} -t "${t}" -X
	${IPTABLES_CMD} -t "${t}" -Z

	# Encontrar todos los cambios por defector en las tablas.
	chains=`${IPTABLES_CMD} -t "${t}" -nL | ${GREP_CMD} "^Chain " | ${CUT_CMD} -d ' ' -f 2`
	for c in ${chains}
	do
		${IPTABLES_CMD} -t "${t}" -P "${c}" ACCEPT
		if [ ! -z "${ssh_src}" ] ; then
			${IPTABLES_CMD} -t "${t}" -A "${c}" -p tcp -s "${ssh_src}" --sport "${ssh_sport}" --dport "${ssh_dport}" -m conntrack --ctstate ESTABLISHED -j ACCEPT
			${IPTABLES_CMD} -t "${t}" -A "${c}" -p tcp -d "${ssh_src}" --dport "${ssh_sport}" --sport "${ssh_dport}" -m conntrack --ctstate ESTABLISHED -j ACCEPT
		fi
		if [ "${t}" != "nat" ] ; then
			${IPTABLES_CMD} -t "${t}" -A "${c}" -j DROP
		fi
	done
done