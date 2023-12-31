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
    'NationalNumberPattern' => '1\\d{2,5}',
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
  'tollFree' => 
  array (
    'NationalNumberPattern' => '1(?:1(?:[02]|6(?:000|111))|2(?:05|28)|3(?:014|3(?:21|5)|660)|492|5(?:1[03]|410|501)|6(?:112|333|644)|7(?:012|127|89)|8(?:10|8[57])|9(?:0[134]|14))',
    'ExampleNumber' => '116000',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '1(?:18(?:[12458]|00)|2(?:0(?:[02-46-8]|1[0-36])|1(?:[0-4]|6[06])|2(?:[0-4]|5[25])|[367]|4(?:0[04]|[12]|4[24]|54)|55[12457])|3(?:0(?:[02]|1[13578]|3[356])|1[1347]|2[02-5]|3(?:[01347]|2[023]|88)|4(?:[35]|4[34])|5(?:3[134]|5[035])|666)|4(?:2(?:00|4)|4(?:0[01358]|1[024]|50|7)|900)|5(?:0[0-35]|1(?:[1267]|5[0-7]|82)|2(?:[014-6]|22)|330|4(?:[35]|44)|5(?:00|[1-69])|9(?:[159]|[38]0|77))|6(?:1(?:00|1[19]|[356-9])|2(?:2[26]|[68])|3(?:22|36|6[36])|5|6(?:[0-359]|6[0-26])|7(?:00|55|7|8[89])|9(?:00|1|69))|7(?:0(?:[023]|1[0578])|1(?:00|2[034]|[4-9])|2(?:[07]|20|44)|7(?:[0-57]|9[79])|8(?:0[08]|2|8[0178])|9(?:00|97))|8(?:1[127]|8[1268]|9[269])|9(?:0(?:[02]|69|9[0269])|1[123689]|21))',
    'ExampleNumber' => '1182',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '11[02]',
    'ExampleNumber' => '112',
    'PossibleLength' => 
    array (
      0 => 3,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '1(?:1(?:[02-579]|6(?:000|111)|8(?:[09]\\d|[1-8]))|2(?:[0-245]\\d{1,2}|[36-9])|3(?:[0-6]\\d{1,2}|[7-9])|4(?:[1-489]\\d{1,2}|[05-7])|5(?:[0-59]\\d{1,2}|[6-8])|6(?:[05]|[1-46-9]\\d{1,2})|7(?:[0-27-9]\\d{1,2}|[3-6])|8(?:[02-7]|[189]\\d{1,2})|9(?:[0-2]\\d{1,2}|[3-9]))',
    'ExampleNumber' => '115',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'standardRate' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'carrierSpecific' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'smsServices' => 
  array (
    'NationalNumberPattern' => '1(?:18[1258]|2(?:0(?:1[036]|[46])|166|21|4(?:0[04]|1|5[47])|[67])|3(?:0(?:1[13-578]|2|3[56])|1[15]|2[045]|3(?:[13]|2[13])|43|5(?:00|3[34]|53))|44(?:0[0135]|14|50|7)|5(?:05|1(?:[12]|5[1246]|8[12])|2(?:[01]|22)|3(?:00|3[03])|4(?:15|5)|500|9(?:5|77|80))|6(?:1[35-8]|226|3(?:22|3[36]|66)|644|7(?:00|7|89)|9(?:00|69))|7(?:01[258]|1(?:00|[15])|2(?:44|7)|8(?:00|87|9))|8(?:1[128]|8[56]|9(?:[26]|77))|90(?:2|69|92))',
    'ExampleNumber' => '13500',
    'PossibleLength' => 
    array (
      0 => 3,
      1 => 4,
      2 => 5,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'EE',
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
