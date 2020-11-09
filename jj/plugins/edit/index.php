<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>AppSeed</title>
    <link rel="stylesheet" href="/assets/css/default.css" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <script src="//use.fontawesome.com/a1527a703d.js"></script>
</head>
<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>

<body>
    <div class="se-pre-con"></div>
    <div class="page-wrapper">
        <?php include '../../includes/header.php';?>
            <div class="PostEditor">
                <div class="PostEditor-title">Edit Plugin Code<a class="btn-cta" style="margin-left: 10px;" href="#">Save</a></div>
                
                    <div class="file_tree">
  <input type="checkbox" id="f_myfilms">
  <label for="f_myfilms">My Films</label>
  <div class="dir_wrapper">
    <input type="checkbox" id="f_wehave">
    <label for="f_wehave">We Have</label>
    <div class="dir_wrapper">
      <input type="checkbox" id="f_togo">
      <label for="f_togo">To Go</label>
      <div class="dir_wrapper">
        <input type="radio" name="hosted_files" id="f_deeper_js" value="Deeper.js">
        <label for="f_deeper_js">Deeper.js</label>
        <input type="radio" name="hosted_files" id="f_fileception_js" value="Fileception.js">
        <label for="f_fileception_js">Fileception.js</label>
      </div>
    </div>
  </div>
  
  <input type="checkbox" id="f_justafolder">
  <label for="f_justafolder">Just a folder</label>
  <div class="dir_wrapper">
    <input type="radio" name="hosted_files" id="f_withafile_js" value="with_a_file.js">
    <label for="f_withafile_js">with_a_file.js</label>
  </div>
  
  <input type="radio" name="hosted_files" id="f_main_js" value="main.js" checked>
  <label for="f_main_js">main.js</label>
  <input type="radio" name="hosted_files" id="f_globals_js" value="globals.js">
  <label for="f_globals_js">globals.js</label>
  <input type="radio" name="hosted_files" id="f_filler_js" value="filler.js">
  <label for="f_filler_js">filler.js</label>
  <input type="radio" name="hosted_files" id="f_horror_vacui_js" value="horror_vacui.js">
  <label for="f_horror_vacui_js">horror_vacui.js</label>
</div>
                 <div class="window-content">
    <ol class="code" contenteditable="true">
      <li class="line comment">/**</li>
      <li class="line comment">&nbsp;* A simple code editor window in pure CSS!</li>
      <li class="line comment">&nbsp;* You're free to use it in your own projects.</li>
      <li class="line comment">&nbsp;*/</li>
      <li class="line"></li>
      <li class="line">let ajax = new XMLHttpRequest();</li>
      <li class="line"></li>
      <li class="line">ajax.onreadystatechange = () => {</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;if (ajax.readyState === 4 ) {</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ajax.status === 200) {</li>
      <li class="line comment">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Request succeded</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;} else if (ajax.status === 400) {</li>
      <li class="line comment">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// An error occured</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;} else {</li>
      <li class="line comment">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Unknown status</li>
      <li class="line">&nbsp;&nbsp;&nbsp;&nbsp;}</li>
      <li class="line">}</li>
      <li class="line"></li>
      <li class="line">ajax.open("GET", "data.json", true);</li>
      <li class="line">ajax.send();</li>
      <li class="line"></li>
      <li class="line"></li>
    </ol>
  </div>
</div>
                </div>
            </div>
</body>