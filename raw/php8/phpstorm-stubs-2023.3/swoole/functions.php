<?php

declare(strict_types=1);

/**
*<div id="function.swoole-version" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_version</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_version</span> &mdash; <span class="dc-title">Get the version of Swoole</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-version-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_version</strong></span>(): <span class="type" style="color:#EAB766">string</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-version-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-version-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The version of Swoole.  </p> </div></div>
 * @return string returns a string containing the version of Swoole*/
function swoole_version() {}

/**
*<div id="function.swoole-cpu-num" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_cpu_num</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_cpu_num</span> &mdash; <span class="dc-title">Get the number of CPU</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-cpu-num-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_cpu_num</strong></span>(): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-cpu-num-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-cpu-num-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    The number of CPU.  </p> </div></div>
 * @return int returns the number of CPU cores*/
function swoole_cpu_num() {}

/**
*<div id="function.swoole-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_last_error</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_last_error</span> &mdash; <span class="dc-title">Get the lastest error message</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_last_error</strong></span>(): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-last-error-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_last_error() {}

/**
 * @param $domain_name[required]
 * @param $timeout[optional]
 * @param $type[optional]
 * @return mixed
 */
function swoole_async_dns_lookup_coro($domain_name, $timeout = null, $type = null) {}

/**
*<div id="function.swoole-async-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_async_set</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_async_set</span> &mdash; <span class="dc-title">Update the async I/O options</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-async-set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_async_set</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$settings</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">      </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-async-set-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">settings</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-async-set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
 * @return mixed*/
function swoole_async_set($settings) {}

/**
 * @return int|false
 */
function swoole_coroutine_create(callable $func, ...$params) {}

/**
 * Defers the execution of a callback function until the surrounding function of a coroutine returns.
 *
 * @return void
 * @example
 * <pre>
 * swoole_coroutine_create(function () {  // The surrounding function of a coroutine.
 *   echo '1';
 *   swoole_coroutine_defer(function () { // The callback function to be deferred.
 *     echo '3';
 *   });
 *   echo '2';
 * });
 * <pre>
 */
function swoole_coroutine_defer(callable $callback) {}

/**
 * @param $domain[required]
 * @param $type[required]
 * @param $protocol[required]
 * @return mixed
 */
function swoole_coroutine_socketpair($domain, $type, $protocol) {}

/**
 * @param $count[optional]
 * @param $sleep_time[optional]
 * @return mixed
 */
function swoole_test_kernel_coroutine($count = null, $sleep_time = null) {}

/**
*<div id="function.swoole-client-select" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_client_select</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_client_select</span> &mdash; <span class="dc-title">Get the file description which are ready to read/write or error</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-client-select-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_client_select</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$read_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$write_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$error_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = 0.5</span></span><br>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-client-select-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">read_array</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">write_array</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">error_array</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-client-select-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_client_select(&$read_array, &$write_array, &$error_array, $timeout = null) {}

/**
*<div id="function.swoole-select" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_select</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_select</span> &mdash; <span class="dc-title">Select the file descriptions which are ready to read/write or error in the eventloop</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-select-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_select</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$read_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$write_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$error_array</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">float</span> <span class="parameter" style="color:#3A95FF">$timeout</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-select-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">read_array</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">write_array</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">error_array</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-select-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_select(&$read_array, &$write_array, &$error_array, $timeout = null) {}

/**
*<div id="function.swoole-set-process-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_set_process_name</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_set_process_name</span> &mdash; <span class="dc-title">Set the process name</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-set-process-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_set_process_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$process_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span><span class="initializer"> = 128</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-set-process-name-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">process_name</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-set-process-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_set_process_name($process_name) {}

/**
*<div id="function.swoole-get-local-ip" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_get_local_ip</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_get_local_ip</span> &mdash; <span class="dc-title">Get the IPv4 IP addresses of each NIC on the machine</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-get-local-ip-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_get_local_ip</strong></span>(): <span class="type" style="color:#EAB766">array</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-get-local-ip-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-get-local-ip-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_get_local_ip() {}

/**
 * @return mixed
 */
function swoole_get_local_mac() {}

/**
*<div id="function.swoole-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_strerror</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_strerror</span> &mdash; <span class="dc-title">Convert the Errno into error messages</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$errno</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$error_type</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766">string</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">errno</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_strerror($errno, $error_type = null) {}

/**
*<div id="function.swoole-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_errno</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_errno</span> &mdash; <span class="dc-title">Get the error code of the latest system call</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-errno-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_errno</strong></span>(): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-errno-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-errno-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_errno() {}

/**
*<div id="function.swoole-clear-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_clear_error</h1>  <p class="verinfo">(PECL swoole &gt;= 4.6.0)</p><p class="refpurpose"><span class="refname">swoole_clear_error</span> &mdash; <span class="dc-title">Clear errors in the socket or on the last error code</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-clear-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_clear_error</strong></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Clear errors in the socket or on the last error code.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-clear-error-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-clear-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
 * @return mixed*/
function swoole_clear_error() {}

/**
*<div id="function.swoole-error-log" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_error_log</h1>  <p class="verinfo">(PECL swoole &gt;= 4.5.8)</p><p class="refpurpose"><span class="refname">swoole_error_log</span> &mdash; <span class="dc-title">Output error messages to the log</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-error-log-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_error_log</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$level</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$msg</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Output error messages to the log.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-error-log-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">level</span></dt>    <dd>     <span>      Log Level, constants can be used: <strong><span>SWOOLE_LOG_DEBUG</span></strong>,      <strong><span>SWOOLE_LOG_TRACE</span></strong>,      <strong><span>SWOOLE_LOG_INFO</span></strong>,      <strong><span>SWOOLE_LOG_NOTICE</span></strong>,      <strong><span>SWOOLE_LOG_WARNING</span></strong>,      <strong><span>SWOOLE_LOG_ERROR</span></strong>,      <strong><span>SWOOLE_LOG_NONE</span></strong>     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">msg</span></dt>    <dd>     <p class="para">      Message content to be written to the log.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-error-log-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
 * @return void*/
function swoole_error_log(int $level, string $msg) {}

/**
 * @return void
 * @since 4.8.1
 */
function swoole_error_log_ex(int $level, int $error, string $msg) {}

/**
 * @return void
 * @since 4.8.1
 */
function swoole_ignore_error(int $error) {}

/**
 * @param $data[required]
 * @param $type[optional]
 * @return mixed
 */
function swoole_hashcode($data, $type = null) {}

/**
 * @param $suffix[required]
 * @param $mime_type[required]
 * @return mixed
 */
function swoole_mime_type_add($suffix, $mime_type) {}

/**
 * @param $suffix[required]
 * @param $mime_type[required]
 * @return mixed
 */
function swoole_mime_type_set($suffix, $mime_type) {}

/**
 * @param $suffix[required]
 * @return mixed
 */
function swoole_mime_type_delete($suffix) {}

/**
 * @param $filename[required]
 * @return mixed
 */
function swoole_mime_type_get($filename) {}

/**
 * @param $filename[required]
 * @return mixed
 */
function swoole_get_mime_type($filename) {}

/**
 * @param $filename[required]
 * @return mixed
 */
function swoole_mime_type_exists($filename) {}

/**
 * @return mixed
 */
function swoole_mime_type_list() {}

/**
 * @return mixed
 */
function swoole_clear_dns_cache() {}

/**
 * @param $str[required]
 * @param $offset[required]
 * @param $length[optional]
 * @param $options[optional]
 * @return mixed
 */
function swoole_substr_unserialize($str, $offset, $length = null, $options = null) {}

/**
 * @param $json[required]
 * @param $offset[required]
 * @param $length[optional]
 * @param $associative[optional]
 * @param $depth[optional]
 * @param $flags[optional]
 * @return mixed
 */
function swoole_substr_json_decode($json, $offset, $length = null, $associative = null, $depth = null, $flags = null) {}

/**
 * @return mixed
 */
function swoole_internal_call_user_shutdown_begin() {}

/**
 * Get all PHP objects of current call stack.
 *
 * @return array|false Return an array of objects back; return FALSE when no objects exist or when error happens.
 * @since 4.8.1
 */
function swoole_get_objects() {}

/**
 * Get status information of current call stack.
 *
 * @return array The array contains two fields: "object_num" (# of objects) and "resource_num" (# of resources).
 * @since 4.8.1
 */
function swoole_get_vm_status() {}

/**
 * @return array|false Return the specified object back; return FALSE when no object found or when error happens.
 * @since 4.8.1
 */
function swoole_get_object_by_handle(int $handle) {}

/**
 * This function is an alias of function swoole_coroutine_create(); it's available only when directive
 * "swoole.use_shortname" is not explicitly turned off.
 *
 * @return int|false
 * @see swoole_coroutine_create()
 */
function go(callable $func, ...$params) {}

/**
 * Defers the execution of a callback function until the surrounding function of a coroutine returns.
 *
 * This function is an alias of function swoole_coroutine_defer(); it's available only when directive
 * "swoole.use_shortname" is not explicitly turned off.
 *
 * @return void
 * @see swoole_coroutine_defer()
 *
 * @example
 * <pre>
 * go(function () {      // The surrounding function of a coroutine.
 *   echo '1';
 *   defer(function () { // The callback function to be deferred.
 *     echo '3';
 *   });
 *   echo '2';
 * });
 * <pre>
 */
function defer(callable $callback) {}

/**
*<div id="function.swoole-event-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_add</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_add</span> &mdash; <span class="dc-title">Add new callback functions of a socket into the EventLoop</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-add-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_event_add</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$fd</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$read_callback</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$write_callback</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$events</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-add-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fd</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">read_callback</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">write_callback</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">events</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-add-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_event_add($fd, $read_callback, $write_callback = null, $events = null) {}

/**
*<div id="function.swoole-event-del" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_del</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_del</span> &mdash; <span class="dc-title">Remove all event callback functions of a socket</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-del-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_event_del</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$fd</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-del-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fd</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-del-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return mixed*/
function swoole_event_del($fd) {}

/**
*<div id="function.swoole-event-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_set</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_set</span> &mdash; <span class="dc-title">Update the event callback functions of a socket</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_event_set</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$fd</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$read_callback</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$write_callback</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$events</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-set-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fd</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">read_callback</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">write_callback</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">events</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_event_set($fd, $read_callback = null, $write_callback = null, $events = null) {}

/**
 * @param $fd[required]
 * @param $events[optional]
 * @return mixed
 */
function swoole_event_isset($fd, $events = null) {}

/**
 * @return mixed
 */
function swoole_event_dispatch() {}

/**
*<div id="function.swoole-event-defer" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_defer</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_defer</span> &mdash; <span class="dc-title">Add callback function to the next event loop</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-defer-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_event_defer</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$callback</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-defer-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-defer-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return true*/
function swoole_event_defer(callable $callback) {}

/**
 * @param $callback[required]
 * @param $before[optional]
 * @return mixed
 */
function swoole_event_cycle($callback, $before = null) {}

/**
*<div id="function.swoole-event-write" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_write</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_write</span> &mdash; <span class="dc-title">Write data to a socket</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-write-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>swoole_event_write</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$fd</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$data</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-write-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fd</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">data</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-write-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return mixed*/
function swoole_event_write($fd, $data) {}

/**
*<div id="function.swoole-event-wait" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_wait</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_wait</span> &mdash; <span class="dc-title">Start the event loop</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-wait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_event_wait</strong></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-wait-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-wait-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_event_wait() {}

/**
*<div id="function.swoole-event-exit" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_event_exit</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_event_exit</span> &mdash; <span class="dc-title">Exit the eventloop, only available at the client side</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-event-exit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_event_exit</strong></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-event-exit-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-event-exit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return mixed*/
function swoole_event_exit() {}

/**
 * This function is an alias of method \Swoole\Timer::set().
 *
 * @return void
 * @see \Swoole\Timer::set()
 */
function swoole_timer_set(array $settings) {}

/**
*<div id="function.swoole-timer-after" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_timer_after</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_timer_after</span> &mdash; <span class="dc-title">Trigger a one time callback function in the future</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-timer-after-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_timer_after</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$ms</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$callback</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$param</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-timer-after-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ms</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">param</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-timer-after-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return int*/
function swoole_timer_after(int $ms, callable $callback, ...$params) {}

/**
*<div id="function.swoole-timer-tick" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_timer_tick</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_timer_tick</span> &mdash; <span class="dc-title">Trigger a timer tick callback function by time interval</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-timer-tick-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_timer_tick</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$ms</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$callback</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$param</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-timer-tick-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ms</span></dt>    <dd>     <span>           </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-timer-tick-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return int*/
function swoole_timer_tick(int $ms, callable $callback, ...$params) {}

/**
*<div id="function.swoole-timer-exists" class="refentry"> <div class="refnamediv">  <h1 class="refname">swoole_timer_exists</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">swoole_timer_exists</span> &mdash; <span class="dc-title">Check if a timer callback function is existed</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.swoole-timer-exists-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>swoole_timer_exists</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$timer_id</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.swoole-timer-exists-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">timer_id</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.swoole-timer-exists-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * @return bool*/
function swoole_timer_exists(int $timer_id) {}

/**
 * This function is an alias of method \Swoole\Timer::info().
 *
 * @return array
 * @see \Swoole\Timer::info()
 */
function swoole_timer_info(int $timer_id) {}

/**
 * This function is an alias of method \Swoole\Timer::stats().
 *
 * @return array
 * @see \Swoole\Timer::stats()
 */
function swoole_timer_stats() {}

/**
 * This function is an alias of method \Swoole\Timer::list().
 *
 * @return \Swoole\timer\Iterator
 * @see \Swoole\Timer::list()
 */
function swoole_timer_list() {}

/**
 * This function is an alias of method \Swoole\Timer::clear().
 *
 * @return bool
 * @see \Swoole\Timer::clear()
 */
function swoole_timer_clear(int $timer_id) {}

/**
 * This function is an alias of method \Swoole\Timer::clearAll().
 *
 * @return bool
 * @see \Swoole\Timer::clearAll()
 */
function swoole_timer_clear_all() {}
