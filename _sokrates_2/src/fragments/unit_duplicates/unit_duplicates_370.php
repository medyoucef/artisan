vendor/league/commonmark/src/Extension/CommonMark/Node/Inline/Image.php [25:34]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $url, ?string $label = null, ?string $title = null)
    {
        parent::__construct($url);

        if ($label !== null && $label !== '') {
            $this->appendChild(new Text($label));
        }

        $this->title = $title;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/league/commonmark/src/Extension/CommonMark/Node/Inline/Link.php [25:34]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(string $url, ?string $label = null, ?string $title = null)
    {
        parent::__construct($url);

        if ($label !== null && $label !== '') {
            $this->appendChild(new Text($label));
        }

        $this->title = $title;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



