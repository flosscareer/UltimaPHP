<?php
/**
 * Ultima PHP - OpenSource Ultima Online Server written in PHP
 * Version: 0.1 - Pre Alpha
 */

class packet_0x07 extends Packets {

    /**
     * Defines the packet, the length and if there is a client send
     */
    public function __construct($client = false) {
        $this->setPacket(0x07);

        if ($client) {
            $this->client = $client;
        }
    }

    /**
     * Handle the packet receive
     */
    public function receive($data) {
        if (!$this->client) {
            return false;
        }

        $command     = $data[0];
        $item_serial = $data[1] . $data[2] . $data[3] . $data[4];
        $amount      = hexdec($data[5] . $data[6]);

        return UltimaPHP::$socketClients[$this->client]['account']->player->pickUp($item_serial, $amount);
    }
}