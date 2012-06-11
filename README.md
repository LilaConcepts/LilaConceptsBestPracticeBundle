What is Best Practice Bundle?
=============================
 
[![Build Status](https://secure.travis-ci.org/LilaConcepts/LilaConceptsBestPracticeBundle.png?branch=master)](http://travis-ci.org/LilaConcepts/LilaConceptsBestPracticeBundle)

This is a simple bundle to show different [best practices for Symfony Bundles](http://symfony.com/doc/current/cookbook/bundles/index.html)
development. This bundle could as well be named starter-bundle, empty-bundle or boilerplate-bundle. The master-branch follows the future [Symfony 2.1 release](http://symfony.com/blog/towards-symfony-2-1-documentation) ([upgrade notes](https://github.com/symfony/symfony/blob/master/UPGRADE-2.1.md)).

Use the bundle as a reference (or cheatsheet) for your own bundles. Also look
at the [documentation](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/Resources/doc/index.rst) and comments in the source if you forgot how to do something.

Of course you can use this bundle as a "Boilerplate" or empty/starter bundle if
you plan to build your own bundle. [Fork or clone this bundle](#forkclone-the-bundle-for-your-own-use) if you wish. Please search [knpBundles.com](http://knpbundles.com/) before you build a new bundle. See if something simimlar is already out there.

### This bundle contains

* the [directory tree structure](http://symfony.com/doc/current/cookbook/bundles/best_practices.html) advised by Symfony
* follows the [coding standards](http://symfony.com/doc/current/contributing/code/standards.html)
* has [documentation examples](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/Resources/doc/index.rst) based [on reStructuredText](http://symfony.com/doc/current/contributing/documentation/format.html)
* uses [Twig](http://twig.sensiolabs.org/) for [templating](http://symfony.com/doc/current/cookbook/templating/index.html)
* comes with [unittests](http://symfony.com/doc/current/book/testing.html) (including [Functional tests](http://symfony.com/doc/current/cookbook/testing/doctrine.html#functional-testing))
* uses [Composer](http://getcomposer.org/doc/) for dependancy management
* uses [Travis CI](http://about.travis-ci.org/docs/) as a build bot for continuous integration
* is hosted on [Github](https://github.com/) (with Service Hooks)
* a customized [.gitignore](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/.gitignore) file

### Links

* [Best Practice Bundle on Packagist.org](http://packagist.org/packages/LilaConcepts/LilaConceptsBestPracticeBundle)
* [Best Practice Bundle on KnpBundles.com](http://knpbundles.com/LilaConcepts/LilaConceptsBestPracticeBundle)
* [Best Practice Bundle on Travis CI](http://travis-ci.org/#!/LilaConcepts/LilaConceptsBestPracticeBundle)
* [Best Practice Forum](https://groups.google.com/forum/#!forum/lila-concepts-symfony2-bestpracticebundle)


Bugs and Roadmap
----------------

Before providing bug-reports please the [current issues](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/issues)
and [forum](https://groups.google.com/forum/#!forum/lila-concepts-symfony2-bestpracticebundle) first.
The roadmap for the future of this bundle is described below.

### Future features and documentation

Help appreciated, see [enhancements under issues](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/issues?labels=enhancement&page=1&state=open)).
Please +1 the enhancements you are interested in.

* use the PHP-CS-Fixer
* make /best-practice/ available for the functional test
* clone the bundle via command as an alternative to generate:bundle
* multiple languages / locale / i18n examples
* provide tutorials / blog-posts (yaml, caching with Varnish, Vagrant etc.)
* more info on cache management
* more logging (via monolog)
* more information on routing/paths, assetic and forms
* custom exceptions
* add edge side include (esi), session, validator and redirect tests
* add mime-type tests like xml and json tests
* Object-relational mapping (ORM): Propel/Doctrine entity integration?
* html5 boilerplate?



Requirements
------------

* Symfony2.1 (PHP 5.3.3 and up including Composer)
* Twig


Installation
------------

Add the following line to your composer.json file.

```js
//composer.json
{
    //...

    "require": {
        //...
        "LilaConcepts/LilaConceptsBestPracticeBundle" : "dev-master"
    }

    //...
}
```

If you haven't allready done so, get Composer ([make sure it's up-to-date](http://getcomposer.org/doc/03-cli.md#self-update)).

```bash
curl -s http://getcomposer.org/installer | php
```

And install the new bundle

```bash
php composer.phar update LilaConcepts/LilaConceptsBestPracticeBundle
```


Configure
---------

The final step is to add the bundle to your AppKernel.php.

```php
<?php

    // in AppKernel::registerBundles()
    $bundles = array(
        // Dependencies
        new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        new Symfony\Bundle\TwigBundle\TwigBundle(),
    );
    
    // Optionally place it in the dev and test-environments only
    if (in_array($this->getEnvironment(), array('dev', 'test'))) {
        // ...
        $bundles[] = new LilaConcepts\Bundle\LilaConceptsBestPracticeBundle\LilaConceptsBestPracticeBundle()
    }
```


Unittest the bundle
-------------------

You can now unittest the module, just type:

```bash
phpunit
```

Point your browser to [http://localhost/app_dev.php/best-practice/](http://localhost/app_dev.php/best-practice/) (under development, does not work yet!)


Standalone Installation
-----------------------

If you want to download and unittest the code, you don't need a working Symfony project. Just run the following.

```bash
git clone https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle.git
cd LilaConceptsBestPracticeBundle
curl -s http://getcomposer.org/installer | php
php composer.phar install
phpunit
```


Fork/clone the Bundle for your own use
--------------------------------------

Click the Fork button on [https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle).
Then click on Admin and rename the bundle. Please stick with the naming conventions and use something like 'myfeature-bundle' or 'myadmin-bundle'.
You are ready with the github part, it's time to clone the respository into a temporary folder and make some changes. Set your own Github URL and Bundle/Company name.

```bash
mkdir temp/ && cd temp/
BUNDLE=MainBundle
COMPANY=Acme
GITHUBURL=https://github.com/[your account name]/[your bundle name]-bundle.git
```

Now run the following code:

```bash
SHORTBUNDLE=`echo ${BUNDLE} | sed 's/Bundle//'`
COMPLETENAME=${COMPANY}${SHORTBUNDLE}
LOGICALNAME=`echo ${COMPANY}_${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`
DIRNAME=`echo ${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`-bundle

git clone ${GITHUBURL} ${BUNDLE}
cd ${BUNDLE}

FILES=`find . -regex '.*/*.[php|yml]' -type f`
sed -i '' -e 's/LilaConcepts\\Bundle\\LilaConceptsBestPracticeBundle/'${COMPANY}'\\Bundle\\'${COMPANY}${BUNDLE}'/g' ${FILES}
sed -i '' -e 's/lilaconcepts_bestpractice/'${LOGICALNAME}'/g' ${FILES}
sed -i '' -e 's/LilaConceptsBestPracticeExtension/'${COMPLETENAME}Extension'/g' ${FILES}
sed -i '' -e 's/LilaConceptsBestPracticeBundle/'${COMPLETENAME}Bundle'/g' ${FILES} composer.json
sed -i '' -e 's/LilaConcepts/'${COMPANY}'/g' composer.json

mv ./DependencyInjection/LilaConceptsBestPracticeExtension.php ./DependencyInjection/${COMPLETENAME}Extension.php
mv ./LilaConceptsBestPracticeBundle.php ./${COMPLETENAME}Bundle.php

echo -e "\n\nDone, please inspect the changes and push it back to github:\n\n    git push\n\nYou will need this later for your AppKernel.php:\n\n    new ${COMPANY}\Bundle\\${BUNDLE}\\${COMPANY}${BUNDLE}()\n"
```

Optionally:
```bash
curl -s http://getcomposer.org/installer | php
php composer.phar install
phpunit
```

Be sure to update the following files before pushing it back to Github:
- composer.json
- README.md
- LICENCE
- CONTRIBUTORS.md
- CHANGELOG's
- Resource/doc/*

Push it back to Github:

```bash
git add .
git commit -a -m "Initial checkin"
git push
```

Head over to [Packagist](http://packagist.org/) and submit your Bundle.
Optional: setup a Github Service Hook so packagist will be informed automatically.

Now install your bundle [following these instructions](#installation) with your own packagist name of course.
You can remove the temp/ directory we created and work inside the vendor/.../Bundle/YourBundle directory.


Documentation
-------------

For more information see [Resources/doc/index.rst](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/Resources/doc/index.rst).
Feel free to fix typo's.


Contributing
------------

First of all, many thanks to all [the contributors and people who inspired us](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/CONTRIBUTORS.md).
If you like to help making Best Practice Bundle better, or if you see anything that's
wrong, send me a personal message or provide a bug report under [issues](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/issues).
Even better if you could send a pull-request. If you have any further questions please [head over to the forum](https://groups.google.com/forum/#!forum/lila-concepts-symfony2-bestpracticebundle).


Licence
-------

This bundle is released under the MIT Licence by Lila Concepts B.V., see the
[LICENCE](https://github.com/LilaConcepts/LilaConceptsBestPracticeBundle/blob/master/LICENCE)-file for more information.
Lila Concepts B.V. is a dutch organisation and the creator of [Aandelen Kopen](http://online-aandelenkopen.nl/gratis-beleggingstips/)
and [Beleggen voor Beginners](http://lerenbeleggenvoorbeginners.nl/beginnen-met-beleggen/) amongst other sites.