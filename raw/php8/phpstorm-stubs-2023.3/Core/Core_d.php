<?php

// Start of Core v.5.3.6-13ubuntu3.2

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_ERROR', 1);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>。      
*/
define('E_RECOVERABLE_ERROR', 4096);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_WARNING', 2);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_PARSE', 4);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_NOTICE', 8);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_STRICT', 2048);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>。      
*/
define('E_DEPRECATED', 8192);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_CORE_ERROR', 16);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_CORE_WARNING', 32);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_COMPILE_ERROR', 64);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_COMPILE_WARNING', 128);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_USER_ERROR', 256);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_USER_WARNING', 512);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_USER_NOTICE', 1024);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>。      
*/
define('E_USER_DEPRECATED', 16384);

/**
*       <a href="https://www.php.net/manual/zh/errorfunc.constants.php" class="link">错误报告常量</a>      
*/
define('E_ALL', 32767);
define('DEBUG_BACKTRACE_PROVIDE_OBJECT', 1);
define('DEBUG_BACKTRACE_IGNORE_ARGS', 2);
define('S_MEMORY', 1);
define('S_VARS', 4);
define('S_FILES', 8);
define('S_INCLUDE', 16);
define('S_SQL', 32);
define('S_EXECUTOR', 64);
define('S_MAIL', 128);
define('S_SESSION', 256);
define('S_MISC', 2);
define('S_INTERNAL', 536870912);
define('S_ALL', 511);

/**
*       参阅 <a href="https://www.php.net/manual/zh/language.types.boolean.php" class="link">布尔值</a>。      
*/
define('true', (bool)1, true);
/**
*       参阅 <a href="https://www.php.net/manual/zh/language.types.boolean.php" class="link">布尔值</a>。      
*/
define('false', (bool)0, true);
/**
*       参阅 <a href="https://www.php.net/manual/zh/language.types.null.php" class="link">Null</a>。      
*/
define('null', null, true);
/**
*       Indicates whether the current build of PHP is thread safe.      
*/
define('ZEND_THREAD_SAFE', false);
/**
*       表示当前 PHP 版本是否为调试版本。      
*/
define('ZEND_DEBUG_BUILD', false);
define('PHP_WINDOWS_VERSION_BUILD', 0);
/**
*4
*/
define('PHP_WINDOWS_VERSION_MAJOR', 0);
define('PHP_WINDOWS_VERSION_MINOR', 0);
/**
*2
*/
define('PHP_WINDOWS_VERSION_PLATFORM', 0);
/**
*PHP_WINDOWS_NT_*
*/
define('PHP_WINDOWS_VERSION_PRODUCTTYPE', 0);
define('PHP_WINDOWS_VERSION_SP_MAJOR', 0);
define('PHP_WINDOWS_VERSION_SP_MINOR', 0);
/**
*<strong>Windows suitemask 位字段</strong>
*/
define('PHP_WINDOWS_VERSION_SUITEMASK', 0);
define('PHP_WINDOWS_NT_DOMAIN_CONTROLLER', 2);
/**
*<code>PHP_WINDOWS_NT_DOMAIN_CONTROLLER</code>
*/
define('PHP_WINDOWS_NT_SERVER', 3);
define('PHP_WINDOWS_NT_WORKSTATION', 1);
/**
*       Windows <code class="literal">CTRL+C</code> 事件。       从 PHP 7.4.0 起可用（仅限 Windows）。      
*/
define('PHP_WINDOWS_EVENT_CTRL_C', 0);
/**
*       Windows <code class="literal">CTRL+BREAK</code> 事件。       从 PHP 7.4.0 起可用（仅限 Windows）。      
*/
define('PHP_WINDOWS_EVENT_CTRL_BREAK', 1);
/**
*       当前 PHP 版本的字符串，“主版本号.子版本号.阶段版本号[扩展信息]”形式。      
*/
define('PHP_VERSION', "5.3.6-13ubuntu3.2");
/**
*       当前 PHP 版本的主版本号，为整数形式（例如：“5.2.7-extra” 版本是 int(5) ）。      
*/
define('PHP_MAJOR_VERSION', 5);
/**
*       当前 PHP 版本的子版本号，为整数形式（例如：“5.2.7-extra” 版本是 int(2) ）。      
*/
define('PHP_MINOR_VERSION', 3);
/**
*       当前 PHP 版本的阶段版本号，为整数形式（例如：“5.2.7-extra” 版本是 int(7) ）。      
*/
define('PHP_RELEASE_VERSION', 6);
/**
*       当前 PHP 版本的&quot;扩展信息&quot;信息，为字符串形式（例如：“5.2.7-extra” 版本是 &#039;-extra&#039; ）。       通常由发行版供应商用来指示包的版本。      
*/
define('PHP_EXTRA_VERSION', "-13ubuntu3.2");
/**
*       当前 PHP 版本的整数，用于版本比较（例如：“5.2.7-extra” 版本是 int(50207) ）。      
*/
define('PHP_VERSION_ID', 50306);
/**
*       表示 PHP 的当前版本是否为线程安全版本。      
*/
define('PHP_ZTS', 0);
/**
*       表示当前 PHP 版本是否为调试版本。      
*/
define('PHP_DEBUG', 0);
/**
*       运行 PHP 的操作系统。      
*/
define('PHP_OS', "Linux");
/**
*       运行 PHP 的操作系统家族。       <code class="literal">&#039;Windows&#039;</code>、 <code class="literal">&#039;BSD&#039;</code>、       <code class="literal">&#039;Darwin&#039;</code>、 <code class="literal">&#039;Solaris&#039;</code>、       <code class="literal">&#039;Linux&#039;</code> 或 <code class="literal">&#039;Unknown&#039;</code> 中的一个。       从 PHP 7.2.0 起可用。      
*/
define('PHP_OS_FAMILY', "Linux");
/**
*       运行 PHP 的服务器接口类型（Server API）。参见 <span class="function">{@link php_sapi_name()}</span>。      
*/
define('PHP_SAPI', "cli");
/**
 * @since 7.4
 */
define('PHP_CLI_PROCESS_TITLE', 1);
define('DEFAULT_INCLUDE_PATH', ".:/usr/share/php:/usr/share/pear");
define('PEAR_INSTALL_DIR', "/usr/share/php");
define('PEAR_EXTENSION_DIR', "/usr/lib/php5/20090626");
/**
*       寻找可动态加载扩展的默认目录（除非被 <a href="https://www.php.net/manual/zh/ini.core.php#ini.extension-dir" class="link">extension_dir</a>覆盖）。       默认为 <strong><code>PHP_PREFIX</code></strong> （在 Windows 上是 <code class="code">PHP_PREFIX . &quot;\\ext&quot;</code>）。      
*/
define('PHP_EXTENSION_DIR', "/usr/lib/php5/20090626");
/**
*       脚本执行期间的 PHP 二进制路径。      
*/
define('PHP_BINARY', '/usr/local/php/bin/php');
/**
*       配置（configure）时设置的 <strong class="option configure">--prefix</strong> 值。       在 Windows 上，它是配置（configure）时设置的 <strong class="option configure">--with-prefix</strong> 值。      
*/
define('PHP_PREFIX', "/usr");
/**
*       配置（configure）时设置的 <strong class="option configure">--bindir</strong> 值。       在 Windows 上，它是配置（configure）时设置的 <strong class="option configure">--with-prefix</strong> 值。      
*/
define('PHP_BINDIR', "/usr/bin");
define('PHP_LIBDIR', "/usr/lib/php5");
define('PHP_DATADIR', "/usr/share");
define('PHP_SYSCONFDIR', "/etc");
define('PHP_LOCALSTATEDIR', "/var");
define('PHP_CONFIG_FILE_PATH', "/etc/php5/cli");
define('PHP_CONFIG_FILE_SCAN_DIR', "/etc/php5/cli/conf.d");
/**
*       构建平台的共享库后缀，例如 “so”（大多数 Unix） 或 “dll”（Windows）。      
*/
define('PHP_SHLIB_SUFFIX', "so");
/**
*       当前平台中对于换行符的定义。      
*/
define('PHP_EOL', "\n");
define('SUHOSIN_PATCH', 1);
define('SUHOSIN_PATCH_VERSION', "0.9.10");
/**
*       当前 PHP 版本支持的最大文件名（包括路径）长度。      
*/
define('PHP_MAXPATHLEN', 4096);
/**
*     当前 PHP 版本支持的最大整型数字。在 32 位系统中通常为 int(2147483647)，64 位系统中为 int(9223372036854775807)。      
*/
define('PHP_INT_MAX', 9223372036854775807);
/**
*       当前 PHP 版本支持的最小整型数字。在 32 位系统中通常为 int(-2147483648)，64 系统中为 int(-9223372036854775808)。通常情况下 PHP_INT_MIN === ~PHP_INT_MAX。      
*/
define('PHP_INT_MIN', -9223372036854775808);
/**
*       当前 PHP 版本的整数大小（以字节为单位）。      
*/
define('PHP_INT_SIZE', 8);
/**
*       可以返回四舍五入为浮点数后不会造成精度损失的小数位数。       从 PHP 7.2.0 起可用。      
*/
define('PHP_FLOAT_DIG', 15);
/**
*       最小的可表示正数 x，使 <code class="literal">x + 1.0 != 1.0</code>。       从 PHP 7.2.0 起可用。      
*/
define('PHP_FLOAT_EPSILON', 2.2204460492503e-16);

/**
*       最大的可表示浮点数。       从 PHP 7.2.0 起可用。      
*/
define('PHP_FLOAT_MAX', 1.7976931348623e+308);
/**
*       最小可表示的<em>正</em>浮点数。       如果你需要最小的可表示<em>负</em>浮点数，可以使用 <code class="literal">- PHP_FLOAT_MAX</code>。       从 PHP 7.2.0 起可用。      
*/
define('PHP_FLOAT_MIN', 2.2250738585072e-308);
define('ZEND_MULTIBYTE', 0);
/**
*      表示输出缓冲已经开始。     
*/
define('PHP_OUTPUT_HANDLER_START', 1);
/**
*      表示缓冲已清空，但输出缓冲将继续。     
*/
define('PHP_OUTPUT_HANDLER_CONT', 2);
/**
*      表示输出缓冲已结束。     
*/
define('PHP_OUTPUT_HANDLER_END', 4);
define('UPLOAD_ERR_OK', 0);
define('UPLOAD_ERR_INI_SIZE', 1);
define('UPLOAD_ERR_FORM_SIZE', 2);
define('UPLOAD_ERR_PARTIAL', 3);
define('UPLOAD_ERR_NO_FILE', 4);
define('UPLOAD_ERR_NO_TMP_DIR', 6);
define('UPLOAD_ERR_CANT_WRITE', 7);
define('UPLOAD_ERR_EXTENSION', 8);
define('STDIN', fopen('php://stdin', 'r'));
define('STDOUT', fopen('php://stdout', 'w'));
define('STDERR', fopen('php://stderr', 'w'));

/**
*       系统调用的文件描述符的最大数目。从 PHP 7.1.0 起可用。      
*/
define('PHP_FD_SETSIZE', 1024);

/**
*      表示输出缓冲正在刷新，并且有数据要输出。     
*/
define('PHP_OUTPUT_HANDLER_WRITE', 0);
/**
*      表示缓冲已清空。     
*/
define('PHP_OUTPUT_HANDLER_FLUSH', 4);
/**
*      表示输出缓冲已清空。     
*/
define('PHP_OUTPUT_HANDLER_CLEAN', 2);
/**
*      表示这是最后一次输出缓冲操作。     
*/
define('PHP_OUTPUT_HANDLER_FINAL', 8);
/**
*      控制 <span class="function">{@link ob_start()}</span> 创建的输出缓冲是否可以清除。     
*/
define('PHP_OUTPUT_HANDLER_CLEANABLE', 16);
/**
*      控制 <span class="function">{@link ob_start()}</span> 创建的输出缓冲是否可以刷新。     
*/
define('PHP_OUTPUT_HANDLER_FLUSHABLE', 32);
/**
*      控制 <span class="function">{@link ob_start()}</span> 创建的输出缓冲是否可以在脚本结束前移除。     
*/
define('PHP_OUTPUT_HANDLER_REMOVABLE', 64);
/**
*      输出缓冲 flag 的默认设置；当前等同于      <strong><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></strong> |      <strong><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></strong> |      <strong><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></strong>.     
*/
define('PHP_OUTPUT_HANDLER_STDFLAGS', 112);
/** @link https://php.net/manual/en/outcontrol.constants.php */
define('PHP_OUTPUT_HANDLER_STARTED', 4096);
/** @link https://php.net/manual/en/outcontrol.constants.php */
define('PHP_OUTPUT_HANDLER_DISABLED', 8192);

/**
*       安装手册页的位置。      
*/
define('PHP_MANDIR', '/usr/local/php/php/man');
