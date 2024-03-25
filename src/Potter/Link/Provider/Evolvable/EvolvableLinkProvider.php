<?php

declare(strict_types=1);

namespace Potter\Link\Provider\Evolvable;

use \Potter\Cloneable\{
    CloneableInterface,
    CloneableTrait
};
use \Potter\Link\Provider\{
    LinkProviderInterface,
    LinkProviderTrait
};

final class EvolvableLinkProvider extends AbstractEvolvableLinkProvider implements CloneableInterface, LinkProviderInterface
{
    use CloneableTrait, EvolvableLinkProviderTrait, LinkProviderTrait;
}
