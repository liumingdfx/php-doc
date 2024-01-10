<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrupdateresponse" class="reference"> <h1 class="title">The SolrUpdateResponse class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrupdateresponse.intro">   <h2 class="title">简介</h2>   <p class="para">    Represents a response to an update request.   </p>  </div>  <div class="section" id="solrupdateresponse.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">SolrUpdateResponse</strong>     </span>          <span class="ooclass">      <span class="modifier">extends</span>       <a href="https://www.php.net/manual/zh/class.solrresponse.php" class="classname">SolrResponse</a>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766">int</span>      <var class="fieldsynopsis_varname"><a href="https://www.php.net/manual/zh/class.solrupdateresponse.php#solrupdateresponse.constants.parse-solr-obj"><var class="varname">PARSE_SOLR_OBJ</var></a></var><span class="initializer"> = 0</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766">int</span>      <var class="fieldsynopsis_varname"><a href="https://www.php.net/manual/zh/class.solrupdateresponse.php#solrupdateresponse.constants.parse-solr-doc"><var class="varname">PARSE_SOLR_DOC</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766">int</span>      <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_OBJ</var>}</var><span class="initializer"> = 0</span>;</div><div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766">int</span>      <var class="fieldsynopsis_varname">{@link <var class="varname">SolrResponse::PARSE_SOLR_DOC</var>}</var><span class="initializer"> = 1</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status">$<var class="varname">http_status</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.parser-mode">$<var class="varname">parser_mode</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.success">$<var class="varname">success</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-status-message">$<var class="varname">http_status_message</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-request-url">$<var class="varname">http_request_url</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request-headers">$<var class="varname">http_raw_request_headers</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-request">$<var class="varname">http_raw_request</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response-headers">$<var class="varname">http_raw_response_headers</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-raw-response">$<var class="varname">http_raw_response</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.solrresponse.php#solrresponse.props.http-digested-response">$<var class="varname">http_digested_response</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrupdateresponse.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrupdateresponse.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>()</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getDigestedResponse}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatus}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getHttpStatusMessage}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequest}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawRequestHeaders}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponse}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRawResponseHeaders}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getRequestUrl}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::getResponse}</span>(): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.solrobject.php" class="type SolrObject" style="color:#EAB766">SolrObject</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::setParseMode}</span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$parser_mode</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link SolrResponse::success}</span>(): <span class="type" style="color:#EAB766">bool</span></div>   }</div>  </div>    <div class="section" id="solrupdateresponse.constants">   <h2 class="title">预定义常量</h2>   <div class="section" id="solrupdateresponse.constants.types">    <h2 class="title">SolrUpdateResponse Class Constants</h2>    <dl>           <dt id="solrupdateresponse.constants.parse-solr-obj"><strong><span>SolrUpdateResponse::PARSE_SOLR_OBJ</span></strong></dt>      <dd>       <p class="para">Documents should be parsed as SolrObject instances</p>      </dd>                <dt id="solrupdateresponse.constants.parse-solr-doc"><strong><span>SolrUpdateResponse::PARSE_SOLR_DOC</span></strong></dt>      <dd>       <p class="para">Documents should be parsed as SolrDocument instances.</p>      </dd>         </dl>   </div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrUpdateResponse::__construct} — Constructor</li><li>{@link SolrUpdateResponse::__destruct} — Destructor</li></ul></div>
*/
final class SolrUpdateResponse extends SolrResponse
{
    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * SolrUpdateResponse constructor.
     * @link https://php.net/manual/en/solrupdateresponse.construct.php
     */
    public function __construct() {}

    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * Destructor
     * @link https://php.net/manual/en/solrupdateresponse.destruct.php
     */
    public function __destruct() {}
}
