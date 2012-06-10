What is Best Practice Bundle?
=============================

[![Build Status](https://secure.travis-ci.org/LilaConcepts/best-practice-bundle.png?branch=master)](http://travis-ci.org/LilaConcepts/best-practice-bundle)

This is a simple bundle to show different [best practices for Symfony Bundles](http://symfony.com/doc/current/cookbook/bundles/index.html)
development. The master-branch follows the future [Symfony 2.1 release](http://symfony.com/blog/towards-symfony-2-1-documentation) ([upgrade notes](https://github.com/symfony/symfony/blob/master/UPGRADE-2.1.md)).

Use the bundle as a reference (or cheatsheet) for your own bundles. Also look
at the [documentation](best-practice-bundle/blob/master/Resources/doc/index.rst) and comments in the source if you forgot how to do something.

Of course you can use this bundle as a "Boilerplate" or empty/starter bundle if
you plan to build your own bundle. Please search [knpBundles.com](http://knpbundles.com/) before you build a new bundle. See if something simimlar is already out there.

This bundle contains:
* the [directory tree structure](http://symfony.com/doc/current/cookbook/bundles/best_practices.html) advised by Symfony
* follows the [coding standards](http://symfony.com/doc/current/contributing/code/standards.html)
* has [documentation examples](best-practice-bundle/blob/master/Resources/doc/index.rst) based [on reStructuredText](http://symfony.com/doc/current/contributing/documentation/format.html)
* uses [Twig](http://twig.sensiolabs.org/) for [templating](http://symfony.com/doc/current/cookbook/templating/index.html)
* comes with [unittests](http://symfony.com/doc/current/book/testing.html) (including [Functional tests](http://symfony.com/doc/current/cookbook/testing/doctrine.html#functional-testing))
* uses [Composer](http://getcomposer.org/doc/) for dependancy management
* uses [Travis CI](http://about.travis-ci.org/docs/) as a build bot for continuous integration
* is hosted on [Github](https://github.com/) (with Service Hooks)
* a customized [.gitignore](best-practice-bundle/blob/master/.gitignore) file

Future features:
* clone the bundle via commandline as an alternative to generate:bundle
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

If you haven't allready done so, get Composer ([make sure it's up-to-date](http://getcomposer.org/doc/03-cli.md#self-update)).

    curl -s http://getcomposer.org/installer | php

And install the new bundle

    php composer.phar update lilaconcepts/best-practice-bundle

Configure
---------

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

Unittest the bundle
-------------------

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

Cloning the Bundle for your own use
-----------------------------------

Go into your projects vendor/ directory and set your Bundle and Company name.

    cd vendor/
    BUNDLE=MainBundle
    COMPANY=Acme

Now run the following code:

    SHORTBUNDLE=`echo ${BUNDLE} | sed 's/Bundle//'`
    COMPLETENAME=${COMPANY}${SHORTBUNDLE}
    LOGICALNAME=`echo ${COMPANY}_${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`
    DIRNAME=`echo ${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`-bundle
    FULLPATH=`echo ${COMPANY}/${DIRNAME} | tr '[A-Z]' '[a-z]'`/${COMPANY}/Bundle/
    
    mkdir -p ${FULLPATH}
    cd ${FULLPATH}
    git clone https://github.com/LilaConcepts/best-practice-bundle.git ${BUNDLE}
    cd ${BUNDLE}

    FILES=`find . -regex '.*/*.[php|yml]' -type f`
    sed -i '' -e 's/Lila\\Bundle\\BestPracticeBundle/'${COMPANY}'\\Bundle\\'${BUNDLE}'/g' ${FILES}
    sed -i '' -e 's/lila_best_practice/'${LOGICALNAME}'/g' ${FILES}
    sed -i '' -e 's/LilaBestPracticeBundle/'${COMPLETENAME}Bundle'/g' ${FILES}
    sed -i '' -e 's/LilaBestPracticeExtension/'${COMPLETENAME}Extension'/g' ${FILES}
    sed -i '' -e 's/Lila/'${COMPANY}'/g' composer.json
    sed -i '' -e 's/BestPracticeBundle/'${BUNDLE}'/g' composer.json

    mv ./DependencyInjection/LilaBestPracticeExtension.php ./DependencyInjection/${COMPLETENAME}Extension.php
    mv ./LilaBestPracticeBundle.php ./${COMPLETENAME}Bundle.php

    curl -s http://getcomposer.org/installer | php
    php composer.phar install
    echo -e "\n\nDone, now update your AppKernel with:\n\n    new ${COMPANY}\Bundle\\${BUNDLE}\\${COMPANY}${BUNDLE}()\n"

Now update your AppKernel.php described above under [Configure](best-practice-bundle#what-is-best-practice-bundle)

Documentation
-------------

For more information see [Resources/doc/index.rst](best-practice-bundle/blob/master/Resources/doc/index.rst).
Feel free to fix typo's.

Contributing
------------

If you like to help making Best Practice Bundle better, or if you see anything that's
wrong, send me a personal message or provide a bug report under [issues](best-practice-bundle/issues).
Even better if you could send a pull-request.

