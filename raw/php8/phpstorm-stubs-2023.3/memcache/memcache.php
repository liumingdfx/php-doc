<?php

// Start of memcache v.3.0.8

class MemcachePool
{
    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Open memcached server connection
     * @link https://php.net/manual/en/memcache.connect.php
     * @param string $host <p>
     * Point to the host where memcached is listening for connections. This parameter
     * may also specify other transports like <em>unix:///path/to/memcached.sock</em>
     * to use UNIX domain sockets, in this case <b>port</b> must also
     * be set to <em>0</em>.
     * </p>
     * @param int $port [optional] <p>
     * Point to the port where memcached is listening for connections. Set this
     * parameter to <em>0</em> when using UNIX domain sockets.
     * </p>
     * <p>
     * Please note: <b>port</b> defaults to
     * {@link https://php.net/manual/en/memcache.ini.php#ini.memcache.default-port memcache.default_port}
     * if not specified. For this reason it is wise to specify the port
     * explicitly in this method call.
     * </p>
     * @param int $timeout [optional] <p>Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.</p>
     * @return bool <p>Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.</p>
     */
    public function connect($host, $port, $timeout = 1) {}

    /**
     * (PECL memcache &gt;= 2.0.0)<br/>
     * Add a memcached server to connection pool
     * @link https://php.net/manual/en/memcache.addserver.php
     * @param string $host <p>
     * Point to the host where memcached is listening for connections. This parameter
     * may also specify other transports like unix:///path/to/memcached.sock
     * to use UNIX domain sockets, in this case <i>port</i> must also
     * be set to 0.
     * </p>
     * @param int $port [optional] <p>
     * Point to the port where memcached is listening for connections.
     * Set this
     * parameter to 0 when using UNIX domain sockets.
     * </p>
     * <p>
     * Please note: <i>port</i> defaults to
     * memcache.default_port
     * if not specified. For this reason it is wise to specify the port
     * explicitly in this method call.
     * </p>
     * @param bool $persistent [optional] <p>
     * Controls the use of a persistent connection. Default to <b>TRUE</b>.
     * </p>
     * @param int $weight [optional] <p>
     * Number of buckets to create for this server which in turn control its
     * probability of it being selected. The probability is relative to the
     * total weight of all servers.
     * </p>
     * @param int $timeout [optional] <p>
     * Value in seconds which will be used for connecting to the daemon. Think
     * twice before changing the default value of 1 second - you can lose all
     * the advantages of caching if your connection is too slow.
     * </p>
     * @param int $retry_interval [optional] <p>
     * Controls how often a failed server will be retried, the default value
     * is 15 seconds. Setting this parameter to -1 disables automatic retry.
     * Neither this nor the <i>persistent</i> parameter has any
     * effect when the extension is loaded dynamically via <b>dl</b>.
     * </p>
     * <p>
     * Each failed connection struct has its own timeout and before it has expired
     * the struct will be skipped when selecting backends to serve a request. Once
     * expired the connection will be successfully reconnected or marked as failed
     * for another <i>retry_interval</i> seconds. The typical
     * effect is that each web server child will retry the connection about every
     * <i>retry_interval</i> seconds when serving a page.
     * </p>
     * @param bool $status [optional] <p>
     * Controls if the server should be flagged as online. Setting this parameter
     * to <b>FALSE</b> and <i>retry_interval</i> to -1 allows a failed
     * server to be kept in the pool so as not to affect the key distribution
     * algorithm. Requests for this server will then failover or fail immediately
     * depending on the <i>memcache.allow_failover</i> setting.
     * Default to <b>TRUE</b>, meaning the server should be considered online.
     * </p>
     * @param callable $failure_callback [optional] <p>
     * Allows the user to specify a callback function to run upon encountering an
     * error. The callback is run before failover is attempted. The function takes
     * two parameters, the hostname and port of the failed server.
     * </p>
     * @param int $timeoutms [optional] <p>
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function addServer($host, $port = 11211, $persistent = true, $weight = null, $timeout = 1, $retry_interval = 15, $status = true, callable $failure_callback = null, $timeoutms = null) {}

    /**
     * (PECL memcache &gt;= 2.1.0)<br/>
     * Changes server parameters and status at runtime
     * @link https://secure.php.net/manual/en/memcache.setserverparams.php
     * @param string $host <p>Point to the host where memcached is listening for connections.</p>.
     * @param int $port [optional] <p>
     * Point to the port where memcached is listening for connections.
     * </p>
     * @param int $timeout [optional] <p>
     * Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.
     * </p>
     * @param int $retry_interval [optional] <p>
     * Controls how often a failed server will be retried, the default value
     * is 15 seconds. Setting this parameter to -1 disables automatic retry.
     * Neither this nor the <b>persistent</b> parameter has any
     * effect when the extension is loaded dynamically via {@link https://secure.php.net/manual/en/function.dl.php dl()}.
     * </p>
     * @param bool $status [optional] <p>
     * Controls if the server should be flagged as online. Setting this parameter
     * to <b>FALSE</b> and <b>retry_interval</b> to -1 allows a failed
     * server to be kept in the pool so as not to affect the key distribution
     * algorithm. Requests for this server will then failover or fail immediately
     * depending on the <b>memcache.allow_failover</b> setting.
     * Default to <b>TRUE</b>, meaning the server should be considered online.
     * </p>
     * @param callable $failure_callback [optional] <p>
     * Allows the user to specify a callback function to run upon encountering an error. The callback is run before failover is attempted.
     * The function takes two parameters, the hostname and port of the failed server.
     * </p>
     * @return bool <p>Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.</p>
     */
    public function setServerParams($host, $port = 11211, $timeout = 1, $retry_interval = 15, $status = true, callable $failure_callback = null) {}

    public function setFailureCallback() {}

    /**
     * (PECL memcache &gt;= 2.1.0)<br/>
     * Returns server status
     * @link https://php.net/manual/en/memcache.getserverstatus.php
     * @param string $host Point to the host where memcached is listening for connections.
     * @param int $port Point to the port where memcached is listening for connections.
     * @return int Returns a the servers status. 0 if server is failed, non-zero otherwise
     */
    public function getServerStatus($host, $port = 11211) {}

    public function findServer() {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Return version of the server
     * @link https://php.net/manual/en/memcache.getversion.php
     * @return string|false Returns a string of server version number or <b>FALSE</b> on failure.
     */
    public function getVersion() {}

    /**
     * (PECL memcache &gt;= 2.0.0)<br/>
     * Add an item to the server. If the key already exists, the value will not be added and <b>FALSE</b> will be returned.
     * @link https://php.net/manual/en/memcache.add.php
     * @param string $key The key that will be associated with the item.
     * @param mixed $var The variable to store. Strings and integers are stored as is, other types are stored serialized.
     * @param int $flag [optional] <p>
     * Use <b>MEMCACHE_COMPRESSED</b> to store the item
     * compressed (uses zlib).
     * </p>
     * @param int $expire [optional] <p>Expiration time of the item.
     * If it's equal to zero, the item will never expire.
     * You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).</p>
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure. Returns <b>FALSE</b> if such key already exist. For the rest Memcache::add() behaves similarly to Memcache::set().
     */
    public function add($key, $var, $flag = null, $expire = null) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Stores an item var with key on the memcached server. Parameter expire is expiration time in seconds.
     * If it's 0, the item never expires (but memcached server doesn't guarantee this item to be stored all the time,
     * it could be deleted from the cache to make place for other items).
     * You can use MEMCACHE_COMPRESSED constant as flag value if you want to use on-the-fly compression (uses zlib).
     * @link https://php.net/manual/en/memcache.set.php
     * @param string $key The key that will be associated with the item.
     * @param mixed $var The variable to store. Strings and integers are stored as is, other types are stored serialized.
     * @param int $flag [optional] Use MEMCACHE_COMPRESSED to store the item compressed (uses zlib).
     * @param int $expire [optional] Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function set($key, $var, $flag = null, $expire = null) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Replace value of the existing item
     * @link https://php.net/manual/en/memcache.replace.php
     * @param string $key <p>The key that will be associated with the item.</p>
     * @param mixed $var <p>The variable to store. Strings and integers are stored as is, other types are stored serialized.</p>
     * @param int $flag [optional] <p>Use <b>MEMCACHE_COMPRESSED</b> to store the item compressed (uses zlib).</p>
     * @param int $expire [optional] <p>Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).</p>
     * @return bool Returns TRUE on success or FALSE on failure.
     */
    public function replace($key, $var, $flag = null, $expire = null) {}

    public function cas() {}

    public function append() {}

    /**
     * @return string
     */
    public function prepend() {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Retrieve item from the server
     * @link https://php.net/manual/en/memcache.get.php
     * @param string|array $key <p>
     * The key or array of keys to fetch.
     * </p>
     * @param int|array &$flags [optional] <p>
     * If present, flags fetched along with the values will be written to this parameter. These
     * flags are the same as the ones given to for example {@link https://php.net/manual/en/memcache.set.php Memcache::set()}.
     * The lowest byte of the int is reserved for pecl/memcache internal usage (e.g. to indicate
     * compression and serialization status).
     * </p>
     * @return string|array|false <p>
     * Returns the string associated with the <b>key</b> or
     * an array of found key-value pairs when <b>key</b> is an {@link https://php.net/manual/en/language.types.array.php array}.
     * Returns <b>FALSE</b> on failure, <b>key</b> is not found or
     * <b>key</b> is an empty {@link https://php.net/manual/en/language.types.array.php array}.
     * </p>
     */
    public function get($key, &$flags = null) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Delete item from the server
     * https://secure.php.net/manual/en/memcache.delete.php
     * @param string $key The key associated with the item to delete.
     * @param int $timeout [optional] This deprecated parameter is not supported, and defaults to 0 seconds. Do not use this parameter.
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function delete($key, $timeout = 0) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Get statistics of the server
     * @link https://php.net/manual/en/memcache.getstats.php
     * @param string $type [optional] <p>
     * The type of statistics to fetch.
     * Valid values are {reset, malloc, maps, cachedump, slabs, items, sizes}.
     * According to the memcached protocol spec these additional arguments "are subject to change for the convenience of memcache developers".</p>
     * @param int $slabid [optional] <p>
     * Used in conjunction with <b>type</b> set to
     * cachedump to identify the slab to dump from. The cachedump
     * command ties up the server and is strictly to be used for
     * debugging purposes.
     * </p>
     * @param int $limit [optional] <p>
     * Used in conjunction with <b>type</b> set to cachedump to limit the number of entries to dump.
     * </p>
     * @return array|false Returns an associative array of server statistics or <b>FALSE</b> on failure.
     */
    public function getStats($type = null, $slabid = null, $limit = 100) {}

    /**
     * (PECL memcache &gt;= 2.0.0)<br/>
     * Get statistics from all servers in pool
     * @link https://php.net/manual/en/memcache.getextendedstats.php
     * @param string $type [optional] <p>The type of statistics to fetch. Valid values are {reset, malloc, maps, cachedump, slabs, items, sizes}. According to the memcached protocol spec these additional arguments "are subject to change for the convenience of memcache developers".</p>
     * @param int $slabid [optional] <p>
     * Used in conjunction with <b>type</b> set to
     * cachedump to identify the slab to dump from. The cachedump
     * command ties up the server and is strictly to be used for
     * debugging purposes.
     * </p>
     * @param int $limit Used in conjunction with type set to cachedump to limit the number of entries to dump.
     * @return array|false Returns a two-dimensional associative array of server statistics or <b>FALSE</b>
     * Returns a two-dimensional associative array of server statistics or <b>FALSE</b>
     * on failure.
     */
    public function getExtendedStats($type = null, $slabid = null, $limit = 100) {}

    /**
     * (PECL memcache &gt;= 2.0.0)<br/>
     * Enable automatic compression of large values
     * @link https://php.net/manual/en/memcache.setcompressthreshold.php
     * @param int $thresold <p>Controls the minimum value length before attempting to compress automatically.</p>
     * @param float $min_saving [optional] <p>Specifies the minimum amount of savings to actually store the value compressed. The supplied value must be between 0 and 1. Default value is 0.2 giving a minimum 20% compression savings.</p>
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function setCompressThreshold($thresold, $min_saving = 0.2) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Increment item's value
     * @link https://php.net/manual/en/memcache.increment.php
     * @param string $key Key of the item to increment.
     * @param int $value [optional] increment the item by <b>value</b>
     * @return int|false Returns new items value on success or <b>FALSE</b> on failure.
     */
    public function increment($key, $value = 1) {}

    /**
     * (PECL memcache &gt;= 0.2.0)<br/>
     * Decrement item's value
     * @link https://php.net/manual/en/memcache.decrement.php
     * @param string $key Key of the item do decrement.
     * @param int $value Decrement the item by <b>value</b>.
     * @return int|false Returns item's new value on success or <b>FALSE</b> on failure.
     */
    public function decrement($key, $value = 1) {}

    /**
     * (PECL memcache &gt;= 0.4.0)<br/>
     * Close memcached server connection
     * @link https://php.net/manual/en/memcache.close.php
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function close() {}

    /**
     * (PECL memcache &gt;= 1.0.0)<br/>
     * Flush all existing items at the server
     * @link https://php.net/manual/en/memcache.flush.php
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function flush() {}
}

/**
*<div id="class.memcache" class="reference"> <h1 class="title">Memcache 类</h1>  <div class="partintro"><p class="verinfo">(PECL memcache &gt;= 0.2.0)</p>  <div class="section" id="memcache.intro">   <h2 class="title">简介</h2>   <p class="para">    表示与一组 memcache 服务器的连接。   </p>  </div>  <div class="section" id="memcache.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Memcache</strong>     </span>     {</div>        <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.add.php" class="methodname" style="color:#CC7832">add</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$var</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flag</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$expire</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.addserver.php" class="methodname" style="color:#CC7832">addServer</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = 11211</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$persistent</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$weight</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$retry_interval</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$status</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$failure_callback</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeoutms</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.close.php" class="methodname" style="color:#CC7832">close</a></span>(): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.connect.php" class="methodname" style="color:#CC7832">connect</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.decrement.php" class="methodname" style="color:#CC7832">decrement</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$value</span><span class="initializer"> = 1</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.delete.php" class="methodname" style="color:#CC7832">delete</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.flush.php" class="methodname" style="color:#CC7832">flush</a></span>(): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.get.php" class="methodname" style="color:#CC7832">get</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">&$flags</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.getextendedstats.php" class="methodname" style="color:#CC7832">getExtendedStats</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$slabid</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$limit</span><span class="initializer"> = 100</span></span>): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.getserverstatus.php" class="methodname" style="color:#CC7832">getServerStatus</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = 11211</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.getstats.php" class="methodname" style="color:#CC7832">getStats</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$slabid</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$limit</span><span class="initializer"> = 100</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.getversion.php" class="methodname" style="color:#CC7832">getVersion</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.increment.php" class="methodname" style="color:#CC7832">increment</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$value</span><span class="initializer"> = 1</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.pconnect.php" class="methodname" style="color:#CC7832">pconnect</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.replace.php" class="methodname" style="color:#CC7832">replace</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$var</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flag</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$expire</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.set.php" class="methodname" style="color:#CC7832">set</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$key</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$var</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flag</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$expire</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.setcompressthreshold.php" class="methodname" style="color:#CC7832">setCompressThreshold</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$threshold</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#3A95FF">$min_savings</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/memcache.setserverparams.php" class="methodname" style="color:#CC7832">setServerParams</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = 11211</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$retry_interval</span><span class="initializer"> = <strong><span>false</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$status</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$failure_callback</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div>   }</div>  </div>   </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Memcache::add} — 增加一个条目到缓存服务器</li><li>{@link Memcache::addServer} — 向连接池中添加一个memcache服务器</li><li>{@link Memcache::close} — 关闭memcache连接</li><li>{@link Memcache::connect} — 打开一个memcached服务端连接</li><li>{@link Memcache::decrement} — 减小元素的值</li><li>{@link Memcache::delete} — 从服务端删除一个元素</li><li>{@link Memcache::flush} — 清洗（删除）已经存储的所有的元素</li><li>{@link Memcache::get} — 从服务端检回一个元素</li><li>{@link Memcache::getExtendedStats} — 缓存服务器池中所有服务器统计信息</li><li>{@link Memcache::getServerStatus} — 用于获取一个服务器的在线/离线状态</li><li>{@link Memcache::getStats} — 获取服务器统计信息</li><li>{@link Memcache::getVersion} — 返回服务器版本信息</li><li>{@link Memcache::increment} — 增加一个元素的值</li><li>{@link Memcache::pconnect} — 打开一个到服务器的持久化连接</li><li>{@link Memcache::replace} — 替换已经存在的元素的值</li><li>{@link Memcache::set} — 存储数据到服务器</li><li>{@link Memcache::setCompressThreshold} — 开启大值自动压缩</li><li>{@link Memcache::setServerParams} — 运行时修改服务器参数和状态</li></ul></div>
*/
class Memcache extends MemcachePool
{
/**
*<div id="memcache.pconnect" class="refentry"> <div class="refnamediv">  <h1 class="refname">Memcache::pconnect</h1>  <p class="verinfo">(PECL memcache &gt;= 0.4.0)</p><p class="refpurpose"><span class="refname">Memcache::pconnect</span> &mdash; <span class="dc-title">打开一个到服务器的持久化连接</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-memcache.pconnect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>Memcache::pconnect</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">Memcache::pconnect()</strong></span> 和   <span class="function">{@link Memcache::connect()}</span> 非常类似，不同点在于这里建立的连接是持久化的。   这个连接不会在脚本执行结束后或者 <span class="function">{@link Memcache::close()}</span> 被调用后关闭。   同样你也可以使用函数 <span class="function"><strong style="color:#CC7832">memcache_pconnect()</strong></span>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-memcache.pconnect-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">host</span></dt>     <dd>      <p class="para">      服务端监听的主机地址。这个参数还可以指定为其他传输方式比如 <span>unix:///path/to/memcached.sock</span>      来使用 Unix 域套接字，使用这种方式 <span class="parameter" style="color:#3A95FF">port</span> 参数必须设置为 <span>0</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">      服务端监听的端口号。使用 Unix 域套接字的时候需要将这个参数设置为 <span>0</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       连接持续（超时）时间，单位秒。默认值 1 秒，修改此值之前请三思，过长的连接持续时间可能会导致失去所有的缓存优势。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-memcache.pconnect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个 Memcache 对象 或者在失败时返回 <strong><span>false</span></strong>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-memcache.pconnect-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">Memcache::pconnect()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #FF8000">// procedural API <br /></span><span style="color: #9876AA">$memcache_obj </span><span style="color: #007700">= </span><span style="color: #9876AA">memcache_pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #9876AA">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// OO API <br /><br /></span><span style="color: #9876AA">$memcache_obj </span><span style="color: #007700">= new </span><span style="color: #9876AA">Memcache</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #9876AA">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-memcache.pconnect-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link Memcache::connect()} - 打开一个memcached服务端连接</span></li>   </ul>  </span> </div></div>
     * @return mixed a Memcache object or <b>FALSE</b> on failure.*/
    public function pconnect($host, $port, $timeout = 1) {}
}

//  string $host [, int $port [, int $timeout ]]

/**
 * (PECL memcache >= 0.2.0)<br/>
 * Memcache::connect — Open memcached server connection
 * @link https://php.net/manual/en/memcache.connect.php
 * @param string $host <p>
 * Point to the host where memcached is listening for connections.
 * This parameter may also specify other transports like
 * unix:///path/to/memcached.sock to use UNIX domain sockets,
 * in this case port must also be set to 0.
 * </p>
 * @param int $port [optional] <p>
 * Point to the port where memcached is listening for connections.
 * Set this parameter to 0 when using UNIX domain sockets.
 * Note:  port defaults to memcache.default_port if not specified.
 * For this reason it is wise to specify the port explicitly in this method call.
 * </p>
 * @param int $timeout [optional] <p>
 * Value in seconds which will be used for connecting to the daemon.
 * </p>
 * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function memcache_connect($host, $port, $timeout = 1) {}

/**
 * (PECL memcache >= 0.4.0)
 * Memcache::pconnect — Open memcached server persistent connection
 *
 * @link https://php.net/manual/en/memcache.pconnect.php#example-5242
 * @param string $host
 * @param int|null $port
 * @param int $timeout
 * @return Memcache
 */
function memcache_pconnect($host, $port = null, $timeout = 1) {}

function memcache_add_server() {}

function memcache_set_server_params() {}

function memcache_set_failure_callback() {}

function memcache_get_server_status() {}

function memcache_get_version() {}

function memcache_add() {}

function memcache_set() {}

function memcache_replace() {}

function memcache_cas() {}

function memcache_append() {}

function memcache_prepend() {}

function memcache_get() {}

function memcache_delete() {}

/**
*<div id="function.memcache-debug" class="refentry"> <div class="refnamediv">  <h1 class="refname">memcache_debug</h1>  <p class="verinfo">(PECL memcache &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">memcache_debug</span> &mdash; <span class="dc-title">打开/关闭调试输出</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.memcache-debug-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>memcache_debug</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$on_off</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   如果参数 <span class="parameter" style="color:#3A95FF">on_off</span> 为 <strong><span>true</span></strong>，<span class="function"><strong style="color:#CC7832">memcache_debug()</strong></span>   打开调试输出，如果为 <strong><span>false</span></strong>，则关闭调试输出。   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:     <p class="para">     <span class="function"><strong style="color:#CC7832">memcache_debug()</strong></span> 仅在 PHP 以 --enable-debug 选项编译时可以访问，并且在这种情况下始终返回     <strong><span>true</span></strong>，其他情况下此函数无效并始终返回 <strong><span>false</span></strong>。    </p>   </p></blockquote>  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.memcache-debug-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">on_off</span></dt>     <dd>      <p class="para">       如果为 <strong><span>true</span></strong>，则打开调试输出。如果为 <strong><span>false</span></strong> 则关闭调试输出。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.memcache-debug-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   当 PHP 以 --enalbe-debug 选项编译时返回 <strong><span>true</span></strong> 其他情况下返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return bool <b>TRUE</b> if PHP was built with --enable-debug option, otherwise*/
function memcache_debug($on_off) {}

function memcache_get_stats() {}

function memcache_get_extended_stats() {}

function memcache_set_compress_threshold() {}

function memcache_increment() {}

function memcache_decrement() {}

function memcache_close() {}

function memcache_flush() {}

/**
*{@link Memcache::set()}
*/
define('MEMCACHE_COMPRESSED', 2);
/**
*{@link Memcache::set()}
*/
define('MEMCACHE_USER1', 65536);
/**
*{@link Memcache::set()}
*/
define('MEMCACHE_USER2', 131072);
/**
*{@link Memcache::set()}
*/
define('MEMCACHE_USER3', 262144);
/**
*{@link Memcache::set()}
*/
define('MEMCACHE_USER4', 524288);
define('MEMCACHE_HAVE_SESSION', 1);

// End of memcache v.3.0.8
