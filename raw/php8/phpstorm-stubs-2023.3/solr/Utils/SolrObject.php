<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrobject" class="reference"> <h1 class="title">The SolrObject class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrobject.intro">   <h2 class="title">简介</h2>   <p class="para">    This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.   </p>  </div>  <div class="section" id="solrobject.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">SolrObject</strong>     </span>          <span class="oointerface"><span class="modifier">implements</span>        <a href="https://www.php.net/manual/zh/class.arrayaccess.php" class="interfacename">ArrayAccess</a></span> {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.getpropertynames.php" class="methodname" style="color:#CC7832">getPropertyNames</a></span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.offsetexists.php" class="methodname" style="color:#CC7832">offsetExists</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.offsetget.php" class="methodname" style="color:#CC7832">offsetGet</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.offsetset.php" class="methodname" style="color:#CC7832">offsetSet</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_value</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.offsetunset.php" class="methodname" style="color:#CC7832">offsetUnset</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/solrobject.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>()</div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrObject::__construct} — Creates Solr object</li><li>{@link SolrObject::__destruct} — Destructor</li><li>{@link SolrObject::getPropertyNames} — Returns an array of all the names of the properties</li><li>{@link SolrObject::offsetExists} — Checks if the property exists</li><li>{@link SolrObject::offsetGet} — Used to retrieve a property</li><li>{@link SolrObject::offsetSet} — Sets the value for a property</li><li>{@link SolrObject::offsetUnset} — Unsets the value for the property</li></ul></div>
*/
final class SolrObject implements ArrayAccess
{
    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * SolrObject constructor.
     * @link https://php.net/manual/en/solrobject.construct.php
     */
    public function __construct() {}

    /**
     * (PECL solr &gt;= 0.9.2)<br/>
     * Destructor
     * @link https://php.net/manual/en/solrobject.destruct.php
     */
    public function __destruct() {}

/**
*<div id="solrobject.getpropertynames" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrObject::getPropertyNames</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrObject::getPropertyNames</span> &mdash; <span class="dc-title">Returns an array of all the names of the properties</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrobject.getpropertynames-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrObject::getPropertyNames</strong></span>(): <span class="type" style="color:#EAB766">array</span></div>  <p class="para rdfs-comment">   Returns an array of all the names of the properties  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrobject.getpropertynames-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrobject.getpropertynames-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array.  </p> </div></div>
     * @return array <p>*/
    public function getPropertyNames() {}

/**
*<div id="solrobject.offsetexists" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrObject::offsetExists</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrObject::offsetExists</span> &mdash; <span class="dc-title">Checks if the property exists</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrobject.offsetexists-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrObject::offsetExists</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   Checks if the property exists. This is used when the object is treated as an array.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrobject.offsetexists-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">property_name</span></dt>     <dd>      <p class="para">       The name of the property.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrobject.offsetexists-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div></div>
     * @return bool <p>*/
    public function offsetExists($property_name) {}

/**
*<div id="solrobject.offsetget" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrObject::offsetGet</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrObject::offsetGet</span> &mdash; <span class="dc-title">Used to retrieve a property</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrobject.offsetget-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrObject::offsetGet</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Used to get the value of a property. This is used when the object is treated as an array.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrobject.offsetget-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">property_name</span></dt>     <dd>      <p class="para">       Name of the property.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrobject.offsetget-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the property value.  </p> </div></div>
     * @return SolrDocumentField <p>*/
    public function offsetGet($property_name) {}

/**
*<div id="solrobject.offsetset" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrObject::offsetSet</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrObject::offsetSet</span> &mdash; <span class="dc-title">Sets the value for a property</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrobject.offsetset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrObject::offsetSet</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_value</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Sets the value for a property. This is used when the object is treated as an array. This object is read-only. This should never be attempted.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrobject.offsetset-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">property_name</span></dt>     <dd>      <p class="para">       The name of the property.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">property_value</span></dt>     <dd>      <p class="para">       The new value.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrobject.offsetset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   None.  </p> </div></div>
*/
    public function offsetSet($property_name, $property_value) {}

/**
*<div id="solrobject.offsetunset" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrObject::offsetUnset</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrObject::offsetUnset</span> &mdash; <span class="dc-title">Unsets the value for the property</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-solrobject.offsetunset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrObject::offsetUnset</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$property_name</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Unsets the value for the property. This is used when the object is treated as an array. This object is read-only. This should never be attempted.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-solrobject.offsetunset-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">property_name</span></dt>     <dd>      <p class="para">       The name of the property.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-solrobject.offsetunset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span>true</span></strong>， 或者在失败时返回 <strong><span>false</span></strong>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-solrobject.offsetunset-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="methodname" style="color:#CC7832"><strong>SolrObject::offsetUnset()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">// ... <br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>...<br></span></div>    </div>   </div>  </span> </div></div>
     * @return bool*/
    public function offsetUnset($property_name) {}
}
