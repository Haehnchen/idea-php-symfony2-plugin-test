<?php

namespace espend\Container\ServiceBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MySubscriber implements EventSubscriberInterface {

    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request' => array(
                array('onKernelResponseMid', 10),
                array('onKernelResponseMid', 5),
                array('onKernelResponsePost', 0),
            ),
            'store.order'  => array('fooBar', 0),
            'pre.foo1'  => array('fooBar', 0),
            'pre.foo2'  => array('fooBar', 0),
            'pre.foo3'  => array('fooBar', 0),
        );

    }

    public function fooBar() {
    }
    public function onKernelResponseMid() {
    }
    public function onKernelResponsePost() {
    }
}

class TestEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'pre.foo1' => 'postFoo',
            'post.foo' => 'postFoo'
        );
    }

    public function preFoo() {
    }
    public function postFoo() {
    }

}

class TestEventSubscriberWithPriorities implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'pre.foo2' => array('preFoo', 10),
            'post.foo' => array('postFoo'),
        );
    }

    public function preFoo() {
    }
    public function postFoo() {
    }
}

class TestEventSubscriberWithMultipleListeners implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array('pre.foo3' => array(
            array('preFoo1'),
            array('preFoo2', 10)
        ));
    }

    public function preFoo1() {
    }
    public function preFoo2() {
    }
}