    #!/bin/sh  
    ISRUN=`ps|grep "openvpn"|wc -l`  
    if [[ $ISRUN -lt 1 ]]  
    then  
    echo "Not running, start!"  
    /usr/local/sbin/openvpn --config /etc/openvpn/server.conf --daemon  
    else  
    echo "Openvpn is already running."  
    exit  
    fi 
