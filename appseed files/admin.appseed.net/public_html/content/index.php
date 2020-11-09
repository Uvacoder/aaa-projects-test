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
        <?php include '../includes/header.php';?>
            <div class="PostEditor">
                <div class="PostEditor-title">Content (concept)<a class="otl-btn" style="margin-left: 10px;" href="#">Delete Page</a><a class="btn-cta" style="margin-left: 10px;" href="#">Save</a></div>
                <div class="newPost">
  <input type="text" placeholder="Enter title here">
  <div class="toolbar">
    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
    <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
    <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
    <div class="customSelect">
      <select>
          <option disabled>Add Event</option>              
          <option>+posteditor</option>
                        <option>+page-wrapper</option>
                        <option>+header</option>
                        <option>+tree</option>
                        <option>+option</option>
                        <option>+otl-btn</option>
                        <option>+se-pre-con</option>
                        <option>+event-head</option>
                        <option>+font-awesome-func</option>
                        <option>+google-apis</option>
                    </select>
    </div>
      <div class="customSelect">
      <select data-func="fontname">
        <optgroup label="Serif Fonts">
          <option value="Bree Serif">Bree Serif</option>
          <option value="Georgia">Georgia</option>
           <option value="Palatino Linotype">Palatino Linotype</option>
          <option value="Times New Roman">Times New Roman</option>
        </optgroup>
        <optgroup label="Sans Serif Fonts">
          <option value="Arial">Arial</option>
          <option value="Arial Black">Arial Black</option>
          <option value="Asap" selected>Asap</option>
          <option value="Comic Sans MS">Comic Sans MS</option>
          <option value="Impact">Impact</option>
          <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
          <option value="Tahoma">Tahoma</option>
          <option value="Trebuchet MS">Trebuchet MS</option>
          <option value="Verdana">Verdana</option>
        </optgroup>
        <optgroup label="Monospace Fonts">
          <option value="Courier New">Courier New</option>
          <option value="Lucida Console">Lucida Console</option>
        </optgroup>
      </select>
    </div>
    <div class="customSelect">
      <select data-func="formatblock">
        <option value="h1">Heading 1</option>
        <option value="h2">Heading 2</option>
        <option value="h4">Subtitle</option>
        <option value="p" selected>Paragraph</option>
      </select>
    </div>
  </div>
  <div class="editor" contenteditable></div>
</div>
            </div>
    </div>
</body>