#!/bin/bash

# This is meant to be run as root and put in any of the /etc/cron.* files
# This file requires that AWSCLI is installed and configured
# This file automatically keeps 30 days of backups for both db & sitebackup
# This file is safe to run automatically as it produces no output (good or bad that's how it is)
# This file is dumb and assumes you've already created /srv/${THESITE} folder, as well as /srv/${THESITE}/sitebackup & /srv/${THESITE}/db

THESITE="example.com"
THESITEBASE="/var/www/vhosts"
THEDATE=`date +%d%m%y%H%M`
THEDBUSER='dbuser'
THEDBPW='dbpass'
THEDB='dbname'

# export database
mysqldump -u $THEDBUSER -p${THEDBPW} ${THEDB} | gzip > /srv/${THESITE}/db/dbbackup_${THEDB}_${THEDATE}.bak.gz

# export files
cd ${THESITEBASE}/${THESITE}
# ignore .git because it's bloated and you likely have the source on a third-party service (like bitbucket maybe?) (aka DRY)
# ignore wordpress because this is using the structure from this repository and wordpress is a checkout of WordPress's github (aka DRY)
tar -czf /srv/${THESITE}/sitebackup/sitebackup_${THESITE}_${THEDATE}.tar.gz . --exclude=.git --exclude=wordpress

# remove backups older than 7 days
find /srv/${THESITE}/sitebackup/site* -mtime +30 -exec rm {} \;
find /srv/${THESITE}/db/db* -mtime +30 -exec rm {} \;

# sync to amazon

# setting home to root so that the aws script can get credentials
export HOME=/root

# delete: any files from S3 that are no longer in the local directory
# quiet: because shhhh
/root/bin/aws s3 sync /srv/${THESITE} s3://${THESITE} --delete --quiet