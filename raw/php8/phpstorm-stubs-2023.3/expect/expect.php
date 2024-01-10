<?php
/**
 * Indicates that the pattern is a glob-style string pattern.
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_GLOB = 1;
/**
 * Indicates that the pattern is an exact string.
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_EXACT = 2;
/**
 * Indicates that the pattern is a regexp-style string pattern.
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_REGEXP = 3;
/**
 * Value, returned by <em>expect_expectl()</em>, when <b>EOF</b> is reached.
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_EOF = -11;
/**
 * Value, returned by <em>expect_expectl()</em> upon timeout of seconds, specified in value of <b>expect.timeout</b>
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_TIMEOUT = -2;
/**
 * Value, returned by <em>expect_expectl()</em> if no pattern have been matched.
 * @link https://www.php.net/manual/en/expect.constants.php
 */
const EXP_FULLBUFFER = -5;

/**
*<div id="function.expect-popen" class="refentry"> <div class="refnamediv">  <h1 class="refname">expect_popen</h1>  <p class="verinfo">(PECL expect &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">expect_popen</span> &mdash; <span class="dc-title">Execute command via Bourne shell, and open the PTY stream to  the process</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.expect-popen-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>expect_popen</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$command</span></span>): <span class="type" style="color:#EAB766">resource</span></div>  <p class="para rdfs-comment">   Execute command via Bourne shell, and open the PTY stream to the process.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.expect-popen-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">command</span></dt>     <dd>      <p class="para">       Command to execute.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.expect-popen-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an open PTY stream to the processes <span>stdio</span>,   <span>stdout</span>, and <span>stderr</span>.  </p>  <p class="para">   On failure this function returns <strong><span>false</span></strong>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.expect-popen-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">expect_popen()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// Login to the PHP.net CVS repository:<br /></span><span style="color: #9876AA">$stream </span><span style="color: #007700">= </span><span style="color: #9876AA">expect_popen </span><span style="color: #007700">(</span><span style="color: #DD0000">"cvs -d :pserver:anonymous@cvs.php.net:/repository login"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">sleep </span><span style="color: #007700">(</span><span style="color: #9876AA">3</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite </span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">, </span><span style="color: #DD0000">"phpfi\n"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fclose </span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.expect-popen-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link popen()} - 打开进程文件指针</span></li>   </ul>  </span> </div></div>
 * @return resource|false Returns an open PTY stream to the processes stdio, stdout, and stderr.*/
function expect_popen(string $command)
{
    unset($command);
    return false;
}

/**
*<div id="function.expect-expectl" class="refentry"> <div class="refnamediv">  <h1 class="refname">expect_expectl</h1>  <p class="verinfo">(PECL expect &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">expect_expectl</span> &mdash; <span class="dc-title">Waits until the output from a process matches one  of the patterns, a specified time period has passed, or an <abbr title="End Of File">EOF</abbr> is seen  </span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.expect-expectl-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>expect_expectl</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#3A95FF">$expect</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$cases</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$match</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   Waits until the output from a process matches one of the patterns,   a specified time period has passed, or an <abbr title="End Of File">EOF</abbr> is seen.  </p>  <p class="para">   If <span class="parameter" style="color:#3A95FF">match</span> is provided, then it is filled with the result of search.   The matched string can be found in <span class="parameter" style="color:#3A95FF">match[0]</span>.   The match substrings (according to the parentheses) in the original pattern can be found   in <span class="parameter" style="color:#3A95FF">match[1]</span>, <span class="parameter" style="color:#3A95FF">match[2]</span>, and so   on, up to <span class="parameter" style="color:#3A95FF">match[9]</span> (the limitation of libexpect).  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.expect-expectl-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">expect</span></dt>     <dd>      <p class="para">       An Expect stream, previously opened with       <span class="function">{@link expect_popen()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">cases</span></dt>     <dd>      <p class="para">       An array of expect cases. Each expect case is an indexed array,       as described in the following table:       <table class="doctable table">        <caption><strong>Expect Case Array</strong></caption>                 <thead>          <tr>           <th>Index Key</th>           <th>Value Type</th>           <th>Description</th>           <th>Is Mandatory</th>           <th>Default Value</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>0</td>           <td>string</td>           <td>pattern, that will be matched against the output from the stream</td>           <td>yes</td>           <td class="empty">&nbsp;</td>          </tr>          <tr>           <td>1</td>           <td>mixed</td>           <td>value, that will be returned by this function, if the pattern matches</td>           <td>yes</td>           <td class="empty">&nbsp;</td>          </tr>          <tr>           <td>2</td>           <td>integer</td>           <td>            pattern type, one of:            <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-glob" class="link"><strong><span>EXP_GLOB</span></strong></a>,            <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-exact" class="link"><strong><span>EXP_EXACT</span></strong></a>            or            <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-regexp" class="link"><strong><span>EXP_REGEXP</span></strong></a>           </td>           <td>no</td>           <td><a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-glob" class="link"><strong><span>EXP_GLOB</span></strong></a></td>          </tr>         </tbody>               </table>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.expect-expectl-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns value associated with the pattern that was matched.  </p>  <p class="para">   On failure this function returns:   <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-eof" class="link"><strong><span>EXP_EOF</span></strong></a>,   <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-timeout" class="link"><strong><span>EXP_TIMEOUT</span></strong></a>   or   <a href="https://www.php.net/manual/zh/expect.constants.php#constants.expect.exp-fullbuffer" class="link"><strong><span>EXP_FULLBUFFER</span></strong></a>  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.expect-expectl-changelog">  <h3 class="title">更新日志</h3>  <span>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>PECL expect 0.2.1</td>       <td>       Prior to version 0.2.1, in <span class="parameter" style="color:#3A95FF">match</span> parameter a match string was returned,       not an array of match substrings.       </td>      </tr>     </tbody>       </table>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.expect-expectl-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">expect_expectl()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// Copies file from remote host:<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">"expect.timeout"</span><span style="color: #007700">, </span><span style="color: #9876AA">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$stream </span><span style="color: #007700">= </span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"expect://scp user@remotehost:/var/log/messages /home/user/messages.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">$cases </span><span style="color: #007700">= array(<br />    </span><span style="color: #FF8000">// array(pattern, value to return if pattern matched)<br />    </span><span style="color: #007700">array(</span><span style="color: #DD0000">"password:"</span><span style="color: #007700">, </span><span style="color: #DD0000">"asked for password"</span><span style="color: #007700">),<br />    array(</span><span style="color: #DD0000">"yes/no)?"</span><span style="color: #007700">,  </span><span style="color: #DD0000">"asked for yes/no"</span><span style="color: #007700">)<br />);<br /><br />while (</span><span style="color: #9876AA">true</span><span style="color: #007700">) {<br />    switch (</span><span style="color: #9876AA">expect_expectl</span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">, </span><span style="color: #9876AA">$cases</span><span style="color: #007700">)) {<br />        case </span><span style="color: #DD0000">"asked for password"</span><span style="color: #007700">:<br />            </span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">, </span><span style="color: #DD0000">"my password\n"</span><span style="color: #007700">);<br />            break;<br />        case </span><span style="color: #DD0000">"asked for yes/no"</span><span style="color: #007700">:<br />            </span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">, </span><span style="color: #DD0000">"yes\n"</span><span style="color: #007700">);<br />            break;<br />        case </span><span style="color: #9876AA">EXP_TIMEOUT</span><span style="color: #007700">:<br />        case </span><span style="color: #9876AA">EXP_EOF</span><span style="color: #007700">:<br />            break </span><span style="color: #9876AA">2</span><span style="color: #007700">; </span><span style="color: #FF8000">// break both the switch statement and the while loop<br />        </span><span style="color: #007700">default:<br />            die(</span><span style="color: #DD0000">"Error has occurred!"</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.expect-expectl-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link expect_popen()} - Execute command via Bourne shell, and open the PTY stream to  the process</span></li>   </ul>  </span> </div></div>
 * @return int Returns value associated with the pattern that was matched.*/
function expect_expectl($expect, array $cases, array &$match = []): int
{
    unset($expect, $cases, $match);
    return 0;
}
