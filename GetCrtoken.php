<?php
require_once("/home/ritika/SPS/SPS_5.1.0.0/Trunk/SharedObjects/OutputAdapter/INAdapter/Lib/NuSOAP/nusoap.php");
$result=array();
$method="GETCRTOKEN";
$result="<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?><soapenv:Envelope xmlns:soapenv=\"http:\/\/schemas.xmlsoap.org\/soap\/envelope\/\"><soapenv:Body><ns:GetCreditTokensResponse xmlns:ns=\"http:\/\/webservice.CSI.omvia.convergys.com\"><ns:return xmlns:xsi=\"http:\/\/www.w3.org\/2001\/XMLSchema-instance\" xmlns:ax21=\"http:\/\/beans.webservice.CSI.omvia.convergys.com\/xsd\" xsi:type=\"ax21:GetCreditTokensResponse\"><ax21:responseBean xsi:type=\"ax21:GetCreditTokenResponseBean\"><ax21:allocationTime>2016-12-29T07:59:00.000+02:00<\/ax21:allocationTime><ax21:creditTokenName>Hyb-Data<\/ax21:creditTokenName><ax21:creditTokenType>V<\/ax21:creditTokenType><ax21:cumulativeFlag>true<\/ax21:cumulativeFlag><ax21:endTime>2069-12-31T00:00:00.000+02:00<\/ax21:endTime><ax21:originalValue>5242880.000000001<\/ax21:originalValue><ax21:promotionName>TestPromo<\/ax21:promotionName><ax21:recurCost>0.0<\/ax21:recurCost><ax21:recurDate xsi:nil=\"true\" \/><ax21:recurFlag>false<\/ax21:recurFlag><ax21:recurInterval>0   <\/ax21:recurInterval><ax21:recurValue>0.0<\/ax21:recurValue><ax21:startTime>2016-12-29T07:46:00.000+02:00<\/ax21:startTime><ax21:uniqueTokenID>954340912<\/ax21:uniqueTokenID><ax21:value>5242880.000000001<\/ax21:value><\/ax21:responseBean><ax21:responseBean xsi:type=\"ax21:GetCreditTokenResponseBean\"><ax21:allocationTime>2016-12-29T07:59:00.000+02:00<\/ax21:allocationTime><ax21:creditTokenName>Hyb-OffNet<\/ax21:creditTokenName><ax21:creditTokenType>T<\/ax21:creditTokenType><ax21:cumulativeFlag>true<\/ax21:cumulativeFlag><ax21:endTime>2069-12-31T00:00:00.000+02:00<\/ax21:endTime><ax21:originalValue>300.0<\/ax21:originalValue><ax21:promotionName>TestPromo<\/ax21:promotionName><ax21:recurCost>0.0<\/ax21:recurCost><ax21:recurDate xsi:nil=\"true\" \/><ax21:recurFlag>false<\/ax21:recurFlag><ax21:recurInterval>0   <\/ax21:recurInterval><ax21:recurValue>0.0<\/ax21:recurValue><ax21:startTime>2016-12-29T07:46:00.000+02:00<\/ax21:startTime><ax21:uniqueTokenID>954340980<\/ax21:uniqueTokenID><ax21:value>0.0<\/ax21:value><\/ax21:responseBean><ax21:responseBean xsi:type=\"ax21:GetCreditTokenResponseBean\"><ax21:allocationTime>2016-12-29T07:59:00.000+02:00<\/ax21:allocationTime><ax21:creditTokenName>Hyb-OnNet<\/ax21:creditTokenName><ax21:creditTokenType>T<\/ax21:creditTokenType><ax21:cumulativeFlag>true<\/ax21:cumulativeFlag><ax21:endTime>2069-12-31T00:00:00.000+02:00<\/ax21:endTime><ax21:originalValue>300.0<\/ax21:originalValue><ax21:promotionName>TestPromo<\/ax21:promotionName><ax21:recurCost>0.0<\/ax21:recurCost><ax21:recurDate xsi:nil=\"true\" \/><ax21:recurFlag>false<\/ax21:recurFlag><ax21:recurInterval>0   <\/ax21:recurInterval><ax21:recurValue>0.0<\/ax21:recurValue><ax21:startTime>2016-12-29T07:46:00.000+02:00<\/ax21:startTime><ax21:uniqueTokenID>954340981<\/ax21:uniqueTokenID><ax21:value>0.0<\/ax21:value><\/ax21:responseBean><ax21:resultCode>0<\/ax21:resultCode><ax21:resultText>Successful<\/ax21:resultText><\/ns:return><\/ns:GetCreditTokensResponse><\/soapenv:Body><\/soapenv:Envelope>";

if (($method) === "GETCRTOKEN")
                        {

                                echo("This is GETCRTOKEN Query API");

                                echo "count == ".count($result['return']['responseBean'])."\n";
                                $total_count= count($result['return']['responseBean']);
                                for ($i=0;$i<=$total_count-1;$i++)
                {
                                 $temp_response[$i]="\n"."CreditToken Name: ".$result['return']['responseBean'][$i]['creditTokenName']."\n "."Unique TokenID: ".$result['return']['responseBean'][$i]['uniqueTokenID'];

                                        $response= $response." ".$temp_response[$i];
					echo "\n".$response."\n";
                                        }
                        }
		else
		{
		echo "Error!!!!!!!";
		}



?>
