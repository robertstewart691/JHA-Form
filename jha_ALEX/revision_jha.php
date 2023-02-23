<?php
session_start();

include_once ("connectionfst.php");
include_once ("connectionJHA.php");


$dbHost     = "pw-sql-lab.mysql.database.azure.com";
$dbUsername = "pwadmin@pw-sql-lab";
$dbPassword = "h@rdhat-b0Rax-eas1ly-stony";
$dbName     = "fst_test_db";	
$port       = 3306;

//establish connection to sql database
$con=mysqli_init(); 

mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL); 

mysqli_real_connect($con, $dbHost, $dbUsername, $dbPassword, $dbName, $port);

//mysqli connection
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($query = ("SELECT count(quoteNumber) as num_rows FROM fst_grid WHERE quoteNumber IS NOT NULL")){
if ($query = ("SELECT MIN(quoteNumber) as min_value FROM fst_grid"));{ 
  $result =  mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $min_value = $row['min_value'];
    $min_value_array = str_split($min_value);
}
}else{
  
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JHA Revise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <div id="reload" onload=checkSession()></div>
  
    <div class="container-lg">
    <h2>Job Hazard Analysis (JHA) Form</h2>
    <br>
   
    <form name="form" action=""  method="post" id="form">
      <input for="project_name" class="form-control" name="project_name" type="text" placeholder="Project Name / Job Code: " id="project_name">

      <div class="input-group">
        <input type="text" placeholder="Quote Number: " name="quoteNumber" value=" <?php echo $min_value?>"  >
        <input for="title_revision" type="text" name="revision" aria-label="revision" class="form-control" placeholder="Revision:" id="revision">
        </div>
        
          <div class="container-lg" style="background-color: gainsboro;"><h3>Recommended Personal Protective Equipment (PPE)
            </h3><h4> Check all personal protective equipment required to safely perform the job or task</h4>
          </h3>
</div>
            <!-- group 1 -->
            <section id="topCheckBoxes">
          <div class="form-check-inline" style="margin-right: 3px;">
            <input class="form-check-input" name="head_pro" type="checkbox" value="1" aria-label="checkbox" id="head_pro">
            <label class="form-check-label" for="flexCheckDefault">
             Head Protection
            </label>
          </div>
          <div class="form-check-inline" style="margin-right: 1px;">
            <input class="form-check-input" name="foot_pro"  type="checkbox" value="1" aria-label="checkbox" id-="foot_pro">
            <label class="form-check-label" for="flexCheckChecked">
              Foot Protection
            </label>
          </div>
          <div class="form-check-inline"  style="margin-right: 1px;">
            <input class="form-check-input" name="eye_pro" type="checkbox" value="1" aria-label="checkbox" id="eye_pro">
            <label class="form-check-label" for="flexCheckDefault">
             Eye Protection
            </label>
          </div>
          <div class="form-check-inline"  style="margin-right: 1px;">
            <input class="form-check-input" name="hear_pro" type="checkbox" aria-label="checkbox" value="1" id="hearing_pro">
            <label class="form-check-label" for="flexCheckChecked">
              Hearing Protection
            </label>
          </div>
          
          <div class="form-check-inline" style="margin-right: 1px;">
            <input class="form-check-input" name="hand_pro" type="checkbox"  aria-label="checkbox" value="1" id="hand_pro">
            <label class="form-check-label" for="flexCheckDefault">
              Hand Protection
            </label>
          </div>
          <div class="form-check-inline" style="margin-right: 1px;">
            <input class="form-check-input" name="fall_pro" type="checkbox" aria-label="checkbox" value="1" id="fall_pro">
            <label class="form-check-label" for="flexCheckChecked">
              Fall Protection
            </label>
          </div>
          <div class="form-check-inline" style="margin-right: 1px;">
            <input class="form-check-input" name="resp_pro" type="checkbox" value="1" aria-label="checkbox" id="resp_pro">
            <label class="form-check-label" for="flexCheckDefault">
              Respiratory Protection
            </label>
          </div>
          <div class="form-check-inline" style="margin-right: 1px;">
            <input class="form-check-input" name="other" type="checkbox" value="1" aria-label="checkbox" id="other">
            <label class="form-check-label" for="flexCheckChecked">
              Other PPE
            </label>
          </div>
        </section>

<!-- Heading section below checkbox rows -->
        <section class="middle">
          <div class="container" style="background-color: gainsboro; padding: 5px;" ><h3>Hazard Identification - Check all that Apply</h3>
          </div>
           <div class="container">
  <div class="row">
    <div class="col" id="topIdCheck">
                        <input class="form-check-input" name="elevated_work" type="checkbox" value="1" id="elevated_work">
                        <label class="form-check-label" for="">Elevated Work</label>

                        <input class="form-check-input" name="electrical_lv" type="checkbox" id="electrical_lv" value="1">
                        <label class="form-check-label" for="">Electrical LV</label>

                        <input class="form-check-input" name="electrical_hv" type="checkbox" id="electrical_hv" value="1">
                        <label class="form-check-label" for="">Electrical HV</label>

                        <input class="form-check-input" name="slippery_surface" type="checkbox" id="slippery_surface" value="1">
                        <label class="form-check-label" for="">Slippery Surface</label>

                        <input class="form-check-input" name="rf_exposure" type="checkbox" id="rf_exposure" value="1">
                        <label class="form-check-label" for="">RF Exposure</label>

                        <input class="form-check-input" name="chemicals" type="checkbox" id="chemicals" value="1">
                        <label class="form-check-label" for="">Chemicals</label>

                        <input class="form-check-input" name="trip_hazards" type="checkbox" id="trip_hazards" value="1">
                        <label class="form-check-label" for="">Trip Hazards</label>

                        <input class="form-check-input" name="sharp_objects" type="checkbox" id="sharp_objects" value="1">
                        <label class="form-check-label" for="">Sharp Objects</label>

                        <input class="form-check-input" name="falling_objects" type="checkbox" id="falling_objects" value="1">
                        <label class="form-check-label" for="">Falling Objects</label>

                        <input class="form-check-input" name="fire_potential" type="checkbox" id="fire_potential" value="1">
                        <label class="form-check-label" for="">Fire Potential</label>
    </div>                     
</div>
</div>
<div class="container" id="topIdCheckTwo">
  <div class="row">
    <div class="col">
                        <input class="form-check-input" name="traffic" type="checkbox" id="traffic" value="1">
                        <label class="form-check-label" for="">Traffic</label>

                        <input class="form-check-input" name="power_tools" type="checkbox" id="power_tools" value="1">
                        <label class="form-check-label" for="">Power tools</label>

                        <input class="form-check-input" name="high_noise" type="checkbox" id="high_noise" value="1">
                        <label class="form-check-label" for="">High Noise</label>

                        <input class="form-check-input" name="moving_equipment" type="checkbox" id="moving_equipment" value="1">
                        <label class="form-check-label" for="">Moving Equipment</label>

                        <input class="form-check-input" name="poor_lighting" type="checkbox" id="poor_lighting" value="1">
                        <label class="form-check-label" for="">Poor Lighting</label>

                        <input class="form-check-input" name="cold_ice" type="checkbox" id="cold_ice" value="1">
                        <label class="form-check-label" for="">Cold/Ice</label>

                        <input class="form-check-input" name="lifting_hazard" type="checkbox" id="lifting_hazard" value="1">
                        <label class="form-check-label" for="">Lifting Hazard</label>

                        <input class="form-check-input" name="silica" type="checkbox" id="silica" value="1">
                        <label class="form-check-label" for="">Silica</label>

                        <input class="form-check-input" name="confined_space" type="checkbox" id="confined_space" value="1">
                        <label class="form-check-label" for="">Confined Space</label>

                        <input class="form-check-input" name="remote_area" type="checkbox" id="remote_area" value="1">
                        <label class="form-check-label" for="">Remote Area</label>

                        <input class="form-check-input" name="other2" type="checkbox" id="other2" value="1">
                        <label class="form-check-label" for="">Other</label>
</div>
</div>
</div>
</section>



<!-- //Section for middle part   Header -->
<section id="checkboxMiddle">
<table class="table table-bordered table-hover" style="border: 1px solid black;">
  <thead>
    <tr>
      <th scope="col"><h3>Basic Job Steps</h3></th>
      <th scope="col" id="middleHeading"><h3>Hazards Present</h3></th>
      <th scope="col" id="middleHeading"><h3>Correct and Safe Procedures</h3></th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <!-- First Section of table body -->
      <td scope="row">
        <label for="checkid" style="word-wrap:break-word; padding-top: 45px;">
          <input name="drive_parking" class="form-check-input" id="drive_parking" form-id="checkid" type="checkbox" value="1">Driving and Parking 
        </label>
      </td>
      <td scope="row">
<li style="padding-top: 15px">Vehicle accident resulting in personal injury</li>
<li>Criminal activity</li>
      </td>
      <td scope="row">
        <li>
          Wear seat/shoulder belt(s) at all times
        </li>
        <li>
          Follow safe driving rules/regulations
        </li>
        <li>
          Practice defensive driving
        </li>
        <li>
          Do not obstruct traffic and park only in legal spaces
        </li>
        <li>
          Do not consume alcoholic beverages or other intoxicants prior to or during work
        </li>
      </td>
    </tr>
    
    <!-- Second row of table body -->
    <tr>
    <td scope="row">
     </td>
    <td scope="row">
      <li style="padding-top: 20px">Criminal Activity</li>
    </td>
    <td scope="row">
      <li>
        Lock vehicle while unattended
      </li>
      <li>
        Do not leave tools or other valuables in plain sight inside vehicle
      </li>
      <li>
        Park in well lighted areas during night-time hours
      </li>
    </td>
  </tr>
  <div class="page-break"></div>

  <!-- //Third row -->
  <tr>
    <td scope="row">
     <label for="ladder" style="word-wrap:break-word; padding-top: 180px">
      <input name="ladder" class="form-check-input" id="ladder" type="checkbox" value="1">Use of Ladder 
      </label>
     </td>
     <td>
      <li style="padding-top: 180px">Falls and Cuts</li>
     </td>
     <td scope="row">
      <li>Set ladder on solid, level surfaces</li>
      <li>When reaching out, keep belt buckle between the side rails of the ladder</li>
      <li>Do not stand on the top two steps of any step ladder</li>
      <li>Never use a metal ladder near electrical conduits or power lines</li>
      <li>Never use a step ladder leaned up against the wall</li>
      <li>Extension ladders must extend at least three feet above a roof or landing</li>
      <li>Set ladders at a 75 degree angle from the ground or floor</li>
      <li>The horizontal distance from the wall to the foot of the ladder should never be more than 1/4 the ladder's length</li>
      <li>Never go up or down a ladder with tools in your hand</li>
      <li>If possible, raise tools with a bucket or rope</li>
      <li>Always face the ladder , grasp the side rails or rungs with both hands, and take one step at a time</li>
      <li>No more than one person should be on the ladder at a time</li>
      <li>Check ladder for obstructions, weak spots, or sharp edges</li>
      <li>If ladder is found to be unsafe, remove from service immediately</li>
     </td>
  </tr>
  
  <!-- forth row table body -->
  <tr>
  <td scope="row">
    <label for="checkid" style="word-wrap:break-word; padding-left: 15px">Material Handling,</label>
<label for="checkid" style="word-wrap:break-word; display: block">
<input name="material_handling" class="form-check-input" id="material_handling"  type="checkbox" value="1">Delivering,
</label>
<label for="checkid" style="word-wrap:break-word; padding-left: 15px">Lifting</label>
  </td>
  <td scope="row">
    <li style="padding-top: 10px">Hand, Back, and Foot Injuries</li>
    <li>Slips, Trips, and Falls</li>
  </td>
  <td scope="row">
    <li>Use proper lifting techniques to avoid injury</li>
    <li>Ask for assistance when moving or lifting heavy materials</li>
    <li>Use hydraulic lift, jack, or dollies whenever possible</li>
    <li>Watch for obstacles or slippery surfaces in walk way or paths</li>
  </td>
</tr>

  <!-- Fifth row -->
  <tr>
  <td scope="row">
    <label for="checkid" style="word-wrap:break-word; padding-left: 15px">Walk Testing,</label>
<label for="checkid" style="word-wrap:break-word; display: block">
<input name="walk_spotTest" class="form-check-input" id="walk_spotTest"  type="checkbox" value="1">Spot Testing,
</label>
<label for="checkid" style="word-wrap:break-word; padding-left: 15px">Site Walks</label>
  </td>
  <td scope="row">
    <li style="padding-top: 10px">Tripping Hazard</li>
    
  </td>
  <td scope="row">
    <li>Inspect immediate area to identify hazards</li>
    <li>Situational awareness</li>
    <li>Watch for obstacles or slippery surfaces in walk way or paths</li>
    <li>Do not enter restricted or hazardous areas</li>
  </td>
</tr>
<!-- Sixth Row -->

<div

<tr>
  <td scope="row">
    <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
<label for="checkid" style="word-wrap:break-word; display: block">
<input name="rooftop_work" class="form-check-input" id="rooftop_work" type="checkbox" value="1">Rooftop Work
</label>
<label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
  </td>
  <td scope="row">
    <li style="padding-top: 10px">Falls from Heights</li>
    <li>RF Exposure</li>
    <li>Exposure to weather elements</li>
    </td>
<td scope="row">
    <li>Any work 6'or more from an edge must fall protection such as guardrails, fall restraints, or a fall arrest system</li>
    <li>Situational awareness - Maintain 15' from rooftop edge</li>
    <li>Observe and follow NEPA signs, maintain 3' antenna distance (greater for high powered broadcast antennas)</li>
    <li>Consider weather conditions prior and during the job</li>
    <li>Wear RF exposure monitor</li>
  </td>
</tr>

</section>
<section>
<tr>
  <td scope="row">
    <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
    <label for="checkid" style="word-wrap:break-word; display: block; padding-top: 80px">
    <input name="hand_tools" class="form-check-input" id="hand_tools" type="checkbox" value="1">Use of Hand Tools 
  </label>
  <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
  </td>
  <td scope="row">
    <li style="padding-top: 10px; padding-top: 70px;">Cuts and scrapes</li>
    <li>Contact</li>
    <li>Ejection Hazards</li>
  </td>
  <td scope="row">
    <li>Wear Appropriate PPE (gloves, safety shoes, helmets, glasses/goggles, hearing protection, and face masks</li>
    <li>Inspect tools prior to use</li>
    <li>Never use worn, cracked, rusted, splintered, damaged, or broken hand tools. </li>
    <li>Carry sharp tools in a safe manner with the pointed side facing down in a tool belt / tool box </li>
    <li>Do not carry tools up and down a ladder by hand. Consider using a bucket or bag</li>
    <li>Never toss or throw tools to a coworker</li>
    <li>Maintain good housekeeping to prevent slips, trips, and falls while carrying tools</li>
    <li>Always put tools away when not in use.</li>
    <li>Do not leave tools in an elevated position (ladder or scaffolding) and creating risk of damage or injury</li>
    <li>Damaged/defective tools must be taken out of service immediately</li>
  </td>
</tr>
<tr>
  <td scope="row">
    <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
    <label for="checkid" style="word-wrap:break-word; display: block">
    <input name="portable_powertools" class="form-check-input" id="portable_powertools" type="checkbox" value="1">Use of Portable Power Tools</label>
  <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
  </td>
  <td scope="row">
    <li>Electric Shock</li>
    </td>
    <td scope="row">
      <li>Check all connections, cords, and switches</li>
      <li>Follow Manufacturer's instructions</li>
    </td>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Inhalation of:</li>
        <ol>Dust</ol>
        <ol>Particles</ol>
        <ol>Silica</ol>
      </td>
      <td scope="row">
        <li>Appropriate natural ventilation</li>
        <li>Disposable respirators (if necessary)</li>
        <li>Automatic vacuum machine</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Eye Injury</li>
        <ol>Projectiles</ol>
      </td>
      <td scope="row">
        <li>Safety glasses with side shield or other appropriate goggles</li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Foot Injury</li>
        <em><ol>Dropped objects on feet</ol></em>
      </td>
      <td scope="row">
        <li>Wear safety shoes </li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Hand Injury</li>
       <em><ol>Ingoing Nip Points</ol>
        <ol>Rotating Parts</ol>
        <ol>Flying Chips and Sparks</ol></em>
      </td>
      <td scope="row">
        <li>Machine guards</li>
        <li>Situational awareness</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Fire</li>
       <em><ol>Sparks</ol>
        </em>
      </td>
      <td scope="row">
        <li>Appropriate placing of fire extinguishers</li>
        <li>Remove all combustibles and fire hazards from area</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Noise</li>
       <em><ol>Tool Operation</ol>
        </em>
      </td>
      <td scope="row">
        <li>Wear proper hearing protection</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Overall injury</li>
      </td>
      <td scope="row">
        <li>Use tools only for how they are designed</li>
        <li>Keep tools clean and in proper working condition</li>
        <li>Discard broken or malfunctioning tools</li>
      </td>
    </tr>
    <tr>
      <td scope="row">
        <label for="checkid" style="word-wrap:break-word; padding-left: 15px; display: block;"></label>
        <input name="scaffolding" class="form-check-input" id="scaffolding" type="checkbox" value="1">Use of Scaffolding</label>
      <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
      </td>
      <td scope="row">
        <li>Falling Materials</li>
        <li>Falling of Personnel</li>
        <li>Collapse of Scaffolding</li>
        <li>Improper access and egress</li>
        </td>
        <td scope="row">
          <li>All scaffolding materials should be inspected and approved</li>
          <li>Inspection of all scaffolding structure should be carried out after each deconstruction by a qualified scaffolding inspector</li>
          <li>Obtain scaffold construction permit prior to starting work</li>
          <li>Ensure the area is barricaded to prevent any unauthorized personnel entry</li>
          <li>All scaffolding should be erected by qualified scaffolding inspectors</li>
          <li>Inspection of scaffolding shall be done by a qualified scaffolding inspector</li>
          <li>No one else is permitted to alter any scaffolding without the approval of a scaffolding inspector</li>
          <li>Scaffolding must be fitted with toe boards to prevent the fall of materials and tools</li>
          <li>All tools and materials shall be properly secured in the scaffolding platform</li>
          <li>All personnel entering into the scaffolding must be physically fit for the job and should not fear heights</li>
          <li>Personal must wear full safety harnesses while working at heights</li>
          <li>100% tie-off shall be maintained while working at heights</li>
          <li>Weekly inspections should be carried out</li>
    </td>
    </tr>
    <tr>
      <td scope="row">
        <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
        <label for="checkid" style="word-wrap:break-word; display: block">
        <input class="form-check-input" name="clean_area" id="clean_area" type="checkbox" value="1">Cleaning Work Area</label>
      <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
      </td>
      <td scope="row">
        <li>Cuts and Lacerations</li>
        </td>
        <td scope="row">
          <li>Wear PPE if sharp edges exposed</li>
          <li>Ensure correct handling to prevent injury</li>
    </td>
    </tr>
  
    <section class="thirdPage">
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Eye Damage</li>
        </td>
        <td scope="row">
          <li>Ensure correct use of PPE - Safety Glasses</li>
    </td>
    </tr>
    <tr>
      <td scope="row">
      </td>
      <td scope="row">
        <li>Manual handling injuries</li>
      </td>
      <td scope="row">
        <li>Ensure correct manual handling procedures are followed</li>
        <li>Use mechanical lifting device where practicable</li>
        <li>Share lifting loads</li>
      </td>
    </tr>
    <tr>
      <td scope="row">
        <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
        <label for="checkid" style="word-wrap:break-word; display: block">
        <input class="form-check-input" name="operate_platforms" id="operate_platforms" type="checkbox" value="1">Operating Elevated Work Platforms</label>
      <label for="checkid" style="word-wrap:break-word; padding-left: 15px"></label>
      <li>Aerial Lifts</li>
      <li>Scissor Lifts</li>
      </td>
      <td scope="row">
        <li>Unsafe Operation</li>
        </td>
        <td scope="row">
          <li>Operators must be trained and competent in operating of equipment</li>
          <li>Operator must be familiar with the Manufacture's Operator Manual</li>
          <li>Conduct pre-shift inspection of equipment by trained operator</li>
    </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Struck by Falling Objects</li>
      </td>
      <td scope="row">
        <li>Barricade work area and place warning signs in visible area's</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Crushing</li>
      </td>
      <td scope="row">
        <li>Clear All personnel from the area before raising, lowering, or slewing the platform.</li>
        <li>Ensure ample clearance above the platform to cater for any unexpected amplified upward platform movement.</li>
        <li>Keep body parts away from moving parts of lift.</li>
      </td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Tipping and Rolling Over</li>
      </td>
      <td scope="row">
        <li>Inspect the entire work area and all ground conditions where the machine will travel during operation.</li>
        <li>Ensure load on platform is secure and evenly distributed.</li>
        <li>Do not exceed maximum capacity stated by Manufacturer.</li>
        <li>Drive only on ground capable of supporting its weight.</li>
        <li>Be aware of pot holes, floor hole covers, and/or soft spots.</li>
        <li>Do not perform work that will subject the boom to a side force 
          (i.e pushing/pulling on fixed structure when working from platform.</li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Falls</li>
      </td>
      <td scope="row">
        <li>Remain within the confines of the lift platform when operating.</li>
        <li>Ensure sufficient clearance between the platform and overhead obstructions.</li>
        <li>Never use ladders or boxes to extend reach.</li>
        <li>Never stand on handrails to extend reach.</li>
        <li>Attach personal fall arrest harness with lanyard to the designated anchor point (Fall prevention training required).</li>
        <li>Never enter or exit the platform when it is elevated.</li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Driving into coworkers and/or bystanders</li>
      </td>
      <td scope="row">
        <li>Ensure all safety devices such as audible and visual alarms are functioning correctly.</li>
        <li>Clearly define work area.</li>
        <li>Keep all personnel clear of equipment</li>
        <li>Avoid congested work areas</li>
        <li>Two (2) certified operators must be present at all times during lift operations; lift operator and spotter.</li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Electrocution</li>
      </td>
      <td scope="row">
        <li>Maintain mandatory minimum clearance's from overhead power lines.</li>
        <li>Barricade work areas</li>
        <li>Insulate power lines</li>
        <li>"Look up and Live" (before and during operation). </li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Electric Shock</li>
      </td>
      <td scope="row">
        <li>Inspect all power and extension cords</li>
        <li>Ensure cords are protected from falling objects, pinch points, or pedestrians or other traffic</li>
        <li>Do not pull cord around sharp edges or corners</li>
        <li>Where equipped, plug extension cords into plugs located at the base of the machine, allowing for tools to be powered
          from the power outlet on the platform</li>
        <li>Do not overload electrical circuit </li>
        <li>Use GFCI protection</li>
      </td>
    </tr>

    <tr>
      <td scope="row"></td>
      <td scope="row">
        <li>Slips</li>
        <li>Trips</li>
        <li>Falls</li>
      </td>
      <td scope="row">
        <li>Ensure floor of platform is kept clean, intact, and in good working condition</li>
        <li>Avoid oil, grease, and mud on boots of platform</li>
        <li>Minimize how many tools on the platform</li>
        <li>Always maintain a good foot and hand hold when entering or exiting the platform</li>
      </td>
      
    </tr>
    </tbody>
<table>
  <tbody>
    <div class="d-flex flex-nowrap ">
        <div class="col-4 mb-3 form-floating mt-3 ml-auto gx-1 d-flex flex-column" id="topDivs1">
            <textarea class="form-control flex-grow-1 overflow-hidden" id="note_content" name="note_content1"></textarea>
            <label for="note_content" class="form-label">Add Additional Steps </label>
            </div>
            <div class="col-4 mb-3 form-floating mt-3 ml-auto gx-1 d-flex flex-column auto" id="topDivs2">
                <textarea class="form-control flex-grow-1 overflow-hidden" id="note_content2" name="note_content2"></textarea>
                <label for="note_content2" class="form-label">Add Additional Steps As Needed</textArea></label>
                </div>
                <div class="col-4 mb-3 form-floating mt-3 ml-auto gx-1 d-flex flex-column auto" id="topDivs3">
                    <textarea class="form-control flex-column-reverse flex-grow-1 overflow-hidden" id="note_content3" name="note_content3"></textarea>
                    <label for="note_content3" class="form-label form-floating">Add Additional Steps As Needed</label>
                    </div>
                    </div>
  </tbody>
</table> 


<button id="submit" name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
<button onclick="loadFunction()" class="btn btn-outline mb-3">Log In</button>
<button onclick="reloadPage()" class="btn btn-outline mb-3">Reload Page</button>
<br>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
<?php
foreach($_POST as $key=>$value){
if(isset($key))
$$key=strip_tags($value);

}
@$query = ("INSERT INTO fst_jha_form(note_content1,note_content2,note_content3,head_pro, foot_pro, eye_pro,hear_pro,hand_pro,fall_pro, resp_pro, other, elevated_work, electrical_hv,electrical_lv, slippery_surface, rf_exposure,
chemicals,trip_hazards,sharp_objects,falling_objects,fire_potential, traffic,power_tools,high_noise,moving_equipment,poor_lighting,cold_ice,lifting_hazard,silica,confined_space,
remote_area,other2,drive_parking,ladder,material_handling,walk_spotTest,rooftop_work,hand_tools, scaffolding,clean_area, operate_platforms,project_name,
quoteNumber,revise_id,jha_record)
VALUES ('$note_content1','$note_content1','$note_content1', '$head_pro','$foot_pro','$eye_pro','$hear_pro','$hand_pro','$fall_pro','$resp_pro','$other','$elevated_work','$electrical_hv','$electrical_lv','$slippery_surface',
'$rf_exposure','$chemicals','$trip_hazards','$sharp_objects','$falling_objects','$fire_potential','$traffic','$power_tools','$high_noise','$moving_equipment',
'$poor_lighting','$cold_ice','$lifting_hazard','$silica','$confined_space','$remote_area','$other2','$drive_parking', '$ladder','$material_handling', '$walk_spotTest', '$rooftop_work',
'$hand_tools','$scaffolding','$clean_area','$operate_platforms','$project_name', '$quoteNumber','$revise_id','$jha_record')");

$executeQ = mysqli_query($con, $query);




?>