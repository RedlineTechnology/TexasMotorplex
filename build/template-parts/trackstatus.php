<?php

  // OpenWeather API call
  // https://openweathermap.org/current
  $weather_url = 'api.openweathermap.org/data/2.5/weather?id=4689311';
  $api_key = '9dd436309dde3dd450886a19791ed0d3';

  $api_url = $weather_url . '&APPID=' .  $api_key;

  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => $api_url,
      CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
      CURLOPT_USERAGENT => 'TexasMotorplex'
  ));
  $weather_json = json_decode( curl_exec($curl), true );
  curl_close($curl);

  $weather = $weather_json['weather'][0]['main'];
  $weather_desc = $weather_json['weather'][0]['description'];
  $weather_icon = 'fa-thunderstorm-sun';

  switch( $weather ) {
    case "Clear":
      $weather_icon = 'fa-sun';
      break;
    case "Clouds": {
      switch( $weather_desc ) {
        case "few clouds":
          $weather_icon = 'fa-sun-cloud';
          break;
        case "scattered clouds":
        case "broken clouds":
          $weather_icon = 'fa-clouds-sun';
          break;
        default:
          $weather_icon = 'fa-clouds';
        }
      }
      break;
    case "Rain":
      $weather_icon = 'fa-cloud-showers-heavy';
      break;
    case "Drizzle":
      $weather_icon = 'fa-cloud-showers';
      break;
    case "Thunderstorm":
      $weather_icon = 'fa-thunderstorm';
      break;
    case "Snow":
      $weather_icon = 'fa-cloud-snow';
      break;
    case "Haze":
      $weather_icon = 'fa-sun-haze';
      break;
    case "Mist":
    case "Fog":
      $weather_icon = 'fa-fog';
      break;
    case "Smoke":
      $weather_icon = 'fa-smoke';
      break;
    case "Dust":
      $weather_icon = 'fa-sun-dust';
      break;
    case "Tornado":
      $weather_icon = 'fa-tornado';
      break;
    default:
      $weather_icon = 'fa-thunderstorm-sun';
  }

  echo '<p class="weather">Current Weather: ' .
    '<span><i class="fas ' . $weather_icon . '"></i>' .
    ' ' . $weather_desc . '</span></p>';
  echo '<p class="status">Track Status: ' .
    '<span><i class="fas fa-check-circle"></i></span></p>';

 ?>
