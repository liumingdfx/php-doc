<?php

declare(strict_types=1);

namespace Swoole\Process;

/**
*<div id="class.pool" class="reference"> <h1 class="title">Pool 类</h1>  <div class="partintro"><p class="verinfo">(PECL pthreads &gt;= 2.0.0)</p>  <div class="section" id="pool.intro">   <h2 class="title">简介</h2>   <p class="para">    Pool 对象是多个 Worker 对象的容器，同时也是它们的控制器。   </p>   <p class="para">    线程池是对 Worker 功能的高层抽象，包括按照 pthreads 需要的方式来管理应用的功能。   </p>  </div>  <div class="section" id="pool.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Pool</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">protected</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.pool.php#pool.props.size">$<var class="varname">size</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.pool.php#pool.props.class">$<var class="varname">class</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.pool.php#pool.props.workers">$<var class="varname">workers</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.pool.php#pool.props.ctor">$<var class="varname">ctor</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.pool.php#pool.props.last">$<var class="varname">last</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$class</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$ctor</span><span class="initializer"> = ?</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.collect.php" class="methodname" style="color:#CC7832">collect</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type Callable" style="color:#EAB766">Callable</a></span> <span class="parameter" style="color:#3A95FF">$collector</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.resize.php" class="methodname" style="color:#CC7832">resize</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span><span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.shutdown.php" class="methodname" style="color:#CC7832">shutdown</a></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.submit.php" class="methodname" style="color:#CC7832">submit</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.threaded.php" class="type Threaded" style="color:#EAB766">Threaded</a></span> <span class="parameter" style="color:#3A95FF">$task</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/pool.submitTo.php" class="methodname" style="color:#CC7832">submitTo</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$worker</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.threaded.php" class="type Threaded" style="color:#EAB766">Threaded</a></span> <span class="parameter" style="color:#3A95FF">$task</span></span>): <span class="type" style="color:#EAB766">int</span></div>   }</div>  </div>  <div class="section" id="pool.props">   <h2 class="title">属性</h2>   <dl>         <dt id="pool.props.size"><var class="varname">size</var></dt>     <dd>      <p class="para">Pool 对象可容纳的 Worker 对象的最大数量</p>     </dd>             <dt id="pool.props.class"><var class="varname">class</var></dt>     <dd>      <p class="para">Worker 的类</p>     </dd>             <dt id="pool.props.workers"><var class="varname">workers</var></dt>     <dd>      <p class="para">指向 Worker 对象的引用</p>     </dd>             <dt id="pool.props.ctor"><var class="varname">ctor</var></dt>     <dd>      <p class="para">构造新的 Worker 对象时所需的参数</p>     </dd>             <dt id="pool.props.last"><var class="varname">last</var></dt>     <dd>      <p class="para">最后使用的 Worker 对象在池中的位置偏移量</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Pool::collect} — 回收已完成任务的引用</li><li>{@link Pool::__construct} — 创建新的 Worker 对象池</li><li>{@link Pool::resize} — 改变 Pool 对象的可容纳 Worker 对象的数量</li><li>{@link Pool::shutdown} — 停止所有的 Worker 对象</li><li>{@link Pool::submit} — 提交对象以执行</li><li>{@link Pool::submitTo} — 提交一个任务到特定的 Worker 以执行</li></ul></div>
*/
class Pool
{
    public $master_pid = -1;
    public $workers;

    public function __construct($worker_num, $ipc_type = null, $msgqueue_key = null, $enable_coroutine = null) {}

    public function __destruct() {}

    /**
     * @return mixed
     */
    public function set(array $settings) {}

    /**
     * @param mixed $event_name
     * @return mixed
     */
    public function on($event_name, callable $callback) {}

    /**
     * @param mixed|null $worker_id
     * @return mixed
     */
    public function getProcess($worker_id = null) {}

    /**
     * @param mixed $host
     * @param mixed|null $port
     * @param mixed|null $backlog
     * @return mixed
     */
    public function listen($host, $port = null, $backlog = null) {}

    /**
     * @param mixed $data
     * @return mixed
     */
    public function write($data) {}

    /**
     * @return mixed
     */
    public function detach() {}

    /**
     * @return mixed
     */
    public function start() {}

    /**
     * @return mixed
     */
    public function stop() {}

/**
*<div id="pool.shutdown" class="refentry"> <div class="refnamediv">  <h1 class="refname">Pool::shutdown</h1>  <p class="verinfo">(PECL pthreads &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Pool::shutdown</span> &mdash; <span class="dc-title">停止所有的 Worker 对象</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-pool.shutdown-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span><span class="methodname" style="color:#CC7832"><strong>Pool::shutdown</strong></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   停止此 Pool 中所有的 Worker 对象。此方法调用会进入阻塞状态，   直到所有已经提交到这个 Pool 中的任务都执行完毕。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-pool.shutdown-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-pool.shutdown-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-pool.shutdown-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 完全停止一个 Pool</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #9876AA">Task </span><span style="color: #007700">extends </span><span style="color: #9876AA">Threaded<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #9876AA">run</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #9876AA">usleep</span><span style="color: #007700">(</span><span style="color: #9876AA">500000</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #9876AA">$pool </span><span style="color: #007700">= new </span><span style="color: #9876AA">Pool</span><span style="color: #007700">(</span><span style="color: #9876AA">4</span><span style="color: #007700">);<br /><br />for (</span><span style="color: #9876AA">$i </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">$i </span><span style="color: #007700">&lt; </span><span style="color: #9876AA">10</span><span style="color: #007700">; ++</span><span style="color: #9876AA">$i</span><span style="color: #007700">) {<br />    </span><span style="color: #9876AA">$pool</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">submit</span><span style="color: #007700">(new </span><span style="color: #9876AA">Task</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #9876AA">$pool</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">shutdown</span><span style="color: #007700">(); </span><span style="color: #FF8000">// 进入阻塞状态，直到所有已经提交到 Pool 中的任务都执行完毕</span></span></span></div>    </div>   </div>  </span> </div></div>
     * @return mixed*/
    public function shutdown() {}
}
