#for samplesigin
<IfModule mod_rewrite.c>
    Alias /simplesaml "C:\Bitnami\wampstack-7.4.20-1\apache2\htdocs\singlesignin/vendor/simplesamlphp/simplesamlphp/www/"
    <Directory "C:\Bitnami\wampstack-7.4.20-1\apache2\htdocs\singlesignin/vendor/simplesamlphp/simplesamlphp/www">
        AllowOverride AuthConfig
        Require all granted
    </Directory>
</IfModule>
<Directory />
AllowOverride All
Require all denied
</Directory>
#
# Note that from this point forward you must specifically allow
# particular features to be enabled - so if something's not working as
# you might expect, make sure that you have specifically enabled it
# below.
#
#
# DocumentRoot: The directory out of which you will serve your
# documents. By default, all requests are taken from this directory, but
# symbolic links and aliases may be used to point to other locations.
# iris-license-server/web
DocumentRoot "C:\Bitnami\wampstack-7.4.20-1\apache2\htdocs\singlesignin/"
<Directory "C:\Bitnami\wampstack-7.4.20-1\apache2\htdocs\singlesignin/">
</Directory>