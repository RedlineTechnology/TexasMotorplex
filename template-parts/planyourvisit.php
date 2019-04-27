<?php
  load_accordion_tabs();
?>

<nav class="accordion-tabs">
  <ul class="accordion-tab-headings">
    <li><a href="#section-1"><span>Directions</span></a></li>
    <li><a href="#section-2"><span>Grounds Map</span></a></li>
    <li><a href="#section-3"><span>Gate Policies</span></a></li>
    <li><a href="#section-4"><span>Hotels</span></a></li>
  </ul>

  <div class="accordion-tab-content">
    <section id="section-1" class="directions row">
      <div class="col-6">
        <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Texas%20Motorplex&key=<?php echo get_theme_mod('google_maps_api') ?>&zoom=11" allowfullscreen></iframe>
      </div>
      <div class="col-6">
        <h6>Addresses</h6>
        <p>7500 US Highway 287, Ennis, TX. 75119<br>
          7500 W Ennis Ave, Ennis, TX. 75119</p>
        <h6>GPS Coordinates</h6>
        <p>Lat: 32.329144, Lon: -96.716788</p>

        <h6>Interstate-35 to Ennis from Dallas</h6>
        <p>Exit #403, which will be Hwy 287, there is a green highway sign that says Texas Motorplex next exit<br>
          Take the service road past the Ford dealership and over the bridge<br>
          Take the next right, which is marked Hwy 287 South – Corsicana<br>
          We are on 287 South approximately 10 miles from Interstate-35</p>

        <h6>Interstate-35 to Ennis from Waco</h6>
        <p>Exit #403, Hwy 287 South toward Corsicana<br>
          We are on 287 South approximately 10 miles from Interstate-35</p>

        <h6>Interstate-45 to Ennis from Dallas</h6>
        <p>Exit #251B, which will say Hwy 34, Kaufman/Italy Exit<br>
          Turn right at the stop sign – go straight through downtown Ennis<br>
          We are 6 miles past Ennis on Hwy 287</p>

        <h6>Interstate-45 to Ennis from Houston</h6>
        <p>Exit #247, which is the Hwy 287 bypass, there is a green highway sign that says ‘Texas Motorplex next exit’<br>
          Follow this road all the way around Ennis, it will bring you right to us.</p>

        <h6>From DFW Airport</h6>
        <p>Exit DFW Airport through the South Toll Booths<br>
          Take the 360 South exit to the right<br>
          360 south (Arlington) 22 mi to Hwy 287<br>
          Turn Left on Hwy 287<br>
          Continue on Hwy 287 for 28 Miles</p>

        <h6>From Interstate-30</h6>
        <p>Take interstate to either Interstate-35E (South) or Interstate-45 (South) and follow the above directions</p>

        <h6>From Interstate-20 or 635 Mesquite and Garland</h6>
        <p>Take interstate to either Interstate-35E (South) or Interstate-45 (South) and follow the above directions</p>
      </div>
    </section>

    <section id="section-2" class="groundsmap row">
      <embed class="embedmap" src="https://drive.google.com/viewerng/
viewer?embedded=true&url=https://texasmotorplex.com/wp-content/uploads/2015/11/2016-AAA-Fall-Nationals-Map.pdf" width="100%" height="400px">
    </section>

    <section id="section-3" class="gatepolicies row">
      <h6>Approved Carry-in Items </h6>
      <p>Fans may enter Texas Motorplex with the following items:</p>
      <ul>
        <li>Binoculars, scanners, headsets, personal cameras and seat cushions are allowed.</li>
        <li>Seat cushion bags with compartments may be inspected on an individual basis.</li>
        <li>Strollers will be permitted into the Pit Areas, Food Court and the Manufacturer Midway, but will not be allowed into the grandstand seating areas. Texas Motorplex will not assume any responsibility for strollers left unattended.</li>
        <li>Flags are acceptable, provided they are not attached to poles and they do not obstruct other fans’ viewing of racing activities. No flag poles of any type will be allowed. Small nationality flags attached to a pencil sized diameter wooden stick will be allowed.</li>
        <li>All bags, purses, backpacks and items brought through the Main Spectator gate will be subject to inspection.</li>
      </ul>
      <h6>PROHIBITED ITEMS</h6>
      <p>The following items may not enter the admission gates:</p>
      <ul>
        <li>Firearms, weapons of any kind, fireworks, and items restricted by Local, State or Federal laws.</li>
        <li>Any outside food, drink or alcohol will not be allowed in the facility</li>
        <li>Coolers, thermoses, freezer/ice packets and cups of any size.</li>
        <li>Umbrellas, wagons, inline skates, skateboards, bicycles, scooters (motorized and/or manual), etc</li>
        <li>Glass, aluminum and metal containers.</li>
        <li>Pets (excluding properly identified ADA escorts).</li>
      </ul>
      <p>None of the above restricted items may be left in or around the gate area. Please return items to your vehicle. Any items left at the gates will be discarded. Texas Motorplex reserves the right to refuse entry of any item deemed inappropriate.</p>
    </section>

    <section id="section-4" class="hotels row">
      <?php
        $page = get_posts(
          array(
            'name'      => 'hotels',
            'post_type' => 'page'
          )
        );
        if ( $page )
        { echo $page[0]->post_content; }
      ?>
    </section>
  </div>
</nav>
