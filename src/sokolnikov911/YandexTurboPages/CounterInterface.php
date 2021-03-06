<?php

namespace sokolnikov911\YandexTurboPages;

/**
 * Interface CounterInterface
 * @package sokolnikov911\YandexTurboPages
 */
interface CounterInterface
{
    /**
     * Set counter type and ID
     * @param string $type
     * @param string $id
     */
    public function __construct($type, $id);

    /**
     * Append counter to the channel
     * @param ChannelInterface $channel
     * @return $this
     */
    public function appendTo(ChannelInterface $channel);

    /**
     * Return XML object
     * @return SimpleXMLElement
     */
    public function asXML();
}