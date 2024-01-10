<?php

// Start of filter v.0.11.0
use JetBrains\PhpStorm\Pure;

/**
*<div id="function.filter-input" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_input</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input</span> &mdash; <span class="dc-title">通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-input-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_input</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$var_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$filter</span><span class="initializer"> = <strong><span>FILTER_DEFAULT</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-input-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       <strong><span>INPUT_GET</span></strong>, <strong><span>INPUT_POST</span></strong>,       <strong><span>INPUT_COOKIE</span></strong>, <strong><span>INPUT_SERVER</span></strong>或       <strong><span>INPUT_ENV</span></strong>之一。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">var_name</span></dt>     <dd>      <p class="para">       待获取的变量名。      </p>     </dd>           <dt><span class="parameter" style="color:#3A95FF">filter</span></dt>  <dd>   <p class="para">    要应用的过滤器 ID。<a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a> 手册页面列出了可用的过滤器。   </p>   <p class="para">    如果省略，将使用 <strong><span>FILTER_DEFAULT</span></strong>，默认等同于 <a href="https://www.php.net/manual/zh/filter.filters.sanitize.php" class="link"><strong><span>FILTER_UNSAFE_RAW</span></strong></a>。这将导致不进行任何默认过滤。   </p>  </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       一个选项的关联数组，或者按位区分的标示。如果过滤器接受选项，可以通过数组的 &quot;flags&quot; 位去提供这些标示。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-input-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果成功的话返回所请求的变量。如果过滤失败则返回 <strong><span>false</span></strong>，如果<span class="parameter" style="color:#3A95FF">var_name</span> 不存在的话则返回   <strong><span>null</span></strong>。如果标示 <strong><span>FILTER_NULL_ON_FAILURE</span></strong> 被使用了，那么当变量不存在时返回 <strong><span>false</span></strong>，当过滤失败时返回 <strong><span>null</span></strong>。   </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.filter-input-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 一个 <span class="function"><strong style="color:#CC7832">filter_input()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$search_html </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_SANITIZE_SPECIAL_CHARS</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$search_url </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"You have searched for </span><span style="color: #9876AA">$search_html</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"&lt;a href='?search=</span><span style="color: #9876AA">$search_url</span><span style="color: #DD0000">'&gt;Search again.&lt;/a&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>You have searched for Me &amp;#38; son.<br>&lt;a href=&#039;?search=Me%20%26%20son&#039;&gt;Search again.&lt;/a&gt;<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.filter-input-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>    <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>    <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>    <li class="member"><a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a></li>   </ul>  </span> </div></div>
 * @return mixed Value of the requested variable on success, <b>FALSE</b> if the filter fails,*/
function filter_input(int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
*<div id="function.filter-var" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_var</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var</span> &mdash; <span class="dc-title">使用特定的过滤器过滤一个变量</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-var-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_var</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$filter</span><span class="initializer"> = <strong><span>FILTER_DEFAULT</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-var-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       要过滤的内容。注意：标量值在过滤前，会被<a href="https://www.php.net/manual/zh/language.types.string.php#language.types.string.casting" class="link">转换成字符串</a>。      </p>     </dd>           <dt><span class="parameter" style="color:#3A95FF">filter</span></dt>  <dd>   <p class="para">    要应用的过滤器 ID。<a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a> 手册页面列出了可用的过滤器。   </p>   <p class="para">    如果省略，将使用 <strong><span>FILTER_DEFAULT</span></strong>，默认等同于 <a href="https://www.php.net/manual/zh/filter.filters.sanitize.php" class="link"><strong><span>FILTER_UNSAFE_RAW</span></strong></a>。这将导致不进行任何默认过滤。   </p>  </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       一个选项的关联数组，或者按位区分的标示。如果过滤器接受选项，可以通过数组的 &quot;flags&quot; 下标去提供这些标示。       对于回调型的过滤器，应该传入 <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>。       这个回调函数必须接受一个参数（即待过滤的值），并且返回一个在过滤/净化后的值。      </p>      <p class="para">       <div class="example-contents">        <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// 对于接受选项的过滤器，请使用此格式<br /></span><span style="color: #9876AA">$options </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">'default' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">3</span><span style="color: #007700">, </span><span style="color: #FF8000">// 过滤器失败时返回的值<br />        // 可以继续写过滤器接收其它选项<br />        </span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">0<br />    </span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FLAG_ALLOW_OCTAL</span><span style="color: #007700">,<br />);<br /></span><span style="color: #9876AA">$var </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'0755'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #9876AA">$options</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// 对于仅接受标志的过滤器，您可以直接将其传递<br /></span><span style="color: #9876AA">$var </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'oops'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// 对于仅接受标志的过滤器，您还可以将其作为数组传递<br /></span><span style="color: #9876AA">$var </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'oops'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">,<br />                  array(</span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">// 回调类型过滤器<br /></span><span style="color: #007700">function </span><span style="color: #9876AA">foo</span><span style="color: #007700">(</span><span style="color: #9876AA">$value</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">// 预期值: Surname, GivenNames<br />    </span><span style="color: #007700">if (</span><span style="color: #9876AA">strpos</span><span style="color: #007700">(</span><span style="color: #9876AA">$value</span><span style="color: #007700">, </span><span style="color: #DD0000">", "</span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) return </span><span style="color: #9876AA">false</span><span style="color: #007700">;<br />    list(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">, </span><span style="color: #9876AA">$givennames</span><span style="color: #007700">) = </span><span style="color: #9876AA">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">", "</span><span style="color: #007700">, </span><span style="color: #9876AA">$value</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">);<br />    </span><span style="color: #9876AA">$empty </span><span style="color: #007700">= (empty(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">) || empty(</span><span style="color: #9876AA">$givennames</span><span style="color: #007700">));<br />    </span><span style="color: #9876AA">$notstrings </span><span style="color: #007700">= (!</span><span style="color: #9876AA">is_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$surname</span><span style="color: #007700">) || !</span><span style="color: #9876AA">is_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$givennames</span><span style="color: #007700">));<br />    if (</span><span style="color: #9876AA">$empty </span><span style="color: #007700">|| </span><span style="color: #9876AA">$notstrings</span><span style="color: #007700">) {<br />        return </span><span style="color: #9876AA">false</span><span style="color: #007700">;<br />    } else {<br />        return </span><span style="color: #9876AA">$value</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #9876AA">$var </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'Doe, Jane Sue'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_CALLBACK</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>       </div>      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-var-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回过滤后的数据，如果过滤失败则返回 <strong><span>false</span></strong> 。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.filter-var-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 一个 <span class="function"><strong style="color:#CC7832">filter_var()</strong></span> 的示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'bob@example.com'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_URL</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_FLAG_PATH_REQUIRED</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>string(15) &quot;bob@example.com&quot;<br>bool(false)<br></span></div>    </div>   </div>  </span>  <p class="para">   <div class="example" id="">    <p><strong>示例 #2 过滤数组示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$emails </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">"bob@example.com"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"test@example.local"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"invalidemail"<br /></span><span style="color: #007700">];<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #9876AA">$emails</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>array(3) {<br>  [0]=&gt;<br>  string(15) &quot;bob@example.com&quot;<br>  [1]=&gt;<br>  string(18) &quot;test@example.local&quot;<br>  [2]=&gt;<br>  bool(false)<br>}<br></span></div>    </div>   </div>  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.filter-var-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>    <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>    <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>    <li class="member"><a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a></li>   </ul>  </span> </div></div>
 * @return mixed the filtered data, or <b>FALSE</b> if the filter fails.*/
function filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
*<div id="function.filter-input-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_input_array</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input_array</span> &mdash; <span class="dc-title">获取一系列外部变量，并且可以通过过滤器处理它们</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-input-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_input_array</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = <strong><span>FILTER_DEFAULT</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$add_empty</span><span class="initializer"> = <strong><span>true</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span>|<span class="type" style="color:#EAB766">null</span></span></div>  <p class="para rdfs-comment">   这个函数当需要获取很多变量却不想重复调用<span class="function">{@link filter_input()}</span>时很有用。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-input-array-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       <strong><span>INPUT_GET</span></strong>, <strong><span>INPUT_POST</span></strong>,       <strong><span>INPUT_COOKIE</span></strong>, <strong><span>INPUT_SERVER</span></strong>, or       <strong><span>INPUT_ENV</span></strong>之一。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       一个定义参数的数组。一个有效的键必须是一个包含变量名的<span class="type" style="color:#EAB766">string</span>，一个有效的值要么是一个<a href="https://www.php.net/manual/zh/filter.filters.php" class="link">filter type</a>，或者是一个<span class="type" style="color:#EAB766">array</span>       指明了过滤器、标示和选项。如果值是一个数组，那么它的有效的键可以是 <span>filter</span>，       用于指明 <a href="https://www.php.net/manual/zh/filter.filters.php" class="link">filter type</a>，<span>flags</span>        用于指明任何想要用于过滤器的标示，或者 <span>options</span> 用于指明任何想要用于过滤器的选项。       参考下面的例子来更好的理解这段说明。      </p>      <p class="para">       这个参数也可以是一个<a href="https://www.php.net/manual/zh/filter.constants.php" class="link">filter constant</a>的整数。那么数组中的所有变量都会被这个过滤器所过滤。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">add_empty</span></dt>     <dd>      <p class="para">       在返回值中添加 <strong><span>null</span></strong> 作为不存在的键。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-input-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时包含请求变量值的数组。如果通过 <span class="parameter" style="color:#3A95FF">type</span> 指定的输入数组没有值可以填充，当没有指定    <strong><span>FILTER_NULL_ON_FAILURE</span></strong> flag 时函数返回 <strong><span>null</span></strong>，否则为 <strong><span>false</span></strong>。其它失败返回 <strong><span>false</span></strong>。  </p>  <p class="para">   如果过滤失败，数组值将为 <strong><span>false</span></strong>，如果变量未设置，返回 <strong><span>null</span></strong>。如果使用 <strong><span>FILTER_NULL_ON_FAILURE</span></strong>   flag，变量未设置将返回 <strong><span>false</span></strong>，过滤失败将返回 <strong><span>null</span></strong>。如果 <span class="parameter" style="color:#3A95FF">add_empty</span> 参数为   <strong><span>false</span></strong>，不会为复位的变量添加数组元素。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.filter-input-array-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">filter_input_array()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #FF8000">// data actually came from POST<br />$_POST = array(<br />    'product_id' =&gt; 'libgd&lt;script&gt;',<br />    'component'  =&gt; array('10'),<br />    'version'    =&gt; '2.0.33',<br />    'testarray'  =&gt; array('2', '23', '10', '12'),<br />    'testscalar' =&gt; '2',<br />);<br /><br /><br /></span><span style="color: #9876AA">$args </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'product_id'   </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'component'    </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'filter'    </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'     </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">, <br />                            </span><span style="color: #DD0000">'options'   </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'max_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">10</span><span style="color: #007700">)<br />                           ),<br />    </span><span style="color: #DD0000">'version'      </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'doesnotexist' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'testscalar'   </span><span style="color: #007700">=&gt; array(<br />                            </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br />                           ),<br />    </span><span style="color: #DD0000">'testarray'    </span><span style="color: #007700">=&gt; array(<br />                            </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">,<br />                           )<br /><br />);<br /><br /></span><span style="color: #9876AA">$myinputs </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_input_array</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_POST</span><span style="color: #007700">, </span><span style="color: #9876AA">$args</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$myinputs</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>array(6) {<br>  [&quot;product_id&quot;]=&gt;<br>  string(17) &quot;libgd%3Cscript%3E&quot;<br>  [&quot;component&quot;]=&gt;<br>  array(1) {<br>    [0]=&gt;<br>    int(10)<br>  }<br>  [&quot;version&quot;]=&gt;<br>  string(6) &quot;2.0.33&quot;<br>  [&quot;doesnotexist&quot;]=&gt;<br>  NULL<br>  [&quot;testscalar&quot;]=&gt;<br>  int(2)<br>  [&quot;testarray&quot;]=&gt;<br>  array(4) {<br>    [0]=&gt;<br>    int(2)<br>    [1]=&gt;<br>    int(23)<br>    [2]=&gt;<br>    int(10)<br>    [3]=&gt;<br>    int(12)<br>  }<br>}<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.filter-input-array-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <p class="para">    在 <strong><span>INPUT_SERVER</span></strong> 数组中并没有 <span>REQUEST_TIME</span> ，因为它是被稍后插入到 <var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER</a></var> 中的。   </p>  </p></blockquote> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.filter-input-array-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>    <li class="member"><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>    <li class="member"><a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a></li>   </ul>  </span> </div></div>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>*/
function filter_input_array(int $type, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
*<div id="function.filter-var-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_var_array</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var_array</span> &mdash; <span class="dc-title">获取多个变量并且过滤它们</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-var-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_var_array</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$array</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = <strong><span>FILTER_DEFAULT</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$add_empty</span><span class="initializer"> = <strong><span>true</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span>|<span class="type" style="color:#EAB766">null</span></span></div>  <p class="para rdfs-comment">   不需要重复调用 <span class="function">{@link filter_var()}</span> 就能获取多个变量。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-var-array-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">array</span></dt>     <dd>      <p class="para">       数组，键为字符串，值为待过滤的数据。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       一个定义参数的数组。一个有效的键必须是一个包含变量名的<span class="type" style="color:#EAB766">string</span>，一个有效的值要么是一个<a href="https://www.php.net/manual/zh/filter.filters.php" class="link">filter type</a>，或者是一个<span class="type" style="color:#EAB766">array</span>       指明了过滤器、标示和选项。如果值是一个数组，那么它的有效的键可以是 <span>filter</span>，       用于指明 <a href="https://www.php.net/manual/zh/filter.filters.php" class="link">filter type</a>，<span>flags</span>        用于指明任何想要用于过滤器的标示，或者 <span>options</span> 用于指明任何想要用于过滤器的选项。       参考下面的例子来更好的理解这段说明。      </p>      <p class="para">       这个参数也可以是一个<a href="https://www.php.net/manual/zh/filter.constants.php" class="link">filter constant</a>的整数。那么数组中的所有值都会被这个过滤器所过滤。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">add_empty</span></dt>     <dd>      <p class="para">       在返回值中添加 <strong><span>null</span></strong> 作为不存在的键。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-var-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果成功则返回一个包含所请求变量的数组，或者当失败时返回 <strong><span>false</span></strong> 。   一个数组的值如果过滤失败则为 <strong><span>false</span></strong> ，或者为 <strong><span>null</span></strong> 如果变量不存在的话。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.filter-var-array-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 一个 <span class="function"><strong style="color:#CC7832">filter_var_array()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /><br />$data </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'product_id'    </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'libgd&lt;script&gt;'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'component'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'10'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'versions'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2.0.33'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'testscalar'    </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'23'</span><span style="color: #007700">, </span><span style="color: #DD0000">'10'</span><span style="color: #007700">, </span><span style="color: #DD0000">'12'</span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'testarray'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #9876AA">$args </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'product_id'   </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'component'    </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'filter'    </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'     </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">, <br />                            </span><span style="color: #DD0000">'options'   </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'max_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">10</span><span style="color: #007700">)<br />                           ),<br />    </span><span style="color: #DD0000">'versions'     </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'doesnotexist' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'testscalar'   </span><span style="color: #007700">=&gt; array(<br />                            </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br />                           ),<br />    </span><span style="color: #DD0000">'testarray'    </span><span style="color: #007700">=&gt; array(<br />                            </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br />                           )<br /><br />);<br /><br /></span><span style="color: #9876AA">$myinputs </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_var_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">, </span><span style="color: #9876AA">$args</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$myinputs</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>array(6) {<br>  [&quot;product_id&quot;]=&gt;<br>  string(17) &quot;libgd%3Cscript%3E&quot;<br>  [&quot;component&quot;]=&gt;<br>  array(1) {<br>    [0]=&gt;<br>    int(10)<br>  }<br>  [&quot;versions&quot;]=&gt;<br>  string(6) &quot;2.0.33&quot;<br>  [&quot;doesnotexist&quot;]=&gt;<br>  NULL<br>  [&quot;testscalar&quot;]=&gt;<br>  bool(false)<br>  [&quot;testarray&quot;]=&gt;<br>  array(1) {<br>    [0]=&gt;<br>    int(2)<br>  }<br>}<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.filter-var-array-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>    <li class="member"><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>    <li class="member"><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>    <li class="member"><a href="https://www.php.net/manual/zh/filter.filters.php" class="xref">过滤器类型</a></li>   </ul>  </span> </div></div>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>*/
function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
*<div id="function.filter-list" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_list</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_list</span> &mdash; <span class="dc-title">返回所支持的过滤器列表</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-list-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_list</strong></span>(): <span class="type" style="color:#EAB766">array</span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-list-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-list-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个所支持的过滤器的名称的列表，如果没有这样子的过滤器的话则返回空数组。这个数组的索引不是过滤器id，   你可以通过 <span class="function">{@link filter_id()}</span> 去根据名称获取它们。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.filter-list-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 一个 <span class="function"><strong style="color:#CC7832">filter_list()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_list</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>Array<br>(<br>    [0] =&gt; int<br>    [1] =&gt; boolean<br>    [2] =&gt; float<br>    [3] =&gt; validate_regexp<br>    [4] =&gt; validate_url<br>    [5] =&gt; validate_email<br>    [6] =&gt; validate_ip<br>    [7] =&gt; string<br>    [8] =&gt; stripped<br>    [9] =&gt; encoded<br>    [10] =&gt; special_chars<br>    [11] =&gt; unsafe_raw<br>    [12] =&gt; email<br>    [13] =&gt; url<br>    [14] =&gt; number_int<br>    [15] =&gt; number_float<br>    [16] =&gt; magic_quotes<br>    [17] =&gt; callback<br>)<br></span></div>    </div>   </div>  </span> </div></div>
 * @return array an array of names of all supported filters, empty array if there*/
function filter_list(): array {}

/**
*<div id="function.filter-has-var" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_has_var</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_has_var</span> &mdash; <span class="dc-title">检测是否存在指定类型的变量</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-has-var-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_has_var</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$input_type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$var_name</span></span>): <span class="type" style="color:#EAB766">bool</span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-has-var-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">input_type</span></dt>     <dd>      <p class="para">       <strong><span>INPUT_GET</span></strong>、<strong><span>INPUT_POST</span></strong>、<strong><span>INPUT_COOKIE</span></strong>、<strong><span>INPUT_SERVER</span></strong>、<strong><span>INPUT_ENV</span></strong> 里的其中一个。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">var_name</span></dt>     <dd>      <p class="para">       要检查的变量名。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-has-var-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function filter_has_var(int $input_type, string $var_name): bool {}

/**
*<div id="function.filter-id" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_id</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_id</span> &mdash; <span class="dc-title">返回与某个特定名称的过滤器相关联的id</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.filter-id-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_id</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766"><span class="type false" style="color:#EAB766">false</span></span></span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.filter-id-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       待获取的过滤器名称。      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.filter-id-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果获取成功则返回过滤器 id，如果过滤器不存在则返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.filter-id-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link filter_list()} - 返回所支持的过滤器列表</span></li>   </ul>  </span> </div></div>
 * @return int|false ID of a filter on success or <b>FALSE</b> if filter doesn't exist.*/
function filter_id(string $name): int|false {}

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.post.php" class="link">POST</a> 变量。     
*/
define('INPUT_POST', 0);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.get.php" class="link">GET</a> 变量。     
*/
define('INPUT_GET', 1);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.cookies.php" class="link">COOKIE</a> 变量。     
*/
define('INPUT_COOKIE', 2);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.environment.php" class="link">ENV</a> 变量。     
*/
define('INPUT_ENV', 4);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.server.php" class="link">SERVER</a> 变量。     
*/
define('INPUT_SERVER', 5);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.session.php" class="link">SESSION</a> 变量。     (暂未实现)     
*/
define('INPUT_SESSION', 6);

/**
*      <a href="https://www.php.net/manual/zh/reserved.variables.request.php" class="link">REQUEST</a> 变量。     (暂未实现)     
*/
define('INPUT_REQUEST', 99);

/**
*      没有标记。     
*/
define('FILTER_FLAG_NONE', 0);

/**
*      此标记要求输入的是标量。     
*/
define('FILTER_REQUIRE_SCALAR', 33554432);

/**
*      需要输入的是数组。     
*/
define('FILTER_REQUIRE_ARRAY', 16777216);

/**
*      一律返回数组。     
*/
define('FILTER_FORCE_ARRAY', 67108864);

/**
*      失败时返回 NULL，而非 FALSE。     
*/
define('FILTER_NULL_ON_FAILURE', 134217728);

/**
*      标记 &quot;int&quot; 过滤器。     
*/
define('FILTER_VALIDATE_INT', 257);

/**
*      标记 &quot;boolean&quot; 过滤器。     
*/
define('FILTER_VALIDATE_BOOLEAN', 258);
/**
*      <strong><code>FILTER_VALIDATE_BOOLEAN</code></strong> 的别名。     
*/
define('FILTER_VALIDATE_BOOL', 258);

/**
*      标记 &quot;float&quot; 过滤器。     
*/
define('FILTER_VALIDATE_FLOAT', 259);

/**
*      标记 &quot;validate_regexp&quot; 过滤器。     
*/
define('FILTER_VALIDATE_REGEXP', 272);

/**
*      “validate_domain”过滤器的 ID。      （自 PHP 7.0.0 起可用）     
*/
define('FILTER_VALIDATE_DOMAIN', 277);

/**
*      标记 &quot;validate_url&quot; 过滤器。     
*/
define('FILTER_VALIDATE_URL', 273);

/**
*      标记 &quot;validate_email&quot; 过滤器。     
*/
define('FILTER_VALIDATE_EMAIL', 274);

/**
*      标记 &quot;validate_ip&quot; 过滤器。     
*/
define('FILTER_VALIDATE_IP', 275);
/**
*      标记 &quot;validate_mac_address&quot; 过滤器。     
*/
define('FILTER_VALIDATE_MAC', 276);

/**
*      标记默认的 &quot;unsafe_raw&quot; 过滤器。 等同于     <strong><code>FILTER_UNSAFE_RAW</code></strong>。     
*/
define('FILTER_DEFAULT', 516);

/**
*      “add_slashes”过滤器的 ID。      (自 PHP 7.3.0 起可用)     
*/
define('FILTER_SANITIZE_ADD_SLASHES', 523);

/**
*      标记 &quot;unsafe_raw&quot; 过滤器。     
*/
define('FILTER_UNSAFE_RAW', 516);

/**
*      标记 &quot;string&quot; 过滤器。      （自 PHP 8.1.0 起弃用，使用 <span class="function">{@link htmlspecialchars()}</span> 替代。）     
*/
define('FILTER_SANITIZE_STRING', 513);

/**
*      标记 &quot;stripped&quot; 过滤器。      （自 PHP 8.1.0 起弃用，使用 <span class="function">{@link htmlspecialchars()}</span> 替代。）     
*/
define('FILTER_SANITIZE_STRIPPED', 513);

/**
*      标记 &quot;encoded&quot; 过滤器。     
*/
define('FILTER_SANITIZE_ENCODED', 514);

/**
*      标记 &quot;special_chars&quot; 过滤器。     
*/
define('FILTER_SANITIZE_SPECIAL_CHARS', 515);
define('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 522);

/**
*      标记 &quot;email&quot; 过滤器。     
*/
define('FILTER_SANITIZE_EMAIL', 517);

/**
*      标记 &quot;url&quot; 过滤器。     
*/
define('FILTER_SANITIZE_URL', 518);

/**
*      标记 &quot;number_int&quot; 过滤器。     
*/
define('FILTER_SANITIZE_NUMBER_INT', 519);

/**
*      标记 &quot;number_float&quot; 过滤器。     
*/
define('FILTER_SANITIZE_NUMBER_FLOAT', 520);

/**
*      标记 &quot;magic_quotes&quot; 过滤器。      （自 PHP 7.3.0 起<em>弃用</em>，自 PHP 8.0.0      起<em>移除</em>，使用 <strong><code>FILTER_SANITIZE_ADD_SLASHES</code></strong> 替代。）     
*/
define('FILTER_SANITIZE_MAGIC_QUOTES', 521);

/**
*      标记 &quot;callback&quot; 过滤器。     
*/
define('FILTER_CALLBACK', 1024);

/**
*      &quot;int&quot; 过滤器允许八进制（octal）标记的字符（<code class="literal">0[0-7]+</code>）。     
*/
define('FILTER_FLAG_ALLOW_OCTAL', 1);

/**
*      &quot;int&quot; 过滤器允许十六进制（Hex）标记的字符（<code class="literal">0x[0-9a-fA-F]+</code>）     
*/
define('FILTER_FLAG_ALLOW_HEX', 2);

/**
*      过滤 ASCII 编码值大于 32 的字符 。     
*/
define('FILTER_FLAG_STRIP_LOW', 4);

/**
*      过滤 ASCII 编码值大于 127 的字符 。     
*/
define('FILTER_FLAG_STRIP_HIGH', 8);
/**
*      移除反引号字符。     
*/
define('FILTER_FLAG_STRIP_BACKTICK', 512);

/**
*      字符的 ASCII 编码值大于 32。     
*/
define('FILTER_FLAG_ENCODE_LOW', 16);

/**
*      字符的 ASCII 编码值大于 127。     
*/
define('FILTER_FLAG_ENCODE_HIGH', 32);

/**
*      为 <code class="literal">&amp;</code> 编码。     
*/
define('FILTER_FLAG_ENCODE_AMP', 64);

/**
*      不要为 <code class="literal">&#039;</code> 和 <code class="literal">&quot;</code> 编码。     
*/
define('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

/**
*      (目前不能使用。)     
*/
define('FILTER_FLAG_EMPTY_STRING_NULL', 256);

/**
*       &quot;number_float&quot; 过滤器允许小数部分。     
*/
define('FILTER_FLAG_ALLOW_FRACTION', 4096);

/**
*      &quot;number_float&quot; 过滤器允许使用千分位分隔符（<code class="literal">,</code>）。     
*/
define('FILTER_FLAG_ALLOW_THOUSAND', 8192);

/**
*      &quot;number_float&quot; 过滤器允许使用科学计数法（<code class="literal">e</code>、<code class="literal">E</code>）。     
*/
define('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);

/**
*      要求带 scheme 的“validate_url”过滤器。      （自 PHP 7.3.0 起弃用，且自 PHP 8.0.0 起移除，因为已经隐含在过滤器中。）     
*/
define('FILTER_FLAG_SCHEME_REQUIRED', 65536);

/**
*      要求带 host 的“validate_url”过滤器。      （自 PHP 7.3.0 起弃用，且自 PHP 8.0.0 起移除，因为已经隐含在过滤器中。）     
*/
define('FILTER_FLAG_HOST_REQUIRED', 131072);

/**
*      &quot;validate_url&quot; 过滤器，要求带路径部分。     
*/
define('FILTER_FLAG_PATH_REQUIRED', 262144);

/**
*      &quot;validate_url&quot; 过滤器，要求带 Query 部分。     
*/
define('FILTER_FLAG_QUERY_REQUIRED', 524288);

/**
*      &quot;validate_ip&quot; 过滤器，仅仅允许 IPv4 地址。     
*/
define('FILTER_FLAG_IPV4', 1048576);

/**
*      &quot;validate_ip&quot; 过滤器，仅仅允许 IPv6 地址。     
*/
define('FILTER_FLAG_IPV6', 2097152);

/**
*      &quot;validate_ip&quot; 过滤器，禁止保留 IP 地址。     
*/
define('FILTER_FLAG_NO_RES_RANGE', 4194304);

/**
*      &quot;validate_ip&quot; 过滤器，禁止私有 IP 地址。     
*/
define('FILTER_FLAG_NO_PRIV_RANGE', 8388608);

/**
*      要求主机名使用字母数字开头，并且仅包含字母数字或连字符。（自 PHP 7.0.0 起可用）。     
*/
define('FILTER_FLAG_HOSTNAME', 1048576);
/**
*      &quot;validate_email&quot; 过滤器，在邮件地址用户名部分允许 Unicode 字符。      （PHP 7.1.0 起有效）     
*/
define('FILTER_FLAG_EMAIL_UNICODE', 1048576);

/**
 * filters Global IPs per RFC 6890
 * @since 8.2
 */
define('FILTER_FLAG_GLOBAL_RANGE', 268435456);

// End of filter v.0.11.0
