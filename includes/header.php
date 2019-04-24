<!DOCTYPE html>

<!--main header for all pages-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">       
        <script type="text/javascript" src="js/googleMaps.js" defer></script><!--Google maps-->
        <script type="text/javascript" src="js/loginModal.js" defer></script><!--modal login form animation-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" defer></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh-2b6-TpKt1mD_gqt68TprUZK3sPmtpE&callback=initMap">
      </script>
        <!--echo calls the specified page title represented as an attribute-->
        <title><?php echo $title; ?></title>
    </head>
    <body>
