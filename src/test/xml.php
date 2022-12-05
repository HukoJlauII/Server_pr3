<?php
//libxml_use_internal_errors(TRUE);
//
//$objXmlDocument = simplexml_load_file("test.xml");
//
//if ($objXmlDocument === FALSE) {
//    echo "There were errors parsing the XML file.\n";
//    foreach (libxml_get_errors() as $error) {
//        echo $error->message;
//    }
//    exit;
//}
//
//$objJsonDocument = json_encode($objXmlDocument);
//
//$arrOutput = json_decode($objJsonDocument, TRUE);
//$tests = $arrOutput["testsuite"]["testcase"];
//foreach ($tests as $test)
//{
//    echo $test["@attributes"]["assertions"];
//}
//
//echo "<pre>";
//print_r($arrOutput);
//?>
