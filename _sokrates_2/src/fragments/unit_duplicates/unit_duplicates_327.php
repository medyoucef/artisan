vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/French/Inflectible.php [15:22]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getSingular(): iterable
    {
        yield new Transformation(new Pattern('/(b|cor|ém|gemm|soupir|trav|vant|vitr)aux$/'), '\1ail');
        yield new Transformation(new Pattern('/ails$/'), 'ail');
        yield new Transformation(new Pattern('/(journ|chev)aux$/'), '\1al');
        yield new Transformation(new Pattern('/(bijou|caillou|chou|genou|hibou|joujou|pou|au|eu|eau)x$/'), '\1');
        yield new Transformation(new Pattern('/s$/'), '');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/Spanish/Inflectible.php [15:22]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getSingular(): iterable
    {
        yield new Transformation(new Pattern('/ereses$/'), 'erés');
        yield new Transformation(new Pattern('/iones$/'), 'ión');
        yield new Transformation(new Pattern('/ces$/'), 'z');
        yield new Transformation(new Pattern('/es$/'), '');
        yield new Transformation(new Pattern('/s$/'), '');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



