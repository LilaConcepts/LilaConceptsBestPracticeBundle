info about setting up service hooks
publishing your bundle to:
- knpbundles
- travis ci
- github
- packagist

Cloning the Bundle for your own use
-----------------------------------

Set your Bundle and Company name in your terminal:

    BUNDLE=MainBundle
    COMPANY=Acme

Now run the following code:

    SHORTBUNDLE=`echo ${BUNDLE} | sed 's/Bundle//'`
    COMPLETENAME=${COMPANY}${SHORTBUNDLE}
    LOGICALNAME=`echo ${COMPANY}_${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`
    DIRNAME=`echo ${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`-bundle

    git clone https://github.com/LilaConcepts/best-practice-bundle.git ${DIRNAME}
    cd ${DIRNAME}

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
    
Now you should be able to run phpunit test:

    phpunit

Optionally you can remove the .git/ folder:

    rm -rf .git/

Be sure to update the following files:
- composer.json
- README.md
- LICENCE
- CONTRIBUTORS.md
- CHANGELOG's
- Resource/doc/*