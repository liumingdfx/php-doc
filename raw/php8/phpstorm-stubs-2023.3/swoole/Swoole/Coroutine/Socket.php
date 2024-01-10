<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

use Swoole\Client;

/**
*<div id="class.socket" class="reference"> <h1 class="title">Socket 类</h1>  <div class="partintro"><p class="verinfo">(PHP 8)</p>    <div class="section" id="socket.intro">   <h2 class="title">简介</h2>   <p class="para">    从 PHP 8.0.0 开始替换 <span>Socket</span> 资源的完全不透明类。   </p>  </div>    <div class="section" id="socket.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Socket</strong></strong>     {</div>   }</div>  </div> </div> </div>
*/
class Socket
{
    public $fd = -1;
    public $domain = 0;
    public $type = 0;
    public $protocol = 0;
    public $errCode = 0;
    public $errMsg = '';

    public function __construct($domain, $type, $protocol = null) {}

    /**
     * @param mixed $address
     * @param mixed|null $port
     * @return mixed
     */
    public function bind($address, $port = null) {}

    /**
     * @param mixed|null $backlog
     * @return mixed
     */
    public function listen($backlog = null) {}

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function accept($timeout = null) {}

    /**
     * @param mixed $host
     * @param mixed|null $port
     * @param mixed|null $timeout
     * @return mixed
     */
    public function connect($host, $port = null, $timeout = null) {}

    /**
     * @return mixed
     */
    public function checkLiveness() {}

    /**
     * @param mixed|null $length
     * @return mixed
     */
    public function peek($length = null) {}

    /**
     * @param mixed|null $length
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recv($length = null, $timeout = null) {}

    /**
     * @param mixed|null $length
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recvAll($length = null, $timeout = null) {}

    /**
     * @param mixed|null $length
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recvLine($length = null, $timeout = null) {}

    /**
     * @param mixed|null $length
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recvWithBuffer($length = null, $timeout = null) {}

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recvPacket($timeout = null) {}

    /**
     * @param mixed $data
     * @param mixed|null $timeout
     * @return mixed
     */
    public function send($data, $timeout = null) {}

    /**
     * @param mixed $io_vector
     * @param mixed|null $timeout
     * @return mixed
     */
    public function readVector($io_vector, $timeout = null) {}

    /**
     * @param mixed $io_vector
     * @param mixed|null $timeout
     * @return mixed
     */
    public function readVectorAll($io_vector, $timeout = null) {}

    /**
     * @param mixed $io_vector
     * @param mixed|null $timeout
     * @return mixed
     */
    public function writeVector($io_vector, $timeout = null) {}

    /**
     * @param mixed $io_vector
     * @param mixed|null $timeout
     * @return mixed
     */
    public function writeVectorAll($io_vector, $timeout = null) {}

    /**
     * @param mixed $filename
     * @param mixed|null $offset
     * @param mixed|null $length
     * @return mixed
     */
    public function sendFile($filename, $offset = null, $length = null) {}

    /**
     * @param mixed $data
     * @param mixed|null $timeout
     * @return mixed
     */
    public function sendAll($data, $timeout = null) {}

    /**
     * @param mixed $peername
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recvfrom(&$peername, $timeout = null) {}

    /**
     * @param mixed $addr
     * @param mixed $port
     * @param mixed $data
     * @return mixed
     */
    public function sendto($addr, $port, $data) {}

    /**
     * @param mixed $level
     * @param mixed $opt_name
     * @return mixed
     */
    public function getOption($level, $opt_name) {}

    /**
     * @return bool Returns TRUE if succeed; otherwise FALSE.
     */
    public function setProtocol(array $settings): bool {}

    /**
     * @param mixed $level
     * @param mixed $opt_name
     * @param mixed $opt_value
     * @return mixed
     */
    public function setOption($level, $opt_name, $opt_value) {}

    public function sslHandshake(): bool {}

    /**
     * @param int $how A Client::SHUT_* constant.
     */
    public function shutdown(int $how = Client::SHUT_RDWR): bool {}

    /**
     * @param int $event Must be constant SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE.
     */
    public function cancel(int $event = SWOOLE_EVENT_READ): bool {}

    public function close(): bool {}

    /**
     * @return array|false If succeeds, return an array with two fields in it: "address" and "port"; otherwise, return FALSE.
     */
    public function getpeername() {}

    /**
     * @return array|false If succeeds, return an array with two fields in it: "address" and "port"; otherwise, return FALSE.
     */
    public function getsockname() {}

    /**
     * @since 4.8.3
     */
    public function isClosed(): bool {}
}
