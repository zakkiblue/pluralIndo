<?php

namespace Zakki\Plural;

use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Rules\Pattern;
use Doctrine\Inflector\Rules\Patterns;
use Doctrine\Inflector\Rules\Ruleset;
use Doctrine\Inflector\Rules\Substitution;
use Doctrine\Inflector\Rules\Substitutions;
use Doctrine\Inflector\Rules\Transformation;
use Doctrine\Inflector\Rules\Transformations;
use Doctrine\Inflector\Rules\Word;

include 'vendor/autoload.php';

class PluralIndo {

    public function Plural()
    {
    
        $inflector = InflectorFactory::create()
            ->withPluralRules(
                new Ruleset(
                    new Transformations(
                        new Transformation(new Pattern('^(\w+)$'), '\1 - \1'),
                    ),
                    new Patterns(new Pattern('noflect'), new Pattern('abtuse')),
                    new Substitutions(
                        new Substitution(new Word('rumah'), new Word('perumahan')),
                        new Substitution(new Word('phone'), new Word('phonezes'))
                    )
                )
            )
            ->build();
    
            return $inflector;
    }
}

