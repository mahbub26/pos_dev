<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[12578]\\d{2,8}',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
      5 => 8,
      6 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '1\\d{2,5}|777|800',
    'ExampleNumber' => '105010',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '11[67][0-2]\\d{3}|56161561',
    'ExampleNumber' => '1160530',
    'PossibleLength' => 
    array (
      0 => 7,
      1 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '1(?:0[0128]|12|298)|2611',
    'ExampleNumber' => '108',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '1(?:0(?:[01248]|3[39]|5(?:010|6|[79]\\d{2})|6[3468]|7(?:[013578]|20?|4[01]|80)|9[0135-9])|1(?:00|[289]|[67][0-2]\\d{3})|2(?:1|98)|3(?:11|2[0-2]|63|[89])|4[01]|5(?:1(?:0[0-36]|[127])|5(?:[23]\\d{2}|4))|6(?:1|6[01]?)|7000|8(?:02\\d{3}|[12])|9(?:0[013-59]|12|25|4[4-9]\\d?|50|6[1347]|[89]))|2611|5(?:0(?:0(?:0\\d{1}(?:\\d{2})?|1(?:\\d{2})?|20?)|325|40\\d{1,2}|5(?:0\\d{1,4}|1\\d{2,5}|[2-79]\\d{3,5}))|1(?:0[12]\\d|234|4[2-4]\\d|555|717|818|96[49])|2(?:0(?:0[01]|[14]0)|151|2(?:[0267]\\d{1,2}|1\\d{1,4}|[3589]\\d)|3(?:1(?:\\d{1,2}|\\d{4})|2\\d|6\\d{1,2})|4[04]\\d|555|666|7[78]\\d|888|9(?:06|99\\d?))|3(?:0(?:[01]0|3\\d{1,4}|4\\d{4})|131|3[23]\\d{1,4}|553|666|776)|4(?:04|1[04]\\d?|2(?:0\\d?|4)|3(?:0\\d?|2(?:\\d|\\d{4})?)|4[04]|64(?:\\d{1,2})?|99)\\d|5(?:1[25]|3(?:[16]\\d?|5)|4[45]|5[05](?:\\d{1,2})?|6(?:5|7\\d?)|93)\\d|6(?:0(?:6\\d{1,2}|70)|16\\d{4}|3[68]|43|[67]\\d{2,3})|7(?:17(?:\\d{3})?|[27]7|57\\d{2}|8(?:7\\d?|8))\\d|8(?:3[4-69]|4[01]|5[58]|8(?:0\\d?|8(?:8\\d{2}|9))|99)\\d|9(?:00|55|6(?:4\\d?|[67])|77|88|90\\d?)\\d)|777|800',
    'ExampleNumber' => '108',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => '5(?:14(?:2[5-9]|[34]\\d)|757555)',
    'ExampleNumber' => '5757555',
    'PossibleLength' => 
    array (
      0 => 5,
      1 => 7,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '1(?:1(?:[67][0-2]\\d{3}|[89])|21|4[01]|55330|7\\d{3}|9(?:[89]|09))|5(?:3000|6161(?:17[89]|561))',
    'ExampleNumber' => '53000',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
      5 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'smsServices' => 
  array (
    'NationalNumberPattern' => '1(?:39|90[019])|5(?:14(?:2[5-9]|[34]\\d)|6161(?:17[89]|561)|757555)',
    'ExampleNumber' => '51431',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 7,
      4 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'IN',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
