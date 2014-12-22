<!DOCTYPE html>
<html>
<head>
</head>
<body style ="background-color:#eee;">

<ul id="main-menu" class="sm sm-blue container">
  <li><a href="#">Item 1</a></li>
  <li><a href="#">Item 2</a>
    <ul>
      <li><a href="#">Item 2-1</a></li>
      <li><a href="#">Item 2-2</a></li>
    </ul>
  </li>
  <li><a href="#">Item 3</a></li>

</ul>



<script>

$(function() {
  $('#main-menu').smartmenus();
});

</script>

