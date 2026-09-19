<!--
  Copyright 2023 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Locator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      gmpx-store-locator {
        width: 100%;
        height: 100%;

        /* These parameters customize the appearance of Locator Plus. See the documentation at
           https://github.com/googlemaps/extended-component-library/blob/main/src/store_locator/README.md
           for more information. */
        --gmpx-color-surface: #fff;
        --gmpx-color-on-surface: #212121;
        --gmpx-color-on-surface-variant: #757575;
        --gmpx-color-primary: #1967d2;
        --gmpx-color-outline: #e0e0e0;
        --gmpx-fixed-panel-width-row-layout: 28.5em;
        --gmpx-fixed-panel-height-column-layout: 65%;
        --gmpx-font-family-base: "Roboto", sans-serif;
        --gmpx-font-family-headings: "Roboto", sans-serif;
        --gmpx-font-size-base: 0.875rem;
        --gmpx-hours-color-open: #188038;
        --gmpx-hours-color-closed: #d50000;
        --gmpx-rating-color: #ffb300;
        --gmpx-rating-color-empty: #e0e0e0;
      }
    </style>
    <script>
      const CONFIGURATION = {
        "locations": [
          {"title":"Charbhuja nath","address1":"6MWM+263","address2":"Garhbor, Rajasthan, India","coords":{"lat":25.2450625,"lng":73.6830625},"placeId":"ChIJwX_qJDc7aDkRij1Eet74r28"},
          {"title":"Groot : Best Web Designing \u0026 Graphics Designing institute in jaipur","address1":"Plot no 26","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.8715563,"lng":75.7758478},"placeId":"ChIJMUpDWeG1bTkRvdaKZGF0Pvo"},
          {"title":"Groot Academy :- Web Designing \u0026 Web Development | ReactJS | NodeJS | JavaScript | Java | Adv. Java | Spring \u0026 Hibernate","address1":"100-102","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.7922014,"lng":75.8168402},"placeId":"ChIJ73CttWPJbTkRkJSg185Yewo"},
          {"title":"Full stack web development by Groot Academy","address1":"Plot no 26,","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.8715563,"lng":75.7758478},"placeId":"ChIJweWoWOS1bTkRy9v1NAGaswA"},
          {"title":"Groot Academy- Software \u0026 IT Training in Jaipur | Web Design \u0026 Development | C,C++,JAVA,PYTHON Programming Institute","address1":"7th floor, Mangalam Building,","address2":"JAIPUR, Rajasthan, India","coords":{"lat":26.8373391,"lng":75.8337873},"placeId":"ChIJ9fkoWi23bTkRrw9W1oGSWao"},
          {"title":"Groot Academy - Software \u0026 IT Training in Jaipur | Web Design \u0026 Development | C,C++,JAVA,PYTHON Programming Institute","address1":"122/66","address2":"Mansarovar, Rajasthan, India","coords":{"lat":26.8461665,"lng":75.7700218},"placeId":"ChIJv9YmUMS1bTkR8SkxarJcpUM"},
          {"title":"Groot Academy","address1":"100-102, Ram Nagar , Pratap Nagar","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.7922014,"lng":75.8168402},"placeId":"ChIJ8WXftauzbTkRxM2df1PLMeE"},
          {"title":"Groot software","address1":"2nd Floor, 100-102, Ram Nagar","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.792272,"lng":75.8141112},"placeId":"ChIJJ2UVaYHJbTkRQdaMHrviz4I"},
          {"title":"Forsk Coding School","address1":"Forsk Technologies, M13, Startup Oasis","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.7889019,"lng":75.8269549},"placeId":"ChIJi9XNyJ7JbTkRLpu8DlSPb2Q"},
          {"title":"Groot Software","address1":"122/67,  Madhyam Marg mansarovar","address2":"Jaipur, Rajasthan, India","coords":{"lat":26.8457881,"lng":75.7703164},"placeId":"ChIJTfkiENq1bTkRTVYixlX_ALA"},
          {"title":"Groot Academy","address1":"3rd Floor Ram Nagar 100-102 Pratap Nagar","address2":"JAIPUR, Rajasthan, India","coords":{"lat":26.7922687,"lng":75.8141137},"placeId":"ChIJz4bnaQDJbTkRhGnDYtiCONQ"}
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
        "mapsApiKey": "YOUR_API_KEY_HERE",
        "capabilities": {"input":true,"autocomplete":true,"directions":false,"distanceMatrix":true,"details":false,"actions":false}
      };

    </script>
    <script type="module">
      document.addEventListener('DOMContentLoaded', async () => {
        await customElements.whenDefined('gmpx-store-locator');
        const locator = document.querySelector('gmpx-store-locator');
        locator.configureFromQuickBuilder(CONFIGURATION);
      });
    </script>
  </head>
  <body>
    <!-- Please note unpkg.com is unaffiliated with Google Maps Platform. -->
    <script type="module" src="https://unpkg.com/@googlemaps/extended-component-library@0.6"></script>

    <!-- Uses components from the Extended Component Library; see
         https://github.com/googlemaps/extended-component-library for more information
         on these HTML tags and how to configure them. -->
    <gmpx-api-loader key="YOUR_API_KEY_HERE" solution-channel="GMP_QB_locatorplus_v10_cABD"></gmpx-api-loader>
    <gmpx-store-locator map-id="DEMO_MAP_ID"></gmpx-store-locator>
  </body>
</html>