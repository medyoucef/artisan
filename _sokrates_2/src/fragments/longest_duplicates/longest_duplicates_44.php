vendor/nikic/php-parser/lib/PhpParser/Parser/Php7.php [2668:2790]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            593 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            594 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            595 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            596 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            597 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            598 => null,
            599 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            600 => null,
            601 => null,
            602 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            603 => null,
            604 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            605 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\List_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])); $self->semValue->setAttribute('kind', Expr\List_::KIND_LIST);
            $self->postprocessList($self->semValue);
            },
            606 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $end = count($self->semValue)-1; if ($self->semValue[$end]->value instanceof Expr\Error) array_pop($self->semValue);
            },
            607 => null,
            608 => static function ($self, $stackPos) {
                 /* do nothing -- prevent default action of $$=$self->semStack[$1]. See $551. */
            },
            609 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            610 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            611 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            612 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            613 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            614 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            615 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-1)], true, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            616 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            617 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), true);
            },
            618 => static function ($self, $stackPos) {
                 /* Create an Error node now to remember the position. We'll later either report an error,
             or convert this into a null element, depending on whether this is a creation or destructuring context. */
          $attrs = $self->createEmptyElemAttributes($self->tokenPos);
          $self->semValue = new Node\ArrayItem(new Expr\Error($attrs), null, false, $attrs);
            },
            619 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            620 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            621 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            622 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)]);
            },
            623 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]); $attrs['rawValue'] = $self->semStack[$stackPos-(1-1)]; $self->semValue = new Node\InterpolatedStringPart($self->semStack[$stackPos-(1-1)], $attrs);
            },
            624 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            625 => null,
            626 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            627 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            628 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            629 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            630 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            631 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            632 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            633 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\String_($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            634 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            635 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString('-' . $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            636 => null,
        ];
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nikic/php-parser/lib/PhpParser/Parser/Php8.php [2666:2788]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            593 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            594 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            595 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            596 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            597 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            598 => null,
            599 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            600 => null,
            601 => null,
            602 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            603 => null,
            604 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            605 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\List_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])); $self->semValue->setAttribute('kind', Expr\List_::KIND_LIST);
            $self->postprocessList($self->semValue);
            },
            606 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $end = count($self->semValue)-1; if ($self->semValue[$end]->value instanceof Expr\Error) array_pop($self->semValue);
            },
            607 => null,
            608 => static function ($self, $stackPos) {
                 /* do nothing -- prevent default action of $$=$self->semStack[$1]. See $551. */
            },
            609 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            610 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            611 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            612 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            613 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            614 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            615 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-1)], true, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            616 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            617 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), true);
            },
            618 => static function ($self, $stackPos) {
                 /* Create an Error node now to remember the position. We'll later either report an error,
             or convert this into a null element, depending on whether this is a creation or destructuring context. */
          $attrs = $self->createEmptyElemAttributes($self->tokenPos);
          $self->semValue = new Node\ArrayItem(new Expr\Error($attrs), null, false, $attrs);
            },
            619 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            620 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            621 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            622 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)]);
            },
            623 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]); $attrs['rawValue'] = $self->semStack[$stackPos-(1-1)]; $self->semValue = new Node\InterpolatedStringPart($self->semStack[$stackPos-(1-1)], $attrs);
            },
            624 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            625 => null,
            626 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            627 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            628 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            629 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            630 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            631 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            632 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            633 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\String_($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            634 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            635 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString('-' . $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            636 => null,
        ];
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



