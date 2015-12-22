# Anchor CMS on openshift

Anchor is a super-simple, lightweight blog system, made to let you just write. Anchor gives you full freedom over your words. Just write in Markdown or HTML. This is a modified version of Anchor CMS that is optimized for openshift.
Find out more about anchor CMS at: https://anchorcms.com/

### Install with one click

Create an account at http://openshift.redhat.com/

[![Click to install OpenShift](http://launch-shifter.rhcloud.com/launch/light/Click to install.svg)](https://openshift.redhat.com/app/console/application_types/custom?cartridges[]=php-5.4&cartridges[]=mysql-5.5&initial_git_url=https://github.com/gautamkrishnar/Anchor-CMS-openshift-quickstart&name=anchor)

### How to use
You can install the anchor CMS by pointing your browser to : http://anchor-yourdomain.rhcloud.com/

Follow the ownscreen instructions

If you are experiencing any problems, please don't forget to open a [new issue](https://github.com/gautamkrishnar/Anchor-CMS-openshift-quickstart/issues/new) in this repository.
### Installing via the command line


Create a PHP application :

	rhc app create anchor php-5.4 mysql-5.5

You can also use any other custom name instead of 'anchor'. Remember to use that app name in the next command

Add this upstream Anchor CMS quickstart repo

	cd anchor
	rm php/index.php
	git remote add upstream -m master https://github.com/gautamkrishnar/Anchor-CMS-openshift-quickstart.git
	git pull -s recursive -X theirs upstream master

Push the repo upstream to OpenShift

	git push        

Head to your application at:

	http://anchor-$yourdomain.rhcloud.com

To give your new Anchor site a web address of its own, add your desired alias:

	rhc app add-alias -a grav --alias "$whatever.$mydomain.com"

Then add a cname entry in your domain's dns configuration pointing your alias to $whatever-$yourdomain.rhcloud.com.

### Spread the word
Liked using Anchor CMS in openshift! Don't forget to spread the word by starring this repo.

### Contributors
* [Alexandr](https://github.com/alexbagirov) : [Bug#2](https://github.com/gautamkrishnar/Anchor-CMS-openshift-quickstart/issues/2)
