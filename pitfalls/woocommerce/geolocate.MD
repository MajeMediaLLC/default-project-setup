# Pitfalls and Fixes with WooCommerce

## v= in the url
### Geolocate with page caching support is turned on
- Go to: /wp-admin/admin.php?page=wc-settings
- Change Default Customer Location to something else.
    - be aware that page caching (plugin or server based) won't work well with the non-page caching support
    - This setting is good for displaying the correct taxes on cart and checkout pages