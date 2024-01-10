<?php

// Start of inotify v.0.1.6

/**
*<div id="function.inotify-add-watch" class="refentry"> <div class="refnamediv">  <h1 class="refname">inotify_add_watch</h1>  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_add_watch</span> &mdash; <span class="dc-title">添加监听到已初始化的 inotify 实例</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-add-watch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>inotify_add_watch</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#3A95FF">$inotify_instance</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$pathname</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mask</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">inotify_add_watch()</strong></span> 为 <span class="parameter" style="color:#3A95FF">pathname</span>    指定的文件或目录添加新的监听，或修改已存在的监听。  </p>  <p class="para">   在已监听的对象上使用 <span class="function"><strong style="color:#CC7832">inotify_add_watch()</strong></span> 来替换当前的监听。（或）使用 <strong><span>IN_MASK_ADD</span></strong>    常量添加监听事件。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-add-watch-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">inotify_instance</span></dt>     <dd>      <p class="para">       <span class="function">{@link inotify_init()}</span>返回的资源      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">pathname</span></dt>     <dd>      <p class="para">       要监听的文件或目录      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mask</span></dt>     <dd>      <p class="para">       监听事件。详情见 <a href="https://www.php.net/manual/zh/inotify.constants.php" class="link">预定义常量</a>。      </p>     </dd>       </dl>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-add-watch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回值是一个唯一的（inotify 实例范围内）监听描述符。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-add-watch-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link inotify_init()} - 初始化 inotify 实例</span></li>   </ul>  </span> </div></div>
 * @return int a unique (<i>inotify</i> instance-wide) watch descriptor.*/
function inotify_add_watch($inotify_instance, $pathname, $mask) {}

/**
*<div id="function.inotify-init" class="refentry"> <div class="refnamediv">  <h1 class="refname">inotify_init</h1>  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_init</span> &mdash; <span class="dc-title">初始化 inotify 实例</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-init-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>inotify_init</strong></span>(): <span class="type" style="color:#EAB766">resource</span></div>  <p class="para rdfs-comment">   初始化 <span class="function">{@link inotify_add_watch()}</span> 使用的 inotify 实例  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-init-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-init-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回资源流或发生错误时返回 <strong><span>false</span></strong>。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.inotify-init-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 inotify 使用示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// Open an inotify instance<br /></span><span style="color: #9876AA">$fd </span><span style="color: #007700">= </span><span style="color: #9876AA">inotify_init</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Watch __FILE__ for metadata changes (e.g. mtime)<br /></span><span style="color: #9876AA">$watch_descriptor </span><span style="color: #007700">= </span><span style="color: #9876AA">inotify_add_watch</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">, </span><span style="color: #9876AA">__FILE__</span><span style="color: #007700">, </span><span style="color: #9876AA">IN_ATTRIB</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// generate an event<br /></span><span style="color: #9876AA">touch</span><span style="color: #007700">(</span><span style="color: #9876AA">__FILE__</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Read events<br /></span><span style="color: #9876AA">$events </span><span style="color: #007700">= </span><span style="color: #9876AA">inotify_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$events</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The following methods allows to use inotify functions without blocking on inotify_read():<br /><br />// - Using stream_select() on $fd:<br /></span><span style="color: #9876AA">$read </span><span style="color: #007700">= array(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$write </span><span style="color: #007700">= </span><span style="color: #9876AA">null</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$except </span><span style="color: #007700">= </span><span style="color: #9876AA">null</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">stream_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$read</span><span style="color: #007700">,</span><span style="color: #9876AA">$write</span><span style="color: #007700">,</span><span style="color: #9876AA">$except</span><span style="color: #007700">,</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// - Using stream_set_blocking() on $fd<br /></span><span style="color: #9876AA">stream_set_blocking</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">inotify_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">); </span><span style="color: #FF8000">// Does no block, and return false if no events are pending<br /><br />// - Using inotify_queue_len() to check if event queue is not empty<br /></span><span style="color: #9876AA">$queue_len </span><span style="color: #007700">= </span><span style="color: #9876AA">inotify_queue_len</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">); </span><span style="color: #FF8000">// If &gt; 0, inotify_read() will not block<br /><br />// Stop watching __FILE__ for metadata changes<br /></span><span style="color: #9876AA">inotify_rm_watch</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">, </span><span style="color: #9876AA">$watch_descriptor</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Close the inotify instance<br />// This may have closed all watches if this was not already done<br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$fd</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>array(<br>  array(<br>    &#039;wd&#039; =&gt; 1,     // Equals $watch_descriptor<br>    &#039;mask&#039; =&gt; 4,   // IN_ATTRIB bit is set<br>    &#039;cookie&#039; =&gt; 0, // unique id to connect related events (e.g. <br>                   // IN_MOVE_FROM and IN_MOVE_TO events)<br>    &#039;name&#039; =&gt; &#039;&#039;,  // the name of a file (e.g. if we monitored changes<br>                   // in a directory)<br>  ),<br>);<br></span></div>    </div>   </div>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-init-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link inotify_add_watch()} - 添加监听到已初始化的 inotify 实例</span></li>    <li class="member"><span class="function">{@link inotify_rm_watch()} - 移除 inotify 实例的监听</span></li>    <li class="member"><span class="function">{@link inotify_queue_len()} - 如果有待处理事件，返回大于零的数字</span></li>    <li class="member"><span class="function">{@link inotify_read()} - 从 inotify 实例读取事件</span></li>    <li class="member"><span class="function">{@link fclose()} - 关闭一个已打开的文件指针</span></li>   </ul>  </span> </div></div>
 * @return resource|false a stream resource or <b>FALSE</b> on error.*/
function inotify_init() {}

/**
*<div id="function.inotify-queue-len" class="refentry"> <div class="refnamediv">  <h1 class="refname">inotify_queue_len</h1>  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_queue_len</span> &mdash; <span class="dc-title">如果有待处理事件，返回大于零的数字</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-queue-len-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>inotify_queue_len</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#3A95FF">$inotify_instance</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   可以通过此函数知道 <span class="function">{@link inotify_read()}</span>    是否会阻塞。如果返回大于零的数字，表示有待处理的事件，<span class="function">{@link inotify_read()}</span>    不会阻塞。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-queue-len-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">inotify_instance</span></dt>     <dd>      <p class="para">       <span class="function">{@link inotify_init()}</span>返回的资源      </p>     </dd>       </dl>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-queue-len-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果有待处理事件，返回大于零的数字。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-queue-len-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link inotify_init()} - 初始化 inotify 实例</span></li>    <li class="member"><span class="function">{@link stream_select()} - Runs the equivalent of the select() system call on the given   arrays of streams with a timeout specified by seconds and microseconds</span></li>    <li class="member"><span class="function">{@link stream_set_blocking()} - 为资源流设置阻塞或者阻塞模式</span></li>   </ul>  </span> </div></div>
 * @return int a number greater than zero if events are pending, otherwise zero.*/
function inotify_queue_len($inotify_instance) {}

/**
*<div id="function.inotify-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">inotify_read</h1>  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_read</span> &mdash; <span class="dc-title">从 inotify 实例读取事件</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>inotify_read</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#3A95FF">$inotify_instance</span></span>): <span class="type" style="color:#EAB766">array</span></div>  <p class="para rdfs-comment">   从 inotify 实例读取 inotify 事件。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-read-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">inotify_instance</span></dt>     <dd>      <p class="para">       <span class="function">{@link inotify_init()}</span>返回的资源      </p>     </dd>       </dl>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 inotify 事件数组。在没有待处理事件或 <span class="parameter" style="color:#3A95FF">inotify_instance</span>    非阻塞时返回 <strong><span>false</span></strong>。事件发生时都会返回包含以下键的数组：   <ul class="simplelist">    <li class="member">wd 是由 <span class="function">{@link inotify_add_watch()}</span>     返回的监听描述符</li>    <li class="member">mask 是 <a href="https://www.php.net/manual/zh/inotify.constants.php" class="link">events</a> 的位掩码</li>    <li class="member">cookie 是连接相关事件（例如：<strong><span>IN_MOVE_FROM</span></strong>     和 <strong><span>IN_MOVE_TO</span></strong>）的唯一 id</li>    <li class="member">name 是文件名（例如：监听目录中被修改的文件）</li>   </ul>  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-read-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link inotify_init()} - 初始化 inotify 实例</span></li>    <li class="member"><span class="function">{@link stream_select()} - Runs the equivalent of the select() system call on the given   arrays of streams with a timeout specified by seconds and microseconds</span></li>    <li class="member"><span class="function">{@link stream_set_blocking()} - 为资源流设置阻塞或者阻塞模式</span></li>    <li class="member"><span class="function">{@link inotify_queue_len()} - 如果有待处理事件，返回大于零的数字</span></li>   </ul>  </span> </div></div>
 * @return array|false an array of inotify events or <b>FALSE</b> if no events*/
function inotify_read($inotify_instance) {}

/**
*<div id="function.inotify-rm-watch" class="refentry"> <div class="refnamediv">  <h1 class="refname">inotify_rm_watch</h1>  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_rm_watch</span> &mdash; <span class="dc-title">移除 inotify 实例的监听</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.inotify-rm-watch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>inotify_rm_watch</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#3A95FF">$inotify_instance</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$watch_descriptor</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">inotify_rm_watch()</strong></span> 移除 <span class="function"><strong style="color:#CC7832">inotify_instance()</strong></span>    实例的 <span class="parameter" style="color:#3A95FF">watch_descriptor</span> 监听。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.inotify-rm-watch-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">inotify_instance</span></dt>     <dd>      <p class="para">       <span class="function">{@link inotify_init()}</span>返回的资源      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">watch_descriptor</span></dt>     <dd>      <p class="para">       实例要移除的监听。      </p>     </dd>       </dl>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.inotify-rm-watch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.inotify-rm-watch-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link inotify_init()} - 初始化 inotify 实例</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function inotify_rm_watch($inotify_instance, $mask) {}

/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ACCESS = 1;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MODIFY = 2;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ATTRIB = 4;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE_WRITE = 8;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE_NOWRITE = 16;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_OPEN = 32;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MOVED_FROM = 64;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MOVED_TO = 128;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_CREATE = 256;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_DELETE = 512;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_DELETE_SELF = 1024;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MOVE_SELF = 2048;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_UNMOUNT = 8192;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_Q_OVERFLOW = 16384;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_IGNORED = 32768;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_CLOSE = 24;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MOVE = 192;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ALL_EVENTS = 4095;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ONLYDIR = 16777216;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_DONT_FOLLOW = 33554432;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_MASK_ADD = 536870912;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ISDIR = 1073741824;
/**
 * @link https://php.net/manual/en/inotify.constants.php
 */
const IN_ONESHOT = 2147483648;

// End of inotify v.0.1.6
