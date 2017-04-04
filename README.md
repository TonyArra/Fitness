# Fit.io?

## Setup instructions
> [Vagrant](https://www.vagrantup.com/downloads.html) and 
> [VirtualBox 5.1](https://www.virtualbox.org/wiki/Downloads) must be installed
1. Run `composer install`
1. Run `vagrant box add laravel/homestead`
1. Run `php vendor/bin/homestead make`
1. Configure the newly created Homestead.yaml file
    1. Customize the shared folders under the `folders` directive
    1. Check if an SSH key already exists `ls -al ~/.ssh`
    1. If not, generate one using `ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`
1. Create a hosts file entry such as `192.168.10.10 homestead.app`
1. Run `vagrant up`
1. Access the application from your browser at [http://homestead.app](http://homstead.app)




