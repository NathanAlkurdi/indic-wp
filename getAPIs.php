t<?php

    $apiChoice = $_GET['apiChoice'];

    function getAPIList($apiChoice)
    {
        $output = '';

        $singleInputAPIs = array("getCodePointLength", "getCodePoints", "getLength", "getLogicalChars", "getWordStrength", "getWordWeight", "isPalindrome", "randomize", "reverse", "containsSpace", "getWordLevel", "getLengthNoSpaces", "getLengthNoSpacesNoCommas", "parseToLogicalChars", "parseToLogicalCharacters", "isAnagram");
        $doubleInputAPIs = array("startsWith", "endsWith", "containsString", "containsChar", "containsLogicalChars", "containsAllLogicalChars", "containsLogicalCharSequence", "canMakeWord", "canMakeAllWords", "addCharacterAtEnd", "isIntersecting", "getIntersectingRank", "getUniqueIntersectingRank", "compareTo", "compareToIgnoreCase", "splitWord", "equals", "reverseEquals", "logicalCharAt");
        $tripleInputAPIs = array("addCharacterAt", "replace");

        //removed APIs: reverse, isCharConsonant, isCharVowel

        if ($apiChoice == 'single') {
            foreach ($singleInputAPIs as $api) {
                $output = $output . '<tr class="table-data"><th scope="row" class="methodCell" id="' . $api . 'Method">' . $api . '</th><td class="inputCell" id="' . $api . 'Input"></td><td class="expectedCell" id="' . $api . 'Expected"></td><td = class="actualCell" id="' . $api . 'Actual"></td><td class="passFail" id="' . $api . 'PassFail"></td><td class="jsonCell" id="' . $api . 'JSON"></td></tr>';
            }
        } else if ($apiChoice == "double") {
            foreach ($doubleInputAPIs as $api) {
                $output = $output . '<tr class="table-data"><th scope="row" class="methodCell" id="' . $api . 'Method">' . $api . '</th><td class="inputCell" id="' . $api . 'Input"></td><td class="input2Cell" id=' . $api . 'Input2"></td><td class="expectedCell" id="' . $api . 'Expected"></td><td = class="actualCell" id="' . $api . 'Actual"></td><td class="passFail" id="' . $api . 'PassFail"></td><td class="jsonCell" id="' . $api . 'JSON"></td></tr>';
            }
        } else if ($apiChoice == "getFillerCharacters") {
            $api = "getFillerCharacters";
            $output = $output .
                '<tr class="table-data"><th scope="row" class="methodCell" id="' . $api . 'Method">' . $api . '</th><td class="inputCell" id="' . $api . 'Input"></td><td class="input2Cell" id="' . $api . 'Type"></td><td class="expectedCell" id="' . $api . 'Expected"></td><td = class="actualCell" id="' . $api . 'Actual"></td><td class="passFail" id="' . $api . 'PassFail"></td><td class="jsonCell" id="' . $api . 'JSON"></td></tr>';
        } else if ($apiChoice == "triple") {
            foreach ($tripleInputAPIs as $api) {
                $output = $output . '<tr class="table-data"><th scope="row" class="methodCell" id="' . $api . 'Method">' . $api . '</th><td class="inputCell" id="' . $api . 'Input"></td><td class="input2Cell" id=' . $api . 'Input2"></td><td class="input3Cell" id=' . $api . 'Input3"></td><td class="expectedCell" id="' . $api . 'Expected"></td><td = class="actualCell" id="' . $api . 'Actual"></td><td class="passFail" id="' . $api . 'PassFail"></td><td class="jsonCell" id="' . $api . 'JSON"></td></tr>';
            }
        }

        echo $output;
    }

    getAPIList($apiChoice);