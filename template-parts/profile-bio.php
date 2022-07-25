<?php 
  /**
   * Template Name: profile-bio template part
   * 
   * @package Portfolio1
   * 
   */
?>

        <div class="card-row">
          <div class="card">
            <img src="<?php the_field('profile_bio_technology'); ?>" alt="Technology" style="width:100%">
            <div class="card-text">
              <h2>Technology Focused</h2>
              <p>Daniel is a full-time WordPress Developer based in Sacramento, CA.. His entire career has been focused on technology including: Printed circuit board designer for Hughes Electronic Devices (HEDCO), Mechanical Designer for Grass Valley Group (GVG), Computer Configuration Manager for Objective Systems Integrators (OSI), A+ certified Computer Technician and Network Systems Analyst for Nevada County.</p>
            </div>
          </div>
          <div class="card">
            <img src="<?php the_field('profile_bio_languages'); ?>" alt="Coding Languages" style="width:100%">
            <div class="card-text">
              <h2>Programming Languages / Tools</h2>
              <p>Daniel works with the following Languages:</p>
              <p>HTML 5, CSS 3, PHP 8, SASS 1.49</p>
              <p>and uses the following Tools:</p>
              <p>VS Code 1.69, Git 2.35, Local 6.4.1, WordPress 6.0</p>
            </div>
          </div>
          <div class="card">
            <img src="<?php the_field('profile_bio_pastimes'); ?>" alt="Pastimes" style="width:100%">
            <div class="card-text">
              <h2>Daniel’s Favorite Pastimes</h2>
              <p>His favorite pastimes are usually science or technology oriented. Everything from Star-gazing, building and repairing computers, building robots, Geocaching, digital photography, video games or visiting Science / Technology museums. He also enjoys exercising such as cycling, hiking or working out at the gym. And even then he enjoys listening to Technology Podcasts.</p>
             
            </div>
          </div>
       </div>
