# Fit.io?

## Setup instructions
> [Composer](https://getcomposer.org/download/),
> [Vagrant](https://www.vagrantup.com/downloads.html), and
> [VirtualBox 5.1](https://www.virtualbox.org/wiki/Downloads) must be installed
1. Run `composer install`
1. Run `php artisan ide-helper:generate`
1. Run `vendor/bin/homestead make`
1. Run `vagrant box add laravel/homestead` (choose VirtualBox as your provider)
1. Check if an SSH key already exists `ls -al ~/.ssh` (look for a file named `id_rsa`)
    1. if not, generate one using `ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`
1. Create a hosts file entry such as `192.168.10.10 homestead.app`
    1. Windows: `C:\Windows\System32\drivers\etc\hosts`
1. Add `host_ip: "127.0.0.1"` to Line 90 of v`endor/laravel/scripts.homestead.php`
1. Make a copy of `.env.example` named `.env` and customize if you wish
1. Run `vagrant up`
1. Access the application from your browser at [http://homestead.app](http://homstead.app)
