# content directory
- `mkdir content`
- symlink wp-content directory to content for those that depend on it
 - from document root: `$ ln -s content wp-content`

# wp-content directory

- This should be in the content directory
- symlink it because some plugins are silly and hardcode it
    - `ln -s content wp-content`

# `DOCUMENT_ROOT` index.php file

- add `/wordpress` in front of `/wp-blog-header.php`

# WordPress as Git Submodule

- `git submodule add git@github.com:WordPress/WordPress.git wordpress`
- `cd wordpress`
- `git fetch --tags`
- `git checkout LATESTTAG`

# WordPress Submodule: Update
- From Document Root
- `$ cd wordpress`
- `$ git fetch --tags`
- `$ git checkout LATESTTAG`

# Turn on cronjob

- `sudo crontab -e`
- `* * * * * wget -q -O - http(s)://domain.com/wordpress/wp-cron.php?doing_wp_cron`
 - Make sure it's a direct link... try not to 301.
- make sure that it's actually working. Check /var/log/syslog for any errors related to root needing to be updated 
 
# Harden Wordpress
 
- add .permissions.sh script: `https://gist.github.com/majemedia/3e753b07506db641661f`
- update the variables in the script per server/individual site needs
- make changes to the script as per individual site needs
- make script executable: `$ sudo chmod +x .permissions.sh`
 
# .gitignore files

- create a .gitignore in root

    wp-config.local.php
    content/uploads

# SETUP GIT

- `$ git config core.filemode false`
- `$ git config --global core.filemode false`