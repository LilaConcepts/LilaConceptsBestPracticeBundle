info about setting up service hooks
publishing your bundle to:
- knpbundles
- travis ci
- github
- packagist

renaming the bundle (warning! you might break things):

    BUNDLE=MainBundle
    COMPANY=Acme
    SHORTBUNDLE=`echo ${BUNDLE} | sed 's/Bundle//'`
    COMPLETENAME=${COMPANY}${SHORTBUNDLE}
    LOGICALNAME=`echo ${COMPANY}_${SHORTBUNDLE} | tr '[A-Z]' '[a-z]'`
    FILES=`find . -regex '.*/*.[php|yml]' -type f`
    sed -i '' -e 's/Lila\\Bundle\\BestPracticeBundle/'${COMPANY}'\\Bundle\\'${BUNDLE}'/g' ${FILES}
    sed -i '' -e 's/lila_best_practice/'${LOGICALNAME}'/g' ${FILES}
    sed -i '' -e 's/LilaBestPracticeBundle/'${COMPLETENAME}Bundle'/g' ${FILES}
    sed -i '' -e 's/LilaBestPracticeExtension/'${COMPLETENAME}Extension'/g' ${FILES}
    mv ./DependencyInjection/LilaBestPracticeExtension.php ./DependencyInjection/${COMPLETENAME}Extension.php
    mv ./LilaBestPracticeBundle.php ./${COMPLETENAME}Bundle.php
    rm -rf .git/

update
- composer.json
- README.md
- LICENCE
- CONTRIBUTORS.md
- CHANGELOG's
- Resource/doc/*