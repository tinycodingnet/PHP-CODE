<?php
function off_canvas() {
echo '<style>
.menu-toggle {
display: none;
}
.off-canvas-menu-display {
position: fixed;
/* change based on where you want it: now set to top right */
top: 10px;
right: 10px;
font-size: 24px;
cursor: pointer;
z-index: 1000;
}
.right-menu {
position: fixed;
top: 0;
/* the setting of the width and height is up to you */
right: -100%;
width: 80%;
height: 100%;
background-color: #333;
color: white;
transition: right 0.3s ease;
padding: 20px;
box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
}
.menu-toggle:checked + .off-canvas-menu-display + .right-menu {
right: 0;
}
.close-button {
display: block;
margin-bottom: 20px;
cursor: pointer;
color: white;
font-size: 18px;
}
.right-menu a {
display: block;
color: white;
text-decoration: none;
margin: 10px 0;
}
.right-menu a:hover {
text-decoration: underline;
}
</style>';
echo '<input type="checkbox" id="menuToggle" class="menu-toggle">';
echo '<label for="menuToggle" class="off-canvas-menu-display">&#9776;</label>';
echo '<div class="right-menu" id="rightMenu">';
echo '<label for="menuToggle" class="close-button">CLOSE MENU &times;</label>';
  // these links can be hardcoded as below, or you can run a foreach loop, or whatever..
echo '<a href="#" class="" target="">Link 1</a>';
echo '<a href="#" class="" target="">Link 2</a>';
echo '<a href="#" class="" target="">Link 3</a>';
echo '</div>';
}
// run the function
off_canvas();
?>
