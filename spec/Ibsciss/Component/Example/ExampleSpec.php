<?php

namespace spec\Ibsciss\Component\Example;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExampleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ibsciss\Component\Example\Example');
    }

    function it_work()
    {
        $this->hello()->shouldReturn('Hello');
    }
}
