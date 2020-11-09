<script>
$(function() {
  $('.sidebar-a a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});</script>        
<aside class="sidebar">
            <div class="sidebar-container">
                <div class="Logo">
                    <center><a href="/"><img src="/assets/img/appseed.png"></a></center>
                </div>
                <center><div class="search title">
            <span class="ion-ios-search"></span>

            <input placeholder="Search" name="search">
                    </div></center>
                <nav class="sidebar-nav">
                    <ul class="sidebar-list">
                        <li class="sidebar-item">General
                            <ul class="sidebar-dropdown">
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/"><i class="fa ion-ios-home-outline"></i>Dashboard</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/reports"><i class="fa ion-ios-pie-outline"></i>Reports</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/events"><i class="fa ion-ios-bolt-outline"></i>Events</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item">Design
                            <ul class="sidebar-dropdown">
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/themes"><i class="fa ion-ios-eye-outline"></i>Manage Themes</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/content"><i class="fa ion-ios-book-outline"></i>Content</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/themes/edit"><i class="fa ion-ios-glasses-outline"></i>Edit Code</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> Plugins
                            <ul class="sidebar-dropdown">
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/plugins"><i class="fa ion-ios-toggle-outline"></i>Manage Plugins</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/plugins/edit"><i class="fa ion-ios-glasses-outline"></i>Edit Code</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> Settings
                            <ul class="sidebar-dropdown">
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/settings"><i class="fa ion-ios-toggle-outline"></i>General</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/settings/backups"><i class="fa ion-ios-recording-outline"></i>Backups</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/settings/team"><i class="fa ion-ios-people-outline"></i>Team</a></li>
                                <li class="sidebar-dropdown-li"> <a class="sidebar-a" href="/settings/advanced"><i class="fa ion-ios-flask-outline"></i>Advanced</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>