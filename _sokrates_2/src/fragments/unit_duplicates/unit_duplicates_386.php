vendor/psy/psysh/src/Command/ReflectingCommand.php [44:55]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct($name = null)
    {
        $this->parser = new CodeArgumentParser();

        // @todo Pass visitor directly to once we drop support for PHP-Parser 4.x
        $this->traverser = new NodeTraverser();
        $this->traverser->addVisitor(new SudoVisitor());

        $this->printer = new Printer();

        parent::__construct($name);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/psy/psysh/src/Command/SudoCommand.php [35:46]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct($name = null)
    {
        $this->parser = new CodeArgumentParser();

        // @todo Pass visitor directly to once we drop support for PHP-Parser 4.x
        $this->traverser = new NodeTraverser();
        $this->traverser->addVisitor(new SudoVisitor());

        $this->printer = new Printer();

        parent::__construct($name);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



