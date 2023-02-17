<?php

$title = 'Synergy Woman Forum';

$unit = "sbs";
$type = "womanforum21";
$land = "lp_womanforum21";

$graccount = "";
$grcampaign = "";
$grtag = "";

$phone = '+7 (495) 787-87-67';
$phone_link = '+74957878767';

$phone_2 = '';
$phone_link_2 = '';

$phone_3 = '';
$phone_link_3 = '';

$vtbDate = '30&nbsp;января';

$new_tab = '1';
$callbackSuccess = 'https://synergy.online/lp/womanforum21/thanks/';

$land_online = 'synergy_online2020';
$unit_price = "synergy";
$type_price = "womanforum21";
$type_price_online = "womanforum21";
$event_id = 162;
$quote_id_ticket = 4439;
$quote_id_online = 4440;
$form_type_price_ticket = 'ticket';
$form_type_price_online = 'ticketless';


$email = 'universityonline@synergy.ru';
$email_link = 'universityonline@synergy.ru';

$GTM = 'GTM-XXXXXX';

$version_key = $version ? $version : 'default';

$partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
if (isset($partner_array[$partner])) {
    $value  = $partner_array[$partner];
    $phone = $value["phone"];
    $phone_link = preg_replace('/\D+/', '', $value["phone"]);
    $email = $value["email"];
}

switch ($version) {
     case 'version2':
     break;
     case 'version3':
          $online_sale = '4000';
          $econom_sale = '12000';
          $business_sale = '24000';
          $vip_sale = '36000';
          $platinum_sale = '240000';
     break;
     case 'version4':
          $online_sale = '2500';
          $standart_sale = '3750';
          $econom_sale = '7500';
          $business_sale = '15000';
          $vip_sale = '22500';
          $platinum_sale = '150000';
     break;
     // case 'version4':
     //      $online_sale = '3750';
     //      $econom_sale = '7500';
     //      $business_sale = '15000';
     //      $vip_sale = '26250';
     //      $platinum_sale = '187500';
     // break;
     case 'kazahstan':
          $version = 'kazahstan';
          $phone = '+7 (708) 651-92-40';
          $phone_link = '+77086519240';
          $email = '';
          $email_link = '';
     break;

     case 'stavropol':
          $version = 'stavropol';
          $phone = '+7(865)225-77-71';
          $phone_link = '+78652257771';
          $email = 'KE@stv.synergy.ru';
          $email_link = 'KE@stv.synergy.ru';
     break;

}



$action = 'https://syn.su/lander.php?r=land/index'
.'&amp;unit='.$unit
.'&amp;type='.$type
.'&amp;land='.$land
.'&amp;version='.$version
.'&amp;partner='.$partner
.'&amp;graccount='.$graccount
.'&amp;grcampaign='.$grcampaign
.'&amp;grtag='.$grtag
.'&amp;ignore-thanksall=1'
.'&amp;new_tab='.$new_tab;
?>
