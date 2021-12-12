<?php

class ElementBuilder {
    private $element;
    private $attribute = [];
    private $content;
    private $isSelfClosing;

    public function __construct($element, $isSelfClosing = false) {
        $this->setElement($element);
        $this->isSelfClosing = $isSelfClosing;
    }

    /**
     * @return mixed
     */
    public function getElement() {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element): void {
        $this->element = $element;
    }


    public function addAttribute($name, $value) {
        $this->attribute[$name] = $value;
    }

    public function addContent($content) {
        $this->content = $content;
    }

    public function display() {
        $tag = $this->getElement();
        $attributes = $this->attribute;
        $content = htmlspecialchars($this->content);
        $elementAttributes = "";
        foreach ($attributes as $name => $value) {
            $elementAttributes .= $name . "=\"$value\"";

            if ($name !== array_key_last($attributes)) {
                $elementAttributes .= " ";
            }
        }

        $openTag = htmlspecialchars("<$tag $elementAttributes>");
        $closeTag = htmlspecialchars("</$tag>");
        if ($this->isSelfClosing) {
            $openTag = htmlspecialchars("<$tag $elementAttributes");
            $closeTag = "/>";
        }
        $element = $openTag . $content . $closeTag;
        echo $element;
    }


//<img />
//<img/>
}

class HTMLDispatcher {

    public static function createImage($src, $alt, $title) {

        $element = new ElementBuilder("img", true);
        $element->addAttribute("src", $src);
        $element->addAttribute("alt", $alt);
        $element->addAttribute("title", $title);
        $element->display();
    }

    public static function createURL($url, $title, $text) {

        $element = new ElementBuilder("a");
        $element->addAttribute("href", $url);
        $element->addAttribute("title", $title);
        $element->addContent($text);
        $element->display();
    }

    public static function createInput($inputType, $name, $value) {
        $element = new ElementBuilder("input", true);
        $element->addAttribute("type", $inputType);
        $element->addAttribute("name", $name);
        $element->addAttribute("value", $value);

        $element->display();
    }
}


$div = new ElementBuilder("div");
$div->addAttribute("id", "page");
$div->addAttribute("class", "big");
$div->addContent("<p>Hello</p>");
$div->display();
echo "<br>";
HTMLDispatcher::createImage("img.png", "img alt", "Title of img");
echo "<br>";
HTMLDispatcher::createURL("facebook.com", "link to facebook", "facebook");
echo "<br>";
HTMLDispatcher::createInput("Submit", "button", "Submit");
//var_dump($div);
