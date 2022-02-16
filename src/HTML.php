<?php

namespace RauweBieten\PhpHtmlGen;

use RuntimeException;

/**
 * Class HTML
 * @package RauweBieten\PhpNavigation\v2\Renderer\Helper
 *
 * SINGULAR TAGS
 * @method static area(array $attributes = [])
 * @method static base(array $attributes = [])
 * @method static br(array $attributes = [])
 * @method static col(array $attributes = [])
 * @method static embed(array $attributes = [])
 * @method static hr(array $attributes = [])
 * @method static img(array $attributes = [])
 * @method static input(array $attributes = [])
 * @method static link(array $attributes = [])
 * @method static meta(array $attributes = [])
 * @method static param(array $attributes = [])
 * @method static source(array $attributes = [])
 * @method static track(array $attributes = [])
 * @method static wbr(array $attributes = [])
 *
 * PAIRED TAGS
 * @method static a(mixed $content, array $attributes = [])
 * @method static abbr(mixed $content, array $attributes = [])
 * @method static acronym(mixed $content, array $attributes = [])
 * @method static address(mixed $content, array $attributes = [])
 * @method static applet(mixed $content, array $attributes = [])
 * @method static article(mixed $content, array $attributes = [])
 * @method static aside(mixed $content, array $attributes = [])
 * @method static audio(mixed $content, array $attributes = [])
 * @method static b(mixed $content, array $attributes = [])
 * @method static basefont(mixed $content, array $attributes = [])
 * @method static bdi(mixed $content, array $attributes = [])
 * @method static bdo(mixed $content, array $attributes = [])
 * @method static big(mixed $content, array $attributes = [])
 * @method static blockquote(mixed $content, array $attributes = [])
 * @method static body(mixed $content, array $attributes = [])
 * @method static button(mixed $content, array $attributes = [])
 * @method static canvas(mixed $content, array $attributes = [])
 * @method static caption(mixed $content, array $attributes = [])
 * @method static center(mixed $content, array $attributes = [])
 * @method static cite(mixed $content, array $attributes = [])
 * @method static code(mixed $content, array $attributes = [])
 * @method static colgroup(mixed $content, array $attributes = [])
 * @method static data(mixed $content, array $attributes = [])
 * @method static datalist(mixed $content, array $attributes = [])
 * @method static dd(mixed $content, array $attributes = [])
 * @method static del(mixed $content, array $attributes = [])
 * @method static details(mixed $content, array $attributes = [])
 * @method static dfn(mixed $content, array $attributes = [])
 * @method static dialog(mixed $content, array $attributes = [])
 * @method static dir(mixed $content, array $attributes = [])
 * @method static div(mixed $content, array $attributes = [])
 * @method static dl(mixed $content, array $attributes = [])
 * @method static dt(mixed $content, array $attributes = [])
 * @method static em(mixed $content, array $attributes = [])
 * @method static fieldset(mixed $content, array $attributes = [])
 * @method static figcaption(mixed $content, array $attributes = [])
 * @method static figure(mixed $content, array $attributes = [])
 * @method static font(mixed $content, array $attributes = [])
 * @method static footer(mixed $content, array $attributes = [])
 * @method static form(mixed $content, array $attributes = [])
 * @method static frame(mixed $content, array $attributes = [])
 * @method static frameset(mixed $content, array $attributes = [])
 * @method static h1(mixed $content, array $attributes = [])
 * @method static h2(mixed $content, array $attributes = [])
 * @method static h3(mixed $content, array $attributes = [])
 * @method static h4(mixed $content, array $attributes = [])
 * @method static h5(mixed $content, array $attributes = [])
 * @method static h6(mixed $content, array $attributes = [])
 * @method static head(mixed $content, array $attributes = [])
 * @method static header(mixed $content, array $attributes = [])
 * @method static html(mixed $content, array $attributes = [])
 * @method static i(mixed $content, array $attributes = [])
 * @method static iframe(mixed $content, array $attributes = [])
 * @method static ins(mixed $content, array $attributes = [])
 * @method static kbd(mixed $content, array $attributes = [])
 * @method static label(mixed $content, array $attributes = [])
 * @method static legend(mixed $content, array $attributes = [])
 * @method static li(mixed $content, array $attributes = [])
 * @method static main(mixed $content, array $attributes = [])
 * @method static map(mixed $content, array $attributes = [])
 * @method static mark(mixed $content, array $attributes = [])
 * @method static meter(mixed $content, array $attributes = [])
 * @method static nav(mixed $content, array $attributes = [])
 * @method static noframes(mixed $content, array $attributes = [])
 * @method static noscript(mixed $content, array $attributes = [])
 * @method static object(mixed $content, array $attributes = [])
 * @method static ol(mixed $content, array $attributes = [])
 * @method static optgroup(mixed $content, array $attributes = [])
 * @method static option(mixed $content, array $attributes = [])
 * @method static output(mixed $content, array $attributes = [])
 * @method static p(mixed $content, array $attributes = [])
 * @method static picture(mixed $content, array $attributes = [])
 * @method static pre(mixed $content, array $attributes = [])
 * @method static progress(mixed $content, array $attributes = [])
 * @method static q(mixed $content, array $attributes = [])
 * @method static rp(mixed $content, array $attributes = [])
 * @method static rt(mixed $content, array $attributes = [])
 * @method static ruby(mixed $content, array $attributes = [])
 * @method static s(mixed $content, array $attributes = [])
 * @method static samp(mixed $content, array $attributes = [])
 * @method static script(mixed $content, array $attributes = [])
 * @method static section(mixed $content, array $attributes = [])
 * @method static select(mixed $content, array $attributes = [])
 * @method static small(mixed $content, array $attributes = [])
 * @method static span(mixed $content, array $attributes = [])
 * @method static strike(mixed $content, array $attributes = [])
 * @method static strong(mixed $content, array $attributes = [])
 * @method static style(mixed $content, array $attributes = [])
 * @method static sub(mixed $content, array $attributes = [])
 * @method static summary(mixed $content, array $attributes = [])
 * @method static sup(mixed $content, array $attributes = [])
 * @method static table(mixed $content, array $attributes = [])
 * @method static tbody(mixed $content, array $attributes = [])
 * @method static td(mixed $content, array $attributes = [])
 * @method static template(mixed $content, array $attributes = [])
 * @method static textarea(mixed $content, array $attributes = [])
 * @method static tfoot(mixed $content, array $attributes = [])
 * @method static th(mixed $content, array $attributes = [])
 * @method static thead(mixed $content, array $attributes = [])
 * @method static time(mixed $content, array $attributes = [])
 * @method static title(mixed $content, array $attributes = [])
 * @method static tr(mixed $content, array $attributes = [])
 * @method static tt(mixed $content, array $attributes = [])
 * @method static u(mixed $content, array $attributes = [])
 * @method static ul(mixed $content, array $attributes = [])
 * @method static var(mixed $content, array $attributes = [])
 * @method static video(mixed $content, array $attributes = [])
 */
class HTML
{
    public const TYPE_SINGULAR = 'singular';
    public const TYPE_PAIRED = 'paired';

    private $type = self::TYPE_PAIRED;
    private $attributes = [];
    private $tag = 'div';
    private $content = null;

    private const SINGULAR_TAGS = [
        'area',
        'base',
        'br',
        'col',
        'embed',
        'hr',
        'img',
        'input',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr',
    ];

    private const PAIRED_TAGS = [
        'a',
        'abbr',
        'acronym',
        'address',
        'applet',
        'article',
        'aside',
        'audio',
        'b',
        'basefont',
        'bdi',
        'bdo',
        'big',
        'blockquote',
        'body',
        'button',
        'canvas',
        'caption',
        'center',
        'cite',
        'code',
        'colgroup',
        'data',
        'datalist',
        'dd',
        'del',
        'details',
        'dfn',
        'dialog',
        'dir',
        'div',
        'dl',
        'dt',
        'em',
        'fieldset',
        'figcaption',
        'figure',
        'font',
        'footer',
        'form',
        'frame',
        'frameset',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'head',
        'header',
        'html',
        'i',
        'iframe',
        'ins',
        'kbd',
        'label',
        'legend',
        'li',
        'main',
        'map',
        'mark',
        'meter',
        'nav',
        'noframes',
        'noscript',
        'object',
        'ol',
        'optgroup',
        'option',
        'output',
        'p',
        'picture',
        'pre',
        'progress',
        'q',
        'rp',
        'rt',
        'ruby',
        's',
        'samp',
        'script',
        'section',
        'select',
        'small',
        'span',
        'strike',
        'strong',
        'style',
        'sub',
        'summary',
        'sup',
        'table',
        'tbody',
        'td',
        'template',
        'textarea',
        'tfoot',
        'th',
        'thead',
        'time',
        'title',
        'tr',
        'tt',
        'u',
        'ul',
        'var',
        'video',
    ];

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): HTML
    {
        $this->type = $type;
        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): HTML
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): HTML
    {
        $this->tag = $tag;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): HTML
    {
        $this->content = $content;
        return $this;
    }

    static public function __callStatic($tag, $args): HTML
    {
        if (in_array($tag, self::SINGULAR_TAGS)) {
            $attributes = $args[0] ?? [];
            return (new HTML())->setType(self::TYPE_SINGULAR)->setTag($tag)->setAttributes($attributes);
        }

        if (in_array($tag, self::PAIRED_TAGS)) {
            $content = $args[0] ?? '';
            $attributes = $args[1] ?? [];
            return (new HTML())->setType(self::TYPE_PAIRED)->setTag($tag)->setAttributes($attributes)->setContent(
                $content
            );
        }

        throw new RuntimeException("$tag tag not supported");
    }

    public function __toString(): string
    {
        $html = '';

        $attributeString = '';
        foreach ($this->getAttributes() as $k => $v) {
            $v = htmlspecialchars($v);
            $attributeString .= " $k=\"$v\"";
        }

        if ($this->type === self::TYPE_SINGULAR) {
            $html = '<' . $this->getTag() . $attributeString . '/>';
        }

        if ($this->type === self::TYPE_PAIRED) {
            $openTag = '<' . $this->getTag() . $attributeString . '>';
            $closeTag = '</' . $this->getTag() . '>';

            $content = '';
            if (is_iterable($this->getContent())) {
                foreach ($this->getContent() as $contentItem) {
                    $content .= "$contentItem";
                }
            } else {
                $content .= (string)$this->getContent();
            }

            $html = $openTag . $content . $closeTag;
        }

        return $html;
    }
}