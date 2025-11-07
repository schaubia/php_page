<?php

$DATA_ROOT = "/exo-restart.com/exodyn2026/data/";

function random_id() {
    return substr(uniqid(mktime(),4),16);
}

date_default_timezone_set('Europe/Berlin');

class html
{
    function errors($errors) {
        print "<table align='center' class='error'><tr><td>";
        print "<center><b>Please correct the following errors:</b></center>";
        print "<ul><li>".implode('</li><li>',$errors)."</li></ul>";
        print "</td></tr></table><br>";
    }

    function header($title) {
        ?>

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

    <html>
        <head>
            <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
            <?php
            print "<link href='style.css' rel='stylesheet'>";
            print "<title>$title</title>";
            ?>
 
        </head>
        <body>
            <img id='title' src='hhsf16_title.png' name="Banner">    
        <?php
            include 'navigation.php';
            print "<div id='main'>";
    }

    function footer($date=true) { ?>
 
            </div>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37869673-2']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
 
        <div id='credit'> </div>
 
        </body>
    </html>

    <?php }

}

class form
{

    function valid_email_address($email) {
      // First, we check that there's one @ symbol, and that the lengths are right
      if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
     if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
      return false;
    }
  }
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

function start($name,$method,$options='') {
    if($options!='') {
        print "<form name=$name method=$method action='".$_SERVER['PHP_SELF']."?$options'>";
    } else {
        print "<form name=$name method=$method action='".$_SERVER['PHP_SELF']."'>";
    }
}

// Print a text box

function text($name, $value, $size, $disabled = false) {
    print "<input type='text' name='$name' value='$value' size='$size'";
    if ($disabled) {print " disabled='disabled'";}
    print ">\n";
}

function textarea($name, $value, $rows, $cols, $disabled = false) {
    print "<textarea name='$name' rows='$rows' cols='$cols'";
    if ($disabled) {print " disabled='disabled'";}
    print ">$value</textarea>\n";
}


// Print a hidden field

function hidden($name, $value) {
    print "<input type='hidden' name='$name' value='$value'>\n";
}

// Print a password box

function password($name, $value, $size, $disabled = false) {
    print "<input type='password' name='$name' value='$value' size='$size'";
    if ($disabled) {print " disabled='disabled'";}
    print ">\n";
}

// Print a checkbox

function checkbox($name, $element_value, $current_value, $refresh) {
    print '<input type="checkbox" name="'.$name.'" value="'.$element_value.'" ';
    if($refresh) print "onclick='javascript:document.data.submit();'";
    if ($element_value == $current_value) print ' checked="checked"';
    print '>';
}

// Print a submit button

function submit($name, $label) {
    print "<input type='submit' name='$name' value='$label'>\n";
}

// Print a <select> menu

function select($element_name, $selected, $options, $refresh, $disabled = false) {

    print "\n<select name='$element_name' ";
    if($refresh) print "onchange='javascript:document.data.submit();'";
   if($disabled) {print " disabled='disabled'"; }
    print " >\n";

    foreach ($options as $option=>$label) {
        print "\t<option value='$option'";
        if ($option==$selected) {print " selected='selected'";}
        print ">$label</option>\n";
    }

    print "</select>\n";

}

}
?>
