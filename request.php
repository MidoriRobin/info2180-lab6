<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";

//require 'index.html';

$xmlStr = '<?xml version="1.0" encoding="UTF-8"?>
<entries>
    <definition name = "definition" author = "John">
        a statement of the exact meaning of a word, especially in a dictionary.
    </definition>
    <definition name = "bar" author = "Kanye West">
    </definition>
    <definition name = "ajax" author = "First Lastname">
        Technique which involves the use of javascript and xml (or JSON)
    </definition>
    <definition name = "html" author = "Ben Johnson">
        The standard markup language for creating web pages and web applications.
    </definition>
    <definition name = "css" author = "John Benson">
        A style sheet language used for describing the presentation of a document written in a markup language.
    </definition>
    <definition name = "javascript" author = "Kevin Williams">
        A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
    </definition>
    <definition name = "php" author = "Will Willingson">
        A server-side scripting language, and a powerful tool for making dynamic and interactive websites
    </definition>
</entries>';


$xmlOutput = new SimpleXMLElement($xmlstr);
