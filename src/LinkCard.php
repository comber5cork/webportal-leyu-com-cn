<?php

class LinkCard
{
    private string $url;
    private string $title;
    private string $description;
    private string $domain;

    public function __construct(
        string $url = 'https://webportal-leyu.com.cn',
        string $title = '乐鱼体育',
        string $description = '提供丰富体育赛事资讯与互动平台',
        string $domain = 'webportal-leyu.com.cn'
    ) {
        $this->url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $this->title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $this->description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        $this->domain = htmlspecialchars($domain, ENT_QUOTES, 'UTF-8');
    }

    public function setUrl(string $url): void
    {
        $this->url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    }

    public function setTitle(string $title): void
    {
        $this->title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    public function setDescription(string $desc): void
    {
        $this->description = htmlspecialchars($desc, ENT_QUOTES, 'UTF-8');
    }

    public function setDomain(string $domain): void
    {
        $this->domain = htmlspecialchars($domain, ENT_QUOTES, 'UTF-8');
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function render(): string
    {
        $html = '<div class="link-card">' . "\n";
        $html .= '    <a href="' . $this->url . '" target="_blank" rel="noopener noreferrer">' . "\n";
        $html .= '        <div class="card-title">' . $this->title . '</div>' . "\n";
        $html .= '        <div class="card-description">' . $this->description . '</div>' . "\n";
        $html .= '        <div class="card-domain">' . $this->domain . '</div>' . "\n";
        $html .= '    </a>' . "\n";
        $html .= '</div>' . "\n";

        return $html;
    }

    public static function createSample(): self
    {
        return new self(
            'https://webportal-leyu.com.cn',
            '乐鱼体育',
            '乐鱼体育 - 精彩赛事尽在掌握',
            'webportal-leyu.com.cn'
        );
    }
}

function renderLinkCard(
    string $url = 'https://webportal-leyu.com.cn',
    string $title = '乐鱼体育',
    string $description = '乐鱼体育官方平台',
    string $domain = 'webportal-leyu.com.cn'
): string {
    $card = new LinkCard($url, $title, $description, $domain);
    return $card->render();
}

// 示例用法
$output = renderLinkCard();
echo $output;