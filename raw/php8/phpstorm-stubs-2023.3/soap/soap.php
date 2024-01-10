<?php

// Start of soap v.
use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

/**
*<div id="class.soapclient" class="reference"> <h1 class="title">The <span class="classname"><a href="https://www.php.net/manual/zh/class.soapclient.php" class="classname">SoapClient</a></span> class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapclient.intro">   <h2 class="title">简介</h2>   <p class="para">    The SoapClient class provides a client for <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a>,    <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> servers.    It can be used in WSDL or non-WSDL mode.   </p>  </div>  <div class="section" id="soapclient.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapClient</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.uri">$<var class="varname">uri</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.style">$<var class="varname">style</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.use">$<var class="varname">use</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.location">$<var class="varname">location</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = false</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.compression">$<var class="varname">compression</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">resource</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.sdl">$<var class="varname">sdl</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">resource</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.typemap">$<var class="varname">typemap</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">resource</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.httpsocket">$<var class="varname">httpsocket</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">resource</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.httpurl">$<var class="varname">httpurl</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-login">$<var class="varname">_login</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-password">$<var class="varname">_password</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-use-digest">$<var class="varname">_use_digest</var></a></var><span class="initializer"> = false</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-digest">$<var class="varname">_digest</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-proxy-host">$<var class="varname">_proxy_host</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-proxy-port">$<var class="varname">_proxy_port</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-proxy-login">$<var class="varname">_proxy_login</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-proxy-password">$<var class="varname">_proxy_password</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-exceptions">$<var class="varname">_exceptions</var></a></var><span class="initializer"> = true</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-encoding">$<var class="varname">_encoding</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-classmap">$<var class="varname">_classmap</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-features">$<var class="varname">_features</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-connection-timeout">$<var class="varname">_connection_timeout</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">resource</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-stream-context">$<var class="varname">_stream_context</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-user-agent">$<var class="varname">_user_agent</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-keep-alive">$<var class="varname">_keep_alive</var></a></var><span class="initializer"> = true</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-ssl-method">$<var class="varname">_ssl_method</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-soap-version">$<var class="varname">_soap_version</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-use-proxy">$<var class="varname">_use_proxy</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.-cookies">$<var class="varname">_cookies</var></a></var><span class="initializer"> = []</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--default-headers">$<var class="varname">__default_headers</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapfault.php" class="type SoapFault" style="color:#EAB766">SoapFault</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--soap-fault">$<var class="varname">__soap_fault</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--last-request">$<var class="varname">__last_request</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--last-response">$<var class="varname">__last_response</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--last-request-headers">$<var class="varname">__last_request_headers</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapclient.php#soapclient.props.--last-response-headers">$<var class="varname">__last_response_headers</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$wsdl</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = []</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.call.php" class="methodname" style="color:#CC7832">__call</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$args</span></span>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.dorequest.php" class="methodname" style="color:#CC7832">__doRequest</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$request</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$location</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$action</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$version</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$oneWay</span><span class="initializer"> = <strong><span>false</span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getcookies.php" class="methodname" style="color:#CC7832">__getCookies</a></span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getfunctions.php" class="methodname" style="color:#CC7832">__getFunctions</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">array</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getlastrequest.php" class="methodname" style="color:#CC7832">__getLastRequest</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getlastrequestheaders.php" class="methodname" style="color:#CC7832">__getLastRequestHeaders</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getlastresponse.php" class="methodname" style="color:#CC7832">__getLastResponse</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.getlastresponseheaders.php" class="methodname" style="color:#CC7832">__getLastResponseHeaders</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.gettypes.php" class="methodname" style="color:#CC7832">__getTypes</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">array</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.setcookie.php" class="methodname" style="color:#CC7832">__setCookie</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$value</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.setlocation.php" class="methodname" style="color:#CC7832">__setLocation</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$location</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">string</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.setsoapheaders.php" class="methodname" style="color:#CC7832">__setSoapHeaders</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapheader.php" class="type SoapHeader" style="color:#EAB766">SoapHeader</a></span>|<span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">$headers</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapclient.soapcall.php" class="methodname" style="color:#CC7832">__soapCall</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$args</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapheader.php" class="type SoapHeader" style="color:#EAB766">SoapHeader</a></span>|<span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">$inputHeaders</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">&$outputHeaders</span><span class="initializer"> = <strong><span>null</span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span></div>   }</div>  </div>  <div class="section" id="soapclient.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapclient.props.--default-headers"><var class="varname">__default_headers</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.--last-request"><var class="varname">__last_request</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.--last-request-headers"><var class="varname">__last_request_headers</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.--last-response"><var class="varname">__last_response</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.--last-response-headers"><var class="varname">__last_response_headers</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.--soap-fault"><var class="varname">__soap_fault</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-classmap"><var class="varname">_classmap</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-connection-timeout"><var class="varname">_connection_timeout</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-cookies"><var class="varname">_cookies</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-digest"><var class="varname">_digest</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-encoding"><var class="varname">_encoding</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-exceptions"><var class="varname">_exceptions</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-features"><var class="varname">_features</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-keep-alive"><var class="varname">_keep_alive</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-login"><var class="varname">_login</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-password"><var class="varname">_password</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-proxy-host"><var class="varname">_proxy_host</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-proxy-login"><var class="varname">_proxy_login</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-proxy-password"><var class="varname">_proxy_password</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-proxy-port"><var class="varname">_proxy_port</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-soap-version"><var class="varname">_soap_version</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-ssl-method"><var class="varname">_ssl_method</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-stream-context"><var class="varname">_stream_context</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-use-digest"><var class="varname">_use_digest</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-use-proxy"><var class="varname">_use_proxy</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.-user-agent"><var class="varname">_user_agent</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.compression"><var class="varname">compression</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.httpsocket"><var class="varname">httpsocket</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.httpurl"><var class="varname">httpurl</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.location"><var class="varname">location</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.sdl"><var class="varname">sdl</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.style"><var class="varname">style</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.trace"><var class="varname">trace</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.typemap"><var class="varname">typemap</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.uri"><var class="varname">uri</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapclient.props.use"><var class="varname">use</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapClient::__call} — Calls a SOAP function (deprecated)</li><li>{@link SoapClient::__construct} — SoapClient constructor</li><li>{@link SoapClient::__doRequest} — Performs a SOAP request</li><li>{@link SoapClient::__getCookies} — Get list of cookies</li><li>{@link SoapClient::__getFunctions} — Returns list of available SOAP functions</li><li>{@link SoapClient::__getLastRequest} — Returns last SOAP request</li><li>{@link SoapClient::__getLastRequestHeaders} — Returns the SOAP headers from the last request</li><li>{@link SoapClient::__getLastResponse} — Returns last SOAP response</li><li>{@link SoapClient::__getLastResponseHeaders} — Returns the SOAP headers from the last response</li><li>{@link SoapClient::__getTypes} — Returns a list of SOAP types</li><li>{@link SoapClient::__setCookie} — Defines a cookie for SOAP requests</li><li>{@link SoapClient::__setLocation} — Sets the location of the Web service to use</li><li>{@link SoapClient::__setSoapHeaders} — Sets SOAP headers for subsequent calls</li><li>{@link SoapClient::__soapCall} — Calls a SOAP function</li></ul></div>
*/
class SoapClient
{
    /**
     * SoapClient constructor
     * @link https://php.net/manual/en/soapclient.construct.php
     * @param string|null $wsdl <p>
     * URI of the WSDL file or <b>NULL</b> if working in
     * non-WSDL mode.
     * </p>
     * <p>
     * During development, WSDL caching may be disabled by the
     * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
     * otherwise changes made to the WSDL file will have no effect until
     * soap.wsdl_cache_ttl is expired.
     * </p>
     * @param array $options [optional] <p>
     * An array of options. If working in WSDL mode, this parameter is optional.
     * If working in non-WSDL mode, the location and
     * uri options must be set, where location
     * is the URL of the SOAP server to send the request to, and uri
     * is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The style and use options only work in
     * non-WSDL mode. In WSDL mode, they come from the WSDL file.
     * </p>
     * <p>
     * The soap_version option should be one of either
     * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
     * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
     * </p>
     * <p>
     * For HTTP authentication, the login and
     * password options can be used to supply credentials.
     * For making an HTTP connection through
     * a proxy server, the options proxy_host,
     * proxy_port, proxy_login
     * and proxy_password are also available.
     * For HTTPS client certificate authentication use
     * local_cert and passphrase options. An
     * authentication may be supplied in the authentication
     * option. The authentication method may be either
     * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
     * <b>SOAP_AUTHENTICATION_DIGEST</b>.
     * </p>
     * <p>
     * The compression option allows to use compression
     * of HTTP SOAP requests and responses.
     * </p>
     * <p>
     * The encoding option defines internal character
     * encoding. This option does not change the encoding of SOAP requests (it is
     * always utf-8), but converts strings into it.
     * </p>
     * <p>
     * The trace option enables tracing of request so faults
     * can be backtraced. This defaults to <b>FALSE</b>
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * Setting the boolean trace option enables use of the
     * methods
     * SoapClient->__getLastRequest,
     * SoapClient->__getLastRequestHeaders,
     * SoapClient->__getLastResponse and
     * SoapClient->__getLastResponseHeaders.
     * </p>
     * <p>
     * The exceptions option is a boolean value defining whether
     * soap errors throw exceptions of type
     * SoapFault.
     * </p>
     * <p>
     * The connection_timeout option defines a timeout in seconds
     * for the connection to the SOAP service. This option does not define a timeout
     * for services with slow responses. To limit the time to wait for calls to finish the
     * default_socket_timeout setting
     * is available.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * The user_agent option specifies string to use in
     * User-Agent header.
     * </p>
     * <p>
     * The stream_context option is a resource
     * for context.
     * </p>
     * <p>
     * The features option is a bitmask of
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
     * </p>
     * <p>
     * The keep_alive option is a boolean value defining whether
     * to send the Connection: Keep-Alive header or
     * Connection: close.
     * </p>
     * <p>
     * The ssl_method option is one of
     * <b>SOAP_SSL_METHOD_TLS</b>,
     * <b>SOAP_SSL_METHOD_SSLv2</b>,
     * <b>SOAP_SSL_METHOD_SSLv3</b> or
     * <b>SOAP_SSL_METHOD_SSLv23</b>.
     * </p>
     * @since 5.0.1
     *
     * @removed 8.0
     */
    public function SoapClient($wsdl, array $options = null) {}

    /**
     * SoapClient constructor
     * @link https://php.net/manual/en/soapclient.construct.php
     * @param string|null $wsdl <p>
     * URI of the WSDL file or <b>NULL</b> if working in
     * non-WSDL mode.
     * </p>
     * <p>
     * During development, WSDL caching may be disabled by the
     * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
     * otherwise changes made to the WSDL file will have no effect until
     * soap.wsdl_cache_ttl is expired.
     * </p>
     * @param array $options [optional] <p>
     * An array of options. If working in WSDL mode, this parameter is optional.
     * If working in non-WSDL mode, the location and
     * uri options must be set, where location
     * is the URL of the SOAP server to send the request to, and uri
     * is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The style and use options only work in
     * non-WSDL mode. In WSDL mode, they come from the WSDL file.
     * </p>
     * <p>
     * The soap_version option should be one of either
     * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
     * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
     * </p>
     * <p>
     * For HTTP authentication, the login and
     * password options can be used to supply credentials.
     * For making an HTTP connection through
     * a proxy server, the options proxy_host,
     * proxy_port, proxy_login
     * and proxy_password are also available.
     * For HTTPS client certificate authentication use
     * local_cert and passphrase options. An
     * authentication may be supplied in the authentication
     * option. The authentication method may be either
     * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
     * <b>SOAP_AUTHENTICATION_DIGEST</b>.
     * </p>
     * <p>
     * The compression option allows to use compression
     * of HTTP SOAP requests and responses.
     * </p>
     * <p>
     * The encoding option defines internal character
     * encoding. This option does not change the encoding of SOAP requests (it is
     * always utf-8), but converts strings into it.
     * </p>
     * <p>
     * The trace option enables tracing of request so faults
     * can be backtraced. This defaults to <b>FALSE</b>
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * Setting the boolean trace option enables use of the
     * methods
     * SoapClient->__getLastRequest,
     * SoapClient->__getLastRequestHeaders,
     * SoapClient->__getLastResponse and
     * SoapClient->__getLastResponseHeaders.
     * </p>
     * <p>
     * The exceptions option is a boolean value defining whether
     * soap errors throw exceptions of type
     * SoapFault.
     * </p>
     * <p>
     * The connection_timeout option defines a timeout in seconds
     * for the connection to the SOAP service. This option does not define a timeout
     * for services with slow responses. To limit the time to wait for calls to finish the
     * default_socket_timeout setting
     * is available.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * The user_agent option specifies string to use in
     * User-Agent header.
     * </p>
     * <p>
     * The stream_context option is a resource
     * for context.
     * </p>
     * <p>
     * The features option is a bitmask of
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
     * </p>
     * <p>
     * The keep_alive option is a boolean value defining whether
     * to send the Connection: Keep-Alive header or
     * Connection: close.
     * </p>
     * <p>
     * The ssl_method option is one of
     * <b>SOAP_SSL_METHOD_TLS</b>,
     * <b>SOAP_SSL_METHOD_SSLv2</b>,
     * <b>SOAP_SSL_METHOD_SSLv3</b> or
     * <b>SOAP_SSL_METHOD_SSLv23</b>.
     * </p>
     * @throws SoapFault A SoapFault exception will be thrown if the wsdl URI cannot be loaded.
     * @since 5.0.1
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $wsdl,
        array $options = []
    ) {}

    /**
     * @link https://php.net/manual/en/soapclient.call.php
     * @param string $name
     * @param array $args
     * @return mixed
     * @since 5.0.1
     */
    #[Deprecated]
    #[TentativeType]
    public function __call(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        array $args
    ): mixed {}

    /**
     * Calls a SOAP function
     * @link https://php.net/manual/en/soapclient.soapcall.php
     * @param string $name <p>
     * The name of the SOAP function to call.
     * </p>
     * @param array $args <p>
     * An array of the arguments to pass to the function. This can be either
     * an ordered or an associative array. Note that most SOAP servers require
     * parameter names to be provided, in which case this must be an
     * associative array.
     * </p>
     * @param array $options [optional] <p>
     * An associative array of options to pass to the client.
     * </p>
     * <p>
     * The location option is the URL of the remote Web service.
     * </p>
     * <p>
     * The uri option is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The soapaction option is the action to call.
     * </p>
     * @param mixed $inputHeaders [optional] <p>
     * An array of headers to be sent along with the SOAP request.
     * </p>
     * @param array &$outputHeaders [optional] <p>
     * If supplied, this array will be filled with the headers from the SOAP response.
     * </p>
     * @return mixed SOAP functions may return one, or multiple values. If only one value is returned
     * by the SOAP function, the return value of __soapCall will be
     * a simple value (e.g. an integer, a string, etc). If multiple values are
     * returned, __soapCall will return
     * an associative array of named output parameters.
     * </p>
     * <p>
     * On error, if the SoapClient object was constructed with the exceptions
     * option set to <b>FALSE</b>, a SoapFault object will be returned. If this
     * option is not set, or is set to <b>TRUE</b>, then a SoapFault object will
     * be thrown as an exception.
     * @throws SoapFault A SoapFault exception will be thrown if an error occurs
     * and the SoapClient was constructed with the exceptions option not set, or
     * set to <b>TRUE</b>.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __soapCall(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        array $args,
        #[LanguageLevelTypeAware(['8.0' => 'array|null'], default: '')] $options = null,
        $inputHeaders = null,
        &$outputHeaders = null
    ): mixed {}

    /**
     * Returns last SOAP request
     * @link https://php.net/manual/en/soapclient.getlastrequest.php
     * @return string|null The last SOAP request, as an XML string.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getLastRequest(): ?string {}

    /**
     * Returns last SOAP response
     * @link https://php.net/manual/en/soapclient.getlastresponse.php
     * @return string|null The last SOAP response, as an XML string.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getLastResponse(): ?string {}

    /**
     * Returns the SOAP headers from the last request
     * @link https://php.net/manual/en/soapclient.getlastrequestheaders.php
     * @return string|null The last SOAP request headers.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getLastRequestHeaders(): ?string {}

    /**
     * Returns the SOAP headers from the last response
     * @link https://php.net/manual/en/soapclient.getlastresponseheaders.php
     * @return string|null The last SOAP response headers.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getLastResponseHeaders(): ?string {}

    /**
     * Returns list of available SOAP functions
     * @link https://php.net/manual/en/soapclient.getfunctions.php
     * @return array|null The array of SOAP function prototypes, detailing the return type,
     * the function name and type-hinted parameters.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getFunctions(): ?array {}

    /**
     * Returns a list of SOAP types
     * @link https://php.net/manual/en/soapclient.gettypes.php
     * @return array|null The array of SOAP types, detailing all structures and types.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __getTypes(): ?array {}

    /**
     * Returns a list of all cookies
     * @link https://php.net/manual/en/soapclient.getcookies.php
     * @return array The array of all cookies
     * @since 5.4.3
     */
    #[TentativeType]
    public function __getCookies(): array {}

    /**
     * Performs a SOAP request
     * @link https://php.net/manual/en/soapclient.dorequest.php
     * @param string $request <p>
     * The XML SOAP request.
     * </p>
     * @param string $location <p>
     * The URL to request.
     * </p>
     * @param string $action <p>
     * The SOAP action.
     * </p>
     * @param int $version <p>
     * The SOAP version.
     * </p>
     * @param bool|int $oneWay [optional] <p>
     * If $oneWay is set to 1, this method returns nothing.
     * Use this where a response is not expected.
     * </p>
     * @return string|null The XML SOAP response.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __doRequest(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $request,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $location,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $action,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $version,
        #[LanguageLevelTypeAware(["8.0" => 'bool'], default: 'int')] $oneWay = false
    ): ?string {}

    /**
     * The __setCookie purpose
     * @link https://php.net/manual/en/soapclient.setcookie.php
     * @param string $name <p>
     * The name of the cookie.
     * </p>
     * @param string $value [optional] <p>
     * The value of the cookie. If not specified, the cookie will be deleted.
     * </p>
     * @return void No value is returned.
     * @since 5.0.4
     */
    #[TentativeType]
    public function __setCookie(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(["8.0" => "string|null"], default: "string")] $value
    ): void {}

    /**
     * Sets the location of the Web service to use
     * @link https://php.net/manual/en/soapclient.setlocation.php
     * @param string $location [optional] <p>
     * The new endpoint URL.
     * </p>
     * @return string|null The old endpoint URL.
     * @since 5.0.1
     */
    #[TentativeType]
    public function __setLocation(#[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $location = null): ?string {}

    /**
     * Sets SOAP headers for subsequent calls
     * @link https://php.net/manual/en/soapclient.setsoapheaders.php
     * @param mixed $headers <p>
     * The headers to be set. It could be <b>SoapHeader</b>
     * object or array of <b>SoapHeader</b> objects.
     * If not specified or set to <b>NULL</b>, the headers will be deleted.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * @since 5.0.5
     */
    #[TentativeType]
    public function __setSoapHeaders(
        #[PhpStormStubsElementAvailable(from: '5.3', to: '5.6')] $headers,
        #[PhpStormStubsElementAvailable(from: '7.0')] $headers = null
    ): bool {}
}

/**
*<div id="class.soapvar" class="reference"> <h1 class="title">The SoapVar class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapvar.intro">   <h2 class="title">简介</h2>   <p class="para">    A class representing a variable or object for use with SOAP services.   </p>  </div>  <div class="section" id="soapvar.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapVar</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-type">$<var class="varname">enc_type</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-value">$<var class="varname">enc_value</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-stype">$<var class="varname">enc_stype</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-ns">$<var class="varname">enc_ns</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-name">$<var class="varname">enc_name</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapvar.php#soapvar.props.enc-namens">$<var class="varname">enc_namens</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapvar.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$typeName</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$typeNamespace</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$nodeName</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$nodeNamespace</span><span class="initializer"> = <strong><span>null</span></strong></span></span><br>)</div>   }</div>  </div>  <div class="section" id="soapvar.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapvar.props.enc-name"><var class="varname">enc_name</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapvar.props.enc-namens"><var class="varname">enc_namens</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapvar.props.enc-ns"><var class="varname">enc_ns</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapvar.props.enc-type"><var class="varname">enc_type</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapvar.props.enc-stype"><var class="varname">enc_stype</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapvar.props.enc-value"><var class="varname">enc_value</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapVar::__construct} — SoapVar constructor</li></ul></div>
*/
class SoapVar
{
    /**
     * @var int
     * @since 8.1
     */
    public int $enc_type;

    /**
     * @var mixed
     * @since 8.1
     */
    public mixed $enc_value;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $enc_stype;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $enc_ns;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $enc_name;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $enc_namens;

    /**
     * SoapVar constructor
     * @link https://php.net/manual/en/soapvar.construct.php
     * @param mixed $data <p>
     * The data to pass or return.
     * </p>
     * @param int|null $encoding <p>
     * The encoding ID, one of the XSD_... constants.
     * </p>
     * @param string $typeName [optional] <p>
     * The type name.
     * </p>
     * @param string $typeNamespace [optional] <p>
     * The type namespace.
     * </p>
     * @param string $nodeName [optional] <p>
     * The XML node name.
     * </p>
     * @param string $nodeNamespace [optional] <p>
     * The XML node namespace.
     * </p>
     * @since 5.0.1
     */
    public function __construct(
        #[LanguageLevelTypeAware(["8.0" => 'mixed'], default: '')] $data,
        #[LanguageLevelTypeAware(["7.1" => "int|null"], default: "int")] $encoding,
        #[LanguageLevelTypeAware(["8.0" => "string|null"], default: "string")] $typeName,
        #[LanguageLevelTypeAware(["8.0" => 'string|null'], default: '')] $typeNamespace = null,
        #[LanguageLevelTypeAware(["8.0" => 'string|null'], default: '')] $nodeName = null,
        #[LanguageLevelTypeAware(["8.0" => 'string|null'], default: '')] $nodeNamespace = null
    ) {}

    /**
     * SoapVar constructor
     * @link https://php.net/manual/en/soapvar.construct.php
     * @param mixed $data <p>
     * The data to pass or return.
     * </p>
     * @param int|null $encoding <p>
     * The encoding ID, one of the XSD_... constants.
     * </p>
     * @param string $type_name [optional] <p>
     * The type name.
     * </p>
     * @param string $type_namespace [optional] <p>
     * The type namespace.
     * </p>
     * @param string $node_name [optional] <p>
     * The XML node name.
     * </p>
     * @param string $node_namespace [optional] <p>
     * The XML node namespace.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */
    public function SoapVar($data, $encoding, $type_name = '', $type_namespace = '', $node_name = '', $node_namespace = '') {}
}

/**
*<div id="class.soapserver" class="reference"> <h1 class="title">The SoapServer class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapserver.intro">   <h2 class="title">简介</h2>   <p class="para">    The SoapServer class provides a server for the <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a>    and <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> protocols. It can be    used with or without a WSDL service description.   </p>  </div>  <div class="section" id="soapserver.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapServer</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapfault.php" class="type SoapFault" style="color:#EAB766">SoapFault</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapserver.php#soapserver.props.--soap-fault">$<var class="varname">__soap_fault</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$wsdl</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = []</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link addFunction}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$functions</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.addsoapheader.php" class="methodname" style="color:#CC7832">addSoapHeader</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapheader.php" class="type SoapHeader" style="color:#EAB766">SoapHeader</a></span> <span class="parameter" style="color:#3A95FF">$header</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.fault.php" class="methodname" style="color:#CC7832">fault</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$code</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$string</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$actor</span><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$details</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.getfunctions.php" class="methodname" style="color:#CC7832">getFunctions</a></span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.handle.php" class="methodname" style="color:#CC7832">handle</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$request</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.setclass.php" class="methodname" style="color:#CC7832">setClass</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$class</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">...$args</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.setobject.php" class="methodname" style="color:#CC7832">setObject</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#3A95FF">$object</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapserver.setpersistence.php" class="methodname" style="color:#CC7832">setPersistence</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>   }</div>  </div>  <div class="section" id="soapserver.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapserver.props.service"><var class="varname">service</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapserver.props.--soap-fault"><var class="varname">__soap_fault</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapServer::addFunction} — 添加一个或多个函数来处理 SOAP 请求</li><li>{@link SoapServer::addSoapHeader} — Add a SOAP header to the response</li><li>{@link SoapServer::__construct} — SoapServer constructor</li><li>{@link SoapServer::fault} — Issue SoapServer fault indicating an error</li><li>{@link SoapServer::getFunctions} — Returns list of defined functions</li><li>{@link SoapServer::handle} — Handles a SOAP request</li><li>{@link SoapServer::setClass} — Sets the class which handles SOAP requests</li><li>{@link SoapServer::setObject} — Sets the object which will be used to handle SOAP requests</li><li>{@link SoapServer::setPersistence} — Sets SoapServer persistence mode</li></ul></div>
*/
class SoapServer
{
    /**
     * SoapServer constructor
     * @link https://php.net/manual/en/soapserver.soapserver.php
     * @param mixed $wsdl <p>
     * To use the SoapServer in WSDL mode, pass the URI of a WSDL file.
     * Otherwise, pass <b>NULL</b> and set the uri option to the
     * target namespace for the server.
     * </p>
     * @param array $options [optional] <p>
     * Allow setting a default SOAP version (soap_version),
     * internal character encoding (encoding),
     * and actor URI (actor).
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * There is also a features option which can be set to
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>,
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>.
     * </p>
     * @since 5.0.1
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $wsdl,
        array $options = []
    ) {}

    /**
     * SoapServer constructor
     * @link https://php.net/manual/en/soapserver.soapserver.php
     * @param mixed $wsdl <p>
     * To use the SoapServer in WSDL mode, pass the URI of a WSDL file.
     * Otherwise, pass <b>NULL</b> and set the uri option to the
     * target namespace for the server.
     * </p>
     * @param array $options [optional] <p>
     * Allow setting a default SOAP version (soap_version),
     * internal character encoding (encoding),
     * and actor URI (actor).
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * There is also a features option which can be set to
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>,
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */
    public function SoapServer($wsdl, array $options = null) {}

/**
*<div id="soapserver.setpersistence" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::setPersistence</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::setPersistence</span> &mdash; <span class="dc-title">Sets SoapServer persistence mode</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.setpersistence-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::setPersistence</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$mode</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">    This function allows changing the persistence state of a SoapServer object between   requests. This function allows saving data between requests utilizing PHP sessions.  This method   only has an affect on a SoapServer after it has exported functions utilizing <span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()}</span>.   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:     <p class="para">      The persistence of <strong><span>SOAP_PERSISTENCE_SESSION</span></strong> makes only     objects of the given class persistent, but not the class static data. In this      case, use <var class="varname">$this->bar</var> instead of self::$bar.     </p>   </p></blockquote>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:     <p class="para">     <strong><span>SOAP_PERSISTENCE_SESSION</span></strong> serializes data on the class object between requests. In order to properly utilize resources (e.g. <span class="classname"><a href="https://www.php.net/manual/zh/class.pdo.php" class="classname">PDO</a></span>), <a href="https://www.php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> and <a href="https://www.php.net/manual/zh/language.oop5.magic.php#object.sleep" class="link">__sleep()</a> magic methods should be utilized.     </p>    </p></blockquote> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.setpersistence-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       One of the <span>SOAP_PERSISTENCE_XXX</span> constants.      </p>      <p class="para">       <strong><span>SOAP_PERSISTENCE_REQUEST</span></strong> - SoapServer data does not persist between       requests. This is the <strong>default</strong> behavior of any SoapServer       object after setClass is called.       </p>      <p class="para">       <strong><span>SOAP_PERSISTENCE_SESSION</span></strong> - SoapServer data persists between requests.       This is accomplished by serializing the SoapServer class data into       <var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.session.php" class="classname">$_SESSION['_bogus_session_name']</a></var>, because of this        <span class="function">{@link session_start()}</span> must be called before this persistence mode is set.       </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.setpersistence-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-soapserver.setpersistence-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">SoapServer::setPersistence()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /> </span><span style="color: #007700">class </span><span style="color: #9876AA">MyFirstPersistentSoapServer </span><span style="color: #007700">{<br />     private </span><span style="color: #9876AA">$resource</span><span style="color: #007700">; </span><span style="color: #FF8000">// (Such as PDO, mysqli, etc..)<br />     </span><span style="color: #007700">public </span><span style="color: #9876AA">$myvar1</span><span style="color: #007700">;<br />     public </span><span style="color: #9876AA">$myvar2</span><span style="color: #007700">;<br /><br />     public function </span><span style="color: #9876AA">__construct</span><span style="color: #007700">() {<br />         </span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">__wakeup</span><span style="color: #007700">(); </span><span style="color: #FF8000">// We're calling our wakeup to handle starting our resource<br />     </span><span style="color: #007700">}<br /><br />     public function </span><span style="color: #9876AA">__wakeup</span><span style="color: #007700">() {<br />         </span><span style="color: #9876AA">$this</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">resource </span><span style="color: #007700">= </span><span style="color: #9876AA">CodeToStartOurResourceUp</span><span style="color: #007700">();<br />     }<br /><br />     public function </span><span style="color: #9876AA">__sleep</span><span style="color: #007700">() {<br />         </span><span style="color: #FF8000">// We make sure to leave out $resource here, so our session data remains persistent<br />         // Failure to do so will result in the failure during the unserialization of data<br />         // on the next request; thus, our SoapObject would not be persistent across requests.<br />         </span><span style="color: #007700">return array(</span><span style="color: #DD0000">'myvar1'</span><span style="color: #007700">,</span><span style="color: #DD0000">'myvar2'</span><span style="color: #007700">);<br />     }<br /> }<br /><br /> try {<br />     </span><span style="color: #9876AA">session_start</span><span style="color: #007700">();<br />     </span><span style="color: #9876AA">$server </span><span style="color: #007700">= new </span><span style="color: #9876AA">SoapServer</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'uri' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">]));<br />     </span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'MyFirstPersistentSoapServer'</span><span style="color: #007700">);<br />     </span><span style="color: #FF8000">// setPersistence MUST be called after setClass, because setClass's<br />     // behavior sets SESSION_PERSISTENCE_REQUEST upon enacting the method.<br />     </span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setPersistence</span><span style="color: #007700">(</span><span style="color: #9876AA">SOAP_PERSISTENCE_SESSION</span><span style="color: #007700">);<br />     </span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">handle</span><span style="color: #007700">();<br /> } catch(</span><span style="color: #9876AA">SoapFault $e</span><span style="color: #007700">) {<br />     </span><span style="color: #9876AA">error_log</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP ERROR: "</span><span style="color: #007700">. </span><span style="color: #9876AA">$e</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">());<br /> }<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.setpersistence-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()} - Sets the class which handles SOAP requests</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function setPersistence(#[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $mode): void {}

/**
*<div id="soapserver.setclass" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::setClass</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::setClass</span> &mdash; <span class="dc-title">Sets the class which handles SOAP requests</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.setclass-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::setClass</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$class</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">...$args</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Exports all methods from specified class.  </p>  <p class="para">   The object can be made persistent across request for a given PHP session   with the <span class="methodname" style="color:#CC7832">{@link SoapServer::setPersistence()}</span> method.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.setclass-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">class</span></dt>     <dd>      <p class="para">       The name of the exported class.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">args</span></dt>     <dd>      <p class="para">       These optional parameters will be passed to the default class constructor       during object creation.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.setclass-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.setclass-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::__construct()} - SoapServer constructor</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::addFunction()} - 添加一个或多个函数来处理 SOAP 请求</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::setPersistence()} - Sets SoapServer persistence mode</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function setClass(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $class,
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] ...$args
    ): void {}

/**
*<div id="soapserver.setobject" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::setObject</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::setObject</span> &mdash; <span class="dc-title">Sets the object which will be used to handle SOAP requests</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.setobject-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::setObject</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">object</span> <span class="parameter" style="color:#3A95FF">$object</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   This sets a specific object as the handler for SOAP requests, rather than just a class as in   <span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()}</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.setobject-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">object</span></dt>     <dd>      <p class="para">       The object to handle the requests.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.setobject-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.setobject-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()} - Sets the class which handles SOAP requests</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function setObject(object $object): void {}

/**
*<div id="soapserver.addfunction" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::addFunction</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::addFunction</span> &mdash; <span class="dc-title">添加一个或多个函数来处理 SOAP 请求</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.addfunction-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::addFunction</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766">int</span></span> <span class="parameter" style="color:#3A95FF">$functions</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   为远程客户端导出一个或多个函数  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.addfunction-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">functions</span></dt>     <dd>      <p class="para">       导出一个函数，将函数名作为字符串传递给这个参数。      </p>      <p class="para">       导出多个函数，将一组函数名作为数组传递。      </p>      <p class="para">       导出所有函数，传递特殊常量 <strong><span>SOAP_FUNCTIONS_ALL</span></strong>.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        <p class="para">        <span class="parameter" style="color:#3A95FF">functions</span> 接收的所有输入参数必须同时和 WSDL        文件中定义的顺序一样（它们不应该接收任何输出变量作为参数）并且返回一个或多个值。如果要返回多个值，它们必须返回一组被命名的输出参数作为数组。       </p>      </p></blockquote>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.addfunction-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-soapserver.addfunction-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">SoapServer::addFunction()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #9876AA">echoString</span><span style="color: #007700">(</span><span style="color: #9876AA">$inputString</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #9876AA">$inputString</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">"echoString"</span><span style="color: #007700">);<br /><br />function </span><span style="color: #9876AA">echoTwoStrings</span><span style="color: #007700">(</span><span style="color: #9876AA">$inputString1</span><span style="color: #007700">, </span><span style="color: #9876AA">$inputString2</span><span style="color: #007700">)<br />{<br />    return array(</span><span style="color: #DD0000">"outputString1" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$inputString1</span><span style="color: #007700">,<br />                 </span><span style="color: #DD0000">"outputString2" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$inputString2</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFunction</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"echoString"</span><span style="color: #007700">, </span><span style="color: #DD0000">"echoTwoStrings"</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFunction</span><span style="color: #007700">(</span><span style="color: #9876AA">SOAP_FUNCTIONS_ALL</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.addfunction-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::__construct()} - SoapServer constructor</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()} - Sets the class which handles SOAP requests</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function addFunction($functions): void {}

/**
*<div id="soapserver.getfunctions" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::getFunctions</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::getFunctions</span> &mdash; <span class="dc-title">Returns list of defined functions</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.getfunctions-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::getFunctions</strong></span>(): <span class="type" style="color:#EAB766">array</span></div>  <p class="para rdfs-comment">    Returns a list of the defined functions in the SoapServer object.   This method returns the list of all functions added by   <span class="methodname" style="color:#CC7832">{@link SoapServer::addFunction()}</span> or   <span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()}</span>.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.getfunctions-parameters">  <h3 class="title">参数</h3>  <span>此函数没有参数。</span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.getfunctions-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   An <span>array</span> of the defined functions.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-soapserver.getfunctions-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">SoapServer::getFunctions()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$server </span><span style="color: #007700">= new </span><span style="color: #9876AA">SoapServer</span><span style="color: #007700">(</span><span style="color: #9876AA">NULL</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"uri" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFunction</span><span style="color: #007700">(</span><span style="color: #9876AA">SOAP_FUNCTIONS_ALL</span><span style="color: #007700">);<br />if (</span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">"REQUEST_METHOD"</span><span style="color: #007700">] == </span><span style="color: #DD0000">"POST"</span><span style="color: #007700">) {<br />  </span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">handle</span><span style="color: #007700">();<br />} else {<br />  echo </span><span style="color: #DD0000">"This SOAP server can handle following functions: "</span><span style="color: #007700">;<br />  </span><span style="color: #9876AA">$functions </span><span style="color: #007700">= </span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getFunctions</span><span style="color: #007700">();<br />  foreach(</span><span style="color: #9876AA">$functions </span><span style="color: #007700">as </span><span style="color: #9876AA">$func</span><span style="color: #007700">) {<br />    echo </span><span style="color: #9876AA">$func </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />  }<br />}<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.getfunctions-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::__construct()} - SoapServer constructor</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::addFunction()} - 添加一个或多个函数来处理 SOAP 请求</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::setClass()} - Sets the class which handles SOAP requests</span></li>   </ul>  </span> </div></div>
     * @return array An array of the defined functions.*/
    public function getFunctions(): array {}

/**
*<div id="soapserver.handle" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::handle</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::handle</span> &mdash; <span class="dc-title">Handles a SOAP request</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.handle-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::handle</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$request</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Processes a SOAP request, calls necessary functions, and sends a response   back.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.handle-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">request</span></dt>     <dd>      <p class="para">       The SOAP request. If this argument is omitted, the request is assumed to be       in the raw POST data of the HTTP request.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.handle-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-soapserver.handle-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">request</span> is now nullable.      </td>     </tr>    </tbody>     </table> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-soapserver.handle-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">SoapServer::handle()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #9876AA">test</span><span style="color: #007700">(</span><span style="color: #9876AA">$x</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #9876AA">$x</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">$server </span><span style="color: #007700">= new </span><span style="color: #9876AA">SoapServer</span><span style="color: #007700">(</span><span style="color: #9876AA">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'uri' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">addFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">"test"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$server</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">handle</span><span style="color: #007700">();<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.handle-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapServer::__construct()} - SoapServer constructor</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function handle(#[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $request = null): void {}

/**
*<div id="soapserver.fault" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::fault</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::fault</span> &mdash; <span class="dc-title">Issue SoapServer fault indicating an error</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.fault-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::fault</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$code</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$string</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$actor</span><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$details</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Sends a response to the client of the current request indicating an error.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <p class="para">    This can only be called when handling a request.   </p>  </p></blockquote> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.fault-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">code</span></dt>     <dd>      <p class="para">       The error code to return      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       A brief description of the error      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">actor</span></dt>     <dd>      <p class="para">       A string identifying the actor that caused the fault.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">details</span></dt>     <dd>      <p class="para">       More details of the fault      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       The name of the fault. This can be used to select a name from a WSDL file.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.fault-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-soapserver.fault-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapFault::__construct()} - SoapFault constructor</span></li>   </ul>  </span> </div></div>
     * @return void No value is returned.*/
    public function fault(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $code,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $actor = '',
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $details = null,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name = ''
    ): void {}

/**
*<div id="soapserver.addsoapheader" class="refentry"> <div class="refnamediv">  <h1 class="refname">SoapServer::addSoapHeader</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::addSoapHeader</span> &mdash; <span class="dc-title">Add a SOAP header to the response</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-soapserver.addsoapheader-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SoapServer::addSoapHeader</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.soapheader.php" class="type SoapHeader" style="color:#EAB766">SoapHeader</a></span> <span class="parameter" style="color:#3A95FF">$header</span></span>): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>  <p class="para rdfs-comment">   Adds a SOAP header to be returned with the response to the current request.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-soapserver.addsoapheader-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">header</span></dt>     <dd>      <p class="para">       The header to be returned.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-soapserver.addsoapheader-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
     * @return void No value is returned.*/
    public function addSoapHeader(SoapHeader $header): void {}
}

/**
*<div id="class.soapfault" class="reference"> <h1 class="title">The SoapFault class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapfault.intro">   <h2 class="title">简介</h2>   <p class="para">    Represents a SOAP fault.   </p>  </div>  <div class="section" id="soapfault.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">SoapFault</strong></strong>             <span class="modifier">extends</span>      <a href="https://www.php.net/manual/zh/class.exception.php" class="classname">Exception</a>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.faultstring">$<var class="varname">faultstring</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.faultcode">$<var class="varname">faultcode</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.faultcodens">$<var class="varname">faultcodens</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.faultactor">$<var class="varname">faultactor</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.detail">$<var class="varname">detail</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.-name">$<var class="varname">_name</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapfault.php#soapfault.props.headerfault">$<var class="varname">headerfault</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>    <div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div><div class="fieldsynopsis"><span class="modifier">protected</span>     <span class="type" style="color:#EAB766">int</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">array</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div><div class="fieldsynopsis"><span class="modifier">private</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapfault.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">array</span>|<span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766">null</span></span> <span class="parameter" style="color:#3A95FF">$code</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$string</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$actor</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$details</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$name</span><span class="initializer"> = <strong><span>null</span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$headerFault</span><span class="initializer"> = <strong><span>null</span></strong></span></span><br>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapfault.tostring.php" class="methodname" style="color:#CC7832">__toString</a></span>(): <span class="type" style="color:#EAB766">string</span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getMessage}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getPrevious}</span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/class.throwable.php" class="type Throwable" style="color:#EAB766">Throwable</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getCode}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getFile}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getLine}</span>(): <span class="type" style="color:#EAB766">int</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTrace}</span>(): <span class="type" style="color:#EAB766">array</span></div><div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::getTraceAsString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link Exception::__toString}</span>(): <span class="type" style="color:#EAB766">string</span></div><div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname" style="color:#CC7832">{@link Exception::__clone}</span>(): <span class="type" style="color:#EAB766"><span class="type void" style="color:#EAB766">void</span></span></div>   }</div>  </div>  <div class="section" id="soapfault.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapfault.props.-name"><var class="varname">_name</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.detail"><var class="varname">detail</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.faultactor"><var class="varname">faultactor</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.faultcode"><var class="varname">faultcode</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.faultcodens"><var class="varname">faultcodens</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.faultstring"><var class="varname">faultstring</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapfault.props.headerfault"><var class="varname">headerfault</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapFault::__construct} — SoapFault constructor</li><li>{@link SoapFault::__toString} — Obtain a string representation of a SoapFault</li></ul></div>
*/
class SoapFault extends Exception
{
    /**
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string|null'], default: '')]
    public $faultcode;

    /**
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $faultstring;

    /**
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string|null'], default: '')]
    public $faultactor;

    /**
     * @var mixed
     */
    #[LanguageLevelTypeAware(['8.1' => 'mixed'], default: '')]
    public $detail;

    /**
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $faultname;

    /**
     * @var mixed
     */
    #[LanguageLevelTypeAware(['8.1' => 'mixed'], default: '')]
    public $headerfault;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $faultcodens;

    /**
     * @var string|null
     * @since 8.1
     */
    public string|null $_name;

    /**
     * SoapFault constructor
     * @link https://php.net/manual/en/soapfault.soapfault.php
     * @param string $code <p>
     * The error code of the <b>SoapFault</b>.
     * </p>
     * @param string $string <p>
     * The error message of the <b>SoapFault</b>.
     * </p>
     * @param string $actor [optional] <p>
     * A string identifying the actor that caused the error.
     * </p>
     * @param mixed $details [optional] <p>
     * More details about the cause of the error.
     * </p>
     * @param string $name [optional] <p>
     * Can be used to select the proper fault encoding from WSDL.
     * </p>
     * @param mixed $headerFault [optional] <p>
     * Can be used during SOAP header handling to report an error in the
     * response header.
     * </p>
     * @since 5.0.1
     */
    #[Pure]
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $code,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $actor = null,
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $details = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $name = null,
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $headerFault = null
    ) {}

    /**
     * SoapFault constructor
     * @link https://php.net/manual/en/soapfault.soapfault.php
     * @param string $faultcode <p>
     * The error code of the <b>SoapFault</b>.
     * </p>
     * @param string $faultstring <p>
     * The error message of the <b>SoapFault</b>.
     * </p>
     * @param string $faultactor [optional] <p>
     * A string identifying the actor that caused the error.
     * </p>
     * @param string $detail [optional] <p>
     * More details about the cause of the error.
     * </p>
     * @param string $faultname [optional] <p>
     * Can be used to select the proper fault encoding from WSDL.
     * </p>
     * @param mixed $headerfault [optional] <p>
     * Can be used during SOAP header handling to report an error in the
     * response header.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */
    public function SoapFault($faultcode, $faultstring, $faultactor = null, $detail = null, $faultname = null, $headerfault = null) {}

    /**
     * Obtain a string representation of a SoapFault
     * @link https://php.net/manual/en/soapfault.tostring.php
     * @return string A string describing the SoapFault.
     * @since 5.0.1
     */
    #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')]
    public function __toString() {}
}

/**
*<div id="class.soapparam" class="reference"> <h1 class="title">The SoapParam class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapparam.intro">   <h2 class="title">简介</h2>   <p class="para">     Represents parameter to a SOAP call.   </p>  </div>  <div class="section" id="soapparam.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapParam</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapparam.php#soapparam.props.param-name">$<var class="varname">param_name</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapparam.php#soapparam.props.param-data">$<var class="varname">param_data</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapparam.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>)</div>   }</div>  </div>  <div class="section" id="soapparam.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapparam.props.param-data"><var class="varname">param_data</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapparam.props.param-name"><var class="varname">param_name</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapParam::__construct} — SoapParam constructor</li></ul></div>
*/
class SoapParam
{
    /**
     * @var string
     * @since 8.1
     */
    public string $param_name;

    /**
     * @var mixed
     * @since 8.1
     */
    public mixed $param_data;

    /**
     * SoapParam constructor
     * @link https://php.net/manual/en/soapparam.soapparam.php
     * @param mixed $data <p>
     * The data to pass or return. This parameter can be passed directly as PHP
     * value, but in this case it will be named as paramN and
     * the SOAP service may not understand it.
     * </p>
     * @param string $name <p>
     * The parameter name.
     * </p>
     * @since 5.0.1
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $data,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name
    ) {}

    /**
     * SoapParam constructor
     * @link https://php.net/manual/en/soapparam.soapparam.php
     * @param mixed $data <p>
     * The data to pass or return. This parameter can be passed directly as PHP
     * value, but in this case it will be named as paramN and
     * the SOAP service may not understand it.
     * </p>
     * @param string $name <p>
     * The parameter name.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */
    public function SoapParam($data, $name) {}
}

/**
*<div id="class.soapheader" class="reference"> <h1 class="title">The SoapHeader class</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="soapheader.intro">   <h2 class="title">简介</h2>   <p class="para">    Represents a SOAP header.   </p>  </div>  <div class="section" id="soapheader.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapHeader</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapheader.php#soapheader.props.namespace">$<var class="varname">namespace</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">string</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapheader.php#soapheader.props.name">$<var class="varname">name</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapheader.php#soapheader.props.data">$<var class="varname">data</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">bool</span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapheader.php#soapheader.props.mustunderstand">$<var class="varname">mustUnderstand</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span>|<span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">null</span></span>      <var class="varname"><a href="https://www.php.net/manual/zh/class.soapheader.php#soapheader.props.actor">$<var class="varname">actor</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://www.php.net/manual/zh/soapheader.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$namespace</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$data</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$mustunderstand</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$actor</span><span class="initializer"> = ?</span></span><br>)</div>   }</div>  </div>  <div class="section" id="soapheader.props">   <h2 class="title">属性</h2>   <dl>         <dt id="soapheader.props.actor"><var class="varname">actor</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapheader.props.data"><var class="varname">data</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapheader.props.mustunderstand"><var class="varname">mustUnderstand</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapheader.props.name"><var class="varname">name</var></dt>     <dd>      <p class="para">      </p>     </dd>             <dt id="soapheader.props.namespace"><var class="varname">namespace</var></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SoapHeader::__construct} — SoapHeader constructor</li></ul></div>
*/
class SoapHeader
{
    /**
     * @var string
     * @since 8.1
     */
    public string $namespace;

    /**
     * @var string
     * @since 8.1
     */
    public string $name;

    /**
     * @var mixed
     * @since 8.1
     */
    public mixed $data;

    /**
     * @var bool
     * @since 8.1
     */
    public bool $mustUnderstand;

    /**
     * @var string|int|null
     * @since 8.1
     */
    public string|int|null $actor;

    /**
     * SoapHeader constructor
     * @link https://www.php.net/manual/en/soapheader.construct.php
     * @param string $namespace <p>
     * The namespace of the SOAP header element.
     * </p>
     * @param string $name <p>
     * The name of the SoapHeader object.
     * </p>
     * @param mixed $data [optional] <p>
     * A SOAP header's content. It can be a PHP value or a
     * <b>SoapVar</b> object.
     * </p>
     * @param bool $mustUnderstand [optional]
     * @param string $actor [optional] <p>
     * Value of the actor attribute of the SOAP header
     * element.
     * </p>
     * @since 5.0.1
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $namespace,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $data,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $mustUnderstand = false,
        #[LanguageLevelTypeAware(['8.0' => 'string|int|null'], default: '')] $actor = null
    ) {}

    /**
     * SoapHeader constructor
     * @link https://php.net/manual/en/soapheader.soapheader.php
     * @param string $namespace <p>
     * The namespace of the SOAP header element.
     * </p>
     * @param string $name <p>
     * The name of the SoapHeader object.
     * </p>
     * @param mixed $data [optional] <p>
     * A SOAP header's content. It can be a PHP value or a
     * <b>SoapVar</b> object.
     * </p>
     * @param bool $mustunderstand [optional]
     * @param string $actor [optional] <p>
     * Value of the actor attribute of the SOAP header
     * element.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */
    public function SoapHeader($namespace, $name, $data = null, $mustunderstand = false, $actor = null) {}
}

/**
*<div id="function.use-soap-error-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">use_soap_error_handler</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">use_soap_error_handler</span> &mdash; <span class="dc-title">Set whether to use the SOAP error handler</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.use-soap-error-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>use_soap_error_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$enable</span><span class="initializer"> = <strong><span>true</span></strong></span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   This function sets whether or not to use the SOAP error handler in the SOAP server.    It will return the previous value. If set to <strong><span>true</span></strong>, details of errors   in a <span class="classname"><a href="https://www.php.net/manual/zh/class.soapserver.php" class="classname">SoapServer</a></span> application will be sent to the client   as a SOAP fault message.   If <strong><span>false</span></strong>, the standard PHP error handler is used.   The default is to send error to the client as SOAP fault message.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.use-soap-error-handler-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">enable</span></dt>     <dd>      <p class="para">       Set to <strong><span>true</span></strong> to send error details to clients.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.use-soap-error-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the original value.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.use-soap-error-handler-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link set_error_handler()} - 设置用户自定义的错误处理函数</span></li>    <li class="member"><span class="function">{@link set_exception_handler()} - 设置用户自定义的异常处理函数</span></li>   </ul>  </span> </div></div>
 * @return bool the original value.*/
function use_soap_error_handler(bool $enable = true): bool {}

/**
*<div id="function.is-soap-fault" class="refentry"> <div class="refnamediv">  <h1 class="refname">is_soap_fault</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_soap_fault</span> &mdash; <span class="dc-title">Checks if a SOAP call has failed</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.is-soap-fault-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>is_soap_fault</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://www.php.net/manual/zh/language.types.declarations.php#language.types.declarations.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$object</span></span>): <span class="type" style="color:#EAB766">bool</span></div>  <p class="para rdfs-comment">   This function is useful to check if the SOAP call failed, but   without using exceptions. To use it, create a   <span class="classname"><a href="https://www.php.net/manual/zh/class.soapclient.php" class="classname">SoapClient</a></span> object with the <span>exceptions</span>   option set to zero or <strong><span>false</span></strong>.   In this case, the SOAP method will return a special   <span class="classname"><a href="https://www.php.net/manual/zh/class.soapfault.php" class="classname">SoapFault</a></span> object which encapsulates the fault   details (faultcode, faultstring, faultactor and faultdetails).  </p>  <p class="para">   If <span>exceptions</span> is not set then SOAP call will throw   an exception on error.   <span class="function"><strong style="color:#CC7832">is_soap_fault()</strong></span> checks if the given   parameter is a <span class="classname"><a href="https://www.php.net/manual/zh/class.soapfault.php" class="classname">SoapFault</a></span> object.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.is-soap-fault-parameters">  <h3 class="title">参数</h3>  <span>   <dl>         <dt><span class="parameter" style="color:#3A95FF">object</span></dt>     <dd>      <p class="para">       The object to test.      </p>     </dd>       </dl>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.is-soap-fault-returnvalues">  <h3 class="title">返回值</h3>    <p class="para">   This will return <strong><span>true</span></strong> on error, and <strong><span>false</span></strong> otherwise.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.is-soap-fault-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">is_soap_fault()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$client </span><span style="color: #007700">= new </span><span style="color: #9876AA">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'exceptions' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">0</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">$result </span><span style="color: #007700">= </span><span style="color: #9876AA">$client</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">SomeFunction</span><span style="color: #007700">();<br />if (</span><span style="color: #9876AA">is_soap_fault</span><span style="color: #007700">(</span><span style="color: #9876AA">$result</span><span style="color: #007700">)) {<br />    </span><span style="color: #9876AA">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP Fault: (faultcode: </span><span style="color: #007700">{</span><span style="color: #9876AA">$result</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultcode</span><span style="color: #007700">}</span><span style="color: #DD0000">, faultstring: </span><span style="color: #007700">{</span><span style="color: #9876AA">$result</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultstring</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">, </span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>   <div class="example" id="">    <p><strong>示例 #2 SOAP&#039;s standard method for error reporting is exceptions</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #9876AA">$client </span><span style="color: #007700">= new </span><span style="color: #9876AA">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">);<br />    </span><span style="color: #9876AA">$result </span><span style="color: #007700">= </span><span style="color: #9876AA">$client</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">SomeFunction</span><span style="color: #007700">(</span><span style="color: #FF8000">// ... </span><span style="color: #007700">);<br />} catch (</span><span style="color: #9876AA">SoapFault $fault</span><span style="color: #007700">) {<br />    </span><span style="color: #9876AA">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP Fault: (faultcode: </span><span style="color: #007700">{</span><span style="color: #9876AA">$fault</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultcode</span><span style="color: #007700">}</span><span style="color: #DD0000">, faultstring: </span><span style="color: #007700">{</span><span style="color: #9876AA">$fault</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">faultstring</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">, </span><span style="color: #9876AA">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.is-soap-fault-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapClient::__construct()} - SoapClient constructor</span></li>    <li class="member"><span class="methodname" style="color:#CC7832">{@link SoapFault::__construct()} - SoapFault constructor</span></li>   </ul>  </span> </div></div>
 * @return bool This will return <b>TRUE</b> on error, and <b>FALSE</b> otherwise.*/
function is_soap_fault(mixed $object): bool {}

define('SOAP_1_1', 1);
define('SOAP_1_2', 2);
define('SOAP_PERSISTENCE_SESSION', 1);
define('SOAP_PERSISTENCE_REQUEST', 2);
define('SOAP_FUNCTIONS_ALL', 999);
define('SOAP_ENCODED', 1);
define('SOAP_LITERAL', 2);
define('SOAP_RPC', 1);
define('SOAP_DOCUMENT', 2);
define('SOAP_ACTOR_NEXT', 1);
define('SOAP_ACTOR_NONE', 2);
define('SOAP_ACTOR_UNLIMATERECEIVER', 3);
define('SOAP_COMPRESSION_ACCEPT', 32);
define('SOAP_COMPRESSION_GZIP', 0);
define('SOAP_COMPRESSION_DEFLATE', 16);
define('SOAP_AUTHENTICATION_BASIC', 0);
define('SOAP_AUTHENTICATION_DIGEST', 1);
define('UNKNOWN_TYPE', 999998);
define('XSD_STRING', 101);
define('XSD_BOOLEAN', 102);
define('XSD_DECIMAL', 103);
define('XSD_FLOAT', 104);
define('XSD_DOUBLE', 105);
define('XSD_DURATION', 106);
define('XSD_DATETIME', 107);
define('XSD_TIME', 108);
define('XSD_DATE', 109);
define('XSD_GYEARMONTH', 110);
define('XSD_GYEAR', 111);
define('XSD_GMONTHDAY', 112);
define('XSD_GDAY', 113);
define('XSD_GMONTH', 114);
define('XSD_HEXBINARY', 115);
define('XSD_BASE64BINARY', 116);
define('XSD_ANYURI', 117);
define('XSD_QNAME', 118);
define('XSD_NOTATION', 119);
define('XSD_NORMALIZEDSTRING', 120);
define('XSD_TOKEN', 121);
define('XSD_LANGUAGE', 122);
define('XSD_NMTOKEN', 123);
define('XSD_NAME', 124);
define('XSD_NCNAME', 125);
define('XSD_ID', 126);
define('XSD_IDREF', 127);
define('XSD_IDREFS', 128);
define('XSD_ENTITY', 129);
define('XSD_ENTITIES', 130);
define('XSD_INTEGER', 131);
define('XSD_NONPOSITIVEINTEGER', 132);
define('XSD_NEGATIVEINTEGER', 133);
define('XSD_LONG', 134);
define('XSD_INT', 135);
define('XSD_SHORT', 136);
define('XSD_BYTE', 137);
define('XSD_NONNEGATIVEINTEGER', 138);
define('XSD_UNSIGNEDLONG', 139);
define('XSD_UNSIGNEDINT', 140);
define('XSD_UNSIGNEDSHORT', 141);
define('XSD_UNSIGNEDBYTE', 142);
define('XSD_POSITIVEINTEGER', 143);
define('XSD_NMTOKENS', 144);
define('XSD_ANYTYPE', 145);
define('XSD_ANYXML', 147);
define('APACHE_MAP', 200);
define('SOAP_ENC_OBJECT', 301);
define('SOAP_ENC_ARRAY', 300);
define('XSD_1999_TIMEINSTANT', 401);
define('XSD_NAMESPACE', "http://www.w3.org/2001/XMLSchema");
define('XSD_1999_NAMESPACE', "http://www.w3.org/1999/XMLSchema");
define('SOAP_SINGLE_ELEMENT_ARRAYS', 1);
define('SOAP_WAIT_ONE_WAY_CALLS', 2);
define('SOAP_USE_XSI_ARRAY_TYPE', 4);
define('WSDL_CACHE_NONE', 0);
define('WSDL_CACHE_DISK', 1);
define('WSDL_CACHE_MEMORY', 2);
define('WSDL_CACHE_BOTH', 3);

/**
 * @link https://php.net/manual/en/soap.constants.php
 * @since 5.5
 */
define('SOAP_SSL_METHOD_TLS', 0);

/**
 * @link https://php.net/manual/en/soap.constants.php
 * @since 5.5
 */
define('SOAP_SSL_METHOD_SSLv2', 1);

/**
 * @link https://php.net/manual/en/soap.constants.php
 * @since 5.5
 */
define('SOAP_SSL_METHOD_SSLv3', 2);

/**
 * @link https://php.net/manual/en/soap.constants.php
 * @since 5.5
 */
define('SOAP_SSL_METHOD_SSLv23', 3);

// End of soap v.
