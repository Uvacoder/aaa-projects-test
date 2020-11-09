<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Planner Dashboard</title>
    
    
    <link rel="stylesheet" href="/assets/css/reset.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>

        <link rel="stylesheet" href="/assets/css/style.css">

    
    
    
  </head>

  <body>

    
<div class="dashboard">
  <div class="dashboard-sidebar">
    <div class="dashboard-sidebar__brand"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_logo.svg"/></div>
    <div class="dashboard-nav">
      <ul>
        <li class="dashboard-nav__item"><a href="home"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_home.svg"/>Home</a></li>
        <li class="dashboard-nav__item dashboard-nav__item--selected"><a href="my_trip"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_my_trip.svg"/>My Trip</a></li>
        <li class="dashboard-nav__item"><a href="discover_places"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_discover_places.svg"/>Discover Places</a></li>
        <li class="dashboard-nav__item"><a href="notifications"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_notifications.svg"/>Notifications</a></li>
        <li class="dashboard-nav__item"><a href="settings"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_settings.svg"/>Settings</a></li>
      </ul>
    </div>
  </div>
  <div class="dashboard-content">
    <div class="dashboard-header">
      <div class="dashboard-header__search">
        <input type="search" placeholder="Search..."/>
      </div>
      <div class="dashboard-header__new"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_new_plan.svg"/></div>
    </div>
    <div data-panel-id="home" class="dashboard-content__panel">
      <p>Home</p>
    </div>
    <div data-panel-id="my_trip" class="dashboard-content__panel dashboard-content__panel--active">
      <div class="dashboard-list">
        <div data-item-id="kulon_progo" class="dashboard-list__item">
          <h2>Team holiday Trip to The Jewel of Java, Kulon Progo</h2>
          <span>15 May - 23 May 2016</span>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='0'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='1'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='2'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='3'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='4'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='5'/></div>
        </div>
        <div data-item-id="bromo" class="dashboard-list__item dashboard-list__item--active">
          <h2>Investors Meetup - Bromo</h2>
          <span>15 May - 23 May 2016</span>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='0'/></div>
          <div class="dashboard-list__avatar"><img src="http://placehold.it/31/95BFBF/FFF" data-avatar-id='1'/></div>
        </div>
      </div>
    </div>
    <div data-panel-id="discover_places" class="dashboard-content__panel">
      <p>Discover Places</p>
    </div>
    <div data-panel-id="notifications" class="dashboard-content__panel">
      <p>Notifications</p>
    </div>
    <div data-panel-id="settings" class="dashboard-content__panel">
      <p>Settings</p>
    </div>
  </div>
  <div class="dashboard-preview">
    <div data-panel-id="kulon_progo" class="dashboard-preview__panel">
      <div class="dashboard-preview__header">
        <h2>Kulon Progo</h2>
        <h3>34<span>C</span>
        </h3>
      </div>
      <div class="dashboard-preview__content">
        <section>
          <h2>My Tasks</h2>
          <label>
            <input type="checkbox"/><span>Book tickets</span>
          </label>
          <label>
            <input type="checkbox"/><span>Get passports ready</span>
          </label>
          <label>
            <input type="checkbox"/><span>Book hotel rooms</span>
          </label>
        </section>
        <section>
          <h2>Discussion <span>(22 unread)</span></h2>
        </section>
        <section>
          <h2>Progress <span>(Day 8 of 10)</span></h2>
          <div class="progress-bar">
            <div style="width: 35%" class="progress-bar__bar"></div>
            <div style="left: 35%" class="progress-bar__badge">35%</div>
          </div>
        </section>
      </div>
    </div>
    <div data-panel-id="bromo" class="dashboard-preview__panel dashboard-preview__panel--active">
      <div class="dashboard-preview__header">
        <h2>Bromo</h2>
        <h3>21<span>C</span>
        </h3>
      </div>
      <div class="dashboard-preview__content">
        <section>
          <h2>My Tasks</h2>
          <label>
            <input type="checkbox"/><span>Prepare the Sound Recorder</span>
          </label>
          <label>
            <input type="checkbox"/><span>Book a resturant</span>
          </label>
          <label>
            <input type="checkbox"/><span>Book 24 hotel rooms</span>
          </label>
        </section>
        <section>
          <h2>Discussion <span>(85 unread)</span></h2>
        </section>
        <section>
          <h2>Progress <span>(Day 4 of 10)</span></h2>
          <div class="progress-bar">
            <div style="width: 13%" class="progress-bar__bar"></div>
            <div style="left: 13%" class="progress-bar__badge">13%</div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
