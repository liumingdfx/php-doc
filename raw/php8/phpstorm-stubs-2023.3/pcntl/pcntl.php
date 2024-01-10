<?php

// Start of pcntl v.
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
*<div id="function.pcntl-fork" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_fork</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_fork</span> &mdash; <span class="dc-title">在当前进程当前位置产生分叉（fork）</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-fork-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_fork</strong></span>(): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  <span class="function"><strong style="color:#CC7832">pcntl_fork()</strong></span> 函数创建子进程，这个子进程仅 PID（进程号）  和 PPID（父进程号）与其父进程不同。有关分叉在系统上工作的具体细节，请参阅系统的 fork(2) 手册页。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-fork-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-fork-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  成功时，在父进程执行线程内返回产生的子进程的 PID，在子进程执行线程内返回 0。失败时，在  父进程上下文返回 -1，不会创建子进程，并且会引发 PHP 错误。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-fork-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_fork()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /><br />$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_fork</span><span style="color: #007700">();<br />if (</span><span style="color: #9876AA">$pid </span><span style="color: #007700">== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br />     die(</span><span style="color: #DD0000">'could not fork'</span><span style="color: #007700">);<br />} else if (</span><span style="color: #9876AA">$pid</span><span style="color: #007700">) {<br />     </span><span style="color: #FF8000">// 父进程<br />     </span><span style="color: #9876AA">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #9876AA">$status</span><span style="color: #007700">); </span><span style="color: #FF8000">// 防止僵尸子进程<br /></span><span style="color: #007700">} else {<br />     </span><span style="color: #FF8000">// 子进程<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-fork-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_rfork()} - Manipulates process resources</span></li>    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li class="member"><span class="function">{@link cli_set_process_title()} - Sets the process title</span></li>   </ul>  </span> </div></div>
 * @return int On success, the PID of the child process is returned in the*/
function pcntl_fork(): int {}

/**
*<div id="function.pcntl-waitpid" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_waitpid</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_waitpid</span> &mdash; <span class="dc-title">等待或返回 fork 的子进程状态</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-waitpid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_waitpid</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$process_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">&$status</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$resource_usage</span><span class="initializer"> = []</span></span><br>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  挂起当前进程的执行直到参数 <span class="parameter" style="color:#3A95FF">process_id</span> 指定的进程号的进程退出，  或接收到一个信号要求中断当前进程或调用一个信号处理函数。  </p>  <p class="para">  如果 <span class="parameter" style="color:#3A95FF">process_id</span> 指定的子进程在此函数调用时已经退出（俗称僵尸进程），此函数  将立刻返回。关于 waitpid 更详细的规范请参见系统的 waitpid（2）手册。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-waitpid-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       参数 <span class="parameter" style="color:#3A95FF">process_id</span> 的值可以是以下之一：       <table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">process_id</span> 可选值</strong></caption>                 <tbody class="tbody">          <tr>           <td><span>&lt; -1</span></td>           <td>           等待任意进程组 ID 等于参数 <span class="parameter" style="color:#3A95FF">process_id</span> 给定值的绝对值的进程。           </td>          </tr>          <tr>           <td><span>-1</span></td>           <td>           等待任意子进程；与 wait 函数行为一致。           </td>          </tr>          <tr>           <td><span>0</span></td>           <td>           等待任意与调用进程组 ID 相同的子进程。           </td>          </tr>          <tr>           <td><span>&gt; 0</span></td>           <td>            等待进程号等于参数 <span class="parameter" style="color:#3A95FF">process_id</span> 值的子进程。           </td>          </tr>         </tbody>               </table>      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        <p class="para">       指定 <span>-1</span> 作为 <span class="parameter" style="color:#3A95FF">process_id</span> 的值等同于 <span class="function">{@link pcntl_wait()}</span>       提供（负的 <span class="parameter" style="color:#3A95FF">flags</span>）。       </p>      </p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">       <span class="function"><strong style="color:#CC7832">pcntl_waitpid()</strong></span> 将会存储状态信息到 <span class="parameter" style="color:#3A95FF">status</span>       参数上，这个通过 <span class="parameter" style="color:#3A95FF">status</span> 参数返回的状态信息可以用以下函数       <span class="function">{@link pcntl_wifexited()}</span>、       <span class="function">{@link pcntl_wifstopped()}</span>、       <span class="function">{@link pcntl_wifsignaled()}</span>、       <span class="function">{@link pcntl_wexitstatus()}</span>、       <span class="function">{@link pcntl_wtermsig()}</span> 以及       <span class="function">{@link pcntl_wstopsig()}</span> 获取其具体的值。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以是以下两个常量中 0 个或多个 <span>OR</span> 运算的结果：       <table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用的值</strong></caption>                 <tbody class="tbody">          <tr>           <td><span>WNOHANG</span></td>           <td>            如果没有子进程退出立刻返回。           </td>          </tr>          <tr>           <td><span>WUNTRACED</span></td>           <td>            子进程已经退出并且其状态未报告时返回。           </td>          </tr>         </tbody>               </table>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-waitpid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong style="color:#CC7832">pcntl_waitpid()</strong></span> 返回退出的子进程进程号，发生错误时返回 -1，如果使用   <strong><span>WNOHANG</span></strong> 并且没有可用子进程时返回 0。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-waitpid-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>    <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    <li class="member"><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>    <li class="member"><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>   </ul>  </span> </div></div>
 * @return int <b>pcntl_waitpid</b> returns the process ID of the*/
function pcntl_waitpid(
    int $process_id,
    &$status,
    int $flags = 0,
    #[PhpStormStubsElementAvailable(from: '7.0')] &$resource_usage
= []
): int {}

/**
*<div id="function.pcntl-wait" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wait</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wait</span> &mdash; <span class="dc-title">等待或返回 fork 的子进程状态</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wait</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">&$status</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$resource_usage</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   wait 函数挂起当前进程的执行直到一个子进程退出或接收到一个信号要求中断当前进程或调用一个信号处理函数。如果一个子进程在调用此函数时已经退出（俗称僵尸进程），此函数立刻返回。子进程使用的所有系统资源将被释放。关于 wait 在您系统上工作的详细规范请查看您系统的 wait（2）手册。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <p class="para">    这个函数等同于以 <span>-1</span> 作为参数 <span class="parameter" style="color:#3A95FF">process_id</span>    的值并且没有 <span class="parameter" style="color:#3A95FF">flags</span> 参数来调用 <span class="function">{@link pcntl_waitpid()}</span>    函数。   </p>  </p></blockquote> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wait-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">       <span class="function"><strong style="color:#CC7832">pcntl_wait()</strong></span> 将会存储状态信息到 <span class="parameter" style="color:#3A95FF">status</span>       参数上，这个通过 <span class="parameter" style="color:#3A95FF">status</span> 参数返回的状态信息可以用以下函数       <span class="function">{@link pcntl_wifexited()}</span>、       <span class="function">{@link pcntl_wifstopped()}</span>、       <span class="function">{@link pcntl_wifsignaled()}</span>、       <span class="function">{@link pcntl_wexitstatus()}</span>、       <span class="function">{@link pcntl_wtermsig()}</span> 以及       <span class="function">{@link pcntl_wstopsig()}</span> 获取其具体的值。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">      如果操作系统（多数 BSD 类系统）允许使用 wait3，可以提供可选的 <span class="parameter" style="color:#3A95FF">flags</span>      参数。如果这个参数没有提供，wait 将会被用作系统调用。如果 wait3 不可用，提供参数      <span class="parameter" style="color:#3A95FF">flags</span> 不会有任何效果。<span class="parameter" style="color:#3A95FF">flags</span> 的值可以是以下两个常量中      0 个或多个 <span>OR</span> 运算的结果：       <table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用值</strong></caption>                 <tbody class="tbody">          <tr>           <td><span>WNOHANG</span></td>           <td>            如果没有子进程退出立刻返回。           </td>          </tr>          <tr>           <td><span>WUNTRACED</span></td>           <td>           子进程已经退出并且其状态未报告时返回。           </td>          </tr>         </tbody>               </table>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wait-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong style="color:#CC7832">pcntl_wait()</strong></span> 返回退出的子进程进程号，发生错误时返回 -1，如果提供了 WNOHANG 作为 option（wait3 可用的系统）并且没有可用子进程时返回 0。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wait-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>    <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    <li class="member"><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>    <li class="member"><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>  </span> </div></div>
 * @return int <b>pcntl_wait</b> returns the process ID of the*/
function pcntl_wait(
    &$status,
    int $flags = 0,
    #[PhpStormStubsElementAvailable(from: '7.0')] &$resource_usage
= []
): int {}

/**
*<div id="function.pcntl-signal" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal</span> &mdash; <span class="dc-title">安装信号处理程序</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-signal-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$signal</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$handler</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$restart_syscalls</span><span class="initializer"> = <strong><span>true</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_signal()</strong></span> 函数为 <span class="parameter" style="color:#3A95FF">signal</span> 指定的信号安装新的信号处理程序或替换当前信号处理程序。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-signal-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>     <dd>      <p class="para">       信号编号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">handler</span></dt>     <dd>      <p class="para">       信号处理程序。要么是 <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>，将调用它来处理信号，要么是全局常量 <strong><span>SIG_IGN</span></strong> 或       <strong><span>SIG_DFL</span></strong>，将分别用于忽略信号或恢复默认信号处理程序。      </p>      <p class="para">       如果指定为 <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>，必须实现以下签名：      </p>      <p class="para">       <div class="methodsynopsis dc-description">        <span class="methodname" style="color:#CC7832"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$signo</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$siginfo</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>       <dl>                 <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>         <dd>          <span class="simpara">           正在处理的信号。          </span>         </dd>                         <dt><span class="parameter" style="color:#3A95FF">siginfo</span></dt>         <dd>          <span class="simpara">           如果操作系统支持 siginfo_t 结构体，这将是依赖于信号的信号信息数组。          </span>         </dd>               </dl>      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        <p class="para">        请注意，当处理程序设置为对象方法时，该对象的引用计数会增加，这会使其持续存在，直到将处理程序更改为其他内容或脚本结束为止。       </p>      </p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">restart_syscalls</span></dt>     <dd>      <p class="para">      指定当信号到达时系统调用重启是否可用。（译注：经查资料，此参数意为系统调用被信号打断时，系统调用是否从      开始处重新开始，但根据 http://bugs.php.net/bug.php?id=52121，此参数存在bug无效。）      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.pcntl-signal-changelog">  <h3 class="title">更新日志</h3>  <span>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.1.0</td>       <td>        从 PHP 7.1.0 开始，处理程序 callback 指定为第二个参数，其中包含特定信号的 siginfo。仅当操作系统具有        siginfo_t 结构体时才提供此数据。如果操作系统未实现 siginfo_t，则提供 NULL。       </td>      </tr>     </tbody>       </table>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-signal-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_signal()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// 需要使用 ticks<br /></span><span style="color: #007700">declare(</span><span style="color: #9876AA">ticks </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// 信号处理函数<br /></span><span style="color: #007700">function </span><span style="color: #9876AA">sig_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)<br />{<br /><br />     switch (</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {<br />         case </span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">:<br />             </span><span style="color: #FF8000">// 处理终止任务<br />             </span><span style="color: #007700">exit;<br />             break;<br />         case </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">:<br />             </span><span style="color: #FF8000">// 处理重启任务<br />             </span><span style="color: #007700">break;<br />         case </span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">:<br />             echo </span><span style="color: #DD0000">"Caught SIGUSR1...\n"</span><span style="color: #007700">;<br />             break;<br />         default:<br />             </span><span style="color: #FF8000">// 处理所有其它信号<br />     </span><span style="color: #007700">}<br /><br />}<br /><br />echo </span><span style="color: #DD0000">"Installing signal handler...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// 安装信号处理程序<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,  </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// 或使用对象<br />// pcntl_signal(SIGUSR1, array($obj, "do_something");<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Generating signal SIGUSR1 to self...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// 向当前进程 ID 发送 SIGUSR1 信号<br />// posix_* 函数需要 posix 扩展<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Done\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.pcntl-signal-notes">  <h3 class="title">注释</h3>  <p class="para">   <span class="function"><strong style="color:#CC7832">pcntl_signal()</strong></span> 不堆叠信号处理程序，而是替换。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-signal-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_signal(int $signal, $handler, bool $restart_syscalls = true): bool {}

/**
*<div id="function.pcntl-signal-dispatch" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal_dispatch</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal_dispatch</span> &mdash; <span class="dc-title">调用等待信号的处理程序</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-signal-dispatch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal_dispatch</strong></span>(): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_signal_dispatch()</strong></span> 函数调用每个等待信号通过 <span class="function">{@link pcntl_signal()}</span>   安装的处理程序。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-signal-dispatch-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-dispatch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-signal-dispatch-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_signal_dispatch()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"安装信号处理程序...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,  function(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {<br />     echo </span><span style="color: #DD0000">"信号处理程序被调用\n"</span><span style="color: #007700">;<br />});<br /><br />echo </span><span style="color: #DD0000">"为自己生成SIGHUP信号...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"分发...\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_signal_dispatch</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"完成\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>安装信号处理程序...<br>为自己生成SIGHUP信号...<br>分发...<br>信号处理程序被调用<br>完成<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-signal-dispatch-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>    <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_signal_dispatch(): bool {}

/**
*<div id="function.pcntl-wifexited" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifexited</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifexited</span> &mdash; <span class="dc-title">检查状态代码是否代表一个正常的退出</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wifexited-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifexited</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   检查子进程状态代码是否代表正常退出。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wifexited-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifexited-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   当子进程状态代码代表正常退出时返回 <strong><span>true</span></strong>，其他情况返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wifexited-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> if the child status code represents a normal exit, <b>FALSE</b>*/
function pcntl_wifexited(int $status): bool {}

/**
*<div id="function.pcntl-wifstopped" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifstopped</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifstopped</span> &mdash; <span class="dc-title">检查子进程当前是否已经停止</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wifstopped-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifstopped</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   仅查子进程当前是否停止；此函数只有作用于使用了 <span>WUNTRACED</span> 作为   option 的 <span class="function">{@link pcntl_waitpid()}</span> 函数调用产生的 status 时才有效。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wifstopped-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifstopped-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果子进程当前是停止的返回 <strong><span>true</span></strong>，其他情况返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wifstopped-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> if the child process which caused the return is*/
function pcntl_wifstopped(int $status): bool {}

/**
*<div id="function.pcntl-wifsignaled" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifsignaled</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifsignaled</span> &mdash; <span class="dc-title">检查子进程状态码是否代表由于某个信号而中断</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wifsignaled-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifsignaled</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   检查子进程是否是由于某个未捕获的信号退出的。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wifsignaled-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifsignaled-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果子进程是由于某个未捕获的信号退出的返回 <strong><span>true</span></strong>，其他情况返回 <strong><span>false</span></strong> 。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wifsignaled-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> if the child process exited because of a signal which was*/
function pcntl_wifsignaled(int $status): bool {}

/**
*<div id="function.pcntl-wexitstatus" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wexitstatus</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wexitstatus</span> &mdash; <span class="dc-title">返回一个中断的子进程的返回代码</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wexitstatus-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wexitstatus</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   返回一个中断的子进程的返回代码。这个函数仅在函数 <span class="function">{@link pcntl_wifexited()}</span> 返回   <strong><span>true</span></strong> 时有效。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wexitstatus-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wexitstatus-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回子进程返回代码。如果操作系统不支持该功能，将返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wexitstatus-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>   </ul>  </span> </div></div>
 * @return int|false the return code, as an integer.*/
function pcntl_wexitstatus(int $status): int|false {}

/**
 * @param int $status
 * @return bool
 */
#[Pure]
function pcntl_wifcontinued(int $status): bool {}

/**
*<div id="function.pcntl-wtermsig" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wtermsig</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wtermsig</span> &mdash; <span class="dc-title">返回导致子进程中断的信号</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wtermsig-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wtermsig</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   返回导致子进程中断的信号编号。这个函数仅在 <span class="function">{@link pcntl_wifsignaled()}</span> 返回 <strong><span>true</span></strong> 时有效。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wtermsig-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wtermsig-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回信号编号。如果操作系统不支持该功能，将返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wtermsig-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li class="member"><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>   </ul>  </span> </div></div>
 * @return int|false the signal number, as an integer.*/
function pcntl_wtermsig(int $status): int|false {}

/**
*<div id="function.pcntl-wstopsig" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wstopsig</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wstopsig</span> &mdash; <span class="dc-title">返回导致子进程停止的信号</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-wstopsig-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wstopsig</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   返回导致子进程停止的信号编号。这个函数仅在 <span class="function">{@link pcntl_wifstopped()}</span> 返回 <strong><span>true</span></strong> 时有效。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-wstopsig-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-wstopsig-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回信号编号。如果操作系统不支持该功能，将返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-wstopsig-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li class="member"><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>   </ul>  </span> </div></div>
 * @return int|false the signal number.*/
function pcntl_wstopsig(int $status): int|false {}

/**
*<div id="function.pcntl-exec" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_exec</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_exec</span> &mdash; <span class="dc-title">在当前进程空间执行指定程序</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-exec-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_exec</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$args</span><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$env_vars</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   以给定参数执行程序。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-exec-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">path</span> 必须时可执行二进制文件路径或一个在文件第一行指定了       一个可执行文件路径标头的脚本（比如文件第一行是 #!/usr/local/bin/perl 的 perl 脚本）。       更多的信息请查看您系统的 execve（2）手册。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">args</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">args</span> 是一个要传递给程序的参数的字符串数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">env_vars</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">env_vars</span> 是一个要传递给程序作为环境变量的字符串数组。这个数组是       key =&gt; value 格式的，key 代表要传递的环境变量的名称，value 代表该环境变量值。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-exec-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return bool <b>FALSE</b> on error and does not return on success.*/
function pcntl_exec(string $path, array $args = [], array $env_vars = []): bool {}

/**
*<div id="function.pcntl-alarm" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_alarm</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_alarm</span> &mdash; <span class="dc-title">为进程设置 alarm 闹钟信号</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-alarm-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_alarm</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$seconds</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   创建计时器，在指定的秒数后向进程发送 <strong><span>SIGALRM</span></strong> 信号。每次对   <span class="function"><strong style="color:#CC7832">pcntl_alarm()</strong></span> 的调用都会取消之前设置的 alarm 信号。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-alarm-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">seconds</span></dt>     <dd>      <p class="para">       等待的秒数。如果 <span class="parameter" style="color:#3A95FF">seconds</span> 设置为 0,将不会创建 alarm 信号。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-alarm-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  返回上次 alarm 调度（离 alarm 信号发送）剩余的秒数，或者之前没有 alarm 调度（译注：或者之前调度已完成）  时返回 <span>0</span>。  </p> </div></div>
 * @return int the time in seconds that any previously scheduled alarm had*/
function pcntl_alarm(int $seconds): int {}

/**
*<div id="function.pcntl-get-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_get_last_error</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_get_last_error</span> &mdash; <span class="dc-title">Retrieve the error number set by the last pcntl function which failed</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-get-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_get_last_error</strong></span>(): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-get-last-error-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-get-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns error code.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-get-last-error-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li class="member"><span class="function">{@link pcntl_strerror()} - Retrieve the system error message associated with the given errno</span></li>  </ul> </div></div>
 * @return int error code.*/
function pcntl_get_last_error(): int {}

/**
*<div id="function.pcntl-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_errno</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_errno</span> &mdash; <span class="dc-title">别名 <span class="function">{@link pcntl_get_last_error()}</span></span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-errno-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link pcntl_get_last_error()}</span>  </p> </div></div>
 * @return int error code.*/
function pcntl_errno(): int {}

/**
*<div id="function.pcntl-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_strerror</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_strerror</span> &mdash; <span class="dc-title">Retrieve the system error message associated with the given errno</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$error_code</span></span>): <span class="type" style="color:#EAB766">string</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>    <dd>     <span>           </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns error description.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-strerror-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li class="member"><span class="function">{@link pcntl_get_last_error()} - Retrieve the error number set by the last pcntl function which failed</span></li>  </ul> </div></div>
 * @return string|false error description on success or <b>FALSE</b> on failure.*/
function pcntl_strerror(int $error_code): false|string {}

/**
*<div id="function.pcntl-getpriority" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_getpriority</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_getpriority</span> &mdash; <span class="dc-title">获取任意进程的优先级</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-getpriority-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_getpriority</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$process_id</span><span class="initializer"> = <strong><span>null</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span>PRIO_PROCESS</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_getpriority()</strong></span> 获取进程号为   <span class="parameter" style="color:#3A95FF">process_id</span> 的进程的优先级。由于不同的系统类型以及内核版本下   优先级可能不同，因此请参考系统的 getpriority（2）手册以获取详细的规范。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-getpriority-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span>null</span></strong>，默认使用当前进程的进程号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <strong><span>PRIO_PGRP</span></strong>（译注：获取进程组优先级）、<strong><span>PRIO_USER</span></strong>（译注：获取用户进程优先级）、<strong><span>PRIO_PROCESS（译注：默认值;获取进程优先级）</span></strong>、<strong><span>PRIO_DARWIN_BG</span></strong>       或 <strong><span>PRIO_DARWIN_THREAD</span></strong> 之一。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-getpriority-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong style="color:#CC7832">pcntl_getpriority()</strong></span> 返回进程的优先级或在错误时返回 <strong><span>false</span></strong>。值越小代表优先级越高。  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span>false</span></strong>，但也可能返回等同于 <strong><span>false</span></strong> 的非布尔值。请阅读 <a href="https://www.php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://www.php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.pcntl-getpriority-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">process_id</span> 现在可以为 null。      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-getpriority-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_setpriority()} - 修改任意进程的优先级</span></li>   </ul>  </span> </div></div>
 * @return int|false <b>pcntl_getpriority</b> returns the priority of the process*/
function pcntl_getpriority(?int $process_id, int $mode = PRIO_PROCESS): int|false {}

/**
*<div id="function.pcntl-setpriority" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_setpriority</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_setpriority</span> &mdash; <span class="dc-title">修改任意进程的优先级</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-setpriority-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_setpriority</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$priority</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$process_id</span><span class="initializer"> = <strong><span>null</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span>PRIO_PROCESS</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_setpriority()</strong></span> 设置进程号为   <span class="parameter" style="color:#3A95FF">process_id</span> 的进程的优先级。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-setpriority-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">priority</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">priority</span> 通常时 -20 至 20 这个范围内的值。默认优先级是 0,值越小代表       优先级越高。由于不同的系统类型以及内核版本下优先级可能不同，因此请参考系统的 setpriority（2）       手册以获取详细的规范。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span>null</span></strong>，默认是当前进程的进程号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <strong><span>PRIO_PGRP</span></strong>（译注：获取进程组优先级）、<strong><span>PRIO_USER</span></strong>（译注：获取用户进程优先级）或 <strong><span>PRIO_PROCESS（译注：默认值;获取进程优先级）</span></strong>、<strong><span>PRIO_DARWIN_BG</span></strong>       或 <strong><span>PRIO_DARWIN_THREAD</span></strong> 之一。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-setpriority-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.pcntl-setpriority-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">process_id</span> 可以为 null。      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-setpriority-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_getpriority()} - 获取任意进程的优先级</span></li>    <li class="member"><span class="function"><strong style="color:#CC7832">pcntl_setpriority()</strong></span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_setpriority(int $priority, ?int $process_id, int $mode = PRIO_PROCESS): bool {}

/**
*<div id="function.pcntl-sigprocmask" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigprocmask</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigprocmask</span> &mdash; <span class="dc-title">设置或检索阻塞信号</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-sigprocmask-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigprocmask</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$signals</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$old_signals</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_sigprocmask()</strong></span> 函数用来增加，删除或设置阻塞信号，具体行为依赖于参数 <span class="parameter" style="color:#3A95FF">mode</span>。   </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-sigprocmask-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       设置 <span class="function"><strong style="color:#CC7832">pcntl_sigprocmask()</strong></span> 函数的行为。可选值:        <ul class="simplelist">        <li class="member"><strong><span>SIG_BLOCK</span></strong>: 把信号加入到当前阻塞信号中。</li>        <li class="member"><strong><span>SIG_UNBLOCK</span></strong>: 从当前阻塞信号中移出信号。</li>        <li class="member"><strong><span>SIG_SETMASK</span></strong>: 用给定的信号列表替换当前阻塞信号列表。</li>       </ul>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       信号列表。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">old_signals</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">old_signals</span> 参数设置为数组，包含先前阻塞的信号列表。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigprocmask-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-sigprocmask-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_sigprocmask()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$oldset </span><span style="color: #007700">= array();<br /></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_UNBLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">), </span><span style="color: #9876AA">$oldset</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-sigprocmask-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>    <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>  </span> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function pcntl_sigprocmask(int $mode, array $signals, &$old_signals): bool {}

/**
*<div id="function.pcntl-sigwaitinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigwaitinfo</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigwaitinfo</span> &mdash; <span class="dc-title">等待信号</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-sigwaitinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigwaitinfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$signals</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$info</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_sigwaitinfo()</strong></span> 函数暂停调用脚本的执行直到接收到 <span class="parameter" style="color:#3A95FF">signals</span>   参数中列出的某个信号。只要其中的一个信号已经在等待状态（比如：通过 <span class="function">{@link pcntl_sigprocmask()}</span>   函数阻塞），<span class="function"><strong style="color:#CC7832">pcntl_sigwaitinfo()</strong></span> 就回立刻返回。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-sigwaitinfo-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       要等待的信号数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">info</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">info</span> 参数设置为数组，包含信号信息。      </p>      <p class="para">       以下元素会为所有信号设置：       <ul class="simplelist">        <li class="member">signo：信号编号</li>        <li class="member">errno：错误编号</li>        <li class="member">code：信号代码</li>       </ul>      </p>      <p class="para">       下面元素可能会为 <strong><span>SIGCHLD</span></strong> 信号设置：       <ul class="simplelist">        <li class="member">status：退出的值或信号</li>        <li class="member">utime：用户消耗的时间</li>        <li class="member">stime：系统（内核）消耗的时间</li>        <li class="member">pid：发送进程ID</li>        <li class="member">uid：发送进程的实际用户ID</li>       </ul>      </p>      <p class="para">       信号 <strong><span>SIGILL</span></strong>,       <strong><span>SIGFPE</span></strong>, <strong><span>SIGSEGV</span></strong> 和       <strong><span>SIGBUS</span></strong> 可能会被设置的元素:       <ul class="simplelist">        <li class="member">addr：发生故障的内存位置</li>       </ul>      </p>      <p class="para">       可能会为 <strong><span>SIGPOLL</span></strong>       信号设置的元素：       <ul class="simplelist">        <li class="member">band：Band event</li>        <li class="member">fd：文件描述符</li>       </ul>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigwaitinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回信号编号， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-sigwaitinfo-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_sigwaitinfo()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Blocking SIGHUP signal\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #DD0000">"Sending SIGHUP to self\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Waiting for signals\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$info </span><span style="color: #007700">= array();<br /></span><span style="color: #9876AA">pcntl_sigwaitinfo</span><span style="color: #007700">(array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">), </span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-sigwaitinfo-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li class="member"><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>  </span> </div></div>
 * @return int|false On success, <b>pcntl_sigwaitinfo</b> returns a signal number.*/
function pcntl_sigwaitinfo(array $signals, &$info = []): int|false {}

/**
*<div id="function.pcntl-sigtimedwait" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigtimedwait</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigtimedwait</span> &mdash; <span class="dc-title">带超时机制的信号等待</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-sigtimedwait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigtimedwait</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$signals</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$info</span><span class="initializer"> = []</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$seconds</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$nanoseconds</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_sigtimedwait()</strong></span> 函数实际上与 <span class="function">{@link pcntl_sigwaitinfo()}</span>   的行为一致，不同在于它多了两个增强参数 <span class="parameter" style="color:#3A95FF">seconds</span> 和   <span class="parameter" style="color:#3A95FF">nanoseconds</span>，这使得脚本等待的事件有了一个时间的上限。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-sigtimedwait-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       要等待的信号列表数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">info</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">info</span> 设置为数组，包含信号的信息。参见       <span class="function">{@link pcntl_sigwaitinfo()}</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">seconds</span></dt>     <dd>      <p class="para">       超时秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">nanoseconds</span></dt>     <dd>      <p class="para">       超时纳秒数。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigtimedwait-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时 <span class="function"><strong style="color:#CC7832">pcntl_sigtimedwait()</strong></span> 返回信号编号， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-sigtimedwait-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li class="member"><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>   </ul>  </span> </div></div>
 * @return int|false On success, <b>pcntl_sigtimedwait</b> returns a signal number.*/
function pcntl_sigtimedwait(array $signals, &$info = [], int $seconds = 0, int $nanoseconds = 0): int|false {}

/**
*<div id="function.pcntl-async-signals" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_async_signals</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_async_signals</span> &mdash; <span class="dc-title">Enable/disable asynchronous signal handling or return the old setting</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-async-signals-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_async_signals</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">bool</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$enable</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   If the <span class="parameter" style="color:#3A95FF">enable</span> parameter is <strong><span>null</span></strong>,   <span class="function"><strong style="color:#CC7832">pcntl_async_signals()</strong></span> returns whether asynchronous signal   handling is enabled. Otherwise, asynchronous signal handling is enabled or   disabled.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-async-signals-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">enable</span></dt>    <dd>     <span>      Whether asynchronous signal handling should be enabled.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-async-signals-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   When used as getter (<span class="parameter" style="color:#3A95FF">enable</span> parameter is <strong><span>null</span></strong>) it returns   whether asynchronous signal handling is enabled. When used as setter (<span class="parameter" style="color:#3A95FF">enable</span>   parameter is not <strong><span>null</span></strong>), it returns whether asynchronous signal   handling was enabled <em>before</em> the function call.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.pcntl-async-signals-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">enable</span> is nullable now.      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-async-signals-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li class="member"><a href="https://www.php.net/manual/zh/control-structures.declare.php" class="link">declare</a></li>  </ul> </div></div>
 * @return bool*/
function pcntl_async_signals(
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] ?bool $enable,
    #[PhpStormStubsElementAvailable(from: '8.0')] ?bool $enable = null
): bool {}

/**
*<div id="function.pcntl-signal-get-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal_get_handler</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal_get_handler</span> &mdash; <span class="dc-title">Get the current handler for specified signal</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-signal-get-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal_get_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$signal</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>|<span class="type" style="color:#EAB766">int</span></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong style="color:#CC7832">pcntl_signal_get_handler()</strong></span> function will get the current handler for the specified <span class="parameter" style="color:#3A95FF">signal</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-signal-get-handler-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>    <dd>     <span>      The signal number.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-get-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   This function may return an integer value that refers to <strong><span>SIG_DFL</span></strong> or <strong><span>SIG_IGN</span></strong>.   If a custom handler has been set, that <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> is returned.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.pcntl-signal-get-handler-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>7.1.0</td>      <td>       <span class="function"><strong style="color:#CC7832">pcntl_signal_get_handler()</strong></span> has been added.      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.pcntl-signal-get-handler-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">pcntl_signal_get_handler()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(0)<br /><br /></span><span style="color: #007700">function </span><span style="color: #9876AA">pcntl_test</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {}<br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #DD0000">'pcntl_test'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: string(10) "pcntl_test"<br /><br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #9876AA">SIG_DFL</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(0)<br /><br /></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #9876AA">SIG_IGN</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(1)<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-signal-get-handler-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li class="member"><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>  </ul> </div></div>
 * @return bool|resource*/
function pcntl_signal_get_handler(int $signal) {}

/**
*<div id="function.pcntl-unshare" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_unshare</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_unshare</span> &mdash; <span class="dc-title">Dissociates parts of the process execution context</span></p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.pcntl-unshare-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_unshare</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$flags</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   <span class="function"><strong style="color:#CC7832">pcntl_unshare()</strong></span> allows a process to disassociate parts of its execution context that are   currently being shared with other processes.   The main use of <span class="function"><strong style="color:#CC7832">pcntl_unshare()</strong></span> is to allow a process to control   its shared execution context without creating a new process.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.pcntl-unshare-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">flags</span> parameter is a bitmask that specifies which parts of the execution context should be unshared.       This parameter is specified by ORing together zero or more of the <span>CLONE_*</span> constants:       <ul class="simplelist">        <li class="member"><strong><span>CLONE_NEWNS</span></strong></li>        <li class="member"><strong><span>CLONE_NEWIPC</span></strong></li>        <li class="member"><strong><span>CLONE_NEWUTS</span></strong></li>        <li class="member"><strong><span>CLONE_NEWNET</span></strong></li>        <li class="member"><strong><span>CLONE_NEWPID</span></strong></li>        <li class="member"><strong><span>CLONE_NEWUSER</span></strong></li>        <li class="member"><strong><span>CLONE_NEWCGROUP</span></strong></li>       </ul>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.pcntl-unshare-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>0</span> on success, <span>-1</span> otherwise.   On failure it sets an error code, that can be retrieved with <span class="function">{@link pcntl_get_last_error()}</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.pcntl-unshare-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><a href="https://www.php.net/manual/zh/pcntl.constants.php#pcntl.constants.clone" class="link">PCNTL Constants</a></li>    <li class="member"><span class="function">{@link pcntl_get_last_error()} - Retrieve the error number set by the last pcntl function which failed</span></li>   </ul>  </span> </div></div>
 * @return bool*/
function pcntl_unshare(int $flags): bool {}

define('WNOHANG', 1);
define('WUNTRACED', 2);
define('WCONTINUED', 8);
define('SIG_IGN', 1);
define('SIG_DFL', 0);
define('SIG_ERR', -1);
define('SIGHUP', 1);
define('SIGINT', 2);
define('SIGQUIT', 3);
define('SIGILL', 4);
define('SIGTRAP', 5);
define('SIGABRT', 6);
define('SIGIOT', 6);
define('SIGBUS', 7);
define('SIGFPE', 8);
define('SIGKILL', 9);
define('SIGUSR1', 10);
define('SIGSEGV', 11);
define('SIGUSR2', 12);
define('SIGPIPE', 13);
define('SIGALRM', 14);
define('SIGTERM', 15);
define('SIGSTKFLT', 16);
define('SIGCLD', 17);
define('SIGCHLD', 17);
define('SIGCONT', 18);
define('SIGSTOP', 19);
define('SIGTSTP', 20);
define('SIGTTIN', 21);
define('SIGTTOU', 22);
define('SIGURG', 23);
define('SIGXCPU', 24);
define('SIGXFSZ', 25);
define('SIGVTALRM', 26);
define('SIGPROF', 27);
define('SIGWINCH', 28);
define('SIGPOLL', 29);
define('SIGIO', 29);
define('SIGPWR', 30);
define('SIGSYS', 31);
define('SIGBABY', 31);
define('PRIO_PGRP', 1);
define('PRIO_USER', 2);
define('PRIO_PROCESS', 0);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SIG_BLOCK', 0);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SIG_UNBLOCK', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SIG_SETMASK', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SIGRTMIN', 35);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SIGRTMAX', 64);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_USER', 0);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_KERNEL', 128);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_QUEUE', -1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_TIMER', -2);
define('SI_MESGQ', -3);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_ASYNCIO', -4);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_SIGIO', -5);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SI_TKILL', -6);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_EXITED', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_KILLED', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_DUMPED', 3);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_TRAPPED', 4);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_STOPPED', 5);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('CLD_CONTINUED', 6);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('TRAP_BRKPT', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('TRAP_TRACE', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_IN', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_OUT', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_MSG', 3);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_ERR', 4);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_PRI', 5);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('POLL_HUP', 6);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_ILLOPC', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_ILLOPN', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_ILLADR', 3);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_ILLTRP', 4);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_PRVOPC', 5);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_PRVREG', 6);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_COPROC', 7);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('ILL_BADSTK', 8);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_INTDIV', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_INTOVF', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTDIV', 3);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTOVF', 4);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTUND', 5);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTRES', 6);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTINV', 7);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('FPE_FLTSUB', 8);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SEGV_MAPERR', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('SEGV_ACCERR', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('BUS_ADRALN', 1);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('BUS_ADRERR', 2);

/**
 * @link https://php.net/manual/en/pcntl.constants.php
 */
define('BUS_OBJERR', 3);
define('PCNTL_EINTR', 4);
define('PCNTL_ECHILD', 10);
define('PCNTL_EINVAL', 22);
define('PCNTL_EAGAIN', 11);
define('PCNTL_ESRCH', 3);
define('PCNTL_EACCES', 13);
define('PCNTL_EPERM', 1);
define('PCNTL_ENOMEM', 12);
define('PCNTL_E2BIG', 7);
define('PCNTL_EFAULT', 14);
define('PCNTL_EIO', 5);
define('PCNTL_EISDIR', 21);
define('PCNTL_ELIBBAD', 80);
define('PCNTL_ELOOP', 40);
define('PCNTL_EMFILE', 24);
define('PCNTL_ENAMETOOLONG', 36);
define('PCNTL_ENFILE', 23);
define('PCNTL_ENOENT', 2);
define('PCNTL_ENOEXEC', 8);
define('PCNTL_ENOTDIR', 20);
define('PCNTL_ETXTBSY', 26);

/**
 * @since 7.4
 */
define('PCNTL_ENOSPC', 28);

/**
 * @since 7.4
 */
define('PCNTL_EUSERS', 87);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWNS', 131072);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWIPC', 134217728);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWUTS', 67108864);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWNET', 1073741824);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWPID', 536870912);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWUSER', 268435456);

/**
*      从 PHP 7.4.0 起可用     
*/
define('CLONE_NEWCGROUP', 33554432);

// End of pcntl v.
