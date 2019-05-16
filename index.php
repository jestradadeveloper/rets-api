<?php
/**
 * Template Name: RETS Tests
 *
 * Full width page template.
 *
 * @package  realhomes
 * @subpackage modern
 */

/*

// set your timezone
	date_default_timezone_set('America/Mexico_City');

	// pull in the packages managed by Composer
	require("vendor/autoload.php");	
    $log = new \Monolog\Logger('PHRETS');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout', \Monolog\Logger::DEBUG));


	// setup your configuration
	$config = new \PHRETS\Configuration;
	$config->setLoginUrl('http://retsgw.flexmls.com:80/rets2_3/Login')
			->setUsername('pvr.rets.murray')
            ->setPassword('spear-gyny87')
            ->setRetsVersion('1.7.2');;

	// get a session ready using the configuration
	$rets = new \PHRETS\Session($config);
    $rets ->setLogger($log);
	// make the first request
   
        $connect = $rets->Login();
	
		#$queryCochranProperties = '(LIST_5=20101129163639581623000000)';
		#$queryArea= '(LIST_29=X4OPC8T7EUJ)';
		$allRecords='*';

getCochranListing($allRecords, 'retslist',30000,'allrecords');
function getCochranListing($query, $file, $limit, $type){
	$listingCustom = [];
	date_default_timezone_set('America/Mexico_City');

	// pull in the packages managed by Composer
	require("vendor/autoload.php");
    $log = new \Monolog\Logger('PHRETS');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout', \Monolog\Logger::DEBUG));


	// setup your configuration
	$config = new \PHRETS\Configuration;
	$config->setLoginUrl('http://retsgw.flexmls.com:80/rets2_3/Login')
			->setUsername('pvr.rets.murray')
            ->setPassword('spear-gyny87')
            ->setRetsVersion('1.7.2');;

	// get a session ready using the configuration
	$rets = new \PHRETS\Session($config);
    $rets ->setLogger($log);
	// make the first request
   
        $connect = $rets->Login();
			   //condos
				$resultsA = $rets->Search('Property', 'A', $query, ['Limit' => $limit, 'Count' => 1, 'Select' =>  'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_66,LIST_67,LIST_149,GF20110906150955980018000000,LIST_148,LIST_36,LIST_87']);
			
				//Houses	
				$resultsB = $rets->Search('Property', 'B', $query, ['Limit' => $limit, 'Count' => 1, 'Select' => 'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_66,LIST_67,LIST_149,GF20110906151054800976000000,LIST_36,LIST_87']);
				
				//land
				$resultsE = $rets->Search('Property', 'E', $query, ['Limit' => $limit, 'Count' => 1, 'Select' => 'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_57,GF20110906151235936884000000,LIST_87']);
				
				//Commercial
				$resultsF = $rets->Search('Property', 'F', $query, ['Limit' => $limit, 'Count' => 1, 'Select' =>  'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_69,LIST_57,GF20110906151348774098000000,LIST_36,LIST_87']);
				
				//Business
				$resultsG = $rets->Search('Property', 'G', $query, ['Limit' => $limit, 'Count' => 1, 'Select' =>  'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_57,LIST_69,GF20110906151708515998000000,LIST_36,LIST_87']);
				
				//Fractional
				$resultsH = $rets->Search('Property', 'H', $query, ['Limit' => $limit, 'Count' => 1, 'Select' => 'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_57,LIST_69,GF20101117190906920838000000,LIST_36,LIST_149,LIST_87']);
				
				//Multifamily
				$resultsI = $rets->Search('Property', 'I', $query, ['Limit' => $limit, 'Count' => 1, 'Select' => 'LIST_5,LIST_1,LIST_8,LIST_3,LIST_31,LIST_35,LIST_34,LIST_29,LIST_40,LIST_46,LIST_47,LIST_39,LIST_22,LIST_88,LIST_78,LIST_130,LIST_48,LIST_57,GF20110906152000926926000000,LIST_87']);
				
				$v = $resultsB->toArray();
				$v2 = $resultsA->toArray();
				$v3 = $resultsF->toArray();
				$v4 = $resultsG->toArray();
				$v5 = $resultsH->toArray();
				$v6 = $resultsI->toArray();
				$v7 = $resultsE->toArray();
	
				$resultado = array_merge($v, $v2);
				$resultado = array_merge($resultado, $v3);
				$resultado = array_merge($resultado, $v4);
				$resultado = array_merge($resultado, $v5);
				$resultado = array_merge($resultado, $v6);
				$resultado = array_merge($resultado, $v7);

		
	
			foreach ($resultado as $r) {
					if(isset($r['LIST_66'])){
						$bedrooms= $r['LIST_66'];
					}else if($r['LIST_8']=='E'){
						$bedrooms = "0";

					}else{
						$bedrooms = "1";

					}
					if($r['LIST_8']=='F' || $r['LIST_8']=='G' || $r['LIST_8']=='H'){
						$bathrooms = $r['LIST_69'];
					}else{
						$bathrooms = "0";
					}

					if($r['LIST_8']=='A'){
						$pet =$r['LIST_149'];
						$beachfront = $r['GF20110906150955980018000000'];
						$bathrooms= $r['LIST_66'];
						$precontruction=$r["LIST_148"];
						
						if(!empty($r['LIST_36'])){
							$unit_number= ''.$r['LIST_36'];
						}else{
							$unit_number= '';
						}
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='B'){
						$pet =$r['LIST_149'];
						$beachfront = $r['GF20110906151054800976000000'];
						$bathrooms= $r['LIST_66'];
						$precontruction="No";
						if(!empty($r['LIST_36'])){
							$unit_number= ''.$r['LIST_36'];
						}else{
							$unit_number= '';
						}
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='E'){
						$beachfront = $r['GF20110906151235936884000000'];
						$pet = "No";
						$precontruction="No";
						$unit_number= "";
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='F'){
		
						$beachfront = $r['GF20110906151348774098000000'];
						$pet = "No";
						$precontruction = "No";
						$unit_number= ''.$r['LIST_36'];
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='G'){
		
						$beachfront = $r['GF20110906151708515998000000'];
						$pet = "No";
						$precontruction = "No";
						if(!empty($r['LIST_36'])){
							$unit_number= ''.$r['LIST_36'];
						}else{
							$unit_number= '';
						}
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='H'){
						$pet =$r['LIST_149'];
						$beachfront = $r['GF20101117190906920838000000'];
						$precontruction = "No";
						if(!empty($r['LIST_36'])){
							$unit_number= ''.$r['LIST_36'];
						}else{
							$unit_number= '';
						}
						$street_number= ''.$r['LIST_31'];
						$street_name=$r['LIST_34'];
					}
					if($r['LIST_8']=='I'){
		
						$beachfront = $r['GF20110906152000926926000000'];
						$pet = "No";
						$precontruction = "No";
						if(!empty($r['LIST_36'])){
							$unit_number= ''.$r['LIST_36'];
						}else{
							$unit_number= '';
						}
						$street_number= ''.$r['LIST_31'];
						$street_name= $r['LIST_34'];
					}
					
					
					//$pet = isset($r['LIST_149']) ? $r['LIST_149'] : false;

					

					if($r['LIST_8']=='E'){
						$size=   $r['LIST_57'];
					}else{
						$size =   $r['LIST_48'];
					}
				
					$photos = $rets->GetObject("Property", "640x480",$r['LIST_3'], "*", 1); //especifica el tamaño de la foto a obtener
					#$url= $photos[1]->getLocation(); //obtiene la primera imagen de cada listado
					$thumbnail = $rets->GetObject("Property", "Thumbnail",$r['LIST_3'], "*", 1); //especifica el tamaño de la foto a obtener
					$url_thumbnail= $thumbnail[0]->getLocation(); 
					$fotoId= $photos[0]->getLocation();
					$porciones = explode("/", $fotoId);
					$url ='https://cdn.resize.sparkplatform.com/pvr/640x480/true/'.$porciones[4];
					$listingCustom[] = array(
						'id' => $r['LIST_3'],
						'type'=>$r['LIST_8'],
						'name' => $r['LIST_35'],
						'headline'=>$r['LIST_35'].' '.$unit_number,
						'subheadline'=>$street_number.' '.$street_name,
						'image'=> $url,
						'link'=> "http://casasandvillas.idxbroker.com/idx/details/listing/a650/".$r['LIST_3'],
						'preview'=> $r['LIST_78'],
						'size'=>	$size,
						'area'=>	$r['LIST_29'],
						'community'=> $r['LIST_130'],
						'bedrooms'=>   $bedrooms,
						'bathrooms'=> $bathrooms ,
						'address'=> $r['LIST_39'].', '.$r['LIST_40'],
						'price'=> $r['LIST_22'],
						'long'=>$r['LIST_46'],
						'lat'=>$r['LIST_47'],
						'beachfront'=> $beachfront,
						'petfriendly'=>$pet,
						'preconstruction'=>$precontruction,
						'thumbnail'=>$url_thumbnail,
						'agent'=>$r['LIST_5'],
						'timestamp'=>$r['LIST_87']
					

			
					);
				};
			$filename= 'data/'.$file.'.json';

			file_put_contents($filename,json_encode($listingCustom)) ;
			}
*/
			

			$data = file_get_contents ('./retslist.json');
			$json = json_decode($data, TRUE);
			print_r ($json);

