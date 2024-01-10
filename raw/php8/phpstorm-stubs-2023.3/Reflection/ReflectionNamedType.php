<?php

use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

/**
*<div id="class.reflectionnamedtype" class="reference"> <h1 class="title">ReflectionNamedType 类</h1>  <div class="partintro"><p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p>  <div class="section" id="reflectionnamedtype.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="reflectionnamedtype.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionNamedType</strong></strong>             <span class="modifier">extends</span>      <a href="https://www.php.net/manual/zh/class.reflectiontype.php" class="classname">ReflectionType</a>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/reflectionnamedtype.getname.php" class="methodname" style="color:#CC7832">getName</a></span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/reflectionnamedtype.isbuiltin.php" class="methodname" style="color:#CC7832">isBuiltin</a></span>(): <span class="type" style="color:#EAB766">bool</span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link ReflectionType::allowsNull}</span>(): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link ReflectionType::__toString}</span>(): <span class="type" style="color:#EAB766">string</span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionNamedType::getName} — 以字符串形式获取类型的名称</li><li>{@link ReflectionNamedType::isBuiltin} — 检查它是否是内置类型</li></ul></div>
*/
class ReflectionNamedType extends ReflectionType
{
/**
*<div id="reflectionnamedtype.getname" class="refentry"> <div class="refnamediv">  <h1 class="refname">ReflectionNamedType::getName</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionNamedType::getName</span> &mdash; <span class="dc-title">以字符串形式获取类型的名称</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-reflectionnamedtype.getname-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>ReflectionNamedType::getName</strong></span>(): <span class="type" style="color:#EAB766">string</span></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-reflectionnamedtype.getname-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-reflectionnamedtype.getname-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回被反射的类型的名称。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-reflectionnamedtype.getname-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionType::__toString()} - To string</span></li>   </ul>  </span> </div></div>
     * @return string Returns the text of the type hint.*/
    public function getName() {}

/**
*<div id="reflectionnamedtype.isbuiltin" class="refentry"> <div class="refnamediv">  <h1 class="refname">ReflectionNamedType::isBuiltin</h1>  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionNamedType::isBuiltin</span> &mdash; <span class="dc-title">检查它是否是内置类型</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-reflectionnamedtype.isbuiltin-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>ReflectionNamedType::isBuiltin</strong></span>(): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   检查该类型是否是 PHP 中的内置类型。   内置类型是任何不是类、接口或 trait 的类型。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-reflectionnamedtype.isbuiltin-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-reflectionnamedtype.isbuiltin-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果是内置类型返回 <strong><span>true</span></strong>，否则为 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-reflectionnamedtype.isbuiltin-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="methodname" style="color:#CC7832"><strong>ReflectionNamedType::isBuiltin()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #9876AA">SomeClass </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #9876AA">someFunction</span><span style="color: #007700">(</span><span style="color: #9876AA">string $param</span><span style="color: #007700">, </span><span style="color: #9876AA">SomeClass $param2</span><span style="color: #007700">, </span><span style="color: #9876AA">stdClass $param3</span><span style="color: #007700">) {}<br /><br /></span><span style="color: #9876AA">$reflectionFunc </span><span style="color: #007700">= new </span><span style="color: #9876AA">ReflectionFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'someFunction'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$reflectionParams </span><span style="color: #007700">= </span><span style="color: #9876AA">$reflectionFunc</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getParameters</span><span style="color: #007700">();<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$reflectionParams</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">getType</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">isBuiltin</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$reflectionParams</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">getType</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">isBuiltin</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$reflectionParams</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">getType</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">isBuiltin</span><span style="color: #007700">());</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>bool(true)<br>bool(false)<br>bool(false)<br></span></div>    </div>   </div>  </span>  <p class="para">   注意：<span class="methodname" style="color:#CC7832"><strong>ReflectionNamedType::isBuiltin()</strong></span> 方法不区分内部类和   自定义类。为了区分，应该在返回的类名上使用   <span class="methodname" style="color:#CC7832">{@link ReflectionClass::isInternal()}</span> 方法。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-reflectionnamedtype.isbuiltin-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionType::allowsNull()} - Checks if null is allowed</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionType::__toString()} - To string</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionClass::isInternal()} - 检查类是否由扩展或核心在内部定义</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionParameter::getType()} - Gets a parameter's type</span></li>   </ul>  </span> </div></div>
     * @return bool Returns {@see true} if it's a built-in type, otherwise {@see false}*/
    public function isBuiltin(): bool {}
}
