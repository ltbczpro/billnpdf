<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e4ed8fc451391b4f64d3595d3f48e6e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spipu\\Html2Pdf\\' => 15,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spipu\\Html2Pdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/spipu/html2pdf/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'Spipu\\Html2Pdf\\CssConverter' => __DIR__ . '/..' . '/spipu/html2pdf/src/CssConverter.php',
        'Spipu\\Html2Pdf\\Debug\\Debug' => __DIR__ . '/..' . '/spipu/html2pdf/src/Debug/Debug.php',
        'Spipu\\Html2Pdf\\Debug\\DebugInterface' => __DIR__ . '/..' . '/spipu/html2pdf/src/Debug/DebugInterface.php',
        'Spipu\\Html2Pdf\\Exception\\ExceptionFormatter' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/ExceptionFormatter.php',
        'Spipu\\Html2Pdf\\Exception\\Html2PdfException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/Html2PdfException.php',
        'Spipu\\Html2Pdf\\Exception\\HtmlParsingException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/HtmlParsingException.php',
        'Spipu\\Html2Pdf\\Exception\\ImageException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/ImageException.php',
        'Spipu\\Html2Pdf\\Exception\\LocaleException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/LocaleException.php',
        'Spipu\\Html2Pdf\\Exception\\LongSentenceException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/LongSentenceException.php',
        'Spipu\\Html2Pdf\\Exception\\TableException' => __DIR__ . '/..' . '/spipu/html2pdf/src/Exception/TableException.php',
        'Spipu\\Html2Pdf\\Extension\\CoreExtension' => __DIR__ . '/..' . '/spipu/html2pdf/src/Extension/CoreExtension.php',
        'Spipu\\Html2Pdf\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/spipu/html2pdf/src/Extension/ExtensionInterface.php',
        'Spipu\\Html2Pdf\\Html2Pdf' => __DIR__ . '/..' . '/spipu/html2pdf/src/Html2Pdf.php',
        'Spipu\\Html2Pdf\\Locale' => __DIR__ . '/..' . '/spipu/html2pdf/src/Locale.php',
        'Spipu\\Html2Pdf\\MyPdf' => __DIR__ . '/..' . '/spipu/html2pdf/src/MyPdf.php',
        'Spipu\\Html2Pdf\\Parsing\\Css' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/Css.php',
        'Spipu\\Html2Pdf\\Parsing\\Html' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/Html.php',
        'Spipu\\Html2Pdf\\Parsing\\HtmlLexer' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/HtmlLexer.php',
        'Spipu\\Html2Pdf\\Parsing\\Node' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/Node.php',
        'Spipu\\Html2Pdf\\Parsing\\TagParser' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/TagParser.php',
        'Spipu\\Html2Pdf\\Parsing\\TextParser' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/TextParser.php',
        'Spipu\\Html2Pdf\\Parsing\\Token' => __DIR__ . '/..' . '/spipu/html2pdf/src/Parsing/Token.php',
        'Spipu\\Html2Pdf\\Tag\\AbstractDefaultTag' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/AbstractDefaultTag.php',
        'Spipu\\Html2Pdf\\Tag\\AbstractTag' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/AbstractTag.php',
        'Spipu\\Html2Pdf\\Tag\\Address' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Address.php',
        'Spipu\\Html2Pdf\\Tag\\B' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/B.php',
        'Spipu\\Html2Pdf\\Tag\\Big' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Big.php',
        'Spipu\\Html2Pdf\\Tag\\Bookmark' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Bookmark.php',
        'Spipu\\Html2Pdf\\Tag\\Cite' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Cite.php',
        'Spipu\\Html2Pdf\\Tag\\Del' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Del.php',
        'Spipu\\Html2Pdf\\Tag\\Em' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Em.php',
        'Spipu\\Html2Pdf\\Tag\\Font' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Font.php',
        'Spipu\\Html2Pdf\\Tag\\I' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/I.php',
        'Spipu\\Html2Pdf\\Tag\\Ins' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Ins.php',
        'Spipu\\Html2Pdf\\Tag\\Label' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Label.php',
        'Spipu\\Html2Pdf\\Tag\\S' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/S.php',
        'Spipu\\Html2Pdf\\Tag\\Samp' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Samp.php',
        'Spipu\\Html2Pdf\\Tag\\Small' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Small.php',
        'Spipu\\Html2Pdf\\Tag\\Span' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Span.php',
        'Spipu\\Html2Pdf\\Tag\\Strong' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Strong.php',
        'Spipu\\Html2Pdf\\Tag\\Sub' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Sub.php',
        'Spipu\\Html2Pdf\\Tag\\Sup' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/Sup.php',
        'Spipu\\Html2Pdf\\Tag\\TagInterface' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/TagInterface.php',
        'Spipu\\Html2Pdf\\Tag\\U' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tag/U.php',
        'Spipu\\Html2Pdf\\Tests\\AbstractTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/AbstractTest.php',
        'Spipu\\Html2Pdf\\Tests\\CssConverterTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/CssConverterTest.php',
        'Spipu\\Html2Pdf\\Tests\\Debug\\DebugTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Debug/DebugTest.php',
        'Spipu\\Html2Pdf\\Tests\\Exception\\ExceptionFormatterTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Exception/ExceptionFormatterTest.php',
        'Spipu\\Html2Pdf\\Tests\\Exception\\LongSentenceExceptionTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Exception/LongSentenceExceptionTest.php',
        'Spipu\\Html2Pdf\\Tests\\Html2PdfTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Html2PdfTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\BackgroundErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Image/BackgroundErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\BackgroundOkTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Image/BackgroundOkTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\HtmlLexerTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/HtmlLexerTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\HtmlTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/HtmlTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\ParsingTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/ParsingTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\SrcErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Image/SrcErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\SrcOkTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Image/SrcOkTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\TagParserTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/TagParserTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\TextParserTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/TextParserTest.php',
        'Spipu\\Html2Pdf\\Tests\\Parsing\\TokenTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Parsing/TokenTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\DivTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/DivTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\ExamplesTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/ExamplesTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\FileNameErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Output/FileNameErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\FileNameOkTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Output/FileNameOkTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\LocaleTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/LocaleTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\MustHaveTagsTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/MustHaveTagsTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\CircleErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/CircleErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\EllipseErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/EllipseErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\GErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/GErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\LineErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/LineErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\PathErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/PathErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\PathInvalidTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/PathInvalidTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\PolygonErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/PolygonErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\PolylineErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/PolylineErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\Svg\\RectErrorTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/Svg/RectErrorTest.php',
        'Spipu\\Html2Pdf\\Tests\\Tag\\TdTooLongTest' => __DIR__ . '/..' . '/spipu/html2pdf/src/Tests/Tag/TdTooLongTest.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e4ed8fc451391b4f64d3595d3f48e6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e4ed8fc451391b4f64d3595d3f48e6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e4ed8fc451391b4f64d3595d3f48e6e::$classMap;

        }, null, ClassLoader::class);
    }
}