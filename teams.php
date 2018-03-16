<?php
  include 'FootballData.php';
  date_default_timezone_set("Europe/London");

   
// Create instance of API class
$api = new FootballData();
// fetch and dump summary data for premier league' season 2015/16
$soccerseason = $api->getSoccerseasonById(445);
$selectedTeam = $_GET['team'];
    // do sql stuff here 
    if($_GET['team'] != NULL) {
	$searchQuery = $api->searchTeam(urlencode($_GET['team']));
	$response = $api->getTeamById($searchQuery->teams[0]->id);
	$fixtures = $response->getFixtures()->fixtures;
    header("Location: teams.html?team=".$selectedTeam);
} 
	else {
			echo "Please select a field"; 
           
	}

?>