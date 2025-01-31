<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrdocumentfield" class="reference"> <h1 class="title">The SolrDocumentField class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrdocumentfield.intro">   <h2 class="title">简介</h2>   <p class="para">    This represents a field in a Solr document. All its properties are read-only.   </p>  </div>  <div class="section" id="solrdocumentfield.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">SolrDocumentField</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.name">$<var class="varname">name</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">float</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.boost">$<var class="varname">boost</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.values">$<var class="varname">values</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrdocumentfield.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrdocumentfield.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>()</div>   }</div>  </div>    <div class="section" id="solrdocumentfield.props">   <h2 class="title">属性</h2>   <dl>         <dt id="solrdocumentfield.props.name"><var class="varname">name</var></dt>     <dd>      <p class="para">The name of the field.</p>     </dd>             <dt id="solrdocumentfield.props.boost"><var class="varname">boost</var></dt>     <dd>      <p class="para">The boost value for the field</p>     </dd>             <dt id="solrdocumentfield.props.values"><var class="varname">values</var></dt>     <dd>      <p class="para">An array of values for this field</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrDocumentField::__construct} — Constructor</li><li>{@link SolrDocumentField::__destruct} — Destructor</li></ul></div>
*/
final class SolrDocumentField
{
    /** @var string [readonly] The name of the field. */
    public $name;

    /** @var string [readonly] The boost value for the field */
    public $boost;

    /** @var string [readonly] An array of values for this field */
    public $values;

    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * SolrDocument constructor.
     * @link https://php.net/manual/en/solrdocumentfield.construct.php
     */
    public function __construct() {}

    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * Destructor
     * @link https://php.net/manual/en/solrdocumentfield.destruct.php
     */
    public function __destruct() {}
}
