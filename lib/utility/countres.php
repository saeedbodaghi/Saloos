<?php
namespace lib\utility;

/** country managing **/
class countres
{

	 public static $country = [
'Afghanistan'=>['name' => 'Afghanistan', 'id'=>'3','localname'=>'‫افغانستان','phonecode'=>'93','language'=>'fa-AF','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Kabul','shortname'=>'AFN','iso2'=>'AF','iso3'=>'AFG','width'=>'34°28 N','length'=>'34°28 N'],
'Åland'=>['name' => 'Åland', 'id'=>'15','localname'=>'Åland','phonecode'=>'0','language'=>'sv-AX','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Mariehamn','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Albania'=>['name' => 'Albania', 'id'=>'6','localname'=>'Shqipëri','phonecode'=>'355','language'=>'sq','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Tirana','shortname'=>'ALL','iso2'=>'AL','iso3'=>'ALB','width'=>'41°18 N','length'=>'41°18 N'],
'Algeria'=>['name' => 'Algeria', 'id'=>'62','localname'=>'‫الجزائر','phonecode'=>'213','language'=>'ar-DZ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Algiers','shortname'=>'DZD','iso2'=>'DZ','iso3'=>'DZA','width'=>'36°42 N','length'=>'36°42 N'],
'American Samoa'=>['name' => 'American Samoa', 'id'=>'11','localname'=>'','phonecode'=>'1','language'=>'en-AS','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Pago Pago','shortname'=>'USD','iso2'=>'AS','iso3'=>'ASM','width'=>'14°16 S','length'=>'14°16 S'],
'Andorra'=>['name' => 'Andorra', 'id'=>'1','localname'=>'','phonecode'=>'376','language'=>'ca','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Andorra la Vella','shortname'=>'EUR','iso2'=>'AD','iso3'=>'AND','width'=>'42°31 N','length'=>'42°31 N'],
'Angola'=>['name' => 'Angola', 'id'=>'8','localname'=>'','phonecode'=>'244','language'=>'pt-AO','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Luanda','shortname'=>'AOA','iso2'=>'AO','iso3'=>'AGO','width'=>'08°50 S','length'=>'08°50 S'],
'Anguilla'=>['name' => 'Anguilla', 'id'=>'5','localname'=>'','phonecode'=>'1','language'=>'en-AI','containent'=>'North America','shortcontainent'=>'NA','capital'=>'The Valley','shortname'=>'XCD','iso2'=>'AI','iso3'=>'AIA','width'=>'-','length'=>'-'],
'Antarctica'=>['name' => 'Antarctica', 'id'=>'9','localname'=>'','phonecode'=>'672','language'=>'0','containent'=>'Antarctica','shortcontainent'=>'AN','capital'=>'0','shortname'=>'0','iso2'=>'AQ','iso3'=>'ATA','width'=>'-','length'=>'-'],
'Antigua and Barbuda'=>['name' => 'Antigua and Barbuda', 'id'=>'4','localname'=>'','phonecode'=>'1','language'=>'en-AG','containent'=>'North America','shortcontainent'=>'NA','capital'=>'St. John"s','shortname'=>'XCD','iso2'=>'AG','iso3'=>'ATG','width'=>'17°20 N','length'=>'17°20 N'],
'Argentina'=>['name' => 'Argentina', 'id'=>'10','localname'=>'','phonecode'=>'54','language'=>'es-AR','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Buenos Aires','shortname'=>'ARS','iso2'=>'AR','iso3'=>'ARG','width'=>'36°30 S','length'=>'36°30 S'],
'Armenia'=>['name' => 'Armenia', 'id'=>'7','localname'=>'Հայաստան','phonecode'=>'374','language'=>'hy','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Yerevan','shortname'=>'AMD','iso2'=>'AM','iso3'=>'ARM','width'=>'40°10 N','length'=>'40°10 N'],
'Aruba'=>['name' => 'Aruba', 'id'=>'14','localname'=>'','phonecode'=>'297','language'=>'nl-AW','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Oranjestad','shortname'=>'AWG','iso2'=>'AW','iso3'=>'ABW','width'=>'12°32 N','length'=>'12°32 N'],
'Australia'=>['name' => 'Australia', 'id'=>'13','localname'=>'','phonecode'=>'61','language'=>'en-AU','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Canberra','shortname'=>'AUD','iso2'=>'AU','iso3'=>'AUS','width'=>'35°15 S','length'=>'35°15 S'],
'Austria'=>['name' => 'Austria', 'id'=>'12','localname'=>'Österreich','phonecode'=>'43','language'=>'de-AT','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Vienna','shortname'=>'EUR','iso2'=>'AT','iso3'=>'AUT','width'=>'48°12 N','length'=>'48°12 N'],
'Azerbaijan'=>['name' => 'Azerbaijan', 'id'=>'16','localname'=>'Azərbaycan','phonecode'=>'994','language'=>'az','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Baku','shortname'=>'AZN','iso2'=>'AZ','iso3'=>'AZE','width'=>'40°29 N','length'=>'40°29 N'],
'Bahamas'=>['name' => 'Bahamas', 'id'=>'32','localname'=>'','phonecode'=>'1','language'=>'en-BS','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Nassau','shortname'=>'BSD','iso2'=>'BS','iso3'=>'BHS','width'=>'25°05 N','length'=>'25°05 N'],
'Bahrain'=>['name' => 'Bahrain', 'id'=>'23','localname'=>'‫البحرين','phonecode'=>'973','language'=>'ar-BH','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Manama','shortname'=>'BHD','iso2'=>'BH','iso3'=>'BHR','width'=>'26°10 N','length'=>'26°10 N'],
'Bangladesh'=>['name' => 'Bangladesh', 'id'=>'19','localname'=>'বাংলাদেশ','phonecode'=>'880','language'=>'bn-BD','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Dhaka','shortname'=>'BDT','iso2'=>'BD','iso3'=>'BGD','width'=>'23°43 N','length'=>'23°43 N'],
'Barbados'=>['name' => 'Barbados', 'id'=>'18','localname'=>'','phonecode'=>'1','language'=>'en-BB','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Bridgetown','shortname'=>'BBD','iso2'=>'BB','iso3'=>'BRB','width'=>'13°05 N','length'=>'13°05 N'],
'Belarus'=>['name' => 'Belarus', 'id'=>'36','localname'=>'Беларусь','phonecode'=>'375','language'=>'be','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Minsk','shortname'=>'BYR','iso2'=>'BY','iso3'=>'BLR','width'=>'53°52 N','length'=>'53°52 N'],
'Belgium'=>['name' => 'Belgium', 'id'=>'20','localname'=>'België','phonecode'=>'32','language'=>'nl-BE','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Brussels','shortname'=>'EUR','iso2'=>'BE','iso3'=>'BEL','width'=>'50°51 N','length'=>'50°51 N'],
'Belize'=>['name' => 'Belize', 'id'=>'37','localname'=>'','phonecode'=>'501','language'=>'en-BZ','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Belmopan','shortname'=>'BZD','iso2'=>'BZ','iso3'=>'BLZ','width'=>'17°18 N','length'=>'17°18 N'],
'Benin'=>['name' => 'Benin', 'id'=>'25','localname'=>'Bénin','phonecode'=>'229','language'=>'fr-BJ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Porto-Novo','shortname'=>'XOF','iso2'=>'BJ','iso3'=>'BEN','width'=>'06°23 N','length'=>'06°23 N'],
'Bermuda'=>['name' => 'Bermuda', 'id'=>'27','localname'=>'','phonecode'=>'1','language'=>'en-BM','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Hamilton','shortname'=>'BMD','iso2'=>'BM','iso3'=>'BMU','width'=>'-','length'=>'-'],
'Bhutan'=>['name' => 'Bhutan', 'id'=>'33','localname'=>'འབྲུག','phonecode'=>'975','language'=>'dz','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Thimphu','shortname'=>'BTN','iso2'=>'BT','iso3'=>'BTN','width'=>'27°31 N','length'=>'27°31 N'],
'Bolivia'=>['name' => 'Bolivia', 'id'=>'29','localname'=>'','phonecode'=>'591','language'=>'es-BO','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Sucre','shortname'=>'BOB','iso2'=>'BO','iso3'=>'BOL','width'=>'16°20 S','length'=>'16°20 S'],
'Bonaire'=>['name' => 'Bonaire', 'id'=>'30','localname'=>'','phonecode'=>'0','language'=>'nl','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Kralendijk','shortname'=>'USD','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Bosnia and Herzegovina'=>['name' => 'Bosnia and Herzegovina', 'id'=>'17','localname'=>'Босна и Херцеговина','phonecode'=>'387','language'=>'bs','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Sarajevo','shortname'=>'BAM','iso2'=>'BA','iso3'=>'BIH','width'=>'43°52 N','length'=>'43°52 N'],
'Botswana'=>['name' => 'Botswana', 'id'=>'35','localname'=>'','phonecode'=>'267','language'=>'en-BW','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Gaborone','shortname'=>'BWP','iso2'=>'BW','iso3'=>'BWA','width'=>'24°45 S','length'=>'24°45 S'],
'Bouvet Island'=>['name' => 'Bouvet Island', 'id'=>'34','localname'=>'','phonecode'=>'0','language'=>'0','containent'=>'Antarctica','shortcontainent'=>'AN','capital'=>'0','shortname'=>'NOK','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Brazil'=>['name' => 'Brazil', 'id'=>'31','localname'=>'Brasil','phonecode'=>'55','language'=>'pt-BR','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Brasília','shortname'=>'BRL','iso2'=>'BR','iso3'=>'BRA','width'=>'15°47 S','length'=>'15°47 S'],
'British Indian Ocean Territory'=>['name' => 'British Indian Ocean Territory', 'id'=>'105','localname'=>'','phonecode'=>'246','language'=>'en-IO','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'0','shortname'=>'USD','iso2'=>'IO','iso3'=>'IOT','width'=>'-','length'=>'-'],
'British Virgin Islands'=>['name' => 'British Virgin Islands', 'id'=>'238','localname'=>'','phonecode'=>'1','language'=>'en-VG','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Road Town','shortname'=>'USD','iso2'=>'VG','iso3'=>'VGB','width'=>'18°27 N','length'=>'18°27 N'],
'Brunei'=>['name' => 'Brunei', 'id'=>'28','localname'=>'','phonecode'=>'673','language'=>'ms-BN','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Bandar Seri Begawan','shortname'=>'BND','iso2'=>'BN','iso3'=>'BRN','width'=>'-','length'=>'-'],
'Bulgaria'=>['name' => 'Bulgaria', 'id'=>'22','localname'=>'България','phonecode'=>'359','language'=>'bg','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Sofia','shortname'=>'BGN','iso2'=>'BG','iso3'=>'BGR','width'=>'42°45 N','length'=>'42°45 N'],
'Burkina Faso'=>['name' => 'Burkina Faso', 'id'=>'21','localname'=>'','phonecode'=>'226','language'=>'fr-BF','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Ouagadougou','shortname'=>'XOF','iso2'=>'BF','iso3'=>'BFA','width'=>'12°15 N','length'=>'12°15 N'],
'Burundi'=>['name' => 'Burundi', 'id'=>'24','localname'=>'Uburundi','phonecode'=>'257','language'=>'fr-BI','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Bujumbura','shortname'=>'BIF','iso2'=>'BI','iso3'=>'BDI','width'=>'03°16 S','length'=>'03°16 S'],
'Cambodia'=>['name' => 'Cambodia', 'id'=>'116','localname'=>'កម្ពុជា','phonecode'=>'855','language'=>'km','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Phnom Penh','shortname'=>'KHR','iso2'=>'KH','iso3'=>'KHM','width'=>'11°33 N','length'=>'11°33 N'],
'Cameroon'=>['name' => 'Cameroon', 'id'=>'47','localname'=>'Cameroun','phonecode'=>'237','language'=>'en-CM','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Yaoundé','shortname'=>'XAF','iso2'=>'CM','iso3'=>'CMR','width'=>'03°50 N','length'=>'03°50 N'],
'Canada'=>['name' => 'Canada', 'id'=>'38','localname'=>'','phonecode'=>'1','language'=>'en-CA','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Ottawa','shortname'=>'CAD','iso2'=>'CA','iso3'=>'CAN','width'=>'45°27 N','length'=>'45°27 N'],
'Cape Verde'=>['name' => 'Cape Verde', 'id'=>'52','localname'=>'Kabu Verdi','phonecode'=>'238','language'=>'pt-CV','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Praia','shortname'=>'CVE','iso2'=>'CV','iso3'=>'CPV','width'=>'15°02 N','length'=>'15°02 N'],
'Cayman Islands'=>['name' => 'Cayman Islands', 'id'=>'123','localname'=>'','phonecode'=>'1','language'=>'en-KY','containent'=>'North America','shortcontainent'=>'NA','capital'=>'George Town','shortname'=>'KYD','iso2'=>'KY','iso3'=>'CYM','width'=>'19°20 N','length'=>'19°20 N'],
'Central African Republic'=>['name' => 'Central African Republic', 'id'=>'41','localname'=>'République centrafricaine','phonecode'=>'236','language'=>'fr-CF','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Bangui','shortname'=>'XAF','iso2'=>'CF','iso3'=>'CAF','width'=>'04°23 N','length'=>'04°23 N'],
'Chad'=>['name' => 'Chad', 'id'=>'214','localname'=>'Tchad','phonecode'=>'235','language'=>'fr-TD','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'N"Djamena','shortname'=>'XAF','iso2'=>'TD','iso3'=>'TCD','width'=>'12°10 N','length'=>'12°10 N'],
'Chile'=>['name' => 'Chile', 'id'=>'46','localname'=>'','phonecode'=>'56','language'=>'es-CL','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Santiago','shortname'=>'CLP','iso2'=>'CL','iso3'=>'CHL','width'=>'33°24 S','length'=>'33°24 S'],
'China'=>['name' => 'China', 'id'=>'48','localname'=>'中国','phonecode'=>'86','language'=>'zh-CN','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Beijing','shortname'=>'CNY','iso2'=>'CN','iso3'=>'CHN','width'=>'39°55 N','length'=>'39°55 N'],
'Christmas Island'=>['name' => 'Christmas Island', 'id'=>'54','localname'=>'','phonecode'=>'61','language'=>'en','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Flying Fish Cove','shortname'=>'AUD','iso2'=>'CX','iso3'=>'CXR','width'=>'-','length'=>'-'],
'Cocos (Keeling) Islands'=>['name' => 'Cocos (Keeling) Islands', 'id'=>'39','localname'=>'Kepulauan Cocos (Keeling)','phonecode'=>'0','language'=>'ms-CC','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'West Island','shortname'=>'AUD','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Colombia'=>['name' => 'Colombia', 'id'=>'49','localname'=>'','phonecode'=>'57','language'=>'es-CO','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Bogotá','shortname'=>'COP','iso2'=>'CO','iso3'=>'COL','width'=>'04°34 N','length'=>'04°34 N'],
'Comoros'=>['name' => 'Comoros', 'id'=>'118','localname'=>'‫جزر القمر','phonecode'=>'269','language'=>'ar','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Moroni','shortname'=>'KMF','iso2'=>'KM','iso3'=>'COM','width'=>'-','length'=>'-'],
'Cook Islands'=>['name' => 'Cook Islands', 'id'=>'45','localname'=>'','phonecode'=>'682','language'=>'en-CK','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Avarua','shortname'=>'NZD','iso2'=>'CK','iso3'=>'COK','width'=>'-','length'=>'-'],
'Costa Rica'=>['name' => 'Costa Rica', 'id'=>'50','localname'=>'','phonecode'=>'506','language'=>'es-CR','containent'=>'North America','shortcontainent'=>'NA','capital'=>'San José','shortname'=>'CRC','iso2'=>'CR','iso3'=>'CRI','width'=>'09°55 N','length'=>'09°55 N'],
'Croatia'=>['name' => 'Croatia', 'id'=>'98','localname'=>'Hrvatska','phonecode'=>'385','language'=>'hr-HR','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Zagreb','shortname'=>'HRK','iso2'=>'HR','iso3'=>'HRV','width'=>'45°50 N','length'=>'45°50 N'],
'Cuba'=>['name' => 'Cuba', 'id'=>'51','localname'=>'','phonecode'=>'53','language'=>'es-CU','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Havana','shortname'=>'CUP','iso2'=>'CU','iso3'=>'CUB','width'=>'23°08 N','length'=>'23°08 N'],
'Curacao'=>['name' => 'Curacao', 'id'=>'53','localname'=>'','phonecode'=>'599','language'=>'nl','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Willemstad','shortname'=>'ANG','iso2'=>'CW','iso3'=>'CUW','width'=>'-','length'=>'-'],
'Cyprus'=>['name' => 'Cyprus', 'id'=>'55','localname'=>'Κύπρος','phonecode'=>'357','language'=>'el-CY','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Nicosia','shortname'=>'EUR','iso2'=>'CY','iso3'=>'CYP','width'=>'35°10 N','length'=>'35°10 N'],
'Czech Republic'=>['name' => 'Czech Republic', 'id'=>'56','localname'=>'Česká republika','phonecode'=>'420','language'=>'cs','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Prague','shortname'=>'CZK','iso2'=>'CZ','iso3'=>'CZE','width'=>'50°05 N','length'=>'50°05 N'],
'Democratic Republic of the Congo'=>['name' => 'Democratic Republic of the Congo', 'id'=>'40','localname'=>'Jamhuri ya Kidemokrasia ya Kongo','phonecode'=>'243','language'=>'fr-CD','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Kinshasa','shortname'=>'CDF','iso2'=>'CD','iso3'=>'COD','width'=>'04°20 S','length'=>'04°20 S'],
'Denmark'=>['name' => 'Denmark', 'id'=>'59','localname'=>'Danmark','phonecode'=>'45','language'=>'da-DK','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Copenhagen','shortname'=>'DKK','iso2'=>'DK','iso3'=>'DNK','width'=>'55°41 N','length'=>'55°41 N'],
'Djibouti'=>['name' => 'Djibouti', 'id'=>'58','localname'=>'','phonecode'=>'253','language'=>'fr-DJ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Djibouti','shortname'=>'DJF','iso2'=>'DJ','iso3'=>'DJI','width'=>'11°08 N','length'=>'11°08 N'],
'Dominica'=>['name' => 'Dominica', 'id'=>'60','localname'=>'','phonecode'=>'1','language'=>'en-DM','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Roseau','shortname'=>'XCD','iso2'=>'DM','iso3'=>'DMA','width'=>'15°20 N','length'=>'15°20 N'],
'Dominican Republic'=>['name' => 'Dominican Republic', 'id'=>'61','localname'=>'República Dominicana','phonecode'=>'1','language'=>'es-DO','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Santo Domingo','shortname'=>'DOP','iso2'=>'DO','iso3'=>'DOM','width'=>'-','length'=>'-'],
'East Timor'=>['name' => 'East Timor', 'id'=>'220','localname'=>'','phonecode'=>'670','language'=>'tet','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Dili','shortname'=>'USD','iso2'=>'TL','iso3'=>'TLS','width'=>'08°29 S','length'=>'08°29 S'],
'Ecuador'=>['name' => 'Ecuador', 'id'=>'63','localname'=>'','phonecode'=>'593','language'=>'es-EC','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Quito','shortname'=>'USD','iso2'=>'EC','iso3'=>'ECU','width'=>'00°15 S','length'=>'00°15 S'],
'Egypt'=>['name' => 'Egypt', 'id'=>'65','localname'=>'‫مصر','phonecode'=>'20','language'=>'ar-EG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Cairo','shortname'=>'EGP','iso2'=>'EG','iso3'=>'EGY','width'=>'30°01 N','length'=>'30°01 N'],
'El Salvador'=>['name' => 'El Salvador', 'id'=>'209','localname'=>'','phonecode'=>'503','language'=>'es-SV','containent'=>'North America','shortcontainent'=>'NA','capital'=>'San Salvador','shortname'=>'USD','iso2'=>'SV','iso3'=>'SLV','width'=>'13°40 N','length'=>'13°40 N'],
'Equatorial Guinea'=>['name' => 'Equatorial Guinea', 'id'=>'88','localname'=>'Guinea Ecuatorial','phonecode'=>'240','language'=>'es-GQ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Malabo','shortname'=>'XAF','iso2'=>'GQ','iso3'=>'GNQ','width'=>'03°45 N','length'=>'03°45 N'],
'Eritrea'=>['name' => 'Eritrea', 'id'=>'67','localname'=>'','phonecode'=>'291','language'=>'aa-ER','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Asmara','shortname'=>'ERN','iso2'=>'ER','iso3'=>'ERI','width'=>'15°19 N','length'=>'15°19 N'],
'Estonia'=>['name' => 'Estonia', 'id'=>'64','localname'=>'Eesti','phonecode'=>'372','language'=>'et','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Tallinn','shortname'=>'EUR','iso2'=>'EE','iso3'=>'EST','width'=>'59°22 N','length'=>'59°22 N'],
'Ethiopia'=>['name' => 'Ethiopia', 'id'=>'69','localname'=>'','phonecode'=>'251','language'=>'am','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Addis Ababa','shortname'=>'ETB','iso2'=>'ET','iso3'=>'ETH','width'=>'09°02 N','length'=>'09°02 N'],
'Falkland Islands'=>['name' => 'Falkland Islands', 'id'=>'72','localname'=>'Islas Malvinas','phonecode'=>'500','language'=>'en-FK','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Stanley','shortname'=>'FKP','iso2'=>'FK','iso3'=>'FLK','width'=>'-','length'=>'-'],
'Faroe Islands'=>['name' => 'Faroe Islands', 'id'=>'74','localname'=>'Føroyar','phonecode'=>'298','language'=>'fo','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Tórshavn','shortname'=>'DKK','iso2'=>'FO','iso3'=>'FRO','width'=>'62°05 N','length'=>'62°05 N'],
'Fiji'=>['name' => 'Fiji', 'id'=>'71','localname'=>'','phonecode'=>'679','language'=>'en-FJ','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Suva','shortname'=>'FJD','iso2'=>'FJ','iso3'=>'FJI','width'=>'18°06 S','length'=>'18°06 S'],
'Finland'=>['name' => 'Finland', 'id'=>'70','localname'=>'Suomi','phonecode'=>'358','language'=>'fi-FI','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Helsinki','shortname'=>'EUR','iso2'=>'FI','iso3'=>'FIN','width'=>'60°15 N','length'=>'60°15 N'],
'France'=>['name' => 'France', 'id'=>'75','localname'=>'','phonecode'=>'33','language'=>'fr-FR','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Paris','shortname'=>'EUR','iso2'=>'FR','iso3'=>'FRA','width'=>'48°50 N','length'=>'48°50 N'],
'French Guiana'=>['name' => 'French Guiana', 'id'=>'80','localname'=>'Guyane française','phonecode'=>'0','language'=>'fr-GF','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Cayenne','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'05°05 N','length'=>'05°05 N'],
'French Polynesia'=>['name' => 'French Polynesia', 'id'=>'174','localname'=>'Polynésie française','phonecode'=>'689','language'=>'fr-PF','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Papeete','shortname'=>'XPF','iso2'=>'PF','iso3'=>'PYF','width'=>'17°32 S','length'=>'17°32 S'],
'French Southern Territories'=>['name' => 'French Southern Territories', 'id'=>'215','localname'=>'Terres australes françaises','phonecode'=>'0','language'=>'fr','containent'=>'Antarctica','shortcontainent'=>'AN','capital'=>'Port-aux-Français','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Gabon'=>['name' => 'Gabon', 'id'=>'76','localname'=>'','phonecode'=>'241','language'=>'fr-GA','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Libreville','shortname'=>'XAF','iso2'=>'GA','iso3'=>'GAB','width'=>'00°25 N','length'=>'00°25 N'],
'Gambia'=>['name' => 'Gambia', 'id'=>'85','localname'=>'','phonecode'=>'220','language'=>'en-GM','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Bathurst','shortname'=>'GMD','iso2'=>'GM','iso3'=>'GMB','width'=>'13°28 N','length'=>'13°28 N'],
'Georgia'=>['name' => 'Georgia', 'id'=>'79','localname'=>'საქართველო','phonecode'=>'995','language'=>'ka','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Tbilisi','shortname'=>'GEL','iso2'=>'GE','iso3'=>'GEO','width'=>'41°43 N','length'=>'41°43 N'],
'Germany'=>['name' => 'Germany', 'id'=>'57','localname'=>'Deutschland','phonecode'=>'49','language'=>'de','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Berlin','shortname'=>'EUR','iso2'=>'DE','iso3'=>'DEU','width'=>'52°30 N','length'=>'52°30 N'],
'Ghana'=>['name' => 'Ghana', 'id'=>'82','localname'=>'Gaana','phonecode'=>'233','language'=>'en-GH','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Accra','shortname'=>'GHS','iso2'=>'GH','iso3'=>'GHA','width'=>'05°35 N','length'=>'05°35 N'],
'Gibraltar'=>['name' => 'Gibraltar', 'id'=>'83','localname'=>'','phonecode'=>'350','language'=>'en-GI','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Gibraltar','shortname'=>'GIP','iso2'=>'GI','iso3'=>'GIB','width'=>'-','length'=>'-'],
'Greece'=>['name' => 'Greece', 'id'=>'89','localname'=>'Ελλάδα','phonecode'=>'30','language'=>'el-GR','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Athens','shortname'=>'EUR','iso2'=>'GR','iso3'=>'GRC','width'=>'37°58 N','length'=>'37°58 N'],
'Greenland'=>['name' => 'Greenland', 'id'=>'84','localname'=>'Kalaallit Nunaat','phonecode'=>'299','language'=>'kl','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Nuuk','shortname'=>'DKK','iso2'=>'GL','iso3'=>'GRL','width'=>'64°10 N','length'=>'64°10 N'],
'Grenada'=>['name' => 'Grenada', 'id'=>'78','localname'=>'','phonecode'=>'1','language'=>'en-GD','containent'=>'North America','shortcontainent'=>'NA','capital'=>'St. George"s','shortname'=>'XCD','iso2'=>'GD','iso3'=>'GRD','width'=>'-','length'=>'-'],
'Guadeloupe'=>['name' => 'Guadeloupe', 'id'=>'87','localname'=>'','phonecode'=>'0','language'=>'fr-GP','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Basse-Terre','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'16°00 N','length'=>'16°00 N'],
'Guam'=>['name' => 'Guam', 'id'=>'92','localname'=>'','phonecode'=>'1','language'=>'en-GU','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Hagåtña','shortname'=>'USD','iso2'=>'GU','iso3'=>'GUM','width'=>'-','length'=>'-'],
'Guatemala'=>['name' => 'Guatemala', 'id'=>'91','localname'=>'','phonecode'=>'502','language'=>'es-GT','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Guatemala City','shortname'=>'GTQ','iso2'=>'GT','iso3'=>'GTM','width'=>'14°40 N','length'=>'14°40 N'],
'Guernsey'=>['name' => 'Guernsey', 'id'=>'81','localname'=>'','phonecode'=>'44','language'=>'en','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'St Peter Port','shortname'=>'GBP','iso2'=>'GG','iso3'=>'GGY','width'=>'49°26 N','length'=>'49°26 N'],
'Guinea'=>['name' => 'Guinea', 'id'=>'86','localname'=>'Guinée','phonecode'=>'224','language'=>'fr-GN','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Conakry','shortname'=>'GNF','iso2'=>'GN','iso3'=>'GIN','width'=>'09°29 N','length'=>'09°29 N'],
'Guinea-Bissau'=>['name' => 'Guinea-Bissau', 'id'=>'93','localname'=>'Guiné Bissau','phonecode'=>'245','language'=>'pt-GW','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Bissau','shortname'=>'XOF','iso2'=>'GW','iso3'=>'GNB','width'=>'11°45 N','length'=>'11°45 N'],
'Guyana'=>['name' => 'Guyana', 'id'=>'94','localname'=>'','phonecode'=>'592','language'=>'en-GY','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Georgetown','shortname'=>'GYD','iso2'=>'GY','iso3'=>'GUY','width'=>'06°50 N','length'=>'06°50 N'],
'Haiti'=>['name' => 'Haiti', 'id'=>'99','localname'=>'','phonecode'=>'509','language'=>'ht','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Port-au-Prince','shortname'=>'HTG','iso2'=>'HT','iso3'=>'HTI','width'=>'18°40 N','length'=>'18°40 N'],
'Heard Island and McDonald Islands'=>['name' => 'Heard Island and McDonald Islands', 'id'=>'96','localname'=>'','phonecode'=>'0','language'=>'0','containent'=>'Antarctica','shortcontainent'=>'AN','capital'=>'0','shortname'=>'AUD','iso2'=>'','iso3'=>'','width'=>'53°00 S','length'=>'53°00 S'],
'Honduras'=>['name' => 'Honduras', 'id'=>'97','localname'=>'','phonecode'=>'504','language'=>'es-HN','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Tegucigalpa','shortname'=>'HNL','iso2'=>'HN','iso3'=>'HND','width'=>'14°05 N','length'=>'14°05 N'],
'Hong Kong'=>['name' => 'Hong Kong', 'id'=>'95','localname'=>'香港','phonecode'=>'852','language'=>'zh-HK','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Hong Kong','shortname'=>'HKD','iso2'=>'HK','iso3'=>'HKG','width'=>'-','length'=>'-'],
'Hungary'=>['name' => 'Hungary', 'id'=>'100','localname'=>'Magyarország','phonecode'=>'36','language'=>'hu-HU','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Budapest','shortname'=>'HUF','iso2'=>'HU','iso3'=>'HUN','width'=>'47°29 N','length'=>'47°29 N'],
'Iceland'=>['name' => 'Iceland', 'id'=>'108','localname'=>'Ísland','phonecode'=>'354','language'=>'is','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Reykjavik','shortname'=>'ISK','iso2'=>'IS','iso3'=>'ISL','width'=>'64°10 N','length'=>'64°10 N'],
'India'=>['name' => 'India', 'id'=>'104','localname'=>'भारत','phonecode'=>'91','language'=>'en-IN','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'New Delhi','shortname'=>'INR','iso2'=>'IN','iso3'=>'IND','width'=>'28°37 N','length'=>'28°37 N'],
'Indonesia'=>['name' => 'Indonesia', 'id'=>'101','localname'=>'','phonecode'=>'62','language'=>'id','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Jakarta','shortname'=>'IDR','iso2'=>'ID','iso3'=>'IDN','width'=>'06°09 S','length'=>'06°09 S'],
'Iran'=>['name' => 'Iran', 'id'=>'107','localname'=>'‫ایران','phonecode'=>'98','language'=>'fa-IR','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Tehran','shortname'=>'IRR','iso2'=>'IR','iso3'=>'IRN','width'=>'-','length'=>'-'],
'Iraq'=>['name' => 'Iraq', 'id'=>'106','localname'=>'‫العراق','phonecode'=>'964','language'=>'ar-IQ','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Baghdad','shortname'=>'IQD','iso2'=>'IQ','iso3'=>'IRQ','width'=>'33°20 N','length'=>'33°20 N'],
'Ireland'=>['name' => 'Ireland', 'id'=>'102','localname'=>'','phonecode'=>'353','language'=>'en-IE','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Dublin','shortname'=>'EUR','iso2'=>'IE','iso3'=>'IRL','width'=>'53°21 N','length'=>'53°21 N'],
'Isle of Man'=>['name' => 'Isle of Man', 'id'=>'103','localname'=>'','phonecode'=>'44','language'=>'en','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Douglas','shortname'=>'GBP','iso2'=>'IM','iso3'=>'IMN','width'=>'-','length'=>'-'],
'Italy'=>['name' => 'Italy', 'id'=>'109','localname'=>'Italia','phonecode'=>'39','language'=>'it-IT','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Rome','shortname'=>'EUR','iso2'=>'IT','iso3'=>'ITA','width'=>'41°54 N','length'=>'41°54 N'],
'Ivory Coast'=>['name' => 'Ivory Coast', 'id'=>'44','localname'=>'Côte d’Ivoire','phonecode'=>'225','language'=>'fr-CI','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Yamoussoukro','shortname'=>'XOF','iso2'=>'CI','iso3'=>'CIV','width'=>'-','length'=>'-'],
'Jamaica'=>['name' => 'Jamaica', 'id'=>'111','localname'=>'','phonecode'=>'1','language'=>'en-JM','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Kingston','shortname'=>'JMD','iso2'=>'JM','iso3'=>'JAM','width'=>'18°00 N','length'=>'18°00 N'],
'Japan'=>['name' => 'Japan', 'id'=>'113','localname'=>'日本','phonecode'=>'81','language'=>'ja','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Tokyo','shortname'=>'JPY','iso2'=>'JP','iso3'=>'JPN','width'=>'-','length'=>'-'],
'Jersey'=>['name' => 'Jersey', 'id'=>'110','localname'=>'','phonecode'=>'44','language'=>'en','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Saint Helier','shortname'=>'GBP','iso2'=>'JE','iso3'=>'JEY','width'=>'-','length'=>'-'],
'Jordan'=>['name' => 'Jordan', 'id'=>'112','localname'=>'‫الأردن','phonecode'=>'962','language'=>'ar-JO','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Amman','shortname'=>'JOD','iso2'=>'JO','iso3'=>'JOR','width'=>'31°57 N','length'=>'31°57 N'],
'Kazakhstan'=>['name' => 'Kazakhstan', 'id'=>'124','localname'=>'Казахстан','phonecode'=>'7','language'=>'kk','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Astana','shortname'=>'KZT','iso2'=>'KZ','iso3'=>'KAZ','width'=>'51°10 N','length'=>'51°10 N'],
'Kenya'=>['name' => 'Kenya', 'id'=>'114','localname'=>'','phonecode'=>'254','language'=>'en-KE','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Nairobi','shortname'=>'KES','iso2'=>'KE','iso3'=>'KEN','width'=>'01°17 S','length'=>'01°17 S'],
'Kiribati'=>['name' => 'Kiribati', 'id'=>'117','localname'=>'','phonecode'=>'686','language'=>'en-KI','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Tarawa','shortname'=>'AUD','iso2'=>'KI','iso3'=>'KIR','width'=>'01°30 N','length'=>'01°30 N'],
'Kosovo'=>['name' => 'Kosovo', 'id'=>'244','localname'=>'Kosovë','phonecode'=>'383','language'=>'sq','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Pristina','shortname'=>'EUR','iso2'=>'XK','iso3'=>'XKX','width'=>'-','length'=>'-'],
'Kuwait'=>['name' => 'Kuwait', 'id'=>'122','localname'=>'‫الكويت','phonecode'=>'965','language'=>'ar-KW','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Kuwait City','shortname'=>'KWD','iso2'=>'KW','iso3'=>'KWT','width'=>'29°30 N','length'=>'29°30 N'],
'Kyrgyzstan'=>['name' => 'Kyrgyzstan', 'id'=>'115','localname'=>'Кыргызстан','phonecode'=>'996','language'=>'ky','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Bishkek','shortname'=>'KGS','iso2'=>'KG','iso3'=>'KGZ','width'=>'42°54 N','length'=>'42°54 N'],
'Laos'=>['name' => 'Laos', 'id'=>'125','localname'=>'ລາວ','phonecode'=>'856','language'=>'lo','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Vientiane','shortname'=>'LAK','iso2'=>'LA','iso3'=>'LAO','width'=>'-','length'=>'-'],
'Latvia'=>['name' => 'Latvia', 'id'=>'134','localname'=>'Latvija','phonecode'=>'371','language'=>'lv','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Riga','shortname'=>'EUR','iso2'=>'LV','iso3'=>'LVA','width'=>'56°53 N','length'=>'56°53 N'],
'Lebanon'=>['name' => 'Lebanon', 'id'=>'126','localname'=>'‫لبنان','phonecode'=>'961','language'=>'ar-LB','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Beirut','shortname'=>'LBP','iso2'=>'LB','iso3'=>'LBN','width'=>'33°53 N','length'=>'33°53 N'],
'Lesotho'=>['name' => 'Lesotho', 'id'=>'131','localname'=>'','phonecode'=>'266','language'=>'en-LS','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Maseru','shortname'=>'LSL','iso2'=>'LS','iso3'=>'LSO','width'=>'29°18 S','length'=>'29°18 S'],
'Liberia'=>['name' => 'Liberia', 'id'=>'130','localname'=>'','phonecode'=>'231','language'=>'en-LR','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Monrovia','shortname'=>'LRD','iso2'=>'LR','iso3'=>'LBR','width'=>'06°18 N','length'=>'06°18 N'],
'Libya'=>['name' => 'Libya', 'id'=>'135','localname'=>'‫ليبيا','phonecode'=>'218','language'=>'ar-LY','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Tripoli','shortname'=>'LYD','iso2'=>'LY','iso3'=>'LBY','width'=>'-','length'=>'-'],
'Liechtenstein'=>['name' => 'Liechtenstein', 'id'=>'128','localname'=>'','phonecode'=>'423','language'=>'de-LI','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Vaduz','shortname'=>'CHF','iso2'=>'LI','iso3'=>'LIE','width'=>'47°08 N','length'=>'47°08 N'],
'Lithuania'=>['name' => 'Lithuania', 'id'=>'132','localname'=>'Lietuva','phonecode'=>'370','language'=>'lt','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Vilnius','shortname'=>'EUR','iso2'=>'LT','iso3'=>'LTU','width'=>'54°38 N','length'=>'54°38 N'],
'Luxembourg'=>['name' => 'Luxembourg', 'id'=>'133','localname'=>'','phonecode'=>'352','language'=>'lb','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Luxembourg','shortname'=>'EUR','iso2'=>'LU','iso3'=>'LUX','width'=>'49°37 N','length'=>'49°37 N'],
'Macau'=>['name' => 'Macau', 'id'=>'147','localname'=>'澳門','phonecode'=>'0','language'=>'zh','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Macao','shortname'=>'MOP','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Macedonia'=>['name' => 'Macedonia', 'id'=>'143','localname'=>'Македонија','phonecode'=>'389','language'=>'mk','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Skopje','shortname'=>'MKD','iso2'=>'MK','iso3'=>'MKD','width'=>'-','length'=>'-'],
'Madagascar'=>['name' => 'Madagascar', 'id'=>'141','localname'=>'Madagasikara','phonecode'=>'261','language'=>'fr-MG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Antananarivo','shortname'=>'MGA','iso2'=>'MG','iso3'=>'MDG','width'=>'18°55 S','length'=>'18°55 S'],
'Malawi'=>['name' => 'Malawi', 'id'=>'155','localname'=>'','phonecode'=>'265','language'=>'ny','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Lilongwe','shortname'=>'MWK','iso2'=>'MW','iso3'=>'MWI','width'=>'14°00 S','length'=>'14°00 S'],
'Malaysia'=>['name' => 'Malaysia', 'id'=>'157','localname'=>'','phonecode'=>'60','language'=>'ms-MY','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Kuala Lumpur','shortname'=>'MYR','iso2'=>'MY','iso3'=>'MYS','width'=>'03°09 N','length'=>'03°09 N'],
'Maldives'=>['name' => 'Maldives', 'id'=>'154','localname'=>'','phonecode'=>'960','language'=>'dv','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Malé','shortname'=>'MVR','iso2'=>'MV','iso3'=>'MDV','width'=>'04°00 N','length'=>'04°00 N'],
'Mali'=>['name' => 'Mali', 'id'=>'144','localname'=>'','phonecode'=>'223','language'=>'fr-ML','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Bamako','shortname'=>'XOF','iso2'=>'ML','iso3'=>'MLI','width'=>'12°34 N','length'=>'12°34 N'],
'Malta'=>['name' => 'Malta', 'id'=>'152','localname'=>'','phonecode'=>'356','language'=>'mt','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Valletta','shortname'=>'EUR','iso2'=>'MT','iso3'=>'MLT','width'=>'35°54 N','length'=>'35°54 N'],
'Marshall Islands'=>['name' => 'Marshall Islands', 'id'=>'142','localname'=>'','phonecode'=>'692','language'=>'mh','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Majuro','shortname'=>'USD','iso2'=>'MH','iso3'=>'MHL','width'=>'-','length'=>'-'],
'Martinique'=>['name' => 'Martinique', 'id'=>'149','localname'=>'','phonecode'=>'0','language'=>'fr-MQ','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Fort-de-France','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'14°36 N','length'=>'14°36 N'],
'Mauritania'=>['name' => 'Mauritania', 'id'=>'150','localname'=>'‫موريتانيا','phonecode'=>'222','language'=>'ar-MR','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Nouakchott','shortname'=>'MRO','iso2'=>'MR','iso3'=>'MRT','width'=>'20°10 S','length'=>'20°10 S'],
'Mauritius'=>['name' => 'Mauritius', 'id'=>'153','localname'=>'Moris','phonecode'=>'230','language'=>'en-MU','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Port Louis','shortname'=>'MUR','iso2'=>'MU','iso3'=>'MUS','width'=>'-','length'=>'-'],
'Mayotte'=>['name' => 'Mayotte', 'id'=>'246','localname'=>'','phonecode'=>'262','language'=>'fr-YT','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Mamoudzou','shortname'=>'EUR','iso2'=>'YT','iso3'=>'MYT','width'=>'12°48 S','length'=>'12°48 S'],
'Mexico'=>['name' => 'Mexico', 'id'=>'156','localname'=>'','phonecode'=>'52','language'=>'es-MX','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Mexico City','shortname'=>'MXN','iso2'=>'MX','iso3'=>'MEX','width'=>'19°20 N','length'=>'19°20 N'],
'Micronesia'=>['name' => 'Micronesia', 'id'=>'73','localname'=>'','phonecode'=>'691','language'=>'en-FM','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Palikir','shortname'=>'USD','iso2'=>'FM','iso3'=>'FSM','width'=>'-','length'=>'-'],
'Moldova'=>['name' => 'Moldova', 'id'=>'138','localname'=>'Republica Moldova','phonecode'=>'373','language'=>'ro','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Chişinău','shortname'=>'MDL','iso2'=>'MD','iso3'=>'MDA','width'=>'-','length'=>'-'],
'Monaco'=>['name' => 'Monaco', 'id'=>'137','localname'=>'','phonecode'=>'377','language'=>'fr-MC','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Monaco','shortname'=>'EUR','iso2'=>'MC','iso3'=>'MCO','width'=>'-','length'=>'-'],
'Mongolia'=>['name' => 'Mongolia', 'id'=>'146','localname'=>'Монгол','phonecode'=>'976','language'=>'mn','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Ulan Bator','shortname'=>'MNT','iso2'=>'MN','iso3'=>'MNG','width'=>'-','length'=>'-'],
'Montenegro'=>['name' => 'Montenegro', 'id'=>'139','localname'=>'Crna Gora','phonecode'=>'382','language'=>'sr','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Podgorica','shortname'=>'EUR','iso2'=>'ME','iso3'=>'MNE','width'=>'-','length'=>'-'],
'Montserrat'=>['name' => 'Montserrat', 'id'=>'151','localname'=>'','phonecode'=>'1','language'=>'en-MS','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Plymouth','shortname'=>'XCD','iso2'=>'MS','iso3'=>'MSR','width'=>'-','length'=>'-'],
'Morocco'=>['name' => 'Morocco', 'id'=>'136','localname'=>'‫المغرب','phonecode'=>'212','language'=>'ar-MA','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Rabat','shortname'=>'MAD','iso2'=>'MA','iso3'=>'MAR','width'=>'-','length'=>'-'],
'Mozambique'=>['name' => 'Mozambique', 'id'=>'158','localname'=>'Moçambique','phonecode'=>'258','language'=>'pt-MZ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Maputo','shortname'=>'MZN','iso2'=>'MZ','iso3'=>'MOZ','width'=>'25°58 S','length'=>'25°58 S'],
'Myanmar (Burma)'=>['name' => 'Myanmar (Burma)', 'id'=>'145','localname'=>'မြန်မာ','phonecode'=>'0','language'=>'my','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Naypyitaw','shortname'=>'MMK','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Namibia'=>['name' => 'Namibia', 'id'=>'159','localname'=>'Namibië','phonecode'=>'264','language'=>'en-NA','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Windhoek','shortname'=>'NAD','iso2'=>'NA','iso3'=>'NAM','width'=>'22°35 S','length'=>'22°35 S'],
'Nauru'=>['name' => 'Nauru', 'id'=>'168','localname'=>'','phonecode'=>'674','language'=>'na','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Yaren','shortname'=>'AUD','iso2'=>'NR','iso3'=>'NRU','width'=>'-','length'=>'-'],
'Nepal'=>['name' => 'Nepal', 'id'=>'167','localname'=>'नेपाल','phonecode'=>'977','language'=>'ne','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Kathmandu','shortname'=>'NPR','iso2'=>'NP','iso3'=>'NPL','width'=>'27°45 N','length'=>'27°45 N'],
'Netherlands'=>['name' => 'Netherlands', 'id'=>'165','localname'=>'Nederland','phonecode'=>'31','language'=>'nl-NL','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Amsterdam','shortname'=>'EUR','iso2'=>'NL','iso3'=>'NLD','width'=>'52°23 N','length'=>'52°23 N'],
'New Caledonia'=>['name' => 'New Caledonia', 'id'=>'160','localname'=>'Nouvelle-Calédonie','phonecode'=>'687','language'=>'fr-NC','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Noumea','shortname'=>'XPF','iso2'=>'NC','iso3'=>'NCL','width'=>'22°17 S','length'=>'22°17 S'],
'New Zealand'=>['name' => 'New Zealand', 'id'=>'170','localname'=>'','phonecode'=>'64','language'=>'en-NZ','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Wellington','shortname'=>'NZD','iso2'=>'NZ','iso3'=>'NZL','width'=>'41°19 S','length'=>'41°19 S'],
'Nicaragua'=>['name' => 'Nicaragua', 'id'=>'164','localname'=>'','phonecode'=>'505','language'=>'es-NI','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Managua','shortname'=>'NIO','iso2'=>'NI','iso3'=>'NIC','width'=>'12°06 N','length'=>'12°06 N'],
'Niger'=>['name' => 'Niger', 'id'=>'161','localname'=>'Nijar','phonecode'=>'227','language'=>'fr-NE','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Niamey','shortname'=>'XOF','iso2'=>'NE','iso3'=>'NER','width'=>'13°27 N','length'=>'13°27 N'],
'Nigeria'=>['name' => 'Nigeria', 'id'=>'163','localname'=>'','phonecode'=>'234','language'=>'en-NG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Abuja','shortname'=>'NGN','iso2'=>'NG','iso3'=>'NGA','width'=>'09°05 N','length'=>'09°05 N'],
'Niue'=>['name' => 'Niue', 'id'=>'169','localname'=>'','phonecode'=>'683','language'=>'niu','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Alofi','shortname'=>'NZD','iso2'=>'NU','iso3'=>'NIU','width'=>'-','length'=>'-'],
'Norfolk Island'=>['name' => 'Norfolk Island', 'id'=>'162','localname'=>'','phonecode'=>'0','language'=>'en-NF','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Kingston','shortname'=>'AUD','iso2'=>'','iso3'=>'','width'=>'45°20 S','length'=>'45°20 S'],
'North Korea'=>['name' => 'North Korea', 'id'=>'120','localname'=>'조선 민주주의 인민 공화국','phonecode'=>'850','language'=>'ko-KP','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Pyongyang','shortname'=>'KPW','iso2'=>'KP','iso3'=>'PRK','width'=>'-','length'=>'-'],
'Northern Mariana Islands'=>['name' => 'Northern Mariana Islands', 'id'=>'148','localname'=>'','phonecode'=>'1','language'=>'fil','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Saipan','shortname'=>'USD','iso2'=>'MP','iso3'=>'MNP','width'=>'15°12 N','length'=>'15°12 N'],
'Norway'=>['name' => 'Norway', 'id'=>'166','localname'=>'Norge','phonecode'=>'47','language'=>'no','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Oslo','shortname'=>'NOK','iso2'=>'NO','iso3'=>'NOR','width'=>'59°55 N','length'=>'59°55 N'],
'Oman'=>['name' => 'Oman', 'id'=>'171','localname'=>'‫عُمان','phonecode'=>'968','language'=>'ar-OM','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Muscat','shortname'=>'OMR','iso2'=>'OM','iso3'=>'OMN','width'=>'23°37 N','length'=>'23°37 N'],
'Pakistan'=>['name' => 'Pakistan', 'id'=>'177','localname'=>'‫پاکستان','phonecode'=>'92','language'=>'ur-PK','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Islamabad','shortname'=>'PKR','iso2'=>'PK','iso3'=>'PAK','width'=>'33°40 N','length'=>'33°40 N'],
'Palau'=>['name' => 'Palau', 'id'=>'184','localname'=>'','phonecode'=>'680','language'=>'pau','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Melekeok','shortname'=>'USD','iso2'=>'PW','iso3'=>'PLW','width'=>'07°20 N','length'=>'07°20 N'],
'Palestine'=>['name' => 'Palestine', 'id'=>'182','localname'=>'‫فلسطين','phonecode'=>'970','language'=>'ar-PS','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'0','shortname'=>'ILS','iso2'=>'PS','iso3'=>'PSE','width'=>'-','length'=>'-'],
'Panama'=>['name' => 'Panama', 'id'=>'172','localname'=>'','phonecode'=>'507','language'=>'es-PA','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Panama City','shortname'=>'PAB','iso2'=>'PA','iso3'=>'PAN','width'=>'09°00 N','length'=>'09°00 N'],
'Papua New Guinea'=>['name' => 'Papua New Guinea', 'id'=>'175','localname'=>'','phonecode'=>'675','language'=>'en-PG','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Port Moresby','shortname'=>'PGK','iso2'=>'PG','iso3'=>'PNG','width'=>'09°24 S','length'=>'09°24 S'],
'Paraguay'=>['name' => 'Paraguay', 'id'=>'185','localname'=>'','phonecode'=>'595','language'=>'es-PY','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Asunción','shortname'=>'PYG','iso2'=>'PY','iso3'=>'PRY','width'=>'25°10 S','length'=>'25°10 S'],
'Peru'=>['name' => 'Peru', 'id'=>'173','localname'=>'Perú','phonecode'=>'51','language'=>'es-PE','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Lima','shortname'=>'PEN','iso2'=>'PE','iso3'=>'PER','width'=>'12°00 S','length'=>'12°00 S'],
'Philippines'=>['name' => 'Philippines', 'id'=>'176','localname'=>'','phonecode'=>'63','language'=>'tl','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Manila','shortname'=>'PHP','iso2'=>'PH','iso3'=>'PHL','width'=>'14°40 N','length'=>'14°40 N'],
'Pitcairn Islands'=>['name' => 'Pitcairn Islands', 'id'=>'180','localname'=>'','phonecode'=>'0','language'=>'en-PN','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Adamstown','shortname'=>'NZD','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Poland'=>['name' => 'Poland', 'id'=>'178','localname'=>'Polska','phonecode'=>'48','language'=>'pl','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Warsaw','shortname'=>'PLN','iso2'=>'PL','iso3'=>'POL','width'=>'52°13 N','length'=>'52°13 N'],
'Portugal'=>['name' => 'Portugal', 'id'=>'183','localname'=>'','phonecode'=>'351','language'=>'pt-PT','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Lisbon','shortname'=>'EUR','iso2'=>'PT','iso3'=>'PRT','width'=>'38°42 N','length'=>'38°42 N'],
'Puerto Rico'=>['name' => 'Puerto Rico', 'id'=>'181','localname'=>'','phonecode'=>'1','language'=>'en-PR','containent'=>'North America','shortcontainent'=>'NA','capital'=>'San Juan','shortname'=>'USD','iso2'=>'PR','iso3'=>'PRI','width'=>'18°28 N','length'=>'18°28 N'],
'Qatar'=>['name' => 'Qatar', 'id'=>'186','localname'=>'‫قطر','phonecode'=>'974','language'=>'ar-QA','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Doha','shortname'=>'QAR','iso2'=>'QA','iso3'=>'QAT','width'=>'25°15 N','length'=>'25°15 N'],
'Republic of the Congo'=>['name' => 'Republic of the Congo', 'id'=>'42','localname'=>'Congo-Brazzaville','phonecode'=>'242','language'=>'fr-CG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Brazzaville','shortname'=>'XAF','iso2'=>'CG','iso3'=>'COG','width'=>'-','length'=>'-'],
'Réunion'=>['name' => 'Réunion', 'id'=>'187','localname'=>'La Réunion','phonecode'=>'0','language'=>'fr-RE','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Saint-Denis','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Romania'=>['name' => 'Romania', 'id'=>'188','localname'=>'România','phonecode'=>'40','language'=>'ro','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Bucharest','shortname'=>'RON','iso2'=>'RO','iso3'=>'ROU','width'=>'44°27 N','length'=>'44°27 N'],
'Russia'=>['name' => 'Russia', 'id'=>'190','localname'=>'Россия','phonecode'=>'7','language'=>'ru','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Moscow','shortname'=>'RUB','iso2'=>'RU','iso3'=>'RUS','width'=>'-','length'=>'-'],
'Rwanda'=>['name' => 'Rwanda', 'id'=>'191','localname'=>'','phonecode'=>'250','language'=>'rw','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Kigali','shortname'=>'RWF','iso2'=>'RW','iso3'=>'RWA','width'=>'-','length'=>'-'],
'Saint Barthélemy'=>['name' => 'Saint Barthélemy', 'id'=>'26','localname'=>'Saint-Barthélemy','phonecode'=>'0','language'=>'fr','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Gustavia','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Saint Helena'=>['name' => 'Saint Helena', 'id'=>'198','localname'=>'','phonecode'=>'290','language'=>'en-SH','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Jamestown','shortname'=>'SHP','iso2'=>'SH','iso3'=>'SHN','width'=>'-','length'=>'-'],
'Saint Kitts and Nevis'=>['name' => 'Saint Kitts and Nevis', 'id'=>'119','localname'=>'','phonecode'=>'1','language'=>'en-KN','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Basseterre','shortname'=>'XCD','iso2'=>'KN','iso3'=>'KNA','width'=>'17°17 N','length'=>'17°17 N'],
'Saint Lucia'=>['name' => 'Saint Lucia', 'id'=>'127','localname'=>'','phonecode'=>'1','language'=>'en-LC','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Castries','shortname'=>'XCD','iso2'=>'LC','iso3'=>'LCA','width'=>'14°02 N','length'=>'14°02 N'],
'Saint Martin'=>['name' => 'Saint Martin', 'id'=>'140','localname'=>'','phonecode'=>'590','language'=>'fr','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Marigot','shortname'=>'EUR','iso2'=>'MF','iso3'=>'MAF','width'=>'-','length'=>'-'],
'Saint Pierre and Miquelon'=>['name' => 'Saint Pierre and Miquelon', 'id'=>'179','localname'=>'Saint-Pierre-et-Miquelon','phonecode'=>'508','language'=>'fr-PM','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Saint-Pierre','shortname'=>'EUR','iso2'=>'PM','iso3'=>'SPM','width'=>'46°46 N','length'=>'46°46 N'],
'Saint Vincent and the Grenadines'=>['name' => 'Saint Vincent and the Grenadines', 'id'=>'236','localname'=>'','phonecode'=>'1','language'=>'en-VC','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Kingstown','shortname'=>'XCD','iso2'=>'VC','iso3'=>'VCT','width'=>'13°10 N','length'=>'13°10 N'],
'Samoa'=>['name' => 'Samoa', 'id'=>'243','localname'=>'','phonecode'=>'685','language'=>'sm','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Apia','shortname'=>'WST','iso2'=>'WS','iso3'=>'WSM','width'=>'13°50 S','length'=>'13°50 S'],
'San Marino'=>['name' => 'San Marino', 'id'=>'203','localname'=>'','phonecode'=>'378','language'=>'it-SM','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'San Marino','shortname'=>'EUR','iso2'=>'SM','iso3'=>'SMR','width'=>'43°55 N','length'=>'43°55 N'],
'São Tomé and Príncipe'=>['name' => 'São Tomé and Príncipe', 'id'=>'208','localname'=>'São Tomé e Príncipe','phonecode'=>'0','language'=>'pt-ST','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'São Tomé','shortname'=>'STD','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Saudi Arabia'=>['name' => 'Saudi Arabia', 'id'=>'192','localname'=>'‫المملكة العربية السعودية','phonecode'=>'966','language'=>'ar-SA','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Riyadh','shortname'=>'SAR','iso2'=>'SA','iso3'=>'SAU','width'=>'24°41 N','length'=>'24°41 N'],
'Senegal'=>['name' => 'Senegal', 'id'=>'204','localname'=>'Sénégal','phonecode'=>'221','language'=>'fr-SN','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Dakar','shortname'=>'XOF','iso2'=>'SN','iso3'=>'SEN','width'=>'14°34 N','length'=>'14°34 N'],
'Serbia'=>['name' => 'Serbia', 'id'=>'189','localname'=>'Србија','phonecode'=>'381','language'=>'sr','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Belgrade','shortname'=>'RSD','iso2'=>'RS','iso3'=>'SRB','width'=>'-','length'=>'-'],
'Seychelles'=>['name' => 'Seychelles', 'id'=>'194','localname'=>'','phonecode'=>'248','language'=>'en-SC','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Victoria','shortname'=>'SCR','iso2'=>'SC','iso3'=>'SYC','width'=>'-','length'=>'-'],
'Sierra Leone'=>['name' => 'Sierra Leone', 'id'=>'202','localname'=>'','phonecode'=>'232','language'=>'en-SL','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Freetown','shortname'=>'SLL','iso2'=>'SL','iso3'=>'SLE','width'=>'08°30 N','length'=>'08°30 N'],
'Singapore'=>['name' => 'Singapore', 'id'=>'197','localname'=>'','phonecode'=>'65','language'=>'cmn','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Singapore','shortname'=>'SGD','iso2'=>'SG','iso3'=>'SGP','width'=>'-','length'=>'-'],
'Sint Maarten'=>['name' => 'Sint Maarten', 'id'=>'210','localname'=>'','phonecode'=>'1','language'=>'nl','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Philipsburg','shortname'=>'ANG','iso2'=>'SX','iso3'=>'SXM','width'=>'-','length'=>'-'],
'Slovakia'=>['name' => 'Slovakia', 'id'=>'201','localname'=>'Slovensko','phonecode'=>'421','language'=>'sk','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Bratislava','shortname'=>'EUR','iso2'=>'SK','iso3'=>'SVK','width'=>'48°10 N','length'=>'48°10 N'],
'Slovenia'=>['name' => 'Slovenia', 'id'=>'199','localname'=>'Slovenija','phonecode'=>'386','language'=>'sl','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Ljubljana','shortname'=>'EUR','iso2'=>'SI','iso3'=>'SVN','width'=>'46°04 N','length'=>'46°04 N'],
'Solomon Islands'=>['name' => 'Solomon Islands', 'id'=>'193','localname'=>'','phonecode'=>'677','language'=>'en-SB','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Honiara','shortname'=>'SBD','iso2'=>'SB','iso3'=>'SLB','width'=>'09°27 S','length'=>'09°27 S'],
'Somalia'=>['name' => 'Somalia', 'id'=>'205','localname'=>'Soomaaliya','phonecode'=>'252','language'=>'so-SO','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Mogadishu','shortname'=>'SOS','iso2'=>'SO','iso3'=>'SOM','width'=>'02°02 N','length'=>'02°02 N'],
'South Africa'=>['name' => 'South Africa', 'id'=>'247','localname'=>'','phonecode'=>'27','language'=>'zu','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Pretoria','shortname'=>'ZAR','iso2'=>'ZA','iso3'=>'ZAF','width'=>'25°44 S','length'=>'25°44 S'],
'South Georgia and the South Sandwich Islands'=>['name' => 'South Georgia and the South Sandwich Islands', 'id'=>'90','localname'=>'','phonecode'=>'0','language'=>'en','containent'=>'Antarctica','shortcontainent'=>'AN','capital'=>'Grytviken','shortname'=>'GBP','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'South Korea'=>['name' => 'South Korea', 'id'=>'121','localname'=>'대한민국','phonecode'=>'82','language'=>'ko-KR','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Seoul','shortname'=>'KRW','iso2'=>'KR','iso3'=>'KOR','width'=>'-','length'=>'-'],
'South Sudan'=>['name' => 'South Sudan', 'id'=>'207','localname'=>'‫جنوب السودان','phonecode'=>'211','language'=>'en','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Juba','shortname'=>'SSP','iso2'=>'SS','iso3'=>'SSD','width'=>'-','length'=>'-'],
'Spain'=>['name' => 'Spain', 'id'=>'68','localname'=>'España','phonecode'=>'34','language'=>'es-ES','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Madrid','shortname'=>'EUR','iso2'=>'ES','iso3'=>'ESP','width'=>'40°25 N','length'=>'40°25 N'],
'Sri Lanka'=>['name' => 'Sri Lanka', 'id'=>'129','localname'=>'ශ්‍රී ලංකාව','phonecode'=>'94','language'=>'si','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Colombo','shortname'=>'LKR','iso2'=>'LK','iso3'=>'LKA','width'=>'-','length'=>'-'],
'Sudan'=>['name' => 'Sudan', 'id'=>'195','localname'=>'‫السودان','phonecode'=>'249','language'=>'ar-SD','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Khartoum','shortname'=>'SDG','iso2'=>'SD','iso3'=>'SDN','width'=>'15°31 N','length'=>'15°31 N'],
'Suriname'=>['name' => 'Suriname', 'id'=>'206','localname'=>'','phonecode'=>'597','language'=>'nl-SR','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Paramaribo','shortname'=>'SRD','iso2'=>'SR','iso3'=>'SUR','width'=>'05°50 N','length'=>'05°50 N'],
'Svalbard and Jan Mayen'=>['name' => 'Svalbard and Jan Mayen', 'id'=>'200','localname'=>'Svalbard og Jan Mayen','phonecode'=>'47','language'=>'no','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Longyearbyen','shortname'=>'NOK','iso2'=>'SJ','iso3'=>'SJM','width'=>'-','length'=>'-'],
'Swaziland'=>['name' => 'Swaziland', 'id'=>'212','localname'=>'','phonecode'=>'268','language'=>'en-SZ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Mbabane','shortname'=>'SZL','iso2'=>'SZ','iso3'=>'SWZ','width'=>'26°18 S','length'=>'26°18 S'],
'Sweden'=>['name' => 'Sweden', 'id'=>'196','localname'=>'Sverige','phonecode'=>'46','language'=>'sv-SE','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Stockholm','shortname'=>'SEK','iso2'=>'SE','iso3'=>'SWE','width'=>'59°20 N','length'=>'59°20 N'],
'Switzerland'=>['name' => 'Switzerland', 'id'=>'43','localname'=>'Schweiz','phonecode'=>'41','language'=>'de-CH','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Bern','shortname'=>'CHF','iso2'=>'CH','iso3'=>'CHE','width'=>'46°57 N','length'=>'46°57 N'],
'Syria'=>['name' => 'Syria', 'id'=>'211','localname'=>'‫سوريا','phonecode'=>'963','language'=>'ar-SY','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Damascus','shortname'=>'SYP','iso2'=>'SY','iso3'=>'SYR','width'=>'-','length'=>'-'],
'Taiwan'=>['name' => 'Taiwan', 'id'=>'227','localname'=>'台灣','phonecode'=>'886','language'=>'zh-TW','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Taipei','shortname'=>'TWD','iso2'=>'TW','iso3'=>'TWN','width'=>'-','length'=>'-'],
'Tajikistan'=>['name' => 'Tajikistan', 'id'=>'218','localname'=>'','phonecode'=>'992','language'=>'tg','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Dushanbe','shortname'=>'TJS','iso2'=>'TJ','iso3'=>'TJK','width'=>'38°33 N','length'=>'38°33 N'],
'Tanzania'=>['name' => 'Tanzania', 'id'=>'228','localname'=>'','phonecode'=>'255','language'=>'sw-TZ','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Dodoma','shortname'=>'TZS','iso2'=>'TZ','iso3'=>'TZA','width'=>'-','length'=>'-'],
'Thailand'=>['name' => 'Thailand', 'id'=>'217','localname'=>'ไทย','phonecode'=>'66','language'=>'th','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Bangkok','shortname'=>'THB','iso2'=>'TH','iso3'=>'THA','width'=>'13°45 N','length'=>'13°45 N'],
'Togo'=>['name' => 'Togo', 'id'=>'216','localname'=>'','phonecode'=>'228','language'=>'fr-TG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Lomé','shortname'=>'XOF','iso2'=>'TG','iso3'=>'TGO','width'=>'06°09 N','length'=>'06°09 N'],
'Tokelau'=>['name' => 'Tokelau', 'id'=>'219','localname'=>'','phonecode'=>'690','language'=>'tkl','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'0','shortname'=>'NZD','iso2'=>'TK','iso3'=>'TKL','width'=>'-','length'=>'-'],
'Tonga'=>['name' => 'Tonga', 'id'=>'223','localname'=>'','phonecode'=>'676','language'=>'to','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Nuku"alofa','shortname'=>'TOP','iso2'=>'TO','iso3'=>'TON','width'=>'21°10 S','length'=>'21°10 S'],
'Trinidad and Tobago'=>['name' => 'Trinidad and Tobago', 'id'=>'225','localname'=>'','phonecode'=>'1','language'=>'en-TT','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Port of Spain','shortname'=>'TTD','iso2'=>'TT','iso3'=>'TTO','width'=>'-','length'=>'-'],
'Tunisia'=>['name' => 'Tunisia', 'id'=>'222','localname'=>'‫تونس','phonecode'=>'216','language'=>'ar-TN','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Tunis','shortname'=>'TND','iso2'=>'TN','iso3'=>'TUN','width'=>'36°50 N','length'=>'36°50 N'],
'Turkey'=>['name' => 'Turkey', 'id'=>'224','localname'=>'Türkiye','phonecode'=>'90','language'=>'tr-TR','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Ankara','shortname'=>'TRY','iso2'=>'TR','iso3'=>'TUR','width'=>'39°57 N','length'=>'39°57 N'],
'Turkmenistan'=>['name' => 'Turkmenistan', 'id'=>'221','localname'=>'','phonecode'=>'993','language'=>'tk','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Ashgabat','shortname'=>'TMT','iso2'=>'TM','iso3'=>'TKM','width'=>'38°00 N','length'=>'38°00 N'],
'Turks and Caicos Islands'=>['name' => 'Turks and Caicos Islands', 'id'=>'213','localname'=>'','phonecode'=>'1','language'=>'en-TC','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Cockburn Town','shortname'=>'USD','iso2'=>'TC','iso3'=>'TCA','width'=>'-','length'=>'-'],
'Tuvalu'=>['name' => 'Tuvalu', 'id'=>'226','localname'=>'','phonecode'=>'688','language'=>'tvl','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Funafuti','shortname'=>'AUD','iso2'=>'TV','iso3'=>'TUV','width'=>'08°31 S','length'=>'08°31
 S'],
'U.S. Minor Outlying Islands'=>['name' => 'U.S. Minor Outlying Islands', 'id'=>'231','localname'=>'','phonecode'=>'0','language'=>'en-UM','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'0','shortname'=>'USD','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'U.S. Virgin Islands'=>['name' => 'U.S. Virgin Islands', 'id'=>'239','localname'=>'','phonecode'=>'1','language'=>'en-VI','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Charlotte Amalie','shortname'=>'USD','iso2'=>'VI','iso3'=>'VIR','width'=>'-','length'=>'-'],
'Uganda'=>['name' => 'Uganda', 'id'=>'230','localname'=>'','phonecode'=>'256','language'=>'en-UG','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Kampala','shortname'=>'UGX','iso2'=>'UG','iso3'=>'UGA','width'=>'00°20 N','length'=>'00°20 N'],
'Ukraine'=>['name' => 'Ukraine', 'id'=>'229','localname'=>'Україна','phonecode'=>'380','language'=>'uk','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Kiev','shortname'=>'UAH','iso2'=>'UA','iso3'=>'UKR','width'=>'50°30 N','length'=>'50°30 N'],
'United Arab Emirates'=>['name' => 'United Arab Emirates', 'id'=>'2','localname'=>'‫الإمارات العربية المتحدة','phonecode'=>'971','language'=>'ar-AE','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Abu Dhabi','shortname'=>'AED','iso2'=>'AE','iso3'=>'ARE','width'=>'24°28 N','length'=>'24°28 N'],
'United Kingdom'=>['name' => 'United Kingdom', 'id'=>'77','localname'=>'','phonecode'=>'44','language'=>'en-GB','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'London','shortname'=>'GBP','iso2'=>'GB','iso3'=>'GBR','width'=>'-','length'=>'-'],
'United States'=>['name' => 'United States', 'id'=>'232','localname'=>'','phonecode'=>'1','language'=>'en-US','containent'=>'North America','shortcontainent'=>'NA','capital'=>'Washington','shortname'=>'USD','iso2'=>'US','iso3'=>'USA','width'=>'-','length'=>'-'],
'Uruguay'=>['name' => 'Uruguay', 'id'=>'233','localname'=>'','phonecode'=>'598','language'=>'es-UY','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Montevideo','shortname'=>'UYU','iso2'=>'UY','iso3'=>'URY','width'=>'34°50 S','length'=>'34°50 S'],
'Uzbekistan'=>['name' => 'Uzbekistan', 'id'=>'234','localname'=>'Oʻzbekiston','phonecode'=>'998','language'=>'uz','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Tashkent','shortname'=>'UZS','iso2'=>'UZ','iso3'=>'UZB','width'=>'41°20 N','length'=>'41°20 N'],
'Vanuatu'=>['name' => 'Vanuatu', 'id'=>'241','localname'=>'','phonecode'=>'678','language'=>'bi','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Port Vila','shortname'=>'VUV','iso2'=>'VU','iso3'=>'VUT','width'=>'17°45 S','length'=>'17°45 S'],
'Vatican City'=>['name' => 'Vatican City', 'id'=>'235','localname'=>'Città del Vaticano','phonecode'=>'0','language'=>'la','containent'=>'Europe','shortcontainent'=>'EU','capital'=>'Vatican City','shortname'=>'EUR','iso2'=>'','iso3'=>'','width'=>'-','length'=>'-'],
'Venezuela'=>['name' => 'Venezuela', 'id'=>'237','localname'=>'','phonecode'=>'58','language'=>'es-VE','containent'=>'South America','shortcontainent'=>'SA','capital'=>'Caracas','shortname'=>'VEF','iso2'=>'VE','iso3'=>'VEN','width'=>'10°30 N','length'=>'10°30 N'],
'Vietnam'=>['name' => 'Vietnam', 'id'=>'240','localname'=>'Việt Nam','phonecode'=>'84','language'=>'vi','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Hanoi','shortname'=>'VND','iso2'=>'VN','iso3'=>'VNM','width'=>'-','length'=>'-'],
'Wallis and Futuna'=>['name' => 'Wallis and Futuna', 'id'=>'242','localname'=>'','phonecode'=>'681','language'=>'wls','containent'=>'Oceania','shortcontainent'=>'OC','capital'=>'Mata-Utu','shortname'=>'XPF','iso2'=>'WF','iso3'=>'WLF','width'=>'-','length'=>'-'],
'Western Sahara'=>['name' => 'Western Sahara', 'id'=>'66','localname'=>'‫الصحراء الغربية','phonecode'=>'212','language'=>'ar','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Laâyoune / El Aaiún','shortname'=>'MAD','iso2'=>'EH','iso3'=>'ESH','width'=>'-','length'=>'-'],
'Yemen'=>['name' => 'Yemen', 'id'=>'245','localname'=>'‫اليمن','phonecode'=>'967','language'=>'ar-YE','containent'=>'Asia','shortcontainent'=>'AS','capital'=>'Sanaa','shortname'=>'YER','iso2'=>'YE','iso3'=>'YEM','width'=>'-','length'=>'-'],
'Zambia'=>['name' => 'Zambia', 'id'=>'248','localname'=>'','phonecode'=>'260','language'=>'en-ZM','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Lusaka','shortname'=>'ZMW','iso2'=>'ZM','iso3'=>'ZMB','width'=>'15°28 S','length'=>'15°28 S'],
'Zimbabwe'=>['name' => 'Zimbabwe', 'id'=>'249','localname'=>'','phonecode'=>'263','language'=>'en-ZW','containent'=>'Africa','shortcontainent'=>'AF','capital'=>'Harare','shortname'=>'ZWL','iso2'=>'ZW','iso3'=>'ZWE','width'=>'17°43 S','length'=>'17°43 S' , "all" ],
];


	/**
	 * Gets the by name.
	 * get the name of country and return all data for this country
	 *
	 * @param      <type>  $name   The name of country
	 *
	 * @return     <type>  country details.
	 */
	public static function get_by_name($_name)
	{
		if(isset(self::$country[$_name]))
		{
			return self::$country[$_name];
		}
		else
		{
			return null;
		}
	}


	/**
	 * get the cost detail of country
	 *
	 * @example self::get('id', 107, 'name')
	 * @return string "Iran"
	 *
	 * @example self::get('name', 'Iran', 'id')
	 * @return string "107"
	 *
	 * @example self::get('name', 'Iran', ['id','language'])
	 * @return array ['id' => "107", 'language' => "fa-IR"]
	 *
	 * @param      string      		  $_type     The type
	 * @param      string		      $_cost     The cost
	 * @param      array|string       $_request  The request
	 *
	 * @return     array|string  ( description_of_the_return_value )
	 */
	public static function get($_type, $_cost, $_request = null)
	{

		foreach (self::$country as $key => $value)
		{
			if(isset(self::$country[$key][$_type]) && self::$country[$key][$_type] == $_cost)
			{
				if($_request && !is_array($_request))
				{
					if(isset(self::$country[$key][$_request]))
					{
						if($_request == "localname" && self::$country[$key][$_request] == '')
						{
							return self::$country[$key]['name'];
						}
						return self::$country[$key][$_request];
					}
					else
					{
						return null;
					}
				}

				if($_request && is_array($_request))
				{
					$result = [];
					foreach ($_request as $k => $v) {
						if(isset(self::$country[$key][$v]))
						{
							if($v == "localname" && self::$country[$key][$v] == '')
							{
								$result[$v] = self::$country[$key]['name'];
							}
							else
							{
								$result[$v] = self::$country[$key][$v];
							}
						}
						else
						{
							$result[$v] = null;
						}
					}
					return $result;
				}
				else
				{
					return self::$country[$key];
				}
			}
		}
	}


	/**
	 * get list of country
	 */
	public static function list($_field, $_field2 = null)
	{
		$result = [];

		foreach (self::$country as $key => $value)
		{
			if($_field2)
			{
				if($_field2 == "localname" && $value['localname'] == '')
				{
					$result[$value[$_field]] = $value['name'];
				}
				else
				{
					$result[$value[$_field]] = $value[$_field2];
				}
			}
			else
			{
				if($_field == "localname" && $value['localname'] == '')
				{
					$result[] = $value['name'];
				}
				else
				{
					$result[] = $value[$_field];
				}
			}
		}
		return $result;
	}

	/**
	 * check country name exist of no
	 *
	 * @param      <type>   $_name  The name
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public static function check($_name)
	{
		if(array_key_exists($_name, self::$country))
		{
			return true;
		}
		return false;
	}
}
?>