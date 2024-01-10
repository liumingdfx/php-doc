<?php
declare(strict_types=1);

namespace StubTests;

use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;
use phpDocumentor\Reflection\DocBlock\Tags\Link;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use phpDocumentor\Reflection\DocBlock\Tags\Since;
use PHPUnit\Framework\Exception;
use StubTests\Model\BasePHPClass;
use StubTests\Model\BasePHPElement;
use StubTests\Model\PHPConst;
use StubTests\Model\PHPDocElement;
use StubTests\Model\PHPFunction;
use StubTests\Model\PHPMethod;
use StubTests\Model\Tags\RemovedTag;
use StubTests\Parsers\ParserUtils;
use function trim;

class StubsPhpDocTest extends AbstractBaseStubsTestCase
{
    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubConstantsProvider::classConstantProvider
     * @throws Exception
     */
    public static function testClassConstantsPHPDocs(BasePHPClass $class, PHPConst $constant): void
    {
        self::assertNull($constant->parseError, $constant->parseError ?: '');
        self::checkPHPDocCorrectness($constant, "constant $class->sourceFilePath/$class->name::$constant->name");
    }

    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubConstantsProvider::globalConstantProvider
     * @throws Exception
     */
    public static function testConstantsPHPDocs(PHPConst $constant): void
    {
        self::assertNull($constant->parseError, $constant->parseError ?: '');
        self::checkPHPDocCorrectness($constant, "constant $constant->name");
    }

    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubsTestDataProviders::allFunctionsProvider
     * @throws Exception
     */
    public static function testFunctionPHPDocs(PHPFunction $function): void
    {
        self::assertNull($function->parseError, $function->parseError?->getMessage() ?: '');
        self::checkPHPDocCorrectness($function, "function $function->name");
    }

    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubsTestDataProviders::allClassesProvider
     * @throws Exception
     */
    public static function testClassesPHPDocs(BasePHPClass $class): void
    {
        self::assertNull($class->parseError, $class->parseError?->getMessage() ?: '');
        self::checkPHPDocCorrectness($class, "class $class->name");
    }

    /**
     * @dataProvider \StubTests\TestData\Providers\Stubs\StubMethodsProvider::allMethodsProvider
     * @throws Exception
     */
    public static function testMethodsPHPDocs(PHPMethod $method): void
    {
        if ($method->name === '__construct') {
            self::assertEmpty($method->returnTypesFromPhpDoc, '@return tag for __construct should be omitted');
        }
        self::assertNull($method->parseError, $method->parseError ?: '');
        self::checkPHPDocCorrectness($method, "method $method->name");
    }

    //TODO IF: Add test to check that phpdocs contain only resource, object etc typehints or if contains type like Resource then Resource should be declared in stubs

    private static function checkDeprecatedRemovedSinceVersionsMajor(BasePHPElement $element, string $elementName): void
    {
        /** @var PHPDocElement $element */
        foreach ($element->sinceTags as $sinceTag) {
            if ($sinceTag instanceof Since) {
                $version = $sinceTag->getVersion();
                if ($version !== null) {
                    self::assertTrue(ParserUtils::tagDoesNotHaveZeroPatchVersion($sinceTag), "$elementName has 
                    'since' version $version.'Since' version for PHP Core functionality for style consistency 
                    should have X.X format for the case when patch version is '0'.");
                }
            }
        }
        foreach ($element->deprecatedTags as $deprecatedTag) {
            if ($deprecatedTag instanceof Deprecated) {
                $version = $deprecatedTag->getVersion();
                if ($version !== null) {
                    self::assertTrue(ParserUtils::tagDoesNotHaveZeroPatchVersion($deprecatedTag), "$elementName has 
                    'deprecated' version $version.'Deprecated' version for PHP Core functionality for style consistency 
                    should have X.X format for the case when patch version is '0'.");
                }
            }
        }
        foreach ($element->removedTags as $removedTag) {
            if ($removedTag instanceof RemovedTag) {
                $version = $removedTag->getVersion();
                if ($version !== null) {
                    self::assertTrue(ParserUtils::tagDoesNotHaveZeroPatchVersion($removedTag), "$elementName has 
                    'removed' version $version.'Removed' version for PHP Core functionality for style consistency 
                    should have X.X format for the case when patch version is '0'.");
                }
            }
        }
    }

    private static function checkHtmlTags(BasePHPElement $element, string $elementName): void
    {
        /** @var PHPDocElement $element */
        $phpdoc = trim($element->phpdoc);

        $phpdoc = preg_replace(
            [
                '#<br\s*/>#',
                '#<br>#i',
                '#->#',
                '#=>#',
                '#"->"#',
                '# >= #',
                '#\(>=#',
                '#\'>\'#',
                '# > #',
                '#\?>#',
                '#`<.*>`#U',
                '#`.*<.*>`#U',
                '#<pre>.*</pre>#sU',
                '#<code>.*</code>#sU',
                '#@author.*<.*>#U',
                '#(\s[\w]+[-][\w]+<[a-zA-Z,\s]+>[\s|]+)|([\w]+<[a-zA-Z,|\s]+>[\s|\W]+)#'
            ],
            '',
            $phpdoc
        );

        $countTags = substr_count($phpdoc, '>');
        self::assertSame(
            0,
            $countTags % 2,
            "In $elementName phpdoc has a html error and the phpdoc maybe not displayed correctly in PhpStorm: " . print_r($phpdoc, true)
        );
    }

    private static function checkLinks(BasePHPElement $element, string $elementName): void
    {
        /** @var PHPDocElement $element */
        foreach ($element->links as $link) {
            if ($link instanceof Link) {
                self::assertStringStartsWith(
                    'https',
                    $link->getLink(),
                    "In $elementName @link doesn't start with https"
                );
                if (getenv('CHECK_LINKS') === 'true') {
                    if ($element->stubBelongsToCore) {
/**
*<div id="reserved.variables.request" class="refentry"> <div class="refnamediv">  <h1 class="refname">$_REQUEST</h1>  <p class="refpurpose"><span class="refname">$_REQUEST</span> &mdash; <span class="dc-title">HTTP Request 变量</span></p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-reserved.variables.request-description">  <h3 class="title">说明</h3>  <p class="para">   默认情况下包含了 <var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.get.php" class="classname">$_GET</a></var>，<var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.post.php" class="classname">$_POST</a></var>  和  <var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.cookies.php" class="classname">$_COOKIE</a></var> 的<span class="type" style="color:#EAB766"><span class="type 数组" style="color:#EAB766">数组</span></span>。  </p> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-reserved.variables.request-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <p class="para">“Superglobal”也称为自动化的全局变量。这就表示其在脚本的所有作用域中都是可用的。不需要在函数或方法中用<strong class="command">global $variable;</strong> 来访问它。</p></p></blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <p class="para">    以<a href="https://www.php.net/manual/zh/features.commandline.php" class="link">命令行</a>方式运行时，将<em>不</em>包含 <a href="https://www.php.net/manual/zh/reserved.variables.argv.php" class="link">argv</a> 和 <a href="https://www.php.net/manual/zh/reserved.variables.argc.php" class="link">argc</a> 信息；它们将存在于 <var class="varname"><a href="https://www.php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER</a></var> <span class="type" style="color:#EAB766"><span class="type 数组" style="color:#EAB766">数组</span></span>。   </p>  </p></blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <p class="para">    由于 <var class="varname">$_REQUEST</var> 中的变量通过 GET，POST 和 COOKIE 输入机制传递给脚本文件，因此可以被远程用户篡改而并不可信。这个数组的项目及其顺序依赖于 PHP 的     <a href="https://www.php.net/manual/zh/ini.core.php#ini.request-order" class="link">request_order</a> 和 <a href="https://www.php.net/manual/zh/ini.core.php#ini.variables-order" class="link">variables_order</a> 指令的配置。   </p>  </p></blockquote> </div> <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-reserved.variables.request-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li class="member"><a href="https://www.php.net/manual/zh/language.variables.external.php" class="link">处理外部变量</a></li>   <li class="member"><a href="https://www.php.net/manual/zh/book.filter.php" class="link">过滤器扩展</a></li>  </ul> </div> </div>
*/
                        $request = curl_init($link->getLink());
                        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
                        curl_exec($request);
                        $response = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
                        curl_close($request);
                        self::assertTrue($response < 400);
                    }
                }
            }
        }
        foreach ($element->see as $see) {
            if ($see instanceof See && $see->getReference() instanceof Url) {
                $uri = (string)$see->getReference();
                self::assertStringStartsWith('https', $uri, "In $elementName @see doesn't start with https");
            }
        }
    }

    /**
     * @throws Exception
     */
    private static function checkContainsOnlyValidTags(BasePHPElement $element, string $elementName): void
    {
        $VALID_TAGS = [
            'author',
            'copyright',
            'deprecated',
            'example', //temporary addition due to the number of existing cases
            'extends',
            'inheritdoc',
            'inheritDoc',
            'internal',
            'implements',
            'link',
            'meta',
            'method',
            'mixin',
            'package',
            'param',
            'property',
            'property-read',
            'removed',
            'return',
            'see',
            'since',
            'throws',
            'template',
            'template-implements', // https://github.com/JetBrains/phpstorm-stubs/pull/1212#issuecomment-907263735
            'template-extends',
            'template-covariant',
            'uses',
            'var',
            'version',
        ];
        /** @var PHPDocElement $element */
        foreach ($element->tagNames as $tagName) {
            self::assertContains($tagName, $VALID_TAGS, "Element $elementName has invalid tag: @$tagName");
        }
    }

    /**
     * @throws Exception
     */
    private static function checkPHPDocCorrectness(BasePHPElement $element, string $elementName): void
    {
        self::checkLinks($element, $elementName);
        //self::checkHtmlTags($element, $elementName);
        if ($element->stubBelongsToCore) {
            self::checkDeprecatedRemovedSinceVersionsMajor($element, $elementName);
        }
        self::checkContainsOnlyValidTags($element, $elementName);
    }
}
