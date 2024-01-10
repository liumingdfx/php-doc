<?php

// Start of rpminfo v.0.5.0

const RPMVERSION = '4.15.1';
const RPMSENSE_ANY = 0;
const RPMSENSE_LESS = 2;
const RPMSENSE_GREATER = 4;
const RPMSENSE_EQUAL = 8;
const RPMSENSE_POSTTRANS = 32;
const RPMSENSE_PREREQ = 64;
const RPMSENSE_PRETRANS = 128;
const RPMSENSE_INTERP = 256;
const RPMSENSE_SCRIPT_PRE = 512;
const RPMSENSE_SCRIPT_POST = 1024;
const RPMSENSE_SCRIPT_PREUN = 2048;
const RPMSENSE_SCRIPT_POSTUN = 4096;
const RPMSENSE_SCRIPT_VERIFY = 8192;
const RPMSENSE_FIND_REQUIRES = 16384;
const RPMSENSE_FIND_PROVIDES = 32768;
const RPMSENSE_TRIGGERIN = 65536;
const RPMSENSE_TRIGGERUN = 131072;
const RPMSENSE_TRIGGERPOSTUN = 262144;
const RPMSENSE_MISSINGOK = 524288;
const RPMSENSE_RPMLIB = 16777216;
const RPMSENSE_TRIGGERPREIN = 33554432;
const RPMSENSE_KEYRING = 67108864;
const RPMSENSE_CONFIG = 268435456;
const RPMMIRE_DEFAULT = 0;
const RPMMIRE_STRCMP = 1;
const RPMMIRE_REGEX = 2;
const RPMMIRE_GLOB = 3;
const RPMTAG_ARCH = 1022;
const RPMTAG_ARCHIVESIZE = 1046;
const RPMTAG_BASENAMES = 1117;
const RPMTAG_BUGURL = 5012;
const RPMTAG_BUILDARCHS = 1089;
const RPMTAG_BUILDHOST = 1007;
const RPMTAG_BUILDTIME = 1006;
const RPMTAG_C = 1054;
const RPMTAG_CHANGELOGNAME = 1081;
const RPMTAG_CHANGELOGTEXT = 1082;
const RPMTAG_CHANGELOGTIME = 1080;
const RPMTAG_CLASSDICT = 1142;
const RPMTAG_CONFLICTFLAGS = 1053;
const RPMTAG_CONFLICTNAME = 1054;
const RPMTAG_CONFLICTNEVRS = 5044;
const RPMTAG_CONFLICTS = 1054;
const RPMTAG_CONFLICTVERSION = 1055;
const RPMTAG_COOKIE = 1094;
const RPMTAG_DBINSTANCE = 1195;
const RPMTAG_DEPENDSDICT = 1145;
const RPMTAG_DESCRIPTION = 1005;
const RPMTAG_DIRINDEXES = 1116;
const RPMTAG_DIRNAMES = 1118;
const RPMTAG_DISTRIBUTION = 1010;
const RPMTAG_DISTTAG = 1155;
const RPMTAG_DISTURL = 1123;
const RPMTAG_DSAHEADER = 267;
const RPMTAG_E = 1003;
const RPMTAG_ENCODING = 5062;
const RPMTAG_ENHANCEFLAGS = 5057;
const RPMTAG_ENHANCENAME = 5055;
const RPMTAG_ENHANCENEVRS = 5061;
const RPMTAG_ENHANCES = 5055;
const RPMTAG_ENHANCEVERSION = 5056;
const RPMTAG_EPOCH = 1003;
const RPMTAG_EPOCHNUM = 5019;
const RPMTAG_EVR = 5013;
const RPMTAG_EXCLUDEARCH = 1059;
const RPMTAG_EXCLUDEOS = 1060;
const RPMTAG_EXCLUSIVEARCH = 1061;
const RPMTAG_EXCLUSIVEOS = 1062;
const RPMTAG_FILECAPS = 5010;
const RPMTAG_FILECLASS = 1141;
const RPMTAG_FILECOLORS = 1140;
const RPMTAG_FILECONTEXTS = 1147;
const RPMTAG_FILEDEPENDSN = 1144;
const RPMTAG_FILEDEPENDSX = 1143;
const RPMTAG_FILEDEVICES = 1095;
const RPMTAG_FILEDIGESTALGO = 5011;
const RPMTAG_FILEDIGESTS = 1035;
const RPMTAG_FILEFLAGS = 1037;
const RPMTAG_FILEGROUPNAME = 1040;
const RPMTAG_FILEINODES = 1096;
const RPMTAG_FILELANGS = 1097;
const RPMTAG_FILELINKTOS = 1036;
const RPMTAG_FILEMD5S = 1035;
const RPMTAG_FILEMODES = 1030;
const RPMTAG_FILEMTIMES = 1034;
const RPMTAG_FILENAMES = 5000;
const RPMTAG_FILENLINKS = 5045;
const RPMTAG_FILEPROVIDE = 5001;
const RPMTAG_FILERDEVS = 1033;
const RPMTAG_FILEREQUIRE = 5002;
const RPMTAG_FILESIGNATURELENGTH = 5091;
const RPMTAG_FILESIGNATURES = 5090;
const RPMTAG_FILESIZES = 1028;
const RPMTAG_FILESTATES = 1029;
const RPMTAG_FILETRIGGERCONDS = 5086;
const RPMTAG_FILETRIGGERFLAGS = 5072;
const RPMTAG_FILETRIGGERINDEX = 5070;
const RPMTAG_FILETRIGGERNAME = 5069;
const RPMTAG_FILETRIGGERPRIORITIES = 5084;
const RPMTAG_FILETRIGGERSCRIPTFLAGS = 5068;
const RPMTAG_FILETRIGGERSCRIPTPROG = 5067;
const RPMTAG_FILETRIGGERSCRIPTS = 5066;
const RPMTAG_FILETRIGGERTYPE = 5087;
const RPMTAG_FILETRIGGERVERSION = 5071;
const RPMTAG_FILEUSERNAME = 1039;
const RPMTAG_FILEVERIFYFLAGS = 1045;
const RPMTAG_FSCONTEXTS = 1148;
const RPMTAG_GIF = 1012;
const RPMTAG_GROUP = 1016;
const RPMTAG_HDRID = 269;
const RPMTAG_HEADERCOLOR = 5017;
const RPMTAG_HEADERI18NTABLE = 100;
const RPMTAG_HEADERIMAGE = 61;
const RPMTAG_HEADERIMMUTABLE = 63;
const RPMTAG_HEADERREGIONS = 64;
const RPMTAG_HEADERSIGNATURES = 62;
const RPMTAG_ICON = 1043;
const RPMTAG_INSTALLCOLOR = 1127;
const RPMTAG_INSTALLTID = 1128;
const RPMTAG_INSTALLTIME = 1008;
const RPMTAG_INSTFILENAMES = 5040;
const RPMTAG_INSTPREFIXES = 1099;
const RPMTAG_LICENSE = 1014;
const RPMTAG_LONGARCHIVESIZE = 271;
const RPMTAG_LONGFILESIZES = 5008;
const RPMTAG_LONGSIGSIZE = 270;
const RPMTAG_LONGSIZE = 5009;
const RPMTAG_MODULARITYLABEL = 5096;
const RPMTAG_N = 1000;
const RPMTAG_NAME = 1000;
const RPMTAG_NEVR = 5015;
const RPMTAG_NEVRA = 5016;
const RPMTAG_NOPATCH = 1052;
const RPMTAG_NOSOURCE = 1051;
const RPMTAG_NVR = 5014;
const RPMTAG_NVRA = 1196;
const RPMTAG_O = 1090;
const RPMTAG_OBSOLETEFLAGS = 1114;
const RPMTAG_OBSOLETENAME = 1090;
const RPMTAG_OBSOLETENEVRS = 5043;
const RPMTAG_OBSOLETES = 1090;
const RPMTAG_OBSOLETEVERSION = 1115;
const RPMTAG_OLDENHANCES = 1159;
const RPMTAG_OLDENHANCESFLAGS = 1161;
const RPMTAG_OLDENHANCESNAME = 1159;
const RPMTAG_OLDENHANCESVERSION = 1160;
const RPMTAG_OLDFILENAMES = 1027;
const RPMTAG_OLDSUGGESTS = 1156;
const RPMTAG_OLDSUGGESTSFLAGS = 1158;
const RPMTAG_OLDSUGGESTSNAME = 1156;
const RPMTAG_OLDSUGGESTSVERSION = 1157;
const RPMTAG_OPTFLAGS = 1122;
const RPMTAG_ORDERFLAGS = 5037;
const RPMTAG_ORDERNAME = 5035;
const RPMTAG_ORDERVERSION = 5036;
const RPMTAG_ORIGBASENAMES = 1120;
const RPMTAG_ORIGDIRINDEXES = 1119;
const RPMTAG_ORIGDIRNAMES = 1121;
const RPMTAG_ORIGFILENAMES = 5007;
const RPMTAG_OS = 1021;
const RPMTAG_P = 1047;
const RPMTAG_PACKAGER = 1015;
const RPMTAG_PATCH = 1019;
const RPMTAG_PATCHESFLAGS = 1134;
const RPMTAG_PATCHESNAME = 1133;
const RPMTAG_PATCHESVERSION = 1135;
const RPMTAG_PAYLOADCOMPRESSOR = 1125;
const RPMTAG_PAYLOADDIGEST = 5092;
const RPMTAG_PAYLOADDIGESTALGO = 5093;
const RPMTAG_PAYLOADFLAGS = 1126;
const RPMTAG_PAYLOADFORMAT = 1124;
const RPMTAG_PKGID = 261;
const RPMTAG_PLATFORM = 1132;
const RPMTAG_POLICIES = 1150;
const RPMTAG_POLICYFLAGS = 5033;
const RPMTAG_POLICYNAMES = 5030;
const RPMTAG_POLICYTYPES = 5031;
const RPMTAG_POLICYTYPESINDEXES = 5032;
const RPMTAG_POSTIN = 1024;
const RPMTAG_POSTINFLAGS = 5021;
const RPMTAG_POSTINPROG = 1086;
const RPMTAG_POSTTRANS = 1152;
const RPMTAG_POSTTRANSFLAGS = 5025;
const RPMTAG_POSTTRANSPROG = 1154;
const RPMTAG_POSTUN = 1026;
const RPMTAG_POSTUNFLAGS = 5023;
const RPMTAG_POSTUNPROG = 1088;
const RPMTAG_PREFIXES = 1098;
const RPMTAG_PREIN = 1023;
const RPMTAG_PREINFLAGS = 5020;
const RPMTAG_PREINPROG = 1085;
const RPMTAG_PRETRANS = 1151;
const RPMTAG_PRETRANSFLAGS = 5024;
const RPMTAG_PRETRANSPROG = 1153;
const RPMTAG_PREUN = 1025;
const RPMTAG_PREUNFLAGS = 5022;
const RPMTAG_PREUNPROG = 1087;
const RPMTAG_PROVIDEFLAGS = 1112;
const RPMTAG_PROVIDENAME = 1047;
const RPMTAG_PROVIDENEVRS = 5042;
const RPMTAG_PROVIDES = 1047;
const RPMTAG_PROVIDEVERSION = 1113;
const RPMTAG_PUBKEYS = 266;
const RPMTAG_R = 1002;
const RPMTAG_RECOMMENDFLAGS = 5048;
const RPMTAG_RECOMMENDNAME = 5046;
const RPMTAG_RECOMMENDNEVRS = 5058;
const RPMTAG_RECOMMENDS = 5046;
const RPMTAG_RECOMMENDVERSION = 5047;
const RPMTAG_RECONTEXTS = 1149;
const RPMTAG_RELEASE = 1002;
const RPMTAG_REMOVETID = 1129;
const RPMTAG_REQUIREFLAGS = 1048;
const RPMTAG_REQUIRENAME = 1049;
const RPMTAG_REQUIRENEVRS = 5041;
const RPMTAG_REQUIRES = 1049;
const RPMTAG_REQUIREVERSION = 1050;
const RPMTAG_RPMVERSION = 1064;
const RPMTAG_RSAHEADER = 268;
const RPMTAG_SHA1HEADER = 269;
const RPMTAG_SHA256HEADER = 273;
const RPMTAG_SIGGPG = 262;
const RPMTAG_SIGMD5 = 261;
const RPMTAG_SIGPGP = 259;
const RPMTAG_SIGSIZE = 257;
const RPMTAG_SIZE = 1009;
const RPMTAG_SOURCE = 1018;
const RPMTAG_SOURCEPACKAGE = 1106;
const RPMTAG_SOURCEPKGID = 1146;
const RPMTAG_SOURCERPM = 1044;
const RPMTAG_SUGGESTFLAGS = 5051;
const RPMTAG_SUGGESTNAME = 5049;
const RPMTAG_SUGGESTNEVRS = 5059;
const RPMTAG_SUGGESTS = 5049;
const RPMTAG_SUGGESTVERSION = 5050;
const RPMTAG_SUMMARY = 1004;
const RPMTAG_SUPPLEMENTFLAGS = 5054;
const RPMTAG_SUPPLEMENTNAME = 5052;
const RPMTAG_SUPPLEMENTNEVRS = 5060;
const RPMTAG_SUPPLEMENTS = 5052;
const RPMTAG_SUPPLEMENTVERSION = 5053;
const RPMTAG_TRANSFILETRIGGERCONDS = 5088;
const RPMTAG_TRANSFILETRIGGERFLAGS = 5082;
const RPMTAG_TRANSFILETRIGGERINDEX = 5080;
const RPMTAG_TRANSFILETRIGGERNAME = 5079;
const RPMTAG_TRANSFILETRIGGERPRIORITIES = 5085;
const RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS = 5078;
const RPMTAG_TRANSFILETRIGGERSCRIPTPROG = 5077;
const RPMTAG_TRANSFILETRIGGERSCRIPTS = 5076;
const RPMTAG_TRANSFILETRIGGERTYPE = 5089;
const RPMTAG_TRANSFILETRIGGERVERSION = 5081;
const RPMTAG_TRIGGERCONDS = 5005;
const RPMTAG_TRIGGERFLAGS = 1068;
const RPMTAG_TRIGGERINDEX = 1069;
const RPMTAG_TRIGGERNAME = 1066;
const RPMTAG_TRIGGERSCRIPTFLAGS = 5027;
const RPMTAG_TRIGGERSCRIPTPROG = 1092;
const RPMTAG_TRIGGERSCRIPTS = 1065;
const RPMTAG_TRIGGERTYPE = 5006;
const RPMTAG_TRIGGERVERSION = 1067;
const RPMTAG_URL = 1020;
const RPMTAG_V = 1001;
const RPMTAG_VCS = 5034;
const RPMTAG_VENDOR = 1011;
const RPMTAG_VERBOSE = 5018;
const RPMTAG_VERIFYSCRIPT = 1079;
const RPMTAG_VERIFYSCRIPTFLAGS = 5026;
const RPMTAG_VERIFYSCRIPTPROG = 1091;
const RPMTAG_VERSION = 1001;
const RPMTAG_XPM = 1013;

/**
*<div id="function.rpmvercmp" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmvercmp</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">rpmvercmp</span> &mdash; <span class="dc-title">RPM version comparison</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rpmvercmp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmvercmp</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$evr1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$evr2</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">string</span><span class="type" style="color:#EAB766"></span></span> <span class="parameter" style="color:#3A95FF">$operator</span><span class="initializer"> = <strong><span>null</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">int</span>|<span class="type" style="color:#EAB766">bool</span></span></div>  <p class="para rdfs-comment">   Compare 2 RPM versions.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rpmvercmp-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">evr1</span></dt>    <dd>     <span>      First epoch:version-release string     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">evr2</span></dt>    <dd>     <p class="para">      Second epoch:version-release string     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">operator</span></dt>    <dd>     <p class="para">      An optional operator. The possible operators      are: <span>&lt;</span>, <span>lt</span>,      <span>&lt;=</span>, <span>le</span>, <span>&gt;</span>,      <span>gt</span>, <span>&gt;=</span>, <span>ge</span>,      <span>==</span>, <span>=</span>, <span>eq</span>,      <span>!=</span>, <span>&lt;&gt;</span>, <span>ne</span>      respectively.     </p>     <p class="para">      This parameter is case-sensitive, values should be lowercase.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rpmvercmp-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns &lt; 0 if evr1 is less than evr2, &gt; 0 if evr1 is greater than evr2, and 0 if they are equal.  </p>  <p class="para">   When using the optional <span class="parameter" style="color:#3A95FF">operator</span> argument, the   function will return <strong><span>true</span></strong> if the relationship is the one specified   by the operator, <strong><span>false</span></strong> otherwise.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.rpmvercmp-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>0.7.0</td>      <td>       Optional <span class="parameter" style="color:#3A95FF">operator</span> was added.      </td>     </tr>    </tbody>     </table> </div></div>
 * @return int <p>*/
function rpmvercmp(string $evr1, string $evr2) {}

/**
*<div id="function.rpminfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpminfo</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">rpminfo</span> &mdash; <span class="dc-title">Get information from a RPM file</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rpminfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>rpminfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$full</span><span class="initializer"> = <strong><span>false</span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">&$error</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">array</span></span></div>  <p class="para rdfs-comment">   Retrieve information about a local file, a RPM package.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rpminfo-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">path</span></dt>    <dd>     <span>      Path of the RPM file.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <p class="para">      If <strong><span>true</span></strong> all information headers for the file are retrieved, else only a minimal set.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">error</span></dt>    <dd>     <p class="para">      If provided, will receive the possible error message, and will avoid a runtime warning.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rpminfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   An <span class="type" style="color:#EAB766">array</span> of information or NULL on error.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rpminfo-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">rpminfo()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />rpmaddtag</span><span style="color: #007700">(</span><span style="color: #9876AA">RPMTAG_BUILDTIME</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpminfo</span><span style="color: #007700">(</span><span style="color: #DD0000">"./php-pecl-rpminfo-0.4.2-1.el8.remi.7.4.x86_64.rpm"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>Array<br>(<br>    [Name] =&gt; php-pecl-rpminfo<br>    [Version] =&gt; 0.4.2<br>    [Release] =&gt; 1.el8<br>    [Summary] =&gt; RPM information<br>    [Buildtime] =&gt; 1586244821<br>    [Arch] =&gt; x86_64<br>)<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rpminfo-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>   </ul>  </span> </div></div>
 * @return array|null <p>*/
function rpminfo(string $path, bool $full = false, ?string &$error = null) {}

/**
*<div id="function.rpmdbinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmdbinfo</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">rpmdbinfo</span> &mdash; <span class="dc-title">Get information from installed RPM</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rpmdbinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmdbinfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$nevr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$full</span><span class="initializer"> = <strong><span>false</span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">array</span></span></div>  <p class="para rdfs-comment">   Retrieve information about an installed package, from the system RPM database.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rpmdbinfo-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">nevr</span></dt>    <dd>     <span>      Name with optional epoch, version and release.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <p class="para">      If <strong><span>true</span></strong> all information headers for the file are retrieved, else only a minimal set.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rpmdbinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   An <span class="type" style="color:#EAB766">array</span> of <span class="type" style="color:#EAB766">array</span> of information or NULL on error.     </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rpmdbinfo-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">rpmdbinfo()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />rpmaddtag</span><span style="color: #007700">(</span><span style="color: #9876AA">RPMTAG_INSTALLTIME</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpmdbinfo</span><span style="color: #007700">(</span><span style="color: #DD0000">"php-pecl-rpminfo"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>Array<br>(<br>    [0] =&gt; Array<br>        (<br>            [Name] =&gt; php-pecl-rpminfo<br>            [Version] =&gt; 0.4.2<br>            [Release] =&gt; 1.fc31<br>            [Summary] =&gt; RPM information<br>            [Installtime] =&gt; 1586244687<br>            [Arch] =&gt; x86_64<br>        )<br>)<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rpmdbinfo-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>   </ul>  </span> </div></div>
 * @return array|null <p>*/
function rpmdbinfo(string $nevr, bool $full = false) {}

/**
*<div id="function.rpmdbsearch" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmdbsearch</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.3.0)</p><p class="refpurpose"><span class="refname">rpmdbsearch</span> &mdash; <span class="dc-title">Search RPM packages</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.rpmdbsearch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmdbsearch</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#3A95FF">$pattern</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$rpmtag</span><span class="initializer"> = RPMTAG_NAME</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#3A95FF">$rpmmire</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#3A95FF">$full</span><span class="initializer"> = <strong><span>false</span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766">array</span></span></div>  <p class="para rdfs-comment">   Search packages in the system RPM database.  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.rpmdbsearch-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">pattern</span></dt>    <dd>     <span>      Value to search for.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">rpmtag</span></dt>    <dd>     <p class="para">      Search criterion, one of RPMTAG_* constant, see the <a href="https://www.php.net/manual/zh/rpminfo.constants.php" class="link">rpminfo constants</a> page.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">rpmmire</span></dt>    <dd>     <p class="para">      Pattern type, one of RPMMIRE_* constant, see the <a href="https://www.php.net/manual/zh/rpminfo.constants.php" class="link">rpminfo constants</a> page.      When &lt; 0 the criterion must equals the value, and database index is used if possible.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <p class="para">      If <strong><span>true</span></strong> all information headers for the file are retrieved, else only a minimal set.     </p>    </dd>     </dl> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.rpmdbsearch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   An <span class="type" style="color:#EAB766">array</span> of <span class="type" style="color:#EAB766">array</span> of information or NULL on error.     </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.rpmdbsearch-examples">  <h3 class="title">示例</h3>  <span>   <div class="example" id="">    <p><strong>示例 #1 Searching for the package owning a file</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br />$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpmdbsearch</span><span style="color: #007700">(</span><span style="color: #DD0000">"/usr/bin/php"</span><span style="color: #007700">, </span><span style="color: #9876AA">RPMTAG_INSTFILENAMES</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span></span></span></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="color:AFB1B3;background:black;padding-left:5px;"><div class="cdata"><span>Array<br>(<br>    [0] =&gt; Array<br>        (<br>            [Name] =&gt; php-cli<br>            [Version] =&gt; 7.4.4<br>            [Release] =&gt; 1.fc32<br>            [Summary] =&gt; Command-line interface for PHP<br>            [Arch] =&gt; x86_64<br>        )<br><br>)<br></span></div>    </div>   </div>  </span> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.rpmdbsearch-seealso">  <h3 class="title">参见</h3>  <span>   <ul class="simplelist">    <li class="member"><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>   </ul>  </span> </div></div>
 * @return array|null <p>*/
function rpmdbsearch(string $pattern, int $rpmtag = RPMTAG_NAME, int $rpmmire = -1, bool $full = false) {}
