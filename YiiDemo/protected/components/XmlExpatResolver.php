<?php

class XmlExpatResover {
    public $parser;
    

    function init() {
        //Initialize the XML parser
        $parser = xml_parser_create();
    }

    //Function to use at the end of an element
    function stop($parser, $element_name) {
        echo "<br />";
    }

    //Function to use when finding character data
    function char($parser, $data) {
        echo $data;
    }

    function OpenFile($file_name) {
        //Open XML file
        // Path is :/userfiles/file/
        $filePath = 'dirname(__FILE__)."\\..\\..\\..\\userfiles\\file\\';
        $fp = fopen($filePath . "testXml.xml", "r");

        //Read data
        while ($data = fread($fp, 4096)) {
            xml_parse($parser, $data, feof($fp)) or
                    die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)), xml_get_current_line_number($parser)));
        }
    }

    function FreeXml() {
    //Free the XML parser
        xml_parser_free($parser);
    }
}

?>
