# Still Under Development

# Chronolabs Cooperative Presents

# Peering Resolution Securities Services

## http://peers.snails.email

### Author: Simon Antony Roberts (simon@snails.email) - (c) 2016 - 2026



## Mod Rewrite .htaccess on root path

The following mod rewrite module extension which you have to enable in apache2 with: $ sudo a2enmod rewrite after doing so the following .htaccess goes in the root if it isn't there already

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d


# Installing API

Copy the contents of this distribution to your visually routable path via http(s) etc. Then poll the path required and run the install;

it requires apache2, nixi, iis etc and best with php5+;

## Scheduled Cron Job Details.,
    
There is one or more cron jobs that is scheduled task that need to be added to your system kernel when installing this API, the following command is before you install the chronological jobs with crontab in debain/ubuntu
    
    Execute:-
    $ sudo crontab -e

### CronTab Entry:
    

##Licensing

 * This is released under General Public License 3 - GPL3 + Academic!