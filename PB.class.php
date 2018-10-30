<?php
/**
 *
 * Classe para obter dados do rank do PointBlank <pb.ongame.net>
 * e recursos avançados. Requer PHP 5 ou superior.
 *
 * @author     SkelletonX <guilhermetheilacker@gmail.com>
 * @version    1.0 $ 2018-10-21 01:09:51 $
 */
 class PB
 {	
 
	public static function Clan_Info_Wrapper_Master($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[2]/a'); 
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
						
					    echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_TopRank($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[3]/span');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_EXP($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[3]/span');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Membros($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[4]/span');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Ultima_atividade_em($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[5]/span');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Criado_em($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[6]/span');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Nivel_Clan_Atual($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[7]/div[1]/div[1]/div[1]/div[2]');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Nivel_Clan_Proximo($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[7]/div[1]/div[1]/div[2]/div[1]');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}
	public static function Clan_Info_Wrapper_Exp_Porcentagem($IdClan, $Clan){
		$PBNameClan = "https://pb.ongame.net/ranking/clan/". $IdClan ."/". $Clan ."/?ref=ranking-season";
		libxml_use_internal_errors(true);
		$dom = new DOMDocument();
		$dom->loadHTMLFile($PBNameClan);
		$xpath = new DomXPath($dom);
		$elements = $xpath->query('//*[@id="clan_info_wrapper"]/div[1]/div/div/div[2]/div/div[7]/div[1]/div[2]/div[1]');
			libxml_use_internal_errors(true);
			if (!is_null($elements)) {
				foreach($elements as $element){
					$nodes = $element->childNodes;
					foreach ($nodes as $node) {
					  echo $node->nodeValue. "\n";
					}
				}
			}
	}	
 }
	
?>
