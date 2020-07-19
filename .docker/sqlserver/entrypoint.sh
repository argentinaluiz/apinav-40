#!/bin/bash
/opt/mssql/bin/sqlservr & ./init_db.sh

tail -f /dev/null