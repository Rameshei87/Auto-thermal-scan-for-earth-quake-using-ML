#!/bin/bash


if [  $(find /home/maneesh/SPS/SPS_5.1.0.0/Trunk -mmin -40 -type f -name "commondata.txt" 2>/dev/null) ] ; then
   echo "recently"
else
   echo "not so recently"
fi
