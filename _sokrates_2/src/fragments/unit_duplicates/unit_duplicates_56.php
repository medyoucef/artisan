vendor/larastan/larastan/src/Rules/UnusedViewsRule.php [45:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if ($this->viewsUsedInOtherViews === null) {
            $this->viewsUsedInOtherViews = $this->usedViewInAnotherViewCollector->getUsedViews();
        }

        $usedViews = collect([
            $node->get(UsedViewFunctionCollector::class),
            $node->get(UsedEmailViewCollector::class),
            $node->get(UsedViewMakeCollector::class),
            $node->get(UsedViewFacadeMakeCollector::class),
            $node->get(UsedRouteFacadeViewCollector::class),
            $this->viewsUsedInOtherViews,
        ])->flatten()->unique()->toArray();

        /** @var Factory $factory */
        $factory = view();
        $finder  = $factory->getFinder();

        $allViews = iterator_to_array($this->viewFileHelper->getAllViewNames());

        $usedViews = static::filterExistingViews($factory, $usedViews);
        $allViews  = static::filterExistingViews($factory, $allViews);

        $unusedViews = array_unique(array_diff($allViews, $usedViews));

        $errors = [];
        foreach ($unusedViews as $file) {
            $path = $finder->find($file);

            $errors[] = RuleErrorBuilder::message('This view is not used in the project.')
                ->file($path)
                ->line(0)
                ->identifier('larastan.unusedViews')
                ->build();
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/UnusedViewsRule.php [45:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if ($this->viewsUsedInOtherViews === null) {
            $this->viewsUsedInOtherViews = $this->usedViewInAnotherViewCollector->getUsedViews();
        }

        $usedViews = collect([
            $node->get(UsedViewFunctionCollector::class),
            $node->get(UsedEmailViewCollector::class),
            $node->get(UsedViewMakeCollector::class),
            $node->get(UsedViewFacadeMakeCollector::class),
            $node->get(UsedRouteFacadeViewCollector::class),
            $this->viewsUsedInOtherViews,
        ])->flatten()->unique()->toArray();

        /** @var Factory $factory */
        $factory = view();
        $finder  = $factory->getFinder();

        $allViews = iterator_to_array($this->viewFileHelper->getAllViewNames());

        $usedViews = static::filterExistingViews($factory, $usedViews);
        $allViews  = static::filterExistingViews($factory, $allViews);

        $unusedViews = array_unique(array_diff($allViews, $usedViews));

        $errors = [];
        foreach ($unusedViews as $file) {
            $path = $finder->find($file);

            $errors[] = RuleErrorBuilder::message('This view is not used in the project.')
                ->file($path)
                ->line(0)
                ->identifier('larastan.unusedViews')
                ->build();
        }

        return $errors;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



