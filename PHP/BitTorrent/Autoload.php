<?php
/**
 * PHP_BitTorrent
 *
 * Copyright (c) 2011 Christer Edvartsen <cogo@starzinger.net>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * * The above copyright notice and this permission notice shall be included in
 *   all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @package PHP_BitTorrent
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011, Christer Edvartsen
 * @license http://www.opensource.org/licenses/mit-license MIT License
 */

/**
 * Autoloader used by PHP_BitTorrent
 *
 * @package PHP_BitTorrent
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011, Christer Edvartsen
 * @license http://www.opensource.org/licenses/mit-license MIT License
 */
class PHP_BitTorrent_Autoload {
    /**
     * PHP_BitTorrent classes
     *
     * @var array
     */
    static public $classes = array(
        'php_bittorrent_autoload' => '/BitTorrent/Autoload.php',
        'php_bittorrent_decoder' => '/BitTorrent/Decoder.php',
        'php_bittorrent_decoder_exception' => '/BitTorrent/Decoder/Exception.php',
        'php_bittorrent_encoder' => '/BitTorrent/Encoder.php',
        'php_bittorrent_encoder_exception' => '/BitTorrent/Encoder/Exception.php',
        'php_bittorrent_exception' => '/BitTorrent/Exception.php',
        'php_bittorrent_torrent' => '/BitTorrent/Torrent.php',
        'php_bittorrent_torrent_exception' => '/BitTorrent/Torrent/Exception.php',
        'php_bittorrent_tracker' => '/BitTorrent/Tracker.php',
        'php_bittorrent_tracker_eventlistener' => '/BitTorrent/Tracker/Eventlistener.php',
        'php_bittorrent_tracker_exception' => '/BitTorrent/Tracker/Exception.php',
        'php_bittorrent_tracker_peer' => '/BitTorrent/Tracker/Peer.php',
        'php_bittorrent_tracker_request' => '/BitTorrent/Tracker/Request.php',
        'php_bittorrent_tracker_request_exception' => '/BitTorrent/Tracker/Request/Exception.php',
        'php_bittorrent_tracker_response' => '/BitTorrent/Tracker/Response.php',
        'php_bittorrent_tracker_storageadapter_abstract' => '/BitTorrent/Tracker/StorageAdapter/Abstract.php',
        'php_bittorrent_tracker_storageadapter_exception' => '/BitTorrent/Tracker/StorageAdapter/Exception.php',
    );

    /**
     * Load a class
     *
     * @param string $class The name of the class to load
     */
    static public function load($class) {
        $className = strtolower($class);

        if (isset(static::$classes[$className])) {
            require dirname(__DIR__) . static::$classes[$className];
        }
    }
}

spl_autoload_register('PHP_BitTorrent_Autoload::load');