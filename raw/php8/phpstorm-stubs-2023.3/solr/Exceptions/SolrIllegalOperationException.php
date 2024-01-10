<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrillegaloperationexception" class="reference"> <h1 class="title">The SolrIllegalOperationException class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrillegaloperationexception.intro">   <h2 class="title">简介</h2>   <p class="para">    This object is thrown when an illegal or unsupported operation is performed on an object.   </p>  </div>  <div class="section" id="solrillegaloperationexception.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">SolrIllegalOperationException</strong>     </span>          <span class="ooclass">      <span class="modifier">extends</span>       <a href="https://www.php.net/manual/zh/class.solrexception.php" class="classname">SolrException</a>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>    <div class="fieldsynopsis">     <span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrexception.php#solrexception.props.sourceline">$<var class="varname">sourceline</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrexception.php#solrexception.props.sourcefile">$<var class="varname">sourcefile</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrexception.php#solrexception.props.zif-name">$<var class="varname">zif_name</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrillegaloperationexception.getinternalinfo.php" class="methodname" style="color:#CC7832">getInternalInfo</a></span>(): <span class="type" style="color:#EAB766">array</span></div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrException::getInternalInfo}</span>(): <span class="type" style="color:#EAB766">array</span></div>   }</div>  </div>   </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrIllegalOperationException::getInternalInfo} — Returns internal information where the Exception was thrown</li></ul></div>
*/
class SolrIllegalOperationException extends SolrException
{
/**
*<div id="solrillegaloperationexception.getinternalinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrIllegalOperationException::getInternalInfo</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrIllegalOperationException::getInternalInfo</span> &mdash; <span class="dc-title">Returns internal information where the Exception was thrown</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrillegaloperationexception.getinternalinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrIllegalOperationException::getInternalInfo</strong></span>(): <span class="type" style="color:#EAB766">array</span></div>  <p class="para rdfs-comment">   Returns internal information where the Exception was thrown.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrillegaloperationexception.getinternalinfo-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrillegaloperationexception.getinternalinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.  </p> </div></div>
     * @return array <p>*/
    public function getInternalInfo() {}
}
