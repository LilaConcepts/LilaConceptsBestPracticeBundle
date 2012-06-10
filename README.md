README
======

[![Build Status](https://secure.travis-ci.org/LilaConcepts/best-practice-bundle.png?branch=master)](http://travis-ci.org/LilaConcepts/best-practice-bundle)

What is Best Practice Bundle?
-----------------------------

This is a simple bundle to show different [best practices for Symfony Bundles](http://symfony.com/doc/current/cookbook/bundles/index.html)
development. The master-branch follows the future [Symfony 2.1 release](http://symfony.com/blog/towards-symfony-2-1-documentation) ([upgrade notes](https://github.com/symfony/symfony/blob/master/UPGRADE-2.1.md)).

Use the bundle as a reference (or cheatsheet) for your own bundles. Also look
at the [documentation](best-practice-bundle/Resources/doc/index.rst) and comments in the source if you forgot how to do something.

Of course you can use this bundle as a "Boilerplate" or empty/starter bundle if
you plan to build your own bundle. Please search [knpBundles.com](http://knpbundles.com/) before you build a new bundle. See if something simimlar is already out there.

This bundle contains:
* the [directory tree structure](http://symfony.com/doc/current/cookbook/bundles/best_practices.html) advised by Symfony
* follows the [coding standards](http://symfony.com/doc/current/contributing/code/standards.html)
* has [documentation examples](http://symfony.com/doc/current/contributing/documentation/format.html)
* uses Twig for [templating](http://symfony.com/doc/current/cookbook/templating/index.html)
* comes with unittest (including [Functional tests](http://symfony.com/doc/current/cookbook/testing/doctrine.html#functional-testing))
* uses [Composer](http://getcomposer.org/doc/) for dependancy management
* uses [Travis CI](http://about.travis-ci.org/docs/) as a build bot for continuous integration
* is hosted on [Github](https://github.com/) (with Service Hooks)
* a complete .gitignore file

Future features:
* clone it via commandline as an alternative to generate:bundle
* multiple languages

Requirements
------------

* Symfony2.1 (PHP 5.3.3 and up)
* Twig

Installation
------------

Add the following line to your composer.json file.

    // composer.json
    {
        // ...
            "require": {
                // ...
                "lilaconcepts/best-practice-bundle" : "dev-master"
            }
        // ...
    }

If you haven't allready done so, get Composer.

    curl -s http://getcomposer.org/installer | php

And install the new bundle

    php composer.phar update

The final step is to add the bundle to your AppKernel.php.

    <?php

        // in AppKernel::registerBundles()
        $bundles = array(

            // Dependencies
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),

            // Optionally place it in the dev and test-environments only
            if (in_array($this->getEnvironment(), array('dev', 'test'))) {
                // ...
                new Lila\Bundle\BestPracticeBundle\LilaBestPracticeBundle()
            }
        );

You can now unittest the module, just type:

    phpunit

Point your browser to [http://localhost/app_dev.php/best-practice/](http://localhost/app_dev.php/best-practice/) (under development, does not work yet!)

Standalone Installation
-----------------------

If you want to download and unittest the code, you don't need a working Symfony project. Just run the following.

    git clone https://github.com/LilaConcepts/best-practice-bundle.git
    cd best-practice-bundle
    curl -s http://getcomposer.org/installer | php
    php composer.phar install
    phpunit

Documentation
-------------

For more information see [Resources/doc/index.rst](best-practice-bundle/Resources/doc/index.rst).
Feel free to fix typo's.

Contributing
------------

If you like to help making Best Practice Bundle better, or if you see anything that's
wrong, send me a personal message or provide a bug report under [issues](best-practice-bundle/issues).
Even better if you could send a pull-request.

