# More Advanced Setup

NOTE: This is untested on a server but I needed to get it written down to start 

This is for servers that want multiple versions of WordPress available for symlinking from /path/to/documentroot/wordpress

## git archive file tree without .git overhead
- `$ mkdir /path/to/archive`
- `$ git clone git@github.com:WordPress/WordPress.git /path/to/full-repo`
- `$ cd /path/to/full-repo`
- `$ git archive TAG/BRANCH/COMMIT | tar -x -C /path/to/archive`
 - credit: http://stackoverflow.com/a/163769/661179
 
 
## symlink wordpress directory to stored version

Note: If you do this with the other structure setup make sure you add the wordpress directory to .gitignore or on other installs that are using the same checkout repo the directory structures are exact.

- `$ cd /path/to/documentroot`
- `ln -s /path/to/archive wordpress`