<?php

// Start of FFI v.0.1.0

namespace {
    use FFI\CData;
    use FFI\CType;
    use FFI\ParserException;

/**
*<div id="class.ffi" class="reference"> <h1 class="title">C 代码和数据的主接口</h1>  <div class="partintro"><p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p>  <div class="section" id="ffi.intro">   <h2 class="title">简介</h2>   <p class="para">    通过工厂方法 <span class="methodname" style="color:#CC7832">{@link FFI::cdef()}</span>、<span class="methodname" style="color:#CC7832">{@link FFI::load()}</span> 或 <span class="methodname" style="color:#CC7832">{@link FFI::scope()}</span>    创建该类的对象。定义的 C 变量作为有效的 FFI 实例属性，定义的 C 函数作为有效的 FFI 实例方法。声明的 C 类型可以用于    <span class="methodname" style="color:#CC7832">{@link FFI::new()}</span> 和 <span class="methodname" style="color:#CC7832">{@link FFI::type()}</span> 创建新的 C 数据结构。   </p>   <p class="para">    FFI 定义解析和共享库加载可能需要较长时间。在 Web 环境中，每个 HTTP 请求都进行这些操作是没有意义的。然而，在 PHP 启动时预加载    FFI 定义和库，并在需要时实例化 FFI 对象是可能的。header 文件可以使用特殊的 <span>FFI_SCOPE</span> 定义进行扩展（例如    <span>#define FFI_SCOPE &quot;foo&quot;</span>），然后在预加载期间由 <span class="methodname" style="color:#CC7832">{@link FFI::load()}</span> 加载。这将创建持久绑定，将通过    <span class="methodname" style="color:#CC7832">{@link FFI::scope()}</span> 在所有后续请求中可用。有关详细信息，请参阅<a href="https://www.php.net/manual/zh/ffi.examples-complete.php" class="link">完整的 PHP/FFI/preloading 示例</a>。   </p>   <p class="para">    可以将多个 C header 文件预加载到同一作用域中。   </p>  </div>  <div class="section" id="ffi.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">FFI</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">const</span>     <span class="type" style="color:#EAB766">int</span>      <var class="fieldsynopsis_varname"><a href="https://www.php.net/manual/zh/class.ffi.php#ffi-ffi.constants.biggest-alignment"><var class="varname">__BIGGEST_ALIGNMENT__</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.addr.php" class="methodname" style="color:#CC7832">addr</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.alignof.php" class="methodname" style="color:#CC7832">alignof</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.arraytype.php" class="methodname" style="color:#CC7832">arrayType</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$dimensions</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.cast.php" class="methodname" style="color:#CC7832">cast</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">float</span>|<span class="type" style="color:#EAB766">bool</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.cast.php" class="methodname" style="color:#CC7832">cast</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">float</span>|<span class="type" style="color:#EAB766">bool</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.cdef.php" class="methodname" style="color:#CC7832">cdef</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$code</span><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$lib</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.free.php" class="methodname" style="color:#CC7832">free</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.isnull.php" class="methodname" style="color:#CC7832">isNull</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.load.php" class="methodname" style="color:#CC7832">load</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$filename</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.memcmp.php" class="methodname" style="color:#CC7832">memcmp</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr2</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.memcpy.php" class="methodname" style="color:#CC7832">memcpy</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$to</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">&$from</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.memset.php" class="methodname" style="color:#CC7832">memset</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.new.php" class="methodname" style="color:#CC7832">new</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$owned</span><span class="initializer"> = <strong><span>true</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$persistent</span><span class="initializer"> = <strong><span>false</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.new.php" class="methodname" style="color:#CC7832">new</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$owned</span><span class="initializer"> = <strong><span>true</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$persistent</span><span class="initializer"> = <strong><span>false</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.scope.php" class="methodname" style="color:#CC7832">scope</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.sizeof.php" class="methodname" style="color:#CC7832">sizeof</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.string.php" class="methodname" style="color:#CC7832">string</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$size</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.type.php" class="methodname" style="color:#CC7832">type</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.type.php" class="methodname" style="color:#CC7832">type</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/ffi.typeof.php" class="methodname" style="color:#CC7832">typeof</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></div>   }</div>  </div>  <div class="section" id="ffi-ffi.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="ffi-ffi.constants.biggest-alignment"><strong><span>FFI::__BIGGEST_ALIGNMENT__</span></strong></dt>     <dd>      <p class="para"/>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link FFI::addr} — Creates an unmanaged pointer to C data</li><li>{@link FFI::alignof} — Gets the alignment</li><li>{@link FFI::arrayType} — Dynamically constructs a new C array type</li><li>{@link FFI::cast} — Performs a C type cast</li><li>{@link FFI::cdef} — Creates a new FFI object</li><li>{@link FFI::free} — Releases an unmanaged data structure</li><li>{@link FFI::isNull} — Checks whether a FFI\CData is a null pointer</li><li>{@link FFI::load} — Loads C declarations from a C header file</li><li>{@link FFI::memcmp} — Compares memory areas</li><li>{@link FFI::memcpy} — Copies one memory area to another</li><li>{@link FFI::memset} — Fills a memory area</li><li>{@link FFI::new} — Creates a C data structure</li><li>{@link FFI::scope} — Instantiates an FFI object with C declarations parsed during preloading</li><li>{@link FFI::sizeof} — Gets the size of C data or types</li><li>{@link FFI::string} — Creates a PHP string from a memory area</li><li>{@link FFI::type} — Creates an FFI\CType object from a C declaration</li><li>{@link FFI::typeof} — Gets the FFI\CType of FFI\CData</li></ul></div>
*/
    class FFI
    {
/**
*<div id="ffi.cdef" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::cdef</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::cdef</span> &mdash; <span class="dc-title">Creates a new FFI object</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.cdef-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::cdef</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$code</span><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$lib</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></div>  <p class="para rdfs-comment">   Creates a new FFI object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.cdef-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">code</span></dt>    <dd>     <span>      A string containing a sequence of declarations in regular C language      (types, structures, functions, variables, etc). Actually, this string may      be copy-pasted from C header files.     </span>     <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:       <p class="para">       C preprocessor directives are not supported, i.e. <span>#include</span>,       <span>#define</span> and CPP macros do not work.      </p>     </p></blockquote>    </dd>          <dt><span class="parameter" style="color:#3A95FF">lib</span></dt>    <dd>     <p class="para">      The name of a shared library file, to be loaded and linked with the      definitions.     </p>     <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:       <p class="para">       If <span class="parameter" style="color:#3A95FF">lib</span> is omitted or <strong><span>null</span></strong>, platforms supporting <span>RTLD_DEFAULT</span>       attempt to lookup symbols declared in <span class="parameter" style="color:#3A95FF">code</span> in the normal global       scope. Other systems will fail to resolve these symbols.      </p>     </p></blockquote>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.cdef-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi.php" class="classname">FFI</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-ffi.cdef-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">lib</span> is nullable now.      </td>     </tr>    </tbody>     </table> </div></div>
         * @return FFI*/
        public static function cdef(string $code = '', ?string $lib = null): FFI {}

/**
*<div id="ffi.load" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::load</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::load</span> &mdash; <span class="dc-title">Loads C declarations from a C header file</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.load-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::load</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$filename</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></span></div>  <p class="para rdfs-comment">   Loads C declarations from a C header file. It is possible to specify shared libraries that should be loaded,   using special <span>FFI_LIB</span> defines in the loaded C header file.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.load-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <span>      The name of a C header file.     </span>     <p class="para">      C preprocessor directives are not supported, i.e. <span>#include</span>,      <span>#define</span> and CPP macros do not work, except for special cases      listed below.     </p>     <p class="para">      The header file <em>should</em> contain a <span>#define</span> statement for the      <span>FFI_SCOPE</span> variable, e.g.: <span>#define FFI_SCOPE &quot;MYLIB&quot;</span>.      Refer to the <a href="https://www.php.net/manual/zh/class.ffi.php#ffi.intro" class="link">class introduction</a> for details.     </p>     <p class="para">      The header file <em>may</em> contain a <span>#define</span> statement for the      <span>FFI_LIB</span> variable to specify the library it exposes. If it is      a system library only the file name is required, e.g.: <span>#define FFI_LIB      &quot;libc.so.6&quot;</span>.  If it is a custom library, a relative path is required,      e.g.: <span>#define FFI_LIB &quot;./mylib.so&quot;</span>.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.load-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi.php" class="classname">FFI</a></span> object, or <strong><span>null</span></strong> on failure.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-ffi.load-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link FFI::scope()} - Instantiates an FFI object with C declarations parsed during preloading</span></li>   </ul>  </span> </div></div>
         * @return FFI|null*/
        public static function load(string $filename): ?FFI {}

/**
*<div id="ffi.scope" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::scope</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::scope</span> &mdash; <span class="dc-title">Instantiates an FFI object with C declarations parsed during preloading</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.scope-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::scope</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi.php" class="type FFI" style="color:#EAB766">FFI</a></span></div>  <p class="para rdfs-comment">   Instantiates an FFI object with C declarations parsed during preloading.  </p>  <p class="para">   The <span class="methodname" style="color:#CC7832"><strong>FFI::scope()</strong></span> method is safe to call multiple times for the same scope. Multiple references to the   same scope may be loaded at the same time.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.scope-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">name</span></dt>    <dd>     <span>      The scope name defined by a special <span>FFI_SCOPE</span> define.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.scope-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi.php" class="classname">FFI</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-ffi.scope-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link FFI::load()} - Loads C declarations from a C header file</span></li>   </ul>  </span> </div></div>
         * @return FFI*/
        public static function scope(string $name): FFI {}

/**
*<div id="ffi.new" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::new</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::new</span> &mdash; <span class="dc-title">Creates a C data structure</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.new-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::new</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$owned</span><span class="initializer"> = <strong><span>true</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$persistent</span><span class="initializer"> = <strong><span>false</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>FFI::new</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$owned</span><span class="initializer"> = <strong><span>true</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$persistent</span><span class="initializer"> = <strong><span>false</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div>  <p class="para rdfs-comment">   Creates a native data structure of the given C type.   If this method is called statically, it must only use predefined C type names (e.g.   <span>int</span>, <span>char</span>, etc.); if the method is called as   instance method, any type declared for the instance is allowed.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.new-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span>      <span class="parameter" style="color:#3A95FF">type</span> is a valid C declaration as <span class="type" style="color:#EAB766">string</span>, or an      instance of <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> which has already been created.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">owned</span></dt>    <dd>     <p class="para">      Whether to create owned (i.e. managed) or unmanaged data. Managed data lives together      with the returned <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object, and is released when the      last reference to that object is released by regular PHP reference counting or GC.      Unmanaged data should be released by calling <span class="methodname" style="color:#CC7832">{@link FFI::free()}</span>,      when no longer needed.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">persistent</span></dt>    <dd>     <p class="para">      Whether to allocate the C data structure permanently on the system heap (using       <span class="function"><strong style="color:#CC7832">malloc()</strong></span>), or on the PHP request heap (using <span class="function"><strong style="color:#CC7832">emalloc()</strong></span>).     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.new-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object,   or <strong><span>null</span></strong> on failure.  </p> </div></div>
         * @return CData|null*/
        public static function new($type, bool $owned = true, bool $persistent = false): ?CData {}

/**
*<div id="ffi.free" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::free</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::free</span> &mdash; <span class="dc-title">Releases an unmanaged data structure</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.free-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::free</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Manually releases a previously created unmanaged data structure.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.free-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the unmanaged pointer to a C data structure.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.free-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
         * @return void*/
        public static function free(CData $ptr): void {}

/**
*<div id="ffi.cast" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::cast</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::cast</span> &mdash; <span class="dc-title">Performs a C type cast</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.cast-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::cast</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">float</span>|<span class="type" style="color:#EAB766">bool</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>FFI::cast</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">float</span>|<span class="type" style="color:#EAB766">bool</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span></div>  <p class="para rdfs-comment">   <span class="methodname" style="color:#CC7832"><strong>FFI::cast()</strong></span> creates a new <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span>   object, that references the same C data structure, but is associated with a different type.   The resulting object does not own the C data, and the source <span class="parameter" style="color:#3A95FF">ptr</span>   must survive the result. The C type may be specified as a <span class="type" style="color:#EAB766">string</span> with any   valid C type declaration or as <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object, created before.   If this method is called statically, it must only use predefined C type names (e.g.   <span>int</span>, <span>char</span>, etc.); if the method is called as   instance method, any type declared for the instance is allowed.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.cast-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span>      A valid C declaration as <span class="type" style="color:#EAB766">string</span>, or an instance of <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span>      which has already been created.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <p class="para">      The handle of the pointer to a C data structure.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.cast-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object.  </p> </div></div>
         * @return CData|null*/
        public static function cast($type, $ptr): ?CData {}

/**
*<div id="ffi.type" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::type</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::type</span> &mdash; <span class="dc-title">Creates an FFI\CType object from a C declaration</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.type-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::type</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>FFI::type</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$type</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span></div>  <p class="para rdfs-comment">   This function creates and returns a <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object for the   given <span class="type" style="color:#EAB766">string</span> containing a C type declaration.   If this method is called statically, it must only use predefined C type names (e.g.   <span>int</span>, <span>char</span>, etc.); if the method is called as   instance method, any type declared for the instance is allowed.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.type-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span>      A valid C declaration as <span class="type" style="color:#EAB766">string</span>.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.type-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object,   or <strong><span>null</span></strong> on failure.  </p> </div></div>
         * @return CType|null*/
        public static function type(string $type): ?CType {}

/**
*<div id="ffi.typeof" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::typeof</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::typeof</span> &mdash; <span class="dc-title">Gets the FFI\CType of FFI\CData</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.typeof-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::typeof</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></div>  <p class="para rdfs-comment">   Gets the <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object representing the type of the given   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.typeof-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the pointer to a C data structure.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.typeof-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object representing the type of the given   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object.  </p> </div></div>
         * @return CType*/
        public static function typeof(CData $ptr): CType {}

/**
*<div id="ffi.arraytype" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::arrayType</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::arrayType</span> &mdash; <span class="dc-title">Dynamically constructs a new C array type</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.arraytype-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::arrayType</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$dimensions</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></div>  <p class="para rdfs-comment">   Dynamically constructs a new C array type with elements of type defined by <span class="parameter" style="color:#3A95FF">type</span>,   and dimensions specified by <span class="parameter" style="color:#3A95FF">dimensions</span>. In the following example <span>$t1</span>   and <span>$t2</span> are equivalent array types:   <div class="informalexample">    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$t1 </span><span style="color: #007700">= </span><span style="color: #9876AA">FFI</span><span style="color: #007700">::</span><span style="color: #9876AA">type</span><span style="color: #007700">(</span><span style="color: #DD0000">"int[2][3]"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$t2 </span><span style="color: #007700">= </span><span style="color: #9876AA">FFI</span><span style="color: #007700">::</span><span style="color: #9876AA">arrayType</span><span style="color: #007700">(</span><span style="color: #9876AA">FFI</span><span style="color: #007700">::</span><span style="color: #9876AA">type</span><span style="color: #007700">(</span><span style="color: #DD0000">"int"</span><span style="color: #007700">), [</span><span style="color: #9876AA">2</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">]);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.arraytype-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span>      A valid C declaration as <span class="type" style="color:#EAB766">string</span>, or an instance of <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span>      which has already been created.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">dimensions</span></dt>    <dd>     <p class="para">      The dimensions of the type as <span class="type" style="color:#EAB766">array</span>.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.arraytype-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object.  </p> </div></div>
         * @return CType*/
        public static function arrayType(CType $type, array $dimensions): CType {}

/**
*<div id="ffi.addr" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::addr</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::addr</span> &mdash; <span class="dc-title">Creates an unmanaged pointer to C data</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.addr-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::addr</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></div>  <p class="para rdfs-comment">   Creates an unmanaged pointer to the C data represented by the given   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span>. The source <span class="parameter" style="color:#3A95FF">ptr</span> must survive the   resulting pointer. This function is mainly useful to pass arguments to C functions by pointer.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.addr-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the pointer to a C data structure.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.addr-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the freshly created <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> object.  </p> </div></div>
         * @return CData*/
        public static function addr(CData $ptr): CData {}

/**
*<div id="ffi.sizeof" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::sizeof</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::sizeof</span> &mdash; <span class="dc-title">Gets the size of C data or types</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.sizeof-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::sizeof</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   Returns the size of the given <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> or   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.sizeof-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the C data or type.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.sizeof-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The size of the memory area pointed at by <span class="parameter" style="color:#3A95FF">ptr</span>.  </p> </div></div>
         * @return int*/
        public static function sizeof($ptr): int {}

/**
*<div id="ffi.alignof" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::alignof</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::alignof</span> &mdash; <span class="dc-title">Gets the alignment</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.alignof-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::alignof</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="type FFI\CType" style="color:#EAB766">FFI\CType</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   Gets the alignment of the given <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> or   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.alignof-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the C data or type.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.alignof-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the alignment of the given <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> or   <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-ctype.php" class="classname">FFI\CType</a></span> object.  </p> </div></div>
         * @return int*/
        public static function alignof($ptr): int {}

/**
*<div id="ffi.memcpy" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::memcpy</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::memcpy</span> &mdash; <span class="dc-title">Copies one memory area to another</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.memcpy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::memcpy</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$to</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span>|<span class="type" style="color:#EAB766">string</span></span> <span class="parameter" style="color:#3A95FF">&$from</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Copies <span class="parameter" style="color:#3A95FF">size</span> bytes from the memory area <span class="parameter" style="color:#3A95FF">from</span>   to the memory area <span class="parameter" style="color:#3A95FF">to</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.memcpy-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">to</span></dt>    <dd>     <span>      The start of the memory area to copy to.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">from</span></dt>    <dd>     <p class="para">      The start of the memory area to copy from.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">      The number of bytes to copy.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.memcpy-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
*/
        public static function memcpy(CData $to, $from, int $size): void {}

/**
*<div id="ffi.memcmp" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::memcmp</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::memcmp</span> &mdash; <span class="dc-title">Compares memory areas</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.memcmp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::memcmp</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span></span> <span class="parameter" style="color:#3A95FF">&$ptr2</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766">int</span></div>  <p class="para rdfs-comment">   Compares <span class="parameter" style="color:#3A95FF">size</span> bytes from the memory areas <span class="parameter" style="color:#3A95FF">ptr1</span> and   <span class="parameter" style="color:#3A95FF">ptr2</span>. Both <span class="parameter" style="color:#3A95FF">ptr1</span> and <span class="parameter" style="color:#3A95FF">ptr2</span>   can be any native data structures (<span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span>) or PHP   <span class="type" style="color:#EAB766">string</span>s.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.memcmp-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr1</span></dt>    <dd>     <span>      The start of one memory area.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ptr2</span></dt>    <dd>     <p class="para">      The start of another memory area.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">      The number of bytes to compare.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.memcmp-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a value less than <span>0</span> if the contents of the memory area starting at <span class="parameter" style="color:#3A95FF">ptr1</span>   are considered less than the contents of the memory area starting at <span class="parameter" style="color:#3A95FF">ptr2</span>,   a value greater than <span>0</span> if the contents of the first memory area are considered greater than the second,   and <span>0</span> if they are equal.  </p> </div></div>
         * @return int*/
        public static function memcmp($ptr1, $ptr2, int $size): int {}

/**
*<div id="ffi.memset" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::memset</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::memset</span> &mdash; <span class="dc-title">Fills a memory area</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.memset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::memset</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Fills <span class="parameter" style="color:#3A95FF">size</span> bytes of the memory area pointed to by   <span class="parameter" style="color:#3A95FF">ptr</span> with the given byte <span class="parameter" style="color:#3A95FF">value</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.memset-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The start of the memory area to fill.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">      The byte to fill with.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">      The number of bytes to fill.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.memset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
*/
        public static function memset(CData $ptr, int $value, int $size): void {}

/**
*<div id="ffi.string" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::string</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::string</span> &mdash; <span class="dc-title">Creates a PHP string from a memory area</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.string-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::string</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$size</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766">string</span></div>  <p class="para rdfs-comment">   Creates a PHP <span class="type" style="color:#EAB766">string</span> from <span class="parameter" style="color:#3A95FF">size</span> bytes of the memory area   pointed to by <span class="parameter" style="color:#3A95FF">ptr</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.string-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The start of the memory area from which to create a <span class="type" style="color:#EAB766">string</span>.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">      The number of bytes to copy to the <span class="type" style="color:#EAB766">string</span>.      If <span class="parameter" style="color:#3A95FF">size</span> is omitted or <strong><span>null</span></strong>, <span class="parameter" style="color:#3A95FF">ptr</span> must be a zero terminated      array of C <span>char</span>.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.string-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The freshly created PHP <span class="type" style="color:#EAB766">string</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-ffi.string-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">size</span> is nullable now; previously, its default was       <span>0</span>.      </td>     </tr>    </tbody>     </table> </div></div>
         * @return string*/
        public static function string(CData $ptr, ?int $size = null): string {}

/**
*<div id="ffi.isnull" class="refentry"> <div class="refnamediv">  <h1 class="refname">FFI::isNull</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">FFI::isNull</span> &mdash; <span class="dc-title">Checks whether a FFI\CData is a null pointer</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-ffi.isnull-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>FFI::isNull</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="type FFI\CData" style="color:#EAB766">FFI\CData</a></span> <span class="parameter" style="color:#3A95FF">&$ptr</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   Checks whether a FFI\CData is a null pointer.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-ffi.isnull-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">ptr</span></dt>    <dd>     <span>      The handle of the pointer to a C data structure.     </span>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-ffi.isnull-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns whether a <span class="classname"><a href="https://www.php.net/manual/zh/class.ffi-cdata.php" class="classname">FFI\CData</a></span> is a null pointer.  </p> </div></div>
         * @return bool*/
        public static function isNull(CData $ptr): bool {}
    }
}

namespace FFI {
/**
*<div id="class.exception" class="reference"> <h1 class="title">Exception</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>   <div class="section" id="exception.intro">   <h2 class="title">简介</h2>   <p class="para">    <span class="ooclass"><span class="classname"><strong class="classname">Exception</strong></span></span>是所有用户级异常的基类。   </p>  </div>  <div class="section" id="exception.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">Exception</strong></strong>             <span class="modifier">implements</span>      <a href="https://www.php.net/manual/zh/class.throwable.php" class="interfacename">Throwable</a> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$message</span><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$code</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$previous</span><span class="initializer"> = <strong><span>null</span></strong></span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.getmessage.php" class="methodname" style="color:#CC7832">getMessage</a></span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.getprevious.php" class="methodname" style="color:#CC7832">getPrevious</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.getcode.php" class="methodname" style="color:#CC7832">getCode</a></span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.getfile.php" class="methodname" style="color:#CC7832">getFile</a></span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.getline.php" class="methodname" style="color:#CC7832">getLine</a></span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.gettrace.php" class="methodname" style="color:#CC7832">getTrace</a></span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.gettraceasstring.php" class="methodname" style="color:#CC7832">getTraceAsString</a></span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.tostring.php" class="methodname" style="color:#CC7832">__toString</a></span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/exception.clone.php" class="methodname" style="color:#CC7832">__clone</a></span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>   }</div>  </div>  <div class="section" id="exception.props">   <h2 class="title">属性</h2>   <dl>         <dt id="exception.props.message"><var class="varname">message</var></dt>     <dd>      <p class="para">异常消息内容</p>     </dd>             <dt id="exception.props.code"><var class="varname">code</var></dt>     <dd>      <p class="para">异常代码</p>     </dd>             <dt id="exception.props.file"><var class="varname">file</var></dt>     <dd>      <p class="para">抛出异常的文件名</p>     </dd>             <dt id="exception.props.line"><var class="varname">line</var></dt>     <dd>      <p class="para">抛出异常在该文件中的行号</p>     </dd>             <dt id="exception.props.previous"><var class="varname">previous</var></dt>     <dd>      <p class="para">之前抛出的异常</p>     </dd>             <dt id="exception.props.string"><var class="varname">string</var></dt>     <dd>      <p class="para">字符串形式的堆栈跟踪</p>     </dd>             <dt id="exception.props.trace"><var class="varname">trace</var></dt>     <dd>      <p class="para">数组形式的堆栈跟踪</p>     </dd>       </dl>  </div>  </div>              <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Exception::__construct} — 异常构造函数</li><li>{@link Exception::getMessage} — 获取异常消息内容</li><li>{@link Exception::getPrevious} — 返回前一个 Throwable</li><li>{@link Exception::getCode} — 获取异常代码</li><li>{@link Exception::getFile} — 创建异常时的程序文件名称</li><li>{@link Exception::getLine} — 获取创建的异常所在文件中的行号</li><li>{@link Exception::getTrace} — 获取异常追踪信息</li><li>{@link Exception::getTraceAsString} — 获取字符串类型的异常追踪信息</li><li>{@link Exception::__toString} — 将异常对象转换为字符串</li><li>{@link Exception::__clone} — 异常克隆</li></ul></div>
*/
    class Exception extends \Error {}

    /**
     * An exception that occurs when parsing invalid header files.
     *
     * @since 7.4
     */
    class ParserException extends Exception {}

    /**
     * Proxy object that provides access to compiled structures.
     *
     * In the case that CData is a wrapper over a scalar, it contains an
     * additional "cdata" property.
     *
     * @property int|float|bool|null|string|CData $cdata
     *
     * In the case that the CData is a wrapper over an arbitrary C structure,
     * then it allows reading and writing to the fields defined by
     * this structure.
     *
     * @method mixed __get(string $name)
     * @method mixed __set(string $name, mixed $value)
     *
     * In the case that CData is a wrapper over an array, it is an
     * implementation of the {@see \Traversable}, {@see \Countable},
     * and {@see \ArrayAccess}
     *
     * @mixin \Traversable
     * @mixin \Countable
     * @mixin \ArrayAccess
     *
     * In the case when CData is a wrapper over a function pointer, it can
     * be called.
     *
     * @method mixed __invoke(mixed ...$args)
     *
     * @since 7.4
     */
    class CData
    {
        /**
         * Note that this method does not physically exist and is only required
         * for correct type inference.
         *
         * @param int $offset
         * @return bool
         */
        private function offsetExists(int $offset) {}

        /**
         * Note that this method does not physically exist and is only required
         * for correct type inference.
         *
         * @param int $offset
         * @return CData|int|float|bool|null|string
         */
        private function offsetGet(int $offset) {}

        /**
         * Note that this method does not physically exist and is only required
         * for correct type inference.
         *
         * @param int $offset
         * @param CData|int|float|bool|null|string $value
         */
        private function offsetSet(int $offset, $value) {}

        /**
         * Note that this method does not physically exist and is only required
         * for correct type inference.
         *
         * @param int $offset
         */
        private function offsetUnset(int $offset) {}

        /**
         * Note that this method does not physically exist and is only required
         * for correct type inference.
         *
         * @return int
         */
        private function count(): int {}
    }

    /**
     * Class containing C type information.
     *
     * @since 7.4
     */
    class CType
    {
        /**
         * @since 8.1
         */
        public const TYPE_VOID = 0;

        /**
         * @since 8.1
         */
        public const TYPE_FLOAT = 1;

        /**
         * @since 8.1
         */
        public const TYPE_DOUBLE = 2;

        /**
         * Please note that this constant may NOT EXIST if there is
         * no long double support on the current platform.
         *
         * @since 8.1
         */
        public const TYPE_LONGDOUBLE = 3;

        /**
         * @since 8.1
         */
        public const TYPE_UINT8 = 4;

        /**
         * @since 8.1
         */
        public const TYPE_SINT8 = 5;

        /**
         * @since 8.1
         */
        public const TYPE_UINT16 = 6;

        /**
         * @since 8.1
         */
        public const TYPE_SINT16 = 7;

        /**
         * @since 8.1
         */
        public const TYPE_UINT32 = 8;

        /**
         * @since 8.1
         */
        public const TYPE_SINT32 = 9;

        /**
         * @since 8.1
         */
        public const TYPE_UINT64 = 10;

        /**
         * @since 8.1
         */
        public const TYPE_SINT64 = 11;

        /**
         * @since 8.1
         */
        public const TYPE_ENUM = 12;

        /**
         * @since 8.1
         */
        public const TYPE_BOOL = 13;

        /**
         * @since 8.1
         */
        public const TYPE_CHAR = 14;

        /**
         * @since 8.1
         */
        public const TYPE_POINTER = 15;

        /**
         * @since 8.1
         */
        public const TYPE_FUNC = 16;

        /**
         * @since 8.1
         */
        public const TYPE_ARRAY = 17;

        /**
         * @since 8.1
         */
        public const TYPE_STRUCT = 18;

        /**
         * @since 8.1
         */
        public const ATTR_CONST = 1;

        /**
         * @since 8.1
         */
        public const ATTR_INCOMPLETE_TAG = 2;

        /**
         * @since 8.1
         */
        public const ATTR_VARIADIC = 4;

        /**
         * @since 8.1
         */
        public const ATTR_INCOMPLETE_ARRAY = 8;

        /**
         * @since 8.1
         */
        public const ATTR_VLA = 16;

        /**
         * @since 8.1
         */
        public const ATTR_UNION = 32;

        /**
         * @since 8.1
         */
        public const ATTR_PACKED = 64;

        /**
         * @since 8.1
         */
        public const ATTR_MS_STRUCT = 128;

        /**
         * @since 8.1
         */
        public const ATTR_GCC_STRUCT = 256;

        /**
         * @since 8.1
         */
        public const ABI_DEFAULT = 0;

        /**
         * @since 8.1
         */
        public const ABI_CDECL = 1;

        /**
         * @since 8.1
         */
        public const ABI_FASTCALL = 2;

        /**
         * @since 8.1
         */
        public const ABI_THISCALL = 3;

        /**
         * @since 8.1
         */
        public const ABI_STDCALL = 4;

        /**
         * @since 8.1
         */
        public const ABI_PASCAL = 5;

        /**
         * @since 8.1
         */
        public const ABI_REGISTER = 6;

        /**
         * @since 8.1
         */
        public const ABI_MS = 7;

        /**
         * @since 8.1
         */
        public const ABI_SYSV = 8;

        /**
         * @since 8.1
         */
        public const ABI_VECTORCALL = 9;

        /**
         * Returns the name of the type.
         *
         * @since 8.0
         * @return string
         */
        public function getName(): string {}

        /**
         * Returns the identifier of the root type.
         *
         * Value may be one of:
         *  - {@see CType::TYPE_VOID}
         *  - {@see CType::TYPE_FLOAT}
         *  - {@see CType::TYPE_DOUBLE}
         *  - {@see CType::TYPE_LONGDOUBLE}
         *  - {@see CType::TYPE_UINT8}
         *  - {@see CType::TYPE_SINT8}
         *  - {@see CType::TYPE_UINT16}
         *  - {@see CType::TYPE_SINT16}
         *  - {@see CType::TYPE_UINT32}
         *  - {@see CType::TYPE_SINT32}
         *  - {@see CType::TYPE_UINT64}
         *  - {@see CType::TYPE_SINT64}
         *  - {@see CType::TYPE_ENUM}
         *  - {@see CType::TYPE_BOOL}
         *  - {@see CType::TYPE_CHAR}
         *  - {@see CType::TYPE_POINTER}
         *  - {@see CType::TYPE_FUNC}
         *  - {@see CType::TYPE_ARRAY}
         *  - {@see CType::TYPE_STRUCT}
         *
         * @since 8.1
         * @return int
         */
        public function getKind(): int {}

        /**
         * Returns the size of the type in bytes.
         *
         * @since 8.1
         * @return int
         */
        public function getSize(): int {}

        /**
         * Returns the alignment of the type in bytes.
         *
         * @since 8.1
         * @return int
         */
        public function getAlignment(): int {}

        /**
         * Returns the bit-mask of type attributes.
         *
         * @since 8.1
         * @return int
         */
        public function getAttributes(): int {}

        /**
         * Returns the identifier of the enum value type.
         *
         * Value may be one of:
         *  - {@see CType::TYPE_UINT32}
         *  - {@see CType::TYPE_UINT64}
         *
         * @since 8.1
         * @return int
         * @throws Exception In the case that the type is not an enumeration.
         */
        public function getEnumKind(): int {}

        /**
         * Returns the type of array elements.
         *
         * @since 8.1
         * @return CType
         * @throws Exception In the case that the type is not an array.
         */
        public function getArrayElementType(): CType {}

        /**
         * Returns the size of an array.
         *
         * @since 8.1
         * @return int
         * @throws Exception In the case that the type is not an array.
         */
        public function getArrayLength(): int {}

        /**
         * Returns the original type of the pointer.
         *
         * @since 8.1
         * @return CType
         * @throws Exception In the case that the type is not a pointer.
         */
        public function getPointerType(): CType {}

        /**
         * Returns the field string names of a structure or union.
         *
         * @since 8.1
         * @return array<string>
         * @throws Exception In the case that the type is not a struct or union.
         */
        public function getStructFieldNames(): array {}

        /**
         * Returns the offset of the structure by the name of this field. In
         * the case that the type is a union, then for each field of this type
         * the offset will be equal to 0.
         *
         * @since 8.1
         * @param string $name
         * @return int
         * @throws Exception In the case that the type is not a struct or union.
         */
        public function getStructFieldOffset(string $name): int {}

        /**
         * Returns the field type of a structure or union.
         *
         * @since 8.1
         * @param string $name
         * @return CType
         * @throws Exception In the case that the type is not a struct or union.
         */
        public function getStructFieldType(string $name): CType {}

        /**
         * Returns the application binary interface (ABI) identifier with which
         * you can call the function.
         *
         * Value may be one of:
         *  - {@see CType::ABI_DEFAULT}
         *  - {@see CType::ABI_CDECL}
         *  - {@see CType::ABI_FASTCALL}
         *  - {@see CType::ABI_THISCALL}
         *  - {@see CType::ABI_STDCALL}
         *  - {@see CType::ABI_PASCAL}
         *  - {@see CType::ABI_REGISTER}
         *  - {@see CType::ABI_MS}
         *  - {@see CType::ABI_SYSV}
         *  - {@see CType::ABI_VECTORCALL}
         *
         * @since 8.1
         * @return int
         * @throws Exception In the case that the type is not a function.
         */
        public function getFuncABI(): int {}

        /**
         * Returns the return type of the function.
         *
         * @since 8.1
         * @return CType
         * @throws Exception In the case that the type is not a function.
         */
        public function getFuncReturnType(): CType {}

        /**
         * Returns the number of arguments to the function.
         *
         * @since 8.1
         * @return int
         * @throws Exception In the case that the type is not a function.
         */
        public function getFuncParameterCount(): int {}

        /**
         * Returns the type of the function argument by its numeric index.
         *
         * @since 8.1
         * @param int $index
         * @return CType
         * @throws Exception In the case that the type is not a function.
         */
        public function getFuncParameterType(int $index): CType {}
    }
}
