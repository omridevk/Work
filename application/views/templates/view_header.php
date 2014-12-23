<!DOCTYPE html>
<html>
<head>
</head>
<body style ="background-color:#eee;">

<ul id="main-menu" class="sm sm-blue container">
  <li><a href="#">Home</a></li>
  <li><a href="#">Tests</a>
    <ul>
      <li><a href="/pages/flavorTest">Flavor Tester</a></li>
      <li><a href="/pages/jsonTest">JSON Tester</a></li>
    </ul>
  </li>
</ul>



<script>

$(function() {
  $('#main-menu').smartmenus();
});

</script>

