<?php

use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

/**
*<div id="class.reflectiontype" class="reference"> <h1 class="title">ReflectionType 类</h1>  <div class="partintro"><p class="verinfo">(PHP 7, PHP 8)</p>  <div class="section" id="reflectiontype.intro">   <h2 class="title">简介</h2>   <p class="para">    <span class="classname"><strong class="classname">ReflectionType</strong></span> 类报告有关函数的参数/返回类型以及类的属性类型的信息。Reflection    扩展声明了以下子类型：    <ul class="simplelist">     <li class="member"><span class="classname"><a href="https://www.php.net/manual/zh/class.reflectionnamedtype.php" class="classname">ReflectionNamedType</a></span>（自 PHP 7.1.0 起）</li>     <li class="member"><span class="classname"><a href="https://www.php.net/manual/zh/class.reflectionuniontype.php" class="classname">ReflectionUnionType</a></span>（自 PHP 8.0.0 起）</li>     <li class="member"><span class="classname"><a href="https://www.php.net/manual/zh/class.reflectionintersectiontype.php" class="classname">ReflectionIntersectionType</a></span>（自 PHP 8.1.0 起）</li>    </ul>   </p>  </div>  <div class="section" id="reflectiontype.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">abstract</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ReflectionType</strong></strong>             <span class="modifier">implements</span>      <a href="https://www.php.net/manual/zh/class.stringable.php" class="interfacename">Stringable</a> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/reflectiontype.allowsnull.php" class="methodname" style="color:#CC7832">allowsNull</a></span>(): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/reflectiontype.tostring.php" class="methodname" style="color:#CC7832">__toString</a></span>(): <span class="type" style="color:#EAB766">string</span></div>   }</div>  </div>  <div class="section" id="reflectiontype.changelog">   <h2 class="title">更新日志</h2>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>      </thead>      <tbody class="tbody">       <tr>        <td>8.0.0</td>        <td>         <span class="classname"><strong class="classname">ReflectionType</strong></span> 已成为抽象类，<span class="function"><strong style="color:#CC7832">ReflectionType::isBuiltin()</strong></span>         已移至 <span class="function">{@link ReflectionNamedType::isBuiltin()}</span>。        </td>       </tr>      </tbody>         </table>   </p>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link ReflectionType::allowsNull} — Checks if null is allowed</li><li>{@link ReflectionType::__toString} — To string</li></ul></div>
*/
abstract class ReflectionType implements Stringable
{
/**
*<div id="reflectiontype.allowsnull" class="refentry"> <div class="refnamediv">  <h1 class="refname">ReflectionType::allowsNull</h1>  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionType::allowsNull</span> &mdash; <span class="dc-title">Checks if null is allowed</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-reflectiontype.allowsnull-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>ReflectionType::allowsNull</strong></span>(): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   Checks whether the parameter allows <strong><span>null</span></strong>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-reflectiontype.allowsnull-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-reflectiontype.allowsnull-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <strong><span>true</span></strong> if <strong><span>null</span></strong> is allowed, otherwise <strong><span>false</span></strong>  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-reflectiontype.allowsnull-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="methodname" style="color:#CC7832"><strong>ReflectionType::allowsNull()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #9876AA">someFunction</span><span style="color: #007700">(</span><span style="color: #9876AA">string $param</span><span style="color: #007700">, </span><span style="color: #9876AA">stdClass $param2 </span><span style="color: #007700">= </span><span style="color: #9876AA">null</span><span style="color: #007700">) {}<br /><br /></span><span style="color: #9876AA">$reflectionFunc </span><span style="color: #007700">= new </span><span style="color: #9876AA">ReflectionFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'someFunction'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$reflectionParams </span><span style="color: #007700">= </span><span style="color: #9876AA">$reflectionFunc</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getParameters</span><span style="color: #007700">();<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$reflectionParams</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">getType</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">allowsNull</span><span style="color: #007700">());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$reflectionParams</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">getType</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">allowsNull</span><span style="color: #007700">());</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>bool(false)<br>bool(true)<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-reflectiontype.allowsnull-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionNamedType::isBuiltin()} - 检查它是否是内置类型</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionType::__toString()} - To string</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link ReflectionParameter::getType()} - Gets a parameter's type</span></li>   </ul>  </span> </div></div>
     * @return bool Returns {@see true} if {@see null} is allowed, otherwise {@see false}*/
    public function allowsNull(): bool {}

    /**
     * Checks if it is a built-in type
     *
     * @link https://php.net/manual/en/reflectionnamedtype.isbuiltin.php
     * @return bool Returns {@see true} if it's a built-in type, otherwise {@see false}
     * @since 7.0
     * @removed 8.0 this method has been removed from the {@see ReflectionType}
     * class and moved to the {@see ReflectionNamedType} child.
     */
    #[Pure]
    public function isBuiltin() {}

    /**
     * To string
     *
     * @link https://php.net/manual/en/reflectiontype.tostring.php
     * @return string Returns the type of the parameter.
     * @since 7.0
     * @see ReflectionNamedType::getName()
     */
    #[Deprecated(since: "7.1")]
    public function __toString(): string {}

    /**
     * Cloning of this class is prohibited
     *
     * @return void
     */
    #[PhpStormStubsElementAvailable(from: "5.4", to: "8.0")]
    final private function __clone(): void {}

    /**
     * Cloning of this class is prohibited
     *
     * @return void
     */
    #[PhpStormStubsElementAvailable(from: "8.1")]
    private function __clone(): void {}
}
