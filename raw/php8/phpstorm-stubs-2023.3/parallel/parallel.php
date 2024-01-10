<?php

namespace parallel;

use Closure;

/**
 * Shall use the provided file to bootstrap all runtimes created for automatic scheduling via @see run().
 *
 * @param string $file
 *
 * @throws Runtime\Error\Bootstrap if previously called for this process.
 * @throws Runtime\Error\Bootstrap if called after @see run().
 */
function bootstrap(string $file): void {}

/**
 * @see Runtime::run() for more details
 * @link https://www.php.net/manual/en/parallel.run
 * @param Closure $task
 * @param array   $argv
 *
 * ### Automatic Scheduling
 * ---------------------------------------------------------------------------------------------------------------------
 * If a \parallel\Runtime internally created and cached by a previous call to parallel\run() is idle, it will be used
 *     to execute the task. If no \parallel\Runtime is idle parallel will create and cache a \parallel\Runtime.
 *
 * Note: \parallel\Runtime objects created by the programmer are not used for automatic scheduling.
 *
 * @return Future|null
 *
 * @throws Runtime\Error\Closed if \parallel\Runtime was closed.
 * @throws Runtime\Error\IllegalFunction if task is a closure created from an internal function.
 * @throws Runtime\Error\IllegalInstruction if task contains illegal instructions.
 * @throws Runtime\Error\IllegalParameter if task accepts or argv contains illegal variables.
 * @throws Runtime\Error\IllegalReturn if task returns illegally.
 */
function run(Closure $task, array $argv = null): ?Future {}

/**
*<div id="function.count" class="refentry">   <div class="refnamediv">    <h1 class="refname">count</h1>    <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">count</span> &mdash; <span class="dc-title">统计数组、<span class="interfacename"><a href="https://www.php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span> 对象中所有元素的数量</span></p>   </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.countable.php" class="type Countable" style="color:#EAB766">Countable</a></span>|<span class="type" style="color:#EAB766">array</span></span> <span class="parameter" style="color:#3A95FF">$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span>COUNT_NORMAL</span></strong></span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   用于数组时，统计数组中元素的数量；用于实现了 <span class="interfacename"><a href="https://www.php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span>   接口的对象时，返回 <span class="methodname" style="color:#CC7832">{@link Countable::count()}</span> 方法的返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.count-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       数组或者 <span class="interfacename"><a href="https://www.php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span>  对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       如果可选的 <span class="parameter" style="color:#3A95FF">mode</span> 参数设为     <strong><span>COUNT_RECURSIVE</span></strong>（或 1），<span class="function"><strong style="color:#CC7832">count()</strong></span>     将递归地对数组计数。对计算多维数组的所有单元尤其有用。      </p>      <div class="caution"><strong class="caution">警告</strong>       <p class="para">        <span class="function"><strong style="color:#CC7832">count()</strong></span> 能检测递归来避免无限循环，但每次出现时会产生 <strong><span>E_WARNING</span></strong> 错误        （如果 array 不止一次包含了自身）并返回大于预期的统计数字。       </p>      </div>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <span class="parameter" style="color:#3A95FF">value</span> 中的元素的数量。在 PHP 8.0.0   之前，如果参数既不是数组也不是实现了 <span>Countable</span> 接口的对象，将返回   <span>1</span>。当 <span class="parameter" style="color:#3A95FF">value</span> 为 <strong><span>null</span></strong> 时返回    <span>0</span>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.count-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       当 <span class="parameter" style="color:#3A95FF">value</span> 参数传入了无效的 countable 类型，       <span class="function"><strong style="color:#CC7832">count()</strong></span> 现在会抛出 <span class="classname"><a href="https://www.php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span>。      </td>     </tr>     <tr>      <td>7.2.0</td>      <td>       当 <span class="parameter" style="color:#3A95FF">value</span> 参数传入了无效的 countable 类型，       <span class="function"><strong style="color:#CC7832">count()</strong></span> 现在会产生警告。      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.count-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$a</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">] = </span><span style="color: #9876AA">1</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">] = </span><span style="color: #9876AA">3</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$a</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">] = </span><span style="color: #9876AA">5</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$a</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]  = </span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]  = </span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">] = </span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;">     <div class="cdata"><span>int(3)<br>int(3)<br></span></div>    </div>   </div>  </span>  <p class="para">   <div class="example" id="">    <p><strong>示例 #2 <span class="function"><strong style="color:#CC7832">count()</strong></span> 非 Countable|array 的例子 （这是个反例，请勿模仿）</strong></p>    <div class="example-contents">     <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$b</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]  = </span><span style="color: #9876AA">7</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">5</span><span style="color: #007700">]  = </span><span style="color: #9876AA">9</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">$b</span><span style="color: #007700">[</span><span style="color: #9876AA">10</span><span style="color: #007700">] = </span><span style="color: #9876AA">11</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$b</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">false</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>int(3)<br>int(0)<br>int(1)<br></span></div>    </div>    <div class="example-contents"><p>Output of the above example in PHP 7.2:</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;">     <div class="cdata"><span>int(3)<br><br>Warning: count(): Parameter must be an array or an object that implements Countable in … on line 12<br>int(0)<br><br>Warning: count(): Parameter must be an array or an object that implements Countable in … on line 14<br>int(1)<br></span></div>    </div>    <div class="example-contents"><p>以上示例在 PHP 8 中的输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;">     <div class="cdata"><span>int(3)<br><br>Fatal error: Uncaught TypeError: count(): Argument #1 ($var) must be of type Countable .. on line 12<br></span></div>    </div>   </div>  </p>  <p class="para">   <div class="example" id="">    <p><strong>示例 #3 递归 <span class="function"><strong style="color:#CC7832">count()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$food </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'fruits' </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">, </span><span style="color: #DD0000">'banana'</span><span style="color: #007700">, </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">),<br />              </span><span style="color: #DD0000">'veggie' </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">, </span><span style="color: #DD0000">'collard'</span><span style="color: #007700">, </span><span style="color: #DD0000">'pea'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// 递归计数<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">, </span><span style="color: #9876AA">COUNT_RECURSIVE</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// 常规计数<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$food</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>int(8)<br>int(2)<br></span></div>    </div>   </div>  </p>  <p class="para">   <div class="example" id="">    <p><strong>示例 #4 <span class="interfacename"><a href="https://www.php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span> 对象</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #9876AA">CountOfMethods </span><span style="color: #007700">implements </span><span style="color: #9876AA">Countable<br /></span><span style="color: #007700">{<br />    private function </span><span style="color: #9876AA">someMethod</span><span style="color: #007700">()<br />    {<br />    }<br /><br />    public function </span><span style="color: #9876AA">count</span><span style="color: #007700">(): </span><span style="color: #9876AA">int<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">get_class_methods</span><span style="color: #007700">(</span><span style="color: #9876AA">$this</span><span style="color: #007700">));<br />    }<br />}<br /><br /></span><span style="color: #9876AA">$obj </span><span style="color: #007700">= new </span><span style="color: #9876AA">CountOfMethods</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">count</span><span style="color: #007700">(</span><span style="color: #9876AA">$obj</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>int(2)<br></span></div>    </div>   </div>  </p> </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.count-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link is_array()} - 检测变量是否是数组</span></li>    <li class="member"><span class="function">{@link isset()} - 检测变量是否已声明并且其值不为 null</span></li>    <li class="member"><span class="function">{@link empty()} - 检查变量是否为空</span></li>    <li class="member"><span class="function">{@link strlen()} - 获取字符串长度</span></li>    <li class="member"><span class="function">{@link is_countable()} - 验证变量内容是否为可数值</span></li>    <li class="member"><a href="https://www.php.net/manual/zh/language.types.array.php" class="link">Array 数组</a></li>   </ul>  </span> </div></div>
 * @return int*/
function count(): int {}
