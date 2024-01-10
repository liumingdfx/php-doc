<?php

/**
*<div id="class.reflectionexception" class="reference"> <h1 class="title">ReflectionException 类</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="reflectionexception.intro">   <h2 class="title">简介</h2>   <p class="para">    ReflectionException 类。   </p>  </div>  <div class="section" id="reflectionexception.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">ReflectionException</strong></strong>             <span class="modifier">extends</span>      <a href="https://www.php.net/manual/zh/class.exception.php" class="classname">Exception</a>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>    <div class="fieldsynopsis">     <span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::__construct}</span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$message</span><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$code</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$previous</span><span class="initializer"> = <strong><span>null</span></strong></span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>   }</div>  </div>   </div></div>
*/
class ReflectionException extends Exception {}
