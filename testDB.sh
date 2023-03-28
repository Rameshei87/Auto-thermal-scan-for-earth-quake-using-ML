#!/bin/bash

LogDirectory='/home/bmobsps/SPS/trunk'
#DataDirectory='/var/tmp/data'

DBUSER='SPS_PROD'
DBUSERPASSWORD='SPS_PROD'
DB='CBS'

sqlplus -s <<EOF  > ${LogDirectory}/query.log
${DBUSER}/${DBUSERPASSWORD}@${DB}
set linesize 2000
set feedback off
set heading off

select * from m_physical_ne where rownum <=1;

EOF
