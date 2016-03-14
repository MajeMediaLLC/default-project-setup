# content directory
- `mkdir content`

# wp-content directory

- This should be in the content directory
- symlink it because some plugins are silly and hardcode it
    - `ln -s content wp-content`


# wp-content/uploads directory

- Store somewhere else outside the directory tree.
- symlink the uploads directory to that location | from `DOCUMENT_ROOT` | (`ln -s /path/to/filestorage content/uploads`)

# `DOCUMENT_ROOT` index.php file

- add `/wordpress` in front of `/wp-blog-header.php`

# WordPress as Git Submodule

- `git submodule add git@github.com:WordPress/WordPress.git wordpress`
- `cd wordpress`
- `git checkout current.tag (4.4.2)`

# Turn on cronjob

- `sudo crontab -e`
- `* * * * * wget -q -O - http(s)://domain.com/wordpress/wp-cron.php?doing_wp_cron`
 - Make sure it's a direct link... try not to 301.
 
 # Harden Wordpress
 
 - add permissions.sh script: `https://gist.github.com/majemedia/3e753b07506db641661f`