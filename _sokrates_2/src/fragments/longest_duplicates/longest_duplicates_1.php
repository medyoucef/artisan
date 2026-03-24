vendor/nikic/php-parser/lib/PhpParser/Parser/Php7.php [1169:2001]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            1,    1,    3,    1,    1,    4,    1,    1,    1,    3,
            1,    1,    2,    1,    3,    4,    3,    2,    0,    2,
            2,    1,    2,    1,    1,    1,    4,    3,    3,    3,
            3,    6,    3,    1,    1,    2,    1
    );

    protected function initReduceCallbacks(): void {
        $this->reduceCallbacks = [
            0 => null,
            1 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleNamespaces($self->semStack[$stackPos-(1-1)]);
            },
            2 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            3 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            4 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            5 => null,
            6 => null,
            7 => null,
            8 => null,
            9 => null,
            10 => null,
            11 => null,
            12 => null,
            13 => null,
            14 => null,
            15 => null,
            16 => null,
            17 => null,
            18 => null,
            19 => null,
            20 => null,
            21 => null,
            22 => null,
            23 => null,
            24 => null,
            25 => null,
            26 => null,
            27 => null,
            28 => null,
            29 => null,
            30 => null,
            31 => null,
            32 => null,
            33 => null,
            34 => null,
            35 => null,
            36 => null,
            37 => null,
            38 => null,
            39 => null,
            40 => null,
            41 => null,
            42 => null,
            43 => null,
            44 => null,
            45 => null,
            46 => null,
            47 => null,
            48 => null,
            49 => null,
            50 => null,
            51 => null,
            52 => null,
            53 => null,
            54 => null,
            55 => null,
            56 => null,
            57 => null,
            58 => null,
            59 => null,
            60 => null,
            61 => null,
            62 => null,
            63 => null,
            64 => null,
            65 => null,
            66 => null,
            67 => null,
            68 => null,
            69 => null,
            70 => null,
            71 => null,
            72 => null,
            73 => null,
            74 => null,
            75 => null,
            76 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; if ($self->semValue === "<?=") $self->emitError(new Error('Cannot use "<?=" as an identifier', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            77 => null,
            78 => null,
            79 => null,
            80 => null,
            81 => null,
            82 => null,
            83 => null,
            84 => null,
            85 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            86 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            87 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            88 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            89 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            90 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            91 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            92 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            93 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            94 => null,
            95 => static function ($self, $stackPos) {
                 $self->semValue = new Name(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            96 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            97 => static function ($self, $stackPos) {
                 /* nothing */
            },
            98 => static function ($self, $stackPos) {
                 /* nothing */
            },
            99 => static function ($self, $stackPos) {
                 /* nothing */
            },
            100 => static function ($self, $stackPos) {
                 $self->emitError(new Error('A trailing comma is not allowed here', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            101 => null,
            102 => null,
            103 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(1-1)], [], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            104 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            105 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            106 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            107 => static function ($self, $stackPos) {
                 $self->semValue = new Node\AttributeGroup($self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            108 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            109 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            110 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            111 => null,
            112 => null,
            113 => null,
            114 => null,
            115 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\HaltCompiler($self->handleHaltCompiler(), $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            116 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(3-2)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_SEMICOLON);
            $self->checkNamespace($self->semValue);
            },
            117 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            118 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_(null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            119 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(3-2)], Stmt\Use_::TYPE_NORMAL, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            120 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            121 => null,
            122 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Const_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            123 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_FUNCTION;
            },
            124 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_CONSTANT;
            },
            125 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-6)], $self->semStack[$stackPos-(8-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            126 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-5)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            127 => null,
            128 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            129 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            130 => null,
            131 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            132 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            133 => null,
            134 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            135 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            136 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            137 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            138 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            139 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            140 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->semValue->type = Stmt\Use_::TYPE_NORMAL;
            },
            141 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)]; $self->semValue->type = $self->semStack[$stackPos-(2-1)];
            },
            142 => null,
            143 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            144 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            145 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            146 => null,
            147 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            148 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            149 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            150 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            151 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            152 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            153 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            154 => null,
            155 => null,
            156 => null,
            157 => static function ($self, $stackPos) {
                 throw new Error('__HALT_COMPILER() can only be used from the outermost scope', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            158 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Block($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            159 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(7-3)], ['stmts' => $self->semStack[$stackPos-(7-5)], 'elseifs' => $self->semStack[$stackPos-(7-6)], 'else' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            160 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(10-3)], ['stmts' => $self->semStack[$stackPos-(10-6)], 'elseifs' => $self->semStack[$stackPos-(10-7)], 'else' => $self->semStack[$stackPos-(10-8)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            161 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\While_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            162 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Do_($self->semStack[$stackPos-(7-5)], $self->semStack[$stackPos-(7-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            163 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\For_(['init' => $self->semStack[$stackPos-(9-3)], 'cond' => $self->semStack[$stackPos-(9-5)], 'loop' => $self->semStack[$stackPos-(9-7)], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            164 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Switch_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            165 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Break_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            166 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Continue_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            167 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Return_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            168 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Global_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            169 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Static_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            170 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Echo_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            171 => static function ($self, $stackPos) {

        $self->semValue = new Stmt\InlineHTML($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
        $self->semValue->setAttribute('hasLeadingNewline', $self->inlineHtmlHasLeadingNewline($stackPos-(1-1)));

            },
            172 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Expression($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            173 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Unset_($self->semStack[$stackPos-(5-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            174 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-5)][0], ['keyVar' => null, 'byRef' => $self->semStack[$stackPos-(7-5)][1], 'stmts' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            175 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-7)][0], ['keyVar' => $self->semStack[$stackPos-(9-5)], 'byRef' => $self->semStack[$stackPos-(9-7)][1], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            176 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(6-3)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-4)],  $self->tokenEndStack[$stackPos-(6-4)])), ['stmts' => $self->semStack[$stackPos-(6-6)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            177 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Declare_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            178 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TryCatch($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->checkTryCatch($self->semValue);
            },
            179 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Goto_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            180 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Label($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            181 => static function ($self, $stackPos) {
                 $self->semValue = null; /* means: no statement */
            },
            182 => null,
            183 => static function ($self, $stackPos) {
                 $self->semValue = $self->maybeCreateNop($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]);
            },
            184 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            185 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            186 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            187 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            188 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            189 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Catch_($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-7)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            190 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            191 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Finally_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            192 => null,
            193 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            194 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            195 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            196 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            197 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            198 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            199 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            200 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            201 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            202 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            203 => null,
            204 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            205 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            206 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(8-3)], ['byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-5)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            207 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(9-4)], ['byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-6)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            208 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(7-2)], ['type' => $self->semStack[$stackPos-(7-1)], 'extends' => $self->semStack[$stackPos-(7-3)], 'implements' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(7-2));
            },
            209 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(8-3)], ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(8-3));
            },
            210 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Interface_($self->semStack[$stackPos-(7-3)], ['extends' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => $self->semStack[$stackPos-(7-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkInterface($self->semValue, $stackPos-(7-3));
            },
            211 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Trait_($self->semStack[$stackPos-(6-3)], ['stmts' => $self->semStack[$stackPos-(6-5)], 'attrGroups' => $self->semStack[$stackPos-(6-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            212 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Enum_($self->semStack[$stackPos-(8-3)], ['scalarType' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkEnum($self->semValue, $stackPos-(8-3));
            },
            213 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            214 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            215 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            216 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            217 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            218 => null,
            219 => null,
            220 => static function ($self, $stackPos) {
                 $self->checkClassModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            221 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            222 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            223 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            224 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            225 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            226 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            227 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            228 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            229 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            230 => null,
            231 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            232 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            233 => null,
            234 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            235 => null,
            236 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            237 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            238 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            239 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            240 => null,
            241 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            242 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            243 => static function ($self, $stackPos) {
                 $self->semValue = new Node\DeclareItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            244 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            245 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            246 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            247 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(5-3)];
            },
            248 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            249 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            250 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_($self->semStack[$stackPos-(4-2)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            251 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_(null, $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            252 => null,
            253 => null,
            254 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Match_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            255 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            256 => null,
            257 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            258 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            259 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            260 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm(null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            261 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            262 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            263 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            264 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            265 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            266 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            267 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            268 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            269 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            270 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            271 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            272 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            273 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            274 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-2)], true);
            },
            275 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            276 => static function ($self, $stackPos) {
                 $self->semValue = array($self->fixupArrayDestructuring($self->semStack[$stackPos-(1-1)]), false);
            },
            277 => null,
            278 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            279 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            280 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            281 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            282 => static function ($self, $stackPos) {
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            283 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            284 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            285 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            286 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC_SET;
            },
            287 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED_SET;
            },
            288 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE_SET;
            },
            289 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            290 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(7-6)], null, $self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-4)], $self->semStack[$stackPos-(7-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-1)], $self->semStack[$stackPos-(7-7)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            291 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(9-6)], $self->semStack[$stackPos-(9-8)], $self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-4)], $self->semStack[$stackPos-(9-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(9-2)], $self->semStack[$stackPos-(9-1)], $self->semStack[$stackPos-(9-9)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            292 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])), null, $self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-4)], $self->semStack[$stackPos-(6-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-1)]);
            },
            293 => null,
            294 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            295 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            296 => null,
            297 => null,
            298 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Name('static', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            299 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleBuiltinTypes($self->semStack[$stackPos-(1-1)]);
            },
            300 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('array', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            301 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('callable', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            302 => null,
            303 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            304 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            305 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            306 => null,
            307 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            308 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            309 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            310 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            311 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            312 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            313 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            314 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            315 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            316 => null,
            317 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            318 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            319 => null,
            320 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            321 => null,
            322 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            323 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            324 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            325 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            326 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            327 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-2)]);
            },
            328 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VariadicPlaceholder($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            329 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            330 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            331 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(1-1)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            332 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], true, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            333 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], false, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            334 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(3-3)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(3-1)]);
            },
            335 => null,
            336 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            337 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            338 => null,
            339 => null,
            340 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            341 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            342 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            343 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            344 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)]; } else { $self->semValue = $self->semStack[$stackPos-(2-1)]; }
            },
            345 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            346 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            347 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Property($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-1)]);
            },
            348 => static function ($self, $stackPos) {
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nikic/php-parser/lib/PhpParser/Parser/Php8.php [1164:1996]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            1,    1,    3,    1,    1,    4,    1,    1,    1,    3,
            1,    1,    2,    1,    3,    4,    3,    2,    0,    2,
            2,    1,    2,    1,    1,    1,    4,    3,    3,    3,
            3,    6,    3,    1,    1,    2,    1
    );

    protected function initReduceCallbacks(): void {
        $this->reduceCallbacks = [
            0 => null,
            1 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleNamespaces($self->semStack[$stackPos-(1-1)]);
            },
            2 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            3 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            4 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            5 => null,
            6 => null,
            7 => null,
            8 => null,
            9 => null,
            10 => null,
            11 => null,
            12 => null,
            13 => null,
            14 => null,
            15 => null,
            16 => null,
            17 => null,
            18 => null,
            19 => null,
            20 => null,
            21 => null,
            22 => null,
            23 => null,
            24 => null,
            25 => null,
            26 => null,
            27 => null,
            28 => null,
            29 => null,
            30 => null,
            31 => null,
            32 => null,
            33 => null,
            34 => null,
            35 => null,
            36 => null,
            37 => null,
            38 => null,
            39 => null,
            40 => null,
            41 => null,
            42 => null,
            43 => null,
            44 => null,
            45 => null,
            46 => null,
            47 => null,
            48 => null,
            49 => null,
            50 => null,
            51 => null,
            52 => null,
            53 => null,
            54 => null,
            55 => null,
            56 => null,
            57 => null,
            58 => null,
            59 => null,
            60 => null,
            61 => null,
            62 => null,
            63 => null,
            64 => null,
            65 => null,
            66 => null,
            67 => null,
            68 => null,
            69 => null,
            70 => null,
            71 => null,
            72 => null,
            73 => null,
            74 => null,
            75 => null,
            76 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; if ($self->semValue === "<?=") $self->emitError(new Error('Cannot use "<?=" as an identifier', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            77 => null,
            78 => null,
            79 => null,
            80 => null,
            81 => null,
            82 => null,
            83 => null,
            84 => null,
            85 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            86 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            87 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            88 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            89 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            90 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            91 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            92 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            93 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            94 => null,
            95 => static function ($self, $stackPos) {
                 $self->semValue = new Name(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            96 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            97 => static function ($self, $stackPos) {
                 /* nothing */
            },
            98 => static function ($self, $stackPos) {
                 /* nothing */
            },
            99 => static function ($self, $stackPos) {
                 /* nothing */
            },
            100 => static function ($self, $stackPos) {
                 $self->emitError(new Error('A trailing comma is not allowed here', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            101 => null,
            102 => null,
            103 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(1-1)], [], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            104 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            105 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            106 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            107 => static function ($self, $stackPos) {
                 $self->semValue = new Node\AttributeGroup($self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            108 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            109 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            110 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            111 => null,
            112 => null,
            113 => null,
            114 => null,
            115 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\HaltCompiler($self->handleHaltCompiler(), $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            116 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(3-2)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_SEMICOLON);
            $self->checkNamespace($self->semValue);
            },
            117 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            118 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_(null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            119 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(3-2)], Stmt\Use_::TYPE_NORMAL, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            120 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            121 => null,
            122 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Const_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            123 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_FUNCTION;
            },
            124 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_CONSTANT;
            },
            125 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-6)], $self->semStack[$stackPos-(8-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            126 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-5)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            127 => null,
            128 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            129 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            130 => null,
            131 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            132 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            133 => null,
            134 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            135 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            136 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            137 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            138 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            139 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            140 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->semValue->type = Stmt\Use_::TYPE_NORMAL;
            },
            141 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)]; $self->semValue->type = $self->semStack[$stackPos-(2-1)];
            },
            142 => null,
            143 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            144 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            145 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            146 => null,
            147 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            148 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            149 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            150 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            151 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            152 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            153 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            154 => null,
            155 => null,
            156 => null,
            157 => static function ($self, $stackPos) {
                 throw new Error('__HALT_COMPILER() can only be used from the outermost scope', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            158 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Block($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            159 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(7-3)], ['stmts' => $self->semStack[$stackPos-(7-5)], 'elseifs' => $self->semStack[$stackPos-(7-6)], 'else' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            160 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(10-3)], ['stmts' => $self->semStack[$stackPos-(10-6)], 'elseifs' => $self->semStack[$stackPos-(10-7)], 'else' => $self->semStack[$stackPos-(10-8)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            161 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\While_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            162 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Do_($self->semStack[$stackPos-(7-5)], $self->semStack[$stackPos-(7-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            163 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\For_(['init' => $self->semStack[$stackPos-(9-3)], 'cond' => $self->semStack[$stackPos-(9-5)], 'loop' => $self->semStack[$stackPos-(9-7)], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            164 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Switch_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            165 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Break_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            166 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Continue_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            167 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Return_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            168 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Global_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            169 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Static_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            170 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Echo_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            171 => static function ($self, $stackPos) {

        $self->semValue = new Stmt\InlineHTML($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
        $self->semValue->setAttribute('hasLeadingNewline', $self->inlineHtmlHasLeadingNewline($stackPos-(1-1)));

            },
            172 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Expression($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            173 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Unset_($self->semStack[$stackPos-(5-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            174 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-5)][0], ['keyVar' => null, 'byRef' => $self->semStack[$stackPos-(7-5)][1], 'stmts' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            175 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-7)][0], ['keyVar' => $self->semStack[$stackPos-(9-5)], 'byRef' => $self->semStack[$stackPos-(9-7)][1], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            176 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(6-3)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-4)],  $self->tokenEndStack[$stackPos-(6-4)])), ['stmts' => $self->semStack[$stackPos-(6-6)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            177 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Declare_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            178 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TryCatch($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->checkTryCatch($self->semValue);
            },
            179 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Goto_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            180 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Label($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            181 => static function ($self, $stackPos) {
                 $self->semValue = null; /* means: no statement */
            },
            182 => null,
            183 => static function ($self, $stackPos) {
                 $self->semValue = $self->maybeCreateNop($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]);
            },
            184 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            185 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            186 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            187 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            188 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            189 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Catch_($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-7)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            190 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            191 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Finally_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            192 => null,
            193 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            194 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            195 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            196 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            197 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            198 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            199 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            200 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            201 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            202 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            203 => null,
            204 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            205 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            206 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(8-3)], ['byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-5)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            207 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(9-4)], ['byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-6)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            208 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(7-2)], ['type' => $self->semStack[$stackPos-(7-1)], 'extends' => $self->semStack[$stackPos-(7-3)], 'implements' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(7-2));
            },
            209 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(8-3)], ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(8-3));
            },
            210 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Interface_($self->semStack[$stackPos-(7-3)], ['extends' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => $self->semStack[$stackPos-(7-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkInterface($self->semValue, $stackPos-(7-3));
            },
            211 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Trait_($self->semStack[$stackPos-(6-3)], ['stmts' => $self->semStack[$stackPos-(6-5)], 'attrGroups' => $self->semStack[$stackPos-(6-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            212 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Enum_($self->semStack[$stackPos-(8-3)], ['scalarType' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkEnum($self->semValue, $stackPos-(8-3));
            },
            213 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            214 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            215 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            216 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            217 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            218 => null,
            219 => null,
            220 => static function ($self, $stackPos) {
                 $self->checkClassModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            221 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            222 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            223 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            224 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            225 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            226 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            227 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            228 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            229 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            230 => null,
            231 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            232 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            233 => null,
            234 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            235 => null,
            236 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            237 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            238 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            239 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            240 => null,
            241 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            242 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            243 => static function ($self, $stackPos) {
                 $self->semValue = new Node\DeclareItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            244 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            245 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            246 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            247 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(5-3)];
            },
            248 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            249 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            250 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_($self->semStack[$stackPos-(4-2)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            251 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_(null, $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            252 => null,
            253 => null,
            254 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Match_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            255 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            256 => null,
            257 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            258 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            259 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            260 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm(null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            261 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            262 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            263 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            264 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            265 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            266 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            267 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            268 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            269 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            270 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            271 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            272 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            273 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            274 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-2)], true);
            },
            275 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            276 => static function ($self, $stackPos) {
                 $self->semValue = array($self->fixupArrayDestructuring($self->semStack[$stackPos-(1-1)]), false);
            },
            277 => null,
            278 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            279 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            280 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            281 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            282 => static function ($self, $stackPos) {
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            283 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            284 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            285 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            286 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC_SET;
            },
            287 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED_SET;
            },
            288 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE_SET;
            },
            289 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            290 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(7-6)], null, $self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-4)], $self->semStack[$stackPos-(7-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-1)], $self->semStack[$stackPos-(7-7)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            291 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(9-6)], $self->semStack[$stackPos-(9-8)], $self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-4)], $self->semStack[$stackPos-(9-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(9-2)], $self->semStack[$stackPos-(9-1)], $self->semStack[$stackPos-(9-9)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            292 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])), null, $self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-4)], $self->semStack[$stackPos-(6-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-1)]);
            },
            293 => null,
            294 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            295 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            296 => null,
            297 => null,
            298 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Name('static', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            299 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleBuiltinTypes($self->semStack[$stackPos-(1-1)]);
            },
            300 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('array', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            301 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('callable', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            302 => null,
            303 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            304 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            305 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            306 => null,
            307 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            308 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            309 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            310 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            311 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            312 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            313 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            314 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            315 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            316 => null,
            317 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            318 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            319 => null,
            320 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            321 => null,
            322 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            323 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            324 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            325 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            326 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            327 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-2)]);
            },
            328 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VariadicPlaceholder($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            329 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            330 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            331 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(1-1)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            332 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], true, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            333 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], false, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            334 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(3-3)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(3-1)]);
            },
            335 => null,
            336 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            337 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            338 => null,
            339 => null,
            340 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            341 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            342 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            343 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            344 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)]; } else { $self->semValue = $self->semStack[$stackPos-(2-1)]; }
            },
            345 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            346 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            347 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Property($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-1)]);
            },
            348 => static function ($self, $stackPos) {
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



